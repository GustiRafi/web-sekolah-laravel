@extends('layouts.main')
@section('left-content')
<div class="col-12 col-md-8">
    <div class="card shadow">
        <div class="px-3 py-3">
            @foreach($perpusts as $perpus)
            <div data-aos="fade-right">
                <h4>{{ $perpus->title }}</h4>
            </div>
            <div data-aos="fade-right" data-aos-delay="300">
                <img src="{{ asset('storage/' . $perpus->image) }}" alt="" srcset="">
            </div>
            <div data-aos="fade-right" data-aos-delay="400">
                {!! $perpus->body !!}
            </div>
            @endforeach
        </div>
    </div>
</div>
@endsection