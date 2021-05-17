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
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.1/dist/umd/popper.min.js" integrity="sha384-SR1sx49pcuLnqZUnnPwx6FCym0wLsk5JZuNx2bPPENzswTNFaQU1RDvt3wT4gWFG" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.min.js" integrity="sha384-j0CNLUeiqtyaRmlzUHCPZ+Gy5fQu0dQ6eZ/xAww941Ai1SxSY+0EQqNXNE6DZiVc" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css">
    
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
        <a class="btn btn-outline-light btn-sm" href="prcd/sort.php" role="button"><i class="fas fa-sign-out-alt"></i> Salir</a>    </li>
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

        <h6 class="sidebar-heading d-flex justify-content-center text-center align-items-center px-3 mt-4 mb-1 text-muted">
          <span class="">
          bienvenido<br><i class="fas fa-user"></i> 
            <?php
            
              echo utf8_encode($nombre);
            
            ?>
          </span>
        </h6>

<ul class="nav flex-column">
    <li class="nav-item">
        <a class="nav-link active" href="#">
       <!-- <span data-feather="home"></span> -->
       <i class="fas fa-laptop-house"></i> 
       Dashboard <span class="sr-only">(current)</span>
     </a>
   </li>
   <hr style="color: dimgrey;">
   
   <!-- <h6 class="sidebar-heading d-flex justify-content-between align-items-center px-3 mt-4 mb-1 text-muted">
     <span>AÑO 2021</span>
     <a class="d-flex align-items-center text-muted" href="#" aria-label="Add a new report">
       <span data-feather="plus-circle"></span>
     </a>
   </h6> -->

   <!-- <li class="nav-item">
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
   </li> -->
   
 </ul>    
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

      <h2>Primer trimestre 2021</h2>

      <hr style="color: dimgrey;">
      <h2></h2>
      <!-- <div class="container-fluid"> -->
        <div class="table-responsive">
        
        <!-- <a href="actividad_agregar.php" type="button" class="btn btn-info" style="margin-bottom:3px;"><i class="fas fa-plus-circle"></i> Agregar actividad</a> -->
          
          <table class="table table-bordered table-hover table-striped table-md align-middle table-sm" style="text-align: center;">
          <thead class="bg-dark text-light">
              <tr class="align-middle">
                <th scope="col" class="align-middle">#</th>
                <th scope="col" class="align-middle">Nombre de la actividad</th>
                <th scope="col" class="align-middle">Responsable</th>
                <th scope="col" class="align-middle">Descripción</th>
                <th scope="col" class="align-middle">Trimestre</th>
                <th scope="col" class="align-middle">Fecha de inicio</th>
                <th scope="col" class="align-middle">Fecha de finalización</th>
                <th scope="col" class="align-middle">% Avance</th>
                <th scope="col" class="align-middle"># Docs</th>
                <th scope="col" class="align-middle">Acción</th>
                <th scope="col" class="align-middle">Medio Verificación</th>
                <th scope="col" class="align-middle">Observaciones</th>
              </tr>
            </thead>
            <tbody>
              <tr>
              <?php
              $tabla="SELECT * FROM actividad WHERE annio = 2 ORDER BY id ASC";
                    // $tabla="SELECT * FROM usr INNER JOIN archivos ON usr.codigo = archivos.codigo_usr WHERE usr.priv = 1 AND usr.tematica=1 ORDER BY usr.id ASC";
                    $resultadotabla = $conn->query($tabla);
                    $numero=0;
                    while($row = $resultadotabla->fetch_assoc()){
                        $numero++;
                        
                        echo '<tr>';

                            echo '<td class="align-middle"><center>'.$numero.'</center></td>';
                            echo utf8_encode('<td class="align-middle"><center>'.$row['actividad'].'</center></td>');
                            // echo utf8_encode('<td><center>'.$row['responsable'].'</center></td>');
                            $id_responsable=$row['responsable'];
                            $responsable = "SELECT * FROM usr WHERE id ='$id_responsable'";
                            $resultado_responsable= $conn->query($responsable);
                            $row_responsable=$resultado_responsable->fetch_assoc();
                            echo '<td class="align-middle">'.utf8_encode($row_responsable['nombre']).'</td>';

                            echo utf8_encode('<td class="align-middle"><center>'.$row['descripcion'].'</center></td>');
                            // echo utf8_encode('<td class="align-middle"><center>'.$row['trimestre'].'</center></td>');
                            echo utf8_encode('<td class="align-middle"><center>1</center></td>');
                            $fecha_inicio = $row['fecha_inicio'];
                            $fecha_inicio_mx = date("d/m/Y", strtotime($fecha_inicio));
                            $fecha_final = $row['fecha_final'];
                            $fecha_final_mx = date("d/m/Y", strtotime($fecha_final));

                            echo utf8_encode('<td class="align-middle"><center>'.$fecha_inicio_mx.'</center></td>');
                            echo utf8_encode('<td class="align-middle"><center>'.$fecha_final_mx.'</center></td>');
                            echo utf8_encode('<td class="align-middle"><center>'.$row['porcentaje'].'</center></td>');
                            
                            $responsable = $row['responsable'];
                            $id_row = $row['id'];
                            $tabla_cont="SELECT count(*) AS total FROM bitacora WHERE trimestre = 1 AND actividad_vinculada = '$id_row'";
                            $resultadotabla_cont = $conn->query($tabla_cont);
                            $cont_resultado = $resultadotabla_cont->fetch_assoc();
                            $num_rows = $cont_resultado['total'];
                            echo '<td class="align-middle"><span class="badge bg-info text-light"><center><i class="bi bi-file-post"></i> '.$num_rows.'</center></span></td>';

                            echo ('<td class="align-middle"><a href="calificar_evidencia_trimestre.php?act='.$row['id'].'&ev=1"><i class="bi bi-clipboard-check"></i> Calificar</center></a></td>');
                            // echo utf8_encode('<td><center>'.$row['medio_verificacion'].'</center></td>');
                            $id_verificacion=$row['medio_verificacion'];
                            $verificacion = "SELECT * FROM medio_verificacion WHERE id ='$id_verificacion'";
                            $resultado_verificacion= $conn->query($verificacion);
                            $row_verificacion=$resultado_verificacion->fetch_assoc();
                            echo '<td>'.utf8_encode($row_verificacion['medio']).'</td>';
                           
                            echo utf8_encode('<td class="align-middle"><small>'.$row['observaciones'].'</small></td>');

                            
                        echo '</tr>';
                      
                    }
                ?>
              </tr>
            
            </tbody>
          </table>

      </div> <!-- div table-responsive -->
      
      <h2>Segundo trimestre 2021</h2>

      <hr style="color: dimgrey;">
      <h2></h2>
      <!-- <div class="container-fluid"> -->
        <div class="table-responsive">
        
        <!-- <a href="actividad_agregar.php" type="button" class="btn btn-info" style="margin-bottom:3px;"><i class="fas fa-plus-circle"></i> Agregar actividad</a> -->
          
          <table class="table table-bordered table-hover table-striped table-md align-middle table-sm" style="text-align: center;">
          <thead class="bg-dark text-light">
              <tr class="align-middle">
                <th scope="col" class="align-middle">#</th>
                <th scope="col" class="align-middle">Nombre de la actividad</th>
                <th scope="col" class="align-middle">Responsable</th>
                <th scope="col" class="align-middle">Descripción</th>
                <th scope="col" class="align-middle">Trimestre</th>
                <th scope="col" class="align-middle">Fecha de inicio</th>
                <th scope="col" class="align-middle">Fecha de finalización</th>
                <th scope="col" class="align-middle">% Avance</th>
                <th scope="col" class="align-middle"># Docs</th>
                <th scope="col" class="align-middle">Acción</th>
                <th scope="col" class="align-middle">Medio Verificación</th>
                <th scope="col" class="align-middle">Observaciones</th>
              </tr>
            </thead>
            <tbody>
              <tr>
              <?php
              $tabla="SELECT * FROM actividad WHERE annio = 2 ORDER BY id ASC";
                    // $tabla="SELECT * FROM usr INNER JOIN archivos ON usr.codigo = archivos.codigo_usr WHERE usr.priv = 1 AND usr.tematica=1 ORDER BY usr.id ASC";
                    $resultadotabla = $conn->query($tabla);
                    $numero=0;
                    while($row = $resultadotabla->fetch_assoc()){
                        $numero++;
                        
                        echo '<tr>';

                            echo '<td class="align-middle"><center>'.$numero.'</center></td>';
                            echo utf8_encode('<td class="align-middle"><center>'.$row['actividad'].'</center></td>');
                            // echo utf8_encode('<td><center>'.$row['responsable'].'</center></td>');
                            $id_responsable=$row['responsable'];
                            $responsable = "SELECT * FROM usr WHERE id ='$id_responsable'";
                            $resultado_responsable= $conn->query($responsable);
                            $row_responsable=$resultado_responsable->fetch_assoc();
                            echo '<td class="align-middle">'.utf8_encode($row_responsable['nombre']).'</td>';

                            echo utf8_encode('<td class="align-middle"><center>'.$row['descripcion'].'</center></td>');
                            // echo utf8_encode('<td class="align-middle"><center>'.$row['trimestre'].'</center></td>');
                            echo utf8_encode('<td class="align-middle"><center>2</center></td>');
                            $fecha_inicio2 = $row['fecha_inicio2'];
                            $fecha_inicio_mx2 = date("d/m/Y", strtotime($fecha_inicio2));
                            $fecha_final2 = $row['fecha_final2'];
                            $fecha_final_mx2 = date("d/m/Y", strtotime($fecha_final2));
                            echo utf8_encode('<td class="align-middle"><center>'.$fecha_inicio_mx2.'</center></td>');
                            echo utf8_encode('<td class="align-middle"><center>'.$fecha_final_mx2.'</center></td>');
                            echo utf8_encode('<td class="align-middle"><center>'.$row['porcentaje2'].'</center></td>');
                            $responsable = $row['responsable'];
                            $id_row = $row['id'];
                            $tabla_cont="SELECT count(*) AS total FROM bitacora WHERE trimestre = 2 AND actividad_vinculada = '$id_row'";
                            $resultadotabla_cont = $conn->query($tabla_cont);
                            $cont_resultado = $resultadotabla_cont->fetch_assoc();
                            $num_rows = $cont_resultado['total'];
                            echo '<td class="align-middle"><span class="badge bg-info text-light"><center><i class="bi bi-file-post"></i> '.$num_rows.'</center></span></td>';

                            echo ('<td class="align-middle"><a href="calificar_evidencia_trimestre.php?act='.$row['id'].'&ev=2"><i class="bi bi-clipboard-check"></i> Calificar</center></a></td>');
                            // echo utf8_encode('<td><center>'.$row['medio_verificacion'].'</center></td>');
                            $id_verificacion=$row['medio_verificacion'];
                            $verificacion = "SELECT * FROM medio_verificacion WHERE id ='$id_verificacion'";
                            $resultado_verificacion= $conn->query($verificacion);
                            $row_verificacion=$resultado_verificacion->fetch_assoc();
                            echo '<td>'.utf8_encode($row_verificacion['medio']).'</td>';
                           
                            echo utf8_encode('<td class="align-middle"><small>'.$row['observaciones2'].'</small></td>');

                        echo '</tr>';
                      
                    }
                ?>
              </tr>
            
            </tbody>
          </table>

      </div> <!-- div table-responsive -->

      <h2>Tercer trimestre 2021</h2>

