@extends('welcome')
@section('frontend')
@section('title')
Contact Us 
@endsection

<!-- Slider -->
@foreach ($menu as $data)
<div class="main_slider" style="background-image:url({{ $data->image }})">
    <div class="container fill_height">
        <div class="row align-items-center fill_height">
            <div class="col">
                <div class="main_slider_abt" id="aboutus">
                    <h1>Contact Us</h1>
                    <h6>
                        {{$data->desc_link}}
                    </h6>
                {{-- <div class="red_button shop_now_button"><a href="#">shop now</a></div> --}}
                </div>
            </div>
        </div>
    </div>
</div>
@endforeach



<!-- Benefit -->
<div class="benefit">
    <div class="container">
        <div class="row benefit_row">
            @foreach ($location as $data )
            <div class="col-lg-3 benefit_col">
                <div class="benefit_item d-flex flex-row align-items-center">
                    <div class="benefit_icon"><i class="fa fa-map" aria-hidden="true"></i></div>
                    <div class="benefit_content">
                        <a href="{{ $data->desc_link }}">
                            <h6>Find Us at</h6>
                            <p>Our Location</p>
                        </a>
                    </div>
                </div>
            </div>
            @endforeach

            @foreach ($contact as $data )
            <div class="col-lg-3 benefit_col">
                <div class="benefit_item d-flex flex-row align-items-center">
                    <div class="benefit_icon"><i class="fa fa-envelope-open" aria-hidden="true"></i></div>
                    <div class="benefit_content">
                        <a href="{{ $data->desc_link }}">
                            <h6>For Any Enquiries</h6>
                            <p>Email or Contact Us at</p>
                        </a>
                    </div>
                </div>
            </div>
            @endforeach

            @foreach ($social as $data )
            <div class="col-lg-3 benefit_col">
                <div class="benefit_item d-flex flex-row align-items-center">
                    <div class="benefit_icon"><i class="fa fa-users" aria-hidden="true"></i></div>
                    <div class="benefit_content">
                        <a href="{{ $data->desc_link }}">
                            <h6>Follow Us at</h6>
                            <p>Our Social Media</p>
                        </a>
                    </div>
                </div>
            </div>
            @endforeach

            @foreach ($operationhour as $data )
            <div class="col-lg-3 benefit_col">
                <div class="benefit_item d-flex flex-row align-items-center">
                    <div class="benefit_icon"><i class="fa fa-clock-o" aria-hidden="true"></i></div>
                    <div class="benefit_content">
                        <h6>opening all week</h6>
                        <p>{{ $data->desc_link }}</p>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</div>

@endsection