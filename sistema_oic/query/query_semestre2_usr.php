<?php
include ('../prcd/conn.php');

$annio = $_POST['annio'];
$id = $_POST['usr'];

echo '<tr>
<td>
<div class="accordion" id="accordionExample2">
';

$tabla="SELECT * FROM actividad WHERE responsable='$id' AND annio = '$annio' AND estatus = 1 ";
                    $resultadotabla = $conn->query($tabla);
                    $numero=0;
                    while($row = $resultadotabla->fetch_assoc()){
                      $numero++;
                      $responsable=$row['responsable'];
                      $verificacion=$row['medio_verificacion'];
                      $id_act=$row['id'];

                      $consulta1="SELECT id,nombre FROM usr WHERE id = '$responsable'";
                      $resultado_consulta1 = $conn->query($consulta1);
                      $trabajador_resultado = $resultado_consulta1->fetch_assoc();

                      $consulta2="SELECT id,medio FROM medio_verificacion WHERE id = '$verificacion'";
                      $resultado_consulta2 = $conn->query($consulta2);
                      $medio_resultado = $resultado_consulta2->fetch_assoc();
                      
                      $tabla_cont="SELECT count(*) AS total FROM bitacora WHERE usr_vinculado = '$id' AND trimestre = 2 AND actividad_vinculada = '$id_act'";
                      $resultadotabla_cont = $conn->query($tabla_cont);
                      $cont_resultado = $resultadotabla_cont->fetch_assoc();
                      $num_rows = $cont_resultado['total'];


                      echo'
                      
                      <div class="accordion-item mt-1">
                        <h2 class="accordion-header">
                          <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#accordion2'.$numero.'" aria-expanded="true" aria-controls="collapseOne">
                          '.$numero.' - '.$row['actividad'].'
                          </button>
                        </h2>
                        <div id="accordion2'.$numero.'" class="accordion-collapse collapse" data-bs-parent="#accordionExample2">
                          <div class="accordion-body">
                            <div class="row">
                              <div class="col-2 border bg-primary text-light">
                                Nombre actividad
                              </div>
                              <div class="col-2 border bg-primary text-light">
                                Medio de verificación
                              </div>
                              <div class="col-2 border bg-primary text-light">
                                # de evidencias
                              </div>
                              <div class="col-2 border bg-primary text-light">
                                % avance
                              </div>
                              <div class="col-2 border bg-primary text-light">
                                Fecha inicio - fin
                              </div>
                              <div class="col-2 border bg-primary text-light">
                                Observaciones
                              </div>
                            </div>
                            <div class="row">
                              <div class="col-2 border align-self-center">
                              '.$row['descripcion'].'
                              </div>
                              <div class="col-2 border">
                              '.$medio_resultado['medio'].'
                              </div>
                              <div class="col-2 border">
                                <a href="evidencia_trimestre.php?ev=2&act='.$row['id'].'&annio='.$row['annio'].'">
                                <span class="badge rounded-pill text-bg-primary"><i class="bi bi-eye-fill"></i> '.$num_rows.'</span>
                                </a>
                              </div>
                              <div class="col-2 border">
                                <div class="progress">
                                  <div class="progress-bar" role="progressbar" style="width: '.$row['porcentaje'].'%;" aria-valuenow="'.$row['porcentaje'].'" aria-valuemin="0" aria-valuemax="100">'.$row['porcentaje'].'%</div>
                                </div>
                              </div>
                              <div class="col-2 border">
                              5
                              </div>
                              <div class="col-2 border">
                              6
                              </div>
                            </div>

                          </div>
                        </div>
                      </div>
                      
                    ';
                      
                    }

echo '
</div>
</td>
</tr>
';

?>

