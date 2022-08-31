@extends('layouts.front')
@section('title')
Contact | A Premium Media Company
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
    <section class="bg-light">
      <div class="container py-4">
          <div class="row align-items-center justify-content-between">
              <div class="contact-header col-lg-4" data-aos="zoom-out-left" data-aos-duration="2000">
                  <h1 class="h2 pb-3 text-primary">Contact Us</h1>
                  <p class="light-300">
                    New Wave Media int’l has been providing multiplatform advertising solutions to a diverse range
                    of industries for over 85 years.
                  </p>
              </div>
              <div class="contact-img col-lg-5 align-items-end col-md-4" data-aos="zoom-out-right" data-aos-duration="2000">
                  <img src="{{asset('frontend/img/banner-img-01.svg')}}">
              </div>
          </div>
      </div>
  </section>
  <!-- End Banner Hero -->


  <!-- Start Contact -->
  <section class="container py-5" data-aos="zoom-in" data-aos-duration="2000">

      <h1 class="col-12 col-xl-8 h2 text-left text-primary pt-3">We want to hear from you!</h1>
      <h2 class="col-12 col-xl-8 h4 text-left regular-400">Contact us today to learn about our advertising solutions</h2>
      <p class="col-12 col-xl-8 text-left text-muted pb-5 light-300">
        New Wave Media is the premier media company serving the Commercial Maritime, Shallow
        Draft Workboat, Underwater Science, and Offshore Energy Industries. We look forward to
        hearing from you
      </p>

      <div class="row pb-4">
          <div class="col-lg-4">

              <div class="contact row mb-4">
                  <div class="contact-icon col-lg-3 col-3">
                      <div class="py-3 mb-2 text-center border rounded text-secondary">
                          <i class='display-6 bx bx-news'></i>
                      </div>
                  </div>
                  <ul class="contact-info list-unstyled col-lg-9 col-9  light-300">
                      <li class="h5 mb-0">Advertising Contact</li>
                      <li class="text-muted">Mr. Terry Breese</li>
                      <li class="text-muted">+1-561-732-1185</li>
                  </ul>
              </div>

              <div class="contact row mb-4">
                  <div class="contact-icon col-lg-3 col-3">
                      <div class="border py-3 mb-2 text-center border rounded text-secondary">
                          <i class='bx bx-laptop display-6'></i>
                      </div>
                  </div>
                  <ul class="contact-info list-unstyled col-lg-9 col-9 light-300">
                      <li class="h5 mb-0">Editorial Contact</li>
                      <li class="text-muted">Mr. Greg Trauthwein</li>
                      <li class="text-muted">+1-212-477-6700</li>
                  </ul>
              </div>

              <div class="contact row mb-4">
                  <div class="contact-icon col-lg-3 col-3">
                      <div class="border py-3 mb-2 text-center border rounded text-secondary">
                          <i class='bx bx-money display-6'></i>
                      </div>
                  </div>
                  <ul class="contact-info list-unstyled col-lg-9 col-9 light-300">
                      <li class="h5 mb-0">Billing Contact</li>
                      <li class="text-muted">Ms. Esther Rothenberger</li>
                      <li class="text-muted">+1-212-477-6700</li>
                  </ul>
              </div>

          </div>


          <!-- Start Contact Form -->
          <div class="col-lg-8 ">
                @if (Session::has('message_sent'))
                    <div class="alert alert-success" role="alert">
                        {{Session::get('message_sent')}}
                        <a href="" class="close">&times;</a>
                    </div> 
                @endif
              <form class="contact-form row" method="post" action="{{route('contact.send')}}" role="form">
                @csrf
                  <div class="col-lg-6 mb-4">
                      <div class="form-floating">
                          <input type="text" class="form-control form-control-lg light-300 @error('name') is-invalid @enderror" id="floatingname" name="name" placeholder="Name" required="">
                          <label for="floatingname light-300">Name <span class="text-danger">*</span></label>
                          <span class="text-danger">
                            @error('name')
                                <p class="text-danger">{{$message}}</p> 
                            @enderror
                        </span>  
                      </div>
                  </div>
                  <!-- End Input Name -->

                  <div class="col-lg-6 mb-4">
                      <div class="form-floating">
                          <input type="email" class="form-control form-control-lg light-300 @error('email') is-invalid @enderror" id="floatingemail" name="email" placeholder="Email" required="">
                          <label for="floatingemail light-300">Email <span class="text-danger">*</span></label>
                          <span class="text-danger">
                            @error('email')
                                <p class="text-danger">{{$message}}</p> 
                            @enderror
                        </span>  
                      </div>
                  </div>
                  <!-- End Input Email -->

                  <div class="col-lg-6 mb-4">
                      <div class="form-floating">
                          <input type="text" class="form-control form-control-lg light-300 @error('phone') is-invalid @enderror" id="floatingphone" name="phone" placeholder="Phone">
                          <label for="floatingphone light-300">Phone <span class="text-danger">*</span></label>
                          <span class="text-danger">
                            @error('phone')
                                <p class="text-danger">{{$message}}</p> 
                            @enderror
                        </span> 
                      </div>
                  </div>
                  <!-- End Input Phone -->

                  <div class="col-lg-6 mb-4">
                      <div class="form-floating">
                          <input type="text" class="form-control form-control-lg light-300" id="floatingcompany" name="company_name" placeholder="Company Name">
                          <label for="floatingcompany light-300">Company Name</label>
                      </div>
                  </div>
                  <!-- End Input Company Name -->

                  <div class="col-lg-6 mb-4">
                      <div class="form-floating">
                          <input type="text" class="form-control form-control-lg light-300 @error('address') is-invalid @enderror" id="floatingcompany" name="address" placeholder="Address">
                          <label for="floatingcompany light-300">Address <span class="text-danger">*</span></label>
                      </div>
                  </div>
                  <!-- End Input Company Name -->

                  <div class="col-12">
                      <div class="form-floating mb-3">
                          <textarea class="form-control light-300 @error('content') is-invalid @enderror" rows="8" placeholder="Message" id="floatingtextarea" name="content"></textarea>
                          <label for="floatingtextarea light-300">Message <span class="text-danger">*</span></label>
                          <span class="text-danger">
                            @error('content')
                                <p class="text-danger">{{$message}}</p> 
                            @enderror
                        </span> 
                      </div>
                  </div>
                  <!-- End Textarea Message -->

                  <div class="col-md-6 col-sm-6 col-xs-12 mt-3">
                    <div class="single-input-field{{$errors->has('captcha') ? 'has-error' : ''}}">
                        <div class="captcha">
                            <span>{!! captcha_img('flat') !!}</span>
                            <button class="btn btn-sm btn-refresh" type="button">Refresh</button>
                        </div>
                    </div>
                </div>

                <div class="col-md-6 col-sm-6 col-xs-12 mt-3">
                    <div class="single-input-field">
                        <input type="text" class="form-control form-control-lg light-300" id="captcha" name="captcha" placeholder="Type What You See" required="">
                        @if ($errors->has('captcha'))
                        <span class="text-danger">
                            @error('message')
                                <p class="text-danger">{{$message}} {{$errors->first('captcha')}}</p> 
                            @enderror
                        </span> 
                        @endif
                    </div>
                    <br>
                </div>
                
                  <div class="col-md-12 col-12 m-auto text-end">
                      <button type="submit" class="btn btn-secondary rounded-pill px-md-5 px-4 py-2 radius-0 text-light light-300">Send Message</button>
                  </div>

              </form>
          </div>
          <!-- End Contact Form -->


      </div>
  </section>
  <!-- End Contact -->


@endsection