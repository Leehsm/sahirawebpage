@extends('admin.master')
@section('content')
@section('title')
FAQs
@endsection

<section class="section">
  <div class="row">
    <div class="col-lg-12">
      <div class="card">
        <div class="card-body">
          <h5 class="card-title"></h5>
          <table class="table datatable">
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
        </div>
      </div>
    </div>
  </div>
</section>
@endsection
