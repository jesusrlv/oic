function trimestre1(annio,usr){
    $.ajax({
        type: "POST",
        url: "query/query_semestre1_usr.php",
        data:{ 
            usr:usr,
            annio:annio
        },
        dataType: "html",
        success: function(data) {
            $('#semestre1').fadeIn(1000).html(data)
        }
    });
}
function trimestre2(annio,usr){
    $.ajax({
        type: "POST",
        url: "query/query_semestre2_usr.php",
        data:{ 
            usr:usr,
            annio:annio
        },
        dataType: "html",
        success: function(data) {
            $('#semestre2').fadeIn(1000).html(data)
        }
    });
}
function trimestre3(annio,usr){
    $.ajax({
        type: "POST",
        url: "query/query_semestre3_usr.php",
        data:{ 
            usr:usr,
            annio:annio
        },
        dataType: "html",
        success: function(data) {
            $('#semestre3').fadeIn(1000).html(data)
        }
    });
}
function trimestre4(annio,usr){
    $.ajax({
        type: "POST",
        url: "query/query_semestre4_usr.php",
        data:{ 
            usr:usr,
            annio:annio
        },
        dataType: "html",
        success: function(data) {
            $('#semestre4').fadeIn(1000).html(data)
        }
    });
}

function fechas(id,trimestre){
    $('#modalFechas').modal('show');
    document.getElementById('idFecha').value = id;
    document.getElementById('trimestreModal').value = trimestre;
}