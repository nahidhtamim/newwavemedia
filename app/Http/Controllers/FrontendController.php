<?php

namespace App\Http\Controllers;

use App\Models\Digital;
use App\Models\Publication;
use Illuminate\Http\Request;

class FrontendController extends Controller
{
    public function index(){
        $publications = Publication::all();
        $digitals = Digital::get()->take(3);
        return view('frontend.index', compact('publications', 'digitals'));
    }

    public function about(){
        return view('frontend.about');
    }

    public function contact(){
        return view('frontend.contact');
    }

    public function prints(){
        $publications = Publication::all();
        return view('frontend.print-publications', compact('publications'));
    }

    public function digitals(){
        $digitals = Digital::all();
        return view('frontend.digital-overview', compact('digitals'));
    }

    public function publication($slug){
        $publication = Publication::where('slug', $slug)->first();
        return view('frontend.publication', compact('publication'));
    }

    public function digital($slug){
        $digital = Digital::where('slug', $slug)->first();
        return view('frontend.digital', compact('digital'));
    }
}
