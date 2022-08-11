@extends('layouts.admin')
@section('title')
{{$publication->title}} | A Premium Media Company
@endsection
@section('admin-contents')

@if (session('status'))
<div class="alert alert-success" role="alert">
    {{ session('status') }}
    <a href="" class="close">&times;</a>
</div>
@elseif (session('warning'))
<div class="alert alert-danger" role="alert">
    {{ session('warning') }}
    <a href="" class="close">&times;</a>
</div>
@endif


<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <h1 class="h3 mb-2 text-gray-800">{{$publication->title}}</h1>

    <!-- DataTales Example -->
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">
                Edit {{$publication->title}}
            </h6>
        </div>
        <div class="card-body">
            <form class="user" action="{{url('/update-publication/'.$publication->slug)}}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="col-12 mb-3 mb-sm-0">
                    <label for="title" class="text-primary"> <b>Title <span class="text-danger">*</span></b> </label>
                    <input type="text" name="title" class="form-control @error('title') is-invalid @enderror" id="title"
                        value="{{$publication->title}}">
                    <span class="text-danger">
                        @error('title')
                            <p class="text-danger">{{$message}}</p> 
                        @enderror
                    </span>
                    <br>
                </div>
                <div class="col-12">
                    <label for="description_top" class="text-primary"> <b>Top Description <span class="text-danger">*</span></b> </label>
                    <textarea name="description_top" rows="2" id="textarea"
                        class="form-control text-left @error('description_top') is-invalid @enderror">
                        {!!$publication->description_top!!}
                    </textarea>
                    @error('description_top')
                        <p class="text-danger">{{$message}}</p> 
                    @enderror
                    <br>
                </div>
                <div class="col-12">
                    <label for="description_bottom" class="text-primary"> <b>Bottom Description</b> </label>
                    <textarea name="description_bottom" rows="2" id="textarea_two"
                        class="form-control text-left">
                        {!!$publication->description_bottom!!}
                    </textarea>
                    <br>
                </div>
                <div class="col-12 mb-3 mb-sm-0">
                    <label for="youtube_video" class="text-primary"> <b>Youtube Video</b> </label>
                    <input type="text" name="youtube_video" class="form-control" id="youtube_video"
                        value="{{$publication->youtube_video}}">
                    <br>
                </div>
                <div class="col-12 mb-3 mb-sm-0">
                    <label for="slug" class="text-primary"> <b>Slug</b> </label>
                    <input type="text" name="slug" class="form-control @error('slug') is-invalid @enderror" id="slug"
                    value="{!!$publication->slug!!}">
                    @error('slug')
                        <p class="text-danger">{{$message}}</p> 
                    @enderror    
                    <br>
                </div>
                <div class="col-12 mb-3 mb-sm-0">
                    <label for="image" class="text-primary"> <b>Image</b> <span class="text-danger">*</span> 
                        <small>[Use Image of Size 800*800px]</small> 
                    </label>
                    <input type="file" name="image" class="form-control" id="image" accept="image/*">
                    <br>
                    <img src="/uploads/publication_images/{{$publication->image}}" alt="" height="350px" width="auto" style="border: 5px solid #113476; border-radius: 15px; margin-bottom: 25px;">
                    <br>
                </div>
                <div class="col-12 mb-3 mb-sm-0">
                    <button type="submit" class="btn btn-primary">Save</button>
                </div>
            </form>
        </div>
    </div>
</div>
<!-- /.container-fluid -->


@endsection
