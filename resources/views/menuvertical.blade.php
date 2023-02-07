@extends('layouts.base')

@section('content')
<div class="row">


    <div class="col-lg-2">
        <div class="card">
            <div class="card-header">
            Opciones:
            </div>
            <ul class="list-group list-group-flush">
                <li class="list-group-item">
                    <a href="{{route('Crear.Publicaciones')}}">Registrar Publicaciones</a>
                </li>
                <li class="list-group-item">
                    <a href="{{route('appList.Publicaciones')}}">Listar Publicaciones</a>
                </li>
                <li class="list-group-item">
                    <a href="">Registrar Usuarios</a>
                </li>
                <li class="list-group-item">
                    <a href="">Listar Usuarios</a>
                </li>
                <li class="list-group-item"><a href="">Otros</a></li>
            </ul>
        </div>
    </div>
    <div class="col-lg-10" style="padding-right: 40px;">
        @yield('contenido_panel') 
        <br>
    </div>
    
    
</div>    
    
@endsection
@section('js_files')
    <script src="assets/app_js/publicaciones.js"></script>
@endsection