@extends('layouts.admin')
@section('title')
{{$slider->title}} | A Premium Media Company
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
    <h1 class="h3 mb-2 text-gray-800">{{$slider->title}}</h1>

    <!-- DataTales Example -->
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">
                Edit {{$slider->title}}
            </h6>
        </div>
        <div class="card-body">
            <form class="user" action="{{url('/update-slider/'.$slider->slug)}}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="col-12 mb-3 mb-sm-0">
                    <label for="title" class="text-primary"> <b>Title <span class="text-danger">*</span></b> </label>
                    <input type="text" name="title" class="form-control @error('title') is-invalid @enderror" id="title"
                        value="{{$slider->title}}">
                    <span class="text-danger">
                        @error('title')
                            <p class="text-danger">{{$message}}</p> 
                        @enderror
                    </span>
                    <br>
                </div>
                <div class="col-12">
                    <label for="bottom_text" class="text-primary"> <b>Description <span class="text-danger">*</span></b> </label>
                    <textarea name="bottom_text" rows="2" id="textarea"
                        class="form-control text-left @error('bottom_text') is-invalid @enderror">
                        {!!$slider->bottom_text!!}
                    </textarea>
                    @error('bottom_text')
                        <p class="text-danger">{{$message}}</p> 
                    @enderror
                    <br>
                </div>
                <div class="col-12 mb-3 mb-sm-0">
                    <label for="link" class="text-primary"> <b>Link</b> </label>
                    <input type="text" name="link" class="form-control" id="link"
                        value="{{$slider->link}}">
                    <br>
                </div>
                <div class="col-12 mb-3 mb-sm-0">
                    <label for="image" class="text-primary"> <b>Image</b> <span class="text-danger">*</span> 
                        <small>[Use Image of Size 800*800px]</small> 
                    </label>
                    <input type="file" name="image" class="form-control" id="image" accept="image/*">
                    <br>
                    <img src="/uploads/sliders/{{$slider->image}}" alt="" height="350px" width="auto" style="border: 5px solid #113476; border-radius: 15px; margin-bottom: 25px;">
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
