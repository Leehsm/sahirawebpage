@extends('welcome')
@section('frontend')
@section('title')
FAQs 
@endsection

<!-- Slider -->
<div class="main_slider" style="background-image:url(assets/images/slider_1.jpg)">
    <div class="container fill_height">
        <div class="row align-items-center fill_height">
            <div class="col">
                <div class="main_slider_abt" id="aboutus">
                    <h1>Frequently Asked Question</h1>
                    <h6>We help you to change your outfit fashion and be more confident with yourself.</h6>
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
            <div class="benefit_icon"><i class="fa fa-truck" aria-hidden="true"></i></div>
            <div class="benefit_content">
                <h6>free shipping</h6>
                <p>Suffered Alteration in Some Form</p>
            </div>
            </div>
        </div>
        <div class="col-lg-3 benefit_col">
            <div class="benefit_item d-flex flex-row align-items-center">
            <div class="benefit_icon"><i class="fa fa-money" aria-hidden="true"></i></div>
            <div class="benefit_content">
                <h6>cach on delivery</h6>
                <p>The Internet Tend To Repeat</p>
            </div>
            </div>
        </div>
        <div class="col-lg-3 benefit_col">
            <div class="benefit_item d-flex flex-row align-items-center">
            <div class="benefit_icon"><i class="fa fa-undo" aria-hidden="true"></i></div>
            <div class="benefit_content">
                <h6>45 days return</h6>
                <p>Making it Look Like Readable</p>
            </div>
            </div>
        </div>
        <div class="col-lg-3 benefit_col">
            <div class="benefit_item d-flex flex-row align-items-center">
            <div class="benefit_icon"><i class="fa fa-clock-o" aria-hidden="true"></i></div>
            <div class="benefit_content">
                <h6>opening all week</h6>
                <p>8AM - 09PM</p>
            </div>
            </div>
        </div>
        </div>
    </div>
</div>

@endsection