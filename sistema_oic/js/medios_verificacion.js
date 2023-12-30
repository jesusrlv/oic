function medioQuery(){
    var data1 = 1;
         $.ajax({
             type: "POST",
             url: "query/query_medios_verificacion.php",
             data:{ 
                data1:data1
             },
             dataType: "html",
             success: function(data) {
                 $('#resultadoDescripcion').fadeIn(1000).html(data)
             }
         });
        
 }

 function agregarMedio(){
    var medioN = document.getElementById('medioN').value;
    var descripcionM = document.getElementById('descripcionM').value;

    if( medioN == "" || descripcionM == ""){
        alert("Llena los datos vacíos");
    }
    else{

        $.ajax({
            type: "POST",
            url: "prcd/proceso_agregar_medio.php",
            data:{ 
                medioN:medioN,
                descripcionM:descripcionM
            
            },
            dataType: "json",
            success: function(data) {
                var jsonData = JSON.parse(JSON.stringify(data));
                if(jsonData.success = 1){
                    alert("Medio agregado");
                    medioQuery();
                    document.getElementById('medioN').value = "";
                    document.getElementById('descripcionM').value = "";

                }
                else{
                    alert("No se agregó medio");
                }

            }
        });
    }
 }

 function eliminarMedios(id){
    $.ajax({
        type: "POST",
        url: "prcd/proceso_eliminar_medio.php",
        data:{ 
            id:id
        },
        dataType: "json",
        success: function(data) {
            var jsonData = JSON.parse(JSON.stringify(data));
            if(jsonData.success = 1){
                alert("Medio elimiado");
                medioQuery();
            }
            else{
                alert("No se eliminó medio");
            }

        }
    });
 }
 function editarMedios(x){
    var id = x;
    $('#modalEditar').modal('show'); 
    $.ajax({
        type: "POST",
        url: "query/query_datosEditarMedios.php",
        data:{ 
            id:id
        },
        dataType: "json",
        success: function(data) {
            var jsonData = JSON.parse(JSON.stringify(data));
            if(jsonData.success = 1){
                /* alert("Usuario elimiado");
                usuariosQuery(); */
                document.getElementById('medioEdit').value = jsonData.medio;
                document.getElementById('descripcionEdit').value = jsonData.descripcion;
                document.getElementById('idEdit').value = jsonData.id;
            }
            else{
                alert("No se editó medio");
            }

        }
    });
 }

 function edicionMedio(){
        var medio = document.getElementById('medioEdit').value;
        var descripcion =  document.getElementById('descripcionEdit').value;
        var id =  document.getElementById('idEdit').value;
       
        $.ajax({
            type: "POST",
            url: "prcd/proceso_editar_medio.php",
            data:{ 
                id:id,
                medio:medio,
                descripcion:descripcion
            },
            dataType: "json",
            success: function(data) {
                var jsonData = JSON.parse(JSON.stringify(data));
                if(jsonData.success = 1){
                   alert("Datos editados");
                   medioQuery();
                   $('#modalEditar').modal('hide'); 

                }
                else{
                    alert("No se editó medio");
                }
    
            }
        });
 }