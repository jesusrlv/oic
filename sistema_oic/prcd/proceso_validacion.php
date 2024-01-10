<html>
<header>
        <script src="https://cdn.jsdelivr.net/npm/sweetalert2@8"></script>
        <script src="sweetalert2.all.min.js"></script>
        <!-- Optional: include a polyfill for ES6 Promises for IE11 and Android browser -->
        <script src="https://cdn.jsdelivr.net/npm/promise-polyfill"></script>
</header>

<?php
include('conn.php');
session_start();

$usuario=$_POST['usr'];
$pwd=$_POST['pwd'];

$query="SELECT * FROM usr WHERE usr='$usuario' AND pwd='$pwd'";

$proceso=$conn->query($query);

if ($resultado=mysqli_fetch_array($proceso)){


    $_SESSION['usr']=$usuario;
    $_SESSION['id']=$resultado['id'];
    $_SESSION['perfil']=$resultado['perfil'];
    $_SESSION['nombre']=$resultado['nombre'];

      if($resultado['perfil']==1){
        
        echo "<script type=\"text/javascript\">
            Swal.fire({
                icon: 'success',
                title: 'Usuario correcto',
                text: 'Bienvenido ".$_SESSION['nombre']."',
                footer: 'INJUVENTUD</a>'
            }).then(function(){window.location='../tablero_usr.php';});</script>";
        }
    
    elseif($resultado['perfil']==2){

        echo "<script type=\"text/javascript\">
            Swal.fire({
                icon: 'success',
                title: 'Usuario correcto',
                text: 'Bienvenido ".$_SESSION['nombre']."',
                footer: 'INJUVENTUD</a>'
            }).then(function(){window.location='../tablero_admin.php';});</script>";
        
    }

    elseif($resultado['perfil']==3){

        echo "<script type=\"text/javascript\">location.href='../modificar.php';</script>";
    }
    

}
    


    else{
   
    echo "<script type=\"text/javascript\">alert('Usuario no válido');location.href='../';</script>";

    
    }

         

?>

</html>