<hr style="color: dimgrey;">
<h2></h2>
<!-- <div class="container-fluid"> -->
  <div class="table-responsive">
  
  <!-- <a href="actividad_agregar.php" type="button" class="btn btn-info" style="margin-bottom:3px;"><i class="fas fa-plus-circle"></i> Agregar actividad</a> -->
    
    <table class="table table-bordered table-hover table-striped table-md align-middle table-sm" style="text-align: center;">
    <thead class="bg-dark text-light">
        <tr class="align-middle">
          <th scope="col" class="align-middle">#</th>
          <th scope="col" class="align-middle">Nombre de la actividad</th>
          <th scope="col" class="align-middle">Responsable</th>
          <th scope="col" class="align-middle">Descripción</th>
          <th scope="col" class="align-middle">Trimestre</th>
          <th scope="col" class="align-middle">Fecha de inicio</th>
          <th scope="col" class="align-middle">Fecha de finalización</th>
          <th scope="col" class="align-middle">% Avance</th>
          <th scope="col" class="align-middle"># Docs</th>
          <th scope="col" class="align-middle">Acción</th>
          <th scope="col" class="align-middle">Medio Verificación</th>
          <th scope="col" class="align-middle">Observaciones</th>
        </tr>
      </thead>
      <tbody>
        <tr>
        <?php
        $tabla="SELECT * FROM actividad WHERE annio = 2 ORDER BY id ASC";
              // $tabla="SELECT * FROM usr INNER JOIN archivos ON usr.codigo = archivos.codigo_usr WHERE usr.priv = 1 AND usr.tematica=1 ORDER BY usr.id ASC";
              $resultadotabla = $conn->query($tabla);
              $numero=0;
              while($row = $resultadotabla->fetch_assoc()){
                  $numero++;
                  
                  echo '<tr>';

                      echo '<td class="align-middle"><center>'.$numero.'</center></td>';
                      echo utf8_encode('<td class="align-middle"><center>'.$row['actividad'].'</center></td>');
                      // echo utf8_encode('<td><center>'.$row['responsable'].'</center></td>');
                      $id_responsable=$row['responsable'];
                      $responsable = "SELECT * FROM usr WHERE id ='$id_responsable'";
                      $resultado_responsable= $conn->query($responsable);
                      $row_responsable=$resultado_responsable->fetch_assoc();
                      echo '<td class="align-middle">'.utf8_encode($row_responsable['nombre']).'</td>';

                      echo utf8_encode('<td class="align-middle"><center>'.$row['descripcion'].'</center></td>');
                      // echo utf8_encode('<td class="align-middle"><center>'.$row['trimestre'].'</center></td>');
                      echo utf8_encode('<td class="align-middle"><center>3</center></td>');
                      $fecha_inicio3 = $row['fecha_inicio3'];
                      $fecha_inicio_mx3 = date("d/m/Y", strtotime($fecha_inicio3));
                      $fecha_final3 = $row['fecha_final3'];
                      $fecha_final_mx3 = date("d/m/Y", strtotime($fecha_final3));
                      echo utf8_encode('<td class="align-middle"><center>'.$fecha_inicio_mx3.'</center></td>');
                      echo utf8_encode('<td class="align-middle"><center>'.$fecha_final_mx3.'</center></td>');
                      echo utf8_encode('<td class="align-middle"><center>'.$row['porcentaje3'].'</center></td>');
                      
                      $responsable = $row['responsable'];
                      $id_row = $row['id'];
                      $tabla_cont="SELECT count(*) AS total FROM bitacora WHERE trimestre = 3 AND actividad_vinculada = '$id_row'";
                      $resultadotabla_cont = $conn->query($tabla_cont);
                      $cont_resultado = $resultadotabla_cont->fetch_assoc();
                      $num_rows = $cont_resultado['total'];
                      echo '<td class="align-middle"><span class="badge bg-info text-light"><center><i class="bi bi-file-post"></i> '.$num_rows.'</center></span></td>';

                      echo ('<td class="align-middle"><a href="calificar_evidencia_trimestre.php?act='.$row['id'].'&ev=3"><i class="bi bi-clipboard-check"></i> Calificar</center></a></td>');
                      // echo utf8_encode('<td><center>'.$row['medio_verificacion'].'</center></td>');
                      $id_verificacion=$row['medio_verificacion'];
                      $verificacion = "SELECT * FROM medio_verificacion WHERE id ='$id_verificacion'";
                      $resultado_verificacion= $conn->query($verificacion);
                      $row_verificacion=$resultado_verificacion->fetch_assoc();
                      echo '<td>'.utf8_encode($row_verificacion['medio']).'</td>';
                     
                      echo utf8_encode('<td class="align-middle"><small>'.$row['observaciones3'].'</small></td>');

                  echo '</tr>';
                
              }
          ?>
        </tr>
      
      </tbody>
    </table>

