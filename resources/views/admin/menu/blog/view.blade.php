@extends('admin.master')
@section('content')
@section('title')
Blogs
@endsection

<div class="pagetitle">
  <h1>Blogs </h1>
  <nav>
    <ol class="breadcrumb">
      <li class="breadcrumb-item"><a href="index.html">Home</a></li>
      <li class="breadcrumb-item">Blogs</li>
      <li class="breadcrumb-item active">View</li>
    </ol>
  </nav>
</div><!-- End Page Title -->

<section class="section">
  <div class="row">
    <div class="col-lg-12">
        <div class="card">
            <div class="card-body">
                <h5 class="card-title"></h5>
                <table class="table datatable">
                  <thead>
                    <tr>
                      <th scope="col">Image</th>
                      <th scope="col">Title</th>
                      <th scope="col">Date</th>
                      <th scope="col">Description</th>
                      <th scope="col">Action</th>
                    </tr>
                  </thead>
                  <tbody>
                    @foreach($blog as $data)
                    <tr>
                      <td width="15%"><img src="{{ asset($data->image) }}" style="width: 100px; height: 100px;"></td> 
                      <td width="15%">{{ $data->title }}</td> 
                      <td width="15%">{{ $data->date }}</td>  
                      <td>{{ $data->description }}</td>  
                      <td width="15%">   
                        <a href="{{ route('blog.edit', $data->id) }}" class="btn btn-info btn-sm" title="Edit Data">
                          Edit 
                        </a>
                        <a href="{{ route('blog.delete', $data->id) }}" class="btn btn-danger btn-sm" title="Delete Data" id="delete">
                          Delete
                        </a>
                      </td>
                    </tr>
                    @endforeach
                  </tbody>
                </table>
            </div>
        </div>
    </div>
  </div>
</section>
@endsection
