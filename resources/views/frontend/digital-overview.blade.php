@extends('layouts.front')
@section('title')
Digital Overview | A Premium Media Company
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
              <h1 class="banner-heading h2 display-3 pb-5 semi-bold-600 typo-space-line-center">Digital Media</h1>
              {{-- <h3 class="h4 pb-2 regular-400">Elit, sed do eiusmod tempor incididunt</h3>
              <p class="banner-body pb-2 light-300">
                  Vector illustration <a class="text-white" href="http://freepik.com/" target="_blank">Freepik</a>. Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Quis ipsum
                  suspendisse ultrices gravida. Risus commodo viverra maecenas accumsan lacus.
              </p> --}}
              <button type="button" class="btn rounded-pill btn-primary text-light px-4 light-300" href="{{url('/contact')}}">Contact Us</button>
          </div>
      </div>
  </div>
  <!-- End Banner Hero -->

  <!-- Start Recent Work -->
  <section class="py-5 mb-5" data-aos="zoom-in" data-aos-duration="2000">
   <div class="container">
       <div class="row gy-5 g-lg-5 mb-4">

           <!-- Start Recent Work -->
           @foreach ($digitals as $digital)
           <div class="col-md-4 mb-3">
               <a href="{{url('/digital/'.$digital->slug)}}" class="recent-work card border-0 shadow-lg overflow-hidden">
                   <img class="recent-work-img card-img" src="{{asset('/uploads/digital_images/'.$digital->image)}}" alt="Card image">
                   <div class="recent-work-vertical card-img-overlay d-flex align-items-end">
                       <div class="recent-work-content mb-3 ml-3">
                           {{-- <h3 class="card-title">{{$digital->title}}</h3> --}}
                           {{-- <p class="card-text">{!!$digital->description!!}</p> --}}
                       </div>
                   </div>
               </a>
           </div>
           <!-- End Recent Work -->
           @endforeach
       </div>
   </div>
</section>
<!-- End Recent Work -->



@endsection