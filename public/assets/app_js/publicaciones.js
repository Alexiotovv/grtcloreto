$(document).on("click",".btnEditarPublicacion",function (e){
    e.preventDefault();
    fila = $(this).closest("tr");
    id = (fila).find('td:eq(0)').text();

    $.ajax({
        type: "GET",
        url: "EditarPublicaciones/"+id,
        dataType: "json",
        success: function (response) {

            $("#Titulo").val(response[0].Titulo);
            $("#Descripcion").val(response[0].Descripcion);
            $("#Fecha").val(response[0].Fecha);
            // $("#Archivo").val(response[0].NombreDocumento);
            $("#NombreDocumento").val(response[0].NombreDocumento);
            $("#Observaciones").val(response[0].Observaciones);
        }
    });

    $("#ModalEditarPublicacion").modal("show");
});