</div> <!-- div table-responsive -->

<h2>Cuarto trimestre 2021</h2>

      <hr style="color: dimgrey;">
      <h2></h2>
      <!-- <div class="container-fluid"> -->
        <div class="table-responsive">
        
        <!-- <a href="actividad_agregar.php" type="button" class="btn btn-info" style="margin-bottom:3px;"><i class="fas fa-plus-circle"></i> Agregar actividad</a> -->
          
          <table class="table table-bordered table-hover table-striped table-md align-middle table-sm" style="text-align: center;">
          <thead class="bg-dark text-light">
              <tr class="align-middle">
                <th scope="col" class="align-middle">#</th>
                <th scope="col" class="align-middle">Nombre de la actividad</th>
                <th scope="col" class="align-middle">Responsable</th>
                <th scope="col" class="align-middle">Descripción</th>
                <th scope="col" class="align-middle">Trimestre</th>
                <th scope="col" class="align-middle">Fecha de inicio</th>
                <th scope="col" class="align-middle">Fecha de finalización</th>
                <th scope="col" class="align-middle">% Avance</th>
                <th scope="col" class="align-middle"># Docs</th>
                <th scope="col" class="align-middle">Acción</th>
                <th scope="col" class="align-middle">Medio Verificación</th>
                <th scope="col" class="align-middle">Observaciones</th>
              </tr>
            </thead>
            <tbody>
              <tr>
              <?php
              $tabla="SELECT * FROM actividad WHERE annio = 2 ORDER BY id ASC";
                    // $tabla="SELECT * FROM usr INNER JOIN archivos ON usr.codigo = archivos.codigo_usr WHERE usr.priv = 1 AND usr.tematica=1 ORDER BY usr.id ASC";
                    $resultadotabla = $conn->query($tabla);
                    $numero=0;
                    while($row = $resultadotabla->fetch_assoc()){
                        $numero++;
                        
                        echo '<tr>';

                            echo '<td class="align-middle"><center>'.$numero.'</center></td>';
                            echo utf8_encode('<td class="align-middle"><center>'.$row['actividad'].'</center></td>');
                            // echo utf8_encode('<td><center>'.$row['responsable'].'</center></td>');
                            $id_responsable=$row['responsable'];
                            $responsable = "SELECT * FROM usr WHERE id ='$id_responsable'";
                            $resultado_responsable= $conn->query($responsable);
                            $row_responsable=$resultado_responsable->fetch_assoc();
                            echo '<td class="align-middle">'.utf8_encode($row_responsable['nombre']).'</td>';

                            echo utf8_encode('<td class="align-middle"><center>'.$row['descripcion'].'</center></td>');
                            // echo utf8_encode('<td class="align-middle"><center>'.$row['trimestre'].'</center></td>');
                            echo utf8_encode('<td class="align-middle"><center>4</center></td>');
                            $fecha_inicio4 = $row['fecha_inicio4'];
                            $fecha_inicio_mx4 = date("d/m/Y", strtotime($fecha_inicio4));
                            $fecha_final4 = $row['fecha_final4'];
                            $fecha_final_mx4 = date("d/m/Y", strtotime($fecha_final4));
                            echo utf8_encode('<td class="align-middle"><center>'.$fecha_inicio_mx4.'</center></td>');
                            echo utf8_encode('<td class="align-middle"><center>'.$fecha_final_mx4.'</center></td>');
                            echo utf8_encode('<td class="align-middle"><center>'.$row['porcentaje4'].'</center></td>');
                            
                            $responsable = $row['responsable'];
                            $id_row = $row['id'];
                            $tabla_cont="SELECT count(*) AS total FROM bitacora WHERE trimestre = 4 AND actividad_vinculada = '$id_row'";
                            $resultadotabla_cont = $conn->query($tabla_cont);
                            $cont_resultado = $resultadotabla_cont->fetch_assoc();
                            $num_rows = $cont_resultado['total'];
                            echo '<td class="align-middle"><span class="badge bg-info text-light"><center><i class="bi bi-file-post"></i> '.$num_rows.'</center></span></td>';

                            echo ('<td class="align-middle"><a href="calificar_evidencia_trimestre.php?act='.$row['id'].'&ev=4"><i class="bi bi-clipboard-check"></i> Calificar</center></a></td>');
                            // echo utf8_encode('<td><center>'.$row['medio_verificacion'].'</center></td>');
                            $id_verificacion=$row['medio_verificacion'];
                            $verificacion = "SELECT * FROM medio_verificacion WHERE id ='$id_verificacion'";
                            $resultado_verificacion= $conn->query($verificacion);
                            $row_verificacion=$resultado_verificacion->fetch_assoc();
                            echo '<td>'.utf8_encode($row_verificacion['medio']).'</td>';
                            
                            echo utf8_encode('<td class="align-middle"><small>'.$row['observaciones4'].'</small></td>');

                            
                        echo '</tr>';
                      
                    }
                ?>
              </tr>
            
            </tbody>
          </table>

      </div> <!-- div table-responsive -->
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
