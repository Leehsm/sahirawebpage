@extends('admin.master')
@section('content')
@section('title')
Edit Blog
@endsection

<main class="col-md-8 ms-sm-auto col-lg-10 px-md-4" style="width: -webkit-calc(100% - 200px); width: calc(100% - 200px); float:right;">  
    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2">Edit Blog</h1>
    </div>
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
</main>
@endsection
