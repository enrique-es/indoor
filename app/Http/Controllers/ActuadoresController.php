<?php

namespace App\Http\Controllers;
use App\Estado;

use Illuminate\Http\Request;

class ActuadoresController extends Controller
{
    public function index()
    {
        $data = Estado::all();
        //dd($data);
	  	return view('vistas.actuadores', [
	  		'data' => $data
	  	]);
    }

    public function prueba()
    {
        $v = Estado::pluck('ventilador')->last();
        $r = Estado::pluck('resistencia')->last();
        $a = Estado::pluck('aspersor')->last();
        $f = Estado::pluck('foco')->last();

        return view('vistas.clima', [
                "var_v" => $v,
                "var_r" => $r,
                "var_a" => $a,
                "var_f" => $f
            ]);
    }
}
