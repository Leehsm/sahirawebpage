@extends('admin.master')
@section('content')
@section('title')
Edit About Us
@endsection

<main class="col-md-8 ms-sm-auto col-lg-10 px-md-4">  
    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2">Edit  About Us</h1>
    </div>
    <form method="post" action="{{ route('aboutus.update', $aboutus->id) }}" enctype="multipart/form-data">
        @csrf
        <div class="mb-3">
            <label for="image" class="form-label">Image</label>
            <br>
            <img src="{{ asset($aboutus->image) }}" class="card-img-top" style="height: 100px; width: 100px;">
            <input type="file" class="form-control" id="image">
        </div>
        <div class="mb-3">
            <label for="exampleFormControlTextarea1" class="form-label">Description</label>
            <textarea class="form-control" id="exampleFormControlTextarea1" rows="3">{{ $aboutus->description }}"</textarea>
        </div>
        <div class="text-xs-right">
            <input type="submit" class="btn btn-rounded btn-primary mb-5" value="Update">					 
        </div>
    </form>
</main>
@endsection
