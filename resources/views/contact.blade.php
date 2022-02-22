@extends('layout/app')

@section('title', 'Contact Us - Elite Nails & Spa')

@section('content')
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