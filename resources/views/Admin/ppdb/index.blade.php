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

    @foreach($ppdbs as $ppdb)
    <img src="{{ asset('storage/' . $ppdb->image) }}" alt="{{ $ppdb->image }}" srcset="">

    <a href="/dashboard/ppdb/{{ $ppdb->id }}/edit" class="badge bg-success text-decoration-none text-white"><i
            class="bi bi-pen">edit</i></a>
    {!! $ppdb->body !!}

    @endforeach
</div>
</div>
@endsection
@endcan