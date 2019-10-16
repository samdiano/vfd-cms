
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
                    <img src="{{ asset('assets/img/VFD%20Group%20Logo%20PNG.png') }}" width="160" class="img-fluid" id="main_logo" alt="VFD Group Logo"></a>

                <!-- Collapse button -->
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span>
                </button>


                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav ml-auto">


                        <li class="nav-item px-md-3 my-2 my-md-0">
                            <a class="nav-link bold  " href="/">Home</a>
                        </li>


                        <li class="nav-item px-md-3 my-2 my-md-0 active-link">
                            <a class="nav-link bold" href="/about">About Us</a>
                        </li>


                        <li class="nav-item px-md-3 my-2 my-md-0">
                            <a class="nav-link bold" href="portfolio">Our Portfolio</a>
                        </li>

                        <li class="nav-item px-md-3 my-2 my-md-0">
                            <a class="nav-link bold" href="investors">Investor Information</a>
                        </li>

                        <li class="nav-item px-md-3 my-2 my-md-0">
                            <a class="nav-link bold" href="media.html">Media</a>
                        </li>

                        <li class="nav-item px-md-3 my-2 my-md-0">
                            <a class="nav-link bold" href="career">Careers</a>
                        </li>

                        <li class="nav-item px-md-3 my-2 my-md-0">
                            <a class="nav-link bold" href="contact_us.html">Contact Us</a>
                        </li>

                        <li class="nav-item pl-md-3 pr-md-5 my-2 my-md-0">
                            <a class="nav-link bold" href="search.html"><img src="{{ asset('assets/img/search.svg') }}" alt="search" class="img-fluid" /></a>
                        </li>
                    </ul>
                </div>
                <!-- Collapsible content -->
            </div>
        </nav>
        <!--/.Navbar-->


        <!--        <img src="{{ asset('assets/img/inner_mask_bg.svg') }}" class="img-fluid position-relative inner-banner-1" />-->

        <img src="{{ asset('assets/img/media_banner.png') }}" class="img-fluid position-absolute about-banner-img" />


        <div class="">
            <div class="container">
                <div class="row ">
                    <div class="col-md-12">
                        <h3 class="font-41 text-white vertical-9 weight-semi-bold">About Us</h3>
                    </div>
                </div>
            </div>
        </div>

        <img src="{{ asset('assets/img/favicon.png') }}" class="img-fluid position-absolute d-none" style="right: 5%; top: 20%; opacity: 0.3; width: 10%" />

        <div class="container-fluid vertical-8">

            <ul class="nav nav-tabs nav-justified md-tabs" id="myTabJust" role="tablist">
                <li class="nav-item waves-effect waves-light">
                    <a class="nav-link active small-md" id="home-tab-just" data-toggle="tab" href="#home-just" role="tab" aria-controls="home-just" aria-selected="true">The Company</a>
                </li>
                <li class="nav-item waves-effect waves-light">
                    <a class="nav-link small-md" id="subsidiary-tab-just" data-toggle="tab" href="#subsidiary-just" role="tab" aria-controls="subsidiary-just" aria-selected="true">Governance</a>
                </li>

                <li class="nav-item waves-effect waves-light">
                    <a class="nav-link small-md" id="board-tab-just" data-toggle="tab" href="#board-just" role="tab" aria-controls="board-just" aria-selected="false">Our History</a>
                </li>
                <li class="nav-item small-md waves-effect waves-light">
                    <a class="nav-link" id="leadership-tab-just" data-toggle="tab" href="#leadership-just" role="tab" aria-controls="leadership-just" aria-selected="false">Our Culture</a>
                </li>
                <li class="nav-item small-md waves-effect waves-light">
                    <a class="nav-link" id="values-tab-just" data-toggle="tab" href="#values-just" role="tab" aria-controls="values-just" aria-selected="false">Our Impact</a>
                </li>
            </ul>

            <div class="tab-content" id="myTabContentJust">
                <!--                ABout Tab-->
                <div class="tab-pane fade show active" id="home-just" role="tabpanel" aria-labelledby="home-tab-just">

                    <div class="row justify-content-center">
                        <div class="col-md-5">
                            <h2 class="text_primary text-center font-weight-bold my-4">About the Company</h2>
                        </div>
                    </div>

                    <div class="row justify-content-center">
                        <div class="col-md-7">
                            
                            {{-- {{$company->about}} --}}

                            {!! $company->about !!}
                            {{-- <p class="text-justify slick_dark">
                                VFD Group is a financial services focused proprietary investment company that creates value by working within Nigeria's informal financial sector to create innovative products and solutions that are accessible to the everyday
                            </p>

                            <p class="text-justify slick_dark">Nigerian citizen and entrepreneur.
                                VFD Group was founded by skilled professionals with diverse experience, qualifications and backgrounds. As a team, we identified the gap between both individuals and small businesses and their banking experiences and set out to bridge the divide.</p>

                            <p class="text-justify slick_dark">We discovered that despite the size of the formal financial sector, the informal sector is greater still, and that there are immense opportunities for value creation within this informal sector. </p>

                            <p class="text-justify slick_dark">Considering that, we developed a business model that allows us to operate in every area of the financial industry through our our portfolio, providing Financial Advisory, Asset Management, Currency, Real Estate, Debt Services and Private Funds Management Services, taking deposits and providing loans at very competitive rates.</p>



                            <p class="text-justify slick_dark">
                                In all our endeavours, we are fully cognizant of the risks that come with pioneering innovation and working within the informal sector. The diverse backgrounds and combined expertise of our Management and Board has enabled us to develop a versatile team of in-house risk managers, thoroughly enabling us to mitigate these risks.
                            </p>

                            <div class="position-relative">
                                <p class="ml-md-2 text-green-deep gotham-bold my-5">Founded on the values of integrity and good governance, and built on the strength of innovation and network</p>
                                <img src="{{ asset('assets/img/%E2%80%9C.png') }}" class="img-fluid apostrophe-1 pt-4" />

                            </div>


                            <p class="text-justify slick_dark">Founded on the values of integrity and good governance, and built on the strength of innovation and network, the goal of VFD Group is to establish a firm foothold in various ecosystems on the continent through our subsidiary companies. Through these companies, we aim to creatively and consistently build our capacity to provide financial solutions that cater to every need an individual or small business might have, leading us to becoming the foremost financial services brand in Nigeria and on the continent.</p>

                            <p class="text-justify slick_dark">VFD Group was incorporated with the Corporate Affairs Commission (CAC) on 7th July 2009 and commenced business operations effectively on the 1st of January 2011.</p> --}}
                        </div>


                        <div class="offset-md-1 col-md-3">
                            <img src="{{ asset('assets/img/%E2%80%9C.png') }}" class="img-fluid apostrophe-1" />
                            <p class="font-28 text-green-deep gotham-bold weight-semi-bold text-center">
                                As a team, we identified the gap between both individuals and small businesses and
                            </p>

                            <div class="card mb-5" data-toggle="modal" data-target="#download">
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

                            <div class="mt-4">
                                <a class="twitter-timeline" data-width="300" data-height="300" href="https://twitter.com/VFDGroup?ref_src=twsrc%5Etfw">Tweets by VFDGroup</a> <script async src="https://platform.twitter.com/widgets.js" charset="utf-8"></script>
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
                                    <a class="nav-link active small-md text-center" id="directors-tab-just" data-toggle="tab" href="#directors-just" role="tab" aria-controls="directors-just" aria-selected="true">Board of Directors</a>
                                </li>
                                <li class="nav-item waves-effect waves-light">
                                    <a class="nav-link small-md text-center" id="portfolios-tab-just" data-toggle="tab" href="#portfolios-just" role="tab" aria-controls="portfolios-just" aria-selected="true">Head of Portfolios</a>
                                </li>

                                <li class="nav-item waves-effect waves-light">
                                    <a class="nav-link small-md text-center" id="management-tab-just" data-toggle="tab" href="#management-just" role="tab" aria-controls="management-just" aria-selected="false">Management Team</a>
                                </li>
                            </ul>

                            <div class="tab-content">
                                <div class="tab-pane fade show active" id="directors-just" role="tabpanel" aria-labelledby="directors-tab-just">
                                    <div class="row justify-content-center">
                                        <div class="col-md-5 border-bottom md-border-right py-3" >
                                            <div class="row">
                                                <div class="col-md-5" data-toggle="modal" data-target="#busari">
                                                    <div class="curso" style="background-image: url({{ asset('assets/img/board/OLATUNDE-BUSARI_reduced-002-133x200.jpg') }});
                                                                              background-size: contain;
                                                                              background-position: center;
                                                                              background-repeat: no-repeat;
                                                                              width: 100%;
                                                                              height: 250px;">

                                                    </div>
                                                </div>

                                                <div class="col-md-6">
                                                    <h5 class="cursor font-weight-bold mt-3 text-md-left text-center" data-toggle="modal" data-target="#busari">Olatunde Busari (SAN)</h5>
                                                    <p class="text-md-left text-center">Chairman</p>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="col-md-5 py-3 border-bottom">
                                            <div class="row">
                                                <div class="col-md-5 cursor" data-toggle="modal" data-target="#nonso">
                                                    <div style="background-image: url({{ asset('assets/img/board/NONSO-OKPALA_reduced-002-e1542398586407-189x300.jpg') }});
                                                                background-size: contain;
                                                                background-position: center;
                                                                background-repeat: no-repeat;
                                                                width: 100%;
                                                                height: 250px;">
                                                    </div>

                                                </div>

                                                <div class="col-md-6">
                                                    <h5 class="font-weight-bold mt-3 text-md-left text-center cursor" data-toggle="modal" data-target="#nonso">Nonso Okpala </h5>
                                                    <p class="text-md-left text-center">Group Managing Director/CEO</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>


                                    <div class="row justify-content-center">
                                        <div class="col-md-5 border-bottom md-border-right py-3">
                                            <div class="row">
                                                <div class="col-md-5 cursor" data-toggle="modal" data-target="#ngozi">
                                                    <div style="background-image: url({{ asset('assets/img/board/NGOZI-AGHANYA_reduced-002-133x200.jpg') }});
                                                                background-size: contain;
                                                                background-position: center;
                                                                background-repeat: no-repeat;
                                                                width: 100%;
                                                                height: 250px;">
                                                    </div>
                                                </div>

                                                <div class="col-md-6">
                                                    <h5 class="font-weight-bold mt-3 text-md-left text-center" data-toggle="modal" data-target="#ngozi">Ngozi Achanya</h5>
                                                    <p class="text-md-left text-center">Non-Executive Director</p>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="col-md-5 py-3 border-bottom">
                                            <div class="row">
                                                <div class="col-md-5 cursor" data-toggle="modal" data-target="#victor">
                                                    <div style="background-image: url({{ asset('assets/img/board/Victor-Fagbamila-155x200.jpg') }});
                                                                background-size: contain;
                                                                background-position: center;
                                                                background-repeat: no-repeat;
                                                                width: 100%;
                                                                height: 250px;">
                                                    </div>
                                                </div>

                                                <div class="col-md-6">
                                                    <h5 class="font-weight-bold mt-3 text-md-left text-center" data-toggle="modal" data-target="#victor">Victor Fagbamila </h5>
                                                    <p class="text-md-left text-center">Non-Executive Director</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="row justify-content-center">
                                        <div class="col-md-5 border-bottom md-border-right py-3">
                                            <div class="row">
                                                <div class="col-md-5 cursor" data-toggle="modal" data-target="#mary">
                                                    <div style="background-image: url({{ asset('assets/img/board/MARY-OZIGBO_reduced-002-133x200.jpg') }});
                                                                background-size: contain;
                                                                background-position: center;
                                                                background-repeat: no-repeat;
                                                                width: 100%;
                                                                height: 250px;">
                                                    </div>
                                                </div>

                                                <div class="col-md-6">
                                                    <h5 class="font-weight-bold mt-3 text-md-left text-center cursor" data-toggle="modal" data-target="#mary">Mary-Callista Ozigbo</h5>
                                                    <p class="text-md-left text-center">Non-Executive Director</p>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="col-md-5 py-3 border-bottom">
                                            <div class="row">
                                                <div class="col-md-5 cursor" data-toggle="modal" data-target="#suleiman">
                                                    <div style="background-image: url({{ asset('assets/img/board/suleimanlawal-226x300.jpg') }});
                                                                background-size: contain;
                                                                background-position: center;
                                                                background-repeat: no-repeat;
                                                                width: 100%;
                                                                height: 250px;">
                                                    </div>
                                                </div>

                                                <div class="col-md-6">
                                                    <h5 class="font-weight-bold mt-3 text-md-left text-center cursor" data-toggle="modal" data-target="#suleiman">Suleiman Lawal</h5>
                                                    <p class="text-md-left text-center">Non-Executive Director</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>


                                    <div class="row justify-content-center">
                                        <div class="col-md-5 border-bottom md-border-right py-3">
                                            <div class="row">
                                                <div class="col-md-5 cursor" data-toggle="modal" data-target="#samuel">
                                                    <div style="background-image: url({{ asset('assets/img/board/DR.-SAM-ONYISHI_reduced-002-193x300.jpg') }});
                                                                background-size: contain;
                                                                background-position: center;
                                                                background-repeat: no-repeat;
                                                                width: 100%;
                                                                height: 250px;">
                                                    </div>
                                                </div>

                                                <div class="col-md-6">
                                                    <h5 class="font-weight-bold mt-3 text-md-left text-center cursor" data-toggle="modal" data-target="#samuel">Dr Samuel Maduka Onyishi </h5>
                                                    <p class="text-md-left text-center">Independent Non-Executive Director</p>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="col-md-5 py-3 border-bottom">
                                            <div class="row">
                                                <div class="col-md-5 cursor" data-toggle="modal" data-target="#jewel">
                                                    <div style="background-image: url({{ asset('assets/img/board/JEWEL-OKWECHIME_reduced-002-133x200.jpg') }});
                                                                background-size: contain;
                                                                background-position: center;
                                                                background-repeat: no-repeat;
                                                                width: 100%;
                                                                height: 250px;">
                                                    </div>
                                                </div>

                                                <div class="col-md-6">
                                                    <h5 class="font-weight-bold mt-3 text-md-left text-center cursor" data-toggle="modal" data-target="#jewel">Jewel Okwechime</h5>
                                                    <p class="text-md-left text-center">Independent Non-Executive Director</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>


                                    <div class="row justify-content-center">
                                        <div class="col-md-5 border-bottom md-border-right py-3">
                                            <div class="row">
                                                <div class="col-md-5 cursor" data-toggle="modal" data-target="#mobolaji">
                                                    <div style="background-image: url({{ asset('assets/img/board/mobolaji.jpg') }});
                                                                background-size: contain;
                                                                background-position: center;
                                                                background-repeat: no-repeat;
                                                                width: 100%;
                                                                height: 250px;">
                                                    </div>
                                                </div>

                                                <div class="col-md-6">
                                                    <h5 class="font-weight-bold mt-3 text-md-left text-center cursor" data-toggle="modal" data-target="#mobolaji">Mobolaji Adewumi</h5>
                                                    <p class="text-md-left text-center">Executive Director, Finance</p>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="col-md-5 py-3 border-bottom">
                                            <div class="row">
                                                <div class="col-md-5 cursor" data-toggle="modal" data-target="#adeniyi">
                                                    <div style="background-image: url({{ asset('assets/img/board/Niyi-Adenubi-250-200x300.jpg') }});
                                                                background-size: contain;
                                                                background-position: center;
                                                                background-repeat: no-repeat;
                                                                width: 100%;
                                                                height: 250px;">
                                                    </div>
                                                </div>

                                                <div class="col-md-6">
                                                    <h5 class="font-weight-bold mt-3 text-md-left text-center cursor" data-toggle="modal" data-target="#adeniyi">Adeniyi Adenubi</h5>
                                                    <p class="text-md-left text-center">Non-Executive Director</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="row justify-content-center">
                                        <div class="col-md-5 md-border-right py-3">
                                            <div class="row">
                                                <div class="col-md-5 cursor" data-toggle="modal" data-target="#gbenga">
                                                    <div style="background-image: url({{ asset('assets/img/board/Gbenga-Omolokun-125.png') }});
                                                                background-size: contain;
                                                                background-position: center;
                                                                background-repeat: no-repeat;
                                                                width: 100%;
                                                                height: 250px;">
                                                    </div>
                                                </div>

                                                <div class="col-md-6">
                                                    <h5 class="font-weight-bold mt-3 text-md-left text-center cursor" data-toggle="modal" data-target="#gbenga">Gbenga Omolokun</h5>
                                                    <p class="text-md-left text-center">Executive Director / Chief Operating Officer</p>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="col-md-5 py-3">
                                            <div class="row">
                                                <div class="col-md-5 cursor" data-toggle="modal" data-target="#azubike">
                                                    <div style="background-image: url({{ asset('assets/img/board/AZUBIKE-EMODI-reduced-002-133x200.jpg') }});
                                                                background-size: contain;
                                                                background-position: center;
                                                                background-repeat: no-repeat;
                                                                width: 100%;
                                                                height: 250px;">
                                                    </div>
                                                </div>

                                                <div class="col-md-6">
                                                    <h5 class="font-weight-bold mt-3 text-md-left text-center cursor" data-toggle="modal" data-target="#azubike">Azubike Emodi</h5>
                                                    <p class="text-md-left text-center">Executive Director/Group Commercial Director</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>




                                </div>

                                <div class="tab-pane fade" id="portfolios-just" role="tabpanel" aria-labelledby="portfolios-tab-just">

                                    <div class="row justify-content-center">
                                        <div class="col-md-5 border-bottom md-border-right py-3">
                                            <div class="row">
                                                <div class="col-md-5 cursor" data-toggle="modal" data-target="#emodi">
                                                    <div style="background-image: url({{ asset('assets/img/board/AZUBIKE-EMODI-reduced-002-133x200.jpg') }});
                                                                background-size: contain;
                                                                background-position: center;
                                                                background-repeat: no-repeat;
                                                                width: 100%;
                                                                height: 250px;">

                                                    </div>
                                                </div>

                                                <div class="col-md-6">
                                                    <h5 class="font-weight-bold mt-3 text-md-left text-center cursor" data-toggle="modal" data-target="#emodi">Azubuike Emodi</h5>
                                                    <p class="text-md-left text-center mb-1">Managing Director</p>
                                                    <p class="text-md-left text-center font-12"><i>VFD Microfinance Bank</i></p>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="col-md-5 py-3 border-bottom">
                                            <div class="row">
                                                <div class="col-md-5 cursor" data-toggle="modal" data-target="#ezeh">
                                                    <div style="background-image: url({{ asset('assets/img/leadership/THERESA-EZEH_ezeh-002-214x300.jpeg') }});
                                                                background-size: contain;
                                                                background-position: center;
                                                                background-repeat: no-repeat;
                                                                width: 100%;
                                                                height: 250px;">
                                                    </div>

                                                </div>

                                                <div class="col-md-6">
                                                    <h5 class="font-weight-bold mt-3 text-md-left text-center cursor" data-toggle="modal" data-target="#ezeh">Theresa Ezeh </h5>
                                                    <p class="text-md-left text-center mb-1">Managing Director</p>
                                                    <p class="text-md-left text-center font-12"><i>Everdon Bureau de Change</i></p>

                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="row justify-content-center">
                                        <div class="col-md-5 border-bottom md-border-right py-3">
                                            <div class="row">
                                                <div class="col-md-5 cursor" data-toggle="modal" data-target="#ogun">
                                                    <div style="background-image: url({{ asset('assets/img/leadership/ete-e1543251723232-211x300.jpg') }});
                                                                background-size: contain;
                                                                background-position: center;
                                                                background-repeat: no-repeat;
                                                                width: 100%;
                                                                height: 250px;">

                                                    </div>
                                                </div>

                                                <div class="col-md-6">
                                                    <h5 class="font-weight-bold mt-3 text-md-left text-center cursor" data-toggle="modal" data-target="#ogun">Ete ogun</h5>
                                                    <p class="text-md-left text-center mb-1">Managing Director/CEO</p>
                                                    <p class="text-md-left text-center font-12"><i>Anchoria Asset Management Limited</i></p>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="col-md-5 py-3 border-bottom">
                                            <div class="row">
                                                <div class="col-md-5 cursor" data-toggle="modal" data-target="#nweke">
                                                    <div style="background-image: url({{ asset('assets/img/leadership/obinna-e1543251548670-234x300.jpg') }});
                                                                background-size: contain;
                                                                background-position: center;
                                                                background-repeat: no-repeat;
                                                                width: 100%;
                                                                height: 250px;">
                                                    </div>

                                                </div>

                                                <div class="col-md-6">
                                                    <h5 class="font-weight-bold mt-3 text-md-left text-center cursor" data-toggle="modal" data-target="#nweke">Obinna Nweke </h5>
                                                    <p class="text-md-left text-center mb-1">General Manager</p>
                                                    <p class="text-md-left text-center font-12"><i>Dynasty Real Estate</i></p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>


                                <div class="tab-pane fade" id="management-just" role="tabpanel" aria-labelledby="management-tab-just">
                                    <div class="row justify-content-center">
                                        <div class="col-md-5 border-bottom md-border-right py-3">
                                            <div class="row">
                                                <div class="col-md-5">
                                                    <div style="background-image: url({{ asset('assets/img/management/Femi.jpg') }});
                                                                background-size: cover;
                                                                background-position: center;
                                                                background-repeat: no-repeat;
                                                                width: 100%;
                                                                height: 250px;">
                                                    </div>
                                                </div>

                                                <div class="col-md-6">
                                                    <h5 class="font-weight-bold mt-4 text-md-left text-center">Femi Oke</h5>
                                                    <p class="text-md-left text-center">Group Head, <br />Corporate Communications and Customer Experience</p>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="col-md-5 py-3 border-bottom">
                                            <div class="row">
                                                <div class="col-md-5">
                                                    <div style="background-image: url({{ asset('assets/img/management/OLuwatosin.jpg') }});
                                                                background-size: cover;
                                                                background-position: center;
                                                                background-repeat: no-repeat;
                                                                width: 100%;
                                                                height: 250px;">
                                                    </div>

                                                </div>

                                                <div class="col-md-6">
                                                    <h5 class="font-weight-bold mt-3 text-md-left text-center">Oluwatosin Adebukunola</h5>
                                                    <p class="text-md-left text-center">Head, Strategy</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="row justify-content-center">
                                        <div class="col-md-5 border-bottom md-border-right py-3">
                                            <div class="row">
                                                <div class="col-md-5">
                                                    <div style="background-image: url({{ asset('assets/img/management/Dami.jpg') }});
                                                                background-size: cover;
                                                                background-position: center;
                                                                background-repeat: no-repeat;
                                                                width: 100%;
                                                                height: 250px;">

                                                    </div>
                                                </div>

                                                <div class="col-md-6">
                                                    <h5 class="font-weight-bold mt-3 text-md-left text-center">DAMILOLA MAKINDE </h5>
                                                    <p class="text-md-left text-center">HR Manager/Group Head Human Resources</p>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="col-md-5 py-3 border-bottom">
                                            <div class="row">
                                                <div class="col-md-5">
                                                    <div style="background-image: url({{ asset('assets/img/management/Adekunle.jpg') }});
                                                                background-size: cover;
                                                                background-position: center;
                                                                background-repeat: no-repeat;
                                                                width: 100%;
                                                                height: 250px;">
                                                    </div>

                                                </div>

                                                <div class="col-md-6">
                                                    <h5 class="font-weight-bold mt-3 text-md-left text-center">ADELAJA ADEKUNLE
                                                    </h5>
                                                    <p class="text-md-left text-center">Head, Risk Management and Compliance
                                                    </p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>


                                    <div class="row justify-content-center">
                                        <div class="col-md-5 border-bottom md-border-right py-3">
                                            <div class="row">
                                                <div class="col-md-5">
                                                    <div style="background-image: url({{ asset('assets/img/management/Dipo-min.jpg') }});
                                                                background-size: contain;
                                                                background-position: center;
                                                                background-repeat: no-repeat;
                                                                width: 100%;
                                                                height: 250px;">

                                                    </div>
                                                </div>

                                                <div class="col-md-6">
                                                    <h5 class="font-weight-bold mt-3 text-md-left text-center">Dipo</h5>
                                                    <p class="text-md-left text-center">N/A</p>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="col-md-5 py-3 border-bottom">
                                            <div class="row">
                                                <div class="col-md-5">
                                                    <div style="background-image: url({{ asset('assets/img/management/Karen.jpg') }});
                                                                background-size: contain;
                                                                background-position: center;
                                                                background-repeat: no-repeat;
                                                                width: 100%;
                                                                height: 250px;">
                                                    </div>

                                                </div>

                                                <div class="col-md-6">
                                                    <h5 class="font-weight-bold mt-3 text-md-left text-center">Karen </h5>
                                                    <p class="text-md-left text-center">N/A</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="row justify-content-center">
                                        <div class="col-md-5 border-bottom md-border-right py-3">
                                            <div class="row">
                                                <div class="col-md-5">
                                                    <div style="background-image: url({{ asset('assets/img/management/Kanayo_Eni%20Ikeh.jpg') }});
                                                                background-size: cover;
                                                                background-position: center;
                                                                background-repeat: no-repeat;
                                                                width: 100%;
                                                                height: 250px;">

                                                    </div>
                                                </div>

                                                <div class="col-md-6">
                                                    <h5 class="font-weight-bold mt-3 text-md-left text-center">KANAYO ENI-IKEH</h5>
                                                    <p class="text-md-left text-center">General Manager, Business Development, VFD Microfinance Bank</p>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="col-md-5 py-3 border-bottom">
                                            <div class="row">
                                                <div class="col-md-5">
                                                    <div style="background-image: url({{ asset('assets/img/management/Gbeminiyi_shoda.jpg') }});
                                                                background-size: cover;
                                                                background-position: center;
                                                                background-repeat: no-repeat;
                                                                width: 100%;
                                                                height: 250px;">
                                                    </div>

                                                </div>

                                                <div class="col-md-6">
                                                    <h5 class="font-weight-bold mt-3 text-md-left text-center">Gbeminiyi Shoda</h5>
                                                    <p class="text-md-left text-center">Company Secretary/ Legal Adviser</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>


                                    <div class="row justify-content-center">
                                        <div class="col-md-5 border-bottom md-border-right py-3">
                                            <div class="row">
                                                <div class="col-md-5">
                                                    <div style="background-image: url({{ asset('assets/img/management/Chioma%20Esike-min.jpg') }});
                                                                background-size: cover;
                                                                background-position: center;
                                                                background-repeat: no-repeat;
                                                                width: 100%;
                                                                height: 250px;">

                                                    </div>
                                                </div>

                                                <div class="col-md-6">
                                                    <h5 class="font-weight-bold mt-3 text-md-left text-center">Chioma Esike</h5>
                                                    <p class="text-md-left text-center">Head of Operations, Everdon Bureau de Change; Executive Office, VFD Group Plc</p>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="col-md-5 py-3 border-bottom">
                                            <div class="row">
                                                <div class="col-md-5">
                                                    <div style="background-image: url({{ asset('assets/img/management/Folajimi%20Adeleye.jpg') }});
                                                                background-size: cover;
                                                                background-position: center;
                                                                background-repeat: no-repeat;
                                                                width: 100%;
                                                                height: 250px;">
                                                    </div>

                                                </div>

                                                <div class="col-md-6">
                                                    <h5 class="font-weight-bold mt-3 text-md-left text-center">Adeleye Folajimi Oluwole</h5>
                                                    <p class="text-md-left text-center">Group Financial Controller</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>


                                    <div class="row justify-content-center">
                                        <div class="col-md-5 border-bottom md-border-right py-3">
                                            <div class="row">
                                                <div class="col-md-5">
                                                    <div style="background-image: url({{ asset('assets/img/management/Tosin.jpg') }});
                                                                background-size: cover;
                                                                background-position: center;
                                                                background-repeat: no-repeat;
                                                                width: 100%;
                                                                height: 250px;">

                                                    </div>
                                                </div>

                                                <div class="col-md-6">
                                                    <h5 class="font-weight-bold mt-3 text-md-left text-center">Tosin Dabiri</h5>
                                                    <p class="text-md-left text-center">Head, Institutional Funding and Investors Relations</p>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="col-md-5 py-3 border-bottom">
                                            <div class="row">
                                                <div class="col-md-5">
                                                    <div style="background-image: url({{ asset('assets/img/management/George.jpg') }});
                                                                background-size: cover;
                                                                background-position: center;
                                                                background-repeat: no-repeat;
                                                                width: 100%;
                                                                height: 250px;">
                                                    </div>

                                                </div>

                                                <div class="col-md-6">
                                                    <h5 class="font-weight-bold mt-3 text-md-left text-center">George </h5>
                                                    <p class="text-md-left text-center">n/a</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>


                                    <div class="row ">
                                        <div class="offset-md-1 col-md-5 border-bottom md-border-right py-3">
                                            <div class="row">
                                                <div class="col-md-5">
                                                    <div style="background-image: url({{ asset('assets/img/management/Rotimi_Awofisibe.jpg') }});
                                                                background-size: cover;
                                                                background-position: center;
                                                                background-repeat: no-repeat;
                                                                width: 100%;
                                                                height: 250px;">

                                                    </div>
                                                </div>

                                                <div class="col-md-6">
                                                    <h5 class="font-weight-bold mt-3 text-md-left text-center">Awofisibe Rotimi Rufus</h5>
                                                    <p class="text-md-left text-center">Head Business Performance Monitoring and Technical Assistant to the ED, Finance</p>
                                                </div>
                                            </div>
                                        </div>

                                    </div>
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
                            {{-- <p class="text-justify slick_dark">
                                VFD Group is a financial services focused proprietary investment company that creates value by working within Nigeria's informal financial sector to create innovative products and solutions that are accessible to the everyday
                            </p>

                            <p class="text-justify slick_dark">Nigerian citizen and entrepreneur.
                                VFD Group was founded by skilled professionals with diverse experience, qualifications and backgrounds. As a team, we identified the gap between both individuals and small businesses and their banking experiences and set out to bridge the divide.</p>

                            <p class="text-justify slick_dark">We discovered that despite the size of the formal financial sector, the informal sector is greater still, and that there are immense opportunities for value creation within this informal sector. </p>

                            <p class="text-justify slick_dark">Considering that, we developed a business model that allows us to operate in every area of the financial industry through our our portfolio, providing Financial Advisory, Asset Management, Currency, Real Estate, Debt Services and Private Funds Management Services, taking deposits and providing loans at very competitive rates.</p>



                            <p class="text-justify slick_dark">
                                In all our endeavours, we are fully cognizant of the risks that come with pioneering innovation and working within the informal sector. The diverse backgrounds and combined expertise of our Management and Board has enabled us to develop a versatile team of in-house risk managers, thoroughly enabling us to mitigate these risks.
                            </p>

                            <div class="position-relative">
                                <p class="ml-md-2 text-green-deep gotham-bold my-5">Founded on the values of integrity and good governance, and built on the strength of innovation and network</p>
                                <img src="{{ asset('assets/img/%E2%80%9C.png') }}" class="img-fluid apostrophe-1 pt-4" />

                            </div>


                            <p class="text-justify slick_dark">Founded on the values of integrity and good governance, and built on the strength of innovation and network, the goal of VFD Group is to establish a firm foothold in various ecosystems on the continent through our subsidiary companies. Through these companies, we aim to creatively and consistently build our capacity to provide financial solutions that cater to every need an individual or small business might have, leading us to becoming the foremost financial services brand in Nigeria and on the continent.</p>

                            <p class="text-justify slick_dark">VFD Group was incorporated with the Corporate Affairs Commission (CAC) on 7th July 2009 and commenced business operations effectively on the 1st of January 2011.</p> --}}
                        </div>


                        <div class="offset-md-1 col-md-3 d-none">
                            <img src="{{ asset('assets/img/%E2%80%9C.png') }}" class="img-fluid apostrophe-1" />
                            <p class="font-14 text-green-deep gotham-bold">
                                As a team, we identified the gap between both individuals and small businesses and their banking experiences and set out to bridge the divide.

                            </p>

                            <div class="card" data-toggle="modal" data-target="#download">
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

                            <div>
                                <img  class="img-fluid" />
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
                            <p class="text_primary text-center my-5">Our values are the foundation on which our organization is built. They guide our business conduct with a mission to customer experiences that are timeless and trustworthy.</p>
                        </div>
                    </div>

                    <div class="row justify-content-center mt-5">
                        <div class="col-md-4 my-5">
                            <img src="{{ asset('assets/img/red_apostrophe.png') }}" class="img-fluid apostrophe-1" />
                            <h4 class="vfd-text-red font-weight-bold">Our Vision</h4>
                            <p class="font-14 text-green-deep">
                                is to become the foremost financial solutions brand in Africa.
                            </p>
                        </div>

                        <div class="col-md-4 offset-md-1 my-4">
                            <img src="{{ asset('assets/img/red_apostrophe.png') }}" class="img-fluid apostrophe-1" />
                            <h4 class="vfd-text-red font-weight-bold">Our Mission</h4>
                            <p class="font-14 text-green-deep">
                                is to create innovative products and business models that provide value-adding financial access across Africa.
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
                                We are continually creating innovative ways to serve our customers better, even as we remain on top of the foremost financial technologies.
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
                        <div class="col-md-8">
                            {!! $company->impact!!}
                            {{-- <p class="text_primary my-5">We understand that a sustainable business is one that continues to manage its direct and indirect operational impact on its stakeholders in order to achieve responsible growth and in our bid to improve customer engagement and service experience, we enhanced our traditional and operating channels to enrich the quality of productivity we derive from our customer engagement.</p>

                            <p class="text_primary my-5">At VFD Group Plc, we remain focused and committed to achieving sustainable performance. This translates into takin measures to minimize harm in the communities we operate in. We would continually communicate our progress and create more awareness.
                            </p>

                            <p class="text_primary my-5">The company in its quest to create value in its operating environment, participated in a few community support initiatives. Notable among these are:</p>

                            <ul class="" style="list-style: disc;">
                                <li class="my-3">Sponsorship of one of the skill acquisitions programs of Chinwe-Bode Akinwande Foundation, a foundation committed to alleviating the plight of vulnerable widows by encouraging their self-reliance through skill acquisition and empowerment.</li>

                                <li class="my-3">Sponsorship of the Women in Successful Careers (WISCAR) annual conference</li>
                                <li class="my-3">Sponsorship of a professional golfer to a golf tourney in Cote D’viore</li>
                                <li class="my-3">Sponsorship of World clean-up day in celebration via JCI (Junior Chambers International) Lagos Metropolitan.</li>
                            </ul> --}}

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

        <div class="modal fade" id="busari" tabindex="-1" role="dialog" aria-labelledby="exec_infoLabel"
             aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered" role="document">
                <div class="modal-content">
                    <div class="modal-header border-0 pb-0">
                        <img src="{{ asset('assets/img/close_button.png') }}" alt="close button" class="img-fluid position-absolute close_button" data-dismiss="modal" aria-label="Close" />
                        <button type="button" class="d-none">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <div class="row">

                            <div class="col-md-5">
                                <div style="background-image: url({{ asset('assets/img/board/OLATUNDE-BUSARI_reduced-002-133x200.jpg') }});
                                            background-size: contain;
                                            background-position: center;
                                            background-repeat: no-repeat;
                                            width: 100%;
                                            height: 250px;">

                                </div>
                            </div>

                            <div class="col-md-7">
                                <h6 class="font-weight-bold">Chairman</h6>
                                <h4 class="font-weight-bold gotham-bold">Olatunde Busari (SAN)</h4>
                                <p class="small">Olatunde Busari (SAN) is the Chairman of VFD Group Plc.
                                    He holds a B.Sc degree in Political Science from the University of Ife, Nigeria. He also obtained the Bachelor’s Degree (LL.B) in Law from the University of Ibadan, Nigeria, and Master’s Degree (LL.M) in Law from the University of Lagos, Nigeria.

                                    Mr. Busari is a highly resourceful legal specialist and well-versed in company management.

                                    He was called to the Nigerian Bar in 1989 and is a Senior Advocate of Nigeria.</p>
                                <a href="profile" class="text-danger mb-3">Detailed Profile</a>

                                <ul class="list-inline mt-2">
                                    <!--                                    <li class="list-inline-item"><a href="#"><img src="{{ asset('assets/img/social_icons/facebook.png') }}" class="img-fluid" /></a></li>-->
                                    <li class="list-inline-item"><a href="https://www.linkedin.com/in/tunde-busari-san-fcis-fciarb-20910a18/"><img src="{{ asset('assets/img/social_icons/linkedin.png') }}" class="img-fluid" /></a></li>
                                    <li class="list-inline-item"><a href="https://www.instagram.com/olatundebusari/"><img src="{{ asset('assets/img/social_icons/instagram.png') }}" class="img-fluid" /></a></li>
                                    <!--                                    <li class="list-inline-item"><a href="#"><img src="{{ asset('assets/img/social_icons/twitter.png') }}" class="img-fluid" /></a></li>-->
                                </ul>
                            </div>
                        </div>

                    </div>
                    <div class="modal-footer px-5 py-4 border-0">
                    </div>
                </div>
            </div>
        </div>


        <div class="modal fade" id="nonso" tabindex="-1" role="dialog" aria-labelledby="exec_infoLabel"
             aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered" role="document">
                <div class="modal-content">
                    <div class="modal-header border-0 pb-0">
                        <img src="{{ asset('assets/img/close_button.png') }}" alt="close button" class="img-fluid position-absolute close_button" data-dismiss="modal" aria-label="Close" />
                        <button type="button" class="d-none">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <div class="row">

                            <div class="col-md-5">
                                <div style="background-image: url({{ asset('assets/img/board/NONSO-OKPALA_reduced-002-e1542398586407-189x300.jpg') }});
                                            background-size: contain;
                                            background-position: center;
                                            background-repeat: no-repeat;
                                            width: 100%;
                                            height: 250px;">

                                </div>
                            </div>

                            <div class="col-md-7">
                                <h6 class="font-weight-bold">Group Managing Director / CEO</h6>
                                <h4 class="font-weight-bold gotham-bold">Nonso Okpala</h4>
                                <p class="small">Nonso Okpala is the Group Managing Director of VFD Group Plc.

                                    He was previously the Chief Financial Officer (CFO) of Heirs Holdings and is replete with vast experience in the Nigerian financial services industry garnered while working with reputable firms like KPMG, BGL and United Bank for Africa Plc (UBA).</p>

                                <a href="profile" class="text-danger mb-3">Detailed Profile</a>

                                <ul class="list-inline mt-2">
                                    <li class="list-inline-item"><a href="https://www.facebook.com/nonsokpala"><img src="{{ asset('assets/img/social_icons/facebook.png') }}" class="img-fluid" /></a></li>
                                    <li class="list-inline-item"><a href="https://www.linkedin.com/in/nonso-okpala-a3939856/"><img src="{{ asset('assets/img/social_icons/linkedin.png') }}" class="img-fluid" /></a></li>
                                    <li class="list-inline-item"><a href="https://www.instagram.com/nonsomokpala/"><img src="{{ asset('assets/img/social_icons/instagram.png') }}" class="img-fluid" /></a></li>
                                    <li class="list-inline-item"><a href="https://twitter.com/NonsoMOkpala"><img src="{{ asset('assets/img/social_icons/twitter.png') }}" class="img-fluid" /></a></li>
                                </ul>
                            </div>
                        </div>

                    </div>
                    <div class="modal-footer px-5 py-4 border-0">
                    </div>
                </div>
            </div>
        </div>


        <div class="modal fade" id="ngozi" tabindex="-1" role="dialog" aria-labelledby="exec_infoLabel"
             aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered" role="document">
                <div class="modal-content">
                    <div class="modal-header border-0 pb-0">
                        <img src="{{ asset('assets/img/close_button.png') }}" alt="close button" class="img-fluid position-absolute close_button" data-dismiss="modal" aria-label="Close" />
                        <button type="button" class="d-none">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <div class="row">

                            <div class="col-md-5">
                                <div style="background-image: url({{ asset('assets/img/board/NGOZI-AGHANYA_reduced-002-133x200.jpg') }});
                                            background-size: contain;
                                            background-position: center;
                                            background-repeat: no-repeat;
                                            width: 100%;
                                            height: 250px;">

                                </div>
                            </div>

                            <div class="col-md-7">
                                <h6 class="font-weight-bold">Non-Executive Director</h6>
                                <h4 class="font-weight-bold gotham-bold">Ngozi Aghanya</h4>
                                <p class="small"> is a Non-Executive Director at VFD Group Plc.

                                    She is a lawyer with over a decade of legal experience and comes with a wealth of experience in commercial legal transactions, particularly within the finance industry, notably with Greenwich Trust Group Ltd</p>

                                <a href="profile" class="text-danger mb-3">Detailed Profile</a>

                                <ul class="list-inline mt-2">
                                    <!--                                    <li class="list-inline-item"><a href="#"><img src="{{ asset('assets/img/social_icons/facebook.png') }}" class="img-fluid" /></a></li>-->
                                    <li class="list-inline-item"><a href="https://www.linkedin.com/in/ngozi-ufudo-aghanya/"><img src="{{ asset('assets/img/social_icons/linkedin.png') }}" class="img-fluid" /></a></li>
                                    <li class="list-inline-item"><a href="https://www.instagram.com/curvesngee/"><img src="{{ asset('assets/img/social_icons/instagram.png') }}" class="img-fluid" /></a></li>
                                    <!--                                    <li class="list-inline-item"><a href="#"><img src="{{ asset('assets/img/social_icons/twitter.png') }}" class="img-fluid" /></a></li>-->
                                </ul>
                            </div>
                        </div>

                    </div>
                    <div class="modal-footer px-5 py-4 border-0">
                    </div>
                </div>
            </div>
        </div>


        <div class="modal fade" id="victor" tabindex="-1" role="dialog" aria-labelledby="exec_infoLabel"
             aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered" role="document">
                <div class="modal-content">
                    <div class="modal-header border-0 pb-0">
                        <img src="{{ asset('assets/img/close_button.png') }}" alt="close button" class="img-fluid position-absolute close_button" data-dismiss="modal" aria-label="Close" />
                        <button type="button" class="d-none">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <div class="row">

                            <div class="col-md-5">
                                <div style="background-image: url({{ asset('assets/img/board/Victor-Fagbamila-155x200.jpg') }});
                                            background-size: contain;
                                            background-position: center;
                                            background-repeat: no-repeat;
                                            width: 100%;
                                            height: 250px;">

                                </div>
                            </div>

                            <div class="col-md-7">
                                <h6 class="font-weight-bold">Non-Execuive Director</h6>
                                <h4 class="font-weight-bold gotham-bold">
                                    VICTOR FAGBAMILA</h4>
                                <p class="small"> Victor Fagbamila is a Non Executive Director at VFD Group Plc. He has over 25 years of work experience in Professional Practice, Business and Financial Analysis, Project Management, Management Consulting, Commerce and Industry.</p>

                                <a href="profile" class="text-danger mb-3">Detailed Profile</a>

                                <ul class="list-inline mt-2">
                                    <!--                                    <li class="list-inline-item"><a href="#"><img src="{{ asset('assets/img/social_icons/facebook.png') }}" class="img-fluid" /></a></li>-->
                                    <!--
