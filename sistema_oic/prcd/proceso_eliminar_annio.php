<?php
include ('conn.php');

$id = $_POST['id'];

$sql_2="DELETE FROM annio WHERE id = '$id'";
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