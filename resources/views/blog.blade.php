<!DOCTYPE html>
<html lang="">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="VFD Group |  Global Network &#8211; Worldwide Strength">
    <meta name="author" content="VFD Group">
    <meta name="viewport" content="width=device-width, initial-scale=1">
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

                    <li class="nav-item px-md-3 my-2 my-md-0 active-link">
                        <a class="nav-link bold" href="{{url('/media')}}">Media</a>
                    </li>

                    <li class="nav-item px-md-3 my-2 my-md-0 ">
                        <a class="nav-link bold" href="{{url('/career')}}">Careers</a>
                    </li>

                    <li class="nav-item px-md-3 my-2 my-md-0 ">
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


    <div class="bg-board-detail vertical-4">
        <div class="container-fluid mx-md-5">
            <div class="row">
                <div class="col-md-12">
                    <h3 class="text-green gotham-bold my-4 font-weight-bold"> {{$blog->title}}</h3>
                </div>
            </div>
        </div>
    </div>

    <div class="container-fluid mx-md-5">
        <div class="row mt-4">
            <div class="col-md-8">
                <div class="mb-3"
                    style="background-image: url({{ asset($blog->image_path) }}); height: 320px; width: 100%; background-repeat: no-repeat; background-position: center center; background-size: cover;">
                </div>

                <p class="text-grey"><span><i class="fa fa-calendar mr-2"> </i> {{$blog->created_at}}</span> <span
                        class="mx-2">|</span> <span class=""><i class="fa fa-user mr-2"></i> By Admin</span> </p>

                <h5 class="font-weight-bold text-md-left text-center">{{$blog->title}}</h5>

                <p class="">{!!$blog->content!!}</p>



            </div>

            <div class="col-md-3 col-md-1">
                <h6 class="weight-semi-bold text-md-left text-center mb-3 mt-2">More Blog Posts...</h6>

                @foreach($blogs as $blogs)

                <div class="card mb-4">
                    <img class="card-img-top" src="{{asset($blogs->image_path)}}" alt="post">

                    <div class="card-body grey-bg px-3 cms-content">

                        <p class="card-title weight-semi-bold"><a href="{{url('/media/blog', ['$id' => $blogs->id])}}">{!! $blogs->title !!}</a></p>

                        <p class="font-13">{!! str_limit($blogs->content, $limit = 200, $end = '...') !!}</p>
                    <a href="{{url('/media/blog', ['$id' => $blogs->id])}}" class="vfd-text-red weight-semi-bold">Read More</a>

                    </div>
                </div>
                @endforeach


                <div class="card mb-4">
                    <a class="twitter-timeline" data-width="300" data-height="300"
                        href="https://twitter.com/VFDGroup?ref_src=twsrc%5Etfw">Tweets by VFDGroup</a>
                    <script async src="https://platform.twitter.com/widgets.js" charset="utf-8"></script>
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
    
    <!-- Search modal -->
    <div class="modal fade bd-example-modal-lg" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel"
        aria-hidden="true">
        <div class="modal-dialog modal-lg" style="max-width: 95%;">
            <div class="modal-content">
                <form>
                    <div class="form-group mb-0" style="position: relative">
                        <input type="text" class="rounded-0 form-control" id="search" placeholder="search">
                        <img src="img/search_bar_icon.png" alt="search icon"
                            style="position: absolute; right: 10px; top: 10px;" />
                    </div>
                </form>
            </div>
        </div>
    </div>

</body>
<script src='js/jquery.min.js'></script>
<script src="js/popper.min.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/mdb.js"></script>
<script src="js/utility.js"></script>

</html>