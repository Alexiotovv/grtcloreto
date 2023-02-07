@extends('menuvertical')
@section('contenido_panel')
<nav aria-label="breadcrumb">
    <ol class="breadcrumb">
      <li class="breadcrumb-item"><a href="#">Inicio</a></li>
      <li class="breadcrumb-item"><a href="#">Panel Admin</a></li>
      <li class="breadcrumb-item active" aria-current="page">Publicaciones</li>
    </ol>
</nav>

<br>

    <form id="formPublicar" action="{{route('Create.Publicaciones')}}" method="POST"
    enctype="multipart/form-data">
      @csrf
      <div class="row">
        <div class="col-lg-4">
          <label for="Titulo">Titulo</label>
          <input name="Titulo" id="Titulo" type="text" placeholder="Título" class="form-control" required>
        </div>
          <div class="col-lg-8">
            <label for="Descripcion">Descripcion</label>
            <input name="Descripcion" id="Descripcion" type="text" placeholder="Descripción" class="form-control" required>
          </div>
          <div class="col-lg-4">
            <label for="Fecha">Fecha</label>
            <input name="Fecha" id="Fecha" type="date" placeholder="Fecha" class="form-control" required>
          </div>
          <div class="col-lg-8">
            <label for="Archivo">Seleccione Archivo</label>
            <input type="file" class="form-control-file" id="Archivo" name="Archivo" required>
          </div>
          <div class="col-lg-4">
            <label for="NombreDocumento">NombreDocumento</label>
            <input name="NombreDocumento" id="NombreDocumento" type="text" placeholder="NombreDocumento" class="form-control" >
          </div>
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
       


@endsection
@section('js_files')
  <script>

    var fecha = new Date();
    document.getElementById("Fecha").value = fecha.toJSON().slice(0, 10);
  
  </script>
@endsection