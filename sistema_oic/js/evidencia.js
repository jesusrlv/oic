function editarFile(id2,trimestre2,actividad2,idActividad2){

    var id = id2, 
    trimestre = trimestre2, 
    actividad = actividad2,
    idActividad = idActividad2;

    $('#editarFiles').modal('show'); 

    $.ajax({
        type: "POST",
        url: "query/queryEditDatos.php",
        data: {
            id:id,
            trimestre:trimestre,
            actividad:actividad,
            idActividad:idActividad
        },
        dataType: "html",
        success: function(data) {
            $('#evidenciaEdit').fadeIn(1000).html(data)
        }
    });

}

function actualizarEvidencia(){

    $('#editarFiles').modal('hide'); 
}