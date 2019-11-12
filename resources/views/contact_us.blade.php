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
                    <img src="{{asset('assets/img/VFD%20Group%20Logo%20PNG.png')}}" width="160" class="img-fluid" id="main_logo" alt="VFD Group Logo"></a>

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

                        <li class="nav-item px-md-3 my-2 my-md-0 ">
                            <a class="nav-link bold" href="career">Careers</a>
                        </li>

                        <li class="nav-item px-md-3 my-2 my-md-0 active-link">
                            <a class="nav-link bold" href="contact">Contact Us</a>
                        </li>

                        <li class="nav-item pl-md-3 pr-md-5 my-2 my-md-0">
                            <a class="nav-link bold" href="search"><img src="{{asset('assets/img/search.svg')}}" alt="search" class="img-fluid" /></a>
                        </li>
                    </ul>
                </div>
                <!-- Collapsible content -->
            </div>
        </nav>
        <!--/.Navbar-->
        <div class="position-relative about_top_banner" >
                <div class="container">
                    <div class="row">
                        <div class="col-md-12">
                            <h3 class="font-41 text-white vertical-8 weight-semi-bold">Contact Us</h3>
                        </div>
                    </div>
                </div>
                <img src="{{ asset('assets/img/insert_subtract.png') }}" class="img-fluid position-absolute global-image-subtract d-none d-md-block" />
            </div>
        <div class="container">
            <div class="row">
                <div class="col-md-5">
                <form method="post" action="{{url('contact_us')}}">
                    {{csrf_field()}}
                        <div class="form-group">
                            <label for="name">Name</label>
                            <input type="text" class="form-control border rounded" id="name" name="name" placeholder="">
                        </div>

                        <div class="form-group">
                            <label for="email">Email address</label>
                            <input type="email" class="form-control border rounded" id="email" name="email" placeholder="">
                        </div>

                        <div class="form-group">
                            <label for="phone">Phone Number</label>
                            <input type="text" class="form-control border rounded" id="phone" name="phone" placeholder="">
                        </div>

                        <div class="form-group">
                            <label for="message">Message</label>
                            <textarea class="form-control text-area" id="message" name="message" rows="3" style=""></textarea>
                        </div>
                        <button class="btn vfd-btn-red py-2 weight-semi-bold rounded mx-md-0">Send</button>
                    </form>

                </div>

                <div class="offset-md-1 col-md-4">
                    <p class="gotham-bold text_secondary mt-5 mt-md-0">You can visit our Head Office</p>
                    <ul class="list-unstyled mb-1">
                        <li class="text_primary"><img src="{{asset('assets/img/location.svg')}}" class="img-fluid mr-1" width="12" />Foresight House,</li>
                    </ul>

                    <ul class="ml-3">
                        <li>163/165 Broad Street, <br />Marina, Lagos Island <br /> 300251 Lagos.</li>
                    </ul>

                    <ul class="list-unstyled">
                        <li class="text_primary"><img src="{{asset('assets/img/call.svg')}}" class="img-fluid mr-1" width="12" />+234 (0) 818 998 9898</li>
                    </ul>

                    <ul class="list-unstyled">
                        <li class="text_primary"><img src="{{asset('assets/img/mail.svg')}}" class="img-fluid mr-1" width="12" />MCC@Vfdgroup.com</li>
                    </ul>

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
