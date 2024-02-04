<?php

namespace App\Http\Controllers;
use App\Models\leader;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

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

    // ...
}
