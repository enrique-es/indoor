@extends('adminlte::page')
@section('title', 'Dashboard')

@section('content_header')
@stop

@section('content')
<!-- Small boxes (Stat box) -->

<div class="row">
    <div class="col-lg-3 col-6">
      <!-- small box -->
      <div class="small-box rounded bg-info" >
        <div class="inner">
          <h3> {{$var_humedad}}
            <sup style="font-size: 20px">%</sup>
          </h3>
          <p>Humedad</p>
        </div>
        <div class="icon">
          <i class="far fa-fw fas fa-tint"></i>
        </div>
        <a href="#" class="small-box-footer">Seleccionar <i class="fas fa-arrow-circle-right"></i></a>
      </div>
    </div>
    <!-- ./col -->
    <div class="col-lg-3 col-6">
      <!-- small box -->
      <div class="small-box bg-success">
        <div class="inner">
            <h3> {{$var_ph}}
                <sup style="font-size: 20px">%</sup>
            </h3>
          <p>PH</p>
        </div>
        <div class="icon">
          <i class="far fa-fw fas fa-flask"></i>
        </div>
        <a href="#" class="small-box-footer">Seleccionar <i class="fas fa-arrow-circle-right"></i></a>
      </div>
    </div>
    <!-- ./col -->
    <div class="col-lg-3 col-6">
      <!-- small box -->
      <div class="small-box bg-warning">
        <div class="inner">
          <h3>{{$var_luminosidad}}
            <sup style="font-size: 20px">Lux</sup>
          </h3>

          <p>Luminosidad</p>
        </div>
        <div class="icon">
          <i class="far fa-fw fas fa-lightbulb"></i>
        </div>
        <a href="#" class="small-box-footer">Seleccionar <i class="fas fa-arrow-circle-right"></i></a>
      </div>
    </div>
    <!-- ./col -->
    <div class="col-lg-3 col-6">
      <!-- small box -->
      <div class="small-box bg-danger">
        <div class="inner">
          <h3>{{$var_temperatura}}
            <sup style="font-size: 20px">°C</sup>
          </h3>

          <p>Temperatura</p>
        </div>
        <div class="icon">
          <i class="far fa-fw fas fa-thermometer-three-quarters"></i>
        </div>
        <a href="#" class="small-box-footer">Seleccionar <i class="fas fa-arrow-circle-right"></i></a>
      </div>
    </div>
    <!-- ./col -->
  </div>

<div class="row">
    <div class="col-12">

<script src="https://code.highcharts.com/highcharts.js"></script>
<script src="http://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
<script src="https://code.highcharts.com/modules/series-label.js"></script>
<script src="https://code.highcharts.com/modules/exporting.js"></script>
<script src="https://code.highcharts.com/modules/export-data.js"></script>

<div id="grafica"></div>



<script type="text/javascript">


Highcharts.chart('grafica', {

    title: {
        text: 'Humedad Relativa'
    },
    xAxis: {
        title: {
            text: 'Registros'
        },
        tickInterval: 1
    },

    yAxis: {
        title: {
            text: '%RH'
        }
    },
    legend: {
        layout: 'vertical',
        align: 'right',
        verticalAlign: 'middle'
    },

    plotOptions: {
        series: {
            label: {
                connectorAllowed: false
            },
            //pointStart: 2012
        }
    },

    series: [{
        name: 'Humedad',
        data: [<?php foreach ($data_humedad as $valor) {echo $valor->Humedad . ",";  } ?>]
    }],

    responsive: {
        rules: [{
            condition: {
                maxWidth: 500
            },
            chartOptions: {
                legend: {
                    layout: 'horizontal',
                    align: 'center',
                    verticalAlign: 'bottom'
                }
            }
        }]
    },

});


</script>
    </div>
</div>

@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
    <script> console.log('Hi!'); </script>
@stop
