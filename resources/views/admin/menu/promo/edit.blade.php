@extends('admin.master')
@section('content')
@section('title')
Edit Coupon / Promo
@endsection

<main class="col-md-8 ms-sm-auto col-lg-10 px-md-4" style="width: -webkit-calc(100% - 200px); width: calc(100% - 200px); float:right;">  
    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2">Edit Coupon / Promo</h1>
    </div>
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
@endsection
