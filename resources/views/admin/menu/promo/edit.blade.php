@extends('admin.master')
@section('content')
@section('title')
Edit Coupon / Promo
@endsection

<div class="pagetitle">
    <h1>Edit Coupon / Promo</h1>
    <nav>
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="{{ url('/admin/dashboard') }}">Home</a></li>
            <li class="breadcrumb-item">Coupon / Promo</li>
            <li class="breadcrumb-item active">Edit</li>
        </ol>
    </nav>
</div><!-- End Page Title -->

<section class="section">
    <div class="row">
        <div class="col-lg-12">
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title"></h5>
                    <form method="post" action="{{ route('promo.update') }}">
                        @csrf
                        <input type="hidden" class="form-control" name="id" id="id" value="{{ $promo->id }}">
                        <div class="mb-3">
                            <label for="name" class="form-label">Name</label>
                            <input type="text" class="form-control" name="name" id="name" value="{{ $promo->name }}">
                        </div>
                        <div class="mb-3">
                            <label for="email" class="form-label">Description</label>
                            <input type="text" class="form-control" name="description" id="description" value="{{ $promo->description }}">
                        </div>
                        <div class="text-xs-right">
                            <input type="submit" class="btn btn-rounded btn-primary mb-5" value="Update">					 
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection
