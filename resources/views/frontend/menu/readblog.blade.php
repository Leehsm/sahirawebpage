@extends('welcome')
@section('frontend')
@section('title')
Blogs 
@endsection

<!-- Slider -->
<div class="main_slider_blog">
    <div class="container fill_height">
        <div class="col">
            <div class="main_slider_abt_blog" id="blog">
                <h2>{{ $blogs->title }}</h2  >
                <h6>Date: {{ $blogs->date }}</h6>
                <hr>
                <img src="{{ asset($blogs->image) }}">
                <hr>
                <h6>{{ $blogs->description }}</h6>
            </div>
        </div>
    </div>
</div>

@endsection