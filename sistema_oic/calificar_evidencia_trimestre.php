<?php
session_start();

if (isset($_SESSION['usr'])) {
    if($_SESSION['perfil']==1){
        // header('Location: javascript: history.go(-1)');
    }
    elseif($_SESSION['perfil']==2){
        // header('Location: javascript: history.go(-1)');
    }
    elseif($_SESSION['perfil']==3){

        // header('Location: javascript: history.go(-1)');
    }
    else{
        header('Location:prcd/sort.php');
    }
    // Si esta identificado, en otras palabras existe la variable, le saludamos
    // echo 'Hola ' . $_SESSION['usr'];
} else {
    // En caso contrario redirigimos el visitante a otra página

    echo 'Usuario no válido';
    // header('Location: ../../autentificacion/');
    header('Location: prcd/sort.php');
    die();
}
// variables de sesión

$usuario = $_SESSION['usr'];
$id = $_SESSION['id'];
$perfil = $_SESSION['perfil'];
$nombre = $_SESSION['nombre'];

$ev = $_REQUEST['ev'];
$act = $_REQUEST['act'];

include('prcd/conn.php');
?>

<!doctype html>
<html lang="es">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <meta name="generator" content="">
    <title>Dashboard | OIC</title>

    <link rel="icon" type="image/png" href="../icon.ico"/>
    <link rel="canonical" href="https://getbootstrap.com/docs/5.3/examples/dashboard/">

    <!-- bootstrap -->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js" integrity="sha384-BBtl+eGJRgqQAUMxJ7pMwbEyER4l1g+O15P+16Ep7Q9Q+zqX6gSbd85u4mG4QzX+" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.2/font/bootstrap-icons.min.css">
    
    <!-- jquery -->
    <!-- <script src="https://code.jquery.com/jquery-3.5.1.min.js" integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=" crossorigin="anonymous"></script> -->

    <!-- ajax -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js" integrity="sha512-v2CJ7UaYy4JwqLDIrZUI/4hqeoQieOmAZNXBeQyjo21dadnwR+8ZaIJVT8EE2iyI61OV8e6M8PP2/4hpQINQ/g==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    
    <!-- fontawasome -->
    <script src="https://kit.fontawesome.com/4d63b5ef28.js" crossorigin="anonymous"></script>

    <!-- Bootstrap core CSS -->
    <link href="assets/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="css/bootstrap.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.2/font/bootstrap-icons.min.css">
    <!-- Bootstrap core CSS -->
    <link href="css/bootstrap.css" rel="stylesheet">

    <style>
      .bd-placeholder-img {
        font-size: 1.125rem;
        text-anchor: middle;
        -webkit-user-select: none;
        -moz-user-select: none;
        -ms-user-select: none;
        user-select: none;
      }

      @media (min-width: 768px) {
        .bd-placeholder-img-lg {
          font-size: 3.5rem;
        }
      }
    </style>
    <!-- Custom styles for this template -->
    <link href="css/dashboard.css" rel="stylesheet">
  </head>
  <body>
    <nav class="navbar navbar-light sticky-top flex-md-nowrap p-0 text-white" style="background-color:#83272b;">
        <a class="navbar-brand col-md-3 col-lg-2 mr-0 px-3 text-center text-light" href="#">
    <h6 class="text-center text-light display-7">OIC</h6>
    </a>
  <button class="navbar-toggler position-absolute d-md-none collapsed" type="button" data-toggle="collapse" data-target="#sidebarMenu" aria-controls="sidebarMenu" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>  
  
  <ul class="navbar-nav px-3">
    <li class="nav-item text-nowrap">
        <a class="btn btn-outline-light" href="prcd/sort.php" role="button"><i class="fas fa-sign-out-alt"></i> Salir</a>    </li>
  </ul>
</nav>

<div class="container-fluid">
  <div class="row">
    <nav id="sidebarMenu" class="col-md-3 col-lg-2 d-md-block bg-light sidebar collapse">
      <div class="sidebar-sticky pt-3">
        
        <ul class="navbar-nav px-3 text-center">
            <li class="align-middle">
                   <img src="../logo_injuventud_01.png" width="35%" class="" alt="" loading="lazy">  
      
            </li>
        </ul>

        <h6 class="sidebar-heading d-flex justify-content-center text-center align-items-center px-3 mt-4 mb-1 text-muted">
          <span class="">
          bienvenido<br><i class="fas fa-user"></i> 
            <?php
            
              echo ($nombre);
            
            ?>
          </span>
        </h6>
