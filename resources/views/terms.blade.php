<!DOCTYPE html>
<html lang="">

    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="description" content="VFD Group |  Global Network &#8211; Worldwide Strength">
        <meta name="author" content="VFD Group">
        <title>VFD Group |  Global Network &#8211; Worldwide Strength</title>
        <!--favicicon-->
        <link rel="shortcut icon" href="img/favicon.png" />
        <link rel="apple-touch-icon" href="img/favicon.png" />

        <link rel="stylesheet" href="css/style.css">
        <link rel="stylesheet" href="css/slick.css">
        <link rel="stylesheet" href="css/slick-theme.css">
        <link rel="stylesheet" href="css/hamburger.min.css">
        <link rel="stylesheet" href="css/fonts.css">
        <link rel="stylesheet" href="css/Assets/bootstrap.min.css">
        <link rel="stylesheet" href="css/Assets/mdb.min.css">
        <link rel="stylesheet" href="css/Assets/mdb-theme.min.css">
        <link rel="stylesheet" href="css/media-queries.css">


        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" />
        <link href="css/Assets/animate.min.css" type="text/css" rel="stylesheet" />

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

                <a class="navbar-brand" href="index.html">
                    <img src="img/VFD%20Group%20Logo%20PNG.png" width="160" class="img-fluid" id="main_logo" alt="VFD Group Logo"></a>

                <!-- Collapse button -->
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span>
                </button>


                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav ml-auto">


                        <li class="nav-item px-md-3 my-2 my-md-0">
                            <a class="nav-link bold  " href="index.html">Home</a>
                        </li>

                        <li class="nav-item px-md-3 my-2 my-md-0">
                            <a class="nav-link bold" href="about_us.html">About Us</a>
                        </li>


                        <li class="nav-item px-md-3 my-2 my-md-0">
                            <a class="nav-link bold" href="portfolio.html">Our Portfolio</a>
                        </li>

                        <li class="nav-item px-md-3 my-2 my-md-0">
                            <a class="nav-link bold" href="investor_info.html">Investor Information</a>
                        </li>

                        <li class="nav-item px-md-3 my-2 my-md-0">
                            <a class="nav-link bold" href="media.html">Media</a>
                        </li>

                        <li class="nav-item px-md-3 my-2 my-md-0">
                            <a class="nav-link bold" href="career.html">Careers</a>
                        </li>

                        <li class="nav-item px-md-3 my-2 my-md-0">
                            <a class="nav-link bold" href="contact_us.html">Contact Us</a>
                        </li>

                        <li class="nav-item pl-md-3 pr-md-5 my-2 my-md-0">
                            <a class="nav-link bold" href="javascript.void()" data-toggle="modal" data-target=".bd-example-modal-lg"><img src="img/search.svg" alt="search" class="img-fluid" /></a>
                        </li>
                    </ul>
                </div>
                <!-- Collapsible content -->
            </div>
        </nav>
        <!--/.Navbar-->

        <div class="position-relative career_top_banner" >
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <h3 class="font-41 text-white vertical-8 weight-semi-bold">Terms and conditions</h3>
                    </div>
                </div>
            </div>
            <img src="img/insert_subtract.png" class="img-fluid position-absolute global-image-subtract d-none d-md-block" />
        </div>

        <div class="container">
            <div class="row mt-4 mb-3 p-font-17">
                <div class="col-md-12">
                    <p class="">    {!! $company->terms !!} </p>
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




        <!-- Search modal -->
        <div class="modal fade bd-example-modal-lg" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-lg" style="max-width: 95%;">
                <div class="modal-content">
                    <form>
                        <div class="form-group mb-0" style="position: relative">
                            <input type="text" class="rounded-0 form-control" id="search" placeholder="search">
                            <img src="img/search_bar_icon.png" alt="search icon" style="position: absolute; right: 10px; top: 10px;"/>
                        </div>
                    </form>
                </div>
            </div>
        </div>


    </body>

    <script src='js/jquery.min.js'></script>
    <script src="js/popper.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/slick.js"></script>
    <script src="js/mdb.js"></script>
    <script src="js/utility.js"></script>
    <script src="js/modal-video.min.js"></script>
</html>
