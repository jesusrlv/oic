

<?php
include ('conn.php');

$usr = $_POST['usr'];
$nombre = $_POST['nombre'];
$pwd = $_POST['pwd'];
$area = $_POST['area'];
$perfil=1;

$sql_2="INSERT INTO usr(usr,nombre,pwd,area,perfil) VALUES('$usr','$nombre','$pwd','$area','$perfil')";
$resultado2= $conn->query($sql_2);

if($resultado2){

    header ('Location:../actividad.php');
}

else{

    echo 'No se registró la actividad';
}

?>