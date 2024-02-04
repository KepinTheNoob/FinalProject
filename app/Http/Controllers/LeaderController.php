<?php

namespace App\Http\Controllers;

use App\Models\Leader;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class LeaderController extends Controller
{
    public function registerGroup(Request $request)
    {
        $request->validate([
            'groupname' => ['required', 'unique:leaders'],
            'password' => ['required', 'min:8'],
        ]);

        Leader::create([
            'groupname' => $request->groupname,
            'password' => bcrypt($request->input('password')),
        ]);

        // Store the group data in the session
        $request->session()->put('groupname', $request->groupname);

        return redirect('/register-leader');
    }

    public function createNewLeader(Request $request)
    {
        $request->validate([
            'fullname' => ['required'],
            'place' => ['required'],
            'date' => ['required'],
            'email' => ['required', 'email'],
            'number' => ['required', 'min:9'],
            'id_line' => ['required'],
            'github' => ['required'],
        ]);

        // Store the input in the session
        $request->session()->put('leader_data', $request->all());

        return redirect('/register-leader2');
    }

    public function createNewLeader2(Request $request)
{
    $request->validate([
        'cv' => ['required', 'file', 'mimes:pdf,jpg,jpeg,png'],
        'id_card' => ['required', 'file', 'mimes:pdf,jpg,jpeg,png'],
    ]);

    $groupname = $request->session()->get('groupname');
    $leaderData = $request->session()->get('leader_data');

    $cvPath = $request->file('cv')->store('cv_files', 'public');
    $idCardPath = $request->file('id_card')->store('id_card_files', 'public');

    // Find the leader record by groupname
    $leader = Leader::where('groupname', $groupname)->first();

    if ($leader) {
        // Update the leader record with CV and ID Card paths and retrieved data
        $leader->update([
            'fullname' => $leaderData['fullname'],
            'place' => $leaderData['place'],
            'date' => $leaderData['date'],
            'email' => $leaderData['email'],
            'number' => $leaderData['number'],
            'id_line' => $leaderData['id_line'],
            'github' => $leaderData['github'],
            'cv' => $cvPath,
            'id_card' => $idCardPath,
            'password' => bcrypt($request->input('password')), 
        ]);

        // Forget the session data after using it
        $request->session()->forget(['groupname', 'leader_data']);

        return redirect('/user-dashboard');
    } else {
        // Handle the case where the leader record with the specified groupname is not found
        return redirect('/error-page')->with('error', 'Leader not found');
    }
}
}