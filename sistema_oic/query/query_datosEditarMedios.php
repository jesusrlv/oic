<?php
    include ('../prcd/conn.php');
    $id = $_POST['id'];
    $sqlMedio = "SELECT * FROM medio_verificacion WHERE id = '$id'";
    $resultadoMedio = $conn->query($sqlMedio);
    $rowMedio = $resultadoMedio -> fetch_assoc();

    echo json_encode(array(
        'success'=>1,
        'medio'=>$rowMedio['medio'],
        'descripcion'=>$rowMedio['descripcion'],
        'id'=>$rowMedio['id']
    ));
?>