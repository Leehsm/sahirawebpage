@extends('admin.master')
@section('content')
@section('title')
Add FAQ
@endsection

<main class="col-md-8 ms-sm-auto col-lg-10 px-md-4">  
    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2">Add FAQ</h1>
    </div>
    <form method="post" action="{{ route('contactus.store') }}" enctype="multipart/form-data">
        @csrf
        <div class="mb-3">
            <label for="email" class="form-label">Question</label>
            <input type="email" class="form-control" id="email">
        </div>
        <div class="mb-3">
            <label for="phone" class="form-label">Answer</label>
            <input type="text" class="form-control" id="phone">
        </div>
        <div class="text-xs-right">
            <input type="submit" class="btn btn-rounded btn-primary mb-5" value="Add New">					 
        </div>
    </form>
</main>
@endsection