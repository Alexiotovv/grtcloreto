<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
class paginasController extends Controller
{
    public function nosotros(Request $request)
    {
        return view('nosotros');
    }
    public function home(Request $request)
    {
        return view('home');
    }

    public function direcciones(Request $request)
    {
        return view('direcciones');
    }

    public function misionvision(Request $request)
    {
        return view('misionvision');
    }


}