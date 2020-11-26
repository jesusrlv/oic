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
        <h1 class="h3">DASHBOARD</h1>
        <div class="btn-toolbar mb-2 mb-md-0">
          <div class="btn-group mr-2">
            <button type="button" class="btn btn-sm btn-outline-secondary">Reporte PDF</button>
            <button type="button" class="btn btn-sm btn-outline-secondary">Reporte EXCEL</button>
          </div>
         
        </div>
      </div>

      <h2>Primer Trimestre</h2>

      <hr style="color: dimgrey;">
      <h2></h2>
      <div class="table-responsive">
        <table class="table table-bordered table-hover table-striped table-md" style="text-align: center;">
          <thead class="bg-dark text-light">
            <tr>
              <th>Nombre actividad</th>
              <th>Fecha inicio</th>
              <th>Fecha finalización</th>
              <th>Responsable</th>
              <th>Medio verificación</th>
              <th>Acción</th>
              <th>% avance</th>
            </tr>
          </thead>
          <tbody>

            <!-- inicio loop tabla -->

            <?php
                   //$tabla="SELECT * FROM archivos ORDER BY id_archivos ASC";
//                    $tabla="SELECT usr.id,usr.nombre,usr.curp,archivos.link1,archivos.link2,archivos.link3,archivos.link4,archivos.link5,archivos.link6,archivos.link7,archivos.link8,archivos.link9 FROM usr
// INNER JOIN archivos ON usr.curp = archivos.id_usr WHERE usr.priv = 1 ORDER BY usr.id";

                    $tabla="SELECT * FROM dashboard ORDER BY prioridad ASC";
                    // $tabla="SELECT * FROM usr INNER JOIN archivos ON usr.codigo = archivos.codigo_usr WHERE usr.priv = 1 AND usr.tematica=1 ORDER BY usr.id ASC";
                    $resultadotabla = $conn->query($tabla);
                    $numero=0;
                    while($row = $resultadotabla->fetch_assoc()){
                        $numero++;
                        
                        echo '<tr>';

                            echo '<td><center>'.$row['actividad'].'</center></td>';
                            echo '<td><center>'.$row['fecha_ini'].'</center></td>';
                            echo '<td><center>'.$row['fecha_fin'].'</center></td>';
                            echo '<td><center>'.$row['responsable'].'</center></td>';
                            echo '<td><center>'.$row['medio_verificacion'].'</center></td>';
                            echo '<td><a href="#" class="badge badge-info">Modificar</a></td>';
                            echo '<td><center>'.$row['porcentaje'].'%</center></td>';
                            
                        echo '</tr>';
                      
                    }
                ?>

            <!-- fin loop tabla -->

            <tr>
              <td>Curso informativos de inducción</td>
              <td>01/03/2020 </td>
              <td>03/11/2020</td>
              <td>Recursos humanos</td>
              <td>Diagnóstico sobre el marco operativo de la institución. Objetivos. Misión, visión y valores.</td>
              <td><a href="#" class="badge badge-info">Modificar</a></td>
              <td>70%</td>
            </tr>
            <tr>
              <td>Notificación oficial al empleado y al área correspondiente sobre los movimientos generados en el personal del instituto.</td>
              <td>01/03/2020</td>
              <td>30/11/2020</td>
              <td>Coordinación administrativa</td>
              <td>Memorándum de notificación de movimientos del personal del instituto.</td>
              <td><a href="#" class="badge badge-info">Modificar</a></td>
              <td>100%</td>
            </tr>
            <tr>
              <td>Creación de software para el seguimiento de control operativo y financiero de las actividades del instituto.</td>
              <td>01/03/2020</td>
              <td>30/11/2020</td>
              <td>Informática</td>
              <td>Los reportes que contenga información de las mediciones correspondientes por acciones de control.</td>
              <td><a href="#" class="badge badge-info">Modificar</a></td>
              <td>100%</td>
            </tr>
            <tr>
              <td>Actualización del manual de procedimientos conforme a la operatividad financiera de las actividades del instituto.</td>
              <td>01/03/2020</td>
              <td>31/09/2020</td>
              <td>Coordinación administrativa</td>
              <td>Manual aprobado por la Secretaría de la Función Pública y Junta de Gobierno.</td>
              <td><a href="#" class="badge badge-info">Modificar</a></td>
              <td>40%</td>
            </tr>
            <tr>
              <td>Diagnóstico al personal sonre el manual de procedimientos.</td>
              <td>01/10/2020</td>
              <td>15/11/2020</td>
              <td>Órgano interno de control</td>
              <td>Resultados acorde al diagnóstico para la toma de decisiones.</td>
              <td><a href="#" class="badge badge-info">Modificar</a></td>
              <td>70%</td>
            </tr>
            <tr>
              <td>Método de control y seguimiento a programas sociales vulnerables a la corrupción interna y externa.</td>
              <td>01/03/2020</td>
              <td>30/11/2020</td>
              <td>Comité de contraloría social</td>
              <td>Disgnóstico emitido según procesos correspondientes para determinar curso y acciones.</td>
              <td><a href="#" class="badge badge-info">Modificar</a></td>
              <td>30%</td>
            </tr>
            <tr>
              <td>Reporte presupuestal mensual para toma de decisiones.</td>
              <td>01/03/2020</td>
              <td>30/11/2020</td>
              <td>Recursos financieros</td>
              <td>Estados de movimiento presupuestal y las modificaciones al mismo</td>
              <td><a href="#" class="badge badge-info">Modificar</a></td>
              <td>50%</td>
            </tr>
            <tr>
              <td>Emisión de boletín mensual anticipando las convocatorias y actividades relevantes.</td>
              <td>01/03/2020</td>
              <td>05/12/2020</td>
              <td>Unidad de comunicación social e imagen</td>
              <td>Boletín medio digital</td>
              <td><a href="#" class="badge badge-info">Modificar</a></td>
              <td>40%</td>
            </tr>
            <tr>
              <td>Encuesta de clima organizacional</td>
              <td>01/03/2020</td>
              <td>30/11/2020</td>
              <td>Recursos humanos</td>
              <td>Generación del índice a través de planillas elaboradas</td>
              <td><a href="#" class="badge badge-info">Modificar</a></td>
              <td>80%</td>
            </tr>
            <tr>
              <td>Realizar diagnóstico sobre las necesidades de capacitación</td>
              <td>01/03/2020</td>
              <td>30/11/2020</td>
              <td>Recursos humanos</td>
              <td>Con base en resultados, la elaboración de plan de capacitaciones</td>
              <td><a href="#" class="badge badge-info">Modificar</a></td>
              <td>25%</td>
            </tr>
            <tr>
              <td>Diagnóstico a los eventos públicos del instituto de manera previa y posterior en cuanto a su resultado de operación</td>
              <td>01/03/2020</td>
              <td>30/11/2020</td>
              <td>Secretario técnico</td>
              <td>Generación del índice a través de planillas elaboradas</td>
              <td><a href="#" class="badge badge-info">Modificar</a></td>
              <td>50%</td>
            </tr>
  
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
