@extends('layouts.main')

@section('left-content')
<div class="col-12 col-md-8">
    <div class="card shadow">
        <div class="px-3 py-3">
            <div data-aos="fade-right">
                <h4>BKK</h4>
                <p>Daftar Dudika yg kerjasama dg BKK antara lain :
                </p>
            </div>
            <div data-aos="fade-right">
                <ol>
                    @foreach($dudikas as $dudika)
                    <li>{{ $dudika->name }}</li>
                    @endforeach
                </ol>
            </div>
            <div data-aos="fade-right">
                <h4>Lowongan Pekerjaan</h4>
            </div>
            <div data-aos="fade-right">
                <div class="border border-5 border-info"></div>
            </div>
            <div class="row row-cols-1 row-cols-md-2 g-4 my-3">
                @foreach($lowkers as $lowker)
                <div class="col">
                    <div data-aos="zoom-in">
                        <a href="/lowongan/detail/{{ $lowker->slug }}">
                            <div class="card">
                                <img src="{{ asset('storage/' . $lowker->image) }}" alt="" srcset="">
                            </div>
                        </a>
                    </div>
                </div>
                @endforeach
                {{ $lowkers->links() }}

            </div>
        </div>
    </div>
</div>
@endsection