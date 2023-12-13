@extends('admin.master')
@section('content')
@section('title')
About Us
@endsection

<div class="pagetitle">
  <h1>About Us </h1>
  <nav>
    <ol class="breadcrumb">
      <li class="breadcrumb-item"><a href="index.html">Home</a></li>
      <li class="breadcrumb-item">About Us</li>
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
                  {{-- <p>Add lightweight datatables to your project with using the <a href="https://github.com/fiduswriter/Simple-DataTables" target="_blank">Simple DataTables</a> library. Just add <code>.datatable</code> class name to any table you wish to conver to a datatable. Check for <a href="https://fiduswriter.github.io/simple-datatables/demos/" target="_blank">more examples</a>.</p> --}}
                  <!-- Table with stripped rows -->
                  <table class="table datatable">
                      <thead>
                          <tr>
                              <th>
                                Image
                              </th>
                              <th>
                                Description
                            </th>
                              <th>Action</th>
                          </tr>
                      </thead>
                      <tbody>
                          @foreach ($aboutus as $data)
                          <tr>
                              <td width="15%"><img src="{{ asset($data->image) }}" style="width: 100px; height: 100px;"></td> 
                              <td>{{ $data->description }}</td>
                              <td>
                                  <a href="{{ route('aboutus.edit', $data->id) }}" class="btn btn-info btn-sm" title="Edit Data">
                                      Edit 
                                  </a>
                                  <a href="{{ route('aboutus.delete', $data->id) }}" class="btn btn-danger btn-sm" title="Delete Data" id="delete">
                                      Delete
                                  </a>
                              </td>
                          </tr>
                              
                          @endforeach
                      </tbody>
                  </table>
                  <!-- End Table with stripped rows -->
              </div>
          </div>
      </div>
  </div>
</section>

{{-- <main class="col-md-8 ms-sm-auto col-lg-10 px-md-4" style="width: -webkit-calc(100% - 200px); width: calc(100% - 200px); float:right;">  
  <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
    <h1 class="h2">About Us</h1>
    <div class="btn-toolbar mb-2 mb-md-0">
      <div class="btn-group me-2" >
        <button  type="button" class="btn btn-sm btn-outline-secondary">
          <a href="{{ route('aboutus.add') }}" class="d-flex align-items-center text-black text-decoration-none">
            ADD BG IMAGE
          </a>
        </button>
        <button  type="button" class="btn btn-sm btn-outline-secondary">
          <a href="{{ route('aboutus.add') }}" class="d-flex align-items-center text-black text-decoration-none">
            ADD NEW
          </a>
        </button>
      </div>
    </div>
  </div>
  <table class="table table-success table-striped">
    <thead>
      <tr>
        <th scope="col">Image</th>
        <th scope="col">Description</th>
        <th scope="col">Action</th>
      </tr>
    </thead>
    <tbody>
      @foreach($aboutus as $data)
      <tr>
        <td width="15%"><img src="{{ asset($data->image) }}" style="width: 100px; height: 100px;"></td>  
        <td>{{ $data->description }}</td>  
        <td width="15%">   
          <a href="{{ route('aboutus.edit', $data->id) }}" class="btn btn-info btn-sm" title="Edit Data">
            Edit 
          </a>
          <a href="{{ route('aboutus.delete', $data->id) }}" class="btn btn-danger btn-sm" title="Delete Data" id="delete">
            Delete
          </a>
        </td>
      </tr>
      @endforeach
    </tbody>
  </table>
</main> --}}
@endsection
