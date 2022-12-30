@extends('welcome')
@section('frontend')
@section('title')
About Us 
@endsection

<!-- Slider -->
<div class="main_slider" style="background-image:url(assets/images/slider_1.jpg)">
    <div class="container fill_height">
        <div class="row align-items-center fill_height">
            <div class="col">
                @foreach ( $aboutus as $data)
                <div class="main_slider_abt" id="aboutus">
                    <h1>About Us</h1>
                    <h6>{{$data->description}} 
                    </h6>
                </div>
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
            
            {{-- <div class="col-lg-4 blog_item_col">
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
            <div class="col-lg-4 blog_item_col">
                <div class="blog_item">
                <div class="blog_background" style="background-image:url(assets/images/slider_1.jpg)"></div>
                <div class="blog_content d-flex flex-column align-items-center justify-content-center text-center">
                    <h4 class="blog_title">Founder</h4>
                    <span class="blog_meta">Isnaini Binti Moin</span>
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
                <div class="blog_background" style="background-image:url(assets/images/blog_2.jpg)"></div>
                <div class="blog_content d-flex flex-column align-items-center justify-content-center text-center">
                    <h4 class="blog_title">Here are the trends I see coming this fall</h4>
                    <span class="blog_meta">by admin | dec 01, 2021</span>
                    <a class="blog_more" href="#">Read more</a>
                </div>
                </div>
            </div> --}}
        </div>
    </div>
</div>

@endsection