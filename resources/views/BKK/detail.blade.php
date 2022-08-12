@extends('layouts.main')

@section('left-content')
<!-- konten Kiri -->
<div class="col-12 col-md-8">
    <div class="card shadow">
        <div class="px-3 pt-3">
            <div data-aos="fade-right">
                <div class="d-flex my-3">
                    <span class="border border-5 border-primary"></span>
                    <h4 class="ps-3">{{ $lowker->title }}</h4>
                </div>
            </div>
            <div data-aos="fade-right">
                <p class="opacity-50">{{ $lowker->updated_at->diffForHumans() }}</p>
            </div>
            <div data-aos="fade-right">
                <div class="mt-3">
                    <img src="{{ asset('storage/' . $lowker->image) }}" alt="" srcset="">
                    <div class="my-3">
                        {!! $lowker->description !!}
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- end kontent kiri -->
@endsection