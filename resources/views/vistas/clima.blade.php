@extends('adminlte::page')
@section('title', 'Dashboard')

@section('content_header')
    <h1>Dashboard</h1>
@stop

@section('content')


<div class="esquina_superior_izquierda">

    <div class="esquina_superior_izquierda">
        <img src="icono_ventilador.jpg" class ="esquina_superior_izquierda_imagen" alt="hola ">
        <?php echo $var_v ?>
    </div>
    <div class="esquina_superior_derecha" >
        <img src="icono_resistencia_agua.jpg" class ="esquina_superior_izquierda_imagen" alt="hola ">
        <?php echo $var_r; ?>
    </div>
    <div class="esquina_inferior_izquierda">
        <img src="icono_aspersion.jpg" class ="esquina_superior_izquierda_imagen" alt="hola ">
         <?php echo $var_a; ?>
    </div>
    <div class="esquina_inferior_derecha" >
       <img src="icono_luminosidad.jpg" class ="esquina_superior_izquierda_imagen" alt="hola ">
        <?php echo $var_f; ?>
    </div>
</div>
@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
    <script> console.log('Hi!'); </script>
@stop
