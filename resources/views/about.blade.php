@extends('layout/app')

@section('title', 'About Us - Elite Nails & Spa')

@section('content')
<!--====== ABOUT PART START ======-->

<section id="about" class="about-area pt-80 pb-130">
    <div class="container">
        <div class="row">
            <div class="col-lg-6">
                <div class="about-image mt-50 clearfix">
                    <div class="single-image float-left">
                        <img src="{{ asset('images/about2.jpg') }}" alt="About" data-aos="fade-up"
                        data-aos-duration="3000">
                    </div> <!-- single image -->
                    <div data-aos="fade-right" class="about-btn">
                        <a class="main-btn" href="#"><span>5</span> Years Experience</a>
                    </div>
                    <div class="single-image image-tow float-right">
                        <img src="{{ asset('images/about1.1.jpg') }}" alt="About" data-aos="fade-up"
                     data-aos-duration="3000">
                    </div> <!-- single image -->
                    <div class="single-image float-left">
                        <img src="{{ asset('images/about3.jpg') }}" alt="About" data-aos="fade-up"
                        data-aos-duration="3000">
                    </div> <!-- single image -->
                </div> <!-- about image -->
            </div>
            <div class="col-lg-6" data-aos="fade-down-right">
                <div class="about-content mt-45">
                    <h4 class="about-welcome">About Us </h4>
                    <h3 class="about-title mt-10">Reasons to choose</h3>
                    <p class="mt-25">Elite Nails & Spa is offering a tranquil refuge from the hustle and bustle of the city, featuring experienced staffs and upscale amenities that will make you feel relaxed and well pampered. We offer precision manicure and soothing pedicures in massage chairs that are fit for royalty. Our practitioners can provide simple or highly creative nails designs, along with the most advanced nails treatment on the market today. A wide variety of other quality beauty enhancement service in a very clean, hygienic environment are also proudly offer, ranging from eyelash extension to body hair removal.
                        At Elite Nails & Spa, we want you to leave our salon feeling refreshed. rejuvenated and always look you best.
                    </p><br>
                    <p>It is our goal to ensure your utmost satisfaction through an attentive staff, professional environment, and outstanding sanitation. We believe in only providing you the best quality of nail care by staying up-to-date with the hightest standards of Nail Care and provide you with excellent services while maintaining a clean, friendly, and relaxing atmosphere. For your health and safety, pedicure liners are changed out, disposed off and the tub will be thoroughly cleaned after each use. All tools used for pedicure and manicure services will be disposed of once finished. Other tools will be properly cleaned with barbicide and placed in sterilizer.
                    </p><br>
                    <p>We understand that safety and sanitation are keys to your peace of mind. Our implements are medically sterilized and disinfected after each use. By implying only the top rated sanitary spa equipment along with vigorous staff. Straining and services procedures you can rest assured that you are in good hands.<br><br>
                    We truly value all of our customers feedback and want to listen to you inout. If you are unsatisfied with your service at our salon for any reason, please speak to a team member at the front desk and we will help accommodate you to the best of our ability.
                    </p>
                    
                </div> <!-- about content -->
            </div>
        </div> <!-- row -->
    </div> <!-- container -->
</section>

<!--====== ABOUT PART ENDS ======-->

<!--====== TESTIMONIAL PART START ======-->

<section id="testimonial" class="testimonial-area">
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
                    <div class="testimonial-active" data-aos="fade-up" data-aos-duration="3000">
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
                    <div class="testimonial-active" data-aos="fade-up" data-aos-duration="3000">
                        
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

<!--====== ABOUT PART START ======-->

<section id="about" class="about-area pb-130 pt-80">
    <div class="container">
        <div class="row">
            <div class="col-lg-6">
                <div class="about-content mt-45">
                    <h4 class="about-welcome">Host a Party!</h4>
                    <h3 class="about-title mt-10">Group Reservation</h3>
                    <p class="mt-25">At the Elite Nails & Spa, we love to help you co-ordinate nail treatments for your wedding, girls day out, conference, corporate event or tour group. Whether it be a conference, seminar activity, hens day, a special occasion or purely just to be pampered, the nail salon can cater for groups big and small.
                       <br> We give huge discounts for group reservation.
                    </p>
                    <a class="main-btn mt-25" href="https://customers.go3reservation.com/elitenails" target="new">
                        <x-feathericon-calendar/> Book Now
                    </a>
                </div> <!-- about content -->
            </div>
            <div class="col-lg-6">
                <div class="about-image mt-50 clearfix">
                    <div class="single-image float-left">
                        <img src="{{ asset('images/party1.jpg') }}">
                    </div> <!-- single image -->
                    
                    <div class="single-image image-tow float-right">
                        <img src="{{ asset('images/party2.jpg') }}">
                    </div> <!-- single image -->
                </div> <!-- about image -->
            </div>
        </div> <!-- row -->
    </div> <!-- container -->
