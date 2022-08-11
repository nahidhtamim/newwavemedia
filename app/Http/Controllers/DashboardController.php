<?php

namespace App\Http\Controllers;

use App\Models\Digital;
use App\Models\Publication;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index(){
        $publications = Publication::all();
        $digitals = Digital::all();
        return view('admin.dashboard', compact('publications', 'digitals'));
    }
}
