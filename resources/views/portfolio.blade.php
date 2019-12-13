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
    {{-- <link rel="stylesheet" href="{{ asset('assets/css/Assets/mdb.min.css') }}"> --}}
    <link rel="stylesheet" href="{{ asset('assets/css/Assets/mdb-theme.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/media-queries.css') }}">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" />
    <link href="{{ asset('assets/css/Assets/animate.min.css') }}" type="text/css" rel="stylesheet" />
</head>
<!-- {{ asset('') }} -->

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


                    <li class="nav-item px-md-3 my-2 my-md-0 active-link">
                        <a class="nav-link bold" href="portfolio">Our Portfolio</a>
                    </li>

                    <li class="nav-item px-md-3 my-2 my-md-0">
                        <a class="nav-link bold" href="investors">Investor Information</a>
                    </li>

                    <li class="nav-item px-md-3 my-2 my-md-0">
                        <a class="nav-link bold" href="media">Media</a>
                    </li>

                    <li class="nav-item px-md-3 my-2 my-md-0">
                        <a class="nav-link bold" href="career">Careers</a>
                    </li>

                    <li class="nav-item px-md-3 my-2 my-md-0">
                        <a class="nav-link bold" href="contact_us">Contact Us</a>
                    </li>

                    <li class="nav-item px-md-3 pr-md-5 my-2 my-md-0">
                        <a class="nav-link bold" href="search"><img src="{{ asset('assets/img/search.svg') }}"
                                alt="search" class="img-fluid" /></a>
                    </li>
                </ul>
            </div>
            <!-- Collapsible content -->
        </div>
    </nav>
    <!--/.Navbar-->

    <div class="position-relative portfolio_top_banner" style="background-image: url({{ asset($banner->portfolio) }}">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <h3 class="font-41 text-white vertical-8 weight-semi-bold">Portfolio</h3>
                </div>
            </div>
        </div>
        <img src="{{ asset('assets/img/insert_subtract.png') }}"
            class="img-fluid position-absolute global-image-subtract d-none d-md-block" />
    </div>
    <div class="container vertical-1">
        <div class="row mt-4 font-17">
            <div class="col-md-8 cms-content">
                {!!$company->portfolio!!}
                <div class="row">
                    @foreach($services as $service)
                    <div class="col-md-6">
                        <ul>
                            <li class="custom-list my-2"><a class="service-link"
                                    href="{{$service->link}}">{{$service->name}}</a></li>
                        </ul>
                    </div>
                    @endforeach
                </div>
                @if(count($product) >= 1)
                <div class="row">
                    <div class="col-md-10">
                        <p>Click on any of the portfolio companies below to find out more:</p>
                    </div>
                </div>
                @endif
                <div class="row my-4">
                    @foreach($product as $product)
                    <div class="col-md-4 my-3">
                        <div class="text-center p-2 border onhover rounded-2" data-toggle="modal"
                            data-target="#{{$product->name}}">
                            <img src="{{ asset($product->image) }}" alt="Everdon" class="img-fluid" />
                        </div>
                    </div>
                    @endforeach
                </div>


            </div>

            <div class="col-md-4">
                    @if($company->quote)
                    <img src="{{ asset('assets/img/%E2%80%9C.png') }}" class="img-fluid apostrophe-1" />
                    <p class="font-26 text-green-deep gotham-bold weight-semi-bold text-center">
                        {!! $company->quote !!}
                    </p>
                    @endif
                @if($company->profile)
                <div class="card mb-5 onhover cursor" data-toggle="modal" data-target="#download">
                    <img src="{{ asset('assets/img/download_2.png') }}" class="card-img-top" alt="...">
                    <div class="card-body pt-0 d-flex px-0">
                        <div class="col-8">
                            <h5 class="card-title mb-0 font-weight-bold font-12">VFD Group Profile</h5>
                            <p class="card-text font-12 mb-0">Download for March 28th</p>
                        </div>

                        <div class="col ml-auto">
                            <img src="{{ asset('assets/img/download.png') }}" class="img-fluid float-right" />
                        </div>
                    </div>
                </div>
                @endif

                <div class="mt-4">
                    <a class="twitter-timeline" data-width="400" data-height="350"
                        href="https://twitter.com/VFDGroup?ref_src=twsrc%5Etfw">Tweets by VFDGroup</a>
                    <script async src="https://platform.twitter.com/widgets.js" charset="utf-8"></script>
                </div>
            </div>

        </div>
    </div>



    <!-- Modal -->
    @foreach($sub as $product)
    <div class="modal fade" id="{{$product->name}}" tabindex="-1" role="dialog" aria-labelledby="everdonLabel"
        aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header border-0 pb-0">
                    <img src="{{ asset($product->image) }}" alt="everdon logo" class="img-fluid" />
                    <img src="{{ asset('assets/img/close_button.png') }}" alt="close button"
                        class="img-fluid position-absolute close_button" data-dismiss="modal" aria-label="Close" />
                    <button type="button" class="d-none">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    {!! $product->description !!}
                </div>
                <div class="modal-footer px-5 py-4 border-0">
                    <a class="vfd-text-red" href="{{url($product->link)}}" target="_blank">Visit Website</a>
                </div>
            </div>
        </div>
    </div>
    @endforeach

    <!--       Download modal-->
    <div class="modal fade" id="download" tabindex="-1" role="dialog" aria-labelledby="" aria-hidden="true">
            <div class="modal-dialog download-modal modal-dialog-centered" role="document">
                <div class="modal-content">
                    <div class="modal-header border-0 pb-0">
                        <img src="{{ asset('assets/img/close_button.png') }}" alt="close button"
                            class="img-fluid position-absolute close_button" data-dismiss="modal" aria-label="Close" />
                        <button type="button" class="d-none">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
    
    
    
                    <div class="modal-body">
                        <div class="row justfy-content-center">
                            <div class="col-md-10">
                                <h5 class="gotham-bold mb-3">Download VFD Group Profile</h5>
                                <form action="{{ url('about') }}" method="post" enctype="multipart/form-data" role="form">
                                    {{ csrf_field() }}
                                    <div class="form-row">
                                        <div class="col">
                                            <label for="name">Your Name</label>
                                            <input id="name" type="text" name="name" class="form-control border rounded"
                                                placeholder="">
                                        </div>
                                    </div>
    
                                    <div class="form-row">
                                        <div class="col">
                                            <label for="email">Your Email</label>
                                            <input id="email" type="email" name="email" class="form-control border rounded">
                                        </div>
                                    </div>
                                    <button class="vfd-text-red">Download</button>
                                </form>
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
                            <a href="{{url('/policy')}}">Policy</a></p>
                    </div>

                    <div class="col-md-3 col-lg-3">
                        <p class="small text-center text-dark text-md-left grey-text font-weight-bold my-3 spacing-2">
                            <a href="{{url('/disclosure')}}">Regulatory Disclosure</a></p>
                    </div>

                    <div class="col-md-2 col-lg-2">
                        <p class="small text-center text-dark text-md-left grey-text font-weight-bold my-3 spacing-2">
                            <a href="#">Sitemap</a></p>
                    </div>

                    <div class="col-md-3 col-lg-3">
                        <p class="small text-center text-dark text-md-left grey-text font-weight-bold my-3 spacing-2">
                            <a href="{{url('/terms')}}">Terms and Conditions</a></p>
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
<script src="{{ asset('assets/js/slick.js') }}"></script>
<script src="{{ asset('assets/js/mdb.js') }}"></script>
<script src="{{ asset('assets/js/utility.js') }}"></script>

</html>