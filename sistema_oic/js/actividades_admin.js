function trimestre1(annio){
    $.ajax({
        type: "POST",
        url: "query/query_semestre1_admin.php",
        data:{ 
            annio:annio
        },
        dataType: "html",
        success: function(data) {
            $('#semestreAdmin').fadeIn(1000).html(data)
            document.getElementById('trimestreTxt').innerText = "Primer trimestre";
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
            $('#semestreAdmin').fadeIn(1000).html(data)
            document.getElementById('trimestreTxt').innerText = "Segundo trimestre";
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
            $('#semestreAdmin').fadeIn(1000).html(data)
            document.getElementById('trimestreTxt').innerText = "Tercer trimestre";
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
            $('#semestreAdmin').fadeIn(1000).html(data);

            document.getElementById('trimestreTxt').innerText = "Cuarto trimestre";
            document.getElementById('trimestreTxt').style.opacity = 1;
        }
    });
}

function trimestreInicial(){
    var date = new Date();
    var annio = date.getFullYear();
    var mes = date.getMonth();
    var dia = date.getDate();
    var fecha = new Date(annio, mes-1, dia);
    var trimestre = 0;
    if(mes < 4){
        trimestre = 1;
    }
    else if(mes < 7 && mes >= 4){
        trimestre = 2;
    }
    else if(mes < 10 && mes >= 7){
        trimestre = 3;
    }
    else if(mes>=10){
        trimestre = 4;
    }
    $.ajax({
        type: "POST",
        url: "query/query_semestre4_admin.php",
        data:{
            fecha: fecha,
            trimestre:trimestre
        },
        dataType: "html",
        success: function(data) {
            $('#actividad').fadeIn(1000).html(data);
        }
    });
}