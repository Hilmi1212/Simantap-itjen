@extends('dashboard.layouts.main')

@section('container')
<h1></h1>
<h1></h1>
<h1></h1>
<h1></h1>
<div class="card" style="width: 28rem; ">
  <div class="card-body">
    <h5 class="card-title">{{ $cauditorpost->title }}</h5>
    <p class="card-text">{{ $cauditorpost->deskripsi }}</p>
    <a href="/dashboard/cauditorposts" class="btn btn-success"><span data-feather="arrow-left"></span>Back</a>
    <a href="/dashboard/cauditorposts/{{$cauditorpost->id}}/edit" class="btn btn-warning"><span data-feather="edit"></span>Edit</a>
    <form action="/dashboard/cauditorposts/{{$cauditorpost->id}}" method="post" class="d-inline">
      @method('delete')
      @csrf
      <button class="btn btn-danger " onclick="return confirm('Are you sure?')"><span data-feather="x-circle" class="align-text-bottom"></span>Delete</button>
    </form>
  </div>
</div>
@endsection