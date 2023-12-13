@extends('admin.master')
@section('content')
@section('title')
Edit Contact Us
@endsection

<div class="pagetitle">
    <h1>Edit Contact Us</h1>
    <nav>
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="{{ url('/admin/dashboard') }}">Home</a></li>
            <li class="breadcrumb-item">Contact Us</li>
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
                    <form method="post" action="{{ route('contactus.update') }}" enctype="multipart/form-data">
                        @csrf
                        <input type="hidden" name="id" value="{{ $contactus->id }}">
                        <input type="hidden" name="old_image" value="{{ $contactus->image }}">
                        <div class="mb-3">
                            <label for="image" class="form-label">Image</label>
                            <br><br>
                            <input type="file" class="form-control" name="image" id="image">
                        </div>
                        <div class="mb-3">
                            <label for="name" class="form-label">Email</label>
                            <input type="text" class="form-control" name="name" id="name" value="{{ $contactus->name }}">
                        </div>
                        <div class="mb-3">
                            <label for="detail" class="form-label">Detail and Link</label>
                            <input type="text" class="form-control" name="detail" id="detail" value="{{ $contactus->desc_link }}">
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
