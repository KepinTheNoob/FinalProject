<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use App\Models\User;

class AuthController extends Controller
{
    public function login(){
        return view("auth.login");
    }
    public function register(){
        return view("auth.register");
    }
    public function registerUser(Request $request){
        $request->validate([
            'name'=>'required',
            'email'=>'required|email|unique:logins',
            'password'=>'required|min:8|confirmed'
        ]);
        $login = new login();
        $login->name = $request->name;
        $login->email = $request->email;
        $login->password = $request->password;
        $res = $login->save();
        if($res){
            return back()->with('success', 'You have register succesfully');
        }
        else{
            return back()->with('fail', 'Something Wrong');
        }
    }
    public function loginUser(Request $request){
        $request->validate([
            'email'=>'required|email',
            'password'=>'required|min:5'
        ]);
        $user = User::where('email', '=', $request->email)->first();
        if($user){
            if(Hash::check($request->password, $user->password)){
                $request->session()->put('loginId', $user->id);
                return redirect('dashboard');
            } else{
                return back()->with('fail', 'Password not match.');
            }
        } else{
            return back()->with('fail', 'This email is not registered');
        }
    }
    public function dashboard(){
        $data = array();
        if(Session::has('loginId')){
            $data = User::where('id', '=', Session::get('loginId'))->first();
        }
        return view('dashboard', compact('data'));
    }
    public function logout(){
        // if(Session::has('loginId')){
        //     Session::pull('loginId');
            return redirect('login');
        // }
    }
}
