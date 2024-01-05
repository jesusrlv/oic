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

// consulta de tablero
function tablero(){
   var annio = document.getElementById('selectAnnio').value;
   var trimestre = document.getElementById('selectTrimestre').value;
   if (annio == ""){
    alert("Debes seleccionar el año");
   }
   else{
        $.ajax({
            type: "POST",
            url: "query/query_tablero.php",
            data: {
                annio:annio,
                trimestre:trimestre
            },
            dataType: "html",
            success: function(data) {
                $('#resultadoTablero').fadeIn(1000).html(data)
            }
        });
    }   
}

function datosPrincipales(annio){
    $.ajax({
        type: "POST",
        url: "query/query_tablero.php",
        data: {
            annio:annio
        },
        dataType: "html",
        success: function(data) {
            $('#resultadoTablero').fadeIn(1000).html(data)
        }
    });
}