@extends('layouts.app')

@section('content')

    <div class="panel-body">
        <!-- Display Validation Errors -->
        @include('common.errors')

        @include('usuarios.new')
    </div>
    @include('usuarios.list')

@endsection