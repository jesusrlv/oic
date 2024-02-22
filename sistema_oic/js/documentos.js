function documentosUsr() {
    var trimestre = document.getElementById("trimestre");
    var actividad = document.getElementById("actividad");
    var annio = document.getElementById("annio");

    $.ajax({
        type: "POST",
        url: "query/query_actividadTrim.php",
        dataType: "html",
        success: function(data) {
            $('#actividadTrim').fadeIn(1000).html(data)
        }
    });
}