<li class="list-inline-item"><a href="https://www.linkedin.com/in/tunde-busari-san-fcis-fciarb-20910a18/"><img src="{{ asset('assets/img/social_icons/linkedin.png') }}" class="img-fluid" /></a></li>
<li class="list-inline-item"><a href="https://www.instagram.com/olatundebusari/"><img src="{{ asset('assets/img/social_icons/instagram.png') }}" class="img-fluid" /></a></li>
-->
                                    <!--                                    <li class="list-inline-item"><a href="#"><img src="{{ asset('assets/img/social_icons/twitter.png') }}" class="img-fluid" /></a></li>-->
                                </ul>
                            </div>
                        </div>

                    </div>
                    <div class="modal-footer px-5 py-4 border-0">
                    </div>
                </div>
            </div>
        </div>


        <div class="modal fade" id="mary" tabindex="-1" role="dialog" aria-labelledby="exec_infoLabel"
             aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered" role="document">
                <div class="modal-content">
                    <div class="modal-header border-0 pb-0">
                        <img src="{{ asset('assets/img/close_button.png') }}" alt="close button" class="img-fluid position-absolute close_button" data-dismiss="modal" aria-label="Close" />
                        <button type="button" class="d-none">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <div class="row">

                            <div class="col-md-5">
                                <div style="background-image: url({{ asset('assets/img/board/MARY-OZIGBO_reduced-002-133x200.jpg') }});
                                            background-size: contain;
                                            background-position: center;
                                            background-repeat: no-repeat;
                                            width: 100%;
                                            height: 250px;">

                                </div>
                            </div>

                            <div class="col-md-7">
                                <h6 class="font-weight-bold">Non-Execuive Director</h6>
                                <h4 class="font-weight-bold gotham-bold">

                                    MARY-CALLISTA OZIGBO</h4>
                                <p class="small"> Mary-Callista Ozigbo is a Non Executive Director at VFD Group Plc. She has vast experience working with top multinationals in the Oil and Gas and Information Technology sectors. Her experience working in these sectors spans African and European environments./p>

                                    <a href="profile" class="text-danger mb-3">Detailed Profile</a>

                                <ul class="list-inline mt-2">
                                    <!--                                    <li class="list-inline-item"><a href="#"><img src="{{ asset('assets/img/social_icons/facebook.png') }}" class="img-fluid" /></a></li>-->
                                    <!--
