@extends('admin.master')
@section('content')
@section('title')
Customer Database
@endsection

<div class="pagetitle">
  <h1>Customer Database </h1>
  <nav>
    <ol class="breadcrumb">
      <li class="breadcrumb-item"><a href="index.html">Home</a></li>
      <li class="breadcrumb-item">Customer Database</li>
      <li class="breadcrumb-item active">View</li>
    </ol>
  </nav>
  <button  type="button" class="btn btn-sm btn-outline-secondary">
    <a href="{{ route('customer.export') }}" class="d-flex align-items-center text-black text-decoration-none">
      Download
    </a>
  </button>
</div><!-- End Page Title -->

<section class="section">
  <div class="row">
    <div class="col-lg-12">
      <div class="card">
        <div class="card-body">
          <table class="table datatable">
            <thead>
              <tr>
                <th scope="col">#</th>
                <th scope="col">Name</th>
                <th scope="col">Email</th>
                <th scope="col">Phone</th>
                <th scope="col">Address</th>
              </tr>
            </thead>
            <tbody>
              @foreach($customerDetail as $data)
              <tr>
                <td scope="row">{{ $no++ }}</td> 
                <td scope="row">{{ $data->name }}</td> 
                <td scope="row">{{ $data->email }}</td> 
                <td scope="row">{{ $data->phone }}</td> 
                <td scope="row">{{ $data->address }}</td>  
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
