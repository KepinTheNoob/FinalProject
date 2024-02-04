<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Leader; 
class dashboard extends Controller
{
    //
    public function DashboardUser() {
        $leader = Leader::all();
        return view('userdashboard', ['leader' => $leader]);
    }
}
