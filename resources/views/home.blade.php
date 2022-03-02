@extends('layout/app')

@section('title', 'Home - Elite Nails & Spa')

@section('content')

<!--====== ABOUT PART START ======-->

<section id="about" class="about-area pt-80 pb-130" style="background-color: #f8b0b0;">
    <div class="container">
        <div class="row">
            <div class="col-lg-6">
                <div class="about-image mt-50 clearfix">
                    <div class="single-image float-left">
                        <img src="{{ asset('images/about2.jpg') }}" alt="About" data-aos="fade-up" data-aos-duration="1000" class="aos-init">
                    </div> <!-- single image -->
                    <div data-aos="fade-right" class="about-btn aos-init">
                        <a class="main-btn" href="{{ route('about') }}"><span>5</span> Years Experience</a>
                    </div>
                    <div class="single-image image-tow float-right">
                        <img src="{{ asset('images/about1.1.jpg') }}" alt="About" data-aos="fade-up" data-aos-duration="1000" class="aos-init">
                    </div> <!-- single image -->
                </div> <!-- about image -->
            </div>
            <div class="col-lg-6">
                <div class="about-content mt-45 aos-init" data-aos="fade-down-right">
                    <h4 class="about-welcome">About Us </h4>
                    <h3 class="about-title mt-10">Reasons to choose</h3>
                    <p class="mt-25">
                        Elite Nails & Spa is offering a tranquil refuge from the hustle and bustle of the city, featuring experienced staffs and upscale amenities that will make you feel relaxed and well pampered. We offer precision manicure and soothing pedicures in massage chairs that are fit for royalty. Our practitioners can provide simple or highly creative nails designs, along with the most advanced nails treatment on the market today. A wide variety of other quality beauty enhancement service in a very clean, hygienic environment are also proudly offer, ranging from eyelash extension to body hair removal. At Elite Nails & Spa, we want you to leave our salon feeling refreshed. rejuvenated and always look you best.                        
                    </p>
                    <a class="main-btn mt-25" href="{{ route('about') }}">READ MORE<x-feathericon-chevrons-right/></a>
                </div> <!-- about content -->
            </div>
        </div> <!-- row -->
    </div> <!-- container -->
</section>

<!--====== ABOUT PART ENDS ======-->

