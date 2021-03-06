@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <!-- Display Validation Errors -->
        <div class="panel center">
            <h3>Pagos y Favoritos de Usuario {{ $usuario->usuario }}</h3>
            @include('common.errors')
        </div>
        
    </div>
    <div class="row">
        <div class="col-xs-6">@include('pagos.index')</div>        
        <div class="col-xs-6">@include('favoritos.index')</div>
    </div>
</div>
@endsection