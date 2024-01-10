<html>

<header>
  
  <script src="https://cdn.jsdelivr.net/npm/sweetalert2@10"></script>
  <script src="sweetalert2.all.min.js"></script>
  <!-- Optional: include a polyfill for ES6 Promises for IE11 -->
  <script src="https://cdn.jsdelivr.net/npm/promise-polyfill"></script>

</header>
<?php
include ('conn.php');

$trimestre = $_POST['trimestreModal'];
$fecha_inicio = $_POST['fecha_inicio'];
$fecha_final = $_POST['fecha_finalizacion'];
$id = $_POST['idFecha'];

    if($trimestre==1){
        $update = "UPDATE actividad SET fecha_inicio='$fecha_inicio',fecha_final='$fecha_final' WHERE id='$id'";
        $resultado= $conn->query($update);

        if($resultado){
            echo "<script type=\"text/javascript\">
            Swal.fire({
                icon: 'success',
                title: 'Acción correcta',
                text: 'Fechas modificadas',
                footer: 'INJUVENTUD</a>'
            }).then(function(){window.location='../tablero_usr.php';});</script>";
        }
        else{
            echo 'Error';
        }
    }

    else if($trimestre==2){
        $update = "UPDATE actividad SET fecha_inicio2='$fecha_inicio',fecha_final2='$fecha_final' WHERE id='$id'";
        $resultado= $conn->query($update);

        if($resultado){
            echo "<script type=\"text/javascript\">
            Swal.fire({
                icon: 'success',
                title: 'Acción correcta',
                text: 'Fechas modificadas',
                footer: 'INJUVENTUD</a>'
            }).then(function(){window.location='../tablero_usr.php';});</script>";
        }
        else{
            echo 'Error';
        }
    }

    else if($trimestre==3){
        $update = "UPDATE actividad SET fecha_inicio3='$fecha_inicio',fecha_final3='$fecha_final' WHERE id='$id'";
        $resultado= $conn->query($update);

        if($resultado){
            echo "<script type=\"text/javascript\">
            Swal.fire({
                icon: 'success',
                title: 'Acción correcta',
                text: 'Fechas modificadas',
                footer: 'INJUVENTUD</a>'
            }).then(function(){window.location='../tablero_usr.php';});</script>";
        }
        else{
            echo 'Error';
        }
    }

    else if($trimestre==4){
        $update = "UPDATE actividad SET fecha_inicio4='$fecha_inicio',fecha_final4='$fecha_final' WHERE id='$id'";
        $resultado= $conn->query($update);

        if($resultado){
            echo "<script type=\"text/javascript\">
            Swal.fire({
                icon: 'success',
                title: 'Acción correcta',
                text: 'Fechas modificadas',
                footer: 'INJUVENTUD</a>'
            }).then(function(){window.location='../tablero_usr.php';});</script>";
        }
        else{
            echo 'Error';
        }
    }


?>