<section id="team" class="team-area pt-125 pb-130 gray-bg">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-6 aos-init" data-aos="fade-down-right">
                <div class="section-title text-center pb-20">
                    <h5 class="sub-title mb-15">What We Offer</h5>
                    <h2 class="title">Our Services</h2>
                </div> <!-- section title -->
            </div>
        </div> <!-- row -->
        <div class="row">
            <div class="col-lg-3 col-md-6 col-sm-6">
                <div class="single-team text-center mt-30 wow fadeInUp" data-wow-duration="1s" data-wow-delay="0.2s" style="visibility: visible; animation-duration: 1s; animation-delay: 0.2s; animation-name: fadeInUp;">
                    <div class="team-image">
                        <img src="{{ asset('images/manicure.jpg') }}">
                    </div>
                    <div class="team-content">
                        <h4 class="team-name"><a href="{{ route('services') }}">Elite Manicure <x-feathericon-star/></a></h4>
                        <span class="sub-title"></span>
                        
                    </div>
                </div> <!-- single team -->
            </div>
            <div class="col-lg-3 col-md-6 col-sm-6">
                <div class="single-team text-center mt-30 wow fadeInUp" data-wow-duration="1s" data-wow-delay="0.2s" style="visibility: visible; animation-duration: 1s; animation-delay: 0.4s; animation-name: fadeInUp;">
                    <div class="team-image">
                        <img src="{{ asset('images/pedicure.jpg') }}">
                    </div>
                    <div class="team-content">
                        <h4 class="team-name"><a href="{{ route('services') }}">Elite Pedicure  <x-feathericon-star/></a></h4>
                        <span class="sub-title"></span>
                        
                    </div>
                </div> <!-- single team -->
            </div>
            <div class="col-lg-3 col-md-6 col-sm-6">
                <div class="single-team text-center mt-30 wow fadeInUp" data-wow-duration="1s" data-wow-delay="0.2s" style="visibility: visible; animation-duration: 1s; animation-delay: 0.6s; animation-name: fadeInUp;">
                    <div class="team-image">
                        <img src="{{ asset('images/waxing.jpg') }}">
                    </div>
                    <div class="team-content">
                        <h4 class="team-name"><a href="{{ route('services') }}">Waxing <x-feathericon-star/></a></h4>
                        <span class="sub-title"></span>
                        
                    </div>
                </div> <!-- single team -->
            </div>
            <div class="col-lg-3 col-md-6 col-sm-6">
                <div class="single-team text-center mt-30 wow fadeInUp" data-wow-duration="1s" data-wow-delay="0.2s" style="visibility: visible; animation-duration: 1s; animation-delay: 0.8s; animation-name: fadeInUp;">
                    <div class="team-image">
                        <img src="{{ asset('images/nailenhancements.jpg') }}">
                    </div>
                    <div class="team-content">
                        <h4 class="team-name"><a href="{{ route('services') }}" class="text-nowrap">Nail Enhancements <x-feathericon-star/></a></h4>
                        <span class="sub-title"></span>
                        
                    </div>
                </div> <!-- single team -->
            </div>
            <div class="col-lg-3 col-md-6 col-sm-6">
                <div class="single-team text-center mt-30 wow fadeInUp" data-wow-duration="1s" data-wow-delay="0.2s" style="visibility: visible; animation-duration: 1s; animation-delay: 1s; animation-name: fadeInUp;">
                    <div class="team-image">
                        <img src="{{ asset('images/dippingpowder.jpg') }}">
                    </div>
                    <div class="team-content">
                        <h4 class="team-name"><a href="{{ route('services') }}">Dipping Powder <x-feathericon-star/></a></h4>
                        <span class="sub-title"></span>
                        
                    </div>
                </div> <!-- single team -->
            </div>
            <div class="col-lg-3 col-md-6 col-sm-6">
                <div class="single-team text-center mt-30 wow fadeInUp" data-wow-duration="1s" data-wow-delay="0.2s" style="visibility: visible; animation-duration: 1s; animation-delay: 1.2s; animation-name: fadeInUp;">
                    <div class="team-image">
                        <img src="{{ asset('images/eyelashesextensions.jpg') }}">
                    </div>
                    <div class="team-content">
                        <h4 class="team-name"><a href="{{ route('services') }}" class="text-nowrap">Eyelash Extensions <x-feathericon-star/></a></h4>
                        <span class="sub-title"></span>
                        
                    </div>
                </div> <!-- single team -->
            </div>
            <div class="col-lg-3 col-md-6 col-sm-6">
                <div class="single-team text-center mt-30 wow fadeInUp" data-wow-duration="1s" data-wow-delay="0.2s" style="visibility: visible; animation-duration: 1s; animation-delay: 1.4s; animation-name: fadeInUp;">
                    <div class="team-image">
                        <img src="{{ asset('images/kidsmenu.jpg') }}">
                    </div>
                    <div class="team-content">
                        <h4 class="team-name"><a href="{{ route('services') }}">Kids Menu<br>(10 & Under) <x-feathericon-star/></a></h4>
                        <span class="sub-title"></span>
                        
                    </div>
                </div> <!-- single team -->
            </div>
            <div class="col-lg-3 col-md-6 col-sm-6">
                <div class="single-team text-center mt-30 wow fadeInUp" data-wow-duration="1s" data-wow-delay="0.2s" style="visibility: visible; animation-duration: 1s; animation-delay: 1.6s; animation-name: fadeInUp;">
                    <div class="team-image">
                        <img src="{{ asset('images/additional.jpg') }}">
                    </div>
                    <div class="team-content">
                        <h4 class="team-name"><a href="{{ route('services') }}" class="text-nowrap">Additional Services <x-feathericon-star/></a></h4>
                        <span class="sub-title"></span>
                        
                    </div>
                </div> <!-- single team -->
            </div>
        </div> <!-- row -->
    </div> <!-- container -->
