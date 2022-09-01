<?php

namespace App\Http\Controllers;

use App\Models\Publication;
use Illuminate\Http\Request;
use Intervention\Image\Facades\Image;

class PublicationsController extends Controller
{
    public function index(){
        $publications = Publication::all();
        return view('admin.publications.index', compact('publications'));
    }

    public function add_publication(Request $request){
        $this->validate($request, array(
            'title'=>'required',
            'image'=>'required',
            'description_top'=>'required',
            'description_bottom'=>'max:255',
            'youtube_video'=>'max:255',
            'slug'=>'required'
        ));
        $publication = new Publication;
        $publication->title = $request->input('title');
        $publication->description_top = $request->input('description_top');
        $publication->description_bottom = $request->input('description_bottom');
        $publication->youtube_video = $request->input('youtube_video');
        $publication->link = $request->input('link');
        $publication->slug = $request->input('slug');
        if($request->hasFile('image')){
            $avatar = $request->file('image');
            $filename = time().'.'.$avatar->getClientOriginalExtension();
            Image::make($avatar)->save(public_path('/uploads/publication_images/' . $filename));
            $publication->image = $filename;
            // $publication->save();    
        }
        if ($request->hasFile('pdf')) {
            $pdf = $request->file('pdf');
            $pdffile = time().'_'.$pdf->getClientOriginalName();
            $request->file('pdf')->move('uploads/publication_pdf/', $pdffile);
            $publication->pdf = $pdffile;
        }
        $publication->save();
        return redirect()->back()->with('status', 'Publications Added Successfully'); 
    }


    public function edit_publication($slug){
        $publication = Publication::where('slug', $slug)->first();
        return view('admin.publications.edit', compact('publication'));
    }


    public function update_publication(Request $request, $slug){
        // $this->validate($request, array(
        //     'title'=>'required',
        //     'image'=>'required',
        //     'description_top'=>'required',
        //     'description_bottom'=>'max:255',
        //     'youtube_video'=>'max:255',
        //     'slug'=>'required'
        // ));
        $publication = Publication::where('slug', $slug)->first();
        $publication->title = $request->input('title');
        $publication->description_top = $request->input('description_top');
        $publication->description_bottom = $request->input('description_bottom');
        $publication->youtube_video = $request->input('youtube_video');
        $publication->link = $request->input('link');
        $publication->slug = $request->input('slug');
        if($request->hasFile('image')){
            $avatar = $request->file('image');
            $filename = time().'.'.$avatar->getClientOriginalExtension();
            Image::make($avatar)->save(public_path('/uploads/publication_images/' . $filename));
            $publication->image = $filename;
            // $publication->save();
        }
        if ($request->hasFile('pdf')) {
            $pdf = $request->file('pdf');
            $pdffile = time().'_'.$pdf->getClientOriginalName();
            $request->file('pdf')->move('uploads/publication_pdf/', $pdffile);
            $publication->pdf = $pdffile;
        }
        $publication->update();
        return redirect('/admin-publications')->with('status', 'Publications Updated Successfully'); 
    }

    public function delete_publication($slug){
        $publication = Publication::where('slug', $slug)->first();
        $publication->delete();
        return redirect()->back()->with('warning', 'Publication Deleted Successfully'); 
    }
}
