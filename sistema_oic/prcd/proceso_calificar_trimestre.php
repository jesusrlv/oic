<?php
session_start();
include('conn.php');
  
$actividad = $_POST['act'];
$trimestre = $_POST['ev'];
$calificacion = $_POST['calificacion'];
$observaciones = $_POST['observaciones'];

?>

<html>

<header>
  
  <script src="https://cdn.jsdelivr.net/npm/sweetalert2@10"></script>
  <script src="sweetalert2.all.min.js"></script>
  <!-- Optional: include a polyfill for ES6 Promises for IE11 -->
  <script src="https://cdn.jsdelivr.net/npm/promise-polyfill"></script>

</header>

<?php 

     
 // inicia consulta

if ($trimestre == 1){

    $sql="UPDATE actividad SET porcentaje='$calificacion',observaciones='$observaciones' WHERE id='$actividad'";
    $resultado= $conn->query($sql);
    if($resultado){
    echo "<script type=\"text/javascript\">
    Swal.fire({
        icon: 'success',
        title: 'Acción correcta',
        text: 'Calificado correctamente',
        footer: 'INJUVENTUD</a>'
    }).then(function(){window.location='../actividad_calificar.php';});</script>";
    }
    else{
    echo 'No se registró la actividad';
    }

}

elseif ($trimestre == 2){

    $sql="UPDATE actividad SET porcentaje2='$calificacion',observaciones2='$observaciones' WHERE id='$actividad'";
    $resultado= $conn->query($sql);
    if($resultado){
    echo "<script type=\"text/javascript\">
    Swal.fire({
        icon: 'success',
        title: 'Acción correcta',
        text: 'Calificado correctamente',
        footer: 'INJUVENTUD</a>'
    }).then(function(){window.location='../actividad_calificar.php';});</script>";
    }
    else{
    echo 'No se registró la actividad';
    }

}

elseif ($trimestre == 3){

    $sql="UPDATE actividad SET porcentaje3='$calificacion',observaciones3='$observaciones' WHERE id='$actividad'";
    $resultado= $conn->query($sql);
    if($resultado){
    echo "<script type=\"text/javascript\">
    Swal.fire({
        icon: 'success',
        title: 'Acción correcta',
        text: 'Calificado correctamente',
        footer: 'INJUVENTUD</a>'
    }).then(function(){window.location='../actividad_calificar.php';});</script>";
    }
    else{
    echo 'No se registró la actividad';
    }

}

elseif ($trimestre == 4){

    $sql="UPDATE actividad SET porcentaje4='$calificacion',observaciones4='$observaciones' WHERE id='$actividad'";
    $resultado= $conn->query($sql);
    if($resultado){
    echo "<script type=\"text/javascript\">
    Swal.fire({
        icon: 'success',
        title: 'Acción correcta',
        text: 'Calificado correctamente',
        footer: 'INJUVENTUD</a>'
    }).then(function(){window.location='../actividad_calificar.php';});</script>";
    }
    else{
    echo 'No se registró la actividad';
    }

}


?>

</html>