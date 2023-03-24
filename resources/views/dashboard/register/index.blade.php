@extends('dashboard.layouts.main')

@section('container')
    <div class="table-responsive">
        <h1>Halaman Akun</h1>

        @if (session()->has('success'))
            <div class="alert alert-success col-lg-8" role="alert">
                {{ session('success') }}
            </div>
        @endif

        <a href="/dashboard/register/create" class="btn btn-primary mb-3">Create</a>
        <table class="table table-striped table-sm">
            <thead>
                <tr>
                    <th scope="col">No</th>
                    <th scope="col">Nama</th>
                    <th scope="col">Level</th>
                    <th scope="col">Email</th>
                    <th scope="col">password</th>
                    <th scope="col">Action</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($users as $data)
                    <h1></h1>
                    <tr>
                        <td>{{ $loop->iteration }}</td>
                        <td>{{ $data->name }}</td>
                        <td>{{ $data->level }}</td>
                        <td>{{ $data->email }}</td>
                        <td>{{ $data->password }}</td>

                        <td>


                            <form action="/dashboard/register/{{ $data->id }}" method="post" class="d-inline">
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
