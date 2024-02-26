function documentosUsr() {
    var trimestre = document.getElementById("trimestre").value;
    var actividad = document.getElementById("actividad").value;
    var annio = document.getElementById("annio").value;
    console.log(trimestre, actividad, annio);

    $.ajax({
        type: "POST",
        url: "query/query_actividadTrim.php",
        data: {
            trimestre:trimestre,
            actividad:actividad,
            annio:annio
        },
        dataType: "html",
        success: function(data) {
            $('#actividadTrim').fadeIn(1000).html(data);
        }
    });
}