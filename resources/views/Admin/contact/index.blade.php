@can('admin')
@extends('layouts.admin')
@section('admin-page')
<div class="body px-3">
    @if(session('success'))
    <div class="alert alert-success alert-dismissible fade show my-3" role="alert">
        {{ session('success') }}
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>
    @endif

    <h4>Kontak</h4>
    <ul>
        @foreach($contacts as $contact)
        <a href="/dashboard/contact/{{ $contact->id }}/edit" class="badge bg-success text-decoration-none text-white"><i
                class="bi bi-pen">edit</i></a>
        <li>{{ $contact->alamat }}</li>
        <li>{{ $contact->email }}</li>
        <li>{{ $contact->telp }}</li>
        <li>{{ $contact->fax }}</li>
        @endforeach
    </ul>
</div>
</div>
@endsection
@endcan