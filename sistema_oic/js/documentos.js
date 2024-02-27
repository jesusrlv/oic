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

// actualizar documentos
function _(el) {
    return document.getElementById(el);
  }
  
  function uploadFile(doc,tipoDoc) {
    var idUsr = document.getElementById('curp_exp').value;
    var idExp = document.getElementById('numeroExpediente').innerText;
    var file = _("file"+doc).files[0];
    var documento = doc;
    var idUsuario = idUsr;
    var tipoDoc = tipoDoc;
    // alert(file.name+" | "+file.size+" | "+file.type);
    var formdata = new FormData();
    // variable del name file
    formdata.append("file", file);
    // variables post
    formdata.append("documento", documento);
    formdata.append("idUsuario", idUsuario);
    formdata.append("idExpediente", idExp);
    formdata.append("tipoDoc", tipoDoc);
    var ajax = new XMLHttpRequest();
    ajax.upload.addEventListener("progress", progressHandler, false);
    ajax.addEventListener("load", completeHandler, false);
    ajax.addEventListener("error", errorHandler, false);
    ajax.addEventListener("abort", abortHandler, false);
    ajax.open("POST", "prcd/upload_file.php"); 
    
    // http://www.developphp.com/video/JavaScript/File-Upload-Progress-Bar-Meter-Tutorial-Ajax-PHP
    //use file_upload_parser.php from above url

    //ARCHIVO CON EL PROCEDIMIENTO PARA MOVER EL DOCUMENTO AL SERVIDOR
    ajax.send(formdata);
    

    function progressHandler(event) {

        _("loaded_n_total"+doc).innerHTML = "Cargado " + event.loaded + " bytes de " + event.total;
        var percent = (event.loaded / event.total) * 100;
        _("progressBar"+doc).value = Math.round(percent);
        _("status"+doc).innerHTML = Math.round(percent) + "% subido... espere un momento";
      }
      
      function completeHandler(event) {
        _("status"+doc).innerHTML = event.target.responseText;
        _("progressBar"+doc).value = 100; //wil clear progress bar after successful upload
          _("file"+doc).style.display='none';
          _("progressBar"+doc).style.display='none';
        document.getElementById('registroDoc'+doc).disabled = true;
        document.getElementById('registroDoc'+doc).setAttribute('style','color: #59c965')
        document.getElementById('btnModal'+doc).disabled = true;
        $(".bloqueo"+doc).attr("disabled", true);
      }
      
      function errorHandler(event) {
        _("status"+doc).innerHTML = "Fallo en la subida";
      }
      
      function abortHandler(event) {
        _("status"+doc).innerHTML = "Fallo en la subida";
      }
    
  }