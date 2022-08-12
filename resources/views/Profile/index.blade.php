@extends('layouts.main')

@section('left-content')
<div class="col-12 col-md-8">
    <div class="card shadow">
        <div class="ps-3 pt-3">
            <div data-aos="fade-right">
                <h4>Sejarah Singkat</h4>
            </div>

            <div class="card mb-3 me-3">
                <div class="row g-0">
                    @foreach($sejarahs as $sejarah)
                    <div class="col-md-4">
                        <div data-aos="fade-right">
                            <img src="{{ asset('storage/' . $sejarah->image) }}" alt="" srcset="">
                        </div>
                    </div>
                    <div class="col-md-8">
                        <div data-aos="fade-right">
                            <div class="card-body">
                                <div class="card-text ms-3">{!! $sejarah->body !!}</div>
                            </div>
                        </div>
                    </div>
                    @endforeach
                </div>
            </div>
        </div>
        <div class="py-3 px-3">
            <div data-aos="fade-right">
                <h4>Visi Misi</h4>
            </div>
            <div class="row row-cols-1 row-cols-2 g-4 mt-3">
                @foreach($goals as $goal)
                <div class="col-12 col-md-6">
                    <div data-aos="zoom-in-down">
                        <div class="px-3 py-3 rounded-3 shadow-sm" style="background-color:  rgb(212, 207, 207);">
                            <h5>{{ $goal->title }}</h5>
                            {!! $goal->body !!}
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
        <div class="py-3 px-3">
            <div data-aos="fade-right">
                <h4>Bidang Keahlian</h4>
            </div>
            <div class="row row-cols-1 row-cols-2 g-4 mt-3">
                @foreach($jurusans as $jurusan)
                <div class="col-12 col-md-6">
                    <div data-aos="flip-up">
                        <div class="d-flex rounded-3 shadow-sm" style="background-color:  rgb(212, 207, 207);">
                            <span class="border border-5 border-primary"></span>
                            <h5 class="py-3 ps-3">{{ $jurusan->jurusan_name }}</h5>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </div>
</div>
@endsection