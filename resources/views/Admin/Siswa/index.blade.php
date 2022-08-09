@can('admin')
@extends('layouts.admin')
@section('admin-page')
<div class="body px-3">
    <div class="row row-cols-lg-2 row-cols-sm-1">
        <div class="col">
            <a href="/dashboard/Siswa/create" class="btn btn-primary mt-4">Add new post</a>
        </div>
        <div class="col mt-4">
            <form action="/dashboard/Siswa" class="d-flex ">
                <input class="form-control me-2" name="search" id="search" type="search"
                    placeholder="Cari berdasarkan nama Jurusan" value="{{ request('search') }}">
                <button class="btn btn-primary" type="submit">Search</button>
            </form>
        </div>
    </div>
    @if(session('success'))
    <div class="alert alert-success alert-dismissible fade show my-3" role="alert">
        {{ session('success') }}
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>
    @endif

    <table class="table table-responsive mt-3">
        <tr>
            <th>No</th>
            <th>name</th>
            <th>gender</th>
            <th>action</th>
        </tr>
    </table>
</div>
</div>
@endsection
@endcan