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

    <table class="table table-responsive mt-3">
        <tr>
            <th>No</th>
            <th>title</th>
            <th>image</th>
            <th>action</th>
        </tr>
        @foreach($sejarahs as $sejarah)
        <tr>
            <td>{{ $loop->iteration }}</td>
            <td>{{ $sejarah->title }}</td>
            <td><img src="{{ asset('storage/' . $sejarah->image) }}" class="d-block img-fluid mb-3 col-sm-5"></td>
            <td>
                <a href="/dashboard/sejarah/{{ $sejarah->id }}"
                    class="badge bg-primary text-decoration-none text-white"><i class="bi bi-eye-fill">view</i></a>
                <a href="/dashboard/sejarah/{{ $sejarah->id }}/edit"
                    class="badge bg-success text-decoration-none text-white"><i class="bi bi-pen">edit</i></a>
            </td>
        </tr>
        @endforeach
    </table>
</div>
</div>
@endsection
@endcan