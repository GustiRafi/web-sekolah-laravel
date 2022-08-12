@extends('layouts.main')
@section('left-content')
<div class="col-12 col-md-8">
    <div class="card shadow">
        <div class="px-3 pt-3">
            <h4>Direktori Peserta Didik</h4>
            <div class="my-3">
                <div class="row ">
                    <div class="col-12 col-md-6">
                        <form action="/Siswa" class="d-flex ">
                            <select name="search" class="form-select" id="search">
                                <option value="">--Pilih Jurusan--</option>
                                @foreach($jurusans as $jurusan)
                                @if( request('search') == $jurusan->jurusan_name )
                                <option value="{{ $jurusan->jurusan_name }}" selected>{{ $jurusan->jurusan_name }}
                                </option>
                                @else
                                <option value="{{ $jurusan->jurusan_name }}">{{ $jurusan->jurusan_name }}</option>
                                @endif
                                @endforeach
                            </select>
                            <button class="btn btn-primary" type="submit">Search</button>
                        </form>
                    </div>
                </div>
            </div>
            <table class="table table-striped w-100 text-center">
                <tr class="border-2 border-end-0 border-start-0 border-dark">
                    <th>No</th>
                    <th>Foto</th>
                    <th>Nama</th>
                    <th>Jenis Kelamin</th>
                </tr>
                @foreach($siswas as $siswa)
                <tr>
                    <td>{{ $loop->iteration }}</td>
                    <td><img src="{{ asset('storage/' . $siswa->image) }}" class="d-block img-fluid mb-3 col-sm-5"></td>
                    <td>{{ $siswa->name }}</td>
                    <td>{{ $siswa->gender }}</td>
                </tr>
                @endforeach
            </table>
            {{ $siswas->links() }}


            <div class="row row-cols-1 row-cols-md-2 g-4 my-3">

                <div class="col-12 col-md-8">
                    <div data-aos="fade-right" data-aos-delay="500">
                        <div class="my-3 rounded-3 shadow-sm" style="background-color:  rgb(212, 207, 207);">
                            <div class="bg-info rounded-3 ">
                                <h5 class=" py-3 px-3">Testimoni Alumni SKANSABA</h5>
                            </div>
                            <div class="px-3 py-3">
                                <p>Alumni SMKN 1 Bantul sekarang ini sekitar 40% kuliah di PTN dan PTS, yang
                                    tersebar di berbagai Perguruan Tinggi di Indonesia. Sebagian langsung
                                    bekerja di
                                    Perusahaan Swasta, BUMN maupun Instansi Pemerintah, serta menciptakan
                                    lapangan
                                    kerja mandiri berwirausaha.</p>
                                <hr>
                                <div class="d-flex">
                                    @foreach($testimonis as $testi)
                                    <div class="ms-2">
                                        <p class="ps-2"><strong>{{ $testi->name }}</strong></p>
                                        {!! $testi->description !!}
                                    </div>
                                    @endforeach
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
</div>
@endsection