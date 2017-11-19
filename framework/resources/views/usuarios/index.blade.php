@extends('layouts.app')

@section('content')
<div class="container">
    <div class="panel-body">
        <!-- Display Validation Errors -->
        @include('common.errors')

        @include('usuarios.new')
    </div>
    @include('usuarios.list')
</div>
@endsection