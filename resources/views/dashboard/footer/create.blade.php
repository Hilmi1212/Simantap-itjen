@extends ('dashboard.layouts.main')

@section('container')
    <h1>Create</h1>

    <form method="post" action="/dashboard/footer">
        @csrf
        <div class="mb-3">
            <label for="notlp" class="form-label">No HP</label>
            <input type="text" class="form-control @error('notlp') is-invalid @enderror" id="notlp" name="notlp"
                name="notlp">
            @error('notlp')
                <div class="invalid-feedback">
                    {{ $message }}
                </div>
            @enderror
        </div>
        <div class="mb-3">
            <label for="email" class="form-label">Email</label>
            <input type="text" class="form-control @error('email') is-invalid @enderror" id="email" name="email"
                name="email">
            @error('email')
                <div class="invalid-feedback">
                    {{ $message }}
                </div>
            @enderror
        </div>
        <div class="mb-3">
            <label for="footer" class="form-label">Footer</label>
            <input type="text" class="form-control @error('footer') is-invalid @enderror" id="footer" name="footer"
                name="footer">
            @error('footer')
                <div class="invalid-feedback">
                    {{ $message }}
                </div>
            @enderror
        </div>
        <button type="submit" class="btn btn-primary">Create</button>
    </form>
@endsection