</section>

<!--====== TEAM PART ENDS ======-->

<!--====== TESTIMONIAL PART START ======-->

<section id="testimonial" class="testimonial-area pt-130 pb-130">
    <div class="shape shape-one">
        <img src="{{ asset('images/shape.png') }}" alt="testimonial">
    </div>
    <div class="shape shape-tow">
        <img src="{{ asset('images/shape.png') }}" alt="testimonial">
    </div>
    <div class="shape shape-three">
        <img src="{{ asset('images/shape.png') }}" alt="testimonial">
    </div>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-6 aos-init" data-aos="fade-down-right">
                <div class="section-title text-center pb-20">
                    <h5 class="sub-title mb-15">Testimonials</h5>
                    <h2 class="title">Positive Reviews</h2>
                </div> <!-- section title -->
            </div>
        </div>
        <div class="testimonial-bg bg_cover pt-80 pb-80" style="background-image: url('{{ asset('banner/testimonial-bg.png') }}'); background-size: cover; background-position: center;">
            <div class="row">
                <div class="col-xl-7 offset-xl-4 col-lg-5 offset-lg-6 col-md-8 offset-md-2 col-sm-10 offset-sm-1">
                    <div class="testimonial-active" data-aos="fade-up" data-aos-duration="1000">
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
            </div> <!-- row -->

            <div class="row mt-2">
                <div class="col-xl-7 offset-xl-4 col-lg-5 offset-lg-6 col-md-8 offset-md-2 col-sm-10 offset-sm-1">
                    <div class="testimonial-active" data-aos="fade-up" data-aos-duration="1000">
                        
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
            </div>
        </div> <!-- testimonial bg -->
    </div> <!-- container -->
</section>

<!--====== TESTIMONIAL PART ENDS ======-->

<!--====== PROJECT PART START ======-->

