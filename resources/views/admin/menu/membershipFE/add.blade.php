@extends('admin.master')
@section('content')
@section('title')
Add MembershipFE
@endsection

<div class="pagetitle">
    <h1>Add MembershipFE</h1>
    <nav>
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="{{ url('/admin/dashboard') }}">Home</a></li>
            <li class="breadcrumb-item">MembershipFE</li>
            <li class="breadcrumb-item active">Add</li>
        </ol>
    </nav>
</div><!-- End Page Title -->

<section class="section">
    <div class="row">
        <div class="col-lg-12">
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title"></h5>
                    <form method="post" action="{{ route('membershipFE.store') }}" enctype="multipart/form-data">
                        @csrf
                        <div class="mb-3">
                            <label for="image" class="form-label">Image</label>
                            <input type="file" class="form-control" name="image" id="image">
                        </div>
                        <div class="mb-3">
                            <label for="desc" class="form-label">Description</label>
                            <textarea class="form-control" name="desc" id="desc" rows="3"></textarea>
                        </div>
                        <div class="text-xs-right">
                            <input type="submit" class="btn btn-rounded btn-primary mb-5" value="Add New">					 
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection
