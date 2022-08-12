@can('admin')
@extends('layouts.admin')
@section('admin-page')
<div class="body px-3">
    <h2 class="pb-3">Edit Article</h2>
    <form action="/dashboard/contact/{{ $contact->id }}" class="mb-3" method="post" enctype="multipart/form-data">
        @method('put')
        @csrf
        <input type="text" name="id" id="id" value="{{ $contact->id }}" hidden>
        <div class="form-floating mb-3">
            <input type="text" class="form-control @error('alamat')is-invalid @enderror" id="alamat" name="alamat"
                placeholder="alamat" value="{{ old('alamat', $contact->alamat) }}" required>
            <label for="alamat">alamat</label>
            @error('alamat')
            <div class="invalid-feedback">
                {{ $message }}
            </div>
            @enderror
        </div>
        <div class="form-floating mb-3">
            <input type="email" class="form-control @error('email')is-invalid @enderror" id="email" name="email"
                placeholder="email" value="{{ old('email', $contact->email) }}" required>
            <label for="email">email</label>
            @error('email')
            <div class="invalid-feedback">
                {{ $message }}
            </div>
            @enderror
        </div>
        <div class="form-floating mb-3">
            <input type="text" class="form-control @error('telp')is-invalid @enderror" id="telp" name="telp"
                placeholder="telp" value="{{ old('telp', $contact->telp) }}" required>
            <label for="telp">telp</label>
            @error('telp')
            <div class="invalid-feedback">
                {{ $message }}
            </div>
            @enderror
        </div>
        <div class="form-floating mb-3">
            <input type="text" class="form-control @error('fax')is-invalid @enderror" id="fax" name="fax"
                placeholder="fax" value="{{ old('fax', $contact->fax) }}" required>
            <label for="fax">fax</label>
            @error('fax')
            <div class="invalid-feedback">
                {{ $message }}
            </div>
            @enderror
        </div>
        <button type="submit" class="btn btn-primary mt-3">Update Post</button>
    </form>
</div>
</div>
@endsection
@endcan