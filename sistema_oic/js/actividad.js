// Consulta de años
function annio(){
    $.ajax({
        type: "POST",
        url: "query/query_annio.php",
        dataType: "html",
        success: function(data) {
            $('#selectAnnio').fadeIn(1000).html(data)
        }
    });
}

function agregarActividad(){
   $('#modalAgregarActividad').modal('show'); 
}

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

 function queryActividad(){
    $.ajax({
        type: "POST",
        url: "query/query_actividad.php",
        dataType: "html",
        success: function(data) {
            $('#actividad').fadeIn(1000).html(data);
        }
    });
 }
 function queryActividadAnnio(annio){
    $.ajax({
        type: "POST",
        data:{
            annio:annio
        },
        url: "query/query_actividad_annio.php",
        dataType: "html",
        success: function(data) {
            document.getElementById("actividad").innerHTML = "";
            $('#actividad').fadeIn(1000).html(data);
        }
    });
 }

 function agregarActividad2(){
        var nombre_actv = document.getElementById('nombre_actv').value;
        var responsable =  document.getElementById('responsable').value;
        var descripcion =  document.getElementById('descripcion').value;
        var medio_verificacion =  document.getElementById('medio_verificacion').value;
        var annio =  document.getElementById('annio').value;
       
        $.ajax({
            type: "POST",
            url: "prcd/proceso_agregar_actividad.php",
            data:{ 
                nombre_actv:nombre_actv,
                responsable:responsable,
                medio_verificacion:medio_verificacion,
                descripcion:descripcion,
                annio:annio
            },
            dataType: "json",
            success: function(data) {
                var jsonData = JSON.parse(JSON.stringify(data));
                if(jsonData.success == 1){
                   alert("Actividad agregada");
                   queryActividad();
                    document.getElementById('nombre_actv').value = "";
                    document.getElementById('responsable').value = "";
                    document.getElementById('descripcion').value = "";
                    document.getElementById('medio_verificacion').value = "";
                    document.getElementById('annio').value = "";
                }
                else{
                    alert("No se agregó actividad");
                    console.log(jsonData.error);
                }
    
            }
        });
 }

 function consultarActividad(id){
    $.ajax({
        type: "POST",
        url: "query/query_consultar_actividad.php",
        data:{ 
            id:id
        },
        dataType: "json",
        success: function(data) {
            var jsonData = JSON.parse(JSON.stringify(data));
            if(jsonData.success == 1){
                document.getElementById('idEdit').value = jsonData.id;
                document.getElementById('actividadEdit').value = jsonData.nombre;
                document.getElementById('responsableEdit').value = jsonData.responsable;
                document.getElementById('descripcionEdit').value = jsonData.descripcion;
                document.getElementById('medio_verificacionEdit').value = jsonData.medio_verificacion;
                document.getElementById('annioEdit').value = jsonData.annio;
            }
            else{
                alert("No se agregó actividad");
            }

        }
    });
 }

 function editarActividad(){
    var id = document.getElementById('idEdit').value;
    var nombre = document.getElementById('actividadEdit').value;
    var responsable = document.getElementById('responsableEdit').value;
    var descripcion = document.getElementById('descripcionEdit').value;
    var medio_verificacion = document.getElementById('medio_verificacionEdit').value;
    var annio = document.getElementById('annioEdit').value;
    $.ajax({
        type: "POST",
        url: "prcd/proceso_editar_actividad.php",
        data:{ 
            id:id,
            nombre:nombre,
            responsable:responsable,
            descripcion:descripcion,
            medio_verificacion:medio_verificacion,
            annio:annio
        },
        dataType: "json",
        success: function(data) {
            var jsonData = JSON.parse(JSON.stringify(data));
            if(jsonData.success == 1){
                alert("Se editó actividad");
                $('#modalEditar').modal('hide'); 
                queryActividad();
            }
            else{
                alert("No se editó actividad");
            }

        }
    });
 }

 function editarEstatus(estatus){
    if(estatus == 1){
        var idEstatus = document.getElementById('valorId0').value;
    }else if(estatus == 0){
        var idEstatus = document.getElementById('valorId1').value; 
    }
   
    $.ajax({
        type: "POST",
        url: "prcd/proceso_editar_estatus.php",
        data:{ 
            estatus:estatus,
            idEstatus:idEstatus
        },
        dataType: "json",
        success: function(data) {
            var jsonData = JSON.parse(JSON.stringify(data));
            if(jsonData.success == 1){
                alert("Se editó el estatus");
                if(estatus == 1){
                    $('#modalEstatus0').modal('hide'); 
                }else{
                    $('#modalEstatus1').modal('hide'); 
                }
                queryActividad();
            }
            else{
                alert("No se editó el estatus");
            }

        }
    });
 }

 function mostrarModal(estatus,id){
    
    if(estatus == 1){
        $('#modalEstatus0').modal('show');
        document.getElementById('valorId0').value = id; 
    }else{
        $('#modalEstatus1').modal('show'); 
        document.getElementById('valorId1').value = id; 
    }

 }

 function previoEliminar(id){
    $('#modalEliminar').modal('show');
    document.getElementById('idEliminar').value = id;
 }

 function eliminarActividad(){
    var id = document.getElementById('idEliminar').value;

    $.ajax({
        type: "POST",
        url: "prcd/proceso_eliminar_actividad.php",
        data:{ 
            id:id
        },
        dataType: "json",
        success: function(data) {
            var jsonData = JSON.parse(JSON.stringify(data));
            if(jsonData.success == 1){
                alert("Se eliminó la actividad");
                $('#modalEliminar').modal('hide');
                queryActividad();
            }
            else{
                alert("No se eliminó la actividad");
            }

        }
    });
 }