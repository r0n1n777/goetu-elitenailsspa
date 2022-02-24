<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="description" content="Elite Nails & Spa is located at 2511 Scott Blvd, Santa Clara CA 95050. We Provide Professional Nail Care Services. We will always bring you happiness and satisfaction with our services.">
        <meta name="keywords" content="Nail, Nail Salon, Nails & Spa,Spa,Elite Nails & Spa,Nails">
        <meta name="theme-color" content="#F9C2CC">

        <title>@yield('title')</title>

        {{-- Favicon --}}
        <link rel="shortcut icon" href="{{ asset('favicon.ico') }}">
        <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    </head>
    <body data-aos-easing="ease" data-aos-duration="800" data-aos-delay="0">

        <!--====== PRELOADER PART START ======-->
        <div class="preloader" style="display: none;">
            <div class="loader_34">
                <div class="ytp-spinner">
                    <div class="ytp-spinner-container">
                        <div class="ytp-spinner-rotator">
                            <div class="ytp-spinner-left">
                                <div class="ytp-spinner-circle"></div>
                            </div>
                            <div class="ytp-spinner-right">
                                <div class="ytp-spinner-circle"></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!--====== PRELOADER ENDS START ======-->

        <!--====== HEADER PART START ======-->
        <header id="home" class="header-area pt-100">

            <div class="shape header-shape-one">
                <img src="{{ asset('images/shape-1.png') }}" alt="shape">
            </div> <!-- header shape one -->

            <div class="shape header-shape-tow animation-one">
                <img src="{{ asset('images/shape-2.png') }}" alt="shape">
            </div> <!-- header shape tow -->

            <div class="shape header-shape-three animation-one">
                <img src="{{ asset('images/shape-3.png') }}" alt="shape">
            </div> <!-- header shape three -->

            <div class="shape header-shape-fore">
                <img src="{{ asset('images/shape-4.png') }}" alt="shape">
            </div> <!-- header shape three -->

            <div class="navigation-bar">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-12">
                            <nav class="navbar navbar-expand-lg">
                                <div class="d-flex">
                                    <a href="{{ route('home') }}">
                                        <img class="img-fluid w-75" src="{{ asset('logo.png') }}" alt="Logo">
                                    </a>
                                    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                                        <span class="toggler-icon"></span>
                                        <span class="toggler-icon"></span>
                                        <span class="toggler-icon"></span>
                                    </button>
                                </div>

                                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                                    <ul id="nav" class="navbar-nav ml-auto">
                                        <li class="nav-item @if (request()->is('/') || request()->is('home')) active @endif">
                                            <a class="page-scroll" href="{{ route('home') }}">Home</a>
                                        </li>
                                        <li class="nav-item @if (request()->is('about')) active @endif">
                                            <a class="page-scroll" href="{{ route('about') }}">About</a>
                                        </li>
                                        <li class="nav-item @if (request()->is('services')) active @endif">
                                            <a class="page-scroll" href="{{ route('services') }}">Services</a>
                                        </li>
                                        <li class="nav-item @if (request()->is('gallery')) active @endif">
                                            <a class="page-scroll" href="{{ route('gallery') }}">Gallery</a>
                                        </li>
                                        <li class="nav-item @if (request()->is('contact')) active @endif">
                                            <a class="page-scroll" href="{{ route('contact') }}">Contact</a>
                                        </li>
                                        <li class="nav-item d-block d-sm-block d-md-block d-lg-none">
                                            <a class="btn btn-sm btn-danger text-white" target="new" href="https://customers.go3reservation.com/elitenails"><x-feathericon-calendar/> BOOK AN APPOINTMENT</a>
                                        </li>
                                    </ul> <!-- navbar nav -->
                                </div>
                                <div class="navbar-btn ml-20 d-none d-lg-block">
                                    <a class="main-btn" target="new" href="https://customers.go3reservation.com/elitenails"><x-feathericon-calendar/> BOOK NOW</a>
                                </div>
                            </nav> <!-- navbar -->
                        </div>
                    </div> <!-- row -->
                </div> <!-- container -->
            </div> <!-- navigation bar -->

            @if (request()->is('/') || request()->is('home'))
            <div class="header-banner d-flex align-items-center">
                <div class="container">
                    <div class="d-block d-sm-block d-md-block d-lg-none mb-4">
                        <a class="main-btn" target="new" href="https://customers.go3reservation.com/elitenails"><x-feathericon-calendar/> BOOK NOW</a>
                    </div>
                    <div class="row">
                        <div class="col-xl-8 col-lg-9 col-sm-10">
                            <div class="banner-content">
                                <h4 class="sub-title wow fadeInUp" data-wow-duration="1.5s" data-wow-delay="1s" style="visibility: visible; animation-duration: 1.5s; animation-delay: 1s; animation-name: fadeInUp;">Elite Nail & Spa</h4>
                                <h1 class="banner-title mt-10 wow fadeInUp" data-wow-duration="1.5s" data-wow-delay="2s" style="visibility: visible; animation-duration: 1.5s; animation-delay: 2s; animation-name: fadeInUp;"><span>Fall in Love</span>  with the Art of Nails</h1>
                                <a class="banner-contact mt-25 wow fadeInUp" data-wow-duration="1.5s" data-wow-delay="2.3s" href="https://customers.go3reservation.com/elitenails" style="visibility: visible; animation-duration: 1.5s; animation-delay: 2.3s; animation-name: fadeInUp;" target="new">Book Now Online <x-feathericon-chevrons-right/></a>
                            </div> <!-- banner content -->
                        </div>
                    </div> <!-- row -->
                </div> <!-- container -->
                <div class="banner-image bg_cover" style="background-image: url('{{ asset('banner/Banner-Home1.jpg') }}')"></div>
            </div> <!-- header banner -->
            @endif

            @if (request()->is('about'))
            <div class="header-banner d-flex align-items-center" id="header">
                <div class="container">
                    <div class="row">
                        <div class="col-xl-8 col-lg-9 col-sm-10">
                            <div class="banner-content">
                                <!--<h4 class="sub-title wow fadeInUp" data-wow-duration="1.5s" data-wow-delay="1s">Nail Salon</h4>-->
                                <h1 class="banner-title mt-10 wow fadeInUp" data-wow-duration="1.5s" data-wow-delay="2s"><span style="color:#eb3656;text-align: center;margin-left: 40%;text-shadow:2px 2px #f8b0b0;">About Us</span></h1>
                                <!--<a class="banner-contact mt-25 wow fadeInUp" data-wow-duration="1.5s" data-wow-delay="2.3s" href="#contact">Book Online</a>-->
                            </div> <!-- banner content -->
                        </div>
                    </div> <!-- row -->
                </div> <!-- container -->
            </div> <!-- header banner -->
            @endif

            @if (request()->is('services'))
            <div class="header-banner d-flex align-items-center" id="services-header">
                <div class="container">
                    <div class="row">
                        <div class="col-xl-8 col-lg-9 col-sm-10">
                            <div class="banner-content">
                                <!--<h4 class="sub-title wow fadeInUp" data-wow-duration="1.5s" data-wow-delay="1s">Nail Salon</h4>-->
                                <h1 class="banner-title mt-10 wow fadeInUp" data-wow-duration="1.5s" data-wow-delay="2s"><span style="color:#eb3656;text-align: center;margin-left: 40%;text-shadow:2px 2px #f8b0b0;">Services</span></h1>
                                <!--<a class="banner-contact mt-25 wow fadeInUp" data-wow-duration="1.5s" data-wow-delay="2.3s" href="#contact">Book Online</a>-->
                            </div> <!-- banner content -->
                        </div>
                    </div> <!-- row -->
                </div> <!-- container -->
            </div> <!-- header banner -->
            @endif

            @if (request()->is('gallery'))
            <div class="header-banner d-flex align-items-center" id="gallery-header">
                <div class="container">
                    <div class="row">
                        <div class="col-xl-8 col-lg-9 col-sm-10">
                            <div class="banner-content">
                                <!--<h4 class="sub-title wow fadeInUp" data-wow-duration="1.5s" data-wow-delay="1s">Nail Salon</h4>-->
                                <h1 class="banner-title mt-10 wow fadeInUp" data-wow-duration="1.5s" data-wow-delay="2s"><span style="color:#eb3656;text-align: center;margin-left: 40%;text-shadow:2px 2px #f8b0b0;">Gallery</span></h1>
                                <!--<a class="banner-contact mt-25 wow fadeInUp" data-wow-duration="1.5s" data-wow-delay="2.3s" href="#contact">Book Online</a>-->
                            </div> <!-- banner content -->
                        </div>
                    </div> <!-- row -->
                </div> <!-- container -->
            </div> <!-- header banner -->
            @endif

            @if (request()->is('contact'))
            <div class="header-banner d-flex align-items-center" id="contacting-header">
                <div class="container">
                    <div class="row">
                        <div class="col-xl-8 col-lg-9 col-sm-10">
                            <div class="banner-content">
                                <!--<h4 class="sub-title wow fadeInUp" data-wow-duration="1.5s" data-wow-delay="1s">Nail Salon</h4>-->
                                <h1 class="banner-title mt-10 wow fadeInUp" data-wow-duration="1.5s" data-wow-delay="2s"><span style="color:#eb3656;text-align: center;margin-left: 40%;text-shadow:2px 2px #f8b0b0;">Contact Us</span></h1>
                                <!--<a class="banner-contact mt-25 wow fadeInUp" data-wow-duration="1.5s" data-wow-delay="2.3s" href="#contact">Book Online</a>-->
                            </div> <!-- banner content -->
                        </div>
                    </div> <!-- row -->
                </div> <!-- container -->
            </div> <!-- header banner -->
            @endif

        </header>
        @yield('content')

        <!--====== FOOTER PART START ======-->

        <footer id="footer" class="footer-area" style="background-color: #f8b0b0;">
            <div class="footer-widget pt-80 pb-130">
                <div class="container">
                    {{-- <div class="row">
                        <div class="col-6">
                            <div class="testimonial-active">
                                <div class="single-testimonial text-center">
                                    <span class="yelp-review" data-review-id="B03uxM7m89Bkyk7xRUCOvA" data-hostname="www.yelp.com">Read <a href="https://www.yelp.com/user_details?userid=uzk2kP_nbeQuY8vbh4wFqw" rel="nofollow noopener">Brooke D.</a>'s <a href="https://www.yelp.com/biz/elite-nails-and-spa-santa-clara-3?hrid=B03uxM7m89Bkyk7xRUCOvA" rel="nofollow noopener">review</a> of <a href="https://www.yelp.com/biz/nDMDI_mMP_IrGgFqFxOKRA" rel="nofollow noopener">Elite Nails & Spa</a> on <a href="https://www.yelp.com" rel="nofollow noopener">Yelp</a><script src="https://www.yelp.com/embed/widgets.js" type="text/javascript" async></script></span>
                                </div>
        
                                <div class="single-testimonial text-center">
                                    <span class="yelp-review" data-review-id="M9KaGtGkbkqLixvUcsOLoA" data-hostname="www.yelp.com">Read <a href="https://www.yelp.com/user_details?userid=4M_1HjiFUAxrRmcUIgR46g" rel="nofollow noopener">Crystal C.</a>'s <a href="https://www.yelp.com/biz/elite-nails-and-spa-santa-clara-3?hrid=M9KaGtGkbkqLixvUcsOLoA" rel="nofollow noopener">review</a> of <a href="https://www.yelp.com/biz/nDMDI_mMP_IrGgFqFxOKRA" rel="nofollow noopener">Elite Nails & Spa</a> on <a href="https://www.yelp.com" rel="nofollow noopener">Yelp</a><script src="https://www.yelp.com/embed/widgets.js" type="text/javascript" async></script></span>
                                </div>
        
                                <div class="single-testimonial text-center">
                                    <span class="yelp-review" data-review-id="ZDz-KSaBDKIsEyo3WG05TA" data-hostname="www.yelp.com">Read <a href="https://www.yelp.com/user_details?userid=mFZnnqFaZ7-qbE4rbK4EZA" rel="nofollow noopener">Sarah Z.</a>'s <a href="https://www.yelp.com/biz/elite-nails-and-spa-santa-clara-3?hrid=ZDz-KSaBDKIsEyo3WG05TA" rel="nofollow noopener">review</a> of <a href="https://www.yelp.com/biz/nDMDI_mMP_IrGgFqFxOKRA" rel="nofollow noopener">Elite Nails & Spa</a> on <a href="https://www.yelp.com" rel="nofollow noopener">Yelp</a><script src="https://www.yelp.com/embed/widgets.js" type="text/javascript" async></script></span>
                                </div>
        
                                <div class="single-testimonial text-center">
                                    <span class="yelp-review" data-review-id="BzCyBUCMBGEeESpP6wHj8Q" data-hostname="www.yelp.com">Read <a href="https://www.yelp.com/user_details?userid=lXgxy2nFk5TdKBDYYZKjFg" rel="nofollow noopener">Queena T.</a>'s <a href="https://www.yelp.com/biz/elite-nails-and-spa-santa-clara-3?hrid=BzCyBUCMBGEeESpP6wHj8Q" rel="nofollow noopener">review</a> of <a href="https://www.yelp.com/biz/nDMDI_mMP_IrGgFqFxOKRA" rel="nofollow noopener">Elite Nails & Spa</a> on <a href="https://www.yelp.com" rel="nofollow noopener">Yelp</a><script src="https://www.yelp.com/embed/widgets.js" type="text/javascript" async></script></span>
                                </div>
        
                                <div class="single-testimonial text-center">
                                    <span class="yelp-review" data-review-id="7Q5cIE7so7wA6rkmVv7euw" data-hostname="www.yelp.com">Read <a href="https://www.yelp.com/user_details?userid=HRwGVMm3BW7_NtyZiN9V7Q" rel="nofollow noopener">Angel K.</a>'s <a href="https://www.yelp.com/biz/elite-nails-and-spa-santa-clara-3?hrid=7Q5cIE7so7wA6rkmVv7euw" rel="nofollow noopener">review</a> of <a href="https://www.yelp.com/biz/nDMDI_mMP_IrGgFqFxOKRA" rel="nofollow noopener">Elite Nails & Spa</a> on <a href="https://www.yelp.com" rel="nofollow noopener">Yelp</a><script src="https://www.yelp.com/embed/widgets.js" type="text/javascript" async></script></span>
                                </div>
        
                                <div class="single-testimonial text-center">
                                    <span class="yelp-review" data-review-id="gxJzckhYXzyT5L11rork9A" data-hostname="www.yelp.com">Read <a href="https://www.yelp.com/user_details?userid=ivvvQNPadEDAWbZ__-D2mA" rel="nofollow noopener">Gina P.</a>'s <a href="https://www.yelp.com/biz/elite-nails-and-spa-santa-clara-3?hrid=gxJzckhYXzyT5L11rork9A" rel="nofollow noopener">review</a> of <a href="https://www.yelp.com/biz/nDMDI_mMP_IrGgFqFxOKRA" rel="nofollow noopener">Elite Nails & Spa</a> on <a href="https://www.yelp.com" rel="nofollow noopener">Yelp</a><script src="https://www.yelp.com/embed/widgets.js" type="text/javascript" async></script></span>
                                </div>
        
                                <div class="single-testimonial text-center">
                                    <span class="yelp-review" data-review-id="FUcs7Chw1DWJI6G7YXKo6A" data-hostname="www.yelp.com">Read <a href="https://www.yelp.com/user_details?userid=mix3zXxE2CnX48Bf_Bef3g" rel="nofollow noopener">Wei Shing C.</a>'s <a href="https://www.yelp.com/biz/elite-nails-and-spa-santa-clara-3?hrid=FUcs7Chw1DWJI6G7YXKo6A" rel="nofollow noopener">review</a> of <a href="https://www.yelp.com/biz/nDMDI_mMP_IrGgFqFxOKRA" rel="nofollow noopener">Elite Nails & Spa</a> on <a href="https://www.yelp.com" rel="nofollow noopener">Yelp</a><script src="https://www.yelp.com/embed/widgets.js" type="text/javascript" async></script></span>
                                </div>
        
                                <div class="single-testimonial text-center">
                                    <span class="yelp-review" data-review-id="P7wKeJSPV8Q7QAfw5d6EcQ" data-hostname="www.yelp.com">Read <a href="https://www.yelp.com/user_details?userid=wl2C7fPr1DIFyF0FArx-vA" rel="nofollow noopener">Alyssa M.</a>'s <a href="https://www.yelp.com/biz/elite-nails-and-spa-santa-clara-3?hrid=P7wKeJSPV8Q7QAfw5d6EcQ" rel="nofollow noopener">review</a> of <a href="https://www.yelp.com/biz/nDMDI_mMP_IrGgFqFxOKRA" rel="nofollow noopener">Elite Nails & Spa</a> on <a href="https://www.yelp.com" rel="nofollow noopener">Yelp</a><script src="https://www.yelp.com/embed/widgets.js" type="text/javascript" async></script></span>
                                </div>
        
                                <div class="single-testimonial text-center">
                                    <span class="yelp-review" data-review-id="aXyww99hytZDtZYmEDGEMg" data-hostname="www.yelp.com">Read <a href="https://www.yelp.com/user_details?userid=YoUg7bODR1KdqAITVvDh7A" rel="nofollow noopener">Theresa P.</a>'s <a href="https://www.yelp.com/biz/elite-nails-and-spa-santa-clara-3?hrid=aXyww99hytZDtZYmEDGEMg" rel="nofollow noopener">review</a> of <a href="https://www.yelp.com/biz/nDMDI_mMP_IrGgFqFxOKRA" rel="nofollow noopener">Elite Nails & Spa</a> on <a href="https://www.yelp.com" rel="nofollow noopener">Yelp</a><script src="https://www.yelp.com/embed/widgets.js" type="text/javascript" async></script></span>
                                </div>
        
                                <div class="single-testimonial text-center">
                                    <span class="yelp-review" data-review-id="_0rDcvzEYWu8GsEGFGJAXw" data-hostname="www.yelp.com">Read <a href="https://www.yelp.com/user_details?userid=fWvkS8vGuqhoBIWh4dfRWw" rel="nofollow noopener">Sheila J.</a>'s <a href="https://www.yelp.com/biz/elite-nails-and-spa-santa-clara-3?hrid=_0rDcvzEYWu8GsEGFGJAXw" rel="nofollow noopener">review</a> of <a href="https://www.yelp.com/biz/nDMDI_mMP_IrGgFqFxOKRA" rel="nofollow noopener">Elite Nails & Spa</a> on <a href="https://www.yelp.com" rel="nofollow noopener">Yelp</a><script src="https://www.yelp.com/embed/widgets.js" type="text/javascript" async></script></span>
                                </div>
        
                                <div class="single-testimonial text-center">
                                    <span class="yelp-review" data-review-id="eOm5fz6P8E0OabOoOH-GZQ" data-hostname="www.yelp.com">Read <a href="https://www.yelp.com/user_details?userid=zVb_LKxOBi1vozToeIJ5Mg" rel="nofollow noopener">Galina J.</a>'s <a href="https://www.yelp.com/biz/elite-nails-and-spa-santa-clara-3?hrid=eOm5fz6P8E0OabOoOH-GZQ" rel="nofollow noopener">review</a> of <a href="https://www.yelp.com/biz/nDMDI_mMP_IrGgFqFxOKRA" rel="nofollow noopener">Elite Nails & Spa</a> on <a href="https://www.yelp.com" rel="nofollow noopener">Yelp</a><script src="https://www.yelp.com/embed/widgets.js" type="text/javascript" async></script></span>
                                </div>
                            </div>
                        </div>
                    
                        <div class="col-6">
                            <div class="testimonial-active">
                                
                                <div class="single-testimonial text-center">
                                    <a href="https://www.google.com/search?q=elite+nails+%26+spa+santa+clara&rlz=1C1CHBF_enPH961PH961&oq=elite+nails&aqs=chrome.1.69i57j35i39l2j46i175i199i512l2j69i60j69i61j69i60.2502j0j7&sourceid=chrome&ie=UTF-8#lrd=0x808fcb5147bae61f:0x441ffaea14a43e00,1" target="new">
                                        <img src="{{ asset('images/reviews/1.png') }}" class="img-fluid">
                                    </a>
                                </div>
        
                                <div class="single-testimonial text-center">
                                    <a href="https://www.google.com/search?q=elite+nails+%26+spa+santa+clara&rlz=1C1CHBF_enPH961PH961&oq=elite+nails&aqs=chrome.1.69i57j35i39l2j46i175i199i512l2j69i60j69i61j69i60.2502j0j7&sourceid=chrome&ie=UTF-8#lrd=0x808fcb5147bae61f:0x441ffaea14a43e00,1" target="new">
                                        <img src="{{ asset('images/reviews/2.png') }}" class="img-fluid">
                                    </a>
                                </div>
        
                                <div class="single-testimonial text-center">
                                    <a href="https://www.google.com/search?q=elite+nails+%26+spa+santa+clara&rlz=1C1CHBF_enPH961PH961&oq=elite+nails&aqs=chrome.1.69i57j35i39l2j46i175i199i512l2j69i60j69i61j69i60.2502j0j7&sourceid=chrome&ie=UTF-8#lrd=0x808fcb5147bae61f:0x441ffaea14a43e00,1" target="new">
                                        <img src="{{ asset('images/reviews/3.png') }}" class="img-fluid">
                                    </a>
                                </div>
        
                                <div class="single-testimonial text-center">
                                    <a href="https://www.google.com/search?q=elite+nails+%26+spa+santa+clara&rlz=1C1CHBF_enPH961PH961&oq=elite+nails&aqs=chrome.1.69i57j35i39l2j46i175i199i512l2j69i60j69i61j69i60.2502j0j7&sourceid=chrome&ie=UTF-8#lrd=0x808fcb5147bae61f:0x441ffaea14a43e00,1" target="new">
                                        <img src="{{ asset('images/reviews/4.png') }}" class="img-fluid">
                                    </a>
                                </div>
        
                                <div class="single-testimonial text-center">
                                    <a href="https://www.google.com/search?q=elite+nails+%26+spa+santa+clara&rlz=1C1CHBF_enPH961PH961&oq=elite+nails&aqs=chrome.1.69i57j35i39l2j46i175i199i512l2j69i60j69i61j69i60.2502j0j7&sourceid=chrome&ie=UTF-8#lrd=0x808fcb5147bae61f:0x441ffaea14a43e00,1" target="new">
                                        <img src="{{ asset('images/reviews/5.png') }}" class="img-fluid">
                                    </a>
                                </div>
        
                                <div class="single-testimonial text-center">
                                    <a href="https://www.google.com/search?q=elite+nails+%26+spa+santa+clara&rlz=1C1CHBF_enPH961PH961&oq=elite+nails&aqs=chrome.1.69i57j35i39l2j46i175i199i512l2j69i60j69i61j69i60.2502j0j7&sourceid=chrome&ie=UTF-8#lrd=0x808fcb5147bae61f:0x441ffaea14a43e00,1" target="new">
                                        <img src="{{ asset('images/reviews/6.png') }}" class="img-fluid">
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div> --}}
                    <div class="row">
                        <div class="col-lg-4 col-md-4 col-sm-10">
                            <div class="footer-logo mt-50">
                                <div class="f-title">
                                    <h4 class="title">Business Info</h4>
                                </div>
                                <ul class="footer-info">
                                    <li>
                                        <div class="single-info">
                                            <div class="info-content">
                                                <x-feathericon-phone/> (408) 352-5352
                                            </div>
                                        </div> <!-- single info -->
                                    </li>
                                    <li>
                                        <div class="single-info">
                                            <div class="info-content">
                                                <x-feathericon-mail/> elitenailsantaclara@gmail.com
                                            </div>
                                        </div> <!-- single info -->
                                    </li>
                                    <li>
                                        <div class="single-info">
                                            <div class="info-content">
                                                <x-feathericon-map-pin/> 2511 Scott Blvd, Santa Clara, CA 95050
                                            </div>
                                        </div> <!-- single info -->
                                    </li>
                                    <li>
                                        <div class="single-info">
                                            <div class="info-content">
                                                <a href="https://www.yelp.com/biz/elite-nails-and-spa-santa-clara-3" target="new">
                                                    <img src="{{ asset('images/icons/yelp.png') }}" style="width: 30px !important;" class="mr-3">
                                                </a>
                                                <a href="https://www.google.com/search?q=elite+nails+%26+spa+santa+clara&rlz=1C1CHBF_enPH961PH961&oq=elite+nails&aqs=chrome.1.69i57j35i39l2j46i175i199i512l2j69i60j69i61j69i60.2502j0j7&sourceid=chrome&ie=UTF-8#lrd=0x808fcb5147bae61f:0x441ffaea14a43e00,1" target="new">
                                                    <img src="{{ asset('images/icons/google.png') }}" style="width: 30px !important;">
                                                </a>
                                            </div>
                                        </div> <!-- single info -->
                                    </li>
                                </ul>
                            </div> <!-- footer logo -->
                        </div>
                        <div class="col-lg-4 col-md-4 col-sm-6">
                            <div class="footer-link mt-45">
                                <div class="f-title">
                                    <h4 class="title">Business Hours</h4>
                                </div>
                                <p class="mt-15">
                                    <b>Monday - Friday:</b><br> 10:00AM - 7:30PM<br><br>
                                    <b>Saturday - Sunday: </b><br>10:00AM - 6:00PM
                                </p>
                            </div>
                        </div>
                        
                    </div> <!-- row -->
                </div> <!-- container -->
            </div> <!-- footer widget -->
            <!--<div class="copyright-area">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="copyright text-center">
                                <p><a href="#" rel="nofollow"></a></p>
                            </div>--> <!-- copyright -->
                        <!--</div>
                    </div>--> <!-- row -->
            <!--</div>--> <!-- container -->
            <!--</div>--> <!-- copyright-area -->
        </footer>

        <!--====== FOOTER PART ENDS ======-->

        <!--====== BACK TO TOP PART START ======-->

        <div class="p-3 text-right">
            <a href="https://www.westminsterocprinting.com/webtemplates/salon-website-template-060/#" class="back-to-top text-secondary">Back to Top <x-feathericon-chevrons-up/></a>
        </div>

        <!-- Gift Certificates Modal -->
        <div class="modal fade" id="gift" tabindex="-1" role="dialog" aria-labelledby="gift" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
                <div class="modal-content">
                    <div class="modal-header border-0" style="background-color: #F9C2CC !important;">
                        <h5 class="modal-title"></h5>
                            <button type="button" class="close text-white" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                    </div>
                    <div class="modal-body text-center" style="background-color: #D92125 !important;">
                        <img src="{{ asset('logo-white.png') }}" class="img-fluid"><br><br>
                        <h1 class="text-white">Gift Certificates are Available!</h1>
                    </div>
                    <div class="modal-footer border-0" style="background-color: #F9C2CC !important;"></div>
                </div>
            </div>
        </div>

        <!--====== BACK TO TOP PART ENDS ======-->

        <!--====== PART START ======-->

        <!--====== jquery js ======-->
        <script src="{{ asset('js/modernizr.js') }}"></script>
        <script src="{{ asset('js/jquery.js') }}" type="text/javascript"></script>

        <!--====== Bootstrap js ======-->
        <script src="{{ asset('js/bootstrap.js') }}" type="text/javascript"></script>

        <!--====== WOW js ======-->
        <script src="{{ asset('js/wow.js') }}"></script>

        <!--====== Slick js ======-->
        <script src="{{ asset('js/slick.js') }}"></script>

        <!--====== Scrolling Nav js ======-->
        <script src="{{ asset('js/scrolling-nav.js') }}"></script>
        <script src="{{ asset('js/jquery-easing.js') }}"></script>

        <!--====== Aos js ======-->
        <script src="{{ asset('js/aos.js') }}"></script>


        <!--====== Main js ======-->
        <script src="{{ asset('js/main.js') }}"></script>

        <script src="{{ asset('js/bootstrap-bundle.js') }}"></script>
        <script src="{{ asset('js/glightbox.js') }}"></script>
        <script src="{{ asset('js/isotope.js') }}"></script>
        <script src="{{ asset('js/slider.js') }}"></script>

        <script src="{{ asset('js/gallery.js') }}"></script>

        @if (request()->is('/') || request()->is('services'))
        <script>
        $(document).ready(function(){
            $('#gift').modal('show');
        });
        </script>
        @endif

    </body>
    
</html>
