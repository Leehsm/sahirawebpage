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

<div class="benefit">
    <div class="container">
        <div class="row benefit_row">
            <div class="row">
              @foreach ( $faq as $faqs )
                <div class="col-md-6 col-lg-4 mb-4">
                  <h6 class="mb-3 text-primary">
                    {{ $faqs->question }}
                  </h6>
                  <p>
                    {{ $faqs->answer }}
                  </p>
                </div>
              @endforeach                 
            </div>
        </div>
    </div>
</div>

@endsection