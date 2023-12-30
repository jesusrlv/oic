<?php
    include ('../prcd/conn.php');
    $sqlAnnio = "SELECT * FROM annio ORDER BY id DESC";
    $resultadoAnnio = $conn->query($sqlAnnio);
    $x=0;
    while(
        $rowAnnio = $resultadoAnnio->fetch_assoc()
    ){
        $x++;
        echo'

        <tr>
            <th>'.$x.'</th>
            <td>'.$rowAnnio['annio'].'</td>           
            <td class="text-center"><button class="btn btn-danger btn-sm" onclick="eliminarAnnio('.$rowAnnio['id'].')"><i class="bi bi-trash-fill"></i></button></td>
        </tr>
        
        ';
    }


?>