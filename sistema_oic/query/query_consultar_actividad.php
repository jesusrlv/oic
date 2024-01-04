<?php
    include ('../prcd/conn.php');
    $id = $_POST['id'];
    $sqlActividad = "SELECT * FROM actividad WHERE id = '$id'";
    $resultadoActividad = $conn->query($sqlActividad);
    $rowActividad =  $resultadoActividad -> fetch_assoc();

    echo json_encode(array(
        'success'=>1,
        'id'=>$rowActividad['id'],
        'nombre'=>$rowActividad['actividad'],
        'responsable'=>$rowActividad['responsable'],
        'descripcion'=>$rowActividad['descripcion'],
        'medio_verificacion'=>$rowActividad['medio_verificacion'],
        'annio'=>$rowActividad['annio']
    ));
?>