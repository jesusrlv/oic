

<?php
include ('conn.php');

$actividad = $_POST['actividad'];
$responsable = $_POST['usr'];
$descripcion = $_POST['descripcion'];

$sql_2="INSERT INTO actividad(actividad,responsable,descripcion) VALUES('$actividad','$responsable','$descripcion')";
$resultado2= $conn->query($sql_2);

if($resultado2){

    header ('Location:../actividad.php');
}

else{

    echo 'No se registró la actividad';
}

?>