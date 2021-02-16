<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('home');
    }
    public function clima()
    {
        return view('vistas.clima');
    }
    public function actuadores()
    {
        return view('vistas.actuadores');
    }
    public function historicos()
    {
        return view('vistas.historicos');
    }
    public function configuracion()
    {
        return view('vistas.configuracion');
    }
}
