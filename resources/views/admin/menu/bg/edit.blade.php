@extends('admin.master')
@section('content')
@section('title')
Edit BG
@endsection

<div class="pagetitle">
    <h1>BG </h1>
    <nav>
      <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="index.html">Home</a></li>
        <li class="breadcrumb-item">BG</li>
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
                    <!-- General Form Elements -->
                    <form method="post" action="{{ route('bg.update') }}" enctype="multipart/form-data">
                        @csrf        
                        <input type="hidden" name="id" value="{{ $bg->id }}">
                        <input type="hidden" name="old_image" value="{{ $bg->image }}">
                        <div class="mb-3">
                            <label for="image" class="form-label">Image</label>
                            <br><br>
                            <input type="file" class="form-control" name="image" id="image">
                        </div>
                        <div class="mb-3">
                            <label for="name" class="form-label">Name</label>
                            <input type="text" class="form-control" name="name" id="name" value="{{ $bg->name }}">
                        </div>
                        <div class="mb-3">
                            <label for="description" class="form-label">Description</label>
                            <textarea class="form-control" name="description" id="description" rows="3">{{ $bg->description }}</textarea>
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

{{-- <main class="col-md-8 ms-sm-auto col-lg-10 px-md-4" style="width: -webkit-calc(100% - 200px); width: calc(100% - 200px); float:right;">  
    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2">Edit BG</h1>
    </div>
    <form method="post" action="{{ route('bg.update') }}" enctype="multipart/form-data">
        @csrf        
        <input type="hidden" name="id" value="{{ $bg->id }}">
        <input type="hidden" name="old_image" value="{{ $bg->image }}">
        <div class="mb-3">
            <label for="image" class="form-label">Image</label>
            <br><br>
            <input type="file" class="form-control" name="image" id="image">
        </div>
        <div class="mb-3">
            <label for="name" class="form-label">Name</label>
            <input type="text" class="form-control" name="name" id="name" value="{{ $bg->name }}">
        </div>
        <div class="mb-3">
            <label for="description" class="form-label">Description</label>
            <textarea class="form-control" name="description" id="description" rows="3">{{ $bg->description }}</textarea>
        </div>
        <div class="text-xs-right">
            <input type="submit" class="btn btn-rounded btn-primary mb-5" value="Update">					 
        </div>
    </form>
</main> --}}
@endsection
