<?php
    include ('../prcd/conn.php');
    $sqlAnnio = "SELECT * FROM annio ORDER BY id DESC";
    $resultadoAnnio = $conn->query($sqlAnnio);
    echo'
        <option value="" selected>Seleccionar año ...</option>
        ';
    while(
        $rowAnnio = $resultadoAnnio->fetch_assoc()
    ){
        echo'
        <option value="'.$rowAnnio['id'].'">'.$rowAnnio['annio'].'</option>
        ';
    }


?>