<?php
session_start();
include ('../prcd/conn.php');

$ev = $_POST['trimestre'];
$act = $_POST['actividad'];
$annio = $_POST['annio'];

$id = $_SESSION['id'];

    $tabla="SELECT * FROM bitacora WHERE usr_vinculado = '$id' AND trimestre = '$ev' AND actividad_vinculada = '$act' AND annio = '$annio'";
    // $tabla="SELECT * FROM usr INNER JOIN archivos ON usr.codigo = archivos.codigo_usr WHERE usr.priv = 1 AND usr.tematica=1 ORDER BY usr.id ASC";
    $resultadotabla = $conn->query($tabla);
    $numero=0;
    while($row = $resultadotabla->fetch_assoc()){
        $numero++;
        echo '<tr>';
            echo '<td class="align-middle">'.$numero.'</td>';
            echo '<td class="align-middle"><center>'.$row['descripcion'].'</center></td>';
            echo '<td class="align-middle"><center>'.$row['fecha'].'</center></td>';
            echo ('<td class="align-middle"><a href="files/'.$row['url_doc'].'" class="badge badge-primary" target="_blank"><i class="fas fa-eye"></i></a></td>');
            echo ('<td class="align-middle">
                <button onclick="editarFile('.$row['usr_vinculado'].','.$row['trimestre'].','.$row['actividad_vinculada'].','.$row['id'].','.$row['cuenta'].','.$annio.')" class="btn btn-outline-warning btn-sm" target="_blank"><i class="bi bi-pencil-square"></i></button>
            </td>');
            echo ('<td class="align-middle">
                    <button onclick="eliminarFile('.$row['trimestre'].','.$row['actividad_vinculada'].','.$row['id'].','.$row['cuenta'].','.$annio.')" class="btn btn-outline-danger btn-sm" target="_blank"><i class="fas fa-trash"></i></button>
            </td>');
        echo '</tr>';
        
    }
?>