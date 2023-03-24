@extends('dashboard.layouts.main')

@section('container')
<h1></h1>
<h1></h1>
<h1></h1>
<h1></h1>
<div class="card" style="width: 28rem; ">
  <div class="card-body">
    <h5 class="card-title">{{ $capppost->title }}</h5>
    <p class="card-text">{{ $capppost->deskripsi }}</p>
    <a href="/dashboard/cappposts" class="btn btn-success"><span data-feather="arrow-left"></span>Back</a>
    <a href="/dashboard/cappposts/{{$capppost->id}}/edit" class="btn btn-warning"><span data-feather="edit"></span>Edit</a>
    <form action="/dashboard/cappposts/{{$capppost->id}}" method="post" class="d-inline">
      @method('delete')
      @csrf
      <button class="btn btn-danger " onclick="return confirm('Are you sure?')"><span data-feather="x-circle" class="align-text-bottom"></span>Delete</button>
    </form>
  </div>
</div>
@endsection