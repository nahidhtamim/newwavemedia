<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FrontendController extends Controller
{
    public function index(){
        return view('frontend.index');
    }

    public function about(){
        return view('frontend.about');
    }

    public function contact(){
        return view('frontend.contact');
    }

    public function print(){
        return view('frontend.print-publications');
    }

    public function digital(){
        return view('frontend.digital-overview');
    }

    public function publication(){
        return view('frontend.publication');
    }
}
