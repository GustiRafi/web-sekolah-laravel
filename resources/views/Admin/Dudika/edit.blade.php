@can('admin')
@extends('layouts.admin')
@section('admin-page')
<div class="body px-3">
    <h2 class="pb-3">Edit dudika</h2>
    <form action="/dashboard/dudika/{{ $dudika->id}}" class="mb-3" method="post" enctype="multipart/form-data">
        @method('put')
        @csrf
        <div class="form-floating mb-3">
            <input type="text" class="form-control @error('name')is-invalid @enderror" id="name" name="name"
                placeholder="dudika Name" value="{{ old('name', $dudika->name) }}" required>
            <label for="name">Name dudika</label>
            @error('name')
            <div class="invalid-feedback">
                {{ $message }}
            </div>
            @enderror
        </div>
        <button type="submit" class="btn btn-primary mt-3">Update dudika</button>
    </form>
</div>
</div>
@endsection
@endcan