<section id="project" class="project-area pt-125 pb-130">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-6">
                <div class="section-title text-center pb-50">
                    <h5 class="sub-title mb-15">Featured Works</h5>
                    <h2 class="title">Our Gallery</h2>
                </div> <!-- section title -->
            </div>
        </div> <!-- row -->
    </div>
    <div class="container-fluid">
        <div class="row project-active">
            <div class="col-lg-4">
                <div class="single-project">
                    <div class="project-image">
                        <img src="{{ asset('gallery-pics/1.jpg') }}" class="gallery-thumbnail">
                    </div>
                    <div class="project-content">
                        <a class="project-title" href="" tabindex="-1">Pedicure</a>
                    </div>
                </div>
            </div>
            <div class="col-lg-4">
                <div class="single-project">
                    <div class="project-image">
                        <img src="{{ asset('gallery-pics/2.jpg') }}" class="gallery-thumbnail">
                    </div>
                    <div class="project-content">
                        <a class="project-title" href="" tabindex="-1">Manicure</a>
                    </div>
                </div>
            </div>
            <div class="col-lg-4">
                <div class="single-project">
                    <div class="project-image">
                        <img src="{{ asset('gallery-pics/3.jpg') }}" class="gallery-thumbnail">
                    </div>
                    <div class="project-content">
                        <a class="project-title" href="" tabindex="-1">Manicure</a>
                    </div>
                </div>
            </div>
            <div class="col-lg-4">
                <div class="single-project">
                    <div class="project-image">
                        <img src="{{ asset('gallery-pics/4.jpg') }}" class="gallery-thumbnail">
                    </div>
                    <div class="project-content">
                        <a class="project-title" href="" tabindex="-1">Manicure</a>
                    </div>
                </div>
            </div>
            <div class="col-lg-4">
                <div class="single-project">
                    <div class="project-image">
                        <img src="{{ asset('gallery-pics/5.jpg') }}" class="gallery-thumbnail">
                    </div>
                    <div class="project-content">
                        <a class="project-title" href="" tabindex="-1">Manicure</a>
                    </div>
                </div>
            </div>
            <div class="col-lg-4">
                <div class="single-project">
                    <div class="project-image">
                        <img src="{{ asset('gallery-pics/6.jpg') }}" class="gallery-thumbnail">
                    </div>
                    <div class="project-content">
                        <a class="project-title" href="" tabindex="-1">Manicure</a>
                    </div>
                </div>
            </div>
            <div class="col-lg-4">
                <div class="single-project">
                    <div class="project-image">
                        <img src="{{ asset('gallery-pics/7.jpg') }}" class="gallery-thumbnail">
                    </div>
                    <div class="project-content">
                        <a class="project-title" href="" tabindex="-1">Manicure</a>
                    </div>
                </div>
            </div>
            <div class="col-lg-4">
                <div class="single-project">
                    <div class="project-image">
                        <img src="{{ asset('gallery-pics/8.jpg') }}" class="gallery-thumbnail">
                    </div>
                    <div class="project-content">
                        <a class="project-title" href="" tabindex="-1">Manicure</a>
                    </div>
                </div>
            </div>
            <div class="col-lg-4">
                <div class="single-project">
                    <div class="project-image">
                        <img src="{{ asset('gallery-pics/9.jpg') }}" class="gallery-thumbnail">
                    </div>
                    <div class="project-content">
                        <a class="project-title" href="" tabindex="-1">Manicure</a>
                    </div>
                </div>
            </div>
            <div class="col-lg-4">
                <div class="single-project">
                    <div class="project-image">
                        <img src="{{ asset('gallery-pics/10.jpg') }}" class="gallery-thumbnail">
                    </div>
                    <div class="project-content">
                        <a class="project-title" href="" tabindex="-1">Manicure</a>
                    </div>
                </div>
            </div>
            <div class="col-lg-4">
                <div class="single-project">
                    <div class="project-image">
                        <img src="{{ asset('gallery-pics/11.jpg') }}" class="gallery-thumbnail">
                    </div>
                    <div class="project-content">
                        <a class="project-title" href="" tabindex="-1">Manicure</a>
                    </div>
                </div>
            </div>
            <div class="col-lg-4">
                <div class="single-project">
                    <div class="project-image">
                        <img src="{{ asset('gallery-pics/12.jpg') }}" class="gallery-thumbnail">
                    </div>
                    <div class="project-content">
                        <a class="project-title" href="" tabindex="-1">Manicure</a>
                    </div>
                </div>
            </div>
            <div class="col-lg-4">
                <div class="single-project">
                    <div class="project-image">
                        <img src="{{ asset('gallery-pics/13.jpg') }}" class="gallery-thumbnail">
                    </div>
                    <div class="project-content">
                        <a class="project-title" href="" tabindex="-1">Manicure</a>
                    </div>
                </div>
            </div>
            <div class="col-lg-4">
                <div class="single-project">
                    <div class="project-image">
                        <img src="{{ asset('gallery-pics/14.jpg') }}" class="gallery-thumbnail">
                    </div>
                    <div class="project-content">
                        <a class="project-title" href="" tabindex="-1">Manicure</a>
                    </div>
                </div>
            </div>
            <div class="col-lg-4">
                <div class="single-project">
                    <div class="project-image">
                        <img src="{{ asset('gallery-pics/15.jpg') }}" class="gallery-thumbnail">
                    </div>
                    <div class="project-content">
                        <a class="project-title" href="" tabindex="-1">Manicure</a>
                    </div>
                </div>
            </div>
            <div class="col-lg-4">
                <div class="single-project">
                    <div class="project-image">
                        <img src="{{ asset('gallery-pics/16.jpg') }}" class="gallery-thumbnail">
                    </div>
                    <div class="project-content">
                        <a class="project-title" href="" tabindex="-1">Manicure</a>
                    </div>
                </div>
            </div>
            <div class="col-lg-4">
                <div class="single-project">
                    <div class="project-image">
                        <img src="{{ asset('gallery-pics/17.jpg') }}" class="gallery-thumbnail">
                    </div>
                    <div class="project-content">
                        <a class="project-title" href="" tabindex="-1">Pedicure</a>
                    </div>
                </div>
            </div>
            <div class="col-lg-4">
                <div class="single-project">
                    <div class="project-image">
                        <img src="{{ asset('gallery-pics/18.jpg') }}" class="gallery-thumbnail">
                    </div>
                    <div class="project-content">
                        <a class="project-title" href="" tabindex="-1">Pedicure</a>
                    </div>
                </div>
            </div>
            <div class="col-lg-4">
                <div class="single-project">
                    <div class="project-image">
                        <img src="{{ asset('gallery-pics/19.jpg') }}" class="gallery-thumbnail">
                    </div>
                    <div class="project-content">
                        <a class="project-title" href="" tabindex="-1">Pedicure</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!--====== PROJECT PART ENDS ======-->


