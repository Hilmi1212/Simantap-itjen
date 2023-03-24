@extends('dashboard.layouts.main')

@section('container')
<h1></h1>
<h1></h1>
<h1></h1>
<h1></h1>
<div class="card" style="width: 28rem; ">
  <div class="card-body">
    <h5 class="card-title">{{ $cappcpost->title }}</h5>
    <p class="card-text">{{ $cappcpost->deskripsi }}</p>
    <a href="/dashboard/cappcposts" class="btn btn-success"><span data-feather="arrow-left"></span>Back</a>
    <a href="/dashboard/cappcposts/{{$cappcpost->id}}/edit" class="btn btn-warning"><span data-feather="edit"></span>Edit</a>
    <form action="/dashboard/cappcposts/{{$cappcpost->id}}" method="post" class="d-inline">
      @method('delete')
      @csrf
      <button class="btn btn-danger " onclick="return confirm('Are you sure?')"><span data-feather="x-circle" class="align-text-bottom"></span>Delete</button>
    </form>
  </div>
</div>
@endsection