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

    <link rel="icon" type="image/png" href="img/icon.ico"/>
    <link rel="canonical" href="https://getbootstrap.com/docs/4.5/examples/dashboard/">
    <script src="https://kit.fontawesome.com/4d63b5ef28.js" crossorigin="anonymous"></script>

    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js" integrity="sha384-BBtl+eGJRgqQAUMxJ7pMwbEyER4l1g+O15P+16Ep7Q9Q+zqX6gSbd85u4mG4QzX+" crossorigin="anonymous"></script>
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
    <!-- <nav class="navbar navbar-dark sticky-top bg-dark flex-md-nowrap p-0 shadow"> -->
    <nav class="navbar navbar-light sticky-top flex-md-nowrap p-0 text-white" style="background-color:#83272b;">
        <a class="navbar-brand col-md-3 col-lg-2 mr-0 px-3 text-center text-light" href="#">
    <!-- <img src="img/TrabajemosJuntosJuventud.png" width="30" height="30" class="d-inline-block align-top" alt="" loading="lazy">   -->
    <h6 class="text-center text-light display-7">OIC</h6>
    </a>
  <button class="navbar-toggler position-absolute d-md-none collapsed" type="button" data-toggle="collapse" data-target="#sidebarMenu" aria-controls="sidebarMenu" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <!-- <input class="form-control form-control-dark w-30" type="text" placeholder="Search" aria-label="Search"> -->
  
  
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
        <hr style="color: dimgrey;">
        <h6 class="sidebar-heading d-flex justify-content-center text-center align-items-center px-3 mt-2 mb-1 text-muted">
          <span class="">
            bienvenido<br><i class="fas fa-user"></i> 
            <?php
            
            echo ($nombre);
            
            ?>
          </span>
        </h6>
        <hr style="color: dimgrey;">
<ul class="nav flex-column">
    <li class="nav-item">
        <a class="nav-link active" href="#">
       <i class="fas fa-laptop-house"></i> 
       Inicio <span class="sr-only">(current)</span>
     </a>
   </li>
  
    <li class="nav-item">
      <a class="nav-link" href="modificar.php">
        <i class="bi bi-app-indicator"></i>
       Modificar
     </a>
   </li>
 </ul>  
      </div>
    </nav>

    <main role="main" class="col-md-9 ml-sm-auto col-lg-10 px-md-4">
      <div class="alert alert-primary mt-3 text-center" role="alert">
      <i class="bi bi-app-indicator"></i> <strong>Opciones para editar el sistema</strong>
      </div>
      <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <div class="btn-toolbar mb-2 mb-md-0">
          <div class="btn-group mr-2">
            <!-- <button type="button" class="btn btn-sm btn-outline-secondary">Reporte PDF</button>
            <button type="button" class="btn btn-sm btn-outline-secondary">Reporte EXCEL</button> -->
          </div>
         
        </div>
      </div>

      <div class="container">
        <div class="row row-cols-1 row-cols-md-2">
          <div class="col mb-4">
            <div class="card text-white bg-dark mb-6" style="max-width: 36rem; height: 27rem;">
              <div class="card-header">Opción para editar:</div>
              <div class="card-body"><br><br><br>
                <h1 class="card-title">Actividad</h1>
                <p class="card-text">Agregar actividad relacionada con los informes.</p>
                <p><a href="actividad_agregar.php" type="button" class="btn btn-warning"><i class="fas fa-edit"></i> Editar...</a></p>
              </div>
            </div>
          </div>
          <div class="col mb-4">
            <div class="card text-white bg-dark mb-6" style="max-width: 36rem;height: 27rem;">
              <div class="card-header">Opción para editar:</div>
              <div class="card-body"><br><br><br>
                <h1 class="card-title">Responsable</h1>
                <p class="card-text">Agregar área responsable de la información.</p>
                <p><a href="usuario_agregar.php" type="button" class="btn btn-warning"><i class="fas fa-edit"></i> Editar...</a></p>
              </div>
            </div>
          </div>
          <div class="col mb-4">
            <div class="card text-white bg-dark mb-6" style="max-width: 36rem;height: 27rem;">
              <div class="card-header">Opción para editar:</div>
              <div class="card-body"><br><br><br>
                <h1 class="card-title">Medio de verificación</h1>
                <p class="card-text">Agregar medio de verificación.</p>
                <p><a href="medio_verificacion_agregar.php" type="button" class="btn btn-warning"><i class="fas fa-edit"></i> Editar...</a></p>
              </div>
            </div>
          </div>
          <div class="col mb-4">
            <div class="card text-white bg-dark mb-6" style="max-width: 36rem;height: 27rem;">
              <div class="card-header">Opción para editar:</div>
              <div class="card-body"><br><br><br>
                <h1 class="card-title">Área responsable</h1>
                <p class="card-text">Agregar área responsable.</p>
                <p><a href="area_agregar.php" type="button" class="btn btn-warning"><i class="fas fa-edit"></i> Editar...</a></p>
              </div>
            </div>
          </div>
          <div class="col mb-4">
            <div class="card text-white bg-dark mb-6" style="max-width: 36rem;height: 27rem;">
              <div class="card-header">Opción para editar:</div>
              <div class="card-body"><br><br><br>
                <h1 class="card-title">Usuarios</h1>
                <p class="card-text">Agregar usuarios del sistema.</p>
                <p><a href="usuario_agregar.php" type="button" class="btn btn-warning"><i class="fas fa-edit"></i> Editar...</a></p>
              </div>
            </div>
          </div>
      </div> <!-- container -->
      
      </div>
    </main>
  </div>
</div>
</body>
</html>