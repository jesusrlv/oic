<?php 
include('conn.php');

$id = $_POST['id'];
$observaciones = $_POST['observaciones'];

$sql = "UPDATE bitacora SET 
descripcion = '$observaciones'
WHERE id = '$id'";

$resultado2= $conn->query($sql);

 if($resultado2){
   echo json_encode(array(
    'success' => 1
   ));
  
 }
 else{
  echo json_encode(array(
    'success' => 0
   ));
 }

?>