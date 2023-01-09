@extends('admin.master')
@section('content')
@section('title')
Edit Contact Us
@endsection

<main class="col-md-8 ms-sm-auto col-lg-10 px-md-4" style="width: -webkit-calc(100% - 200px); width: calc(100% - 200px); float:right;">  
    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2">Edit Contact Us</h1>
    </div>
    <form method="post" action="{{ route('contactus.update') }}" enctype="multipart/form-data">
        @csrf
        <input type="hidden" name="id" value="{{ $contactus->id }}">
        <div class="mb-3">
            <label for="old_image" class="form-label">Image</label>
            <br><br>
            <img src="{{ asset($contactus->image) }}" class="card-img-top" style="height: 100px; width: 100px;">
            <input type="file" class="form-control" name="old_image" id="old_image">
        </div>
        <div class="mb-3">
            <label for="email" class="form-label">Email</label>
            <input type="email" class="form-control" name="email" id="email" value="{{ $contactus->email }}">
        </div>
        <div class="mb-3">
            <label for="phone1" class="form-label">Contact No 1</label>
            <input type="text" class="form-control" name="phone1" id="phone1" value="{{ $contactus->phone_1 }}">
        </div>
        <div class="mb-3">
            <label for="phone2" class="form-label">Contact No 2</label>
            <input type="text" class="form-control" name="phone2" id="phone2" value="{{ $contactus->phone_1 }}">
        </div>
        <div class="text-xs-right">
            <input type="submit" class="btn btn-rounded btn-primary mb-5" value="Add New">					 
        </div>
    </form>
</main>
@endsection
