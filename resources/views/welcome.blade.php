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
<html lang="en">

    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="description" content="VFD Group |  Global Network &#8211; Worldwide Strength">
        <meta name="author" content="VFD Group">
        <title>VFD Group | Global Network &#8211; Worldwide Strength</title>
        <!--favicicon-->
        <link rel="shortcut icon" href="{{ asset('assets/img/favicon.png') }}" />
        <link rel="apple-touch-icon" href="{{ asset('assets/img/favicon.png') }}" />

        <link rel="preload" href="{{ asset('assets/css/Assets/bootstrap.min.css') }}" as="style">
        <link rel="preload" href="{{ asset('assets/css/slick.min.css') }}" as="style">
        <link rel="preload" href="{{ asset('assets/css/slick-theme.min.css') }}" as="style">
        <link rel="preload" href="{{ asset('assets/css/style.min.css') }}" as="style">

        <link rel="stylesheet" href="{{ asset('assets/css/style.min.css') }}">
        <link rel="stylesheet" href="{{ asset('assets/css/slick.min.css') }}">
        <link rel="stylesheet" href="{{ asset('assets/css/slick-theme.min.css') }}">
        <link rel="stylesheet" href="{{ asset('assets/css/fonts.min.css') }}">
        <link rel="stylesheet" href="{{ asset('assets/css/Assets/bootstrap.min.css') }}">
        <link rel="stylesheet" href="{{ asset('assets/css/media-queries.min.css') }}">

    </head>

    <body class="landing_page">

        <div class="position-relative index-background" style="background-image: url({{ asset($banner->landing) }}); background-position:center; background-repeat:no-repeat">

            <div class="container position-relative z-index-3">
                <div class="row justify-content-center home-logo-top">
                    <div class="col-md-4 text-center">
                        <img src="{{ asset('assets/img/VFD_Group_Logo%20-%20White.png') }}" class="img-fluid my-5"
                             alt="VFD Logo" />
                        <a href="/about" class="text-white btn vfd-btn-red home-btn-padding font-weight-bolder" aria-label="Go to the about us page">Learn More</a>
                    </div>
                </div>

                <div class="row subsidiary_home justify-content-center my-5">
                    @foreach($company as $subsidiary)
                    <div class="col-md-3 my-3">
                        <div class="card onhover p-3">
                            <div class="text-center">
                                <img src="{{ asset($subsidiary->image) }}" class="img-fluid" alt="{{ $subsidiary->name }}" />
                            </div>
                        </div>
                    </div>
                    @endforeach
                </div>
            </div>

            <img src="{{ asset('assets/img/Subtract.png') }}" class="img-fluid position-absolute image-subtract" alt="vfd group arc" />
        </div>

        <script src='js/jquery.min.js'></script>
        <script src="js/popper.min.js"></script>
        <script src="js/bootstrap.min.js"></script>
        <script src="js/slick.js"></script>
        <script src="js/mdb.js"></script>
        <script src="js/utility.js"></script>
    </body>

</html>
