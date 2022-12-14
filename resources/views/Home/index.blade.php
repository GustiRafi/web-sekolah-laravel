@extends('layouts.main')

@section('left-content')
<!-- konten Kiri -->
<div class="col-12 col-md-8">
    <div class="card shadow">
        <div class="px-3 pt-3">
            <div data-aos="fade-right">
                <h4>Berita </h4>
            </div>
            @foreach($beritas as $berita)
            <div data-aos="fade-right">
                <div class="card mb-3">
                    <a href="/berita/read/{{ $berita->slug }}" class="link-1 text-decoration-none">
                        <div class="row row-cols-2 g-0">
                            <div class="col-md-4 text-center">
                                <img src="{{ asset('storage/' . $berita->image) }}"
                                    class="img-fluid mx-2 rounded-5 my-3 " alt="" srcset="">
                            </div>
                            <div class="col-md-8">
                                <div class="card-body">
                                    <h6 class="card-title text-black"><strong>{{ $berita->title }}</strong></h6>
                                    <p class="card-text"><small class="text-muted">Posted
                                            {{ $berita->updated_at->diffForHumans() }}</small>
                                    </p>
                                    <p class="card-text"><small class="text-muted">Author :
                                            {{ $berita->user->name }}</small>
                                    </p>
                                </div>
                            </div>
                        </div>
                    </a>
                </div>
            </div>
            @endforeach
            <div class="row row-cols-1 row-cols-md-2 g-4 my-3">
                <div class="col-12 col-md-7 ">
                    <div data-aos="zoom-in">
                        <div class="card  ps-3 py-3 px-2 rounded-3 shadow-sm"
                            style="background-color:  rgb(212, 207, 207);">
                            @foreach($vidios as $vidio)
                            <h4>{{ $vidio->title }}</h4>
                            {!! $vidio->src !!}
                            @endforeach
                        </div>
                    </div>
                </div>
                <div class="col col-12 col-md-5 ">
                    <div data-aos="zoom-in">
                        <div class="card px-3 py-3 rounded-3 shadow-sm" style="background-color:  rgb(212, 207, 207);">
                            <h4>Info PPDB</h4>
                            @foreach($ppdbs as $ppdb)
                            <img src="{{ asset('storage/' . $ppdb->image) }}" alt="" srcset="">
                            <p class="pt-3">{{ $ppdb->excrept }}</p>
                            <a href="/ppdb/detail/" class="btn btn-primary">Detail</a>
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- end kontent kiri -->
@endsection