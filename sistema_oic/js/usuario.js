function usuariosQuery(){
    var data1 = 1;
         $.ajax({
             type: "POST",
             url: "query/query_usr.php",
             data:{ 
                data1:data1
             },
             dataType: "html",
             success: function(data) {
                 $('#resultadoUsr').fadeIn(1000).html(data)
             }
         });
        
 }

 function agregarUsr(){
    var usr = document.getElementById('usr').value;
    var nombre = document.getElementById('nombre').value;
    var pwd = document.getElementById('pwd').value;
    var area = document.getElementById('area').value;

    if( usr == "" || nombre == "" || pwd == "" || area == ""){
        alert("Llena los datos vacíos");
    }
    else{

        $.ajax({
            type: "POST",
            url: "prcd/proceso_agregar_usr.php",
            data:{ 
            usr:usr,
            nombre:nombre,
            pwd:pwd,
            area:area
            
            },
            dataType: "json",
            success: function(data) {
                var jsonData = JSON.parse(JSON.stringify(data));
                if(jsonData.success = 1){
                    alert("Usuario agregado");
                    usuariosQuery();
                    document.getElementById('usr').value = "";
                    document.getElementById('nombre').value = "";
                    document.getElementById('pwd').value = "";
                    document.getElementById('area').value = "";

                }
                else{
                    alert("No se agregó usuario");
                }

            }
        });
    }
 }

 function eliminarUsr(id){
    $.ajax({
        type: "POST",
        url: "prcd/proceso_eliminar_usr.php",
        data:{ 
            id:id
        },
        dataType: "json",
        success: function(data) {
            var jsonData = JSON.parse(JSON.stringify(data));
            if(jsonData.success = 1){
                alert("Usuario elimiado");
                usuariosQuery();
            }
            else{
                alert("No se eliminó usuario");
            }

        }
    });
 }
 function editarUsr(x){
    var id = x;
    $('#modalEditar').modal('show'); 
    $.ajax({
        type: "POST",
        url: "query/query_datosEditar.php",
        data:{ 
            id:id
        },
        dataType: "json",
        success: function(data) {
            var jsonData = JSON.parse(JSON.stringify(data));
            if(jsonData.success = 1){
                /* alert("Usuario elimiado");
                usuariosQuery(); */
                document.getElementById('usrEdit').value = jsonData.usr;
                document.getElementById('nombreEdit').value = jsonData.nombre;
                document.getElementById('pwdEdit').value = jsonData.pwd;
                document.getElementById('areaEdit').value = jsonData.area;
                document.getElementById('idEdit').value = jsonData.id;
            }
            else{
                alert("No se eliminó usuario");
            }

        }
    });
 }

 function edicionDatos(){
        var usr = document.getElementById('usrEdit').value;
        var nombre =  document.getElementById('nombreEdit').value;
        var pwd = document.getElementById('pwdEdit').value;
        var area = document.getElementById('areaEdit').value;
        var id = document.getElementById('idEdit').value;

        $.ajax({
            type: "POST",
            url: "prcd/proceso_editar_usr.php",
            data:{ 
                id:id,
                usr:usr,
                nombre:nombre,
                pwd:pwd,
                area:area
            },
            dataType: "json",
            success: function(data) {
                var jsonData = JSON.parse(JSON.stringify(data));
                if(jsonData.success = 1){
                   alert("Datos editados");
                   usuariosQuery();
                   $('#modalEditar').modal('hide'); 

                }
                else{
                    alert("No se editó usuario");
                }
    
            }
        });
 }