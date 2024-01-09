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

                            if($row['porcentaje3']!=100){
                              echo ('<td class="text-dark"><a href="agregar_archivos.php?id=3&act='.$row['id'].'"><span class="badge rounded-pill text-bg-primary"><i class="bi bi-file-earmark-medical"></i> Evidencia</span>
                              </a></td>');
                            }
                            else{
                              echo '<td><span class="badge badge-danger">Completado 100%</span></td>';
                            }
                            
                            $tabla_cont="SELECT count(*) AS total FROM bitacora WHERE usr_vinculado = '$id' AND trimestre = 3 AND actividad_vinculada = '$id_act'";
                            $resultadotabla_cont = $conn->query($tabla_cont);
                            $cont_resultado = $resultadotabla_cont->fetch_assoc();
                            $num_rows = $cont_resultado['total'];

                            echo '<td><center><a href="evidencia_trimestre.php?ev=3&act='.$row['id'].'">
                            <span class="badge rounded-pill text-bg-primary"><i class="bi bi-eye-fill"></i> '.$num_rows.'</span></a></td>';
                            echo '<td><center>
                            <div class="progress">
                              <div class="progress-bar" role="progressbar" style="width: '.$row['porcentaje3'].'%;" aria-valuenow="'.$row['porcentaje3'].'" aria-valuemin="0" aria-valuemax="100">'.$row['porcentaje3'].'%</div>
                            </div>
                            </center></td>';
                            $fecha_inicio = $row['fecha_inicio4'];
                            $fecha_inicio_mx = date("d/m/Y", strtotime($fecha_inicio));
                            $fecha_final = $row['fecha_final4'];
                            $fecha_final_mx = date("d/m/Y", strtotime($fecha_final));
                            echo '<td><center><button class="btn btn-info btn-sm" data-bs-toggle="modal" data-bs-target="#exampleModal'.$row['id'].'"><small><i class="bi bi-calendar2-week-fill"></i> '.$fecha_inicio_mx.' - '.$fecha_final_mx.'</button></center></small></td>';
                            echo ('<td><small>'.$row['observaciones4'].'</small></td>');

                            //MODAL
                            echo '<div class="modal fade" id="exampleModal'.$row['id'].'" tabindex="-1" aria-labelledby="exampleModalLabel'.$row['id'].'" aria-hidden="true">
                              <div class="modal-dialog modal-dialog-centered">
                                <div class="modal-content">
                                  <div class="modal-header">
                                    <h5 class="modal-title" id="exampleModalLabel">Editar fechas de actividad semestral</h5>
                                    <!-- <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button> -->
                                  </div>
                                  <div class="modal-body">

                                  <form action="prcd/proceso_fecha.php" method="POST">
                                    <div class="input-group mb-3 w-100">
                                      <span class="input-group-text" id="inputGroup-sizing-default"><small><i class="bi bi-calendar-week"></i> Fecha de inicio</small></span>
                                      <input type="date" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default" name="fecha_inicio" required>
                                    </div>
                                    <div class="input-group mb-3 w-10">
                                      <span class="input-group-text" id="inputGroup-sizing-default"><small><i class="bi bi-calendar-week"></i> Fecha de finalización</small></span>
                                      <input type="date" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default" name="fecha_finalizacion" required>
                                    </div>
                                  </div>
                                  <input value="'.$row['id'].'" name="id" hidden>
                                  <input value="4" name="trimestre" hidden>
                                  <div class="modal-footer">
                                    <button type="button" class="btn btn-danger btn-sm" data-bs-dismiss="modal"><i class="bi bi-x-circle-fill"></i> Cerrar</button>
                                    <button type="submit" class="btn btn-primary btn-sm"><i class="bi bi-calendar-plus"></i> Guardar</button>

                                  </form>
                                  </div>
                                </div>
                              </div>
                            </div>';

                        echo '</tr>';
                      
                    }

?>