<?php
include ('../prcd/conn.php');
    $tabla="SELECT * FROM actividad ORDER BY annio ASC";
            $resultadotabla = $conn->query($tabla);
            $numero=0;
            while($row = $resultadotabla->fetch_assoc()){
                $numero++;
                
                echo '<tr>';

                    echo '<td><center>'.$numero.'</center></td>';
                    echo ('<td><center>'.$row['actividad'].'</center></td>');
                    $responsable = $row['responsable'];
                    $sqlR = "SELECT * FROM usr WHERE id = '$responsable'";
                    $resultadoR = $conn->query($sqlR);
                    $rowR = $resultadoR->fetch_assoc();
                    echo ('<td><center>'.$rowR['nombre'].'</center></td>');
                    echo ('<td><center>'.$row['descripcion'].'</center></td>');
                    $medioV = $row['medio_verificacion'];
                    $queryV = "SELECT * FROM medio_verificacion WHERE id = '$medioV'";
                    $resultadoV = $conn->query($queryV);
                    $rowV = $resultadoV->fetch_assoc();
                    echo ('<td><center>'.$rowV['medio'].'</center></td>');
                    echo ('<td><center>'.$row['annio'].'</center></td>');
                    echo '<td><center><i class="bi bi-pencil-square"></i></center></td>';
                    echo '<td><center><i class="bi bi-caret-down-square-fill"></i></center></td>';
                    echo '<td><center><i class="bi bi-trash3-fill"></i></center></td>';
                    
                    
                echo '</tr>';
            
            }
?>