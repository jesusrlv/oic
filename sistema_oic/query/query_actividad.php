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
                    echo ('<td><center>'.$row['responsable'].'</center></td>');
                    echo ('<td><center>'.$row['descripcion'].'</center></td>');
                    echo ('<td><center>'.$row['trimestre'].'</center></td>');
                    echo ('<td><center>'.$row['annio'].'</center></td>');
                    echo ('<td><center>'.$row['fecha_inicio'].'</center></td>');
                    echo ('<td><center>'.$row['fecha_final'].'</center></td>');
                    echo ('<td><center>'.$row['porcentaje'].'</center></td>');
                    echo ('<td><center>'.$row['medio_verificacion'].'</center></td>');
                    
                    
                echo '</tr>';
            
            }
?>