<!-- Header -->
<nav id="main_nav" class="navbar navbar-expand-lg navbar-light text-light bg-white">
    <div class="container d-flex justify-content-between align-items-center">
        <a class="navbar-brand h1" href="{{url('/')}}">
            <img src="{{asset('frontend/img/logo.png')}}" alt="" height="30px">
            <!-- <i class='bx bx-buildings bx-sm text-dark'></i>
            <span class="text-dark h4">New</span> <span class="text-primary h4">Wave</span> Media -->
        </a>
        <button class="navbar-toggler border-0" type="button" data-bs-toggle="collapse" data-bs-target="#navbar-toggler-success" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="align-self-center collapse navbar-collapse flex-fill  d-lg-flex justify-content-lg-between" id="navbar-toggler-success">
            <div class="flex-fill mx-xl-5 mb-2">
                <ul class="nav navbar-nav d-flex justify-content-between mx-xl-5 text-center text-dark">
                    <li class="nav-item ">
                        <a class="nav-link btn-outline-primary rounded-pill px-3 {{ (request()->is('/')) ? 'active text-light' : '' }}" href="{{url('/')}}">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link btn-outline-primary rounded-pill px-3 {{ (request()->is('about')) ? 'active text-light' : '' }}" href="{{url('/about')}}">About</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link btn-outline-primary rounded-pill px-3 {{ (request()->is('print-publications')) ? 'active text-light' : '' }}" href="{{url('/print-publications')}}">Print Publications</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link btn-outline-primary rounded-pill px-3 {{ (request()->is('digital-overview')) ? 'active text-light' : '' }}" href="{{url('/digital-overview')}}">Digital Overview</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link btn-outline-primary rounded-pill px-3 {{ (request()->is('contact')) ? 'active text-light' : '' }}" href="{{url('/contact')}}">Contact</a>
                    </li>
                </ul>
            </div>
            <div class="navbar align-self-center d-flex">
                <a class="nav-link" href="mailto:sales@marinelink.com"><i class='bx bx-envelope bx-sm bx-tada-hover text-primary'></i></a>
                {{-- <a class="nav-link" href="#"><i class='bx bx-cog bx-sm text-primary'></i></a> --}}
                <a class="nav-link" href="tel:1-212-477-6700"><i class='bx bx-phone bx-sm text-primary'></i></a>
            </div>
        </div>
    </div>
</nav>
<!-- Close Header -->