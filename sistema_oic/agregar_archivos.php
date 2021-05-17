<?php
include('prcd/conn.php');
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

$usuario = $_SESSION['usr'];
$id = $_SESSION['id'];
$perfil = $_SESSION['perfil'];
$nombre = $_SESSION['nombre'];

$id_trimestre=$_REQUEST['id'];
$id_actividad=$_REQUEST['act'];

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
    <!-- <link rel="canonical" href="https://getbootstrap.com/docs/4.5/examples/dashboard/"> -->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js" integrity="sha384-q2kxQ16AaE6UbzuKqyBE9/u/KzioAlnx2maXQHiDX9d4/zp8Ok3f+M7DPm+Ib6IU" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.min.js" integrity="sha384-pQQkAEnwaBkjpqZ8RU1fF1AKtTcHJwFl3pblpTlHXybJjHpMYo79HY3hIi4NKxyj" crossorigin="anonymous"></script>

    <script src="https://kit.fontawesome.com/4d63b5ef28.js" crossorigin="anonymous"></script>

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
    <nav class="navbar navbar-light sticky-top flex-md-nowrap p-0 bg-info text-white">
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
        <a class="btn btn-outline-light" href="#" role="button"><i class="fas fa-sign-out-alt"></i> Salir</a>    </li>
  </ul>
</nav>

<div class="container-fluid">
  <div class="row">
    <nav id="sidebarMenu" class="col-md-3 col-lg-2 d-md-block bg-light sidebar collapse">
      <div class="sidebar-sticky pt-3">
        
        <ul class="navbar-nav px-3 text-center">
            <li class="align-middle">
                   <img src="img/TrabajemosJuntosJuventud.png" width="35%" class="" alt="" loading="lazy">  
      
            </li>
        </ul>
<hr>
<ul class="nav flex-column">
    <li class="nav-item">
        <a class="nav-link active" href="dashboard.php">
       <!-- <span data-feather="home"></span> -->
       <i class="fas fa-laptop-house"></i> 
       Dashboard <span class="sr-only">(current)</span>
     </a>
   </li>
   <hr style="color: dimgrey;">
   
   <h6 class="sidebar-heading d-flex justify-content-between align-items-center px-3 mt-4 mb-1 text-muted">
     <span>AÑO 2020</span>
     <a class="d-flex align-items-center text-muted" href="#" aria-label="Add a new report">
       <span data-feather="plus-circle"></span>
     </a>
   </h6>

   <li class="nav-item">
     <a class="nav-link" href="trimestre1.php">
       <span data-feather="layers"></span>
        
       Primer trimestre
     </a>
   </li>
   <li class="nav-item">
     <a class="nav-link" href="trimestre2.php">
       <span data-feather="layers"></span>
       Segundo trimestre
     </a>
   </li>
   <li class="nav-item">
     <a class="nav-link" href="trimestre3.php">
       <span data-feather="layers"></span>
       Tercer trimestre
     </a>
   </li>
   <li class="nav-item">
     <a class="nav-link" href="trimestre4.php">
       <span data-feather="layers"></span>
       Cuarto trimestre
     </a>
   </li>
 </ul>

 <!-- <h6 class="sidebar-heading d-flex justify-content-between align-items-center px-3 mt-4 mb-1 text-muted">
   <span>Plantillas</span>
   <a class="d-flex align-items-center text-muted" href="#" aria-label="Add a new report">
     <span data-feather="plus-circle"></span>
   </a>
 </h6>
 <ul class="nav flex-column mb-2">
   <li class="nav-item">
     <a class="nav-link" href="modificar.php">
       <span data-feather="file-text"></span>
       Modificar
     </a>
   </li>
   
 </ul>     -->
      </div>
    </nav>

    <main role="main" class="col-md-9 ml-sm-auto col-lg-10 px-md-4">
      <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <!-- <h1 class="h3">MODIFICAR ACTIVIDAD</h1> -->
        <div class="d-flex align-items-center p-3 my-3 text-white-50 bg-light rounded shadow-sm w-100">
          <img class="mr-3" src="img/TrabajemosJuntosJuventud.png" alt="" width="48" height="48">
          <div class="lh-100">
            <h6 class="mb-0 text-muted lh-100">Instituto de la Juventud del Estado de Zacatecas</h6>
            <small class="text-muted">Órgano de control interno</small>
          </div>
        </div>
        
        <div class="btn-toolbar mb-2 mb-md-0">
          <div class="btn-group mr-2">
            <!-- <button type="button" class="btn btn-sm btn-outline-secondary">Reporte PDF</button>
            <button type="button" class="btn btn-sm btn-outline-secondary">Reporte EXCEL</button> -->
          </div>
         
        </div>
      </div>

      <h2></h2>

      <!-- <hr style="color: dimgrey;"> -->
      <h2></h2>
          <div class="container-fluid">
        
          <form action="prcd/proceso_agregar_evidencia.php" method="POST" enctype="multipart/form-data">

          <input type="hidden" name="trimestre" id="trimestre" value="<?php echo $id_trimestre ?>">
          <input type="hidden" name="actividad" id="actividad" value="<?php echo $id_actividad ?>">
                

                <div class="input-group w-50 mb-3">
                  <span class="input-group-text">Observaciones de la actividad</span>
                  <textarea class="form-control" aria-label="With textarea" name="descripcion" REQUIRED></textarea>
                </div>


                <div class="input-group mb-3 w-25">
                  <span class="input-group-text" id="inputGroup-sizing-default">Fecha de inicio</span>
                  <input type="date" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default" name="fecha_inicio" REQUIRED>
                </div>
                <div class="input-group mb-3 w-25">
                  <span class="input-group-text" id="inputGroup-sizing-default">Fecha de finalización</span>
                  <input type="date" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default" name="fecha_finalizacion" REQUIRED>
                </div>

                <p><h2><i class="fas fa-file-pdf"></i> Agregar evidencia</h2></p>
                    <hr class="my-4">

                            <div class="form-group">
                            <label for="exampleFormControlFile1"><h5>Cargar PDF</h5></label>
                            <input type="file" class="form-control-file" id="exampleFormControlFile1" name="file1" accept="application/pdf, application/vnd.ms-excel" REQUIRED>
                            </div>

                    <hr class="my-4">

                <button type="submit" class="btn btn-primary"><i class="fas fa-save"></i> Guardar evidencia</button>
                <a href="javascript:history.back()" type="submit" class="btn btn-danger"><i class="far fa-times-circle"></i> Cancelar</a>
            </form>
        

            </div> <!-- div container -->


            
      

      </div>


    </main>
  </div>
</div>
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
      <script>window.jQuery || document.write('<script src="../assets/js/vendor/jquery.slim.min.js"><\/script>')</script><script src="css/bootstrap.bundle.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/feather-icons/4.9.0/feather.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.7.3/Chart.min.js"></script>
        <script src="css/dashboard.js"></script></body>
</html>
