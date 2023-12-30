<?php
    include ('../prcd/conn.php');
    $id = $_POST['id'];
    $sqlUsr = "SELECT * FROM usr WHERE id = '$id'";
    $resultadoUsr = $conn->query($sqlUsr);
    $rowUsr =  $resultadoUsr -> fetch_assoc();

    echo json_encode(array(
        'success'=>1,
        'nombre'=>$rowUsr['nombre'],
        'usr'=>$rowUsr['usr'],
        'area'=>$rowUsr['area'],
        'pwd'=>$rowUsr['pwd'],
        'id'=>$rowUsr['id']
    ));
?>