</section>

<!--====== ABOUT PART ENDS ======-->

<!--====== SERVICES PART START ======-->

<section id="service" class="services-area pt-125 pb-130 gray-bg">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-6">
                <div class="section-title text-center pb-20">
                    <h5 class="sub-title mb-15">Our Services</h5>
                    <h2 class="title">What We Do?</h2>
                </div> <!-- section title -->
            </div>
        </div>  <!--row -->
        <div class="row justify-content-center">
            <div class="col-lg-4 col-md-6 col-sm-8">
                <div class="single-services text-center mt-30 wow fadeInUp" data-wow-duration="1.5s" data-wow-delay="0.4s">
                    <div class="services-icon">
                        
                        <img src="{{ asset('images/icons/cleaning-service2.png') }}" style="height: 50px; weight:40px;">
                    </div>
                    <div class="services-content mt-15">
                        <h4 class="services-title">Perfect Cleanliness</h4>
                        <p class="mt-20">We make sure all the equipment use are clean and sterelized.Our Store is desinfect everyday.</p>
                    </div>
                </div> <!-- single services -->
            </div>
            <div class="col-lg-4 col-md-6 col-sm-8">
                <div class="single-services text-center mt-30 wow fadeInUp" data-wow-duration="1.5s" data-wow-delay="0.8s">
                    <div class="services-icon">
                        <img src="{{ asset('images/icons/spray1.png') }}" style="height: 50px; weight:40px;">
                    </div>
                    <div class="services-content mt-15">
                        <h4 class="services-title">Safety</h4>
                        <p class="mt-20">On the Elite Nails & Spa, we require all our staff and clients to wear mask at all times.</p>
                    </div>
                </div> <!-- single services -->
            </div>
            <div class="col-lg-4 col-md-6 col-sm-8">
                <div class="single-services text-center mt-30 wow fadeInUp" data-wow-duration="1.5s" data-wow-delay="1.2s">
                    <div class="services-icon">
                        <img src="{{ asset('images/icons/nail-art1.png') }}" style="height: 50px; weight:40px;">
                    </div>
                    <div class="services-content mt-15">
                        <h4 class="services-title">Modern Nail Designs</h4>
                        <p class="mt-20">We offer modern and customized nail art/ design according to your wants/needs.</p>
                    </div>
                </div> <!-- single services -->
            </div>
            <div class="col-lg-4 col-md-6 col-sm-8">
                <div class="single-services text-center mt-30 wow fadeInUp" data-wow-duration="1.5s" data-wow-delay="0.4s">
                    <div class="services-icon">
                        <img src="{{ asset('images/icons/service1.png') }}" style="height: 50px; weight:40px;">
                    </div>
                    <div class="services-content mt-15">
                        <h4 class="services-title">Professional Staff</h4>
                        <p class="mt-20">We make sure that all our staff are professionaly trained.</p>
                    </div>
                </div><!-- single services -->
            </div>
            <div class="col-lg-4 col-md-6 col-sm-8">
                <div class="single-services text-center mt-30 wow fadeInUp" data-wow-duration="1.5s" data-wow-delay="0.8s">
                    <div class="services-icon">
                        <img src="{{ asset('images/icons/customer-service.png') }}" style="height: 50px; weight:40px;">
                    </div>
                    <div class="services-content mt-15">
                        <h4 class="services-title">Great Customer Service</h4>
                        <p class="mt-20">All our staff are friendly and approachable so we assure good customer service.</p>
                    </div>
                </div> <!-- single services -->
            </div>
            <div class="col-lg-4 col-md-6 col-sm-8">
                <div class="single-services text-center mt-30 wow fadeInUp" data-wow-duration="1.5s" data-wow-delay="1.2s">
                    <div class="services-icon">
                        <img src="{{ asset('images/icons/review1.png') }}" style="height: 50px; weight:40px;">
                    </div>
                    <div class="services-content mt-15">
                        <h4 class="services-title">High Reviews</h4>
                        <p class="mt-20">We have 95% high review from our customer. Check it out on our yelp and google review.</p>
                    </div>
                </div> <!-- single services -->
            </div>
        </div> <!-- row -->
    </div><!-- container -->
</section>

<!--====== SERVICES PART ENDS ======-->
@endsection