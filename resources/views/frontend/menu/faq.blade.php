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
                    <h6>Find the answers for the most frequently asked questions below</h6>
                </div>
            </div>
        </div>
    </div>
</div>


<!-- Benefit -->
{{-- <div class="benefit">
    <div class="container">
        <div class="row benefit_row">
        <div class="col-lg-3 benefit_col">
            <div class="benefit_item d-flex flex-row align-items-center">
            <div class="benefit_icon"><i class="fa fa-truck" aria-hidden="true"></i></div>
            <div class="benefit_content">
                <h6>Shipping</h6>
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
</div> --}}


<div class="benefit">
    <div class="container">
        <div class="row benefit_row">
            <div class="row">
                <div class="col-md-6 col-lg-4 mb-4">
                  <h6 class="mb-3 text-primary"><i class="fa fa-truck text-primary pe-2"></i> A simple
                    question?</h6>
                  <p>
                    <strong><u>Absolutely!</u></strong> We work with top payment companies which guarantees
                    your
                    safety and
                    security. All billing information is stored on our payment processing partner.
                  </p>
                </div>
            
                <div class="col-md-6 col-lg-4 mb-4">
                  <h6 class="mb-3 text-primary"><i class="fa fa-money text-primary pe-2"></i> A question
                    that
                    is longer then the previous one?</h6>
                  <p>
                    <strong><u>Yes, it is possible!</u></strong> You can cancel your subscription anytime in
                    your
                    account. Once the subscription is
                    cancelled, you will not be charged next month.
                  </p>
                </div>
            
                <div class="col-md-6 col-lg-4 mb-4">
                  <h6 class="mb-3 text-primary"><i class="fa fa-building text-primary pe-2"></i> Where i can find you?
                  </h6>
                  <p>
                    Currently, we only offer monthly subscription. You can upgrade or cancel your monthly
                    account at any time with no further obligation.
                  </p>
                </div>
            
                <div class="col-md-6 col-lg-4 mb-4">
                  <h6 class="mb-3 text-primary"><i class="fa fa-rocket text-primary pe-2"></i> A simple
                    question?
                  </h6>
                  <p>
                    Yes. Go to the billing section of your dashboard and update your payment information.
                  </p>
                </div>
            
                <div class="col-md-6 col-lg-4 mb-4">
                  <h6 class="mb-3 text-primary"><i class="fa fa-home text-primary pe-2"></i> A simple
                    question?
                  </h6>
                  <p><strong><u>Unfortunately no</u>.</strong> We do not issue full or partial refunds for any
                    reason.</p>
                </div>
            
                <div class="col-md-6 col-lg-4 mb-4">
                  <h6 class="mb-3 text-primary"><i class="fa fa-book-open text-primary pe-2"></i> Another
                    question that is longer than usual</h6>
                  <p>
                    Of course! We’re happy to offer a free plan to anyone who wants to try our service.
                  </p>
                </div>
              </div>
        </div>
    </div>
</div>

@endsection