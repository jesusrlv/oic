<?php
session_start();
include('conn.php');

date_default_timezone_set('America/Mexico_City');
                  setlocale(LC_TIME, 'es_MX.UTF-8');

$url = $_POST['url'];

    $link= 'bitacora';
    $fileName = $_FILES["file"]["name"]; // The file name
    $fileTmpLoc = $_FILES["file"]["tmp_name"]; // File in the PHP tmp folder
    $fileType = $_FILES["file"]["type"]; // The type of file it is
    $fileSize = $_FILES["file"]["size"]; // File size in bytes
    $fileErrorMsg = $_FILES["file"]["error"]; // 0 for false... and 1 for true
    if (!$fileTmpLoc) { // if file not chosen
        echo "ERROR: Please browse for a file before clicking the upload button.";
        exit();
    }
              
              // if(move_uploaded_file($_FILES["file"]["tmp_name"],"../files/".$link.'_'.$codigo.'_'.$_FILES['file']['name'])){
                $archivo_ext=$_FILES['file']['name'];
                $extension = pathinfo($archivo_ext, PATHINFO_EXTENSION);

              if(move_uploaded_file($_FILES["file"]["tmp_name"],"../files/".$url)){
                  
                  echo "Actualizado";
  
              } else {
                echo "No actualizado";
              }

?>