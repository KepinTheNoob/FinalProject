<?php

namespace App\Http\Controllers;
use App\Models\leader;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use Hash;
// use Session;

class LeaderController extends Controller
{
    // ...

    function CreateNewLeader(Request $request)
    {
        $request->validate([
            'fullname' => ['required'],
            'place' => ['required'],
            'date' => ['required'],
            'email' => ['required', 'email'],
            'number' => ['required'],
            'id_line' => ['required'],
            'github' => ['required'],
        ]);

        // Store the input in the session
        $request->session()->put('leader_data', $request->all());

        return redirect('/register-leader2');
    }

    public function CreateNewLeader2(Request $request)
    {
        $request->validate([
            'cv' => ['required', 'file', 'mimes:pdf,doc,docx'],
            'id_card' => ['required', 'file', 'mimes:jpeg,png,pdf'],
        ]);

        // Retrieve the stored data from the session
        $leaderData = $request->session()->get('leader_data');

        // Handle file uploads for CV and ID Card
        $cvPath = $request->file('cv')->store('cv_files', 'public');
        $idCardPath = $request->file('id_card')->store('id_card_files', 'public');

        // Update the leader record with CV and ID Card paths and retrieved data
        Leader::create([
            'fullname' => $leaderData['fullname'],
            'place' => $leaderData['place'],
            'date' => $leaderData['date'],
            'email' => $leaderData['email'],
            'number' => $leaderData['number'],
            'id_line' => $leaderData['id_line'],
            'github' => $leaderData['github'],
            'cv' => $cvPath,
            'id_card' => $idCardPath,
        ]);

        // Forget the session data after using it
        $request->session()->forget('leader_data');

        return redirect('/success-page');
    }

    public function login(){
        return view("login");
    }
    public function loginUser(Request $request){
        $request->validate([
            'email'=>'required|email',
            'password'=>'required|min:5'
        ]);
        $user = leader::where('email', '=', $request->email)->first();
        if($user){
            if(Hash::check($request->password, $user->password)){
                $request->session()->put('loginId', $user->id);
                return redirect()->route('user-dashboard');
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

    // ...
}
