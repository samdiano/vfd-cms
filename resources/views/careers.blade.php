<!DOCTYPE html>
<html lang="">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="VFD Group |  Global Network &#8211; Worldwide Strength">
    <meta name="author" content="VFD Group">
    <title>VFD Group | Global Network &#8211; Worldwide Strength</title>
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
    <style>
        .card {
            box-shadow: 0px 4px 25px rgba(0, 0, 0, 0.1) !important;
            border: 2px solid #E0E0E0 !important;
            border-radius: 8px !important;
        }
    </style>
</head>

<body>

    <!--Navbar-->
    <nav class="navbar navbar-expand-lg navbar-light fixed-top scrolling-navbar mb-md-5 py-2">
        <div class="container-fluid">
            <!-- Navbar brand -->

            <a class="navbar-brand" href="/">
                <img src="{{ asset('assets/img/VFD%20Group%20Logo%20PNG.png') }}" width="160" class="img-fluid"
                    id="main_logo" alt="VFD Group Logo"></a>

            <!-- Collapse button -->
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
                aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation"><span
                    class="navbar-toggler-icon"></span>
            </button>


            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav ml-auto">


                    <li class="nav-item px-md-3 my-2 my-md-0">
                        <a class="nav-link bold  " href="{{url('/')}}">Home</a>
                    </li>


                    <li class="nav-item px-md-3 my-2 my-md-0">
                        <a class="nav-link bold" href="{{url('/about')}}">About Us</a>
                    </li>


                    <li class="nav-item px-md-3 my-2 my-md-0">
                        <a class="nav-link bold" href="{{url('/portfolio')}}">Our Portfolio</a>
                    </li>

                    <li class="nav-item px-md-3 my-2 my-md-0">
                        <a class="nav-link bold" href="{{url('/investors')}}">Investor Information</a>
                    </li>

                    <li class="nav-item px-md-3 my-2 my-md-0">
                        <a class="nav-link bold" href="{{url('/media')}}">Media</a>
                    </li>

                    <li class="nav-item px-md-3 my-2 my-md-0 active-link">
                        <a class="nav-link bold" href="{{url('/career')}}">Careers</a>
                    </li>

                    <li class="nav-item px-md-3 my-2 my-md-0">
                        <a class="nav-link bold" href="{{url('/contact_us')}}">Contact Us</a>
                    </li>

                    <li class="nav-item pl-md-3 pr-md-5 my-2 my-md-0">
                        <a class="nav-link bold" href="search"><img src="{{ asset('assets/img/search.svg') }}"
                                alt="search" class="img-fluid" /></a>
                    </li>
                </ul>
            </div>
            <!-- Collapsible content -->
        </div>
    </nav>
    <!--/.Navbar-->

    <div class="position-relative career_top_banner" style="background-image: url({{ asset($banner->career) }}">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <h3 class="font-41 text-white vertical-8 weight-semi-bold">Careers</h3>
                </div>
            </div>
        </div>
        <img src="{{ asset('assets/img/insert_subtract.png') }}"
            class="img-fluid position-absolute global-image-subtract d-none d-md-block" />
    </div>


    <div class="container">
        <div class="row mt-4 mb-3 p-font-17">
            <div class="col-md-6">
                <p class="mt-md-">{!!$company->career!!}</p>
                @if($company->career_quote)
                <div class="position-relative">
                    <p class="font-weight-bold ml-md-2 text-green-deep gotham-bold mt-5 font-18">
                        {{$company->career_quote}}</p>
                    <img src="img/%E2%80%9C.png" class="img-fluid apostrophe-1 pt-4" />
                </div>
                @endif
                <p class="">
                    {!!$company->career_text!!}</p>
                    <a href="https://vfdgroup.seamlesshiring.com/" class="btn vfd-btn-red btn-sm">Apply Now</a>
            </div>

            <div class="col-md-6">
                <div class="video-container">
                    <iframe width="560" height="315" src="https://www.youtube.com/embed/{{$company->youtube_link}}" frameborder="0"
                        allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture"
                        allowfullscreen></iframe>
                </div>
            </div>
        </div>

    </div>

    <div class="career-bg-2 mt-5">
        <div class="container">
            <div class="row py-3">
                <div class="col-md-6">
                    <h5 class="text-white gotham-bold mt-2">Apply for Our Internship/<br />
                        Graduate Trainee Program</h5>
                </div>

                <div class="col-md-4">
						<a href="https://vfdgroup.seamlesshiring.com/" class="btn vfd-btn-red float-md-right">Learn More</a>
					</div>
            </div>
        </div>
    </div>

    <div class="containers d-none">
        <div class="row justify-content-center">
            <div class="col-md-12">
                <ul class="nav nav-tabs nav-justified-career md-tabs mt-4 mb-3 border" id="careerTab" role="tablist">
                    <li class="nav-item waves-effect waves-light">
                        <a class="nav-link active small-md text-center" id="vacancies-tab-just" data-toggle="tab"
                            href="#vacancies-just" role="tab" aria-controls="vacancies-just"
                            aria-selected="true">Vacancies</a>
                    </li>

                    <li class="nav-item waves-effect waves-light">
                        <a class="nav-link small-md text-center" id="portfolios-tab-just" data-toggle="tab"
                            href="#portfolios-just" role="tab" aria-controls="portfolios-just"
                            aria-selected="true">Portfolio Vacancies</a>
                    </li>

                    <li class="nav-item waves-effect waves-light">
                        <a class="nav-link small-md text-center" id="career-tab-just" data-toggle="tab"
                            href="#career-just" role="tab" aria-controls="career-just" aria-selected="true">Careers
                            FAQs</a>
                    </li>
                </ul>

                <div class="tab-content" id="myTabContentJust">

                    <div class="tab-pane fade show active" id="vacancies-just" role="tabpanel"
                        aria-labelledby="vacancies-tab-just">
                        <div class="row mb-md-4">
                            <div class="offset-md-9 d-flex">
                                <span class="col-md-5 my-2">Sort by</span> <select
                                    class="rounded-0 col-md-8 browser-default custom-select">
                                    <option>Most Recent</option>
                                </select>
                            </div>
                        </div>
                        <div class="row justify-content-center">
                            @foreach($vacancies as $vacancy)
                            <div class="col-md-3 my-2">
                                <div class="p-3 career-card text-center cursor" data-toggle="modal"
                                    data-target="#{{$vacancy->id}}">
                                    <h5 class="text_secondary gotham-bold mt-2">{{$vacancy->role}}</h5>
                                    <p class="text_secondary mb-1 small">Posted on
                                        {{date_format($vacancy->created_at,'d-m-Y')}}</p>
                                </div>
                            </div>
                            <div class="modal fade" id="{{$vacancy->id}}" tabindex="-1" role="dialog" aria-labelledby="" aria-hidden="true">
                                    <div class="modal-dialog modal-dialog-centered" role="document">
                                        <div class="modal-content">
                                            <div class="modal-header pb-1">
                                                <h5 class="modal-title">{{$vacancy->role}}</h5>
                                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                    <span aria-hidden="true">&times;</span>
                                                </button>
                                            </div>
                                            <div class="modal-body">
                                                <h6><span class="weight-semi-bold">Level: {{$vacancy->level}}</span></h6>
                                                <h6><span class="weight-semi-bold">Department: {{$vacancy->department}} </span></h6>
                                                <h6><span class="weight-semi-bold">Role: {{$vacancy->role}} </span></h6>
                                                <h6><span class="weight-semi-bold">Deadline: {{$vacancy->deadline}} </span></h6>
                                                <h6><span class="weight-semi-bold">Description: {{$vacancy->description}}</span></h6>
                                            </div>
                                            <div class="modal-footer border-0">
                                                <a href="mailto:someone@example.com" target="_top" type="button" class="btn btn-success">Apply</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            @endforeach
                        </div>
                    </div>

                    <div class="tab-pane fade" id="portfolios-just" role="tabpanel"
                        aria-labelledby="portfolios-tab-just">
                        <div class="row justify-content-center">
                            <div class="col-md-10 py-3">
                                <!--Accordion wrapper-->
                                <div class="accordion md-accordion" id="accordionEx" role="tablist"
                                    aria-multiselectable="true">

                                    <!-- Accordion card -->
                                    <div class="card my-3 border">

                                        <!-- Card header -->
                                        <div class="card-header" role="tab" id="headingOne1">
                                            <a data-toggle="collapse" data-parent="#accordionEx" href="#collapseOne1"
                                                aria-expanded="true" aria-controls="collapseOne1">
                                                <h5 class="mb-0 text_secondary">
                                                    Everdon Bureau De Change <span
                                                        class="gotham-bold vfd-text-red">({{count($everdon_vacancies)}})</span>
                                                    <i class="fa fa-angle-down rotate-icon"></i>
                                                </h5>
                                            </a>
                                        </div>

                                        <!-- Card body -->
                                        <div id="collapseOne1" class="collapse show" role="tabpanel"
                                            aria-labelledby="headingOne1" data-parent="#accordionEx">
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
                                            <a class="collapsed" data-toggle="collapse" data-parent="#accordionEx"
                                                href="#collapseTwo2" aria-expanded="false" aria-controls="collapseTwo2">
                                                <h5 class="mb-0 text_secondary">
                                                    VFD Microfinance Bank <span
                                                        class="gotham-bold vfd-text-red">({{count($microfinance_vacancies)}})</span>
                                                    <i class="fa fa-angle-down rotate-icon"></i>
                                                </h5>
                                            </a>
                                        </div>

                                        <!-- Card body -->
                                        <div id="collapseTwo2" class="collapse" role="tabpanel"
                                            aria-labelledby="headingTwo2" data-parent="#accordionEx">
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
                                            <a class="collapsed" data-toggle="collapse" data-parent="#accordionEx"
                                                href="#collapseThree3" aria-expanded="false"
                                                aria-controls="collapseThree3">
                                                <h5 class="mb-0 text_secondary">
                                                    VFD Bridge <span
                                                        class="gotham-bold vfd-text-red">({{count($bridge_vacancies)}})</span>
                                                    <i class="fa fa-angle-down rotate-icon"></i>
                                                </h5>
                                            </a>
                                        </div>

                                        <!-- Card body -->
                                        <div id="collapseThree3" class="collapse" role="tabpanel"
                                            aria-labelledby="headingThree3" data-parent="#accordionEx">
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
                                            <a class="collapsed" data-toggle="collapse" data-parent="#accordionEx"
                                                href="#collapse4" aria-expanded="false" aria-controls="collapse4">
                                                <h5 class="mb-0 text_secondary">
                                                    Dynasty Real Estate <span
                                                        class="gotham-bold vfd-text-red">({{count($dynasty_vacancies)}})</span>
                                                    <i class="fa fa-angle-down rotate-icon"></i>
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
                                            <a class="collapsed" data-toggle="collapse" data-parent="#accordionEx"
                                                href="#collapse5" aria-expanded="false" aria-controls="collapse5">
                                                <h5 class="mb-0 text_secondary">
                                                    Anchoria Assets Management <span
                                                        class="gotham-bold vfd-text-red">({{count($anchoria_vacancies)}})</span>
                                                    <i class="fa fa-angle-down rotate-icon"></i>
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

                    <div class="tab-pane fade active container" id="career-just" role="tabpanel"
                        aria-labelledby="career-tab-just">
                        <div class="accordion md-accordion" id="accordionExfaq" role="tablist"
                            aria-multiselectable="true">
                            @foreach($careerFaq as $career)
                            <div class="card my-3 border-0">
                                <div class="card-header rounded" role="tab" id="faqheading1">
                                    <a data-toggle="collapse" data-parent="#accordionExfaq" href="#{{$career->id}}"
                                        aria-expanded="true" aria-controls="{{$career->id}}">
                                        <h5 class="mb-0 text_secondary">
                                            <span class="gotham-bold">{{$career->question}}</span> <i
                                                class="fa fa-angle-down rotate-icon"></i>
                                        </h5>

                                    </a>
                                </div>

                                <div id="{{$career->id}}" class="collapse show mb-2" role="tabpanel"
                                    aria-labelledby="faqheading1" data-parent="#accordionExfaq">
                                    <div class="card-body pt-0">
                                        <hr class="my-2" />
                                        {{$career->response}}
                                    </div>
                                </div>
                            </div>
                            @endforeach

                        </div>
                    </div>

                </div>
            </div>
        </div>

    </div>

    <!--Footer-->
    <footer class="pt-2 font-small landing_footer border border-grey border-right-0 border-bottom-0 border-left-0">

        <!--Footer Links-->
        <div class="container text-center text-md-left">

            <div class="">

                <div class="row d-flex align-items-center">
                    <div class="col-md-1 col-lg-1">
                        <p class="small text-center text-dark text-md-left grey-text font-weight-bold my-3 spacing-2">
                            <a href="#">Policy</a></p>
                    </div>

                    <div class="col-md-3 col-lg-3">
                        <p class="small text-center text-dark text-md-left grey-text font-weight-bold my-3 spacing-2">
                            <a href="#">Regulatory Disclosure</a></p>
                    </div>

                    <div class="col-md-2 col-lg-2">
                        <p class="small text-center text-dark text-md-left grey-text font-weight-bold my-3 spacing-2">
                            <a href="#">Sitemap</a></p>
                    </div>

                    <div class="col-md-3 col-lg-3">
                        <p class="small text-center text-dark text-md-left grey-text font-weight-bold my-3 spacing-2">
                            <a href="#">Terms and Conditions</a></p>
                    </div>

                    <div class="col-md-3 col-lg-3">
                        <p class="small text-center text-dark text-md-left grey-text font-weight-bold my-3 spacing-2">
                            <a href="#">© 2019 VFD Group | All Rights Reserved.</a></p>
                    </div>
                </div>
            </div>

        </div>

    </footer>
    <!--/.Footer-->

    <!--Job Modal -->
    {{-- @foreach ($vacancies as $vacancy )
    

    @endforeach --}}

</body>

<script src="{{ asset('assets/js/jquery.min.js') }}"></script>
<script src="{{ asset('assets/js/popper.min.js') }}"></script>
<script src="{{ asset('assets/js/bootstrap.min.js') }}"></script>
<script src="{{ asset('assets/js/slick.js') }}"></script>
<script src="{{ asset('assets/js/mdb.js') }}"></script>
<script src="{{ asset('assets/js/utility.js') }}"></script>

</html>