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
    <link rel="stylesheet" href="{{ asset('assets/css/modal-video.min.css') }}">


    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" />
    <link href="{{ asset('assets/css/Assets/animate.min.css') }}" type="text/css" rel="stylesheet" />
</head>

<body>
    <style>
        .img {
            position: relative;
            float: left;
            width: 100%;
            height: 178px;
            margin-bottom: 30px;
            background-position: 50% 50%;
            background-repeat: no-repeat;
            background-size: cover;
        }

        .img-bg {
            position: relative;
            float: left;
            width: 100%;
            height: 220px;
            /* margin-bottom: 30px; */
            background-position: 50% 50%;
            background-repeat: no-repeat;
            background-size: cover;
        }

        .read {
            position: absolute;
            bottom: 10px;
        }
    </style>
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

                    <li class="nav-item px-md-3 my-2 my-md-0">
                        <a class="nav-link bold" href="investors">Investor Information</a>
                    </li>

                    <li class="nav-item px-md-3 my-2 my-md-0 active-link">
                        <a class="nav-link bold" href="media">Media</a>
                    </li>

                    <li class="nav-item px-md-3 my-2 my-md-0 ">
                        <a class="nav-link bold" href="career">Careers</a>
                    </li>

                    <li class="nav-item px-md-3 my-2 my-md-0 ">
                        <a class="nav-link bold" href="contact_us">Contact Us</a>
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

    <div class="position-relative about_top_banner">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <h3 class="font-41 text-white vertical-7 weight-semi-bold">Media</h3>
                </div>
            </div>
        </div>
        <img src="{{ asset('assets/img/insert_subtract.png') }}"
            class="img-fluid position-absolute global-image-subtract d-none d-md-block" />
    </div>

    <div class="container">
        <div class="row">
            <div class="col-md-9">
                <ul class="nav nav-tabs nav-justified md-tabs mb-3 mt-3 media-margin" id="blogTab" role="tablist">
                    <li class="nav-item waves-effect waves-light">
                        <a class="nav-link active small-md" id="vacancies-tab-just" data-toggle="tab"
                            href="#vacancies-just" role="tab" aria-controls="vacancies-just"
                            aria-selected="true">Blog</a>
                    </li>

                    <li class="nav-item waves-effect waves-light">
                        <a class="nav-link small-md" id="portfolios-tab-just" data-toggle="tab" href="#portfolios-just"
                            role="tab" aria-controls="portfolios-just" aria-selected="true">Gallery</a>
                    </li>

                    <li class="nav-item waves-effect waves-light">
                        <a class="nav-link small-md" id="videos-tab-just" data-toggle="tab" href="#videos-just"
                            role="tab" aria-controls="videos-just" aria-selected="true">Videos</a>
                    </li>
                </ul>

                <div class="tab-content" id="myTabContentJust">

                    <div class="tab-pane fade show active" id="vacancies-just" role="tabpanel"
                        aria-labelledby="vacancies-tab-just">
                        <div class="row">
                            @foreach($blog as $blog)
                            <div class="col-md-4 my-3">

                                <div class="card">
                                    <a href="{{url('media/blog/'.$blog->id)}}"><img class="card-img-top img-bg"
                                            src="{{ asset($blog->image_path) }}" alt="post"></a>
                                    <div class="card-body grey-bg px-3" style="height: 220px">

                                        <p class="card-title weight-semi-bold"><a href="{{url('media/blog/'.$blog->id)}}">{!! str_limit($blog->title, 20)!!}</a>
                                        </p>

                                        <p class="font-13">{!! str_limit($blog->content, 200)!!}</p>
                                        <a href="{{url('media/blog/'.$blog->id)}}"
                                            class="vfd-text-red weight-semi-bold read">Read More</a>
                                    </div>
                                </div>
                            </div>
                            @endforeach
                        </div>

                    </div>

                    <div class="tab-pane fade" id="portfolios-just" role="tabpanel"
                        aria-labelledby="portfolios-tab-just">
                        <div class="accordion md-accordion" id="accordionEx" role="tablist" aria-multiselectable="true">
                            @foreach($galYear as $gal)

                            <div class="card my-3 border-0">

                                <div class="card-header border rounded" role="tab" id="headingOne1">
                                    <a data-toggle="collapse" data-parent="#accordionEx" href="#{{$gal}}--"
                                        aria-expanded="true" aria-controls="collapseOne1">
                                        <h5 class="mb-0 text_secondary">
                                            <span class="gotham-bold">{{$gal}}</span> <i
                                                class="fa fa-angle-down rotate-icon"></i>
                                        </h5>
                                    </a>
                                </div>

                                <div id="{{$gal}}--" class="collapse show my-4" role="tabpanel"
                                    aria-labelledby="headingOne1" data-parent="#accordionEx">

                                    <div class="row">
                                        @foreach($gallery as $info)
                                        @if($gal == date('Y', strtotime($info->year)))
                                        @foreach(json_decode($info->image_path) as $path)
                                        <div class="col-md-3">

                                            <img src="{{ asset($path) }}" width="200" height="200"
                                                alt="{{$info->title}}" class="img img-fluid" />

                                        </div>
                                        @endforeach
                                        @endif
                                        @endforeach
                                    </div>

                                </div>

                            </div>
                            @endforeach
                        </div>
                    </div>

                    <div class="tab-pane fade" id="videos-just" role="tabpanel" aria-labelledby="portfolios-tab-just">
                        <div class="accordion md-accordion" id="accordionEx3" role="tablist"
                            aria-multiselectable="true">

                            @foreach($vidYear as $vid)

                            <div class="card my-3 border-0">

                                <div class="card-header border rounded" role="tab" id="heading1">
                                    <a data-toggle="collapse" data-parent="#accordionEx3" href="#{{$vid}}"
                                        aria-expanded="true" aria-controls="videos1">
                                        <h5 class="mb-0 text_secondary">
                                            <span class="gotham-bold">{{$vid}}</span> <i
                                                class="fa fa-angle-down rotate-icon"></i>
                                        </h5>
                                    </a>
                                </div>

                                <div id="{{$vid}}" class="collapse show my-4" role="tabpanel" aria-labelledby="heading1"
                                    data-parent="#accordionEx">

                                    <div class="row">
                                        @foreach($video as $info)
                                        @if($vid == date('Y', strtotime($info->year)))
                                        {{-- @foreach($info->link as $path) --}}
                                        <div class="col-md-4 my-2">
                                            <img src="http://img.youtube.com/vi/{{$info->link}}/hqdefault.jpg"
                                                alt="Annual general meeting" class="img-fluid cursor js-modal-btn"
                                                data-video-id="{{$info->link}}" />
                                        </div>

                                        {{-- <div class="col-md-4 my-2">
                                            <img src="http://img.youtube.com/vi/uFIkbzJfF4c/hqdefault.jpg"
                                                alt="Annual general meeting"
                                                class="cursor img-fluid cursor js-modal-btn"
                                                data-video-id="uFIkbzJfF4c" />
                                        </div>

                                        <div class="col-md-4 my-2">
                                            <img src="http://img.youtube.com/vi/uFIkbzJfF4c/hqdefault.jpg"
                                                alt="Annual general meeting"
                                                class="cursor img-fluid cursor js-modal-btn"
                                                data-video-id="uFIkbzJfF4c" />
                                        </div> --}}

                                        {{-- @endforeach --}}
                                        @endif
                                        @endforeach
                                    </div>

                                </div>

                            </div>
                            @endforeach
                        </div>
                    </div>

                </div>
            </div>

            <div class="col-md-3">
                <div class="mt- vertical-9 card shadow">
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
<script src="{{ asset('assets/js/modal-video.min.js') }}"></script>
<script>
    //        $(".js-modal-btn").modalVideo();
        window.addEventListener('DOMContentLoaded',function(){
            new ModalVideo(".js-modal-btn");
        });
</script>

</html>