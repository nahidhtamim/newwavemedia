@extends('layouts.front')
@section('title')
About | A Premium Media Company
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
<section class="bg-light w-100">
    <div class="container">
        <div class="row d-flex align-items-center py-5">
            <div class="col-lg-6 text-start" data-aos="zoom-out-left" data-aos-duration="2000">
                <h1 class="h2 py-5 text-primary typo-space-line">About Us</h1>
                <p class="light-300">
                    For the past 80 years, New Wave Media and its family of publications and websites has been committed
                    to bringing largest audience to our clients in the maritime, underwater science and offshore energy
                    industries.
                </p>
            </div>
            <div class="col-lg-6" data-aos="zoom-out-right" data-aos-duration="2000">
                <img src="{{asset('frontend/img/banner-img-02.svg')}}">
            </div>
        </div>
    </div>
</section>
<!-- End Banner Hero -->

<!-- Start Aim -->
<section class="banner-bg py-5" data-aos="zoom-in" data-aos-duration="2000">
    <div class="container my-4">
        <div class="row text-center">

            <div class="objective col-lg-4">
                <div class="objective-icon card m-auto py-4 mb-2 mb-sm-4 bg-secondary shadow-lg">
                    <i class="display-4 fa-solid fa-globe text-light"></i>
                </div>
                <h2 class="objective-heading h3 mb-2 mb-sm-4 light-300">1,625,082</h2>
                <p class="light-300">
                    AVERAGE MONTHLY NETWORK PAGEVIEWS
                </p>
            </div>

            <div class="objective col-lg-4 mt-sm-0 mt-4">
                <div class="objective-icon card m-auto py-4 mb-2 mb-sm-4 bg-secondary shadow-lg">
                    <i class="display-4 fa-solid fa-book text-light"></i>
                </div>
                <h2 class="objective-heading h3 mb-2 mb-sm-4 light-300">137,618</h2>
                <p class="light-300">
                    AVERAGE MONTHLY MAGAZINE CIRCULATION
                </p>
            </div>

            <div class="objective col-lg-4 mt-sm-0 mt-4">
                <div class="objective-icon card m-auto py-4 mb-2 mb-sm-4 bg-secondary shadow-lg">
                    <i class="display-4 fa-brands fa-google-play text-light"></i>
                </div>
                <h2 class="objective-heading h3 mb-2 mb-sm-4 light-300">91,335</h2>
                <p class="light-300">
                    APP DOWNLOADS
                </p>
            </div>

        </div>
    </div>
</section>
<!-- End Aim -->


<!-- Start Team Member -->
<section class="bg-light py-5" data-aos="zoom-in" data-aos-duration="2000">
    <div class="container pt-5 pb-3 d-lg-flex align-items-center gx-5">

        <div class="col-lg-3">
            <h2 class="h2 py-5 typo-space-line">Our Team</h2>
            <p class="text-muted light-300">
                New Wave Media’s advertising specialists will help you develop a multi-platform marketing initiative to
                grow your business.
            </p>
        </div>

        <div class="col-lg-9 row d-flex justify-content-center">
            <div class="team-member col-md-4">
                <img class="team-member-img img-fluid rounded-circle p-4"
                    src="{{asset('frontend/img/team/terry-breese.jpg')}}" alt="Card image">
                <ul class="team-member-caption list-unstyled text-center pt-4 text-muted light-300">
                    <li><b>Terry Breese</b></li>
                    <li>Vice President of Sales</li>
                </ul>
            </div>
            <div class="team-member col-md-4">
                <img class="team-member-img img-fluid rounded-circle p-4"
                    src="{{asset('frontend/img/team/john-cagni.jpg')}}" alt="Card image">
                <ul class="team-member-caption list-unstyled text-center pt-4 text-muted light-300">
                    <li><b>John Cagni</b></li>
                    <li>Advertising Sales Manager</li>
                </ul>
            </div>
            <div class="team-member col-md-4">
                <img class="team-member-img img-fluid rounded-circle p-4"
                    src="{{asset('frontend/img/team/lucia-annunziata.jpg')}}" alt="Card image">
                <ul class="team-member-caption list-unstyled text-center pt-4 text-muted light-300">
                    <li><b>Lucia Annunziata</b></li>
                    <li>Advertising Sales Manager</li>
                </ul>
            </div>
            <div class="team-member col-md-4">
                <img class="team-member-img img-fluid rounded-circle p-4"
                    src="{{asset('frontend/img/team/mike-kozlowski.jpg')}}" alt="Card image">
                <ul class="team-member-caption list-unstyled text-center pt-4 text-muted light-300">
                    <li><b>Mike Kozlowski</b></li>
                    <li>Advertising Sales Manager</li>
                </ul>
            </div>
            <div class="team-member col-md-4">
                <img class="team-member-img img-fluid rounded-circle p-4"
                    src="{{asset('frontend/img/team/frank-covella.jpg')}}" alt="Card image">
                <ul class="team-member-caption list-unstyled text-center pt-4 text-muted light-300">
                    <li><b>Frank Covella</b></li>
                    <li>Advertising Sales Manager</li>
                </ul>
            </div>

        </div>

    </div>
</section>
<!-- End Team Member -->



<!-- Start Contact -->
{{-- <section class="banner-bg bg-white py-5" data-aos="fade-in" data-aos-duration="2000">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 mx-auto my-4 p-3">
                    <form action="#" method="get">
                        <h1 class="h2 text-center">Stay up to date with us</h1>
                        <div class="input-group py-3">

                            <input name="email" type="text" class="form-control form-control-lg rounded-pill rounded-end" id="email" placeholder="Your Email" aria-label="Your Email">
                            <button class="btn btn-secondary text-white btn-lg rounded-pill rounded-start px-lg-4" type="submit">Subsribe</button>
                        </div>
                        <p class="text-center light-300">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt labore et dolore magna aliqua.</p>
                    </form>
                </div>
            </div>
        </div>
    </section> --}}
<!-- End Contact -->


@endsection
