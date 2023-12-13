@extends('admin.master')
@section('content')
@section('title')
Membership
@endsection

<div class="pagetitle">
  <h1>Membership </h1>
  <nav>
    <ol class="breadcrumb">
      <li class="breadcrumb-item"><a href="index.html">Home</a></li>
      <li class="breadcrumb-item">Membership</li>
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
                <th scope="col">Name</th>
                <th scope="col">DOB</th>
                <th scope="col">Email</th>
                <th scope="col">Phone</th>
                <th scope="col">Address</th>
                <th scope="col">Action</th>
              </tr>
            </thead>
            <tbody>
              @foreach($membership as $data)
              <tr>
                <td scope="row">{{ $data->name }}</td> 
                <td scope="row">{{ $data->birthdate }}</td> 
                <td scope="row">{{ $data->email }}</td> 
                <td scope="row">{{ $data->phonenum }}</td> 
                <td scope="row">{{ $data->address }}</td>  
                <td width="15%">   
                  <a href="{{ route('membership.edit', $data->id) }}" class="btn btn-info btn-sm" title="Edit Data">
                    Edit 
                  </a>
                  <a href="{{ route('membership.delete', $data->id) }}" class="btn btn-danger btn-sm" title="Delete Data" id="delete">
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
