@extends('layouts.main')
@section('left-content')
<div class="col-12 col-md-8">
    <div class="card shadow">
        <div class="px-3 py-3">
            <div data-aos="fade-right">
                <h4>Galery Photo</h4>
            </div>
            <div class="row row-cols-1 row-cols-md-2 g-4">
                @foreach($galeris as $galeri)
                <div class="col">
                    <div data-aos="zoom-in">
                        <a type="button" data-bs-toggle="modal" data-bs-target="#staticBackdrop">
                            <div class="card">
                                <img src="{{ asset('storage/' . $galeri->image) }}" alt="" srcset="">
                            </div>
                        </a>
                    </div>
                </div>
                @endforeach
                {{ $galeris->links() }}
            </div>
        </div>
        <div data-aos="fade-right">
            <div class="border border-5 border-info"></div>
        </div>
        <div class="px-3 py-3">
            <div data-aos="fade-right">
                <h4>Galery Video</h4>
            </div>
            <div class="row row-cols-1 row-cols-md-2 g-4 mt-3">
                @foreach($vidios as $vidio)
                <div class="col">
                    <div data-aos="zoom-in">
                        <div class="card">
                            {!! $vidio->src !!}
                        </div>
                    </div>
                </div>
                @endforeach
                {{ $vidios->links() }}
            </div>
        </div>
    </div>
</div>
@endsection