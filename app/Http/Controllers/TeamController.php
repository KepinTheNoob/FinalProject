<?php

namespace App\Http\Controllers;

use App\Models\team;
use Illuminate\Http\Request;
use Illuminate\View\View;
use Alert;

class teamController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function detail(string $id): View
    {
        //get post by ID
        $team = Team::findOrFail($id);

        //render view with post
        return view('team.detail', compact('team'));
    }

    public function index()
    {
        $team = team::all();

        $title = 'Delete Data!';
        $text = "Are you sure you want to delete?";
        confirmDelete($title, $text);
          
        return view('team.index', compact('team'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('team.form');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // Step 1: Validate the incoming data
        $validatedData = $request->validate([
            'team_name' => 'required|string|max:255',
            'name_leader' => 'required|string|max:255',
            'profile_leader' => 'required|string|max:255',
            'name_member' => 'required|string|max:255',
            'profile_member' => 'required|string|max:255',
        ]);

        // Step 2: Create a new team instance and fill it with the validated data
        $result = team::create($validatedData);

        if($result) {
            Alert::success('Success', 'You\'ve Successfully Created');
        } else {
            Alert::error('Failed', 'You\'ve Failed Created');
        }

        // Step 4: Redirect the user to a specific route or page
        return redirect()->route('team.index')->with('success', 'team created successfully!');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(team $team)
    {
        return view('team.form', compact('team'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, team $team)
    {
        // Step 1: Validate the incoming data
        $validatedData = $request->validate([
            'team_name' => 'required|string|max:255',
            'name_leader' => 'required|string|max:255',
            'profile_leader' => 'required|string|max:255',
            'name_member' => 'required|string|max:255',
            'profile_member' => 'required|string|max:255',
        ]);

        // Step 2: Create a new team instance and fill it with the validated data
        $result = $team->update($validatedData);

        if($result) {
            Alert::success('Success', 'You\'ve Successfully Updated');
        } else {
            Alert::error('Failed', 'You\'ve Failed Updated');
        }

        return redirect()->route('team.index')->with('success', 'team updated successfully!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(team $team)
    {
        $result = $team->delete();

        if($result) {
            Alert::success('Success', 'You\'ve Successfully Deleted');
        } else {
            Alert::error('Failed', 'You\'ve Failed Deleted');
        }

        return redirect()->route('team.index')->with('success', 'team deleted successfully!');
    }

 

}
