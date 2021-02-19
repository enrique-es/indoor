@extends('adminlte::page')

@section('title', 'home')

@section('content_header')
    <h1>Variables ambientales</h1>
@stop

@section('content')

<?php
    foreach ($data as $valor) {
        echo $valor->ventilador . ",";
    }
?>

@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
    <script> console.log('Hi!'); </script>
@stop