<!--====== CONTACT PART START ======-->

<section id="contact" class="contact-area pt-125 pb-130 gray-bg" style="background-color: #f8b0b0;">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-6">
                <div class="section-title text-center pb-20">
                    <h5 class="sub-title mb-15">Contact us</h5>
                    <h2 class="title">Get In touch</h2>
                </div> <!-- section title -->
            </div>
        </div> <!-- row -->
        <div class="row justify-content-center">
            <div class="col-lg-8">
                <div class="contact-form">
                    <form id="contact-form" action="https://www.westminsterocprinting.com/webtemplates/salon-website-template-060/assets/contact.php" method="post" data-toggle="validator">
                        <div class="row mt-5">
                            <div class="col-md-6 text-center mb-3">
                                <span class="text-dark">Business Email Address: <b>elitenailsantaclara@gmail.com</b></span>
                            </div>
                            <div class="col-md-6 text-center">
                                <a class="main-btn" href="mailto:elitenailsantaclara@gmail.com">
                                    <x-feathericon-mail/> Send us an email 
                                </a>
                            </div>
                        </div>
                        <div class="row mt-5">
                            <div class="col-md-6 text-center mb-3">
                                <span class="text-dark">Book your reservations and appointment with us!</span>
                            </div>
                            <div class="col-md-6 text-center">
                                <a class="main-btn" target="new" href="https://customers.go3reservation.com/elitenails"><x-feathericon-calendar/> BOOK AN APPOINTMENT</a>
                            </div>
                        </div> <!-- row -->
                    </form>
                </div> <!-- row -->
            </div>
        </div> <!-- row -->
    </div> <!-- container -->
</section>

<!--====== CONTACT PART ENDS ======-->

<!--====== MAP PART START ======-->

<div class="d-flex justify-content-center" style="background-color: #f8b0b0;">
    <div class="mapouter"><div class="gmap_canvas"><iframe id="gmap_canvas" src="https://maps.google.com/maps?q=2511%20Scott%20Blvd,%20Santa%20Clara,%20CA%2095050&t=&z=15&ie=UTF8&iwloc=&output=embed" frameborder="0" scrolling="no" marginheight="0" marginwidth="0"></iframe><style>.mapouter{position:relative;text-align:right;height:443px;width:98vw;}</style><a href="https://www.embedgooglemap.net">google map on website</a><style>.gmap_canvas {overflow:hidden;background:none!important;height:443px;width:98vw;}</style></div></div>
</div>

<!--====== MAP PART ENDS ======-->
@endsection