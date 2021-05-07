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

        <h6 class="sidebar-heading d-flex justify-content-center text-center align-items-center px-3 mt-4 mb-1 text-muted">
          <span class="">
          bienvenido<br><i class="fas fa-user"></i> 
            <?php
            
              echo utf8_encode($nombre);
            
            ?>
          </span>
        </h6>
<hr>
<ul class="nav flex-column">
  <li class="nav-item">
    <a class="nav-link" href="dashboard.php">
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
   <a class="nav-link active" href="trimestre1.php">
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
 
</ul> -->
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
          <div class="btn-group mr-2">
            <button type="button" class="btn btn-sm btn-outline-secondary">Reporte PDF</button>
            <button type="button" class="btn btn-sm btn-outline-secondary">Reporte EXCEL</button>
          </div>
         
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
              <!-- <th>Fecha inicio</th>
              <th>Fecha finalización</th> -->
              <th>Archivo</th>
            
            </tr>
          </thead>
          <tbody>

            <!-- inicio loop tabla -->

            <?php
                   //$tabla="SELECT * FROM archivos ORDER BY id_archivos ASC";
//                    $tabla="SELECT usr.id,usr.nombre,usr.curp,archivos.link1,archivos.link2,archivos.link3,archivos.link4,archivos.link5,archivos.link6,archivos.link7,archivos.link8,archivos.link9 FROM usr
// INNER JOIN archivos ON usr.curp = archivos.id_usr WHERE usr.priv = 1 ORDER BY usr.id";

                    $tabla="SELECT * FROM bitacora WHERE usr_vinculado='$id' AND trimestre = '$ev' AND actividad_vinculada = '$act'";
                    // $tabla="SELECT * FROM usr INNER JOIN archivos ON usr.codigo = archivos.codigo_usr WHERE usr.priv = 1 AND usr.tematica=1 ORDER BY usr.id ASC";
                    $resultadotabla = $conn->query($tabla);
                    $numero=0;
                    while($row = $resultadotabla->fetch_assoc()){
                        $numero++;
                        // $responsable=$row['responsable'];
                        // $verificacion=$row['medio_verificacion'];
                        
                        echo '<tr>';
                            echo '<td>'.$numero.'</td>';
                            echo '<td><center>'.$row['descripcion'].'</center></td>';

                            // $consulta1="SELECT id,nombre FROM usr WHERE id = '$responsable'";
                            // $resultado_consulta1 = $conn->query($consulta1);
                            // $trabajador_resultado = $resultado_consulta1->fetch_assoc();
                            // echo '<td><center>'.$trabajador_resultado['nombre'].'</center></td>';

                            // echo '<td><center>'.$row['responsable'].'</center></td>';


                            // echo '<td><center>'.$row['fecha_inicio'].'</center></td>';
                            // echo '<td><center>'.$row['fecha_final'].'</center></td>';
                            echo '<td><center>'.$row['fecha'].'</center></td>';

                            // $consulta2="SELECT id,medio FROM medio_verificacion WHERE id = '$verificacion'";
                            // $resultado_consulta2 = $conn->query($consulta2);
                            // $medio_resultado = $resultado_consulta2->fetch_assoc();
                            // echo utf8_encode('<td><center>'.$medio_resultado['medio'].'</center></td>');

                            // echo '<td><center>'.$row['medio_verificacion'].'</center></td>';


                            echo utf8_encode('<td><a href="./'.$row['url_doc'].'" class="badge badge-primary" target="_blank"><i class="fas fa-eye"></i> Visualizar</a></td>');
                            // echo '<td><center>'.$row['porcentaje'].'%</center></td>';
                            // echo '<td><center>0</center></td>';
                        echo '</tr>';
                      
                    }
                ?>

            <!-- fin loop tabla -->

            
  
          </tbody>
        </table>
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
