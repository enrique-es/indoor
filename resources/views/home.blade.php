@extends('adminlte::page')

@section('title', 'home')

@section('content_header')
    <h1>Indoor</h1>
@stop

@section('content')
    <div class="card">
        <div class="card-header">
            Encabezado
        </div>
        <div class="card-body">
            Cuerpo
        </div>
    </div>
@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
    <script> console.log('Hi!'); </script>
@stop
