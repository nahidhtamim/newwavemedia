<?php

namespace App\Http\Controllers;

use App\Models\Digital;
use Illuminate\Http\Request;
use Intervention\Image\Facades\Image;

class DigitalsController extends Controller
{
    public function index(){
        $digitals = Digital::all();
        return view('admin.digitals.index', compact('digitals'));
    }

    public function add_digital(Request $request){
        $this->validate($request, array(
            'title'=>'required',
            'image'=>'required',
            'description'=>'required',
            'link'=>'max:255',
            'slug'=>'required'
        ));
        $digital = new Digital;
        $digital->title = $request->input('title');
        $digital->description = $request->input('description');
        $digital->link = $request->input('link');
        $digital->slug = $request->input('slug');
        if($request->hasFile('image')){
            $avatar = $request->file('image');
            $filename = time().'.'.$avatar->getClientOriginalExtension();
            Image::make($avatar)->save(public_path('/uploads/digital_images/' . $filename));
            $digital->image = $filename;
            // $digital->save();
        }
        if ($request->hasFile('pdf')) {
            $pdf = $request->file('pdf');
            $pdffile = time().'_'.$pdf->getClientOriginalName();
            $request->file('pdf')->move('uploads/digital_pdf/', $pdffile);
            $digital->pdf = $pdffile;
        }
        $digital->save();
        return redirect()->back()->with('status', 'Digital Added Successfully'); 
    }


    public function edit_digital($slug){
        $digital = Digital::where('slug', $slug)->first();
        return view('admin.digitals.edit', compact('digital'));
    }


    public function update_digital(Request $request, $slug){
        $digital = Digital::where('slug', $slug)->first();
        $digital->title = $request->input('title');
        $digital->description = $request->input('description');
        $digital->link = $request->input('link');
        $digital->slug = $request->input('slug');
        if($request->hasFile('image')){
            $avatar = $request->file('image');
            $filename = time().'.'.$avatar->getClientOriginalExtension();
            Image::make($avatar)->save(public_path('/uploads/digital_images/' . $filename));
            $digital->image = $filename;
            // $digital->save();
        }
        if ($request->hasFile('pdf')) {
            $pdf = $request->file('pdf');
            $pdffile = time().'_'.$pdf->getClientOriginalName();
            $request->file('pdf')->move('uploads/digital_pdf/', $pdffile);
            $digital->pdf = $pdffile;
        }
        $digital->update();
        return redirect('/admin-digitals')->with('status', 'Digital Updated Successfully'); 
    }

    public function delete_digital($slug){
        $digital = Digital::where('slug', $slug)->first();
        $digital->delete();
        return redirect()->back()->with('warning', 'Digital Deleted Successfully'); 
    }
}
