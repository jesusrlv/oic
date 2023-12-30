function annioQuery(){
    var data1 = 1;
         $.ajax({
             type: "POST",
             url: "query/query_annio2.php",
             data:{ 
                data1:data1
             },
             dataType: "html",
             success: function(data) {
                 $('#resultadoDescripcion').fadeIn(1000).html(data)
             }
         });
        
 }

 function agregarAnnio(){
    var annio = document.getElementById('annio').value;

    if( annio == ""){
        alert("Llena los datos vacíos");
    }
    else{

        $.ajax({
            type: "POST",
            url: "prcd/proceso_agregar_annio.php",
            data:{ 
                annio:annio
            
            },
            dataType: "json",
            success: function(data) {
                var jsonData = JSON.parse(JSON.stringify(data));
                if(jsonData.success = 1){
                    alert("Año agregado");
                    annioQuery();
                    document.getElementById('annio').value = "";
                }
                else{
                    alert("No se agregó año");
                }

            }
        });
    }
 }

 function eliminarAnnio(id){
    $.ajax({
        type: "POST",
        url: "prcd/proceso_eliminar_annio.php",
        data:{ 
            id:id
        },
        dataType: "json",
        success: function(data) {
            var jsonData = JSON.parse(JSON.stringify(data));
            if(jsonData.success = 1){
                alert("Año elimiado");
                annioQuery();
            }
            else{
                alert("No se eliminó año");
            }

        }
    });
 }
 