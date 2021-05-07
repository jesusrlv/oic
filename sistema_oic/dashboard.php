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

include('prcd/conn.php');

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
        <a class="btn btn-outline-light" href="prcd/sort.php" role="button"><i class="fas fa-sign-out-alt"></i> Salir</a>    </li>
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

        <h6 class="sidebar-heading d-flex justify-content-center text-center align-items-center px-3 mt-4 mb-1 text-muted">
          <span class="">
          bienvenido<br><i class="fas fa-user"></i> 
            <?php
            
              echo utf8_encode($nombre);
            
            ?>
          </span>
        </h6>
      <hr>
        
        <?php
        if($perfil == 1){
          echo '<ul class="nav flex-column">';
        }

        else{
          echo '<ul class="nav flex-column" hidden>';
        }
        
        ?>
 
           <li class="nav-item">
            <a class="nav-link active" href="#">
              <!-- <span data-feather="home"></span> -->
              <i class="fas fa-laptop-house"></i> 
              Dashboard <span class="sr-only">(current)</span>
            </a>
          </li>
          <hr style="color: dimgrey;">
          
          <h6 class="sidebar-heading d-flex justify-content-between align-items-center px-3 mt-4 mb-1 text-muted">
            <span>AÑO 2021</span>
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

        <?php
        if($perfil == 2){
          echo '<ul class="nav flex-column">';
        }

        else{
          echo '<ul class="nav flex-column" hidden>';
        }
        
        ?>
        <!-- <ul class="nav flex-column mb-2"> -->
        
        
          <h6 class="sidebar-heading d-flex justify-content-between align-items-center px-3 mt-4 mb-1 text-muted">
            <span>Departamentos responsables</span>
            <a class="d-flex align-items-center text-muted" href="#" aria-label="Add a new report">
              <span data-feather="plus-circle"></span>
            </a>
          </h6>
          <?php 
          $tabla="SELECT * FROM area";
                      $resultadotabla = $conn->query($tabla);
                      while($row = $resultadotabla->fetch_assoc()){
                          
                        echo '<li class="nav-item">';
                        echo utf8_encode('<a class="nav-link" href="area.php?area='.$row['resp'].'">
                          <span data-feather="file-text"></span>
                            '.$row['area'].'
                            
                            </a>');
                        echo '</li>';                      
                      }

                      ?>
          </ul>
        

       
        <h6 class="sidebar-heading d-flex justify-content-between align-items-center px-3 mt-4 mb-1 text-muted">
          
        <?php
        if($perfil == 2){
          echo '<span>Plantillas</span>';
        }

        else{
          echo '<span></span>';
        }
        
        ?>
          <!-- <span>Plantillas</span> -->
          
          <a class="d-flex align-items-center text-muted" href="#" aria-label="Add a new report">
            <span data-feather="plus-circle"></span>
          </a>
        </h6>

        <?php
        if($perfil == 2){
          echo '<ul class="nav flex-column">';
        }

        else{
          echo '<ul class="nav flex-column" hidden>';
        }
        
        ?>
        <!-- <ul class="nav flex-column mb-2"> -->
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
      <div class="d-flex align-items-center p-3 my-3 text-white-50 bg-light rounded shadow-sm w-100">
          <img class="mr-3" src="img/TrabajemosJuntosJuventud.png" alt="" width="48" height="48">
          <div class="lh-100">
            <h6 class="mb-0 text-muted lh-100">Instituto de la Juventud del Estado de Zacatecas</h6>
            <small class="text-muted">Órgano de control interno</small>
          </div>
        </div>
        <div class="btn-toolbar mb-2 mb-md-0">
          <!-- <div class="btn-group mr-2">
            <button type="button" class="btn btn-sm btn-outline-secondary">Reporte PDF</button>
            <button type="button" class="btn btn-sm btn-outline-secondary">Reporte EXCEL</button>
          </div> -->
         
        </div>
      </div>

      <h4>Selecciona alguna de las opciones</h4>

      <hr style="color: dimgrey;">
      <h2></h2>

      <?php
        if($perfil == 1){
          echo '<div class="container">';
        }

        else{
          echo '<div class="container" hidden>';
        }
        
        ?>
      <!-- <div class="container"> -->
  
        <div class="row row-cols-1 row-cols-md-2">
          <div class="col mb-4">
            <div class="card text-white bg-info mb-6" style="max-width: 36rem; height: 27rem;">
              <div class="card-header">Enero-Marzo 2020</div>
              <div class="card-body"><br><br><br>
                <h1 class="card-title">Primer trimestre</h1>
                <?php
                  $observaciones1 ="SELECT * FROM actividad WHERE responsable = '$id'";
                  $resultado_observaciones1 = $conn->query($observaciones1);
                      while($row_observaciones1 = $resultado_observaciones1->fetch_assoc()){
                        echo '<p class="card-text"><i class="bi bi-info-circle-fill"></i> '.$row_observaciones1['observaciones'].'</p>';
                      }
                ?>
                <!-- <p class="card-text">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Maiores aliquid, dolores distinctio similique excepturi omnis qui accusantium sit molestiae ad dignissimos voluptatem vitae! Ipsam molestiae culpa quia quas libero necessitatibus..</p> -->
                <p><a href="trimestre1.php" type="button" class="btn btn-warning"><i class="fas fa-edit"></i> Editar...</a></p>
              </div>
            </div>
          </div>
          <div class="col mb-4">
            <div class="card text-white bg-info mb-6" style="max-width: 36rem;height: 27rem;">
              <div class="card-header">Abril-Junio 2020</div>
              <div class="card-body"><br><br><br>
                <h1 class="card-title">Segundo trimestre</h1>
                <?php
                  $observaciones2 ="SELECT * FROM actividad WHERE responsable = '$id'";
                  $resultado_observaciones2 = $conn->query($observaciones2);
                      while($row_observaciones2 = $resultado_observaciones2->fetch_assoc()){
                        echo '<p class="card-text"><i class="bi bi-info-circle-fill"></i> '.$row_observaciones2['observaciones2'].'</p>';
                      }
                ?>                <p><a href="trimestre2.php" type="button" class="btn btn-warning"><i class="fas fa-edit"></i> Editar...</a></p>
              </div>
            </div>
          </div>
          <div class="col mb-4">
            <div class="card text-white bg-info mb-6" style="max-width: 36rem;height: 27rem;">
              <div class="card-header">Julio-Septiembre 2020</div>
              <div class="card-body"><br><br><br>
                <h1 class="card-title">Tercer trimestre</h1>
                <?php
                  $observaciones3 ="SELECT * FROM actividad WHERE responsable = '$id'";
                  $resultado_observaciones3 = $conn->query($observaciones3);
                      while($row_observaciones3 = $resultado_observaciones3->fetch_assoc()){
                        echo '<p class="card-text"><i class="bi bi-info-circle-fill"></i> '.$row_observaciones3['observaciones3'].'</p>';
                      }
                ?>                
                <p><a href="trimestre3.php" type="button" class="btn btn-warning"><i class="fas fa-edit"></i> Editar...</a></p>
              </div>
            </div>
          </div>
          <div class="col mb-4">
            <div class="card text-white bg-info mb-6" style="max-width: 36rem;height: 27rem;">
              <div class="card-header">Octubre-Diciembre 2020</div>
              <div class="card-body"><br><br><br>
                <h1 class="card-title">Cuarto trimestre</h1>
                <?php
                  $observaciones4 ="SELECT * FROM actividad WHERE responsable = '$id'";
                  $resultado_observaciones4 = $conn->query($observaciones4);
                      while($row_observaciones4 = $resultado_observaciones4->fetch_assoc()){
                        echo '<p class="card-text"><i class="bi bi-info-circle-fill"></i> '.$row_observaciones3['observaciones3'].'</p>';
                      }
                ?>                 <p><a href="trimestre4.php" type="button" class="btn btn-warning"><i class="fas fa-edit"></i> Editar...</a></p>
              </div>
            </div>
          </div>

          

      </div> <!-- container -->
      
      
      <div class="container">

        

        <div class="col mb-12">
          
        <?php
          if($perfil == 1){
            echo '<div class="card text-white bg-warning mb-12 align-middle" style="max-width: 96rem;" hidden>';
          }

          elseif ($perfil == 2){
            echo '<div class="card text-white bg-warning mb-12 align-middle" style="max-width: 96rem;">';
          }
          
          ?>
          
          <!-- <div class="card text-white bg-warning mb-12 align-middle" style="max-width: 96rem;"> -->
            <div class="card-header">Opción:</div>
            <div class="card-body">
              <h1 class="card-title">Modificar:</h1>
              <p class="card-text">
                <ul>
                  <li>Actividad</li>
                  <li>Responsables</li>
                  <li>Medio de verificación</li>
                </ul>
              </p>
              <a href="modificar.php" type="button" class="btn btn-primary btn-lg btn-block"><i class="fas fa-edit"></i> Modificar</a>
            </div>
          </div>
        </div>
      </div>

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
