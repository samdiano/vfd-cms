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

                    <li class="nav-item px-md-3 my-2 my-md-0">
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
    <div class="position-relative about_top_banner">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <h3 class="font-41 text-white vertical-7 weight-semi-bold">About Us</h3>
                </div>
            </div>
        </div>
        <img src="{{ asset('assets/img/insert_subtract.png') }}"
            class="img-fluid position-absolute global-image-subtract d-none d-md-block" />
    </div>

    <div class="container-fluid">

        <ul class="nav nav-tabs nav-justified md-tabs" id="myTabJust" role="tablist">
            <li class="nav-item waves-effect waves-light">
                <a class="nav-link active small-md" id="home-tab-just" data-toggle="tab" href="#home-just" role="tab"
                    aria-controls="home-just" aria-selected="true">The Company</a>
            </li>
            <li class="nav-item waves-effect waves-light">
                <a class="nav-link small-md" id="subsidiary-tab-just" data-toggle="tab" href="#subsidiary-just"
                    role="tab" aria-controls="subsidiary-just" aria-selected="true">Governance</a>
            </li>

            <li class="nav-item waves-effect waves-light">
                <a class="nav-link small-md" id="board-tab-just" data-toggle="tab" href="#board-just" role="tab"
                    aria-controls="board-just" aria-selected="false">Our History</a>
            </li>
            <li class="nav-item small-md waves-effect waves-light">
                <a class="nav-link" id="leadership-tab-just" data-toggle="tab" href="#leadership-just" role="tab"
                    aria-controls="leadership-just" aria-selected="false">Our Culture</a>
            </li>
            <li class="nav-item small-md waves-effect waves-light">
                <a class="nav-link" id="values-tab-just" data-toggle="tab" href="#values-just" role="tab"
                    aria-controls="values-just" aria-selected="false">Our Impact</a>
            </li>
        </ul>

        <div class="tab-content p-font-17" id="myTabContentJust">
            <!--                ABout Tab-->
            <div class="tab-pane fade show active" id="home-just" role="tabpanel" aria-labelledby="home-tab-just">

                <div class="row justify-content-center">
                    <div class="col-md-5">
                        <h2 class="text_primary text-center font-weight-bold my-4">About the Company</h2>
                    </div>
                </div>

                <div class="row justify-content-center">
                    <div class="col-md-7">

                        {!! $company->about !!}

                        <div class="position-relative">
                            <p class="font-weight-bold ml-md-2 text-green-deep gotham-bold mt-5 font-18">{!!
                                $company->about_quote !!}</p>
                            <img src="{{ asset('assets/img/%E2%80%9C.png') }}" class="img-fluid apostrophe-1 pt-4" />

                        </div>
                        {!! $company->about_text !!}
                    </div>


                    <div class="offset-md-1 col-md-3">
                        <img src="{{ asset('assets/img/%E2%80%9C.png') }}" class="img-fluid apostrophe-1" />
                        <p class="font-26 text-green-deep gotham-bold weight-semi-bold text-center">
                            {!! $company->about_quote_side !!}
                        </p>
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
                        <div class="mt-4 card shadow">
                            <a class="twitter-timeline" data-width="300" data-height="300"
                                href="https://twitter.com/VFDGroup?ref_src=twsrc%5Etfw">Tweets by VFDGroup</a>
                            <script async src="https://platform.twitter.com/widgets.js" charset="utf-8"></script>
                        </div>
                    </div>

                </div>

            </div>

            <!--                Governance Tab-->
            <div class="tab-pane fade" id="subsidiary-just" role="tabpanel" aria-labelledby="subsidiary-tab-just">

                <div class="row justify-content-center">
                    <div class="col-md-5 text-center">
                        <h2 class="text_primary text-center font-weight-bold mt-4">Governance</h2>
                    </div>
                </div>

                <div class="row justify-content-center">
                    <div class="col-md-12">
                        <ul class="nav nav-tabs nav-justified-2 md-tabs mt-4 mb-5" id="myGovernanceTab" role="tablist">
                            <li class="nav-item waves-effect waves-light">
                                <a class="nav-link active small-md text-center" id="directors-tab-just"
                                    data-toggle="tab" href="#directors-just" role="tab" aria-controls="directors-just"
                                    aria-selected="true">Board of Directors</a>
                            </li>
                            <li class="nav-item waves-effect waves-light">
                                <a class="nav-link small-md text-center" id="portfolios-tab-just" data-toggle="tab"
                                    href="#portfolios-just" role="tab" aria-controls="portfolios-just"
                                    aria-selected="true">Head of Portfolios</a>
                            </li>

                            <li class="nav-item waves-effect waves-light">
                                <a class="nav-link small-md text-center" id="management-tab-just" data-toggle="tab"
                                    href="#management-just" role="tab" aria-controls="management-just"
                                    aria-selected="false">Management Team</a>
                            </li>
                        </ul>

                        <div class="tab-content">
                            <div class="tab-pane fade show active" id="directors-just" role="tabpanel"
                                aria-labelledby="directors-tab-just">
                                <div class="row justify-content-center">
                                    @foreach($directors as $director)
                                    <div class="col-md-5 border-bottom md-border-right border-left py-3">
                                        <div class="row">
                                            <div class="col-md-5" data-toggle="modal" data-target="#{{$director->id}}">
                                                <div class="curso" style="background-image: url({{ asset($director->image) }});
                                                                              background-size: contain;
                                                                              background-position: center;
                                                                              background-repeat: no-repeat;
                                                                              width: 100%;
                                                                              height: 250px;">

                                                </div>
                                            </div>

                                            <div class="col-md-6">
                                                <h5 class="cursor font-weight-bold mt-3 text-md-left text-center"
                                                    data-toggle="modal" data-target="#{{$director->id}}">
                                                    {{$director->name}}</h5>
                                                <p class="text-md-left text-center">{{$director->role}}</p>
                                            </div>
                                        </div>
                                    </div>

                                    @endforeach
                                </div>
                                @foreach($directors as $director)
                                <div class="modal fade" id="{{$director->id}}" tabindex="-1" role="dialog"
                                    aria-labelledby="exec_infoLabel" aria-hidden="true">
                                    <div class="modal-dialog modal-dialog-centered" role="document">
                                        <div class="modal-content">
                                            <div class="modal-header border-0 pb-0">
                                                <img src="{{ asset('assets/img/close_button.png') }}" alt="close button"
                                                    class="img-fluid position-absolute close_button"
                                                    data-dismiss="modal" aria-label="Close" />
                                                <button type="button" class="d-none">
                                                    <span aria-hidden="true">&times;</span>
                                                </button>
                                            </div>
                                            <div class="modal-body">
                                                <div class="row">

                                                    <div class="col-md-5">
                                                        <div style="background-image: url({{ asset($director->image) }});
                                                                            background-size: contain;
                                                                            background-position: center;
                                                                            background-repeat: no-repeat;
                                                                            width: 100%;
                                                                            height: 250px;">

                                                        </div>
                                                    </div>

                                                    <div class="col-md-7">
                                                        <h6 class="font-weight-bold">{{$director->role}}</h6>
                                                        <h4 class="font-weight-bold gotham-bold">{{$director->name}}
                                                        </h4>
                                                        <p class="small">{!! $director->brief !!}
                                                            <a href="{{ url('profile',['id' => $director->id]) }}"
                                                                class="text-danger mb-3">Detailed Profile</a>

                                                            <ul class="list-inline mt-2">
                                                                @if($director->facebook)
                                                                <li class="list-inline-item"><a target="_blank"
                                                                        href="{{$director->facebook}}"><img
                                                                            src="{{ asset('assets/img/social_icons/facebook.png')}}"
                                                                            class="img-fluid" /></a></li>
                                                                @endif
                                                                @if($director->linkedin)
                                                                <li class="list-inline-item"><a target="_blank"
                                                                        href="{{$director->linkedin}}"><img
                                                                            src="{{ asset('assets/img/social_icons/linkedin.png')}}"
                                                                            class="img-fluid" /></a></li>
                                                                @endif
                                                                @if($director->instagram)
                                                                <li class="list-inline-item"><a target="_blank"
                                                                        href="{{$director->instagram}}"><img
                                                                            src="{{ asset('assets/img/social_icons/instagram.png')}}"
                                                                            class="img-fluid" /></a></li>
                                                                @endif
                                                                @if($director->twitter)
                                                                <li class="list-inline-item"><a target="_blank"
                                                                        href="{{$director->twitter}}"><img
                                                                            src="{{ asset('assets/img/social_icons/twitter.png')}}"
                                                                            class="img-fluid" /></a></li>
                                                                @endif
                                                            </ul>
                                                    </div>
                                                </div>

                                            </div>
                                            <div class="modal-footer px-5 py-4 border-0">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                @endforeach

                            </div>

                            <div class="tab-pane fade" id="portfolios-just" role="tabpanel"
                                aria-labelledby="portfolios-tab-just">
                                @foreach($portfolio as $director)
                                <div class="row justify-content-center">
                                    <div class="col-md-5 border-bottom md-border-right border-left py-3">
                                        <div class="row">
                                            <div class="col-md-5" data-toggle="modal" data-target="#{{$director->id}}">
                                                <div class="curso" style="background-image: url({{ asset($director->image) }});
                                                                                  background-size: contain;
                                                                                  background-position: center;
                                                                                  background-repeat: no-repeat;
                                                                                  width: 100%;
                                                                                  height: 250px;">

                                                </div>
                                            </div>

                                            <div class="col-md-6">
                                                <h5 class="cursor font-weight-bold mt-3 text-md-left text-center"
                                                    data-toggle="modal" data-target="#{{$director->id}}">
                                                    {{$director->name}}</h5>
                                                <p class="text-md-left text-center">{{$director->role}}</p>
                                            </div>
                                        </div>
                                    </div>

                                </div>


                                <div class="modal fade" id="{{$director->id}}" tabindex="-1" role="dialog"
                                    aria-labelledby="exec_infoLabel" aria-hidden="true">
                                    <div class="modal-dialog modal-dialog-centered" role="document">
                                        <div class="modal-content">
                                            <div class="modal-header border-0 pb-0">
                                                <img src="{{ asset('assets/img/close_button.png') }}" alt="close button"
                                                    class="img-fluid position-absolute close_button"
                                                    data-dismiss="modal" aria-label="Close" />
                                                <button type="button" class="d-none">
                                                    <span aria-hidden="true">&times;</span>
                                                </button>
                                            </div>
                                            <div class="modal-body">
                                                <div class="row">

                                                    <div class="col-md-5">
                                                        <div style="background-image: url({{ asset($director->image) }});
                                                                                background-size: contain;
                                                                                background-position: center;
                                                                                background-repeat: no-repeat;
                                                                                width: 100%;
                                                                                height: 250px;">

                                                        </div>
                                                    </div>

                                                    <div class="col-md-7">
                                                        <h6 class="font-weight-bold">{{$director->role}}</h6>
                                                        <h4 class="font-weight-bold gotham-bold">{{$director->name}}
                                                        </h4>
                                                        <p class="small">{!! $director->brief !!}
                                                            <a href="{{ url('profile',['id' => $director->id]) }}"
                                                                class="text-danger mb-3">Detailed Profile</a>

                                                            <ul class="list-inline mt-2">
                                                                @if($director->facebook)
                                                                <li class="list-inline-item"><a target="_blank"
                                                                        href="{{$director->facebook}}"><img
                                                                            src="{{ asset('assets/img/social_icons/facebook.png')}}"
                                                                            class="img-fluid" /></a></li>
                                                                @endif
                                                                @if($director->linkedin)
                                                                <li class="list-inline-item"><a target="_blank"
                                                                        href="{{$director->linkedin}}"><img
                                                                            src="{{ asset('assets/img/social_icons/linkedin.png')}}"
                                                                            class="img-fluid" /></a></li>
                                                                @endif
                                                                @if($director->instagram)
                                                                <li class="list-inline-item"><a target="_blank"
                                                                        href="{{$director->instagram}}"><img
                                                                            src="{{ asset('assets/img/social_icons/instagram.png')}}"
                                                                            class="img-fluid" /></a></li>
                                                                @endif
                                                                @if($director->twitter)
                                                                <li class="list-inline-item"><a target="_blank"
                                                                        href="{{$director->twitter}}"><img
                                                                            src="{{ asset('assets/img/social_icons/twitter.png')}}"
                                                                            class="img-fluid" /></a></li>
                                                                @endif
                                                            </ul>
                                                    </div>
                                                </div>

                                            </div>
                                            <div class="modal-footer px-5 py-4 border-0">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                @endforeach
                            </div>


                            <div class="tab-pane fade" id="management-just" role="tabpanel"
                                aria-labelledby="management-tab-just">

                                @foreach($management as $director)
                                <div class="row justify-content-center">
                                    <div class="col-md-5 border-bottom md-border-right border-left py-3">
                                        <div class="row">
                                            <div class="col-md-5" data-toggle="modal" data-target="#{{$director->id}}">
                                                <div class="curso" style="background-image: url({{ asset($director->image) }});
                                                                                  background-size: contain;
                                                                                  background-position: center;
                                                                                  background-repeat: no-repeat;
                                                                                  width: 100%;
                                                                                  height: 250px;">

                                                </div>
                                            </div>

                                            <div class="col-md-6">
                                                <h5 class="cursor font-weight-bold mt-3 text-md-left text-center"
                                                    data-toggle="modal" data-target="#{{$director->id}}">
                                                    {{$director->name}}</h5>
                                                <p class="text-md-left text-center">{{$director->role}}</p>
                                            </div>
                                        </div>
                                    </div>

                                </div>


                                <div class="modal fade" id="{{$director->id}}" tabindex="-1" role="dialog"
                                    aria-labelledby="exec_infoLabel" aria-hidden="true">
                                    <div class="modal-dialog modal-dialog-centered" role="document">
                                        <div class="modal-content">
                                            <div class="modal-header border-0 pb-0">
                                                <img src="{{ asset('assets/img/close_button.png') }}" alt="close button"
                                                    class="img-fluid position-absolute close_button"
                                                    data-dismiss="modal" aria-label="Close" />
                                                <button type="button" class="d-none">
                                                    <span aria-hidden="true">&times;</span>
                                                </button>
                                            </div>
                                            <div class="modal-body">
                                                <div class="row">

                                                    <div class="col-md-5">
                                                        <div style="background-image: url({{ asset($director->image) }});
                                                                                background-size: contain;
                                                                                background-position: center;
                                                                                background-repeat: no-repeat;
                                                                                width: 100%;
                                                                                height: 250px;">

                                                        </div>
                                                    </div>

                                                    <div class="col-md-7">
                                                        <h6 class="font-weight-bold">{{$director->role}}</h6>
                                                        <h4 class="font-weight-bold gotham-bold">{{$director->name}}
                                                        </h4>
                                                        <p class="small">{!! $director->brief !!}
                                                            <a href="{{ url('profile',['id' => $director->id]) }}"
                                                                class="text-danger mb-3">Detailed Profile</a>

                                                            <ul class="list-inline mt-2">
                                                                @if($director->facebook)
                                                                <li class="list-inline-item"><a target="_blank"
                                                                        href="{{$director->facebook}}"><img
                                                                            src="{{ asset('assets/img/social_icons/facebook.png')}}"
                                                                            class="img-fluid" /></a></li>
                                                                @endif
                                                                @if($director->linkedin)
                                                                <li class="list-inline-item"><a target="_blank"
                                                                        href="{{$director->linkedin}}"><img
                                                                            src="{{ asset('assets/img/social_icons/linkedin.png')}}"
                                                                            class="img-fluid" /></a></li>
                                                                @endif
                                                                @if($director->instagram)
                                                                <li class="list-inline-item"><a target="_blank"
                                                                        href="{{$director->instagram}}"><img
                                                                            src="{{ asset('assets/img/social_icons/instagram.png')}}"
                                                                            class="img-fluid" /></a></li>
                                                                @endif
                                                                @if($director->twitter)
                                                                <li class="list-inline-item"><a target="_blank"
                                                                        href="{{$director->twitter}}"><img
                                                                            src="{{ asset('assets/img/social_icons/twitter.png')}}"
                                                                            class="img-fluid" /></a></li>
                                                                @endif
                                                            </ul>
                                                    </div>
                                                </div>

                                            </div>
                                            <div class="modal-footer px-5 py-4 border-0">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                @endforeach
                            </div>
                        </div>
                    </div>
                </div>
            </div>


            <!--                Our history Tab-->
            <div class="tab-pane fade" id="board-just" role="tabpanel" aria-labelledby="board-tab-just">
                <div class="row justify-content-center">
                    <div class="col-md-3">
                        <h2 class="text_primary text-center font-weight-bold my-4">Our History</h2>
                    </div>
                </div>


                <div class="row justify-content-center">
                    <div class="col-md-7">
                        {!! $company->history !!}

                        <div class="position-relative">
                            <p class="font-weight-bold ml-md-2 text-green-deep gotham-bold mt-5 font-18">{!!
                                $company->history_quote !!}</p>
                            <img src="{{ asset('assets/img/%E2%80%9C.png') }}" class="img-fluid apostrophe-1 pt-4" />

                        </div>
                        {!! $company->history_text !!}
                    </div>


                    <div class="offset-md-1 col-md-3">
                        <img src="{{ asset('assets/img/%E2%80%9C.png') }}" class="img-fluid apostrophe-1" />
                        <p class="font-26 text-green-deep gotham-bold weight-semi-bold text-center">
                            {!! $company->history_quote_side!!}
                        </p>
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
                        <div class="mt-4 card shadow">
                            <a class="twitter-timeline" data-width="300" data-height="300"
                                href="https://twitter.com/VFDGroup?ref_src=twsrc%5Etfw">Tweets by VFDGroup</a>
                            <script async src="https://platform.twitter.com/widgets.js" charset="utf-8"></script>
                        </div>
                    </div>

                </div>


            </div>


            <!--					Culture tab starts here-->

            <div class="tab-pane fade" id="leadership-just" role="tabpanel" aria-labelledby="leadership-tab-just">
                <div class="row justify-content-center">
                    <div class="col-md-3">
                        <h2 class="text_primary text-center font-weight-bold my-4">Our Culture</h2>
                    </div>
                </div>

                <div class="row justify-content-center">
                    <div class="col-md-6">
                        <p class="text_primary text-center my-5">{{ $company->culture}}</p>
                    </div>
                </div>

                <div class="row justify-content-center mt-5">
                    <div class="col-md-4 my-5">
                        <img src="{{ asset('assets/img/red_apostrophe.png') }}" class="img-fluid apostrophe-1" />
                        <h4 class="vfd-text-red font-weight-bold">Our Vision</h4>
                        <p class="font-14 text-green-deep">
                            {{ $company->vision }}
                        </p>
                    </div>

                    <div class="col-md-4 offset-md-1 my-4">
                        <img src="{{ asset('assets/img/red_apostrophe.png') }}" class="img-fluid apostrophe-1" />
                        <h4 class="vfd-text-red font-weight-bold">Our Mission</h4>
                        <p class="font-14 text-green-deep">
                            {{ $company->mission}}
                        </p>
                    </div>

                </div>

                <div class="row justify-content-center mt-1">
                    <div class="col-md-4 my-4">
                        <h4 class="text-green-deep font-weight-bold">Integrity</h4>
                        <p class="font-14 text-green-deep">
                            We are thorough, honest and accountable in every area of business.
                        </p>
                    </div>

                    <div class="col-md-4 offset-md-1 my-4">
                        <h4 class="text-green-deep font-weight-bold">Empathy</h4>
                        <p class="font-14 text-green-deep">
                            We are aware of the feelings and emotions of our stakeholders.
                        </p>
                    </div>

                </div>

                <div class="row justify-content-center mt-1">
                    <div class="col-md-4 my-4">
                        <h4 class="text-green-deep font-weight-bold">Innovation</h4>
                        <p class="font-14 text-green-deep">
                            We are continually creating innovative ways to serve our customers better, even as we remain
                            on top of the foremost financial technologies.
                        </p>
                    </div>

                    <div class="col-md-4 offset-md-1 my-4">
                        <h4 class="text-green-deep font-weight-bold">Teamwork</h4>
                        <p class="font-14 text-green-deep">
                            We believe in the importance of collaboration to achieve value for our stakeholders.
                        </p>
                    </div>

                </div>
            </div>

            <!--                Our impact tab starts here-->
            <div class="tab-pane fade" id="values-just" role="tabpanel" aria-labelledby="values-tab-just">
                <div class="row justify-content-center">
                    <div class="col-md-3">
                        <h2 class="text_primary text-center font-weight-bold my-4">Our Impact</h2>
                    </div>
                </div>

                <div class="row justify-content-center">
                    <div class="col-md-7">
                        {!! $company->impact !!}

                        <div class="position-relative">
                            <p class="font-weight-bold ml-md-2 text-green-deep gotham-bold mt-5 font-18">{!!
                                $company->impact_quote !!}</p>
                            <img src="{{ asset('assets/img/%E2%80%9C.png') }}" class="img-fluid apostrophe-1 pt-4" />

                        </div>
                        <ul style="list-style:disc">
                            {!! $company->impact_text !!}
                        </ul>
                    </div>

                    <div class="offset-md-1 col-md-3">
                        <img src="{{ asset('assets/img/%E2%80%9C.png') }}" class="img-fluid apostrophe-1" />
                        <p class="font-26 text-green-deep gotham-bold weight-semi-bold text-center">
                            {!! $company->impact_quote_side !!}
                        </p>
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
                        <div class="mt-4 card shadow">
                            <a class="twitter-timeline" data-width="300" data-height="300"
                                href="https://twitter.com/VFDGroup?ref_src=twsrc%5Etfw">Tweets by VFDGroup</a>
                            <script async src="https://platform.twitter.com/widgets.js" charset="utf-8"></script>
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

</body>

<script src="{{ asset('assets/js/jquery.min.js') }}"></script>
<script src="{{ asset('assets/js/popper.min.js') }}"></script>
<script src="{{ asset('assets/js/bootstrap.min.js') }}"></script>
<script src="{{ asset('assets/js/mdb.js') }}"></script>
<script src="{{ asset('assets/js/utility.js') }}"></script>

</html>