<?php
include ('conn.php');

$medioN = $_POST['medioN'];
$descripcionM = $_POST['descripcionM'];

$sql_2="INSERT INTO medio_verificacion(medio,descripcion) VALUES('$medioN','$descripcionM')";
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