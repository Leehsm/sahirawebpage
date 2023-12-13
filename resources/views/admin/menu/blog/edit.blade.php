@extends('admin.master')
@section('content')
@section('title')
Edit Blog
@endsection

<div class="pagetitle">
    <h1>Edit Blog</h1>
    <nav>
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="{{ url('/admin/dashboard') }}">Home</a></li>
            <li class="breadcrumb-item">Blog</li>
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
                    <form method="post" action="{{ route('blog.update') }}" enctype="multipart/form-data">
                        @csrf        
                        <input type="hidden" name="id" value="{{ $blog->id }}">
                        <input type="hidden" name="old_image" value="{{ $blog->image }}">
                        <div class="mb-3">
                            <label for="image" class="form-label">Image</label>
                            <br><br>
                            <input type="file" class="form-control" name="image" id="image">
                        </div>
                        <div class="mb-3">
                            <label for="title" class="form-label">Title</label>
                            <input type="text" class="form-control" name="title" id="title" value="{{ $blog->title }}">
                        </div>
                        <div class="mb-3">
                            <label for="date" class="form-label">Date</label>
                            <input type="Date" class="form-control" name="date" id="date" value="{{ $blog->date }}">
                        </div>
                        <div class="mb-3">
                            <label for="description" class="form-label">Description</label>
                            <textarea class="form-control" name="description" id="description" rows="3">{{ $blog->description }}</textarea>
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
