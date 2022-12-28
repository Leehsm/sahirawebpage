@extends('admin.master')
@section('content')
@section('title')
FAQs
@endsection

<main class="col-md-8 ms-sm-auto col-lg-10 px-md-4">
  <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
    <h1 class="h2">FAQs</h1>
    <div class="btn-toolbar mb-2 mb-md-0">
      <div class="btn-group me-2" >
        <button  type="button" class="btn btn-sm btn-outline-secondary">
          <a href="{{ route('faq.add') }}" class="d-flex align-items-center text-black text-decoration-none">
            ADD NEW
          </a>
        </button>
      </div>
    </div>
  </div>
  <table class="table table-success table-striped">
    <thead>
      <tr>
        <th scope="col">Question</th>
        <th scope="col">Answer</th>
        <th scope="col">Action</th>
      </tr>
    </thead>
    <tbody>
      @foreach($faq as $data)
      <tr>
        <td scope="row">{{ $data->question }}</td> 
        <td scope="row">{{ $data->answer }}</td>  
        <td width="15%">   
          <a href="{{ route('faq.edit', $data->id) }}" class="btn btn-info btn-sm" title="Edit Data">
            Edit 
          </a>
          <a href="{{ route('faq.delete', $data->id) }}" class="btn btn-danger btn-sm" title="Delete Data" id="delete">
            Delete
          </a>
        </td>
      </tr>
      @endforeach
    </tbody>
  </table>
</main>
@endsection
