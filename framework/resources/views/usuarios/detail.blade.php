@extends('layouts.app')

@section('content')

    <div class="row">
        
    </div>
    <div class="row">
        <div class="col-xs-6">@include('pagos.index')</div>        
        <div class="col-xs-6">@include('favoritos.index')</div>
    </div>
@endsection