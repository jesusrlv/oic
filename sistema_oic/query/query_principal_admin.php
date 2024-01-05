<?php
include ('conn.php');
date_default_timezone_set('America/Mexico_City');
setlocale(LC_TIME, 'es_MX.UTF-8');
$fecha_sistema = strftime("%Y-%m-%d");

if(!isset($_POST['annio'])){
    $annioQuery = substr($fecha_sistema, 0, 4);
    $mes = substr($fecha_sistema, 5, 2); 

}
              $tabla="SELECT * FROM actividad WHERE annio = '$annioQuery' ORDER BY id ASC";
                    // $tabla="SELECT * FROM usr INNER JOIN archivos ON usr.codigo = archivos.codigo_usr WHERE usr.priv = 1 AND usr.tematica=1 ORDER BY usr.id ASC";
                    $resultadotabla = $conn->query($tabla);
                    $numero=0;
                    while($row = $resultadotabla->fetch_assoc()){
                        $numero++;
                        
                        echo '<tr>';

                            echo '<td class="align-middle"><center>'.$numero.'</center></td>';
                            echo ('<td class="align-middle"><center>'.$row['actividad'].'</center></td>');
                            // echo ('<td><center>'.$row['responsable'].'</center></td>');
                            $id_responsable=$row['responsable'];
                            $responsable = "SELECT * FROM usr WHERE id ='$id_responsable'";
                            $resultado_responsable= $conn->query($responsable);
                            $row_responsable=$resultado_responsable->fetch_assoc();
                            echo '<td class="align-middle">'.($row_responsable['nombre']).'</td>';

                            echo ('<td class="align-middle"><center>'.$row['descripcion'].'</center></td>');
                            // echo ('<td class="align-middle"><center>'.$row['trimestre'].'</center></td>');
                            echo ('<td class="align-middle"><center>1</center></td>');
                            $fecha_inicio = $row['fecha_inicio'];
                            $fecha_inicio_mx = date("d/m/Y", strtotime($fecha_inicio));
                            $fecha_final = $row['fecha_final'];
                            $fecha_final_mx = date("d/m/Y", strtotime($fecha_final));

                            echo ('<td class="align-middle"><center>'.$fecha_inicio_mx.'</center></td>');
                            echo ('<td class="align-middle"><center>'.$fecha_final_mx.'</center></td>');
                            echo ('<td class="align-middle"><center>'.$row['porcentaje'].'</center></td>');
                            
                            $responsable = $row['responsable'];
                            $id_row = $row['id'];
                            $tabla_cont="SELECT count(*) AS total FROM bitacora WHERE trimestre = 1 AND actividad_vinculada = '$id_row'";
                            $resultadotabla_cont = $conn->query($tabla_cont);
                            $cont_resultado = $resultadotabla_cont->fetch_assoc();
                            $num_rows = $cont_resultado['total'];
                            echo '<td class="align-middle"><span class="badge bg-info text-light"><center><i class="bi bi-file-post"></i> '.$num_rows.'</center></span></td>';

                            echo ('<td class="align-middle"><a href="calificar_evidencia_trimestre.php?act='.$row['id'].'&ev=1"><i class="bi bi-clipboard-check"></i> Calificar</center></a></td>');
                            // echo ('<td><center>'.$row['medio_verificacion'].'</center></td>');
                            $id_verificacion=$row['medio_verificacion'];
                            $verificacion = "SELECT * FROM medio_verificacion WHERE id ='$id_verificacion'";
                            $resultado_verificacion= $conn->query($verificacion);
                            $row_verificacion=$resultado_verificacion->fetch_assoc();
                            echo '<td>'.($row_verificacion['medio']).'</td>';
                           
                            echo ('<td class="align-middle"><small>'.$row['observaciones'].'</small></td>');

                            
                        echo '</tr>';
                      
                    }
                ?>