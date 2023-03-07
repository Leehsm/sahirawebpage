@extends('admin.master')
@section('content')
@section('title')
Edit Membership
@endsection

<main class="col-md-8 ms-sm-auto col-lg-10 px-md-4" style="width: -webkit-calc(100% - 200px); width: calc(100% - 200px); float:right;">  
    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2">Edit Membership</h1>
    </div>
    <form method="post" action="{{ route('membership.update') }}" enctype="multipart/form-data">
        @csrf
        <input type="hidden" name="id" value="{{ $membership->id }}">
        <div class="mb-3">
            <label for="name" class="form-label">Name</label>
            <input type="text" class="form-control" name="name" id="name" value="{{ $membership->name }}">
        </div>
        <div class="mb-3">
            <label for="dob" class="form-label">Date Of Birth</label>
            <input type="date" class="form-control" name="dob" id="dob" value="{{ $membership->birthdate }}">
        </div>
        <div class="mb-3">
            <label for="email" class="form-label">Email</label>
            <input type="email" class="form-control" name="email" id="email" value="{{ $membership->email }}">
        </div>
        <div class="mb-3">
            <label for="phone" class="form-label">Contact No</label>
            <input type="text" class="form-control" name="phone" id="phone" value="{{ $membership->phonenum }}">
        </div>
        <div class="mb-3">
            <label for="address" class="form-label">Address</label>
            <input type="text" class="form-control" name="address" id="address" value="{{ $membership->address }}">
        </div>
        <div class="text-xs-right">
            <input type="submit" class="btn btn-rounded btn-primary mb-5" value="Update">					 
        </div>
    </form>
</main>
@endsection
