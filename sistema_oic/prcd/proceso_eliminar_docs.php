<?php
include ('conn.php');
session_start();
    $id = $_SESSION['id']; // se va a relacionar con usr_vinculado
    $trimestre = $_POST['trimestre'];
    $actividad = $_POST['actividad'];
    $cuenta = $_POST['cuenta'];
    $idRegistro = $_POST['id']; // se va a relacionar con id del registro

    $sql_1 = "SELECT * FROM bitacora WHERE 
    usr_vinculado = '$id'
    AND trimestre = '$trimestre'
    AND actividad_vinculada = '$actividad'
    AND id = '$idRegistro'
    AND cuenta = '$cuenta'";

    $result = $conn->query($sql_1);

if ($result) {
    $row = $result->fetch_assoc();

    $sql_2 = "DELETE FROM bitacora WHERE 
    usr_vinculado = '$id'
    AND trimestre = '$trimestre'
    AND actividad_vinculada = '$actividad'
    AND id = '$idRegistro'
    AND cuenta = '$cuenta'";

    unlink('../'.$row['url_doc']);

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
}
?>