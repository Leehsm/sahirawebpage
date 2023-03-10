@extends('welcome')
@section('frontend')
@section('title')
About Us 
@endsection

<!-- Slider -->
@foreach ($bg as $data )
<div class="main_slider" style="background-image:url({{ $data->image }})">
    <div class="container fill_height">
        <div class="row align-items-center fill_height">
            <div class="col">
                <div class="main_slider_abt" id="aboutus">
                    <h1>About Us</h1>
                    <h6>{{$data->description}} 
                    </h6>
                </div>
            </div>
        </div>
    </div>
</div>
@endforeach

<div class="blogs">
    <div class="container">
        <div class="row">
            <div class="col text-center" id="blog">
                @foreach ( $aboutus as $data)
                    <h6>{{$data->description}} </h6>
                @endforeach
            </div>
        </div>
    </div>
</div>

<div class="blogs">
    <div class="container">
        <div class="row">
            <div class="col text-center" id="blog">
                <div class="section_title">
                <h2>Our Teams</h2>
                </div>
            </div>
        </div>
        <div class="row blogs_container">
            @foreach ($ourteam as $data)
                <div class="col-lg-4 blog_item_col">
                    <div class="blog_item">
                        <div class="blog_background" style="background-image:url({{ $data->image }})"></div>
                        <div class="blog_content d-flex flex-column align-items-center justify-content-center text-center">
                            <h4 class="blog_title">{{ $data->position }}</h4>
                            <span class="blog_meta">{{ $data->name }}</span>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
</div>

@endsection