@can('admin')
@extends('layouts.admin')
@section('admin-page')
<div class="body px-3">
    @foreach($lowongans as $lowongan)
    <h2 class="pb-3">{{ $lowongan->title }}</h2>
    <img src="{{ asset('storage/' . $lowongan->image) }}" alt="" srcset="">
    {!! $lowongan->description !!}
    @endforeach
</div>
</div>
@endsection
@endcan