<!-- <div class="flex-center position-ref full-height">
            @if (Route::has('login'))
                <div class="top-right links">
                    @auth
                        <a href="{{ url('/home') }}">Home</a>
                    @else
                        <a href="{{ route('login') }}">Login</a>

                        @if (Route::has('register'))
                            <a href="{{ route('register') }}">Register</a>
                        @endif
                    @endauth
                </div>
            @endif -->
<!-- {{ asset('') }} -->
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

<body class="landing_page">

    <div class="position-relative index-background" style="background-image: url({{ asset($banner->landing) }}">

        <div class="container position-relative z-index-3">
            <div class="row justify-content-center home-logo-top">
                <div class="col-md-4 text-center">
                    <img src="{{ asset('assets/img/VFD_Group_Logo%20-%20White.png') }}" class="img-fluid my-5"
                        alt="vfd logo white" alt="VFD Logo" />
                    <a href="/about" class="btn vfd-btn-red home-btn-padding font-weight-bolder">Learn More</a>
                </div>
            </div>

            <div class="row subsidiary_home justify-content-center my-5">
                @foreach($company as $subsidiary)
                <div class="col-md-3 my-3">
                    <div class="card onhover p-3">
                        <div class="text-center">
                            <img src="{{ asset($subsidiary->image) }}" class="img-fluid" alt="" />
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
        </div>

        <img src="{{ asset('assets/img/favicon.png') }}"
            class="img-fluid position-absolute d-none floating-landing-logo" />

        <img src="{{ asset('assets/img/Subtract.png') }}" class="img-fluid position-absolute image-subtract" />
    </div>

    <div class="container position-asolute d-none">
        <div class="row justify-content-center home-logo-top">
            <div class="col-md-4 text-center">
                <img src="{{ asset('assets//VFD_Group_Logo%20-%20White.png') }}" class="img-fluid my-5"
                    alt="vfd logo white" alt="VFD Logo" />
                <a href="about_us" class="btn vfd-btn-red home-btn-padding font-weight-bolder">Learn More</a>
            </div>
        </div>

        <div class="row subsidiary_ome d-none justify-content-center my-5">
            <div class="col-md-2 my-3">
                <div class="card onhover p-3">
                    <div class="text-center">
                        <img src="{{ asset('assets//micro_new.png') }}" class="img-fluid" alt="" />
                    </div>
                </div>
            </div>

            <div class="col-md-2 my-3">
                <div class="card onhover p-3">
                    <div class="text-center">
                        <img src="{{ asset('assets//everdon.png') }}" class="img-fluid" alt="" />
                    </div>
                </div>
            </div>

            <div class="col-md-2 my-3">
                <div class="card onhover p-3">
                    <div class="text-center">
                        <img src="{{ asset('assets//vfd_bridge.png') }}" class="img-fluid" alt="" />
                    </div>
                </div>
            </div>

            <div class="col-md-2 my-3">
                <div class="card onhover p-3">
                    <div class="text-center">
                        <img src="{{ asset('assets//anchoria.png') }}" class="img-fluid" alt="" />
                    </div>
                </div>
            </div>

            <div class="col-md-2 my-3">
                <div class="card onhover p-3">
                    <div class="text-center">
                        <img src="{{ asset('assets//dre.png') }}" class="img-fluid" alt="" />
                    </div>
                </div>
            </div>

            <!--
<div class="col-md-2 mb-3">
<div class="card p-3">
<div class="text-center">
<img src="{{ asset('assets//subs_micro_bank.png') }}" class="img-fluid" alt="" />
</div>
</div>
</div>

<div class="col-md-2 mb-3">
<div class="card p-3">
<div class="text-center">
<img src="{{ asset('assets//subs_micro_bank.png') }}" class="img-fluid" alt="" />
</div>
</div>
</div>
-->

        </div>

        <img src="{{ asset('assets//favicon.png') }}" class="img-fluid position-absolute d-none d-md-block"
            style="right: 0; top: 50%; opacity: 0.3; width: 16%" />

        <div class="row subsidiary_home justify-content-center my-5">

            <div class="col-md-3 my-3">
                <div class="card onhover p-3">
                    <div class="text-center">
                        <img src="{{ asset('assets//micro_new.png') }}" class="img-fluid" alt="" />
                    </div>
                </div>
            </div>

            <div class="col-md-3 my-3">
                <div class="card onhover p-3">
                    <div class="text-center">
                        <img src="{{ asset('assets//everdon.png') }}" class="img-fluid" alt="" />
                    </div>
                </div>
            </div>

            <div class="col-md-3 my-3">
                <div class="card onhover p-3">
                    <div class="text-center">
                        <img src="{{ asset('assets//vfd_bridge.png') }}" class="img-fluid" alt="" />
                    </div>
                </div>
            </div>

            <div class="col-md-3 my-3">
                <div class="card onhover p-3">
                    <div class="text-center">
                        <img src="{{ asset('assets//anchoria.png') }}" class="img-fluid" alt="" />
                    </div>
                </div>
            </div>

            <div class="col-md-3 my-3">
                <div class="card onhover p-3">
                    <div class="text-center">
                        <img src="{{ asset('assets//dre.png') }}" class="img-fluid" alt="" />
                    </div>
                </div>
            </div>

        </div>


    </div>


    <script src='js/jquery.min.js'></script>
    <script src="js/popper.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/slick.js"></script>
    <script src="js/mdb.js"></script>
    <script src="js/utility.js"></script>
</body>

</html>