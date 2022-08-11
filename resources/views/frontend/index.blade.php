
@extends('layouts.front')
@section('title')
Home | A Premium Media Company
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
    <div class="banner-wrapper bg-light" data-aos="fade-in"
    data-aos-duration="2000">
        <div id="index_banner" class="banner-vertical-center-index container-fluid-xl">

            <!-- Start slider -->
            <div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel">
                <ol class="carousel-indicators">
                    <li data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active"></li>
                    <li data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1"></li>
                    <li data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2"></li>
                </ol>
                <div class="carousel-inner">
                    <div class="carousel-item active" style="background-image: url('{{asset('frontend/img/sliders/pexels-cup-of-couple-6177632.jpg')}}');">

                        <div class="py-5 row d-flex align-items-center">
                            <div class="banner-content col-lg-8 col-8 offset-2 m-lg-auto text-left py-5 pb-5">
                                <h1 class="banner-heading h1 text-secondary display-3 mb-0 pb-5 mx-0 px-0 light-300 typo-space-line">
                                    Develop <strong>Strategies</strong> for 
                                  <br>your business
                              </h1>
                                <p class="banner-body py-3 mx-0 px-0">
                                    For the past 80 years, New Wave Media and its family of publications and websites has been committed to bringing largest audience to our clients in the maritime, underwater science and offshore energy industries. 
                              </p>
                                <a class="banner-button btn rounded-pill btn-outline-primary btn-lg px-4" href="#" role="button">Get Started</a>
                            </div>
                        </div>

                    </div>
                    <div class="carousel-item" style="background-image: url('{{asset('frontend/img/sliders/pexels-karolina-grabowska-4491446.jpg')}}');">

                        <div class="py-5 row d-flex align-items-center">
                            <div class="banner-content col-lg-8 col-8 offset-2 m-lg-auto text-left py-5 pb-5">
                                <h1 class="banner-heading h1 text-secondary display-3 mb-0 pb-5 mx-0 px-0 light-300 typo-space-line">
                                    Best Media <strong>Production</strong> Maker 
                                  <br>In Town
                              </h1>
                                <p class="banner-body py-3">
                                    For the past 80 years, New Wave Media and its family of publications and websites has been committed to bringing largest audience to our clients in the maritime, underwater science and offshore energy industries. 
                                </p>
                                <a class="banner-button btn rounded-pill btn-outline-primary btn-lg px-4" href="#" role="button">Get Started</a>
                            </div>
                        </div>

                    </div>
                    <div class="carousel-item" style="background-image: url('{{asset('frontend/img/sliders/pexels-karolina-grabowska-4468079.jpg')}}');">

                        <div class="py-5 row d-flex align-items-center">
                            <div class="banner-content col-lg-8 col-8 offset-2 m-lg-auto text-left py-5 pb-5">
                                <h1 class="banner-heading h1 text-secondary display-3 mb-0 pb-5 mx-0 px-0 light-300 typo-space-line">
                                    We <strong>Believe</strong> In 
                                  <br>In Quliaty
                              </h1>
                                <p class="banner-body py-3">
                                    For the past 80 years, New Wave Media and its family of publications and websites has been committed to bringing largest audience to our clients in the maritime, underwater science and offshore energy industries. 
                                </p>
                                <a class="banner-button btn rounded-pill btn-outline-primary btn-lg px-4" href="#" role="button">Get Started</a>
                            </div>
                        </div>

                    </div>
                </div>
                <a class="carousel-control-prev text-decoration-none" href="#carouselExampleIndicators" role="button" data-bs-slide="prev">
                    <i class='bx bx-chevron-left'></i>
                    <span class="visually-hidden">Previous</span>
                </a>
                <a class="carousel-control-next text-decoration-none" href="#carouselExampleIndicators" role="button" data-bs-slide="next">
                    <i class='bx bx-chevron-right'></i>
                    <span class="visually-hidden">Next</span>
                </a>
            </div>
            <!-- End slider -->

        </div>
    </div>
    <!-- End Banner Hero -->



    <!-- Start Service -->
    <section class="service-wrapper py-3">
        <div class="container-fluid pb-3" data-aos="fade-up"
        data-aos-duration="2000">
            <div class="row">
                <h2 class="h2 text-center col-12 py-5 semi-bold-600">About</h2>
                <div class="service-header col-2 col-lg-3 text-end light-300">
                    <i class='bx bx-gift h3 mt-1'></i>
                </div>
                <div class="service-heading col-10 col-lg-9 text-start float-end light-300">
                    <h2 class="h3 pb-4 typo-space-line">We are New Wave Media</h2>
                </div>
            </div>
            <p class="service-footer col-10 offset-2 col-lg-9 offset-lg-3 text-start pb-3 text-muted px-2">
                For the past 80 years, New Wave Media and its family of publications and websites has been committed to bringing largest audience to our clients in the maritime, underwater science and offshore energy industries.
            </p>
        </div>

        <div class="container-fluid pb-3 ">
            <div class="row">
                
            </div>
        </div>
        <div class="service-tag py-5 bg-secondary" data-aos="fade-down"
        data-aos-duration="2000">
            <div class="col-md-12">
                <h2 class="h2 text-center col-12 py-3 semi-bold-600 text-light">Print Publications</h2>
            </div>
        </div>

    </section>

    <section class="container overflow-hidden py-5" data-aos="fade-down"
    data-aos-duration="2000">
        <div class="row gx-5 gx-sm-3 gx-lg-5 gy-lg-5 gy-3 pb-3 publications">

            <!-- Start Recent Work -->
            @foreach ($publications as $publication)
                <div class="col-xl-3 col-md-6 col-sm-6 publication maritime">
                    <a href="{{url('/publication/'.$publication->slug)}}" class="service-work card border-0 text-white shadow-sm overflow-hidden mx-5 m-sm-0">
                        <img class="service card-img" src="{{asset('/uploads/publication_images/'.$publication->image)}}" alt="Card image">
                        <div class="service-work-vertical card-img-overlay d-flex align-items-end">
                            <div class="service-work-content text-left text-light">
                                <span class="btn btn-outline-light rounded-pill mb-lg-3 px-lg-4 light-300">{{$publication->title}}</span>
                            </div>
                        </div>
                    </a>
                </div>
            @endforeach
        </div>
    </section>
    <!-- End Service -->

    <!-- Start View Work -->
    <section class="bg-secondary" data-aos="fade-in"
    data-aos-duration="2000">
        <div class="container py-5">
            <div class="row d-flex justify-content-center text-center">
                <div class="col-lg-2 col-12 text-light align-items-center">
                    <i class='display-1 bx bxs-box bx-lg'></i>
                </div>
                <div class="col-lg-7 col-12 text-light pt-2">
                    <h3 class="h4 light-300">Great transformations successful</h3>
                    <p class="light-300">Quis ipsum suspendisse ultrices gravida.</p>
                </div>
                <div class="col-lg-3 col-12 pt-4">
                    <a href="{{url('/digital-overview')}}" class="btn btn-primary rounded-pill btn-block shadow px-4 py-2">View Our Work</a>
                </div>
            </div>
        </div>
    </section>
    <!-- End View Work -->

    <!-- Start Recent Work -->
    <section class="py-5 mb-5" data-aos="zoom-in"
    data-aos-duration="2000">
        <div class="container">
            <div class="recent-work-header row text-center pb-5">
                <h2 class="col-md-3 m-auto h2 semi-bold-600 py-5">Our Concerns</h2>
            </div>
            <div class="row gy-5 g-lg-5 mb-4">

                @foreach ($digitals as $digital)
                <!-- Start Recent Work -->
                <div class="col-md-4 mb-3">
                    <a href="{{url('/digital/'.$digital->slug)}}" class="recent-work card border-0 shadow-lg overflow-hidden">
                        <img class="recent-work-img card-img" src="{{asset('/uploads/digital_images/'.$digital->image)}}" alt="Card image">
                        <div class="recent-work-vertical card-img-overlay d-flex align-items-end">
                            <div class="recent-work-content">
                                {{-- <h3 class="card-title"> <b>{{$digital->title}}</b> </h3> --}}
                            </div>
                        </div>
                    </a>
                </div>
                <!-- End Recent Work -->
                @endforeach

            </div>
            <div class="text-center pt-5" role="group" aria-label="First group">
                <a class="btn btn-secondary rounded-pill btn-block shadow px-4 py-2 text-white" href="{{url('/digital-overview')}}">See More</a>
            </div>
        </div>
    </section>
    <!-- End Recent Work -->
@endsection




