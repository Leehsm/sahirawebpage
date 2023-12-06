@extends('admin.master')
@section('content')
@section('title')
Customer Database
@endsection

<main class="col-md-8 ms-sm-auto col-lg-10 px-md-4" style="width: -webkit-calc(100% - 200px); width: calc(100% - 200px); float:right;">
  <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
    <h1 class="h2">Customer Database</h1>
    <div class="container-fluid">
      <form class="d-flex" style="width: 30%" role="search">
        <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
        <button class="btn btn-outline-success" type="submit">Search</button>
      </form>
    </div>
    <div class="btn-toolbar mb-2 mb-md-0">
      <div class="btn-group me-2" >
        <button  type="button" class="btn btn-sm btn-outline-secondary">
          <a href="{{ route('customer.export') }}" class="d-flex align-items-center text-black text-decoration-none">
            Download
          </a>
        </button>
      </div>
    </div>
  </div>
  <table class="table table-success table-striped">
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
</main>
@endsection
