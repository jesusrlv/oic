<?php
    include ('../prcd/conn.php');
    $id = $_POST['id'];
    $sqlArea = "SELECT * FROM area WHERE id = '$id'";
    $resultadoArea = $conn->query($sqlArea);
    $rowArea = $resultadoArea -> fetch_assoc();

    echo json_encode(array(
        'success'=>1,
        'area'=>$rowArea['area'],
        'responsable'=>$rowArea['resp'],
        'id'=>$rowArea['id']
    ));
?>