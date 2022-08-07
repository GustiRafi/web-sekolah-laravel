@can('admin')
@extends('layouts.admin')
@section('admin-page')
<div class="body px-3">

    <h2 class="pb-3">{{ $goal->title }}</h2>
    {!! $goal->body !!}
</div>
</div>
@endsection
@endcan