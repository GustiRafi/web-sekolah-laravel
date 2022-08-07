@can('admin')
@extends('layouts.admin')
@section('admin-page')
<div class="body px-3">
    <h2 class="pb-3">{{ $testimoni->name }}</h2>
    {!! $testimoni->description !!}
</div>
</div>
@endsection
@endcan