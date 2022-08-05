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
   <div id="work_banner" class="banner-wrapper bg-light w-100 py-5">
      <div class="banner-vertical-center-work container text-light d-flex justify-content-center align-items-center py-5 p-0">
          <div class="banner-content col-lg-8 col-12 m-lg-auto text-center">
              <h1 class="banner-heading h2 display-3 pb-5 semi-bold-600 typo-space-line-center">Our Concerns</h1>
              <h3 class="h4 pb-2 regular-400">Elit, sed do eiusmod tempor incididunt</h3>
              <p class="banner-body pb-2 light-300">
                  Vector illustration <a class="text-white" href="http://freepik.com/" target="_blank">Freepik</a>. Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Quis ipsum
                  suspendisse ultrices gravida. Risus commodo viverra maecenas accumsan lacus.
              </p>
              <button type="submit" class="btn rounded-pill btn-outline-light px-4 me-4 light-300">Learn More</button>
              <button type="submit" class="btn rounded-pill btn-secondary text-light px-4 light-300">Contact Us</button>
          </div>
      </div>
  </div>
  <!-- End Banner Hero -->

  <!-- Start Recent Work -->
  <section class="py-5 mb-5">
   <div class="container">
       <div class="row gy-5 g-lg-5 mb-4">

           <!-- Start Recent Work -->
           <div class="col-md-4 mb-3">
               <a href="#" class="recent-work card border-0 shadow-lg overflow-hidden">
                   <img class="recent-work-img card-img" src="{{asset('frontend/img/recent-work-01.jpg')}}" alt="Card image">
                   <div class="recent-work-vertical card-img-overlay d-flex align-items-end">
                       <div class="recent-work-content text-start mb-3 ml-3 text-dark">
                           <h3 class="card-title light-300">Marine Link</h3>
                           <p class="card-text">Ullamco laboris nisi ut aliquip ex</p>
                       </div>
                   </div>
               </a>
           </div><!-- End Recent Work -->

           <!-- Start Recent Work -->
           <div class="col-md-4 mb-3">
               <a href="#" class="recent-work card border-0 shadow-lg overflow-hidden">
                   <img class="recent-work-img card-img" src="{{asset('frontend/img/recent-work-02.jpg')}}" alt="Card image">
                   <div class="recent-work-vertical card-img-overlay d-flex align-items-end">
                       <div class="recent-work-content text-start mb-3 ml-3 text-dark">
                           <h3 class="card-title light-300">Offshore Engineer</h3>
                           <p class="card-text">Psum officia anim id est laborum.</p>
                       </div>
                   </div>
               </a>
           </div><!-- End Recent Work -->

           <!-- Start Recent Work -->
           <div class="col-md-4 mb-3">
               <a href="#" class="recent-work card border-0 shadow-lg overflow-hidden">
                   <img class="recent-work-img card-img" src="{{asset('frontend/img/recent-work-03.jpg')}}" alt="Card image">
                   <div class="recent-work-vertical card-img-overlay d-flex align-items-end">
                       <div class="recent-work-content text-start mb-3 ml-3 text-dark">
                           <h3 class="card-title light-300">Marine Technology News</h3>
                           <p class="card-text">Sum dolor sit consencutur</p>
                       </div>
                   </div>
               </a>
           </div>
           <!-- End Recent Work -->

       </div>
   </div>
</section>
<!-- End Recent Work -->



@endsection