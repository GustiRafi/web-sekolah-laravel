@can('admin')
@extends('layouts.admin')
@section('admin-page')
<div class="body px-3">
    <a href="/dashboard/vidio/create" class="btn btn-primary">Add new post</a>
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
            <th>Src</th>
            <th>action</th>
        </tr>
        @foreach($vidios as $vidio)
        <tr>
            <td>{{ $loop->iteration }}</td>
            <td>{{ $vidio->title }}</td>
            <td>{!! $vidio->src !!}</td>
            <td>
                <a href="/dashboard/vidio/{{ $vidio->id }}/edit"
                    class="badge bg-success text-decoration-none text-white"><i class="bi bi-pen">edit</i></a>
                <form action="/dashboard/vidio/{{ $vidio->id }}" method="post" class="d-inline">
                    @method('delete')
                    @csrf
                    <button type="submit" class="badge bg-danger border-0"
                        onclick="return confirm('Are you sure delete this data?')"><i
                            class="bi bi-trash">delete</i></button>
                </form>
            </td>
        </tr>
        @endforeach
    </table>
</div>
</div>
@endsection
@endcan