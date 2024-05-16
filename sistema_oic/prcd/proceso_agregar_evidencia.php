<?php
session_start();
include('conn.php');
  $usuario = $_SESSION['usr'];
  $id = $_SESSION['id'];
  $perfil = $_SESSION['perfil'];
  $nombre = $_SESSION['nombre'];


date_default_timezone_set('America/Mexico_City');
                  setlocale(LC_TIME, 'es_MX.UTF-8');

$trimestre = $_POST['trimestre'];
$actividad = $_POST['actividad'];
$annio = $_POST['annio'];
$observacionesCargar = $_POST['observacionesCargar'];
// $fecha_ini = $_POST['fecha_inicio'];
// $fecha_final = $_POST['fecha_finalizacion'];
$fecha_sistema = strftime("%Y-%m-%d,%H:%M:%S");

$sqlCount = "SELECT COUNT(*) AS cuenta FROM bitacora WHERE trimestre = '$trimestre' AND actividad_vinculada = '$actividad'";
 $resultadoCount = $conn->query($sqlCount);
 $rowCuenta = $resultadoCount->fetch_assoc();

 $cuentaFiles = $rowCuenta['cuenta'];
 $cuenta = $cuentaFiles + 1;

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

              if(move_uploaded_file($_FILES["file"]["tmp_name"],"../files/".$link.'_'.$cuenta.'_evidencia_'.$id.'_trimestre_'.$trimestre.'.'.$extension)){
                  
                  $ruta = $link.'_'.$cuenta.'_evidencia_'.$id.'_trimestre_'.$trimestre.'.'.$extension;
  
              } else {
                  echo "move_uploaded_file function failed";
              }

 // inicia consulta
 $sqlFile="INSERT INTO bitacora(
  usr_vinculado,
  trimestre,
  annio,
  descripcion,
  fecha,
  url_doc,
  actividad_vinculada,
  cuenta
  ) 
VALUES(
  '$id',
  '$trimestre',
  '$annio',
  '$observacionesCargar',
  '$fecha_sistema',
  '$ruta',
  '$actividad',
  '$cuenta'
  )";
 $resultadoFile= $conn->query($sqlFile);
 if($resultadoFile){
 
  echo "Registrado";
 }
 else{
  $error =  $conn->error;
  echo $error;
 }


?>

</html>