@extends('admin.master')
@section('content')
@section('title')
Add Our Team
@endsection

<main class="col-md-8 ms-sm-auto col-lg-10 px-md-4" style="width: -webkit-calc(100% - 200px); width: calc(100% - 200px); float:right;">  
    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2">Add Our Team</h1>
    </div>
    <form method="post" action="{{ route('ourteam.update') }}" enctype="multipart/form-data">
        @csrf
        <input type="hidden" name="id" value="{{ $ourteam->id }}">
        <input type="hidden" name="old_image" value="{{ $ourteam->image }}">
        <div class="mb-3">
            <label for="image" class="form-label">Image</label>
            <br><br>
            <input type="file" class="form-control" name="image" id="image">
        </div>
        <div class="mb-3">
            <label for="name" class="form-label">Name</label>
            <input type="text" class="form-control" name="name" id="name" value="{{ $ourteam->name }}">
        </div>
        <div class="mb-3">
            <label for="position" class="form-label">Position</label>
            <input type="text" class="form-control" name="position" id="position" value="{{ $ourteam->position }}">
        </div>
        <div class="text-xs-right">
            <input type="submit" class="btn btn-rounded btn-primary mb-5" value="Update">					 
        </div>
    </form>
</main>
@endsection
