@extends('layouts.admin')
@section('title')
{{$digital->title}} | A Premium Media Company
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
    <h1 class="h3 mb-2 text-gray-800">{{$digital->title}}</h1>

    <!-- DataTales Example -->
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">
                Edit {{$digital->title}}
            </h6>
        </div>
        <div class="card-body">
            <form class="user" action="{{url('/update-digital/'.$digital->slug)}}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="row">
                    <div class="col-lg-12 col-md-12 col-sm-12 mb-3 mb-sm-0">
                        <label for="title" class="text-primary"> <b>Title <span class="text-danger">*</span></b> </label>
                        <input type="text" name="title" class="form-control @error('title') is-invalid @enderror" id="title"
                            value="{{$digital->title}}">
                        <span class="text-danger">
                            @error('title')
                                <p class="text-danger">{{$message}}</p> 
                            @enderror
                        </span>
                        <br>
                    </div>
                    <div class="col-lg-6 col-md-6 col-sm-12 mb-3 mb-sm-0">
                        <label for="link" class="text-primary"> <b>Link</b> </label>
                        <input type="text" name="link" class="form-control" id="link"
                            value="{{$digital->link}}">
                        <br>
                    </div>
                    <div class="col-lg-6 col-md-6 col-sm-12 mb-3 mb-sm-0">
                        <label for="slug" class="text-primary"> <b>Slug</b> </label>
                        <input type="text" name="slug" class="form-control @error('slug') is-invalid @enderror" id="slug"
                        value="{!!$digital->slug!!}">
                        @error('slug')
                            <p class="text-danger">{{$message}}</p> 
                        @enderror    
                        <br>
                    </div>
                    <div class="col-lg-4 col-md-4 col-sm-12">
                        <label for="description" class="text-primary"> <b>Description <span class="text-danger">*</span></b> </label>
                        <textarea name="description" rows="2" id="textarea"
                            class="form-control text-left @error('description') is-invalid @enderror">
                            {!!$digital->description!!}
                        </textarea>
                        @error('description')
                            <p class="text-danger">{{$message}}</p> 
                        @enderror
                        <br>
                    </div>
                    <div class="col-lg-4 col-md-4 col-sm-12 mb-3 mb-sm-0">
                        <label for="image" class="text-primary"> <b>Image</b> <span class="text-danger">*</span> 
                            <small>[Use Image of Size 800*800px]</small> 
                        </label>
                        <input type="file" name="image" class="form-control" id="image" accept="image/*">
                        <br>
                        <img src="/uploads/digital_images/{{$digital->image}}" alt="" height="350px" width="auto" style="border: 5px solid #113476; border-radius: 15px; margin-bottom: 25px;">
                        <br>
                    </div>
                    <div class="col-lg-4 col-md-4 col-sm-12 mb-3 mb-sm-0">
                        <label for="pdf" class="text-primary"> <b>Docs</b> 
                        </label>
                        <input type="file" name="pdf" class="form-control" id="pdf">
                        <br>
                        {{-- <img src="/uploads/digital_images/{{$digital->image}}" alt="" height="350px" width="auto" style="border: 5px solid #113476; border-radius: 15px; margin-bottom: 25px;"> --}}
                        <embed src="/uploads/digital_pdf/{{$digital->pdf}}" style="height:30vh; width:100%; border: 5px solid #113476; border-radius: 15px; margin-bottom: 25px;" />
                        <br>
                    </div>
                    <div class="col-lg-6 col-md-6 col-sm-12 mb-3 mb-sm-0">
                        <button type="submit" class="btn btn-primary">Save</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>
<!-- /.container-fluid -->


@endsection
