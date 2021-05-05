

<?php
include ('conn.php');

date_default_timezone_set('America/Mexico_City');
                  setlocale(LC_TIME, 'es_MX.UTF-8');

$actividad = $_POST['actividad'];
$responsable = $_POST['usr'];
$descripcion = $_POST['descripcion'];
// $finicio = $_POST['fecha_inicio'];
// $ffinalizacion = $_POST['fecha_finalizacion'];
$medio_verificacion = $_POST['medio_verificacion'];
// $trimestre = $_POST['trimestre'];
$annio = $_POST['annio'];
$porcentaje =  0;
// $hora_registro = date("Y/m/d H:i:s");
$hora_registro = strftime("%Y-%m-%d,%H:%M:%S");

$sql_2="INSERT INTO actividad(actividad,responsable,descripcion,medio_verificacion,porcentaje,annio,hora_registro) 
VALUES('$actividad','$responsable','$descripcion','$medio_verificacion','$porcentaje','$annio','$hora_registro')";
$resultado2= $conn->query($sql_2);

if($resultado2){

    header ('Location:../actividad.php');
}

else{

    echo 'No se registró la actividad';
}

?>