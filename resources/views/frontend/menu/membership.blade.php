@extends('welcome')
@section('frontend')
@section('title')
Membership 
@endsection

<!-- Slider -->
<div class="main_slider" style="background-image:url(assets/images/slider_1.jpg)">
    <div class="container fill_height">
        <div class="row align-items-center fill_height">
            <div class="col">
                <div class="main_slider_abt" id="aboutus">
                    <h1>Membership</h1>
                    <h6>We help you to change your outfit fashion and be more confident with yourself.</h6>
                {{-- <div class="red_button shop_now_button"><a href="#">shop now</a></div> --}}
                </div>
            </div>
        </div>
    </div>
</div>

<div class="benefit">
    <div class="col text-center" id="blog">
        <div class="section_title">
        <h2>Join Now</h2>
        </div>
    </div>
    <br>
    <div class="newsletter">
        <div class="container">
            <div class="col-lg-8">
                <form action="post">
                    <div class="newsletter_form">
                        <input id="newsletter_email" name="name" type="text" placeholder="Your Name" required="required" >
                    </div>
                    <div class="newsletter_form d-flex flex-md-row flex-column flex-xs-column align-items-center justify-content-lg-end justify-content-center">
                        <input id="newsletter_email" name="email" type="email" placeholder="Your Email" required="required" data-error="Valid email is required.">
                    </div>
                    <div class="newsletter_form d-flex flex-md-row flex-column flex-xs-column align-items-center justify-content-lg-end justify-content-center">
                        <input id="newsletter_email" name="phone" type="text" placeholder="Your Phone Number" required="required" >
                    </div>
                    <div class="newsletter_form d-flex flex-md-row flex-column flex-xs-column align-items-center justify-content-lg-end justify-content-center">
                        <input id="newsletter_email" name="address" type="text" placeholder="Your Address" required="required" >
                    </div>
                    <div class="newsletter_form d-flex flex-md-row flex-column flex-xs-column align-items-center justify-content-lg-end justify-content-center">
                        <input id="newsletter_email" name="birthdate" type="date" placeholder="Your Birthdate" required="required">
                    </div>
                    <div class="newsletter_form d-flex flex-md-row flex-column flex-xs-column align-items-center justify-content-lg-end justify-content-center">
                        <button id="newsletter_submit" type="submit" class="newsletter_submit_btn trans_300" value="Submit">Register</button>
                    </div>
                </form>
            </div>
        </div>
    </div>


<!-- Benefit -->
<div class="benefit">
    <div class="col text-center" id="blog">
        <div class="section_title">
        <h2>Benefits</h2>
        </div>
    </div>
    <br>
    <div class="container">
        <div class="row benefit_row">
        <div class="col-lg-3 benefit_col">
            <div class="benefit_item d-flex flex-row align-items-center">
            <div class="benefit_icon"><i class="fa fa-truck" aria-hidden="true"></i></div>
            <div class="benefit_content">
                <h6>Get Latest Promotion</h6>
                <p>Suffered Alteration in Some Form</p>
            </div>
            </div>
        </div>
        <div class="col-lg-3 benefit_col">
            <div class="benefit_item d-flex flex-row align-items-center">
            <div class="benefit_icon"><i class="fa fa-money" aria-hidden="true"></i></div>
            <div class="benefit_content">
                <h6>Get Birthday Promotion</h6>
                <p>The Internet Tend To Repeat</p>
            </div>
            </div>
        </div>
        <div class="col-lg-3 benefit_col">
            <div class="benefit_item d-flex flex-row align-items-center">
            <div class="benefit_icon"><i class="fa fa-undo" aria-hidden="true"></i></div>
            <div class="benefit_content">
                <h6>Join Our Vip Group</h6>
                <p>Making it Look Like Readable</p>
            </div>
            </div>
        </div>
        <div class="col-lg-3 benefit_col">
            <div class="benefit_item d-flex flex-row align-items-center">
            <div class="benefit_icon"><i class="fa fa-clock-o" aria-hidden="true"></i></div>
            <div class="benefit_content">
                <h6>Many More ...</h6>
                <p>8AM - 09PM</p>
            </div>
            </div>
        </div>
        </div>
    </div>
</div>

@endsection