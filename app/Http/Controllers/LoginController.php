<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\leader;

class LoginController extends Controller
{
    public function login(){
        return view("auth.login");
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
                return redirect('user-dashboard');
            } else{
                return back()->with('fail', 'Password not match.');
            }
        } else{
            return back()->with('fail', 'This email is not registered');
        }
    }
    public function logout(){
        // if(Session::has('loginId')){
        //     Session::pull('loginId');
            return redirect('login');
        // }
    }
}
