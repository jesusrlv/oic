function areaQuery(){
    var data1 = 1;
         $.ajax({
             type: "POST",
             url: "query/query_area.php",
             data:{ 
                data1:data1
             },
             dataType: "html",
             success: function(data) {
                 $('#resultadoDescripcion').fadeIn(1000).html(data)
             }
         });
        
 }

 function agregarArea(){
    var areaN = document.getElementById('areaN').value;
    var areaR = document.getElementById('areaR').value;

    if( areaN == "" || areaR == ""){
        alert("Llena los datos vacíos");
    }
    else{

        $.ajax({
            type: "POST",
            url: "prcd/proceso_agregar_area.php",
            data:{ 
                areaN:areaN,
                areaR:areaR
            
            },
            dataType: "json",
            success: function(data) {
                var jsonData = JSON.parse(JSON.stringify(data));
                if(jsonData.success = 1){
                    alert("Área agregado");
                    areaQuery();
                    document.getElementById('areaR').value = "";
                    document.getElementById('areaN').value = "";

                }
                else{
                    alert("No se agregó área");
                }

            }
        });
    }
 }

 function eliminarArea(id){
    $.ajax({
        type: "POST",
        url: "prcd/proceso_eliminar_area.php",
        data:{ 
            id:id
        },
        dataType: "json",
        success: function(data) {
            var jsonData = JSON.parse(JSON.stringify(data));
            if(jsonData.success = 1){
                alert("Área elimiada");
                areaQuery();
            }
            else{
                alert("No se eliminó área");
            }

        }
    });
 }
 function editarArea(x){
    var id = x;
    $('#modalEditar').modal('show'); 
    $.ajax({
        type: "POST",
        url: "query/query_datosEditarArea.php",
        data:{ 
            id:id
        },
        dataType: "json",
        success: function(data) {
            var jsonData = JSON.parse(JSON.stringify(data));
            if(jsonData.success = 1){
                document.getElementById('areaEdit').value = jsonData.area;
                document.getElementById('respEdit').value = jsonData.responsable;
                document.getElementById('idEdit').value = jsonData.id;
            }
            else{
                alert("No se editó área");
            }

        }
    });
 }

 function edicionMedio(){
        var area = document.getElementById('areaEdit').value;
        var responsable =  document.getElementById('respEdit').value;
        var id =  document.getElementById('idEdit').value;
       
        $.ajax({
            type: "POST",
            url: "prcd/proceso_editar_area.php",
            data:{ 
                id:id,
                area:area,
                responsable:responsable
            },
            dataType: "json",
            success: function(data) {
                var jsonData = JSON.parse(JSON.stringify(data));
                if(jsonData.success = 1){
                   alert("Área editada");
                   areaQuery();
                   $('#modalEditar').modal('hide'); 

                }
                else{
                    alert("No se editó área");
                }
    
            }
        });
 }