<?php
include ('conn.php');

$id = $_POST['id'];
$usr = $_POST['usr'];
$nombre = $_POST['nombre'];
$pwd = $_POST['pwd'];
$area = $_POST['area'];

$sql_2="UPDATE usr SET usr = '$usr', nombre = '$nombre',pwd = '$pwd', area = '$area' WHERE id='$id'";
$resultado2= $conn->query($sql_2);

if($resultado2){

/*     header ('Location:../actividad.php');
 */
echo json_encode(array(
    'success'=>1
));
}

else{

    /* echo 'No se registró la actividad'; */
    echo json_encode(array(
        'success'=>0
    ));
}

?>