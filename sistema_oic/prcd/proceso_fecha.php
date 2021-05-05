<?php
include ('conn.php');

$trimestre = $_POST['trimestre'];
$fecha_inicio = $_POST['fecha_inicio'];
$fecha_final = $_POST['fecha_finalizacion'];
$id = $_POST['id'];

    if($trimestre==1){
        $update = "UPDATE actividad SET fecha_inicio='$fecha_inicio',fecha_final='$fecha_final' WHERE id='$id'";
        $resultado= $conn->query($update);

        if($resultado){
            header('Location: ../trimestre1.php');
        }
        else{
            echo 'Error';
        }
    }

    elseif($trimestre==2){
        $update = "UPDATE actividad SET fecha_inicio2='$fecha_inicio',fecha_final2='$fecha_final' WHERE id='$id'";
        $resultado= $conn->query($update);

        if($resultado){
            header('Location: ../trimestre2.php');
        }
        else{
            echo 'Error';
        }
    }

    elseif($trimestre==3){
        $update = "UPDATE actividad SET fecha_inicio3='$fecha_inicio',fecha_final3='$fecha_final' WHERE id='$id'";
        $resultado= $conn->query($update);

        if($resultado){
            header('Location: ../trimestre3.php');
        }
        else{
            echo 'Error';
        }
    }

    elseif($trimestre==4){
        $update = "UPDATE actividad SET fecha_inicio4='$fecha_inicio',fecha_final4='$fecha_final' WHERE id='$id'";
        $resultado= $conn->query($update);

        if($resultado){
            header('Location: ../trimestre4.php');
        }
        else{
            echo 'Error';
        }
    }


?>