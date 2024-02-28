function eliminarFile(trimestre,actividad,id,cuenta){
    $.ajax({
        type: "POST",
        url: "prcd/proceso_eliminar_docs.php",
        data:{ 
            trimestre:trimestre,
            actividad:actividad,
            id:id,
            cuenta:cuenta
        },
        dataType: "json",
        success: function(data) {
            var jsonData = JSON.parse(JSON.stringify(data));
            if(jsonData.success == 1){
                alert("Registro eliminado");
                documentosUsr();
            }
            else{
                alert("No se eliminó el registro");
            }

        }
    });
}