@extends('dashboard.layouts.main')

@section('container')
<h1></h1>
<h1></h1>
<h1></h1>
<h1></h1>
<div class="card" style="width: 28rem; ">
  <div class="card-body">
    <h5 class="card-title">{{ $ctupost->title }}</h5>
    <p class="card-text">{{ $ctupost->deskripsi }}</p>
    <a href="/dashboard/ctuposts" class="btn btn-success"><span data-feather="arrow-left"></span>Back</a>
    <a href="/dashboard/ctuposts/{{$ctupost->id}}/edit" class="btn btn-warning"><span data-feather="edit"></span>Edit</a>
    <form action="/dashboard/ctuposts/{{$ctupost->id}}" method="post" class="d-inline">
      @method('delete')
      @csrf
      <button class="btn btn-danger " onclick="return confirm('Are you sure?')"><span data-feather="x-circle" class="align-text-bottom"></span>Delete</button>
    </form>
  </div>
</div>
@endsection