<hr>
<ul class="nav flex-column">
  <li class="nav-item">
    <a class="nav-link active" href="tablero_admin.php">
     <i class="fas fa-laptop-house"></i> 
     Inicio <span class="sr-only">(current)</span>
   </a>
 </li>
 <hr style="color: dimgrey;">
 
</ul>


      </div>
    </nav>

    <main role="main" class="col-md-9 ml-sm-auto col-lg-10 px-md-4">
      <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
      <div class="d-flex align-items-center p-3 my-3 text-white-50 bg-light rounded shadow-sm w-100">
          <img class="mr-3" src="../logo_injuventud_01.png" alt="" width="48" height="48">
          <div class="lh-100">
            <h6 class="mb-0 text-muted lh-100">Instituto de la Juventud del Estado de Zacatecas</h6>
            <small class="text-muted">Órgano de control interno</small>
          </div>
        </div>
        <div class="btn-toolbar mb-2 mb-md-0">
         
        </div>
      </div>

      
<?php

if($ev==1){
    echo '<h2>Primer Trimestre</h2>';
}
elseif($ev==2){
    echo '<h2>Segundo Trimestre</h2>';
}
elseif($ev==3){
    echo '<h2>Tercer Trimestre</h2>';
}
elseif($ev==4){
    echo '<h2>Cuarto Trimestre</h2>';
}

?>

      <hr style="color: dimgrey;">
      <h2></h2>
      <div class="table-responsive">
        <table class="table table-bordered table-hover table-striped table-md" style="text-align: center;">
          <thead class="bg-dark text-light">
            <tr>
              <th>#</th>
              <th>Descripción</th>
              <th>Fecha de registro</th>
              <th>Archivo</th>
            
            </tr>
          </thead>
          <tbody>

            <!-- inicio loop tabla -->

            <?php
                  
                    $tabla="SELECT * FROM bitacora WHERE trimestre = '$ev' AND actividad_vinculada = '$act'";
                    $resultadotabla = $conn->query($tabla);
                    $numero=0;
                    while($row = $resultadotabla->fetch_assoc()){
                        $numero++;

                        echo '<tr>';
                            echo '<td>'.$numero.'</td>';
                            echo '<td><center>'.$row['descripcion'].'</center></td>';
                            echo '<td><center>'.$row['fecha'].'</center></td>';
                            echo ('<td><a href="./'.$row['url_doc'].'" class="badge badge-primary" target="_blank"><i class="fas fa-eye"></i> Visualizar</a></td>');
                            
                        echo '</tr>';
                      
                    }
                ?>

            <!-- fin loop tabla -->

            
  
          </tbody>
        </table>
        <?php
          if($perfil == 3){
            echo '
            <script>
            window.onload = function() {
              hiddenF();
            }
            </script>
            
            '; 
          }
          // else{
          //   echo '<form action="prcd/proceso_calificar_trimestre.php" method="POST">';
          // }
          ?>
        
            <form action="prcd/proceso_calificar_trimestre.php" method="POST">
            <p><input type="text" name="observaciones" id="observaciones" class="form-control w-50" placeholder="Observaciones" aria-label="Observaciones" aria-describedby="Observaciones" required hidden></p>
            <div class="input-group mb-3 w-25">
            <input type="text" name="act" id="act" value="<?php echo $act ?>" hidden>
            <input type="text" name="ev" id="ev" value="<?php echo $ev ?>" hidden>
                <input type="number" name="calificacion" id="calificacion" class="form-control w-25" placeholder="Calificar" aria-label="Calificar" aria-describedby="Calificar" required hidden>
                <button class="btn btn-outline-info" type="submit" id="btnSub" hidden><i class="bi bi-bullseye"></i> Calificar</button>
            </div>
            </form>
      
      <?php
      if($perfil==1){
          echo '
          <div class="d-grid gap-2">
            <a href="" class="btn btn-primary" type="button">Regresar</a>
          </div>
          ';
      }
      else if($perfil==2){
          echo '
          <div class="d-grid gap-2">
            <a href="tablero_admin.php" class="btn btn-primary" type="button">Regresar</a>
          </div>
          ';
      }
      ?>
      </div>
    </main>
  </div>
</div>
<!-- <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script> -->
      <!-- <script>window.jQuery || document.write('<script src="../assets/js/vendor/jquery.slim.min.js"><\/script>')</script><script src="css/bootstrap.bundle.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/feather-icons/4.9.0/feather.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.7.3/Chart.min.js"></script> -->
        <script src="css/dashboard.js"></script></body>

        <script>
      function hiddenF(){
        document.getElementById("observaciones").hidden = false;
        document.getElementById("calificacion").hidden = false;
        document.getElementById("btnSub").hidden = false;
      }
      </script>
</html>
