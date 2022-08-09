@can('admin')
@extends('layouts.admin')
@section('admin-page')
<div class="body px-3">
    <h2 class="pb-3">Create</h2>
    <form action="/dashboard/vidio/" class="mb-3" method="post" enctype="multipart/form-data">
        @csrf
        <div class="form-floating mb-3">
            <input type="text" class="form-control @error('title')is-invalid @enderror" id="title" name="title"
                placeholder="vidio Name" value="{{ old('title') }}" required>
            <label for="title">Name vidio</label>
            @error('title')
            <div class="invalid-feedback">
                {{ $message }}
            </div>
            @enderror
        </div>
        <div class="form-floating mb-3">
            <input type="text" class="form-control @error('src')is-invalid @enderror" id="src" name="src"
                placeholder="vidio SRC" value="{{ old('src') }}" required>
            <label for="src">vidio src</label>
            @error('src')
            <div class="invalid-feedback">
                {{ $message }}
            </div>
            @enderror
        </div>
        <button type="submit" class="btn btn-primary mt-3">Post</button>
    </form>
</div>
</div>
@endsection
@endcan