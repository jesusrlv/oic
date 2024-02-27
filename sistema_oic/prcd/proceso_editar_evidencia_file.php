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
include('conn.php');

date_default_timezone_set('America/Mexico_City');
                  setlocale(LC_TIME, 'es_MX.UTF-8');

$trimestre = $_POST['trimestre'];
$actividad = $_POST['actividad'];
$descripcion = $_POST['descripcion'];
$fecha_ini = $_POST['fecha_inicio'];
$fecha_final = $_POST['fecha_finalizacion'];
$fecha_sistema = strftime("%Y-%m-%d,%H:%M:%S");

$sqlCount = "SELECT COUNT(*) AS cuenta FROM bitacora WHERE trimestre = '$trimestre' AND actividad_vinculada = '$actividad'";
 $resultadoCount = $conn->query($sqlCount);
 $rowCuenta = $resultadoCount->fetch_assoc();

 $cuentaFiles = $rowCuenta['cuenta'];
 $cuenta = $cuentaFiles + 1;


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

              if(move_uploaded_file($_FILES["file1"]["tmp_name"],"../files/".$link.'_'.$cuenta.'_evidencia_'.$id.'_trimestre_'.$trimestre.'.'.$extension)){
                  
                  $ruta = "files/".$link.'_'.$cuenta.'_evidencia_'.$id.'_trimestre_'.$trimestre.'.'.$extension;
  
              } else {
                  echo "move_uploaded_file function failed";
              }

 // inicia consulta
 $sql_2="INSERT INTO bitacora(usr_vinculado,trimestre,descripcion,fecha_ini,fecha_fin,fecha,url_doc,actividad_vinculada,cuenta) 
VALUES('$id','$trimestre','$descripcion','$fecha_ini','$fecha_final','$fecha_sistema','$ruta','$actividad','$cuenta')";
 $resultado2= $conn->query($sql_2);

 if($resultado2){
   
  echo "<script type=\"text/javascript\">
  Swal.fire({
    icon: 'success',
    title: 'Acción correcta, es tu actividad #".$cuenta." del trimestre ".$trimestre."',
    text: 'Bitácora agregada',
    footer: 'INJUVENTUD</a>'
  }).then(function(){window.location='../tablero_usr.php';});</script>";
  

  }

 else{
  echo 'No se registró la actividad';
 }


?>

</html>