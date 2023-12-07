function annio1(){
    $.ajax({
        type: "POST",
        url: "query/query_annio.php",
        dataType: "html",
        success: function(data) {
            $('#selectAnnio').fadeIn(1000).html(data)
        }
    });
}

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