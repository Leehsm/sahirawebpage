@extends('admin.master')
@section('content')
@section('title')
Blogs
@endsection

<main class="col-md-8 ms-sm-auto col-lg-10 px-md-4">
  <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
    <h1 class="h2">Blog</h1>
    <div class="btn-toolbar mb-2 mb-md-0">
      <div class="btn-group me-2" >
        <button  type="button" class="btn btn-sm btn-outline-secondary">
          <a href="{{ route('blog.add') }}" class="d-flex align-items-center text-black text-decoration-none">
            ADD NEW
          </a>
        </button>
      </div>
    </div>
  </div>

  <canvas class="my-4 w-100 chartjs-render-monitor" id="myChart" width="546" height="230" style="display: block; width: 546px; height: 230px;"></canvas>
</main>
@endsection
