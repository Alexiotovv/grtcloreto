<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use DB;
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
    public function paneladmin(Request $request)
    {
        return view('paneladmin');
    }
    public function pagpublicaciones(Request $request)
    {
        // 'users' => DB::table('users')->paginate(15)
        $publicaciones=DB::table('publicaciones')
        ->orderByDesc('publicaciones.id')
        ->paginate(5);
        // ->get();
        return view('publicaciones',compact('publicaciones'));
    }



}