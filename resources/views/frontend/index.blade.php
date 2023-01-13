@extends('welcome')
@section('frontend')
@section('title')
Sahira 
@endsection

<!-- Slider -->
<div class="main_slider" style="background-image:url(assets/images/main.png)">
    <div class="container fill_height">
        <div class="row align-items-center fill_height">
        <div class="col">
            <div class="main_slider_abt" id="aboutus">
                <h1>Welcome To Sahira</h1>
                <h6>We help you to change your outfit fashion and be more confident with yourself.</h6>
            {{-- <div class="red_button shop_now_button"><a href="#">shop now</a></div> --}}
            </div>
        </div>
        </div>
    </div>
</div>

<!-- About Us -->
@foreach ($aboutus as $data )
<div class="deal_ofthe_week">
    <div class="container">
        <div class="row align-items-center" id="aboutus">
            <div class="col-lg-6">
            <div class="deal_ofthe_week_img">
                <img src="{{ $data->image }}" alt="">
            </div>
            </div>
            <div class="col-lg-6 text-right deal_ofthe_week_col">
            <div class="deal_ofthe_week_content d-flex flex-column align-items-center float-right">
                <div class="section_title">
                <h2>About Us</h2>
                </div>
                <br>
                <div class=".main_slider_abt">
                    <h6>{{ $data->description }}</h6>
                </div>
                
                <div class="red_button deal_ofthe_week_button"><a href="{{ route('aboutus') }}">More</a></div>
            </div>
            </div>
        </div>
    </div>
</div>
@endforeach    

<!-- Our Product -->
<div class="banner" id="ourproduct">
    <div class="row">
        <div class="col text-center">
            <div class="section_title">
                <h2>Our Product</h2>
            </div>
        </div>
    </div>
    <br>
    <div class="container">
        <div class="row">
            @foreach ($ourproduct1 as $data )
                <div class="col-md-4">
                    <div class="banner_item align-items-center" style="background-image:url({{ $data->image }})">
                    <div class="banner_category">
                        <a href="{{ route('outfit') }}#clothing">{{ $data->name }}</a>
                    </div>
                    </div>
                </div>
            @endforeach
        
            @foreach ($ourproduct2 as $data )
                <div class="col-md-4">
                    <div class="banner_item align-items-center" style="background-image:url({{ $data->image }})">
                    <div class="banner_category">
                        <a href="{{ route('handbag') }}#handbag">{{ $data->name }}</a>
                    </div>
                    </div>
                </div>
            @endforeach

            @foreach ($ourproduct3 as $data )
                <div class="col-md-4">
                    <div class="banner_item align-items-center" style="background-image:url({{ $data->image }})">
                    <div class="banner_category">
                        <a href="{{ route('skincare') }}#skincare">{{ $data->name }}</a>
                    </div>
                    </div>
                </div>
            @endforeach     
        </div>
    </div>
</div>

<!-- Contact -->
@foreach ($contactus as $data )
<div class="deal_ofthe_week">
    <div class="container">
        <div class="row align-items-center" id="contactus">
            <div class="col-lg-6">
            <div class="deal_ofthe_week_img">
                <img src="{{ $data->image }}" alt="">
            </div>
            </div>
            <div class="col-lg-6 text-right deal_ofthe_week_col">
            <div class="deal_ofthe_week_content d-flex flex-column align-items-center float-right">
                <div class="section_title">
                <h2>Contact Us</h2>
                </div>
                <br>
                <div class=".main_slider_abt">
                    <h6>{{ $data->desc_link }}</h6>
                </div>                
                <div class="red_button deal_ofthe_week_button"><a href="{{ route('contactus') }}">More</a></div>
            </div>
            </div>
        </div>
    </div>
</div>
@endforeach


<!-- Membership -->
@foreach ($membership as $data)
<div class="deal_ofthe_week">
    <div class="container">
        <div class="row align-items-center" id="membership">
        <div class="col-lg-6">
            <div class="deal_ofthe_week_img">
            <img src="{{ $data->image }}" alt="">
            </div>
        </div>
        <div class="col-lg-6 text-right deal_ofthe_week_col">
            <div class="deal_ofthe_week_content d-flex flex-column align-items-center float-right">
            <div class="section_title">
                <h2>Membership</h2>
            </div>
            <br>
            <div class=".main_slider_abt">
                <h6>{{ $data->desc }}</h6>
            </div>            
            <div class="red_button deal_ofthe_week_button"><a href="{{ route('membership') }}">Register Now</a></div>
            </div>
        </div>
        </div>
    </div>
</div>
@endforeach

<!-- Blogs -->
<div class="blogs">
    <div class="container">
        <div class="row">
        <div class="col text-center" id="blog">
            <div class="section_title">
            <h2>Latest Blogs</h2>
            </div>
        </div>
        </div>
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
            <div class="red_button deal_ofthe_week_button" style="margin: auto; top: 10px;"><a href="{{ route('blog') }}">More Blogs</a></div>
        </div>
    </div>
</div>

<!-- Newsletter -->
{{-- <div class="newsletter">
    <div class="container">
        <div class="row">
        <div class="col-lg-6">
            <div class="newsletter_text d-flex flex-column justify-content-center align-items-lg-start align-items-md-center text-center">
            <h4>Newsletter</h4>
            <p>Subscribe to our newsletter to get our latest promotion deals</p>
            </div>
        </div>
        <div class="col-lg-6">
            <form action="post">
            <div class="newsletter_form d-flex flex-md-row flex-column flex-xs-column align-items-center justify-content-lg-end justify-content-center">
                <input id="newsletter_email" type="email" placeholder="Your email" required="required" data-error="Valid email is required.">
                <button id="newsletter_submit" type="submit" class="newsletter_submit_btn trans_300" value="Submit">subscribe</button>
            </div>
            </form>
        </div>
        </div>
    </div>
</div> --}}

@endsection