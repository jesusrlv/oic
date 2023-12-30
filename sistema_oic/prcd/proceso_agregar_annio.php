<?php
include ('conn.php');

$annio = $_POST['annio'];

$sql_2="INSERT INTO annio(annio) VALUES('$annio')";
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