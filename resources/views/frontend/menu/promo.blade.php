@extends('welcome')
@section('frontend')
@section('title')
Promo
@endsection

<!-- Slider -->
<div class="main_slider" style="background-image:url(assets/images/slider_1.jpg)">
    <div class="container fill_height">
        <div class="row align-items-center fill_height">
            <div class="col">
                <div class="main_slider_abt" id="aboutus">
                    <h1>Get Our Promo or Coupon</h1>
                </div>
            </div>
        </div>
    </div>
</div>



<div class="benefit">
    <div class="container">
        {{-- <div class="row benefit_row"> --}}
            <h3 style="text-align: center">Fill the form to claim our promo or coupon.</h3>
            <form method="post" action="{{ route('get-promo') }}">
                @csrf
                <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">Name</label>
                    <input type="text" class="form-control" id="name" name="name" >
                </div>

                <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">Phone Number</label>
                    <input type="text" class="form-control" id="phone" name="phone" >
                </div>

                <div class="mb-3">
                  <label for="exampleInputEmail1" class="form-label">Email address</label>
                  <input type="email" class="form-control" id="email" name="email" >
                </div>

                <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">Address</label>
                    <input type="text" class="form-control" id="address" name="address" >
                </div>
                
                <button type="submit" class="btn btn-primary">Submit</button>
            </form>
        {{-- </div> --}}
    </div>
</div>

@endsection