@extends('welcome')
@section('frontend')
@section('title')
Blogs 
@endsection

<!-- Slider -->
<div class="main_slider" style="background-image:url(assets/images/slider_1.jpg)">
    <div class="container fill_height">
        <div class="row align-items-center fill_height">
            <div class="col">
                <div class="main_slider_abt" id="aboutus">
                    <h1>Blogs</h1>
                    <h6>We help you to change your outfit fashion and be more confident with yourself.</h6>
                {{-- <div class="red_button shop_now_button"><a href="#">shop now</a></div> --}}
                </div>
            </div>
        </div>
    </div>
</div>


<div class="blogs">
    <div class="container">
        <div class="row blogs_container">
            @foreach ($blog as $data )
            <div class="col-lg-4 blog_item_col">
                <div class="blog_item">
                <div class="blog_background" style="background-image:url({{ $data->image }})"></div>
                <div class="blog_content d-flex flex-column align-items-center justify-content-center text-center">
                    <h4 class="blog_title">{{ $data->title }}</h4>
                    <span class="blog_meta">{{ $data->date }}</span>
                    <a class="blog_more" href="{{ url('readblog/'.$data->id)}}">Read more</a>
                </div>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</div>

@endsection