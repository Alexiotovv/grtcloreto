@extends('layouts.base')
@section('content')
<h4 class="mb-0 text-uppercase" style="text-align: center">Publicaciones</h4>
<br/>
    <div class="card" style="padding:2%;">
        <table class="table mb-0 table-hover">
            <thead>
                <tr>
                    <th scope="col">N</th>
                    <th scope="col">Titulo</th>
                    <th scope="col">Descripción</th>
                    <th scope="col">Fecha</th>
                    <th scope="col">Documento</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($publicaciones as $pub)
                    <tr>
                        <td>{{$pub->id}}</td>
                        <td>{{$pub->Titulo}}</td>
                        <td>{{$pub->Descripcion}}</td>
                        <td>{{$pub->Fecha}}</td>
                        <td><a target="_blank" href="storage/{{$pub->Ruta}}">Descargar</a></td>
                    </tr>
                @endforeach
            </tbody>
        </table>
        {!! $publicaciones->links() !!}
    </div>
@endsection