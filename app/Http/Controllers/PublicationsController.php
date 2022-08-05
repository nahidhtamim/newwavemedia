<?php

namespace App\Http\Controllers;

use App\Models\Publication;
use App\Models\Publication_Image;
use Illuminate\Http\Request;

class PublicationsController extends Controller
{
    public function index(){
        $publications = Publication::all();
        $publication_images = Publication_Image::all();
        return view('admin.publications.index', compact('publications', 'publication_images'));
    }

    public function add_publication(Request $req){
        $data = $req->validate([
            'title'=>'required',
            'description_top'=>'required',
            'description_bottom'=>'max:255',
            'youtube_video'=>'max:255',
            'slug'=>'required'
        ]);
        $new_publication= Publication::create($data);
        if($req->has('images')){
            foreach($req->file('images')as $image){
                $imageName = $data['title'].'-image-'.time().rand(1,1000).'.'.$image->extension();
                $image->move(public_path('upload/publication_images'),$imageName);
                Publication_Image::create([
                    'publication_id'=>$new_publication->id,
                    'image'=>$imageName
                ]);
            }
        }
        return back()->with('status','Publication Added');
    }

    // public function images($id){
    //     $product = Product::find($id);
    //     if(!$product) abort(404);
    //     $images = $product->images;
    //     return view('images',compact('product','images'));
    // }
}