<li class="list-inline-item"><a href="https://www.linkedin.com/in/tunde-busari-san-fcis-fciarb-20910a18/"><img src="{{ asset('assets/img/social_icons/linkedin.png') }}" class="img-fluid" /></a></li>
<li class="list-inline-item"><a href="https://www.instagram.com/olatundebusari/"><img src="{{ asset('assets/img/social_icons/instagram.png') }}" class="img-fluid" /></a></li>
-->
                                    <!--                                    <li class="list-inline-item"><a href="#"><img src="{{ asset('assets/img/social_icons/twitter.png') }}" class="img-fluid" /></a></li>-->
                                </ul>
                            </div>
                        </div>

                    </div>
                    <div class="modal-footer px-5 py-4 border-0">
                    </div>
                </div>
            </div>
        </div>


        <div class="modal fade" id="suleiman" tabindex="-1" role="dialog" aria-labelledby="exec_infoLabel"
             aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered" role="document">
                <div class="modal-content">
                    <div class="modal-header border-0 pb-0">
                        <img src="{{ asset('assets/img/close_button.png') }}" alt="close button" class="img-fluid position-absolute close_button" data-dismiss="modal" aria-label="Close" />
                        <button type="button" class="d-none">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <div class="row">

                            <div class="col-md-5">
                                <div style="background-image: url({{ asset('assets/img/board/suleimanlawal-226x300.jpg') }});
                                            background-size: contain;
                                            background-position: center;
                                            background-repeat: no-repeat;
                                            width: 100%;
                                            height: 250px;">

                                </div>
                            </div>

                            <div class="col-md-7">
                                <h6 class="font-weight-bold">Non-Executive Director</h6>
                                <h4 class="font-weight-bold gotham-bold">SULEIMAN LAWAL</h4>
                                <p class="small">Suleiman Lawal is a business strategist with vast experience in project management and proven leadership & management skills in challenging, multicultural, & fast-paced environments.</p>

                                <a href="profile" class="text-danger mb-3">Detailed Profile</a>

                                <ul class="list-inline mt-2">
                                    <li class="list-inline-item"><a href="https://www.facebook.com/suleiman.lawal"><img src="{{ asset('assets/img/social_icons/facebook.png') }}" class="img-fluid" /></a>
                                    </li>
                                    <!--
