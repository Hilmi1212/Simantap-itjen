@extends('dashboard.layouts.main')

@section('container')
<h1></h1>
<h1></h1>
<h1></h1>
<h1></h1>
<div class="card" style="width: 28rem; ">
            <div class="card-body">
            <h5 class="card-title">{{ $appcpost->title }}</h5>
            <p class="card-text">{{ $appcpost->deskripsi }}</p>
            <a href= {{ $appcpost->link }} class="btn btn-primary">Go</a>
            <a href= "/dashboard/appcposts"class="btn btn-success"><span data-feather="arrow-left"></span>Back</a>
            <a href= "/dashboard/appcposts/{{$appcpost->id}}/edit"class="btn btn-warning"><span data-feather="edit"></span>Edit</a>
            <form action="/dashboard/appcposts/{{$appcpost->id}}" method="post" class="d-inline">
                  @method('delete')
                  @csrf
                  <button class="btn btn-danger " onclick="return confirm('Are you sure?')"><span data-feather="x-circle" class="align-text-bottom"></span>Delete</button>
                </form>
          </div>
        </div>
@endsection