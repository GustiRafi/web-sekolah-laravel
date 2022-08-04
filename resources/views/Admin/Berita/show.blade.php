@extends('layouts.admin')
@section('admin-page')
<div class="body px-3">
    @foreach($beritas as $berita)
    <h2 class="pb-3">{{ $berita->title }}</h2>
    <img src="{{ asset('storage/' . $berita->image) }}" alt="" srcset="">
    {!! $berita->description !!}
    @endforeach
</div>
</div>
@endsection