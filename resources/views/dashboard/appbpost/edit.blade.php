@extends ('dashboard.layouts.main')

@section ('container')
<h1>Edit</h1>

    <form method="post" action="/dashboard/appbposts/{{ $appbpost->id }}">   
    @method('put')
    @csrf
    <div class="mb-3">
        <label for="title" class="form-label">Title</label>
        <input type="text" class="form-control @error('title') is-invalid @enderror" id="title" name="title"
        name="title" required autofocus value="{{ old('title',$appbpost->title)}}">
        @error('title')
        <div class="invalid-feedback">
            {{ $message }} 
        </div>
        @enderror
    </div>
    <div class="mb-3">
        <label for="deskripsi" class="form-label">Deskripsi</label>
        <input type="text" class="form-control @error('deskripsi') is-invalid @enderror" id="deskripsi" name="deskripsi"
        name="deskripsi" required value="{{ old('deskripsi',$appbpost->deskripsi)}}">
        @error('deskripsi')
        <div class="invalid-feedback">
            {{ $message }} 
        </div>
        @enderror
    </div>
    <div class="mb-3">
        <label for="link" class="form-label">Link</label>
        <input type="text" class="form-control @error('link') is-invalid @enderror" id="link" name="link"
        name="link" required value="{{ old('link',$appbpost->link)}}">
        @error('link')
        <div class="invalid-feedback">
            {{ $message }} 
        </div>
        @enderror
    </div>
    <button type="submit" class="btn btn-primary">Create</button>
    </form>



@endsection