@extends('layouts.app')

@section('content')
<div class="container">
    <div class="panel-body">
        <!-- Display Validation Errors -->
        <h3>Usuarios</h3>
        @include('common.errors')

        @include('usuarios.new')
    </div>
    @include('usuarios.list')
</div>
@endsection