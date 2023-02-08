@extends('menuvertical')
@section('contenido_panel')

<nav aria-label="breadcrumb">
    <ol class="breadcrumb">
      <li class="breadcrumb-item"><a href="#">Inicio</a></li>
      <li class="breadcrumb-item"><a href="#">Panel Admin</a></li>
      <li class="breadcrumb-item active" aria-current="page">Listar Publicaciones</li>
    </ol>
</nav>
<br>

<div class="card" style="padding:2%;">
    <table class="table mb-0 table-hover">
        <thead>
            <tr>
                <th scope="col">N</th>
                <th scope="col">Acción</th>
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
                    <td>{{$pub->id}}</td>
                    <td>
                        <button class="btn btn-outline-danger btnEliminarPublicacion"><i class="lni lni-trash"></i></button>
                        <button class="btn btn-outline-warning btnEditarPublicacion"><i class="lni lni-pencil"></i></button>
                    </td>
                    <td>{{$pub->Titulo}}</td>
                    <td>{{$pub->Descripcion}}</td>
                    <td>{{$pub->Fecha}}</td>
                    <td><a target="_blank" href="/storage/{{$pub->Ruta}}">{{$pub->Ruta}}</a></td>
                    <td>{{$pub->Observaciones}}</td>
                </tr>
            @endforeach
        </tbody>
    </table>
    {!! $publicaciones->links() !!}
</div>


<div class="modal fade bd-example-modal-lg" id="ModalEditarPublicacion" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg">
    <div class="modal-content">
        <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">Editar Publicación</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
        
          <div class="modal-body">
            <form id="formPublicar" action="{{route('Actualizar.Publicaciones')}}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="row">
                    <div class="col-lg-4">
                        <input type="text" id="idPublicacion" name="idPublicacion" class="form form-control">
                        <label for="Titulo">Titulo</label>
                        <input name="Titulo" id="Titulo" type="text" placeholder="Título" class="form form-control" required>
                    </div>
                    <div class="col-lg-8">
                        <label for="Descripcion">Descripcion</label>
                        <input name="Descripcion" id="Descripcion" type="text" placeholder="Descripción" class="form form-control" required>
                    </div>
                    <div class="col-lg-4">
                        <label for="Fecha">Fecha</label>
                        <input name="Fecha" id="Fecha" type="date" placeholder="Fecha" class="form form-control" required>
                    </div>
                    <div class="col-lg-8">
                        <label for="Archivo">Seleccione Archivo</label>
                        <input type="file" class="form-control-file" id="Archivo" name="Archivo">
                    </div>
                    {{-- <div class="col-lg-4">
                        <label for="NombreDocumento">NombreDocumento</label>
                        <input name="NombreDocumento" id="NombreDocumento" type="text" placeholder="NombreDocumento" class="form-control" required>
                    </div> --}}
                    <div class="col-lg-8">
                        <label for="Observaciones">Observaciones</label>
                        <textarea name="Observaciones" id="Observaciones" cols="30" rows="2" 
                            placeholder="Observaciones" class="form-control"></textarea>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-4">
                    <br>
                    <button type="submit" class="btn btn-primary">Guardar</button>
                    </div>
                    
                </div>
            </form>
        </div>
    </div>
  </div>
</div>
@endsection


