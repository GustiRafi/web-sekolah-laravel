@can('admin')
@extends('layouts.admin')
@section('admin-page')
<div class="body flex-grow-1 px-3">
    <div class="container-lg">
    </div>
    <!-- /.row-->
    <div class="card mb-4">
        <div class="card-body">
            <h1>WELCOME BACK {{ auth()->user()->name }}</h1>
        </div>
        <!-- /.col-->
    </div>
    <!-- /.row-->
</div>
</div>
</div>
@endsection
@endcan