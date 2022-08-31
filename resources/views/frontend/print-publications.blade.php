@extends('layouts.front')
@section('title')
Print Publications | A Premium Media Company
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
   <div id="work_banner" class="banner-wrapper bg-light w-100 py-5" data-aos="fade-in" data-aos-duration="2000">
      <div class="banner-vertical-center-work container text-light d-flex justify-content-center align-items-center py-5 p-0">
          <div class="banner-content col-lg-8 col-12 m-lg-auto text-center">
              <h1 class="banner-heading h2 display-3 pb-5 semi-bold-600 typo-space-line-center">Print Publications</h1>
              <h3 class="h4 pb-2 regular-400">Only New Wave Media has the largest audience</h3>
              <p class="banner-body pb-2 light-300">
                New Wave Media’s diverse range of publications reach more B2B buyers and specifiers in the Commercial Maritime, Shallow Draft Workboat,Underwater Science, and Offshore Energy Industries than any other publications.
              </p>
              <button type="button" class="btn rounded-pill btn-primary text-light px-4 light-300" href="{{url('/contact')}}">Contact Us</button>
          </div>
      </div>
  </div>
  <!-- End Banner Hero -->

  <!-- Start Our Work -->
  <section class="container py-5" data-aos="zoom-in-left" data-aos-duration="2000">
      {{-- <div class="row justify-content-center my-5">
          <div class="filter-btns shadow-md rounded-pill text-center col-auto">
              <a class="filter-btn btn rounded-pill btn-outline-primary border-0 m-md-2 px-md-4 active" data-filter=".service" href="#">All</a>
              <a class="filter-btn btn rounded-pill btn-outline-primary border-0 m-md-2 px-md-4" data-filter=".maritime" href="#">Maritime Reporter</a>
              <a class="filter-btn btn rounded-pill btn-outline-primary border-0 m-md-2 px-md-4" data-filter=".news" href="#">Marine News</a>
              <a class="filter-btn btn rounded-pill btn-outline-primary border-0 m-md-2 px-md-4" data-filter=".offshore" href="#">Offshore Engineer</a>
              <a class="filter-btn btn rounded-pill btn-outline-primary border-0 m-md-2 px-md-4" data-filter=".marine" href="#">Marine Technology Reporter</a>
          </div>
      </div> --}}

      <div class="row services gx-lg-5 text-center">
        @foreach ($publications as $publication)
          <a href="{{url('/publication/'.$publication->slug)}}" class="col-sm-6 col-lg-3 text-decoration-none service maritime py-2">
              <div class="service-work overflow-hidden card mb-5 mx-5 m-sm-0">
                  <img class="card-img-top" src="{{asset('/uploads/publication_images/'.$publication->image)}}" alt="...">
                  <div class="card-body">
                      <h5 class="card-title light-300 text-dark">
                        {{$publication->title}}
                       </h5>
                      <p class="card-text light-300 text-dark">
                        {!! Str::words($publication->description_top, 1, ' ...') !!}
                      </p>
                      <span class="text-decoration-none text-primary light-300">
                            Read more <i class='bx bxs-hand-right ms-1'></i>
                        </span>
                  </div>
              </div>
          </a>
          @endforeach

      </div>
  </section>
  <!-- End Our Work -->

@endsection