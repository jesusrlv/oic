<?php
include ('../prcd/conn.php');

$annio = $_POST['annio'];
$id = $_POST['usr'];

$tabla="SELECT * FROM actividad WHERE responsable='$id' AND annio = '$annio'";
                    $resultadotabla = $conn->query($tabla);
                    $numero=0;
                    while($row = $resultadotabla->fetch_assoc()){
                        $numero++;
                        $responsable=$row['responsable'];
                        $verificacion=$row['medio_verificacion'];
                        $id_act=$row['id'];
                        
                        echo '<tr>';

                            echo ('<td><center>'.$row['actividad'].'</center></td>');

                            $consulta1="SELECT id,nombre FROM usr WHERE id = '$responsable'";
                            $resultado_consulta1 = $conn->query($consulta1);
                            $trabajador_resultado = $resultado_consulta1->fetch_assoc();
                            echo ('<td><center>'.$trabajador_resultado['nombre'].'</center></td>');
            
                            $consulta2="SELECT id,medio FROM medio_verificacion WHERE id = '$verificacion'";
                            $resultado_consulta2 = $conn->query($consulta2);
                            $medio_resultado = $resultado_consulta2->fetch_assoc();
                            echo ('<td><center>'.$medio_resultado['medio'].'</center></td>');

                            if($row['porcentaje4']!=100){
                              echo ('<td class="text-dark"><a href="agregar_archivos.php?id=4&act='.$row['id'].'"><span class="badge rounded-pill text-bg-primary"><i class="bi bi-file-earmark-medical"></i> Evidencia</span>
                              </a></td>');
                            }
                            else{
                              echo '<td><span class="badge badge-danger">Completado 100%</span></td>';
                            }
                            
                            $tabla_cont="SELECT count(*) AS total FROM bitacora WHERE usr_vinculado = '$id' AND trimestre = 4 AND actividad_vinculada = '$id_act'";
                            $resultadotabla_cont = $conn->query($tabla_cont);
                            $cont_resultado = $resultadotabla_cont->fetch_assoc();
                            $num_rows = $cont_resultado['total'];

                            echo '<td><center><a href="evidencia_trimestre.php?ev=4&act='.$row['id'].'">
                            <span class="badge rounded-pill text-bg-primary"><i class="bi bi-eye-fill"></i> '.$num_rows.'</span></a></td>';
                            echo '<td><center>
                            <div class="progress">
                              <div class="progress-bar" role="progressbar" style="width: '.$row['porcentaje4'].'%;" aria-valuenow="'.$row['porcentaje4'].'" aria-valuemin="0" aria-valuemax="100">'.$row['porcentaje4'].'%</div>
                            </div>
                            </center></td>';
                            $fecha_inicio = $row['fecha_inicio4'];
                            $fecha_inicio_mx = date("d/m/Y", strtotime($fecha_inicio));
                            $fecha_final = $row['fecha_final4'];
                            $fecha_final_mx = date("d/m/Y", strtotime($fecha_final));
                            echo '<td><center><button class="btn btn-info btn-sm" onclick="fechas('.$row['id'].',4)"><small><i class="bi bi-calendar2-week-fill"></i> '.$fecha_inicio_mx.' - '.$fecha_final_mx.'</button></center></small></td>';
                            echo ('<td><small>'.$row['observaciones4'].'</small></td>');
                        echo '</tr>';
                      
                    }

?>