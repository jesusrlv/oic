<?php
include ('../prcd/conn.php');
    $tabla="SELECT * FROM actividad ORDER BY annio ASC";
            $resultadotabla = $conn->query($tabla);
            $numero=0;
            while($row = $resultadotabla->fetch_assoc()){
                $numero++;
                
                echo '<tr>';

                    echo '<td class="text-center">'.$numero.'</td>';
                    echo '<td class="text-center">'.$row['actividad'].'</td>';
                    $responsable = $row['responsable'];
                    $sqlR = "SELECT * FROM usr WHERE id = '$responsable'";
                    $resultadoR = $conn->query($sqlR);
                    $rowR = $resultadoR->fetch_assoc();
                    echo '<td class="text-center">'.$rowR['nombre'].'</td>';
                    echo '<td class="text-center">'.$row['descripcion'].'</td>';
                    $medioV = $row['medio_verificacion'];
                    $queryV = "SELECT * FROM medio_verificacion WHERE id = '$medioV'";
                    $resultadoV = $conn->query($queryV);
                    $rowV = $resultadoV->fetch_assoc();
                    echo '<td class="text-center">'.$rowV['medio'].'</td>';
                    echo '<td class="text-center">'.$row['annio'].'</td>';
                    echo '<td class="text-center"><a href="" data-bs-toggle="modal" data-bs-target="#modalEditar" onclick="consultarActividad('.$row['id'].')"><i class="bi bi-pencil-square"></i></a></td>';
                    if($row['estatus'] == 0 || $row['estatus'] == NULL){
                        echo '<td class="text-center"><i class="bi bi-caret-down-square-fill text-danger"></i></td>';
                    }
                    else if($row['estatus'] == 1){
                        echo '<td class="text-center"><a href="" data-bs-toggle="modal" data-bs-target="#modalEstatus"><i class="bi bi-caret-up-square-fill text-success"></i></a></td>';
                    }
                    
                    echo '<td class="text-center"><i class="bi bi-trash3-fill text-danger"></i></td>';
                    
                echo '</tr>';
            
            }
?>