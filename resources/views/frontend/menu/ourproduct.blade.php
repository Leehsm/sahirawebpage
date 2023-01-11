@extends('welcome')
@section('frontend')
@section('title')
Clothing 
@endsection

<!-- Slider -->
@foreach ( $clothing as $data )
<div class="main_slider" style="background-image:url({{ $data->image }})" id="clothing">
    <div class="container fill_height">
        <div class="row align-items-center fill_height">
            <div class="col">
                <div class="main_slider_abt" id="aboutus">
                    <h1>{{ $data->name }}</h1>
                    <h6>{{ $data->description }}</h6>
                {{-- <div class="red_button shop_now_button"><a href="#">shop now</a></div> --}}
                </div>
            </div>
        </div>
    </div>
</div>
@endforeach

@foreach ( $handbag as $data )
<div class="main_slider" style="background-image:url({{ $data->image }})" id="clothing">
    <div class="container fill_height">
        <div class="row align-items-center fill_height">
            <div class="col">
                <div class="main_slider_abt" id="aboutus">
                    <h1>{{ $data->name }}</h1>
                    <h6>{{ $data->description }}</h6>
                {{-- <div class="red_button shop_now_button"><a href="#">shop now</a></div> --}}
                </div>
            </div>
        </div>
    </div>
</div>
@endforeach

@foreach ( $skincare as $data )
<div class="main_slider" style="background-image:url({{ $data->image }})" id="clothing">
    <div class="container fill_height">
        <div class="row align-items-center fill_height">
            <div class="col">
                <div class="main_slider_abt" id="aboutus">
                    <h1>{{ $data->name }}</h1>
                    <h6>{{ $data->description }}</h6>
                {{-- <div class="red_button shop_now_button"><a href="#">shop now</a></div> --}}
                </div>
            </div>
        </div>
    </div>
</div>
@endforeach

<div class="blogs">
    <div class="container">
        <div class="row blogs_container">
            <div class="col-lg-4 blog_item_col">
                <div class="blog_item">
                    <div class="blog_background" style="background-image:url(assets/images/skincare2.JPG)"></div>
                    <div class="blog_content d-flex flex-column align-items-center justify-content-center text-center">
                        <h6 class="blog_title">DIIQS Beauty Cleanser (Soap)</h6>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 blog_item_col">
                <div class="blog_item">
                <div class="blog_background" style="background-image:url(assets/images/skincare3.JPG)"></div>
                <div class="blog_content d-flex flex-column align-items-center justify-content-center text-center">
                    <h6 class="blog_title">DIIQS Beauty Toner</h6>
                </div>
                </div>
            </div>
            <div class="col-lg-4 blog_item_col">
                <div class="blog_item">
                <div class="blog_background" style="background-image:url(assets/images/skincare1.JPG)"></div>
                <div class="blog_content d-flex flex-column align-items-center justify-content-center text-center">
                    <h6 class="blog_title">DIIQS Beauty Serum</h6>
                </div>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection