<?php

namespace App\Http\Controllers;
use App\Clima;
use Illuminate\Http\Request;

class ClimaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $humedad = Clima::pluck('Humedad')->last();
        $ph = Clima::pluck('PH')->last();
        $luminosidad = Clima::pluck('Luminosidad')->last();
        $temperatura = Clima::pluck('Temperatura')->last();
        $data_humedad = Clima::all();

        return view('vistas.clima', [
                "var_humedad" => $humedad,
                "var_ph" => $ph,
                "var_luminosidad" => $luminosidad,
                "var_temperatura" => $temperatura,
                "data_humedad"=> $data_humedad
            ]);
    }
}
