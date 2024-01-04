<?php
include ('conn.php');

$id = $_POST['id'];
$nombre = $_POST['nombre'];
$responsable = $_POST['responsable'];
$descripcion = $_POST['descripcion'];
$medio_verificacion = $_POST['medio_verificacion'];
$annio = $_POST['annio'];

$sql_2="UPDATE actividad SET actividad = '$nombre', responsable = '$responsable', descripcion = '$descripcion', medio_verificacion = '$medio_verificacion', annio = '$annio' WHERE id='$id'";
$resultado2= $conn->query($sql_2);

if($resultado2){

    echo json_encode(array(
    'success'=>1
));
}

else{

    echo json_encode(array(
        'success'=>0
    ));
}

?>