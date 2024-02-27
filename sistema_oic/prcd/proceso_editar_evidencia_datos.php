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
$annio = $_POST['annio'];
$cuenta = $_POST['cuenta'];
$fecha_sistema = strftime("%Y-%m-%d,%H:%M:%S");

$sql_2 = "UPDATE bitacora SET 
descripcion = '$descripcion', 
fecha_ini = '$fecha_ini', 
fecha_fin = '$fecha_final' 
WHERE 
usr_vinculado = '$id' 
AND actividad_vinculada = '$actividad' 
AND trimestre = '$trimestre' 
AND cuenta = '$cuenta'";

$resultado2= $conn->query($sql_2);

 if($resultado2){
   
  echo "resulktado";
 }

 else{
  echo 'No se registró la actividad';
  $error = $conn->error;
  echo $error;
 }


?>

</html>