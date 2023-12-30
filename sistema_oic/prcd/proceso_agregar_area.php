<?php
include ('conn.php');

$areaN = $_POST['areaN'];
$areaR = $_POST['areaR'];

$sql_2="INSERT INTO area(area,resp) VALUES('$areaN','$areaR')";
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