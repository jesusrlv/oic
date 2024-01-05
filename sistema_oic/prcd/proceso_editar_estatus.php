<?php
include ('conn.php');

$id = $_POST['idEstatus'];
$estatus = $_POST['estatus'];

$sql_2="UPDATE actividad SET estatus = '$estatus' WHERE id='$id'";
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