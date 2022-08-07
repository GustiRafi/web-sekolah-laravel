@can('admin')
@extends('layouts.admin')
@section('admin-page')
<div class="body px-3">

    <h2 class="pb-3">{{ $sejarah->title }}</h2>
    <img src="{{ asset('storage/' . $sejarah->image) }}" alt="" srcset="">
    {!! $sejarah->body !!}
</div>
</div>
@endsection
@endcan