<li class="list-inline-item"><a href="https://www.linkedin.com/in/tunde-busari-san-fcis-fciarb-20910a18/"><img src="{{ asset('assets/img/social_icons/linkedin.png') }}" class="img-fluid" /></a></li>
<li class="list-inline-item"><a href="https://www.instagram.com/olatundebusari/"><img src="{{ asset('assets/img/social_icons/instagram.png') }}" class="img-fluid" /></a></li>
<li class="list-inline-item"><a href="#"><img src="{{ asset('assets/img/social_icons/twitter.png') }}" class="img-fluid" /></a></li>
-->
                                </ul>
                            </div>
                        </div>

                    </div>
                    <div class="modal-footer px-5 py-4 border-0">
                    </div>
                </div>
            </div>
        </div>


        <div class="modal fade" id="samuel" tabindex="-1" role="dialog" aria-labelledby="exec_infoLabel"
             aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered" role="document">
                <div class="modal-content">
                    <div class="modal-header border-0 pb-0">
                        <img src="{{ asset('assets/img/close_button.png') }}" alt="close button" class="img-fluid position-absolute close_button" data-dismiss="modal" aria-label="Close" />
                        <button type="button" class="d-none">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <div class="row">

                            <div class="col-md-5">
                                <div style="background-image: url({{ asset('assets/img/board/DR.-SAM-ONYISHI_reduced-002-193x300.jpg') }});
                                            background-size: contain;
                                            background-position: center;
                                            background-repeat: no-repeat;
                                            width: 100%;
                                            height: 250px;">

                                </div>
                            </div>

                            <div class="col-md-7">
                                <h6 class="font-weight-bold">Independent Non-Executive Director</h6>
                                <h4 class="font-weight-bold gotham-bold">DR. SAMUEL MADUKA ONYISHI</h4>
                                <p class="small">Dr. Samuel Onyishi is a Non-Executive Director at VFD Group Plc.
                                    A highly resourceful entrepreneur, he chairs a number of corporate boards with diverse experience in petroleum, capital market, banking, transportation and logistics.</p>

                                <a href="profile" class="text-danger mb-3">Detailed Profile</a>

                                <ul class="list-inline mt-2">
                                    <li class="list-inline-item"><a href="https://www.facebook.com/Dr.SamuelMaduka/"><img src="{{ asset('assets/img/social_icons/facebook.png') }}" class="img-fluid" /></a></li>
                                    <li class="list-inline-item"><a href="https://www.linkedin.com/in/onyishi-maduka-samuel-131174119/"><img src="{{ asset('assets/img/social_icons/linkedin.png') }}" class="img-fluid" /></a>
                                    </li>
                                    <!--                                    <li class="list-inline-item"><a href="https://www.instagram.com/olatundebusari/"><img src="{{ asset('assets/img/social_icons/instagram.png') }}" class="img-fluid" /></a></li>-->
                                    <!--                                    <li class="list-inline-item"><a href="#"><img src="{{ asset('assets/img/social_icons/twitter.png') }}" class="img-fluid" /></a></li>-->
                                </ul>
                            </div>
                        </div>

                    </div>
                    <div class="modal-footer px-5 py-4 border-0">
                    </div>
                </div>
            </div>
        </div>


        <div class="modal fade" id="jewel" tabindex="-1" role="dialog" aria-labelledby="exec_infoLabel"
             aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered" role="document">
                <div class="modal-content">
                    <div class="modal-header border-0 pb-0">
                        <img src="{{ asset('assets/img/close_button.png') }}" alt="close button" class="img-fluid position-absolute close_button" data-dismiss="modal" aria-label="Close" />
                        <button type="button" class="d-none">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <div class="row">

                            <div class="col-md-5">
                                <div style="background-image: url({{ asset('assets/img/board/JEWEL-OKWECHIME_reduced-002-133x200.jpg') }});
                                            background-size: contain;
                                            background-position: center;
                                            background-repeat: no-repeat;
                                            width: 100%;
                                            height: 250px;">

                                </div>
                            </div>

                            <div class="col-md-7">
                                <h6 class="font-weight-bold">Independent Non-Executive Director</h6>
                                <h4 class="font-weight-bold gotham-bold">JEWEL OKWECHIME</h4>
                                <p class="small">Jewel Okwechime is a Non-Executive Director at VFD Group Plc.
                                    She has over 15 years’ experience in Chemical and Environmental Engineering, developing and leading long-term strategic objectives that resulted in positive growth and innovation </p>

                                <a href="profile" class="text-danger mb-3">Detailed Profile</a>

                                <ul class="list-inline mt-2">
                                    <li class="list-inline-item"><a href="https://www.facebook.com/Allaboutjewel"><img src="{{ asset('assets/img/social_icons/facebook.png') }}" class="img-fluid" /></a></li>
                                    <li class="list-inline-item"><a href="https://www.linkedin.com/in/workwithjewel/"><img src="{{ asset('assets/img/social_icons/linkedin.png') }}" class="img-fluid" /></a>
                                    </li>
                                    <!--                                    <li class="list-inline-item"><a href="https://www.instagram.com/olatundebusari/"><img src="{{ asset('assets/img/social_icons/instagram.png') }}" class="img-fluid" /></a></li>-->
                                    <!--                                    <li class="list-inline-item"><a href="#"><img src="{{ asset('assets/img/social_icons/twitter.png') }}" class="img-fluid" /></a></li>-->
                                </ul>
                            </div>
                        </div>

                    </div>
                    <div class="modal-footer px-5 py-4 border-0">
                    </div>
                </div>
            </div>
        </div>

        <div class="modal fade" id="mobolaji" tabindex="-1" role="dialog" aria-labelledby="exec_infoLabel"
             aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered" role="document">
                <div class="modal-content">
                    <div class="modal-header border-0 pb-0">
                        <img src="{{ asset('assets/img/close_button.png') }}" alt="close button" class="img-fluid position-absolute close_button" data-dismiss="modal" aria-label="Close" />
                        <button type="button" class="d-none">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <div class="row">

                            <div class="col-md-5">
                                <div style="background-image: url({{ asset('assets/img/board/mobolaji.jpg') }});
                                            background-size: contain;
                                            background-position: center;
                                            background-repeat: no-repeat;
                                            width: 100%;
                                            height: 250px;">
                                </div>
                            </div>

                            <div class="col-md-7">
                                <h6 class="font-weight-bold">Executive Director, Finance</h6>
                                <h4 class="font-weight-bold gotham-bold">MOBOLAJI ADEWUMI</h4>
                                <p class="small">Mobolaji Adewumi holds a B.Sc. in Management and Accounting from the Obafemi Awolowo University, Ile Ife and an MBA specializing in Finance from the Judge Business School, University of Cambridge. He is a member of the Association of Chartered Certified Accountants (ACCA) with over ten years post-qualification experience.
                                    Prior to joining VFD Group Plc, he worked with the Managing Director of First Bank of Nigeria Limited. Prior to that, he was the Special Adviser to the Managing Director of ASO Savings and Loans Plc while doubling as Head of Strategy. Bolaji has deep financial services experience and expertise, having worked with regional and global leaders in the financial services sector, such as the United Bank for Africa and KPMG Nigeria.</p>

                                <a href="profile" class="text-danger mb-3">Detailed Profile</a>

                                <ul class="list-inline mt-2">
                                    <li class="list-inline-item"><a href="https://www.facebook.com/mobolaji.adewumi.9"><img src="{{ asset('assets/img/social_icons/facebook.png') }}" class="img-fluid" /></a></li>

                                    <li class="list-inline-item"><a href="https://www.linkedin.com/in/adewumi-mobolaji-60590314/"><img src="{{ asset('assets/img/social_icons/linkedin.png') }}" class="img-fluid" /></a></li>

                                    <li class="list-inline-item"><a href="https://www.instagram.com/mobolajiadewumi/"><img src="{{ asset('assets/img/social_icons/instagram.png') }}" class="img-fluid" /></a></li>

                                    <!--                                    <li class="list-inline-item"><a href="#"><img src="{{ asset('assets/img/social_icons/twitter.png') }}" class="img-fluid" /></a></li>-->
                                </ul>
                            </div>
                        </div>

                    </div>
                    <div class="modal-footer px-5 py-4 border-0">
                    </div>
                </div>
            </div>
        </div>

        <div class="modal fade" id="adeniyi" tabindex="-1" role="dialog" aria-labelledby="exec_infoLabel"
             aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered" role="document">
                <div class="modal-content">
                    <div class="modal-header border-0 pb-0">
                        <img src="{{ asset('assets/img/close_button.png') }}" alt="close button" class="img-fluid position-absolute close_button" data-dismiss="modal" aria-label="Close" />
                        <button type="button" class="d-none">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <div class="row">

                            <div class="col-md-5">
                                <div style="background-image: url({{ asset('assets/img/board/Niyi-Adenubi-250-200x300.jpg') }});
                                            background-size: contain;
                                            background-position: center;
                                            background-repeat: no-repeat;
                                            width: 100%;
                                            height: 250px;">
                                </div>
                            </div>

                            <div class="col-md-7">
                                <h6 class="font-weight-bold">Executive Director, Institutional Business and Investor Relations</h6>
                                <h4 class="font-weight-bold gotham-bold">Adeniyi Adenubi</h4>
                                <p class="small">Adeniyi Adenubi is the Director, Institutional Business and Investor Relations of VFD Group Plc. He has over 10 years of hands-on experience in Private Equity, Venture Capitalism and Financial Advisory. He also has a specific oversight on Corporate Governance

                                    He has played Financial Advisory roles to numerous firms in Nigeria and in the United Kingdom, most notably with the Royal Bank of Scotland and ATOS Consulting.</p>

                                <a href="profile" class="text-danger mb-3">Detailed Profile</a>

                                <ul class="list-inline mt-2">
                                    <li class="list-inline-item"><a href="https://www.facebook.com/adeniyi.adenubi.507"><img src="{{ asset('assets/img/social_icons/facebook.png') }}" class="img-fluid" /></a></li>
                                    <li class="list-inline-item"><a href="https://www.linkedin.com/in/niyi-adenubi-b6404311b/"><img src="{{ asset('assets/img/social_icons/linkedin.png') }}" class="img-fluid" /></a></li>
                                    <li class="list-inline-item"><a href="https://www.instagram.com/niyiadenubi/"><img src="{{ asset('assets/img/social_icons/instagram.png') }}" class="img-fluid" /></a></li>
                                    <!--                                    <li class="list-inline-item"><a href="#"><img src="{{ asset('assets/img/social_icons/twitter.png') }}" class="img-fluid" /></a></li>-->
                                </ul>
                            </div>
                        </div>

                    </div>
                    <div class="modal-footer px-5 py-4 border-0">
                    </div>
                </div>
            </div>
        </div>

        <div class="modal fade" id="gbenga" tabindex="-1" role="dialog" aria-labelledby="exec_infoLabel"
             aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered" role="document">
                <div class="modal-content">
                    <div class="modal-header border-0 pb-0">
                        <img src="{{ asset('assets/img/close_button.png') }}" alt="close button" class="img-fluid position-absolute close_button" data-dismiss="modal" aria-label="Close" />
                        <button type="button" class="d-none">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <div class="row">

                            <div class="col-md-5">
                                <div style="background-image: url({{ asset('assets/img/board/Gbenga-Omolokun-125.png') }});
                                            background-size: contain;
                                            background-position: center;
                                            background-repeat: no-repeat;
                                            width: 100%;
                                            height: 250px;">

                                </div>
                            </div>

                            <div class="col-md-7">
                                <h6 class="font-weight-bold">Executive Director/Chief Operating Office</h6>
                                <h4 class="font-weight-bold gotham-bold">Gbenga Omolokun</h4>
                                <p class="small">Gbenga Omolokun is an Executive Director and Chief Operating Officer of VFD Group Plc.

                                    He has over twelve years of business process, technology and strategy experience across various industries including Manufacturing, Financial Services, Public Sector and Pharmaceuticals.

                                    Gbenga currently oversees the strategy, technology and operations division of the group and its subsidiaries.</p>

                                <a href="profile" class="text-danger mb-3">Detailed Profile</a>

                                <ul class="list-inline mt-2">
                                    <li class="list-inline-item"><a href="https://www.facebook.com/baengah"><img src="{{ asset('assets/img/social_icons/facebook.png') }}" class="img-fluid" /></a></li>
                                    <li class="list-inline-item"><a href="https://www.linkedin.com/in/gbenga-omolokun-93b202b/"><img src="{{ asset('assets/img/social_icons/linkedin.png') }}" class="img-fluid" /></a></li>
                                    <!--                                    <li class="list-inline-item"><a href="https://www.instagram.com/olatundebusari/"><img src="{{ asset('assets/img/social_icons/instagram.png') }}" class="img-fluid" /></a></li>-->
                                    <li class="list-inline-item"><a href="https://twitter.com/baengah"><img src="{{ asset('assets/img/social_icons/twitter.png') }}" class="img-fluid" /></a></li>
                                </ul>
                            </div>
                        </div>

                    </div>
                    <div class="modal-footer px-5 py-4 border-0">
                    </div>
                </div>
            </div>
        </div>


        <div class="modal fade" id="azubike" tabindex="-1" role="dialog" aria-labelledby="exec_infoLabel"
             aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered" role="document">
                <div class="modal-content">
                    <div class="modal-header border-0 pb-0">
                        <img src="{{ asset('assets/img/close_button.png') }}" alt="close button" class="img-fluid position-absolute close_button" data-dismiss="modal" aria-label="Close" />
                        <button type="button" class="d-none">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <div class="row">
                            <div class="col-md-5">
                                <div style="background-image: url({{ asset('assets/img/board/AZUBIKE-EMODI-reduced-002-133x200.jpg') }});
                                            background-size: contain;
                                            background-position: center;
                                            background-repeat: no-repeat;
                                            width: 100%;
                                            height: 250px;">
                                </div>
                            </div>

                            <div class="col-md-7">
                                <h6 class="font-weight-bold">Executive Director/Group Commercial Director</h6>
                                <h4 class="font-weight-bold gotham-bold"> AZUBIKE EMODI</h4>
                                <p class="small">Azubike Emodi is the Group Commercial Director of VFD Group Plc.
                                    He is a resourceful financial service specialist with experience in retail and commercial banking and worked with Zenith Bank before joining Maxxon Pro Service Inc. in Canada where he worked as an Investment Advisor/Financial Planner.</p>

                                <a href="profile" class="text-danger mb-3">Detailed Profile</a>

                                <ul class="list-inline mt-2">
                                    <li class="list-inline-item"><a href="https://www.facebook.com/zuby.emodi"><img src="{{ asset('assets/img/social_icons/facebook.png') }}" class="img-fluid" /></a></li>
                                    <li class="list-inline-item"><a href="https://www.linkedin.com/in/azubike-emodi-50722827/"><img src="{{ asset('assets/img/social_icons/linkedin.png') }}" class="img-fluid" /></a></li>
                                    <li class="list-inline-item"><a href="https://www.instagram.com/zuby_tanko/"><img src="{{ asset('assets/img/social_icons/instagram.png') }}" class="img-fluid" /></a></li>
                                    <!--                                    <li class="list-inline-item"><a href="#"><img src="{{ asset('assets/img/social_icons/twitter.png') }}" class="img-fluid" /></a></li>-->
                                </ul>
                            </div>
                        </div>

                    </div>
                    <div class="modal-footer px-5 py-4 border-0">
                    </div>
                </div>
            </div>
        </div>


        <!--Head of portfolios-->

        <div class="modal fade" id="emodi" tabindex="-1" role="dialog" aria-labelledby="exec_infoLabel"
             aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered" role="document">
                <div class="modal-content">
                    <div class="modal-header border-0 pb-0">
                        <img src="{{ asset('assets/img/close_button.png') }}" alt="close button" class="img-fluid position-absolute close_button" data-dismiss="modal" aria-label="Close" />
                        <button type="button" class="d-none">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <div class="row">

                            <div class="col-md-5">
                                <div style="background-image: url({{ asset('assets/img/leadership/AZUBIKE-EMODI.jpg') }});
                                            background-size: contain;
                                            background-position: center;
                                            background-repeat: no-repeat;
                                            width: 100%;
                                            height: 250px;">

                                </div>
                            </div>

                            <div class="col-md-7">
                                <h6 class="font-weight-bold">Managing Director VFD Microfinance Bank</h6>
                                <h4 class="font-weight-bold gotham-bold">AZUBIKE EMODI</h4>
                                <p class="small">Azubike Emodi is the Managing Director of VFD Microfinance Bank. He is a resourceful and financial service specialist with experience in Retail and Commercial Banking, Investment, Financial Planning and Advisory across African and European markets.</p>

                                <a href="profile" class="text-danger mb-3">Detailed Profile</a>

                                <ul class="list-inline mt-2">
                                    <li class="list-inline-item"><a href="https://www.facebook.com/zuby.emodi"><img src="{{ asset('assets/img/social_icons/facebook.png') }}" class="img-fluid" /></a></li>
                                    <li class="list-inline-item"><a href="https://www.linkedin.com/in/azubike-emodi-50722827/"><img src="{{ asset('assets/img/social_icons/linkedin.png') }}" class="img-fluid" /></a></li>
                                    <li class="list-inline-item"><a href="https://www.instagram.com/zuby_tanko/"><img src="{{ asset('assets/img/social_icons/instagram.png') }}" class="img-fluid" /></a></li>
                                    <!--                                    <li class="list-inline-item"><a href="#"><img src="{{ asset('assets/img/social_icons/twitter.png') }}" class="img-fluid" /></a></li>-->
                                </ul>
                            </div>
                        </div>

                    </div>
                    <div class="modal-footer px-5 py-4 border-0">
                    </div>
                </div>
            </div>
        </div>


        <div class="modal fade" id="ezeh" tabindex="-1" role="dialog" aria-labelledby="exec_infoLabel"
             aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered" role="document">
                <div class="modal-content">
                    <div class="modal-header border-0 pb-0">
                        <img src="{{ asset('assets/img/close_button.png') }}" alt="close button" class="img-fluid position-absolute close_button" data-dismiss="modal" aria-label="Close" />
                        <button type="button" class="d-none">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <div class="row">

                            <div class="col-md-5">
                                <div style="background-image: url({{ asset('assets/img/leadership/THERESA-EZEH_ezeh-002-214x300.jpeg') }});
                                            background-size: contain;
                                            background-position: center;
                                            background-repeat: no-repeat;
                                            width: 100%;
                                            height: 250px;">

                                </div>
                            </div>

                            <div class="col-md-7">
                                <h6 class="font-weight-bold">Managing Director Everdon Bureau de Change</h6>
                                <h4 class="font-weight-bold gotham-bold">Theresa Ezeh</h4>
                                <p class="small">Theresa Ezeh is the Managing Director of Everdon Bureau de Change. She played critical roles in designing the retail banking experience for first tiers financial institutions like Ecobank and Zenith Bank.</p>

                                <a href="profile" class="text-danger mb-3">Detailed Profile</a>

                                <ul class="list-inline mt-2">
                                    <li class="list-inline-item"><a href="https://www.facebook.com/tessy.ezeh"><img src="{{ asset('assets/img/social_icons/facebook.png') }}" class="img-fluid" /></a></li>
                                    <li class="list-inline-item"><a href="https://www.linkedin.com/in/theresa-ezeh-45443554/"><img src="{{ asset('assets/img/social_icons/linkedin.png') }}" class="img-fluid" /></a></li>
                                    <li class="list-inline-item"><a href="https://www.instagram.com/tessy_ezeh/"><img src="{{ asset('assets/img/social_icons/instagram.png') }}" class="img-fluid" /></a></li>
                                    <li class="list-inline-item"><a href="https://twitter.com/Tessy_Ezeh"><img src="{{ asset('assets/img/social_icons/twitter.png') }}" class="img-fluid" /></a></li>
                                </ul>
                            </div>
                        </div>

                    </div>
                    <div class="modal-footer px-5 py-4 border-0">
                    </div>
                </div>
            </div>
        </div>


        <div class="modal fade" id="ogun" tabindex="-1" role="dialog" aria-labelledby="exec_infoLabel"
             aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered" role="document">
                <div class="modal-content">
                    <div class="modal-header border-0 pb-0">
                        <img src="{{ asset('assets/img/close_button.png') }}" alt="close button" class="img-fluid position-absolute close_button" data-dismiss="modal" aria-label="Close" />
                        <button type="button" class="d-none">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <div class="row">

                            <div class="col-md-5">
                                <div style="background-image: url({{ asset('assets/img/leadership/ete-e1543251723232-211x300.jpg') }});
                                            background-size: contain;
                                            background-position: center;
                                            background-repeat: no-repeat;
                                            width: 100%;
                                            height: 250px;">
                                </div>
                            </div>

                            <div class="col-md-7">
                                <h6 class="font-weight-bold">Managing Director / CEO Anchoria Asset Management Limited</h6>
                                <h4 class="font-weight-bold gotham-bold">ETE OGUN</h4>
                                <p class="small">TEte Ogun is the MD/CEO of Anchoria Asset Management Limited. She has vast experience and expertise in asset investment and practical knowledge of relationship management. She is an Associate Member, Institute of Chartered Accountant (ICAN). She also holds an M.A in Finance and Investments from University of Exeter, Exeter UK</p>

                                <a href="profile" class="text-danger mb-3">Detailed Profile</a>

                                <ul class="list-inline mt-2">
                                    <!--                                    <li class="list-inline-item"><a href="#"><img src="{{ asset('assets/img/social_icons/facebook.png') }}" class="img-fluid" /></a></li>-->
                                    <li class="list-inline-item"><a href="https://www.linkedin.com/in/ete-ogun-aca-m-sc-21761950/"><img src="{{ asset('assets/img/social_icons/linkedin.png') }}" class="img-fluid" /></a></li>

                                    <!--
