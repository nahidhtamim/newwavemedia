<?php

namespace App\Http\Controllers;

use App\Models\Slider;
use Illuminate\Http\Request;
use Intervention\Image\Facades\Image;

class SliderController extends Controller
{

    public function index(){
        $sliders = Slider::all();
        return view('admin.sliders.index', compact('sliders'));
    }

    public function add_slider(Request $request){
        $this->validate($request, array(
            'title'=>'required',
            'image'=>'required',
        ));
        $slider = new Slider();
        $slider->title = $request->input('title');
        $slider->bottom_text = $request->input('bottom_text');
        $slider->link = $request->input('link');

        $slug = strtolower($request->input('title'));
        $replaced_slug = str_replace(' ', '_', $slug);
        $slider->slug = $replaced_slug;
        
        if($request->hasFile('image')){
            $avatar = $request->file('image');
            $filename = time().'.'.$avatar->getClientOriginalExtension();
            Image::make($avatar)->save(public_path('/uploads/sliders/' . $filename));
            $slider->image = $filename;
        }
        $slider->save();
        return redirect()->back()->with('status', 'Slider Added Successfully'); 
    }


    public function edit_slider($slug){
        $slider = Slider::where('slug', $slug)->first();
        return view('admin.sliders.edit', compact('slider'));
    }


    public function update_slider(Request $request, $slug){
        $slider = slider::where('slug', $slug)->first();
        $slider->title = $request->input('title');
        $slider->bottom_text = $request->input('bottom_text');
        $slider->link = $request->input('link');
        $slug = strtolower($request->input('title'));
        $replaced_slug = str_replace(' ', '_', $slug);
        $slider->slug = $replaced_slug;

        if($request->hasFile('image')){
            $avatar = $request->file('image');
            $filename = time().'.'.$avatar->getClientOriginalExtension();
            Image::make($avatar)->save(public_path('/uploads/sliders/' . $filename));
            $slider->image = $filename;
        }
        $slider->update();
        return redirect('/admin-sliders')->with('status', 'Slider Updated Successfully'); 
    }

    public function delete_slider($slug){
        $slider = slider::where('slug', $slug)->first();
        $slider->delete();
        return redirect()->back()->with('warning', 'Slider Deleted Successfully'); 
    }
}
