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

  <h4>Our Teams</h4>
  <table class="table table-success table-striped">
    <thead>
      <tr>
        <th scope="col">Image</th>
        <th scope="col">name</th>
        <th scope="col">Position</th>
        <th scope="col">Action</th>
      </tr>
    </thead>
    <tbody>
      @foreach($ourteam as $data)
      <tr>
        <td width="15%"><img src="{{ asset($data->image) }}" style="width: 100px; height: 100px;"></td>  
        <td>{{ $data->name }}</td>   
        <td>{{ $data->position }}</td>  
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

  <h4>Blog</h4>
  <table class="table table-success table-striped">
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

  <h4>Contact Us</h4>
  <table class="table table-success table-striped">
    <thead>
      <tr>
        <th scope="col">Image</th>
        <th scope="col">Email</th>
        <th scope="col">Phone 1</th>
        <th scope="col">Phone 2</th>
        <th scope="col">Action</th>
      </tr>
    </thead>
    <tbody>
      @foreach($contactus as $data)
      <tr>
        <td width="15%"><img src="{{ asset($data->image) }}" style="width: 100px; height: 100px;"></td> 
        <td width="15%">{{ $data->email }}</td> 
        <td width="15%">{{ $data->phone_1 }}</td>  
        <td width="15%">{{ $data->phone_2 }}</td>  
        <td width="15%">   
          <a href="{{ route('contactus.edit', $data->id) }}" class="btn btn-info btn-sm" title="Edit Data">
            Edit 
          </a>
          <a href="{{ route('contactus.delete', $data->id) }}" class="btn btn-danger btn-sm" title="Delete Data" id="delete">
            Delete
          </a>
        </td>
      </tr>
      @endforeach
    </tbody>
  </table>

  <h4>FAQ</h4>
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

  <h4>Our Product</h4>
  <table class="table table-success table-striped">
    <thead>
      <tr>
        <th scope="col">Image</th>
        <th scope="col">Name</th>
        <th scope="col">Description</th>
        <th scope="col">Action</th>
      </tr>
    </thead>
    <tbody>
      @foreach($ourproduct as $data)
      <tr>
        <td width="15%"><img src="{{ asset($data->image) }}" style="width: 100px; height: 100px;"></td> 
        <td scope="row">{{ $data->name }}</td> 
        <td scope="row">{{ $data->descriptiom }}</td> 
        <td width="15%">   
          <a href="{{ route('ourproduct.edit', $data->id) }}" class="btn btn-info btn-sm" title="Edit Data">
            Edit 
          </a>
          <a href="{{ route('ourproduct.delete', $data->id) }}" class="btn btn-danger btn-sm" title="Delete Data" id="delete">
            Delete
          </a>
        </td>
      </tr>
      @endforeach
    </tbody>
  </table>

  <h4>Membership</h4>
  <table class="table table-success table-striped">
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
  <br>
</main>
@endsection
