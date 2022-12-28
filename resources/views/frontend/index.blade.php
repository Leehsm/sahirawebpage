@extends('welcome')
@section('frontend')
@section('title')
Sahira 
@endsection

<!-- Slider -->
<div class="main_slider" style="background-image:url(assets/images/mainpage.jpg)">
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
<div class="deal_ofthe_week">
    <div class="container">
        <div class="row align-items-center" id="aboutus">
            <div class="col-lg-6">
            <div class="deal_ofthe_week_img">
                <img src="assets/images/deal_ofthe_week.png" alt="">
            </div>
            </div>
            <div class="col-lg-6 text-right deal_ofthe_week_col">
            <div class="deal_ofthe_week_content d-flex flex-column align-items-center float-right">
                <div class="section_title">
                <h2>About Us</h2>
                </div>
                <div class=".main_slider_abt">
                    <h6>About Us Get up to 30% Off New Arrivals</h6>
                </div>
                
                <div class="red_button deal_ofthe_week_button"><a href="{{ route('aboutus') }}">More</a></div>
            </div>
            </div>
        </div>
    </div>
</div>

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
        <div class="col-md-4">
            <div class="banner_item align-items-center" style="background-image:url(assets/images/banner_1.jpg)">
            <div class="banner_category">
                <a href="{{ route('outfit') }}#clothing">Clothing</a>
            </div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="banner_item align-items-center" style="background-image:url(assets/images/banner_2.jpg)">
            <div class="banner_category">
                <a href="{{ route('handbag') }}#handbag">Handbag</a>
            </div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="banner_item align-items-center" style="background-image:url(assets/images/banner_4.jpeg)">
            <div class="banner_category">
                <a href="{{ route('skincare') }}#skincare">Skincare</a>
            </div>
            </div>
        </div>
        </div>
    </div>
</div>

<!-- Contact -->
<div class="deal_ofthe_week">
    <div class="container">
        <div class="row align-items-center" id="contactus">
            <div class="col-lg-6">
            <div class="deal_ofthe_week_img">
                <img src="assets/images/deal_ofthe_week.png" alt="">
            </div>
            </div>
            <div class="col-lg-6 text-right deal_ofthe_week_col">
            <div class="deal_ofthe_week_content d-flex flex-column align-items-center float-right">
                <div class="section_title">
                <h2>Contact Us</h2>
                </div>
                
                <div class="red_button deal_ofthe_week_button"><a href="{{ route('contactus') }}">More</a></div>
            </div>
            </div>
        </div>
    </div>
</div>


<!-- Membership -->
<div class="deal_ofthe_week">
    <div class="container">
        <div class="row align-items-center" id="membership">
        <div class="col-lg-6">
            <div class="deal_ofthe_week_img">
            <img src="assets/images/deal_ofthe_week.png" alt="">
            </div>
        </div>
        <div class="col-lg-6 text-right deal_ofthe_week_col">
            <div class="deal_ofthe_week_content d-flex flex-column align-items-center float-right">
            <div class="section_title">
                <h2>Membership</h2>
            </div>
            
            <div class="red_button deal_ofthe_week_button"><a href="{{ route('membership') }}">Register Now</a></div>
            </div>
        </div>
        </div>
    </div>
</div>

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
        <div class="col-lg-4 blog_item_col">
            <div class="blog_item">
            <div class="blog_background" style="background-image:url(assets/images/blog_1.jpg)"></div>
            <div class="blog_content d-flex flex-column align-items-center justify-content-center text-center">
                <h4 class="blog_title">Here are the trends I see coming this fall</h4>
                <span class="blog_meta">by admin | dec 01, 2021</span>
                <a class="blog_more" href="{{ route('blog') }}">Read more</a>
            </div>
            </div>
        </div>
        <div class="col-lg-4 blog_item_col">
            <div class="blog_item">
            <div class="blog_background" style="background-image:url(assets/images/blog_2.jpg)"></div>
            <div class="blog_content d-flex flex-column align-items-center justify-content-center text-center">
                <h4 class="blog_title">Here are the trends I see coming this fall</h4>
                <span class="blog_meta">by admin | dec 01, 2021</span>
                <a class="blog_more" href="#">Read more</a>
            </div>
            </div>
        </div>
        <div class="col-lg-4 blog_item_col">
            <div class="blog_item">
            <div class="blog_background" style="background-image:url(assets/images/blog_3.jpg)"></div>
            <div class="blog_content d-flex flex-column align-items-center justify-content-center text-center">
                <h4 class="blog_title">Here are the trends I see coming this fall</h4>
                <span class="blog_meta">by admin | dec 01, 2021</span>
                <a class="blog_more" href="#">Read more</a>
            </div>
            </div>
        </div>
        <div class="red_button deal_ofthe_week_button" style="margin: auto; top: 10px;"><a href="{{ route('blog') }}">More Blogs</a></div>
        </div>
    </div>
</div>

<!-- Newsletter -->
<div class="newsletter">
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
</div>

@endsection