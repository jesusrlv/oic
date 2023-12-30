<?php
    include ('../prcd/conn.php');
    $sqlUsr = "SELECT * FROM usr WHERE perfil = 1 ORDER BY id DESC";
    $resultadoUsr = $conn->query($sqlUsr);
    $x=0;
    while(
        $rowUsr = $resultadoUsr->fetch_assoc()
    ){
        $x++;
        echo'

        <tr>
            <th scope="row">'.$x.'</th>
            <td>'.$rowUsr['nombre'].'</td>
            <td>'.$rowUsr['usr'].'</td>';
            $area = $rowUsr['area'];
        $sqlArea = "SELECT * FROM area WHERE id = '$area' ";
        $resultadoArea = $conn->query($sqlArea);
        $rowArea = $resultadoArea->fetch_assoc();
        echo '
            <td>'.$rowArea['area'].'</td>
        ';

        echo '
            <td><button class="btn btn-warning btn-sm" onclick="editarUsr('.$rowUsr['id'].')"><i class="bi bi-pencil-square"></i> Editar</button> | <button class="btn btn-danger btn-sm" onclick="eliminarUsr('.$rowUsr['id'].')"><i class="bi bi-trash-fill"></i> Eliminar</button></td>
        </tr>
        
        ';
    }


?>