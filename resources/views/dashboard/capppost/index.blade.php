@extends('dashboard.layouts.main')

@section('container')
    <div class="table-responsive">
        <h1>Halaman APP</h1>

        @if (session()->has('success'))
            <div class="alert alert-success col-lg-8" role="alert">
                {{ session('success') }}
            </div>
        @endif

        <a href="/dashboard/cappposts/create" class="btn btn-primary mb-3">Create</a>
        <table class="table table-striped table-sm">
            <thead>
                <tr>
                    <th scope="col">No</th>
                    <th scope="col">Title</th>
                    <th scope="col">Deskripsi</th>
                    <th scope="col">Action</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($cappposts as $a)
                    <h1></h1>
                    <tr>
                        <td>{{ $loop->iteration }}</td>
                        <td>{{ $a->title }}</td>
                        <td>{{ $a->deskripsi }}</td>
                        <td>
                            <a href="/dashboard/cappposts/{{ $a->id }}" class="badge bg-info mb-2"><span
                                    data-feather="eye" class="align-text-bottom"></span></a>
                            <a href="/dashboard/cappposts/{{ $a->id }}/edit" class="badge bg-warning mb-2"><span
                                    data-feather="edit" class="align-text-bottom"></span></a>
                            <form action="/dashboard/cappposts/{{ $a->id }}" method="post" class="d-inline">
                                @method('delete')
                                @csrf
                                <button class="badge bg-danger border-0" onclick="return confirm('Are you sure?')"><span
                                        data-feather="x-circle" class="align-text-bottom"></button>
                            </form>
                        </td>

                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection
