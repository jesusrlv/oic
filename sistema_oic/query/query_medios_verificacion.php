<?php
    include ('../prcd/conn.php');
    $sqlMedios = "SELECT * FROM medio_verificacion ORDER BY id DESC";
    $resultadoMedios = $conn->query($sqlMedios);
    $x=0;
    while(
        $rowMedios = $resultadoMedios->fetch_assoc()
    ){
        $x++;
        echo'

        <tr>
            <th>'.$x.'</th>
            <td>'.$rowMedios['medio'].'</td>
            <td>'.$rowMedios['descripcion'].'</td>';
            

        echo '
            <td class="text-center"><button class="btn btn-warning btn-sm" onclick="editarMedios('.$rowMedios['id'].')"><i class="bi bi-pencil-square"></i></button></td>
            <td class="text-center"><button class="btn btn-danger btn-sm" onclick="eliminarMedios('.$rowMedios['id'].')"><i class="bi bi-trash-fill"></i></button></td>
        </tr>
        
        ';
    }


?>