function documentosUsr() {
    var trimestre = document.getElementById("trimestre").value;
    var actividad = document.getElementById("actividad").value;
    var annio = document.getElementById("annio").value;
    // console.log(trimestre, actividad, annio);

    $.ajax({
        type: "POST",
        url: "query/query_ActividadTrim.php",
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

// actualizar documentos
function _(el) {
    return document.getElementById(el);
  }
  
  function uploadFile() {
    var observacionesCargar = document.getElementById('observacionesCargar').value;
    var annio = document.getElementById('annio').value;
    var actividad = document.getElementById('actividad').value;
    var trimestre = document.getElementById('trimestre').value;
    var file = _("file").files[0];
    // alert(file.name+" | "+file.size+" | "+file.type);
    var formdata = new FormData();
    // variable del name file
    formdata.append("file", file);
    // variables post
    formdata.append("observacionesCargar", observacionesCargar);
    formdata.append("trimestre", trimestre);
    formdata.append("annio", annio);
    formdata.append("actividad", actividad);
    var ajax = new XMLHttpRequest();
    ajax.upload.addEventListener("progress", progressHandler, false);
    ajax.addEventListener("load", completeHandler, false);
    ajax.addEventListener("error", errorHandler, false);
    ajax.addEventListener("abort", abortHandler, false);
    ajax.open("POST", "prcd/proceso_agregar_evidencia.php"); 
    
    // http://www.developphp.com/video/JavaScript/File-Upload-Progress-Bar-Meter-Tutorial-Ajax-PHP
    //use file_upload_parser.php from above url

    //ARCHIVO CON EL PROCEDIMIENTO PARA MOVER EL DOCUMENTO AL SERVIDOR
    ajax.send(formdata);
    

    function progressHandler(event) {

        _("loaded_n_total").innerHTML = "Cargado " + event.loaded + " bytes de " + event.total;
        var percent = (event.loaded / event.total) * 100;
        _("progressBar").value = Math.round(percent);
        _("status").innerHTML = Math.round(percent) + "% subido... espere un momento";
      }
      
      function completeHandler(event) {

        _("status").innerHTML = event.target.responseText;
        _("progressBar").value = 100; //wil clear progress bar after successful upload
          _("file").style.display='none';
          _("progressBar").style.display='none';
          documentosUsr();
          Swal.fire({
            icon:'success',
            title: 'Acción correcta',
          });
        document.getElementById('registroDoc').disabled = true;
        document.getElementById('registroDoc').setAttribute('style','color: #59c965')
        document.getElementById('btnEvidencia').disabled = true;
        $(".bloqueo").attr("disabled", true);

      }
      
      function errorHandler(event) {
        _("status").innerHTML = "Fallo en la subida";
      }
      
      function abortHandler(event) {
        _("status").innerHTML = "Fallo en la subida";
      }
    
  }