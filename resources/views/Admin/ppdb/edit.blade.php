@can('admin')
@extends('layouts.admin')
@section('admin-page')
<div class="body px-3">
    <h2 class="pb-3">Edit Article</h2>
    <form action="/dashboard/ppdb/{{ $ppdb->id }}" class="mb-3" method="post" enctype="multipart/form-data">
        @method('put')
        @csrf
        <input type="text" name="id" id="id" value="{{ $ppdb->id }}" hidden>
        <div class="form-floating mb-3">
            <input type="text" class="form-control @error('excrept')is-invalid @enderror" id="excrept" name="excrept"
                placeholder="excrept" value="{{ old('excrept', $ppdb->excrept) }}" required>
            <label for="excrept">excrept</label>
            @error('excrept')
            <div class="invalid-feedback">
                {{ $message }}
            </div>
            @enderror
        </div>
        <div class="mb-3">
            <label for="image" class="form-label">news image</label>
            <input type="text" name="oldimage" id="oldimage" value="{{ $ppdb->image }}" hidden>
            @if($ppdb->image)
            <img src="{{ asset('storage/' . $ppdb->image) }}" class="d-block img-fluid mb-3 col-sm-5" id="output">
            @else
            <img class="d-block img-fluid mb-3 col-sm-5" id="output">
            @endif
            <input class="form-control @error('image')is-invalid @enderror" type="file" id="image" name="image"
                onchange="loadFile(event)">
            @error('image')
            <div class="invalid-feedback">
                {{ $message }}
            </div>
            @enderror
        </div>
        <label for="body mb-3">body</label>
        <div class="form-floating mt-3">
            @error('body')
            <div class="alert alert-danger my-3" role="alert">
                {{ $message }}
            </div>
            @enderror
            <input id="body" type="hidden" name="body" value="{{ old('body', $ppdb->body) }}">
            <trix-editor input="body"></trix-editor>
        </div>
        <button type="submit" class="btn btn-primary mt-3">Update Post</button>
    </form>
</div>
</div>
@endsection
@endcan