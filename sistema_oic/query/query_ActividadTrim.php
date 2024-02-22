<?php

$trimestre = $_POST['trimestre'];
$actividad = $_POST['actividad'];
$annio = $_POST['annio'];

                    $tabla="SELECT * FROM bitacora WHERE usr_vinculado='$id' AND trimestre = '$ev' AND actividad_vinculada = '$act'";
                    // $tabla="SELECT * FROM usr INNER JOIN archivos ON usr.codigo = archivos.codigo_usr WHERE usr.priv = 1 AND usr.tematica=1 ORDER BY usr.id ASC";
                    $resultadotabla = $conn->query($tabla);
                    $numero=0;
                    while($row = $resultadotabla->fetch_assoc()){
                        $numero++;
                        echo '<tr>';
                            echo '<td>'.$numero.'</td>';
                            echo '<td><center>'.$row['descripcion'].'</center></td>';
                            echo '<td><center>'.$row['fecha'].'</center></td>';
                            echo utf8_encode('<td><a href="./'.$row['url_doc'].'" class="badge badge-primary" target="_blank"><i class="fas fa-eye"></i> Visualizar</a></td>');
                        echo '</tr>';
                      
                    }
                ?>