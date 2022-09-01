@extends('layouts.front')
@section('title')
{{$publication->title}} | A Premium Media Company
@endsection
@section('contents')

@if (session('status'))
   <div class="alert alert-success" role="alert">
        {{ session('status') }}
        <a class="close">&times;</a>
   </div>
@elseif (session('warning'))
   <div class="alert alert-danger" role="alert">
        {{ session('warning') }}
        <a class="close">&times;</a>
   </div>    
@endif


    <!-- Start Banner Hero -->
    <div id="work_single_banner" class="bg-light w-100">
        <div class="container-fluid text-light d-flex justify-content-center align-items-center border-0 rounded-0 p-0 py-5">
            <div class="banner-content col-lg-8 m-lg-auto text-center py-5 px-3">
                <h1 class="banner-heading h2 pb-5 typo-space-line-center">{{$publication->title}}</h1>
                {{-- <h3 class="h4 pb-2 light-300">Voluptatem accusantium doloremque</h3>
                <p class="banner-footer light-300">
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit,
                    sed do eiusmod tempor incididunt ut labore et dolore magna
                    aliqua. Integer ut ipsum eu libero venenatis euismod.
                </p> --}}
            </div>
        </div>
    </div>
    <!-- End Banner Hero -->

    <!-- Start Work Sigle -->
    <section class="container py-5" data-aos="zoom-in" data-aos-duration="2000">

        <div class="row pt-5">
            <div class="worksingle-content col-lg-8 m-auto text-left justify-content-center">
                <h2 class="worksingle-heading h3 pb-3 light-300 typo-space-line">{{$publication->title}}</h2>
                <p class="worksingle-footer py-3 text-muted light-300">
                    {{$publication->description_top}}
                </p>
            </div>
        </div><!-- End Blog Cover -->

        <div class="row justify-content-center pb-4">
            <div class="col-lg-8">
                <div id="templatemo-slide-link-target" class="card mb-3">
                    <img class="img border rounded" src="{{asset('/uploads/publication_images/'.$publication->image)}}" alt="{{$publication->title}}">
                </div>
            </div>
        </div><!-- End Slider -->

        <div class="row">
            <div class="col-md-8 m-auto text-left justify-content-center">
                <p class="pt-5 text-muted light-300">
                    {{$publication->description_bottom}}
                </p>
            </div>
        </div><!-- End Paragrph -->



        <div class="row justify-content-center">
            <div class="col-lg-8 pt-4 pb-4">
                <div class="ratio ratio-16x9">
                    {!!$publication->youtube_video!!}
                </div>
            </div>
        </div><!-- End Video -->
    </section>
    <!-- End Work Sigle -->
    <div class="text-center py-5" role="group" aria-label="First group">
        <a class="btn btn-secondary rounded-pill btn-block shadow px-4 py-2 text-white" href="{{$publication->link}}">Read Latest Edition</a>
        <a class="btn btn-primary rounded-pill btn-block shadow px-4 py-2 text-white" href="/uploads/publication_pdf/{{$publication->pdf}}">Download Media Kit</a>
    </div>

@endsection