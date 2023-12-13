@extends('admin.master')
@section('content')
@section('title')
Admin Dashboard
@endsection

<div class="pagetitle">
  <h1>Dashboard</h1>
  <nav>
    <ol class="breadcrumb">
      <li class="breadcrumb-item"><a href="index.html">Dashboard</a></li>
    </ol>
  </nav>
</div><!-- End Page Title -->

<section class="section">
  <div class="row">
      <div class="col-lg-12">
          <div class="card">
              <div class="card-body">
                  <h5 class="card-title"></h5>

                  <h4>About Us</h4>
                  <table class="table ">
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
                </div>
            </div>
        </div>
    </div>
  </section>
                  
                  <br>
<section class="section">
  <div class="row">
      <div class="col-lg-12">
          <div class="card">
              <div class="card-body">
                  <h5 class="card-title"></h5>
                  <h4>Our Teams</h4>
                  <table class="table ">
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
                </div>
            </div>
        </div>
    </div>
  </section>

                  <br>
<section class="section">
  <div class="row">
      <div class="col-lg-12">
          <div class="card">
              <div class="card-body">
                  <h5 class="card-title"></h5>
                  <h4>Blog</h4>
                  <table class="table ">
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
                </div>
            </div>
        </div>
    </div>
  </section>

                  <br>
<section class="section">
  <div class="row">
      <div class="col-lg-12">
          <div class="card">
              <div class="card-body">
                  <h5 class="card-title"></h5>
                  <h4>Contact Us</h4>
                  <table class="table ">
                    <thead>
                      <tr>
                        <th scope="col">Image</th>
                        <th scope="col">Name</th>
                        <th scope="col">Link</th>
                        <th scope="col">Action</th>
                      </tr>
                    </thead>
                    <tbody>
                      @foreach($contactus as $data)
                      <tr>
                        <td width="15%"><img src="{{ asset($data->image) }}" style="width: 100px; height: 100px;"></td> 
                        <td width="15%">{{ $data->name }}</td> 
                        <td width="15%">{{ $data->desc_link }}</td>  
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
                </div>
            </div>
        </div>
    </div>
  </section>

                  <br>
<section class="section">
  <div class="row">
      <div class="col-lg-12">
          <div class="card">
              <div class="card-body">
                  <h5 class="card-title"></h5>
                  <h4>FAQ</h4>
                  <table class="table ">
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

                  <br>
<section class="section">
  <div class="row">
      <div class="col-lg-12">
          <div class="card">
              <div class="card-body">
                  <h5 class="card-title"></h5>
                  <h4>Our Product</h4>
                  <table class="table ">
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
                </div>
            </div>
        </div>
    </div>
  </section>

                  <br>
<section class="section">
  <div class="row">
      <div class="col-lg-12">
          <div class="card">
              <div class="card-body">
                  <h5 class="card-title"></h5>
                  <h4>MembershipFE</h4>
                  <table class="table ">
                    <thead>
                      <tr>
                        <th scope="col">Image</th>
                        <th scope="col">Description</th>
                        <th scope="col">Action</th>
                      </tr>
                    </thead>
                    <tbody>
                      @foreach($membershipFE as $data)
                      <tr>
                        <td width="15%"><img src="{{ asset($data->image) }}" style="width: 100px; height: 100px;"></td> 
                        <td scope="row">{{ $data->desc }}</td> 
                        <td width="15%">   
                          <a href="{{ route('membershipFE.edit', $data->id) }}" class="btn btn-info btn-sm" title="Edit Data">
                            Edit 
                          </a>
                          <a href="{{ route('membershipFE.delete', $data->id) }}" class="btn btn-danger btn-sm" title="Delete Data" id="delete">
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

                  <br>
<section class="section">
  <div class="row">
      <div class="col-lg-12">
          <div class="card">
              <div class="card-body">
                  <h5 class="card-title"></h5>
                  <h4>Membership</h4>
                  <table class="table ">
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
