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

                            <li class="nav-item px-md-3 my-2 my-md-0 active-link">
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

                            <li class="nav-item px-md-3 my-2 my-md-0 ">
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

    <div class="bg-board-detail vertical-4">
        <div class="container-fluid mx-md-5">
            <div class="row">
                <div class="col-md-12">
                    <h3 class="text-green gotham-bold my-4 font-weight-bold"> <a data-previous="{{ url()->previous().'?sub=subsidiary-just' }}"
                            href="javascript:void(0)" id="setPrev"><i
                                class="fa fa-angle-left text-dark mr-5"></i></a> {{$profile->role}}</h3>
                    <!-- <h3 class="text-green gotham-bold my-4 font-weight-bold"> <a
                            href="{{ url()->previous().'?sub=subsidiary-just' }}" id="setPrev"><i
                                class="fa fa-angle-left text-dark mr-5"></i></a> {{$profile->role}}</!-->
                </div>
            </div>
        </div>
    </div>

    <div class="container-fluid mx-md-5">
        <div class="row mt-5">
            <div class="col-md-4">
                <div class="text-center mb-3">
                    <img class="img-fluid" width="300" alt="{{$profile->name}}" src="{{ asset($profile->image)}}" />
                </div>

                <ul class="list-inline text-center">
                    @if($profile->facebook)
                    <li class="list-inline-item"><a target="_blank" href="{{$profile->facebook}}"><img
                                src="{{ asset('assets/img/social_icons/facebook.png')}}" class="img-fluid" /></a></li>
                    @endif
                    @if($profile->linkedin)
                    <li class="list-inline-item"><a target="_blank" href="{{$profile->linkedin}}"><img
                                src="{{ asset('assets/img/social_icons/linkedin.png')}}" class="img-fluid" /></a></li>
                    @endif
                    @if($profile->instagram)
                    <li class="list-inline-item"><a target="_blank" href="{{$profile->instagram}}"><img
                                src="{{ asset('assets/img/social_icons/instagram.png')}}" class="img-fluid" /></a></li>
                    @endif
                    @if($profile->twitter)
                    <li class="list-inline-item"><a target="_blank" href="{{$profile->twitter}}"><img
                                src="{{ asset('assets/img/social_icons/twitter.png')}}" class="img-fluid" /></a></li>
                    @endif
                </ul>
            </div>

            <div class="col-md-6">
                <h5 class="font-weight-bold text-md-left text-center" data-toggle="modal"
                    data-target="#{{$profile->name}}">{{$profile->name}}</h5>
                <p class="text-md-left text-center">{{$profile->role}}</p>

                {!! $profile->brief!!}

                {!! $profile->description!!}

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
<script src="{{ asset('assets/js/slick.js') }}"></script>
<script src="{{ asset('assets/js/mdb.js') }}"></script>
<script src="{{ asset('assets/js/utility.js') }}"></script>
<script>

let pathArray = "";

$( document ).ready(function() {

let pathArray = window.location.pathname.split('/');

    $('#setPrev').click(function() {
        var url = $(this).data('previous');
        var split = url.split("?");
        window.location = `${split[0]}?sub=subsidiary-just&sec=${pathArray[3]}`;        
    });
});

</script>

</html>
