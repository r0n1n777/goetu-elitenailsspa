@extends('layout/app')

@section('title', 'Services - Elite Nails & Spa')

@section('content')
<!--====== HEADER PART ENDS ======-->
    <!--====== TEAM PART START ======-->

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
                  <div class="single-team text-center mt-30 wow fadeInUp" data-wow-duration="1.5s" data-wow-delay="0.4s" style="visibility: visible; animation-duration: 1.5s; animation-delay: 0.4s; animation-name: fadeInUp;">
                      <div class="team-image">
                          <img src="{{ asset('images/manicure.jpg') }}">
                      </div>
                      <div class="team-content">
                          <h4 class="team-name"><a href="#">Elite Manicure <x-feathericon-star/></a></h4>
                          <span class="sub-title"></span>
                          
                      </div>
                  </div> <!-- single team -->
              </div>
              <div class="col-lg-3 col-md-6 col-sm-6">
                  <div class="single-team text-center mt-30 wow fadeInUp" data-wow-duration="1.5s" data-wow-delay="0.8s" style="visibility: visible; animation-duration: 1.5s; animation-delay: 0.8s; animation-name: fadeInUp;">
                      <div class="team-image">
                          <img src="{{ asset('images/pedicure.jpg') }}">
                      </div>
                      <div class="team-content">
                          <h4 class="team-name"><a href="#!">Elite Pedicure  <x-feathericon-star/></a></h4>
                          <span class="sub-title"></span>
                          
                      </div>
                  </div> <!-- single team -->
              </div>
              <div class="col-lg-3 col-md-6 col-sm-6">
                  <div class="single-team text-center mt-30 wow fadeInUp" data-wow-duration="1.5s" data-wow-delay="1.2s" style="visibility: visible; animation-duration: 1.5s; animation-delay: 1.2s; animation-name: fadeInUp;">
                      <div class="team-image">
                          <img src="{{ asset('images/waxing.jpg') }}">
                      </div>
                      <div class="team-content">
                          <h4 class="team-name"><a href="#!">Waxing <x-feathericon-star/></a></h4>
                          <span class="sub-title"></span>
                          
                      </div>
                  </div> <!-- single team -->
              </div>
              <div class="col-lg-3 col-md-6 col-sm-6">
                  <div class="single-team text-center mt-30 wow fadeInUp" data-wow-duration="1.5s" data-wow-delay="1.6s" style="visibility: visible; animation-duration: 1.5s; animation-delay: 1.6s; animation-name: fadeInUp;">
                      <div class="team-image">
                          <img src="{{ asset('images/nailenhancements.jpg') }}">
                      </div>
                      <div class="team-content">
                          <h4 class="team-name"><a href="#!" class="text-nowrap">Nail Enhancements <x-feathericon-star/></a></h4>
                          <span class="sub-title"></span>
                          
                      </div>
                  </div> <!-- single team -->
              </div>
              <div class="col-lg-3 col-md-6 col-sm-6">
                  <div class="single-team text-center mt-30 wow fadeInUp" data-wow-duration="1.5s" data-wow-delay="1.6s" style="visibility: visible; animation-duration: 1.5s; animation-delay: 1.6s; animation-name: fadeInUp;">
                      <div class="team-image">
                          <img src="{{ asset('images/dippingpowder.jpg') }}">
                      </div>
                      <div class="team-content">
                          <h4 class="team-name"><a href="#!">Dipping Powder <x-feathericon-star/></a></h4>
                          <span class="sub-title"></span>
                          
                      </div>
                  </div> <!-- single team -->
              </div>
              <div class="col-lg-3 col-md-6 col-sm-6">
                  <div class="single-team text-center mt-30 wow fadeInUp" data-wow-duration="1.5s" data-wow-delay="1.6s" style="visibility: visible; animation-duration: 1.5s; animation-delay: 1.6s; animation-name: fadeInUp;">
                      <div class="team-image">
                          <img src="{{ asset('images/eyelashesextensions.jpg') }}">
                      </div>
                      <div class="team-content">
                          <h4 class="team-name"><a href="#!" class="text-nowrap">Eyelash Extensions <x-feathericon-star/></a></h4>
                          <span class="sub-title"></span>
                          
                      </div>
                  </div> <!-- single team -->
              </div>
              <div class="col-lg-3 col-md-6 col-sm-6">
                  <div class="single-team text-center mt-30 wow fadeInUp" data-wow-duration="1.5s" data-wow-delay="1.6s" style="visibility: visible; animation-duration: 1.5s; animation-delay: 1.6s; animation-name: fadeInUp;">
                      <div class="team-image">
                          <img src="{{ asset('images/kidsmenu.jpg') }}">
                      </div>
                      <div class="team-content">
                          <h4 class="team-name"><a href="#!">Kids Menu<br>(10 & Under) <x-feathericon-star/></a></h4>
                          <span class="sub-title"></span>
                          
                      </div>
                  </div> <!-- single team -->
              </div>
              <div class="col-lg-3 col-md-6 col-sm-6">
                  <div class="single-team text-center mt-30 wow fadeInUp" data-wow-duration="1.5s" data-wow-delay="1.6s" style="visibility: visible; animation-duration: 1.5s; animation-delay: 1.6s; animation-name: fadeInUp;">
                      <div class="team-image">
                          <img src="{{ asset('images/additional.jpg') }}">
                      </div>
                      <div class="team-content">
                          <h4 class="team-name"><a href="#!" class="text-nowrap">Additional Services <x-feathericon-star/></a></h4>
                          <span class="sub-title"></span>
                          
                      </div>
                  </div> <!-- single team -->
              </div>
          </div> <!-- row -->
      </div> <!-- container -->
  </section>

    <!--====== TEAM PART ENDS ======-->
    <!--====== ABOUT PART START ======-->

    <section id="about" class="about-area pt-80 pb-130" id="about-margin">
        <div class="container">
            <div class="col-lg-12" data-aos="fade-down-right">
                    <div class="section-title text-center pb-20">
                        <h5 class="sub-title mb-15">OUR SERVICES</h5>
                        <h2 class="title">SERVICES MENU</h2>
                    </div> <!-- section title -->
                </div>
            <div class="row">
                <div class="col-lg-6">
                    <div class="about-image mt-50 clearfix">
                        <div class="single-image float-left">
                            <img src="{{ asset('images/pedicure.jpg') }}" alt="About" data-aos="fade-up"
                            data-aos-duration="3000">
                        </div> <!-- single image -->
                        
                        <div class="single-image image-tow float-right">
                            <img src="{{ asset('images/manicure.jpg') }}" alt="About" data-aos="fade-up"
                        data-aos-duration="3000">
                        </div> <!-- single image -->
                        
                    </div> <!-- about image -->
                </div>
                <div class="col-lg-6" data-aos="fade-down-right">
                    <div class="about-content mt-45">
                        <h4 class="about-welcome" style="font-size:40px;">ELITE MANICURE</h4>
                        
                        <p class="mt-25">
                            <table class="w-100">
                              <tr class="border-bottom">
                                <td>Classic Manicure</td>
                                <td>$18</td>
                              </tr>
                              <tr class="border-bottom">
                                <td>Deluxe Manicure</td>
                                <td>$30</td>
                              </tr>
                              <tr class="border-bottom">
                                <td>Gel (Shellac) Manicure</td>
                                <td>$35</td>
                              </tr>
                              <tr class="border-bottom">
                                <td>Gel (Shellac) Deluxe Manicure</td>
                                <td>$45</td>
                              </tr>
                            </table>
                        </p>
                    </div> <!-- about content -->
                    <div class="about-content mt-45">
                        <h4 class="about-welcome" style="font-size:40px;">ELITE PEDICURE</h4>
                        
                        <p class="mt-25">
                            <table class="w-100">
                              <tr class="border-bottom">
                                <td>Classic Pedicure</td>
                                <td>$30</td>
                              </tr>
                              <tr class="border-bottom">
                                <td>Deluxe Pedicure</td>
                                <td>$45</td>
                              </tr>
                              <tr class="border-bottom">
                                <td>Ultimate Signature Pedicure</td>
                                <td>$55</td>
                              </tr>
                              <tr class="border-bottom">
                                <td>*Add-on Gel Color</td>
                                <td>$15</td>
                              </tr>
                            </table>
                        </p>
                    </div> <!-- about content -->
                </div>
            </div> <!-- row -->
        </div> <!-- container -->
    </section>

    <!--====== mani & Pedi PART ENDS ======-->

    
    <!--====== Facial PART START ======-->

    <section id="about" class="about-area pt-80 pb-130" style="background-color: #f8b0b0;">
        <div class="container">
            <div class="row">
                
                <div class="col-lg-6" data-aos="fade-down-left">
                    <div class="about-content mt-45">
                        <h4 class="about-welcome" style="font-size:40px;">NAIL ENHANCEMENTS</h4>
                       
                        <p class="mt-25">
                          <table class="w-100">
                              <tr class="border-bottom border-secondary">
                                <td>Full Set Acrylic</td>
                                <td>$35+/$25+</td>
                              </tr>
                              <tr class="border-bottom border-secondary">
                                <td>Full Set with Gel Polish</td>
                                <td>$45+/$35+</td>
                              </tr>
                              <tr class="border-bottom border-secondary">
                                <td>Full Set Pink & White</td>
                                <td>$55+/$45+</td>
                              </tr>
                              <tr class="border-bottom border-secondary">
                                <td>Full Set Forever White Tips</td>
                                <td>$45+/$35+</td>
                              </tr>
                              <tr class="border-bottom border-secondary">
                                <td>Full Set Ombre</td>
                                <td>$55+/$40+</td>
                              </tr>
                              <tr class="border-bottom border-secondary">
                                <td>Gel Extension (Gel X)</td>
                                <td>$60/$50</td>
                              </tr>
                            </table>
                        </p>
                        
                    </div> <!-- about content -->
                    <div class="about-content mt-45">
                        <h4 class="about-welcome" style="font-size:40px;">DIPPING POWDER</h4>
                        <p class="mt-25">
                          <table class="w-100">
                              <tr class="border-bottom border-secondary">
                                <td>Dip Powder Overlay</td>
                                <td>$45</td>
                              </tr>
                              <tr class="border-bottom border-secondary">
                                <td>Dip Powder Ombre</td>
                                <td>$55</td>
                              </tr>
                              <tr class="border-bottom border-secondary">
                                <td>Take off Dipping</td>
                                <td>$7</td>
                              </tr>
                              <tr class="border-bottom border-secondary">
                                <td>Add Tips on Nails</td>
                                <td>$5</td>
                              </tr>
                            </table>
                        </p>
                        
                    </div> <!-- about content -->
                </div>
                <div class="col-lg-6">
                    <div class="about-image mt-50 clearfix">
                        <div class="single-image float-left">
                            <img src="{{ asset('images/nailenhancements.jpg') }}" alt="About" data-aos="fade-up"
                            data-aos-duration="3000">
                        </div> <!-- single image -->
                        
                        <div class="single-image image-tow float-right">
                            <img src="{{ asset('images/dippingpowder.jpg') }}" alt="About" data-aos="fade-up"
                         data-aos-duration="3000">
                        </div> <!-- single image -->
                    </div> <!-- about image -->
                </div>

            </div> <!-- row -->
        </div> <!-- container -->
    </section>

    <!--====== Facial PART ENDS ======-->
    <!--====== WAXING PART START ======-->

    <section id="about" class="about-area pt-80 pb-130">
        <div class="container">
            <div class="row">
                <div class="col-lg-6">
                    <div class="about-image mt-50 clearfix">
                        <div class="single-image float-left">
                            <img src="{{ asset('images/waxing.jpg') }}" alt="About" data-aos="fade-up"
                            data-aos-duration="3000">
                        </div> <!-- single image -->
                        <div data-aos="fade-right" class="about-btn">
                            
                        </div>
                        <div class="single-image image-tow float-right">
                            <img src="{{ asset('images/eyelashesextensions.jpg')}}" alt="About" data-aos="fade-up"
                            data-aos-duration="3000">
                        </div> <!-- single image -->
                        
                    </div> <!-- about image -->
                </div>
                <div class="col-lg-6" data-aos="fade-down-right">
                    <div class="about-content mt-45">
                        <h4 class="about-welcome" style="font-size:40px;">WAXING</h4>
                        <p class="mt-25">
                            <table class="w-100">
                              <tr class="border-bottom">
                                <td>Eyebrow</td>
                                <td>$12</td>
                              </tr>
                              <tr class="border-bottom">
                                <td>Lips</td>
                                <td>$6</td>
                              </tr>
                              <tr class="border-bottom">
                                <td>Chin</td>
                                <td>$8</td>
                              </tr>
                              <tr class="border-bottom">
                                <td>Side Burn</td>
                                <td>$10</td>
                              </tr>
                              <tr class="border-bottom">
                                <td>Full Face</td>
                                <td>$35</td>
                              </tr>
                              <tr class="border-bottom">
                                <td>Under Arms</td>
                                <td>$15</td>
                              </tr>
                              <tr class="border-bottom">
                                <td>Half Arms</td>
                                <td>$25</td>
                              </tr>
                              <tr class="border-bottom">
                                <td>Full Arms</td>
                                <td>$35</td>
                              </tr>
                              <tr class="border-bottom">
                                <td>Half Legs</td>
                                <td>$30</td>
                              </tr>
                              <tr class="border-bottom">
                                <td>Full Legs</td>
                                <td>$50</td>
                              </tr>
                              <tr class="border-bottom">
                                <td>Bikini</td>
                                <td>$30+</td>
                              </tr>
                              <tr class="border-bottom">
                                <td>Back</td>
                                <td>$35+</td>
                              </tr>
                              <tr class="border-bottom">
                                <td>Brazillian Wax</td>
                                <td>$40+</td>
                              </tr>
                            </table>
                        </p>
                    </div> <!-- about content -->
                    <div class="about-content mt-45">
                        <h4 class="about-welcome" style="font-size:40px;">EYELASH EXTENSIONS </h4>
                        <p class="mt-25">
                            <table class="w-100">
                              <tr class="border-bottom">
                                <td>Group lash (Cluster)</td>
                                <td>$40</td>
                              </tr>
                              <tr class="border-bottom">
                                <td>Individual (Single)</td>
                                <td>$90+</td>
                              </tr>
                              <tr class="border-bottom">
                                <td>Volume Set</td>
                                <td>$100+</td>
                              </tr>
                              <tr class="border-bottom">
                                <td>Fill (Single)</td>
                                <td>$70+</td>
                              </tr>
                              <tr class="border-bottom">
                                <td>Fill (Volume)</td>
                                <td>$80+</td>
                              </tr>
                              <tr class="border-bottom">
                                <td>Lash Removal</td>
                                <td>$20</td>
                              </tr>
                            </table>
                        </p>
                    </div> <!-- about content -->
                </div>
            </div> <!-- row -->
        </div> <!-- container -->
    </section>

    <!--====== Waxing PART ENDS ======-->
    
    
    <!--====== Facial PART START ======-->

    <section id="about" class="about-area pt-80 pb-130" style="background-color: #f8b0b0;">
      <div class="container">
          <div class="row">
              
              <div class="col-lg-6" data-aos="fade-down-left">
                  <div class="about-content mt-45">
                      <h4 class="about-welcome" style="font-size:40px;">KIDS MENU (10 & Under)</h4>
                     
                      <p class="mt-25">
                        <table class="w-100">
                            <tr class="border-bottom border-secondary">
                              <td>Pedicure</td>
                              <td>$24</td>
                            </tr>
                            <tr class="border-bottom border-secondary">
                              <td>Manicure</td>
                              <td>$12</td>
                            </tr>
                            <tr class="border-bottom border-secondary">
                              <td>Polish Change Nails</td>
                              <td>$6</td>
                            </tr>
                            <tr class="border-bottom border-secondary">
                              <td>Polish Change Toes</td>
                              <td>$8</td>
                            </tr>
                        </table>
                      </p>
                      
                  </div> <!-- about content -->
                  <div class="about-content mt-45">
                      <h4 class="about-welcome" style="font-size:40px;">ADDITIONAL SERVICES</h4>
                      <p class="mt-25">
                        <table class="w-100">
                            <tr class="border-bottom border-secondary">
                              <td>Coffin, Stiletto or Almond Shape</td>
                              <td>$5</td>
                            </tr>
                            <tr class="border-bottom border-secondary">
                              <td>Add French Tips</td>
                              <td>$5+</td>
                            </tr>
                            <tr class="border-bottom border-secondary">
                              <td>Callus Removal</td>
                              <td>$8</td>
                            </tr>
                            <tr class="border-bottom border-secondary">
                              <td>Paraffin Hot Wax Hands</td>
                              <td>$8</td>
                            </tr>
                            <tr class="border-bottom border-secondary">
                              <td>Paraffin Hot Wax Feet</td>
                              <td>$10</td>
                            </tr>
                            <tr class="border-bottom border-secondary">
                              <td>Collagen Sock/Glove</td>
                              <td>$10</td>
                            </tr>
                            <tr class="border-bottom border-secondary">
                              <td>Massage</td>
                              <td>$1 / min</td>
                            </tr>
                            <tr class="border-bottom border-secondary">
                              <td>Take Off Gel</td>
                              <td>$5</td>
                            </tr>
                            <tr class="border-bottom border-secondary">
                              <td>Soak Off Acrylic with Services</td>
                              <td>$10</td>
                            </tr>
                            <tr class="border-bottom border-secondary">
                              <td>Soak Off Acrylic w/o Services</td>
                              <td>$12</td>
                            </tr>
                            <tr class="border-bottom border-secondary">
                              <td>Nail Art Designs</td>
                              <td>$5+</td>
                            </tr>
                            <tr class="border-bottom border-secondary">
                              <td>Nails Repair</td>
                              <td>$3+</td>
                            </tr>
                            <tr class="border-bottom border-secondary">
                              <td>Cut Down</td>
                              <td>$5</td>
                            </tr>
                            <tr class="border-bottom border-secondary">
                              <td>Cuticle Trim</td>
                              <td>$5</td>
                            </tr>
                            <tr class="border-bottom border-secondary">
                              <td>Gel Color Change Nails/Toes</td>
                              <td>$15/$20</td>
                            </tr>
                            <tr class="border-bottom border-secondary">
                              <td>Color Change Nails/Toes</td>
                              <td>$8/$12</td>
                            </tr>
                          </table>
                      </p>
                      
                  </div> <!-- about content -->
              </div>
              <div class="col-lg-6">
                  <div class="about-image mt-50 clearfix">
                      <div class="single-image float-left">
                          <img src="{{ asset('images/additional.jpg') }}" alt="About" data-aos="fade-up"
                          data-aos-duration="3000">
                      </div> <!-- single image -->
                      
                      <div class="single-image image-tow float-right">
                          <img src="{{ asset('images/kidsmenu.jpg') }}" alt="About" data-aos="fade-up"
                       data-aos-duration="3000">
                      </div> <!-- single image -->
                  </div> <!-- about image -->
              </div>

          </div> <!-- row -->
      </div> <!-- container -->
  </section>

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
          <div class="testimonial-bg bg_cover pt-80 pb-80" style="background-image: url('{{ asset('banner/testimonial-bg.png') }}'); background-size: cover; background-position: center;">
                <div class="row">
                    <div class="col-xl-7 offset-xl-4 col-lg-5 offset-lg-6 col-md-8 offset-md-2 col-sm-10 offset-sm-1">
                        <div class="testimonial-active" data-aos="fade-down-right">
                            <div class="single-testimonial text-center">
                                <img src="{{ asset('logo-white.png') }}">
                                <div class="testimonial-content mt-20">
                                    <p>is the ideal settings for any group parties such as birthdays, Baby/Bridal shower, weddings or more it may be for that special event.
                                    Our Staff is available to assist with any details and arrangements to make your party memorable.
                                    </p>
                                    <a class="main-btn mt-25 border-white" href="#">Book Now</a>
                                </div>
                            </div> <!-- single-testimonial -->
                        </div> <!--  testimonial active -->
                    </div>
                </div> <!-- row -->
            </div> <!-- testimonial bg -->
        </div> <!-- container -->
    </section>

    <!--====== TESTIMONIAL PART ENDS ======-->
@endsection