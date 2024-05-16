<?php
session_start();
date_default_timezone_set('America/Mexico_City');
setlocale(LC_TIME, 'es_MX.UTF-8');
$fecha = strftime("%Y-%m-%d,%H:%M:%S");

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
include('prcd/conn.php');
if(isset($_REQUEST['annio'])){
  $annio = $_REQUEST['annio'];
}
else{
  $annio =  date('Y', strtotime($fecha));
}

?>

<!doctype html>
<html lang="es">
  <head>
    <meta charset="utf-8">
    
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <meta name="generator" content="">
    <title>Tablero Usuario | OIC</title>

    <link rel="icon" type="image/png" href="../icon.ico"/>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js" integrity="sha512-v2CJ7UaYy4JwqLDIrZUI/4hqeoQieOmAZNXBeQyjo21dadnwR+8ZaIJVT8EE2iyI61OV8e6M8PP2/4hpQINQ/g==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
   
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js" integrity="sha384-BBtl+eGJRgqQAUMxJ7pMwbEyER4l1g+O15P+16Ep7Q9Q+zqX6gSbd85u4mG4QzX+" crossorigin="anonymous"></script>

    <link rel="canonical" href="https://getbootstrap.com/docs/5.3/examples/dashboard/">

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@docsearch/css@3">

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">

    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>


    <!-- Bootstrap core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

     <!-- Custom styles for this template -->
     <link href="css/dashboard.css" rel="stylesheet">

     <script src="css/bootstrap.bundle.min.js"></script>
     <script src="js/querys.js"></script>         
     <script src="js/tablero_usr.js"></script>         
    <?php

echo
'
<script>
  trimestre1('.$annio.','.$id.');
  trimestre2('.$annio.','.$id.');
  trimestre3('.$annio.','.$id.');
  trimestre4('.$annio.','.$id.');
</script>
';

?>

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
   
  </head>
  <body onload="annio()">
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
          Bienvenido<br><i class="bi bi-person"></i>
            <?php
            
              echo ($nombre);
            
            ?>
          </span>
        </h6>
<hr>
<ul class="nav flex-column">
  <li class="nav-item">
    <a class="nav-link" href="#">
    <i class="bi bi-house"></i>
     Inicio </span>
   </a>
 </li>
 <li class="nav-item">
     <a class="nav-link" href="prcd/sort.php">
     <i class="bi bi-door-open"></i> Salir
     </a>
   </li>
 <hr style="color: dimgrey;">
 
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

      <h2><i class="bi bi-people-fill me-3"></i> Tablero de usuario</h2>

      <div class="input-group mb-3">
        <span class="input-group-text" id="basic-addon1"><i class="bi bi-calendar2-check-fill"></i></span>
        <select class="form-select" id="selectAnnio" aria-label="Default select example" onchange="trimestre1(this.value,<?php echo $id ?>);trimestre2(this.value,<?php echo $id ?>);trimestre3(this.value,<?php echo $id ?>);trimestre4(this.value,<?php echo $id ?>);">
        </select>
      </div>
      <hr style="color: dimgrey;">
      <div class="container-fluid">


      </div>
      
      <h3>Primer trimestre</h3>
      <div class="table-responsive">
        <table class="table table-bordered table-hover table-striped table-sm align-middle" style="text-align: center;">
          <thead class="bg-dark text-light">
            <tr>
              <th>#</th>
              <th>Nombre actividad</th>
              <th>Responsable</th>
              <th>Medio verificación</th>
              <th>Acción</th>
              <th># de evidencias</th>
              <th>% avance</th>
              <th>Fecha inicio / fin</th>
              <th>Observaciones</th>
            </tr>
          </thead>
          <tbody id="semestre1">

          </tbody>
        </table>
      </div>
      
      <h3>Segundo trimestre</h3>
      <div class="table-responsive">
        <table class="table table-bordered table-hover table-striped table-sm align-middle" style="text-align: center;">
          <thead class="bg-dark text-light">
            <tr>
              <th>#</th>
              <th>Nombre actividad</th>
              <th>Responsable</th>
              <th>Medio verificación</th>
              <th>Acción</th>
              <th># de evidencias</th>
              <th>% avance</th>
              <th>Fecha inicio / fin</th>
              <th>Observaciones</th>
            </tr>
          </thead>
          <tbody id="semestre2">

          </tbody>
        </table>
      </div>
      
      <h3>Tercer trimestre</h3>
      <div class="table-responsive">
        <table class="table table-bordered table-hover table-striped table-sm align-middle" style="text-align: center;">
          <thead class="bg-dark text-light">
            <tr>
              <th>#</th>
              <th>Nombre actividad</th>
              <th>Responsable</th>
              <th>Medio verificación</th>
              <th>Acción</th>
              <th># de evidencias</th>
              <th>% avance</th>
              <th>Fecha inicio / fin</th>
              <th>Observaciones</th>
            </tr>
          </thead>
          <tbody id="semestre3">

          </tbody>
        </table>
      </div>

      <h3>Cuarto trimestre</h3>
      <div class="table-responsive">
        <table class="table table-bordered table-hover table-striped table-sm align-middle" style="text-align: center;">
          <thead class="bg-dark text-light">
            <tr>
              <th>#</th>
              <th>Nombre actividad</th>
              <th>Responsable</th>
              <th>Medio verificación</th>
              <th>Acción</th>
              <th># de evidencias</th>
              <th>% avance</th>
              <th>Fecha inicio / fin</th>
              <th>Observaciones</th>
            </tr>
          </thead>
          <tbody id="semestre4">

          </tbody>
        </table>
      </div>

    </main>
  </div>
</div>

</html>
<!-- modal de fechas -->
          <div class="modal fade" id="modalFechas" tabindex="-1" aria-labelledby="modalFechas" aria-hidden="true">
                        <div class="modal-dialog modal-dialog-centered">
                          <div class="modal-content">
                            <div class="modal-header">
                              <h5 class="modal-title" id="exampleModalLabel">Editar fechas de actividad semestral</h5>
                              
                            </div>
                            <div class="modal-body">

                            <form action="prcd/proceso_fecha.php" method="POST">
                              <input type="text" name="idFecha" id="idFecha" hidden>
                              <input name="trimestreModal" id="trimestreModal" hidden>
                              <div class="input-group mb-3 w-100">
                                <span class="input-group-text" id="inputGroup-sizing-default"><small><i class="bi bi-calendar-week"></i> Fecha de inicio</small></span>
                                <input type="date" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default" name="fecha_inicio" required>
                              </div>
                              <div class="input-group mb-3 w-10">
                                <span class="input-group-text" id="inputGroup-sizing-default"><small><i class="bi bi-calendar-week"></i> Fecha de finalización</small></span>
                                <input type="date" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default" name="fecha_finalizacion" required>
                              </div>
                            </div>
                            <!-- <input value="'.$row['id'].'" name="id" hidden> -->
                            <div class="modal-footer">
                              <button type="button" class="btn btn-danger btn-sm" data-bs-dismiss="modal"><i class="bi bi-x-circle-fill"></i> Cerrar</button>
                              <button type="submit" class="btn btn-primary btn-sm"><i class="bi bi-calendar-plus"></i> Guardar</button>

                            </form>
                            </div>
                          </div>
                        </div>
                      </div>
