<?php
session_start();
  $usuario = $_SESSION['usr'];
  $id = $_SESSION['id'];
  $perfil = $_SESSION['perfil'];
  $nombre = $_SESSION['nombre'];
?>

<html>

<header>
  
  <script src="https://cdn.jsdelivr.net/npm/sweetalert2@10"></script>
  <script src="sweetalert2.all.min.js"></script>
  <!-- Optional: include a polyfill for ES6 Promises for IE11 -->
  <script src="https://cdn.jsdelivr.net/npm/promise-polyfill"></script>

</header>

<?php

// ini_set('display_errors', 1);

// ini_set('display_startup_errors', 1);

// error_reporting(E_ALL);

?>

<?php 
include('conn.php');

date_default_timezone_set('America/Mexico_City');
                  setlocale(LC_TIME, 'es_MX.UTF-8');

//codigo aleatorio
     
function generarCodigo($longitud) {
    $key = '';
    $pattern = '1234567890abcdefghijklmnopqrstuvwxyz';
    $max = strlen($pattern)-1;
    for($i=0;$i < $longitud;$i++) $key .= $pattern{mt_rand(0,$max)};
    return $key;
}   
$codigo = generarCodigo(9); // genera un código de 9 caracteres de longitud.


$trimestre = $_POST['trimestre'];
$actividad = $_POST['actividad'];
$descripcion = $_POST['descripcion'];
$fecha_ini = $_POST['fecha_inicio'];
$fecha_final = $_POST['fecha_finalizacion'];
$fecha_sistema = strftime("%Y-%m-%d,%H:%M:%S");

    $link= 'bitacora';
    $fileName = $_FILES["file1"]["name"]; // The file name
    $fileTmpLoc = $_FILES["file1"]["tmp_name"]; // File in the PHP tmp folder
    $fileType = $_FILES["file1"]["type"]; // The type of file it is
    $fileSize = $_FILES["file1"]["size"]; // File size in bytes
    $fileErrorMsg = $_FILES["file1"]["error"]; // 0 for false... and 1 for true
    if (!$fileTmpLoc) { // if file not chosen
        echo "ERROR: Please browse for a file before clicking the upload button.";
        exit();
    }
              
              // if(move_uploaded_file($_FILES["file1"]["tmp_name"],"../files/".$link.'_'.$codigo.'_'.$_FILES['file1']['name'])){
                $archivo_ext=$_FILES['file1']['name'];
                $extension = pathinfo($archivo_ext, PATHINFO_EXTENSION);

              if(move_uploaded_file($_FILES["file1"]["tmp_name"],"../files/".$link.'_'.$codigo.'_evidencia_'.$id.'_trimestre_'.$trimestre.'.'.$extension)){
                  
                  $ruta = "files/".$link.'_'.$codigo.'_evidencia_'.$id.'_trimestre_'.$trimestre.'.'.$extension;
  
              } else {
                  echo "move_uploaded_file function failed";
              }

 // inicia consulta
 $sql_2="INSERT INTO bitacora(usr_vinculado,trimestre,descripcion,fecha_ini,fecha_fin,fecha,url_doc,actividad_vinculada) 
VALUES('$id','$trimestre','$descripcion','$fecha_ini','$fecha_final','$fecha_sistema','$ruta','$actividad')";
 $resultado2= $conn->query($sql_2);

 if($resultado2){
   
  // echo "<script type=\"text/javascript\">
  // Swal.fire('Bitácora cargada correctamente').then(function(){window.location='../perfiles/super_usr/revision_bitacora.php';});</script>";
  echo "<script type=\"text/javascript\">
  Swal.fire({
    icon: 'success',
    title: 'Acción correcta',
    text: 'Bitácora agregada',
    footer: 'INJUVENTUD</a>'
  }).then(function(){window.location='../dashboard.php';});</script>";
  
  // echo "<script type=\'text/javascript\'>
  //       Swal.fire({
  //           icon: 'success',
  //           title: 'Acción correcta',
  //           text: 'Bitácora agregada'
  //       }).then(function(){window.location='../perfiles/super_usr/revision_bitacora.php';});

  // </script>";
  
  // header ('Location:../perfiles/super_usr/revision_bitacora.php');
 
  

  }

 else{

 echo 'No se registró la actividad';
//  error(query($resultado2));
 }
 // fin consulta

// $sql_2="INSERT INTO usuarios(usr,pwd,priv,nombre_completo,fecha_reg_dia,fecha_reg_mes,fecha_reg_annio,fecha_sistema) 
// VALUES('$usr','$pwd','$priv','$nombre','$fecha_dia','$fecha_mes','$fecha_annio','$fecha_sistema')";
// $resultado2= $conn->query($sql_2);

// if($resultado2){

//     header ('Location:../dashboard.php');
// }

// else{

//     echo 'No se registró la actividad';
// }



?>

</html>