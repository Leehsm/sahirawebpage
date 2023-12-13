@extends('admin.master')
@section('content')
@section('title')
Edit Membership
@endsection

<div class="pagetitle">
    <h1>Edit Membership</h1>
    <nav>
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="{{ url('/admin/dashboard') }}">Home</a></li>
            <li class="breadcrumb-item">Membership</li>
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
                </div>
            </div>
        </div>
    </div>
</section>
@endsection
