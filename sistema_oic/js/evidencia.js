function editarFile(id2,trimestre2,actividad2,idActividad2,cuenta2,annio2){

    var 
    id = id2, 
    trimestre = trimestre2, 
    actividad = actividad2,
    idActividad = idActividad2,
    cuenta = cuenta2,
    annio = annio2;

    $('#editarFiles').modal('show'); 

    $.ajax({
        type: "POST",
        url: "query/queryEditDatos.php",
        data: {
            id:id,
            trimestre:trimestre,
            actividad:actividad,
            idActividad:idActividad,
            cuenta:cuenta,
            annio:annio
        },
        dataType: "html",
        success: function(data) {
            $('#evidenciaEdit').fadeIn(1000).html(data)
        }
    });

}

function actualizarDatosEvidencia(){

    var id = document.getElementById('idActualizar').value;
    var trimestre = document.getElementById('trimestreActualizar').value;
    var actividad = document.getElementById('actividadActualizar').value;
    var annio = document.getElementById('annioActualizar').value;
    var observaciones = document.getElementById('observacionesActualizar').value;

    $.ajax({
        type: "POST",
        url: "prcd/proceso_editar_evidencia_datos.php",
        data: {
            id:id,
            trimestre:trimestre,
            actividad:actividad,
            annio:annio,
            observaciones:observaciones
        },
        dataType: "json",
        success: function(data) {
            var jsonData = JSON.parse(JSON.stringify(data));
            if(jsonData.success = 1){
                alert("Se actualizó la evidencia");
                $('#editarFiles').modal('hide'); 
                documentosUsr();
            }
            else{
                alert("No se actualizó la evidencia");
            }
        }
    });

    
}
