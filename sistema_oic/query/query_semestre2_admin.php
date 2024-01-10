<?php
include ('../prcd/conn.php');

$annioQuery = $_POST['annio'];

$tabla="SELECT * FROM actividad WHERE annio = '$annioQuery' AND estatus = 1 ORDER BY id ASC";
$resultadotabla = $conn->query($tabla);
$numero=0;
while($row = $resultadotabla->fetch_assoc()){
    $numero++;
    
    echo '<tr>';

        echo '<td class="align-middle"><center>'.$numero.'</center></td>';
        echo ('<td class="align-middle"><center>'.$row['actividad'].'</center></td>');
        $id_responsable=$row['responsable'];
        $responsable = "SELECT * FROM usr WHERE id ='$id_responsable'";
        $resultado_responsable= $conn->query($responsable);
        $row_responsable=$resultado_responsable->fetch_assoc();
        echo '<td class="align-middle">'.($row_responsable['nombre']).'</td>';

        echo ('<td class="align-middle"><center>'.$row['descripcion'].'</center></td>');
        echo ('<td class="align-middle"><center>2</center></td>');
        $fecha_inicio2 = $row['fecha_inicio2'];
        $fecha_inicio_mx2 = date("d/m/Y", strtotime($fecha_inicio2));
        $fecha_final2 = $row['fecha_final2'];
        $fecha_final_mx2 = date("d/m/Y", strtotime($fecha_final2));
        echo ('<td class="align-middle"><center>'.$fecha_inicio_mx2.'</center></td>');
        echo ('<td class="align-middle"><center>'.$fecha_final_mx2.'</center></td>');
        echo ('<td class="align-middle"><center>'.$row['porcentaje2'].'</center></td>');
        $responsable = $row['responsable'];
        $id_row = $row['id'];
        $tabla_cont="SELECT count(*) AS total FROM bitacora WHERE trimestre = 2 AND actividad_vinculada = '$id_row'";
        $resultadotabla_cont = $conn->query($tabla_cont);
        $cont_resultado = $resultadotabla_cont->fetch_assoc();
        $num_rows = $cont_resultado['total'];
        echo '<td class="align-middle"><span class="badge bg-info text-light"><center><i class="bi bi-file-post"></i> '.$num_rows.'</center></span></td>';

        echo ('<td class="align-middle"><a href="calificar_evidencia_trimestre.php?act='.$row['id'].'&ev=2"><i class="bi bi-clipboard-check"></i> Calificar</center></a></td>');
        $id_verificacion=$row['medio_verificacion'];
        $verificacion = "SELECT * FROM medio_verificacion WHERE id ='$id_verificacion'";
        $resultado_verificacion= $conn->query($verificacion);
        $row_verificacion=$resultado_verificacion->fetch_assoc();
        echo '<td>'.($row_verificacion['medio']).'</td>';
       
        echo ('<td class="align-middle"><small>'.$row['observaciones2'].'</small></td>');

    echo '</tr>';
  
}

?>