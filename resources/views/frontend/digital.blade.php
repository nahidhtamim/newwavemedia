@extends('layouts.front')
@section('title')
{{$digital->title}} | A Premium Media Company
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
                <h1 class="banner-heading h2 pb-5 typo-space-line-center">{{$digital->title}}</h1>
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
                <h2 class="worksingle-heading h3 pb-3 light-300 typo-space-line">{{$digital->title}}</h2>
                <p class="worksingle-footer py-3 text-muted light-300">
                    {!!$digital->description!!}
                </p>
            </div>
        </div><!-- End Blog Cover -->

        <div class="row justify-content-center pb-4">
            <div class="col-lg-8">
                <div id="templatemo-slide-link-target" class="card mb-3">
                    <img class="img border rounded" src="{{asset('/uploads/digital_images/'.$digital->image)}}" alt="Card image cap" alt="{{$digital->title}}">
                </div>
            </div>
        </div><!-- End Slider -->

        <div class="text-center py-5" role="group" aria-label="First group">
            <a class="btn btn-secondary rounded-pill btn-block shadow px-4 py-2 text-white" href="{{$digital->link}}">Visit Website</a>
            @if ($digital->pdf != null)
            <a class="btn btn-primary rounded-pill btn-block shadow px-4 py-2 text-white" href="/uploads/digital_pdf/{{$digital->pdf}}">Download Media Kit</a>
            @else
            <a class="btn btn-primary rounded-pill btn-block shadow px-4 py-2 text-white" href="#">Download Media Kit</a>
            @endif
        </div>
    </section>
    <!-- End Work Sigle -->


@endsection