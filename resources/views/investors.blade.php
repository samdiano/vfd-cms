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
                        <a class="nav-link bold  " href="/">Home</a>
                    </li>


                    <li class="nav-item px-md-3 my-2 my-md-0">
                        <a class="nav-link bold" href="about">About Us</a>
                    </li>


                    <li class="nav-item px-md-3 my-2 my-md-0">
                        <a class="nav-link bold" href="portfolio">Our Portfolio</a>
                    </li>

                    <li class="nav-item px-md-3 my-2 my-md-0 active-link">
                        <a class="nav-link bold" href="investors">Investor Information</a>
                    </li>

                    <li class="nav-item px-md-3 my-2 my-md-0">
                        <a class="nav-link bold" href="media">Media</a>
                    </li>

                    <li class="nav-item px-md-3 my-2 my-md-0">
                        <a class="nav-link bold" href="career">Careers</a>
                    </li>

                    <li class="nav-item px-md-3 my-2 my-md-0">
                        <a class="nav-link bold" href="contact_us.html">Contact Us</a>
                    </li>

                    <li class="nav-item pl-md-3 pr-md-5 my-2 my-md-0">
                        <a class="nav-link bold" href="search.html"><img
                                src="{{ asset('assets/img/search.svg') }}"" alt=" search" class="img-fluid" /></a>
                    </li>
                </ul>
            </div>
            <!-- Collapsible content -->
        </div>
    </nav>
    <!--/.Navbar-->

    <div class="position-relative investor_top_banner" style="background-image: url({{ asset($banner->investor) }}">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <h3 class="font-41 text-white vertical-8 weight-semi-bold">Investor Information</h3>
                </div>
            </div>
        </div>
        <img src="{{ asset('assets/img/insert_subtract.png') }}"
            class="img-fluid position-absolute global-image-subtract d-none d-md-block" />
    </div>

    <img src="{{ asset('assets/img/favicon.png') }}" class="img-fluid position-absolute d-none"
        style="right: 5%; top: 20%; opacity: 0.3; width: 10%" />

    <div class="container">
        <ul class="nav nav-tabs nav-justified md-tabs mb-3" id="investor_tab" role="tablist">
            <li class="nav-item waves-effect waves-light">
                <a class="nav-link active small-md" id="finance-tab-just" data-toggle="tab" href="#finance-just"
                    role="tab" aria-controls="finance-just" aria-selected="true">Financial Information</a>
            </li>

            <li class="nav-item waves-effect waves-light">
                <a class="nav-link small-md" id="conference-tab-just" data-toggle="tab" href="#conference-just"
                    role="tab" aria-controls="conference-just" aria-selected="true">Conference Calls</a>
            </li>

            <li class="nav-item waves-effect waves-light">
                <a class="nav-link small-md" id="press-tab-just" data-toggle="tab" href="#press-just" role="tab"
                    aria-controls="press-just" aria-selected="true">Press Release</a>
            </li>

            <li class="nav-item waves-effect waves-light">
                <a class="nav-link small-md" id="faq-tab-just" data-toggle="tab" href="#faq-just" role="tab"
                    aria-controls="faq-just" aria-selected="true">FAQs</a>
            </li>
        </ul>

        <div class="tab-content px-0 px-md-2" id="myTabContentJust">
            <div class="tab-pane fade active show" id="finance-just" role="tabpanel" aria-labelledby="finance-tab-just">
                @foreach($finYear as $fin)
                <div class="accordion md-accordion" id="finance" role="tablist" aria-multiselectable="true">
                    <div class="card my-3 border-0">
                        <div class="card-header border-0 rounded" role="tab" id="finance_heading_1">
                            <a data-toggle="collapse" data-parent="#finance" href="#finance1" aria-expanded="true"
                                aria-controls="finance1">
                                <h5 class="mb-0 text_secondary">
                                    <span class="gotham-bold">{{$fin}}</span> <i
                                        class="fa fa-angle-down rotate-icon"></i>
                                </h5>
                            </a>
                        </div>

                        <div id="finance1" class="collapse show mb-2" role="tabpanel"
                            aria-labelledby="finance_heading_1" data-parent="#finance">

                            <div class="card-body pt-0">
                                <hr class="my-2" />
                                <div class="row">
                                    @foreach($finInfo as $info)
                                    @if($fin == date('Y', strtotime($info->year)))
                                    <div class="col-md-4 my-2">
                                        <a href="{{ asset($info->document) }}" target="_blank">
                                            <div class="investor-info-images" style="background-image: url({{ asset($info->image_path) }});
                                                                                         background-size: cover;
                                                                                         background-repeat: no-repeat;
                                                                                         height: 150px;">
                                                                                         <p class="mt-3 mb-0">{{ $info->title }}</p>
                                                                                         <p class="mb-0 line-height-5">Released: {{ $info->year }}</p>
                                            </div>
                                        </a>
                                    </div>
                                    @endif
                                    @endforeach

                                </div>
                            </div>
                        </div>

                    </div>

                </div>


                @endforeach
            </div>


            {{--                 
            Confernce
            Call     --}}
            <div class="tab-pane fade" id="conference-just" role="tabpanel" aria-labelledby="conference-tab-just">
                @foreach($conYear as $con)
                <div class="accordion md-accordion" id="conference" role="tablist" aria-multiselectable="true">

                    <div class="card my-3 border-0">
                        <div class="card-header border-0 rounded" role="tab" id="conference_heading_1">
                            <a data-toggle="collapse" data-parent="#conference" href="#conference1" aria-expanded="true"
                                aria-controls="conference1">
                                <h5 class="mb-0 text_secondary">
                                    <span class="gotham-bold">{{$con}}</span> <i
                                        class="fa fa-angle-down rotate-icon"></i>
                                </h5>
                            </a>
                        </div>

                        <div id="conference1" class="collapse show mb-2" role="tabpanel"
                            aria-labelledby="conference_heading_1" data-parent="#conference">

                            <div class="card-body pt-2">
                                <hr class="my-2" />
                                <div class="row">
                                    @foreach($conInfo as $info)
                                    @if($con == date('Y', strtotime($info->year)))
                                    <div class="col-md-4 my-2">
                                        <a href="{{ asset($info->document) }}"
                                            target="_blank">
                                            <div class="investor-info-images" style="background-image: url({{ asset($info->image_path) }});
                                                                                         background-size: cover;
                                                                                         background-repeat: no-repeat;
                                                                                         background-position: center center;
                                                                                         height: 150px;">
                                            </div>
                                            <p class="mt-3 mb-0">{{ $info->title }}</p>
                                            <p class="mb-0 line-height-5">Released: {{ $info->year }}</p>
                                        </a>
                                    </div>
                                    @endif
                                    @endforeach

                                </div>
                            </div>

                        </div>

                    </div>


                </div>
                @endforeach
            </div>


            <div class="tab-pane fade" id="press-just" role="tabpanel" aria-labelledby="press-tab-just">
                @foreach($pressYear as $press)

                <div class="accordion md-accordion" id="presstab" role="tablist" aria-multiselectable="true">

                    <div class="card my-3 border-0">
                        <div class="card-header border-0 rounded" role="tab" id="press_head_1">
                            <a data-toggle="collapse" data-parent="#presstab" href="#press1" aria-expanded="true"
                                aria-controls="press1">
                                <h5 class="mb-0 text_secondary">
                                    <span class="gotham-bold">{{$press}}</span> <i
                                        class="fa fa-angle-down rotate-icon"></i>
                                </h5>
                            </a>
                        </div>

                        <div id="press1" class="collapse show mb-2" role="tabpanel" aria-labelledby="press_head_1"
                            data-parent="#presstab">

                            <div class="card-body pt-0">
                                <hr class="my-2" />
                                <div class="row">
                                    @foreach($pressInfo as $info)
                                    @if($press == date('Y', strtotime($info->year)))
                                    <div class="col-md-4 my-2">
                                        <a href="{{ asset($info->document) }}" target="_blank">
                                            <div class="investor-info-images" style="background-image: url({{ asset($info->image_path) }});
                                                                                            background-size: cover;
                                                                                            background-repeat: no-repeat;
                                                                                            height: 150px;">
                                                                                            <p class="mt-3 mb-0">{{ $info->title }}</p>
                                                                                         <p class="mb-0 line-height-5">Released: {{ $info->year }}</p>

                                            </div>
                                        </a>
                                    </div>
                                    @endif
                                    @endforeach

                                </div>
                            </div>

                        </div>

                    </div>

                </div>
                @endforeach 
            </div>

            <div class="tab-pane fade" id="faq-just" role="tabpanel" aria-labelledby="faq-tab-just">
                <div class="row justify-content-center">
                    <div class="col-md-12">
                        <ul class="nav nav-tabs nav-justified-2 md-tabs mt-4 mb-5" id="myGovernanceTab" role="tablist">
                            <li class="nav-item waves-effect waves-light">
                                <a class="nav-link text-center active small-md" id="directors-tab-just"
                                    data-toggle="tab" href="#directors-just" role="tab" aria-controls="directors-just"
                                    aria-selected="true">General FAQs</a>
                            </li>


                            <li class="nav-item waves-effect waves-light">
                                <a class="nav-link small-md text-center" id="investor-tab-just" data-toggle="tab"
                                    href="#investor-just" role="tab" aria-controls="investor-just"
                                    aria-selected="false">Investor FAQs</a>
                            </li>
                        </ul>


                        <h6 class="gotham-bold font-weight-bold">Please note, this section applies only to Shareholders
                            of VFD Group</h6>

                        <div class="tab-content" id="">
                            <div class="tab-pane fade show active" id="directors-just" role="tabpanel"
                                aria-labelledby="directors-tab-just">
                                <div class="accordion md-accordion" id="accordionExfaq" role="tablist"
                                    aria-multiselectable="true">
                                    @foreach($generalFaq as $general)
                                    <div class="card my-3 border-0">
                                        <div class="card-header rounded" role="tab" id="faqheading1">
                                            <a data-toggle="collapse" data-parent="#accordionExfaq"
                                                href="#{{$general->id}}" aria-expanded="true"
                                                aria-controls="{{$general->id}}">
                                                <h5 class="mb-0 text_secondary">
                                                    <span class="gotham-bold">{{$general->question}}</span> <i
                                                        class="fa fa-angle-down rotate-icon"></i>
                                                </h5>

                                            </a>
                                        </div>

                                        <div id="{{$general->id}}" class="collapse show mb-2" role="tabpanel"
                                            aria-labelledby="faqheading1" data-parent="#accordionExfaq">
                                            <div class="card-body pt-0">
                                                <hr class="my-2" />
                                                {{$general->response}}.
                                            </div>
                                        </div>
                                    </div>
                                    @endforeach
                                </div>
                            </div>

                            <div class="tab-pane fade" id="portfolios-just" role="tabpanel"
                                aria-labelledby="portfolios-tab-just">
                                <div class="accordion md-accordion" id="careerfaq" role="tablist"
                                    aria-multiselectable="true">
                                    @foreach($careerFaq as $career)
                                    <div class="card my-3 border-0">
                                        <div class="card-header rounded" role="tab" id="faqheading1">
                                            <a data-toggle="collapse" data-parent="#accordionExfaq"
                                                href="#{{$career->id}}" aria-expanded="true"
                                                aria-controls="{{$career->id}}">
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
                                                {{$career->response}}.
                                            </div>
                                        </div>
                                    </div>
                                    @endforeach

                                </div>
                            </div>

                            <div class="tab-pane fade" id="investor-just" role="tabpanel"
                                aria-labelledby="investor-tab-just">
                                <div class="accordion md-accordion" id="investorfaq" role="tablist"
                                    aria-multiselectable="true">

                                    @foreach($investorFaq as $investor)
                                    <div class="card my-3 border-0">
                                        <div class="card-header rounded" role="tab" id="faqheading1">
                                            <a data-toggle="collapse" data-parent="#accordionExfaq"
                                                href="#{{$investor->id}}" aria-expanded="true"
                                                aria-controls="{{$investor->id}}">
                                                <h5 class="mb-0 text_secondary">
                                                    <span class="gotham-bold">{{$investor->question}}</span> <i
                                                        class="fa fa-angle-down rotate-icon"></i>
                                                </h5>

                                            </a>
                                        </div>

                                        <div id="{{$investor->id}}" class="collapse show mb-2" role="tabpanel"
                                            aria-labelledby="faqheading1" data-parent="#accordionExfaq">
                                            <div class="card-body pt-0">
                                                <hr class="my-2" />
                                                {{$investor->response}}.
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
        </div>





    </div>



    <!--Footer-->
    <footer class="mt-5 pt-2 font-small landing_footer border border-grey border-right-0 border-bottom-0 border-left-0">

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
</body>

<script src="{{ asset('assets/js/jquery.min.js') }}"></script>
<script src="{{ asset('assets/js/popper.min.js') }}"></script>
<script src="{{ asset('assets/js/bootstrap.min.js') }}"></script>
<script src="{{ asset('assets/js/waypoints.min.js') }}"></script>
<script src="{{ asset('assets/js/slick.js') }}"></script>
<script src="{{ asset('assets/js/mdb.js') }}"></script>
<script src="{{ asset('assets/js/utility.js') }}"></script>

</html>