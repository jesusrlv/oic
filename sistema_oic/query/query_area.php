<?php
    include ('../prcd/conn.php');
    $sqlArea = "SELECT * FROM area ORDER BY id DESC";
    $resultadoArea = $conn->query($sqlArea);
    $x=0;
    while(
        $rowArea = $resultadoArea->fetch_assoc()
    ){
        $x++;
        echo'

        <tr>
            <th>'.$x.'</th>
            <td>'.$rowArea['area'].'</td>';
            $resp = $rowArea['resp'];
            $sqlResp = "SELECT * FROM usr WHERE id = '$resp'";
            $resultadoResp = $conn->query($sqlResp);
            $rowResp = $resultadoResp->fetch_assoc();

            echo '
            <td>'.$rowResp['nombre'].'</td>
            <td class="text-center"><button class="btn btn-warning btn-sm" onclick="editarArea('.$rowArea['id'].')"><i class="bi bi-pencil-square"></i></button></td>
            <td class="text-center"><button class="btn btn-danger btn-sm" onclick="eliminarArea('.$rowArea['id'].')"><i class="bi bi-trash-fill"></i></button></td>
        </tr>
        
        ';
    }


?>