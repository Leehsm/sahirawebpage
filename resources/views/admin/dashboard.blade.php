@extends('admin.master')
@section('content')
@section('title')
Admin Dashboard
@endsection

<main class="col-md-8 ms-sm-auto col-lg-10 px-md-4">  
  <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
    <h1 class="h2">Admin Dashboard</h1>
  </div>

  <h4>About Us</h4>
  <table class="table table-success table-striped">
    <thead>
      <tr>
        <th scope="col">Description</th>
        <th scope="col">Action</th>
      </tr>
    </thead>
    <tbody>
      <tr>
        <td scope="row">1</td>  
        <td width="15%">   
          <a href="#" class="btn btn-info btn-sm" title="Edit Data">
            Edit 
          </a>
          <a href="#" class="btn btn-danger btn-sm" title="Delete Data" id="delete">
            Delete
          </a>
      </td>
      </tr>
    </tbody>
  </table>

  <h4>Blog</h4>
  <table class="table table-success table-striped">
    <thead>
      <tr>
        <th scope="col">Description</th>
        <th scope="col">Action</th>
      </tr>
    </thead>
    <tbody>
      <tr>
        <td scope="row">1</td>  
        <td width="15%">   
          <a href="#" class="btn btn-info btn-sm" title="Edit Data">
            Edit 
          </a>
          <a href="#" class="btn btn-danger btn-sm" title="Delete Data" id="delete">
            Delete
          </a>
      </td>
      </tr>
    </tbody>
  </table>

  <h4>Contact Us</h4>
  <table class="table table-success table-striped">
    <thead>
      <tr>
        <th scope="col">Description</th>
        <th scope="col">Action</th>
      </tr>
    </thead>
    <tbody>
      <tr>
        <td scope="row">1</td>  
        <td width="15%">   
          <a href="#" class="btn btn-info btn-sm" title="Edit Data">
            Edit 
          </a>
          <a href="#" class="btn btn-danger btn-sm" title="Delete Data" id="delete">
            Delete
          </a>
      </td>
      </tr>
    </tbody>
  </table>

  <h4>FAQ</h4>
  <table class="table table-success table-striped">
    <thead>
      <tr>
        <th scope="col">Description</th>
        <th scope="col">Action</th>
      </tr>
    </thead>
    <tbody>
      <tr>
        <td scope="row">1</td>  
        <td width="15%">   
          <a href="#" class="btn btn-info btn-sm" title="Edit Data">
            Edit 
          </a>
          <a href="#" class="btn btn-danger btn-sm" title="Delete Data" id="delete">
            Delete
          </a>
      </td>
      </tr>
    </tbody>
  </table>

  <h4>Our Product</h4>
  <table class="table table-success table-striped">
    <thead>
      <tr>
        <th scope="col">Description</th>
        <th scope="col">Action</th>
      </tr>
    </thead>
    <tbody>
      <tr>
        <td scope="row">1</td>  
        <td width="15%">   
          <a href="#" class="btn btn-info btn-sm" title="Edit Data">
            Edit 
          </a>
          <a href="#" class="btn btn-danger btn-sm" title="Delete Data" id="delete">
            Delete
          </a>
      </td>
      </tr>
    </tbody>
  </table>

  <h4>Membership</h4>
  <table class="table table-success table-striped">
    <thead>
      <tr>
        <th scope="col">Description</th>
        <th scope="col">Action</th>
      </tr>
    </thead>
    <tbody>
      <tr>
        <td scope="row">1</td>  
        <td width="15%">   
          <a href="#" class="btn btn-info btn-sm" title="Edit Data">
            Edit 
          </a>
          <a href="#" class="btn btn-danger btn-sm" title="Delete Data" id="delete">
            Delete
          </a>
      </td>
      </tr>
    </tbody>
  </table>
</main>
@endsection
