@extends ('dashboard.layouts.main')

@section('container')
    <h1>Create</h1>

    <!DOCTYPE html>
    <html lang="en">



    <body class="hold-transition register-page">
        <div class="register-box">
            <div class="register-logo">

            </div>

            <div class="card">
                <div class="card-body register-card-body">

                    @if ($errors->any())
                        @foreach ($errors->all() as $err)
                            <p class="alert alert-danger">{{ $err }}</p>
                        @endforeach
                    @endif
                    <form action="{{ route('simpanregister') }}" method="post">
                        {{ csrf_field() }}
                        <div class="input-group mb-3">
                            <input type="text" class="form-control" name="name" placeholder="Full name">

                            <div class="input-group-text">
                                <span class="fas fa-user"></span>

                            </div>
                        </div>
                        <div class="input-group mb-3">
                            <select class="form-select form-select-sm" name="level" aria-label=".form-select-sm example">
                                <option selected>Select Level :</option>
                                <option value="admin">Admin</option>
                                <option value="usertu">TU</option>
                                <option value="auditor">Auditor</option>
                                <option value="App1">App1</option>
                                <option value="App2">App2</option>
                                <option value="App3">App3</option>
                            </select>


                        </div>

                        <div class="input-group mb-3">
                            <input type="email" class="form-control" name="email" placeholder="Email">

                            <div class="input-group-text">
                                <span class="fas fa-envelope"></span>
                            </div>

                        </div>
                        <div class="input-group mb-3">
                            <input type="password" class="form-control" name="password" placeholder="Password">

                            <div class="input-group-text">
                                <span class="fas fa-lock"></span>
                            </div>

                        </div>

                        <div class="row">
                            <div class="col-8">
                            </div>
                            <!-- /.col -->
                            <div class="col-8">
                                <button type="submit" class="btn btn-primary btn-block">Tambah Akun</button>
                            </div>
                            <!-- /.col -->
                        </div>
                    </form>

                </div>
                <!-- /.form-box -->
            </div><!-- /.card -->
        </div>
        <!-- /.register-box -->

        <!-- jQuery -->
    </body>

    </html>
@endsection
