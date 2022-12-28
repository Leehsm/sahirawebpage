@extends('admin.master')
@section('content')
@section('title')
Add Our Product
@endsection

<main class="col-md-8 ms-sm-auto col-lg-10 px-md-4">  
    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2">Add Our Product</h1>
    </div>
    <form method="post" action="{{ route('ourproduct.store') }}" enctype="multipart/form-data">
        @csrf
        <div class="mb-3">
            <label for="image" class="form-label">Image</label>
            <input type="file" class="form-control" name="image" id="image">
        </div>
        <div class="mb-3">
            <label for="name" class="form-label">Name</label>
            <input type="text" class="form-control" name="name" id="name">
        </div>
        <div class="mb-3">
            <label for="description" class="form-label">Description</label>
            <textarea class="form-control" name="description" id="description" rows="3"></textarea>
        </div>
        <div class="text-xs-right">
            <input type="submit" class="btn btn-rounded btn-primary mb-5" value="Add New">					 
        </div>
    </form>
</main>
@endsection
