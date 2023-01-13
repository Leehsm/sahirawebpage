@extends('admin.master')
@section('content')
@section('title')
Our Teams
@endsection

<main class="col-md-8 ms-sm-auto col-lg-10 px-md-4" style="width: -webkit-calc(100% - 200px); width: calc(100% - 200px); float:right;">
  <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
    <h1 class="h2">Our Team</h1>
    <div class="btn-toolbar mb-2 mb-md-0">
      <div class="btn-group me-2" >
        <button  type="button" class="btn btn-sm btn-outline-secondary">
          <a href="{{ route('ourteam.add') }}" class="d-flex align-items-center text-black text-decoration-none">
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
        <th scope="col">Name</th>
        <th scope="col">Position</th>
        <th scope="col">Action</th>
      </tr>
    </thead>
    <tbody>
      @foreach($ourteam as $data)
      <tr>
        <td width="15%"><img src="{{ asset($data->image) }}" style="width: 100px; height: 100px;"></td> 
        <td scope="row">{{ $data->name }}</td> 
        <td scope="row">{{ $data->position }}</td> 
        <td width="15%">   
          <a href="{{ route('ourteam.edit', $data->id) }}" class="btn btn-info btn-sm" title="Edit Data">
            Edit 
          </a>
          <a href="{{ route('ourteam.delete', $data->id) }}" class="btn btn-danger btn-sm" title="Delete Data" id="delete">
            Delete
          </a>
        </td>
      </tr>
      @endforeach
    </tbody>
  </table>
</main>
@endsection
