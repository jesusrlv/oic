<?php
include ('conn.php');

$id = $_POST['id'];

$query = "SELECT * FROM actividad WHERE id = '$id'";
$resultadoQ = $conn->query($query);
$rowQ = $resultadoQ->fetch_assoc();
$idQ = $rowQ['id'];

$sql_1="DELETE FROM bitacora WHERE actividad_vinculada = '$idQ'";
$resultado1= $conn->query($sql_1);

$sql_2="DELETE FROM actividad WHERE id = '$id'";
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