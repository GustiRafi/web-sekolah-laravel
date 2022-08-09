@can('admin')
@extends('layouts.admin')
@section('admin-page')
<div class="body px-3">
    <a href="/dashboard/dudika/create" class="btn btn-primary">Add new post</a>
    @if(session('success'))
    <div class="alert alert-success alert-dismissible fade show my-3" role="alert">
        {{ session('success') }}
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>
    @endif

    <table class="table table-responsive mt-3">
        <tr>
            <th>No</th>
            <th>Name</th>
            <th>action</th>
        </tr>
        @foreach($dudikas as $dudika)
        <tr>
            <td>{{ $loop->iteration }}</td>
            <td>{{ $dudika->name }}</td>
            <td>
                <a href="/dashboard/dudika/{{ $dudika->id }}/edit"
                    class="badge bg-success text-decoration-none text-white"><i class="bi bi-pen">edit</i></a>
                <form action="/dashboard/dudika/{{ $dudika->id }}" method="post" class="d-inline">
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