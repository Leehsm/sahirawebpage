@extends('admin.master')
@section('content')
@section('title')
Edit FAQ
@endsection

<main class="col-md-8 ms-sm-auto col-lg-10 px-md-4" style="width: -webkit-calc(100% - 200px); width: calc(100% - 200px); float:right;">  
    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2">Edit FAQ</h1>
    </div>
    <form method="post" action="{{ route('faq.update') }}" enctype="multipart/form-data">
        @csrf
        <input type="hidden" name="id" value="{{ $faq->id }}">
        <div class="mb-3">
            <label for="question" class="form-label">Question</label>
            <input type="text" class="form-control" name="question" id="question" value="{{ $faq->question }}">
        </div>
        <div class="mb-3">
            <label for="answer" class="form-label">Answer</label>
            <input type="text" class="form-control" name="answer" id="answer" value="{{ $faq->answer }}">
        </div>
        <div class="text-xs-right">
            <input type="submit" class="btn btn-rounded btn-primary mb-5" value="Update">					 
        </div>
    </form>
</main>
@endsection
