<?php
    include ('conn.php');
    $sqlAnnio = "SELECT * FROM annio ORDER BY id DESC";
    $resultado = $conn->query($sqlAnnio);
    while(
        $rowAnnio = $resultadoAnnio->fetch_assoc()
    ){
        echo'
        <option value="'.$rowAnnio['id'].'">'.$rowAnnio['annio'].'</option>
        ';
    }


?>