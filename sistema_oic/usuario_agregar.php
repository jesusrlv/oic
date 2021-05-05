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
     <!-- <span>AÑO 2020</span>
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
   </li> -->
 </ul>

 <h6 class="sidebar-heading d-flex justify-content-between align-items-center px-3 mt-4 mb-1 text-muted">
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
   
 </ul>    
      </div>
    </nav>

    <main role="main" class="col-md-9 ml-sm-auto col-lg-10 px-md-4">
      <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <!-- <h1 class="h3">MODIFICAR ACTIVIDAD</h1> -->
        

        <div class="alert alert-info" role="alert">
        <i class="fas fa-building"></i> AGREGAR USUARIO
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
        
          <form action="prcd/proceso_agregar_usr.php" method="POST">
                <div class="form-group">
                    <label for="exampleInputEmail1">Alias del usuario</label>
                    <input type="text" class="form-control" id="nombre_actv" aria-describedby="Text" name="usr" REQUIRED>
                    <small id="emailHelp" class="form-text text-muted">Agregar la actividad para tu perfil.</small>
                </div>
                <div class="form-group">
                    <label for="exampleInputEmail1">Nombre completo del usuario</label>
                    <input type="text" class="form-control" id="nombre_actv" aria-describedby="Text" name="nombre" REQUIRED>
                    <small id="emailHelp" class="form-text text-muted">Agregar la actividad para tu perfil.</small>
                </div>
                <div class="form-group">
                    <label for="exampleInputEmail1">Contraseña</label>
                    <input type="password" class="form-control" id="nombre_actv" aria-describedby="Text" name="pwd" REQUIRED>
                    <small id="emailHelp" class="form-text text-muted">Agregar la actividad para tu perfil.</small>
                </div>
                
                
                <div class="form-group">
                    <label for="exampleFormControlSelect1">Seleccionar responsable de la actividad</label>
                    <select class="form-control" id="exampleFormControlSelect1" name="area" REQUIRED>
                    <option value="">Seleccionar...</option>
                    <?php
                    $tabla="SELECT * FROM area ORDER BY id ASC";
                    $resultadotabla = $conn->query($tabla);
                    $numero=0;
                    while($row = $resultadotabla->fetch_assoc()){
                        $numero++;

                            echo '<option value="'.utf8_encode($row['id'].'">'.$row['area']).'</option>';
                    }
                ?>

                    </select>
                </div>
                
                
                <button type="submit" class="btn btn-primary"><i class="fas fa-save"></i> Registrar usuario</button>
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
