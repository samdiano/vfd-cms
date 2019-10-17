<!DOCTYPE html>
<html lang="">

    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="description" content="VFD Group |  Global Network &#8211; Worldwide Strength">
        <meta name="author" content="VFD Group">
        <title>VFD Group |  Global Network &#8211; Worldwide Strength</title>
        <!--favicicon-->
        <link rel="shortcut icon" href="{{ asset('assets/img/favicon.png') }}" />
        <link rel="apple-touch-icon" href="{{ asset('assets/img/favicon.png') }}" />

        <link rel="stylesheet" href="{{ asset('assets/css/style.css') }}">
        <link rel="stylesheet" href="{{ asset('assets/css/slick.css') }}">
        <link rel="stylesheet" href="{{ asset('assets/css/slick-theme.css') }}">
        <link rel="stylesheet" href="{{ asset('assets/css/hamburger.min.css') }}">
        <link rel="stylesheet" href="{{ asset('assets/css/fonts.css') }}">
        <link rel="stylesheet" href="{{ asset('assets/css/Assets/bootstrap.min.css') }}">
        <link rel="stylesheet" href="{{ asset('assets/css/Assets/mdb.min.css') }}">
        <link rel="stylesheet" href="{{ asset('assets/css/Assets/mdb-theme.min.css') }}">
        <link rel="stylesheet" href="{{ asset('assets/css/media-queries.css') }}">

        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" />
        <link href="{{ asset('assets/css/Assets/animate.min.css') }}" type="text/css" rel="stylesheet" />
    </head>

    <body>

        <!--Navbar-->
        <nav class="navbar navbar-expand-lg navbar-light fixed-top scrolling-navbar mb-md-5 py-2">
            <div class="container-fluid">
                <!-- Navbar brand -->

                <a class="navbar-brand" href="/">
                    <img src="{{ asset('assets/img/VFD%20Group%20Logo%20PNG.png') }}" width="160" class="img-fluid" id="main_logo" alt="VFD Group Logo"></a>

                <!-- Collapse button -->
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span>
                </button>


                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav ml-auto">


                        <li class="nav-item px-md-3 my-2 my-md-0">
                            <a class="nav-link bold  " href="/">Home</a>
                        </li>


                        <li class="nav-item px-md-3 my-2 my-md-0">
                            <a class="nav-link bold" href="about">About Us</a>
                        </li>


                        <li class="nav-item px-md-3 my-2 my-md-0">
                            <a class="nav-link bold" href="portfolio">Our Portfolio</a>
                        </li>

                        <li class="nav-item px-md-3 my-2 my-md-0">
                            <a class="nav-link bold" href="investors">Investor Information</a>
                        </li>

                        <li class="nav-item px-md-3 my-2 my-md-0">
                            <a class="nav-link bold" href="media">Media</a>
                        </li>

                        <li class="nav-item px-md-3 my-2 my-md-0 active-link">
                            <a class="nav-link bold" href="careers">Careers</a>
                        </li>

                        <li class="nav-item px-md-3 my-2 my-md-0">
                            <a class="nav-link bold" href="contact_us">Contact Us</a>
                        </li>

                        <li class="nav-item pl-md-3 pr-md-5 my-2 my-md-0">
                            <a class="nav-link bold" href="search"><img src="{{ asset('assets/img/search.svg') }}" alt="search" class="img-fluid" /></a>
                        </li>
                    </ul>
                </div>
                <!-- Collapsible content -->
            </div>
        </nav>
        <!--/.Navbar-->

        <img src="{{ asset('assets/img/career_real.png') }}" class="img-fluid position-absolute career-banner" />

        <div class="">
            <div class="container">
                <div class="row ">
                    <div class="col-md-4">
                        <h3 class="text-white vertical-8 font-41 weight-semi-bold">Careers</h3>
                    </div>
                </div>
            </div>
        </div>

        <div class="container">
            <div class="row vertical-10">
                <div class="col-md-6">
                    <p class="mt-md-">{!!$company->career!!}</p>
                </div>

                <div class="offset-md-1 col-md-5">
                    <img src="{{ asset('assets/img/StockSnap_YK0PRWX6MC.png') }}" class="img-fluid" />
                </div>
            </div>

        </div>

        <div class="career-bg-2 mt-5 mb-4">
            <div class="container">
                <div class="row py-5">
                    <div class="col-md-6">
                        <h5 class="text-white gotham-bold mt-2">Apply for Our Internship/<br />
                            Graduate Trainee Program</h5>
                    </div>

                    <div class="col-md-4">
                        <button class="btn vfd-btn-red float-md-right">Learn More</button>
                    </div>
                </div>
            </div>
        </div>

        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-12">
                    <ul class="nav nav-tabs nav-justified-career md-tabs mt-4 mb-3 border" id="careerTab" role="tablist">
                        <li class="nav-item waves-effect waves-light">
                            <a class="nav-link active small-md" id="vacancies-tab-just" data-toggle="tab" href="#vacancies-just" role="tab" aria-controls="vacancies-just" aria-selected="true">Vacancies</a>
                        </li>

                        <li class="nav-item waves-effect waves-light">
                            <a class="nav-link small-md" id="portfolios-tab-just" data-toggle="tab" href="#portfolios-just" role="tab" aria-controls="portfolios-just" aria-selected="true">Portfolio Vacancies</a>
                        </li>
                    </ul>

                    <div class="tab-content" id="myTabContentJust">

                        <div class="tab-pane fade show active" id="vacancies-just" role="tabpanel" aria-labelledby="vacancies-tab-just">
                            <div class="row mb-md-4">
                                <div class="offset-md-9 d-flex">
                                    <span class="col-md-5 my-2">Sort by</span> <select class="rounded-0 col-md-8 browser-default custom-select"><option>Most Recent</option></select>
                                </div>
                            </div>
                            <div class="row justify-content-center">
                                @foreach($vacancies as $vacancy)
                                <div class="col-md-3 my-2">
                                    <div class="p-3 career-card text-center">
                                        <h5 class="text_secondary gotham-bold mt-2">{{$vacancy->role}}</h5>
                                        <p class="text_secondary mb-1 small">Posted on {{date_format($vacancy->created_at,'d-m-Y')}}</p>
                                    </div>
                                </div>
                                @endforeach
                            </div>
                        </div>

                        <div class="tab-pane fade" id="portfolios-just" role="tabpanel" aria-labelledby="portfolios-tab-just">
                            <div class="row justify-content-center">
                                <div class="col-md-10 py-3">
                                    <!--Accordion wrapper-->
                                    <div class="accordion md-accordion" id="accordionEx" role="tablist" aria-multiselectable="true">

                                        <!-- Accordion card -->
                                        <div class="card my-3 border">

                                            <!-- Card header -->
                                            <div class="card-header" role="tab" id="headingOne1">
                                                <a data-toggle="collapse" data-parent="#accordionEx" href="#collapseOne1" aria-expanded="true"
                                                   aria-controls="collapseOne1">
                                                    <h5 class="mb-0 text_secondary">
                                                        Everdon Bureau De Change <span class="gotham-bold vfd-text-red">({{count($everdon_vacancies)}})</span> <i class="fa fa-angle-down rotate-icon"></i>
                                                    </h5>
                                                </a>
                                            </div>

                                            <!-- Card body -->
                                            <div id="collapseOne1" class="collapse show" role="tabpanel" aria-labelledby="headingOne1"
                                                 data-parent="#accordionEx">
                                                <div class="card-body">
                                                        @foreach($everdon_vacancies as $vacancy)
                                                        <p>{{$vacancy->role}}</p>
                                                        @endforeach
                                                </div>
                                            </div>

                                        </div>
                                        <!-- Accordion card -->

                                        <!-- Accordion card -->
                                        <div class="card my-3 border">

                                            <!-- Card header -->
                                            <div class="card-header" role="tab" id="headingTwo2">
                                                <a class="collapsed" data-toggle="collapse" data-parent="#accordionEx" href="#collapseTwo2"
                                                   aria-expanded="false" aria-controls="collapseTwo2">
                                                    <h5 class="mb-0 text_secondary">
                                                        VFD Microfinance Bank <span class="gotham-bold vfd-text-red">({{count($microfinance_vacancies)}})</span> <i class="fa fa-angle-down rotate-icon"></i>
                                                    </h5>
                                                </a>
                                            </div>

                                            <!-- Card body -->
                                            <div id="collapseTwo2" class="collapse" role="tabpanel" aria-labelledby="headingTwo2"
                                                 data-parent="#accordionEx">
                                                <div class="card-body">
                                                        @foreach($microfinance_vacancies as $vacancy)
                                                        <p>{{$vacancy->role}}</p>
                                                        @endforeach
                                                </div>
                                            </div>

                                        </div>
                                        <!-- Accordion card -->

                                        <!-- Accordion card -->
                                        <div class="card my-3 border">

                                            <!-- Card header -->
                                            <div class="card-header" role="tab" id="headingThree3">
                                                <a class="collapsed" data-toggle="collapse" data-parent="#accordionEx" href="#collapseThree3"
                                                   aria-expanded="false" aria-controls="collapseThree3">
                                                    <h5 class="mb-0 text_secondary">
                                                        VFD Bridge <span class="gotham-bold vfd-text-red">({{count($bridge_vacancies)}})</span> <i class="fa fa-angle-down rotate-icon"></i>
                                                    </h5>
                                                </a>
                                            </div>

                                            <!-- Card body -->
                                            <div id="collapseThree3" class="collapse" role="tabpanel" aria-labelledby="headingThree3"
                                                 data-parent="#accordionEx">
                                                <div class="card-body">
                                                        @foreach($bridge_vacancies as $vacancy)
                                                        <p>{{$vacancy->role}}</p>
                                                        @endforeach
                                                </div>
                                            </div>

                                        </div>
                                        <!-- Accordion card -->


                                        <!-- Accordion card -->
                                        <div class="card my-3 border">

                                            <!-- Card header -->
                                            <div class="card-header" role="tab" id="heading4">
                                                <a class="collapsed" data-toggle="collapse" data-parent="#accordionEx" href="#collapse4"
                                                   aria-expanded="false" aria-controls="collapse4">
                                                    <h5 class="mb-0 text_secondary">
                                                        Dynasty Real Estate <span class="gotham-bold vfd-text-red">({{count($dynasty_vacancies)}})</span> <i class="fa fa-angle-down rotate-icon"></i>
                                                    </h5>
                                                </a>
                                            </div>

                                            <!-- Card body -->
                                            <div id="collapse4" class="collapse" role="tabpanel" aria-labelledby="heading4"
                                                 data-parent="#accordionEx">
                                                <div class="card-body">
                                                        @foreach($dynasty_vacancies as $vacancy)
                                                        <p>{{$vacancy->role}}</p>
                                                        @endforeach
                                                </div>
                                            </div>

                                        </div>
                                        <!-- Accordion card -->


                                        <!-- Accordion card -->
                                        <div class="card my-3 border">

                                            <!-- Card header -->
                                            <div class="card-header" role="tab" id="heading5">
                                                <a class="collapsed" data-toggle="collapse" data-parent="#accordionEx" href="#collapse5"
                                                   aria-expanded="false" aria-controls="collapse5">
                                                    <h5 class="mb-0 text_secondary">
                                                        Anchoria Assets Management <span class="gotham-bold vfd-text-red">({{count($anchoria_vacancies)}})</span> <i class="fa fa-angle-down rotate-icon"></i>
                                                    </h5>
                                                </a>
                                            </div>

                                            <!-- Card body -->
                                            <div id="collapse5" class="collapse" role="tabpanel" aria-labelledby="heading5"
                                                 data-parent="#accordionEx">
                                                <div class="card-body">
                                                        @foreach($anchoria_vacancies as $vacancy)
                                                        <p>{{$vacancy->role}}</p>
                                                        @endforeach
                                                </div>
                                            </div>

                                        </div>
                                        <!-- Accordion card -->

                                    </div>
                                    <!-- Accordion wrapper -->
                                </div>
                            </div>

                        </div>

                    </div>
                </div>
            </div>

        </div>

        <!--Footer-->
        <footer class="mt-5 pt-2 font-small landing_footer border border-grey border-right-0 border-bottom-0 border-left-0">

            <!--Footer Links-->
            <div class="container text-center text-md-left">

                <div class="">

                    <div class="row d-flex align-items-center">
                        <div class="col-md-1 col-lg-1">
                            <p class="small text-center text-dark text-md-left grey-text font-weight-bold my-3 spacing-2"> <a href="#">Policy</a></p>
                        </div>

                        <div class="col-md-3 col-lg-3">
                            <p class="small text-center text-dark text-md-left grey-text font-weight-bold my-3 spacing-2"> <a href="#">Regulatory Disclosure</a></p>
                        </div>

                        <div class="col-md-2 col-lg-2">
                            <p class="small text-center text-dark text-md-left grey-text font-weight-bold my-3 spacing-2"> <a href="#">Sitemap</a></p>
                        </div>

                        <div class="col-md-3 col-lg-3">
                            <p class="small text-center text-dark text-md-left grey-text font-weight-bold my-3 spacing-2"> <a href="#">Terms and Conditions</a></p>
                        </div>

                        <div class="col-md-3 col-lg-3">
                            <p class="small text-center text-dark text-md-left grey-text font-weight-bold my-3 spacing-2"> <a href="#">© 2019 VFD Group | All Rights Reserved.</a></p>
                        </div>
                    </div>
                </div>

            </div>

        </footer>
        <!--/.Footer-->

    </body>

    <script src="{{ asset('assets/js/jquery.min.js') }}"></script>
    <script src="{{ asset('assets/js/popper.min.js') }}"></script>
    <script src="{{ asset('assets/js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('assets/js/slick.js') }}"></script>
    <script src="{{ asset('assets/js/mdb.js') }}"></script>
    <script src="{{ asset('assets/js/utility.js') }}"></script>
</html>