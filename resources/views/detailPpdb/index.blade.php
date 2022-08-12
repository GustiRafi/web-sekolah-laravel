@extends('layouts.main')

@section('left-content')
<!-- konten Kiri -->
<div class="col-12 col-md-8">
    <div class="card shadow">
        <div class="px-3 pt-3">
            <div data-aos="fade-right">
                <div class="d-flex my-3">
                    <span class="border border-5 border-primary"></span>
                    <h4 class="ps-3">PPDB SMK Negeri 1 Bantul Tahun Pelajaran 2020/2021</h4>
                </div>
            </div>
            <div data-aos="fade-right">
                <div class="pt-3">
                    @foreach($ppdbs as $ppdb)
                    <div class="mb-3">
                        {!! $ppdb->body !!}
                    </div>
                    @endforeach
                    <table class="table">
                        <tr>
                            <th>NO</th>
                            <th>Kompetensi Keahlian</th>
                            <th>Rombel</th>
                            <th>Jumlah Siswa</th>
                        </tr>
                        @foreach($jurusans as $jurusan)
                        <tr>
                            <td>{{ $loop->iteration }}</td>
                            <td>{{ $jurusan->jurusan_name }}</td>
                            <td>{{ $jurusan->rombel }}</td>
                            <td>{{ $jurusan->jml_siswa }}</td>
                        </tr>
                        @endforeach
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- end kontent kiri -->
@endsection