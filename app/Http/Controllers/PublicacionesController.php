<?php

namespace App\Http\Controllers;

use App\Models\publicaciones;
use Illuminate\Http\Request;
use DB;
use Illuminate\Support\Facades\Storage;
use Illuminate\Http\File;

class PublicacionesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $publicaciones=DB::table('publicaciones')
        ->paginate(5);
        // ->get();
        return view('appPublicaciones',compact('publicaciones'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function CrearPublicaciones()
    {
        return view('appRegPublicaciones');
    }
    
    public function Actualizar(Request $request)
    {
        $id=request('idPublicacion');

        $obj=publicaciones::FindOrFail($id);

        $file=request('Archivo');
        $ruta="".time()."_".$file->getClientOriginalName();
        // dd($file->getClientOriginalName());
        if ($request->hasFile('Archivo')) {
            $file->storeAs('public',time()."_".$file->getClientOriginalName());
        }

        $obj = new publicaciones();
        $obj->Titulo = request('Titulo');
        $obj->Descripcion = request('Descripcion');
        $obj->Fecha = request('Fecha');
        $obj->Observaciones = request('Observaciones');
        $obj->Ruta = $ruta;
        $obj->save();

        return redirect()->route('appList.Publicaciones');
    }

    public function create(Request $request)
    {
        $file=request('Archivo');
        $ruta="".time()."_".$file->getClientOriginalName();
        // dd($file->getClientOriginalName());
        if ($request->hasFile('Archivo')) {
            $file->storeAs('public',time()."_".$file->getClientOriginalName());
        }

        $obj = new publicaciones();
        $obj->Titulo = request('Titulo');
        $obj->Descripcion = request('Descripcion');
        $obj->Fecha = request('Fecha');
        $obj->Observaciones = request('Observaciones');
        $obj->Ruta = $ruta;
        $obj->save();
        return redirect()->route('appList.Publicaciones');
    }
    public function ListarPublicaciones(Request $request)
    {
        $publicaciones=DB::table('publicaciones')
        ->orderByDesc('publicaciones.id')
        ->paginate(5);
        return view('appListPublicaciones', compact('publicaciones'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\publicaciones  $publicaciones
     * @return \Illuminate\Http\Response
     */
    public function show(publicaciones $publicaciones)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\publicaciones  $publicaciones
     * @return \Illuminate\Http\Response
     */
    public function EditarPublicaciones($id)
    {
        $lista=DB::table('publicaciones')
        ->select('publicaciones.*')
        ->where('publicaciones.id','=',$id)
        ->get();
        return response()->json($lista);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\publicaciones  $publicaciones
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, publicaciones $publicaciones)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\publicaciones  $publicaciones
     * @return \Illuminate\Http\Response
     */
    public function destroy(publicaciones $publicaciones)
    {
        //
    }
}
