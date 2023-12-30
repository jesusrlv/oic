<?php
include ('conn.php');

$id = $_POST['id'];

$sql_2="DELETE FROM medio_verificacion WHERE id = '$id'";
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