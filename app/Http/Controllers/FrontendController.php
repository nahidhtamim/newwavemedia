<?php

namespace App\Http\Controllers;

use App\Models\Digital;
use App\Models\Publication;
use Illuminate\Http\Request;

class FrontendController extends Controller
{
    public function index(){
        $publications = Publication::all();
        $digitals = Digital::all();
        return view('frontend.index', compact('publications', 'digitals'));
    }

    public function about(){
        return view('frontend.about');
    }

    public function contact(){
        return view('frontend.contact');
    }

    public function print(){
        $publications = Publication::all();
        return view('frontend.print-publications', compact('publications'));
    }

    public function digital(){
        return view('frontend.digital-overview');
    }

    public function publication($slug){
        $publication = Publication::where('slug', $slug)->first();
        return view('frontend.publication', compact('publication'));
    }
}
