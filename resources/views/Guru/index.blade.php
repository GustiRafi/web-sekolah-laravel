@extends('layouts.main')
@section('left-content')
<div class="col-12 col-md-8">
    <div class="card shadow">
        <div class="px-3 pt-3">
            <h4>Guru Dan Tenaga Kependidikan </h4>
            <table class="table table-striped w-100 text-center">
                <tr class="border-2 border-end-0 border-start-0 border-dark">
                    <th>No</th>
                    <th>Foto</th>
                    <th>Nama</th>
                    <th>Jenis Kelamin</th>
                </tr>
                @foreach($teachers as $guru)
                <tr>
                    <td>{{ $loop->iteration }}</td>
                    <td><img src="{{ asset('storage/' . $guru->image) }}" class="d-block img-fluid mb-3 col-sm-5"></td>
                    <td>{{ $guru->name }}</td>
                    <td>{{ $guru->gender }}</td>
                </tr>
                @endforeach
            </table>
            {{ $teachers->links() }}
        </div>
    </div>
</div>
@endsection