@extends('welcome')
@section('frontend')
@section('title')
Contact Us 
@endsection

<!-- Slider -->
<div class="main_slider" style="background-image:url(assets/images/slider_1.jpg)">
    <div class="container fill_height">
        <div class="row align-items-center fill_height">
            <div class="col">
                <div class="main_slider_abt" id="aboutus">
                    <h1>Contact Us</h1>
                    <h6>
                        We help you to change your outfit fashion and be more confident with yourself. We help you to change your outfit fashion and be more confident with yourself. We help you to change your outfit fashion and be more confident with yourself. We help you to change your outfit fashion and be more confident with yourself. 
                        We help you to change your outfit fashion and be more confident with yourself. We help you to change your outfit fashion and be more confident with yourself. We help you to change your outfit fashion and be more confident with yourself. 
                        We help you to change your outfit fashion and be more confident with yourself. 
                    </h6>
                {{-- <div class="red_button shop_now_button"><a href="#">shop now</a></div> --}}
                </div>
            </div>
        </div>
    </div>
</div>


<!-- Benefit -->
<div class="benefit">
    <div class="container">
        <div class="row benefit_row">
        <div class="col-lg-3 benefit_col">
            <div class="benefit_item d-flex flex-row align-items-center">
            <div class="benefit_icon"><i class="fa fa-map" aria-hidden="true"></i></div>
            <div class="benefit_content">
                <a href="https://www.google.com/maps/dir//sahira+shop/@1.4980537,103.4888011,13z/data=!4m8!4m7!1m0!1m5!1m1!1s0x31d09fc8e0d0e38d:0x52316d4c74ab9868!2m2!1d103.5238168!2d1.4979112">
                    <h6>Find Us at</h6>
                    <p>Our Location</p>
                </a>
            </div>
            </div>
        </div>
        <div class="col-lg-3 benefit_col">
            <div class="benefit_item d-flex flex-row align-items-center">
            <div class="benefit_icon"><i class="fa fa-envelope-open" aria-hidden="true"></i></div>
            <div class="benefit_content">
                <h6>For Any Enquiries</h6>
                <p>Email or Contact Us at</p>
            </div>
            </div>
        </div>
        <div class="col-lg-3 benefit_col">
            <div class="benefit_item d-flex flex-row align-items-center">
            <div class="benefit_icon"><i class="fa fa-users" aria-hidden="true"></i></div>
            <div class="benefit_content">
                <h6>Follow Us at</h6>
                <p>Our Social Media</p>
            </div>
            </div>
        </div>
        <div class="col-lg-3 benefit_col">
            <div class="benefit_item d-flex flex-row align-items-center">
            <div class="benefit_icon"><i class="fa fa-clock-o" aria-hidden="true"></i></div>
            <div class="benefit_content">
                <h6>opening all week</h6>
                <p>10AM - 0530PM</p>
            </div>
            </div>
        </div>
        </div>
    </div>
</div>

@endsection