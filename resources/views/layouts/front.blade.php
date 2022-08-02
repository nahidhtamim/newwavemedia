<!DOCTYPE html>
<html lang="en">

<head>
    <title>@yield('title')</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="apple-touch-icon" href="{{asset('frontend/img/apple-icon.png')}}">
    <link rel="shortcut icon" type="image/x-icon" href="{{asset('frontend/img/favicon.ico')}}">
    <!-- Load Require CSS -->
    <link href="{{asset('frontend/css/bootstrap.css')}}" rel="stylesheet">
    <!-- Font CSS -->
    <link href="{{asset('frontend/css/boxicon.min.css')}}" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@300;400;600&display=swap" rel="stylesheet">
    <!-- Load Tempalte CSS -->
    <link rel="stylesheet" href="{{asset('frontend/css/templatemo.css')}}">
    <!-- Custom CSS -->
    <link rel="stylesheet" href="{{asset('frontend/css/custom.css')}}">

</head>

<body>


<!-- ***** Header Area Start ***** -->
    
@include('layouts.includes.frontend.nav')
    
<!-- ***** Header Area End ***** -->
<!-- ***** Main Area Start ***** -->
@yield('contents')
<!-- ***** Main Area End ***** -->

<!-- ***** Footer Area Start ***** -->
@include('layouts.includes.frontend.footer')
<!-- ***** Main Area End ***** -->



    <!-- Bootstrap -->
    <script src="{{asset('frontend/js/bootstrap.bundle.min.js')}}"></script>
    <!-- Load jQuery require for isotope -->
    <script src="{{asset('frontend/js/jquery.min.js')}}"></script>
    <!-- Isotope -->
    <script src="{{asset('frontend/js/isotope.pkgd.js')}}"></script>
    <!-- Page Script -->
    <script>
        $(window).load(function () {
            // init Isotope
            var $publications = $('.publications').isotope({
                itemSelector: '.publication',
                layoutMode: 'fitRows'
            });
            $(".filter-btn").click(function () {
                var data_filter = $(this).attr("data-filter");
                $publications.isotope({
                    filter: data_filter
                });
                $(".filter-btn").removeClass("active");
                $(".filter-btn").removeClass("shadow");
                $(this).addClass("active");
                $(this).addClass("shadow");
                return false;
            });
        });

    </script>
    <!-- Templatemo -->
    <script src="{{asset('frontend/js/templatemo.js')}}"></script>
    <!-- Custom -->
    <script src="{{asset('frontend/js/custom.js')}}"></script>

</body>

</html>
