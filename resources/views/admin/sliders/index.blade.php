@extends('layouts.admin')
@section('title')
Dashboard | A Premium Media Company
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
    <h1 class="h3 mb-2 text-gray-800">Sliders</h1>

    <!-- DataTales Example -->
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">
                Sliders List
                <button type="button" class="btn btn-success" data-toggle="modal" data-target="#exampleModal">
                    Add
                </button>
            </h6>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead class="text-center">
                        <tr>
                            <th>SL.</th>
                            <th>Title</th>
                            <th>Image</th>
                            <th>Description</th>
                            <th>link</th>
                            <th>Slug</th>
                            <th>Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        @php $i=1; @endphp
                        @forelse ($sliders as $slider)
                            <tr>
                                <td>{{$i++;}}</td>
                                <td>{{$slider->title}}</td>
                                <td><img src="/uploads/sliders/{{$slider->image}}" alt="" height="150px"></td>
                                <td>{!!$slider->bottom_text!!}</td>
                                <td>{!!$slider->link!!}</td>
                                <td>{{$slider->slug}}</td>
                                <td>
                                    <div class="btn-group">
                                        <a href="{{url('/edit-slider/'.$slider->slug)}}" class="btn btn-primary">Edit</a>
                                        <a href="{{url('/delete-slider/'.$slider->slug)}}" class="btn btn-danger">Delete</a>
                                    </div>
                                </td>
                            </tr>
                        @empty
                            <tr>
                                <td colspan="5" class="text-center">No sliders yet!</td>
                            </tr>
                        @endforelse
                    </tbody>
                </table>
            </div>
        </div>
        <!-- Modal -->
        <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
            aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Add Slider</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <form class="user" action="{{url('/add-slider')}}" method="POST" enctype="multipart/form-data">
                            @csrf
                            <div class="col-12 mb-3 mb-sm-0">
                                <label for="title" class="text-primary"> <b>Title <span class="text-danger">*</span></b> </label>
                                <input type="text" name="title" class="form-control @error('title') is-invalid @enderror" id="title"
                                    placeholder="slider Title">
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
                                    Description
                                </textarea>
                                @error('bottom_text')
                                    <p class="text-danger">{{$message}}</p> 
                                @enderror
                                <br>
                            </div>
                            <div class="col-12 mb-3 mb-sm-0">
                                <label for="link" class="text-primary"> <b>Website Link</b> </label>
                                <input type="text" name="link" class="form-control" id="link"
                                    placeholder="Website Link">
                                <br>
                            </div>
                            <div class="col-12 mb-3 mb-sm-0">
                                <label for="image" class="text-primary"> <b>Image</b> <span class="text-danger">*</span> 
                                    <small>[Use Image of Size 1920*800px]</small> 
                                </label>
                                <input type="file" name="image" class="form-control" id="image" accept="image/*">
                                <br>
                            </div>
                            <div class="col-12 mb-3 mb-sm-0">
                                <button type="submit" class="btn btn-primary">Save</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- /.container-fluid -->


@endsection