<li class="list-inline-item"><a href="https://www.instagram.com/olatundebusari/"><img src="{{ asset('assets/img/social_icons/instagram.png') }}" class="img-fluid" /></a></li>
<li class="list-inline-item"><a href="#"><img src="{{ asset('assets/img/social_icons/twitter.png') }}" class="img-fluid" /></a></li>
-->
                                </ul>
                            </div>
                        </div>

                    </div>
                    <div class="modal-footer px-5 py-4 border-0">
                    </div>
                </div>
            </div>
        </div>


        <div class="modal fade" id="nweke" tabindex="-1" role="dialog" aria-labelledby="exec_infoLabel"
             aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered" role="document">
                <div class="modal-content">
                    <div class="modal-header border-0 pb-0">
                        <img src="{{ asset('assets/img/close_button.png') }}" alt="close button" class="img-fluid position-absolute close_button" data-dismiss="modal" aria-label="Close" />
                        <button type="button" class="d-none">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <div class="row">

                            <div class="col-md-5">
                                <div style="background-image: url({{ asset('assets/img/leadership/obinna-e1543251548670-234x300.jpg') }});
                                            background-size: contain;
                                            background-position: center;
                                            background-repeat: no-repeat;
                                            width: 100%;
                                            height: 250px;">

                                </div>
                            </div>

                            <div class="col-md-7">
                                <h6 class="font-weight-bold">General Manager of Dynasty Real Estate</h6>
                                <h4 class="font-weight-bold gotham-bold">Obinna Nweke</h4>
                                <p class="small">Obinna Nweke is the General Manager of Dynasty Real Estate. He is a member, Nigerian Institute of Management (Chartered). He has an extensive understanding of corporate real estate ownership, real estate leasing and relationship management. He is a graduate of the University of Nigeria with a degree in Business Management.</p>

                                <a href="profile" class="text-danger mb-3">Detailed Profile</a>

                                <ul class="list-inline mt-2">
                                    <li class="list-inline-item"><a href="https://www.facebook.com/obinna.nweke.52"><img src="{{ asset('assets/img/social_icons/facebook.png') }}" class="img-fluid" /></a></li>
                                    <li class="list-inline-item"><a href="https://www.linkedin.com/in/obinna-nweke-6365a28a/"><img src="{{ asset('assets/img/social_icons/linkedin.png') }}" class="img-fluid" /></a></li>
                                    <li class="list-inline-item"><a href="https://www.instagram.com/obinnaenweke/"><img src="{{ asset('assets/img/social_icons/instagram.png') }}" class="img-fluid" /></a></li>
                                    <!--                                    <li class="list-inline-item"><a href="#"><img src="{{ asset('assets/img/social_icons/twitter.png') }}" class="img-fluid" /></a></li>-->
                                </ul>
                            </div>
                        </div>

                    </div>
                    <div class="modal-footer px-5 py-4 border-0">
                    </div>
                </div>
            </div>
        </div>

        <!--       Download modal-->
        <div class="modal fade" id="download" tabindex="-1" role="dialog" aria-labelledby=""
             aria-hidden="true">
            <div class="modal-dialog download-modal modal-dialog-centered" role="document">
                <div class="modal-content">
                    <div class="modal-header border-0 pb-0">
                        <img src="{{ asset('assets/img/close_button.png') }}" alt="close button" class="img-fluid position-absolute close_button" data-dismiss="modal" aria-label="Close" />
                        <button type="button" class="d-none">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>



                    <div class="modal-body">
                        <div class="row justfy-content-center">
                            <div class="col-md-10">
                                <h5 class="gotham-bold mb-3">Download VFD Group Profile</h5>
                                <form>
                                    <div class="form-row">
                                        <div class="col">
                                            <label for="name">Your Name</label>
                                            <input id="name" type="text" class="form-control border rounded" placeholder="">
                                        </div>
                                    </div>

                                    <div class="form-row">
                                        <div class="col">
                                            <label for="email">Your Email</label>
                                            <input id="email" type="email" class="form-control border rounded">
                                        </div>
                                    </div>
                                    <a class="vfd-text-red">Download</a>
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
