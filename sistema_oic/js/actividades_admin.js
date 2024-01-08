function trimestre1(annio){
    $.ajax({
        type: "POST",
        url: "query/query_semestre1_admin.php",
        data:{ 
            annio:annio
        },
        dataType: "html",
        success: function(data) {
            $('#semestre1').fadeIn(1000).html(data)
        }
    });
}

function trimestre2(annio){
    $.ajax({
        type: "POST",
        url: "query/query_semestre2_admin.php",
        data:{ 
            annio:annio
        },
        dataType: "html",
        success: function(data) {
            $('#semestre2').fadeIn(1000).html(data)
        }
    });
}

function trimestre3(annio){
    $.ajax({
        type: "POST",
        url: "query/query_semestre3_admin.php",
        data:{ 
            annio:annio
        },
        dataType: "html",
        success: function(data) {
            $('#semestre3').fadeIn(1000).html(data)
        }
    });
}

function trimestre4(annio){
    $.ajax({
        type: "POST",
        url: "query/query_semestre4_admin.php",
        data:{ 
            annio:annio
        },
        dataType: "html",
        success: function(data) {
            $('#semestre4').fadeIn(1000).html(data)
        }
    });
}