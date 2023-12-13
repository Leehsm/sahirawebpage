@extends('admin.master')
@section('content')
@section('title')
Coupon / Promo
@endsection

<div class="pagetitle">
  <h1>Coupon / Promo </h1>
  <nav>
    <ol class="breadcrumb">
      <li class="breadcrumb-item"><a href="index.html">Home</a></li>
      <li class="breadcrumb-item">Coupon / Promo</li>
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
                <th scope="col">Description</th>
                <th scope="col">Action</th>
              </tr>
            </thead>
            <tbody>
              @foreach($promo as $data)
              <tr>
                <td scope="row">{{ $data->name }}</td> 
                <td scope="row">{{ $data->description }}</td> 
                <td width="15%">   
                  <a href="{{ route('promo.edit', $data->id) }}" class="btn btn-info btn-sm" title="Edit Data">
                    Edit 
                  </a>
                  <a href="{{ route('promo.delete', $data->id) }}" class="btn btn-danger btn-sm" title="Delete Data" id="delete">
                    Delete
                  </a>
                  <a href="{{ route('promo.send', $data->id) }}" class="btn btn-danger btn-sm" title="Delete Data" id="delete">
                    Send
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
