@extends('layouts.base')
@section('content')
<h4 class="mb-0 text-uppercase" style="text-align: center">Publicaciones</h4>
<hr/>
<div class="card">
    <div class="card-body" style="text-align: center">

        <table class="table mb-0 table-hover" style="width: 90%;">
            <thead>
                <tr>
                    <th scope="col">N</th>
                    <th scope="col">Titulo</th>
                    <th scope="col">Descripción</th>
                    <th scope="col">Fecha</th>
                    <th scope="col">Documento</th>
                    <th scope="col">Observaciones</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($publicaciones as $pub)
                    <tr>
                        <th scope="row">{{$pub->id}}</th>
                        <td>{{$pub->Titulo}}</td>
                        <td>{{$pub->Descripcion}}</td>
                        <td>{{$pub->Fecha}}</td>
                        <td><a href="{{$pub->Ruta}}" download="">{{$pub->NombreDocumento}}</a></td>
                        <td>{{$pub->Observaciones}}</td>
                    </tr>
                @endforeach
                
            </tbody>
        </table>
        {!! $publicaciones->links() !!}
    </div>
</div>
@endsection