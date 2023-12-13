@extends('admin.master')
@section('content')
@section('title')
Add Our Product
@endsection

<div class="pagetitle">
    <h1>Edit Our Product</h1>
    <nav>
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="{{ url('/admin/dashboard') }}">Home</a></li>
            <li class="breadcrumb-item">Our Product</li>
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
                    <form method="post" action="{{ route('ourproduct.update') }}" enctype="multipart/form-data">
                        @csrf
                        <input type="hidden" name="id" value="{{ $ourproduct->id }}">
                        <input type="hidden" name="old_image" value="{{ $ourproduct->image }}">
                        <div class="mb-3">
                            <label for="image" class="form-label">Image</label>
                            <br><br>
                            <input type="file" class="form-control" name="image" id="image">
                        </div>
                        <div class="mb-3">
                            <label for="name" class="form-label">Name</label>
                            <input type="text" class="form-control" name="name" id="name" value="{{ $ourproduct->name }}">
                        </div>
                        <div class="mb-3">
                            <label for="decription" class="form-label">Description</label>
                            <textarea class="form-control" name="description" id="description" rows="3">{{ $ourproduct->description }}</textarea>
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
