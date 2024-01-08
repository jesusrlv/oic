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
    
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <meta name="generator" content="">
    <title>Tablero Usuario | OIC</title>

    <link rel="icon" type="image/png" href="../icon.ico"/>

    
   
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js" integrity="sha384-BBtl+eGJRgqQAUMxJ7pMwbEyER4l1g+O15P+16Ep7Q9Q+zqX6gSbd85u4mG4QzX+" crossorigin="anonymous"></script>

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">


    <!-- Bootstrap core CSS -->
    <link href="css/bootstrap.css" rel="stylesheet">

     <!-- Custom styles for this template -->
     <link href="css/dashboard.css" rel="stylesheet">

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
    <a class="nav-link" href="dashboard.php">
     <i class="fas fa-laptop-house"></i> 
     Inicio <span class="sr-only">(current)</span>
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
   <a class="nav-link active" href="trimestre4.php">
     <span data-feather="layers"></span>
     Cuarto trimestre
   </a>
 </li>
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

      <h2>Tablero de usuario <i class="bi bi-people-fill mb-2"></i></h2>

      <hr style="color: dimgrey;">
      <div class="container-fluid">
      <div class="input-group mb-3">
  <span class="input-group-text" id="basic-addon1">@</span>
  <select class="form-select" aria-label="Default select example">
            <option selected>Open this select menu</option>
            <option value="1">One</option>
            <option value="2">Two</option>
            <option value="3">Three</option>
        </select>
</div>

        
      </div>
      <div class="table-responsive">
        <table class="table table-bordered table-hover table-striped table-sm" style="text-align: center;">
          <thead class="bg-dark text-light">
            <tr>
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
          <tbody>

            <!-- inicio loop tabla -->

            <?php
                   
                    $tabla="SELECT * FROM actividad WHERE responsable='$id'";
                    $resultadotabla = $conn->query($tabla);
                    $numero=0;
                    while($row = $resultadotabla->fetch_assoc()){
                        $numero++;
                        $responsable=$row['responsable'];
                        $verificacion=$row['medio_verificacion'];
                        $id_act=$row['id'];
                        
                        echo '<tr>';

                            echo ('<td><center>'.$row['actividad'].'</center></td>');

                            $consulta1="SELECT id,nombre FROM usr WHERE id = '$responsable'";
                            $resultado_consulta1 = $conn->query($consulta1);
                            $trabajador_resultado = $resultado_consulta1->fetch_assoc();
                            echo ('<td><center>'.$trabajador_resultado['nombre'].'</center></td>');
            
                            $consulta2="SELECT id,medio FROM medio_verificacion WHERE id = '$verificacion'";
                            $resultado_consulta2 = $conn->query($consulta2);
                            $medio_resultado = $resultado_consulta2->fetch_assoc();
                            echo ('<td><center>'.$medio_resultado['medio'].'</center></td>');

                            if($row['porcentaje4']!=100){
                              echo ('<td><a href="agregar_archivos.php?id=4&act='.$row['id'].'" class="badge badge-info"><i class="fas fa-plus-circle"></i> Evidencia</a></td>');
                            }
                            else{
                              echo '<td><span class="badge badge-danger">Completado 100%</span></td>';
                            }
                            
                            $tabla_cont="SELECT count(*) AS total FROM bitacora WHERE usr_vinculado = '$id' AND trimestre = 4 AND actividad_vinculada = '$id_act'";
                            $resultadotabla_cont = $conn->query($tabla_cont);
                            $cont_resultado = $resultadotabla_cont->fetch_assoc();
                            $num_rows = $cont_resultado['total'];

                            echo '<td><center><a href="evidencia_trimestre.php?ev=4&act='.$row['id'].'" class="badge badge-info"><i class="fas fa-eye"></i> '.$num_rows.'</a></center></td>';
                            echo '<td><center>
                            <div class="progress">
                              <div class="progress-bar" role="progressbar" style="width: '.$row['porcentaje4'].'%;" aria-valuenow="'.$row['porcentaje4'].'" aria-valuemin="0" aria-valuemax="100">'.$row['porcentaje4'].'%</div>
                            </div>
                            </center></td>';
                            // echo '<td><center><a href="evidencia_trimestre.php?ev=4&act='.$row['id'].'" class="badge badge-info"><i class="bi bi-calendar2-week-fill"></i> '.$row['fecha_inicio4'].'/'.$row['fecha_final4'].'</a></center></td>';
                            $fecha_inicio = $row['fecha_inicio4'];
                            $fecha_inicio_mx = date("d/m/Y", strtotime($fecha_inicio));
                            $fecha_final = $row['fecha_final4'];
                            $fecha_final_mx = date("d/m/Y", strtotime($fecha_final));
                            echo '<td><center><button class="btn btn-info btn-sm" data-bs-toggle="modal" data-bs-target="#exampleModal'.$row['id'].'"><small><i class="bi bi-calendar2-week-fill"></i> '.$fecha_inicio_mx.' - '.$fecha_final_mx.'</button></center></small></td>';
                            echo ('<td><small>'.$row['observaciones4'].'</small></td>');

                            //MODAL
                            echo '<div class="modal fade" id="exampleModal'.$row['id'].'" tabindex="-1" aria-labelledby="exampleModalLabel'.$row['id'].'" aria-hidden="true">
                              <div class="modal-dialog modal-dialog-centered">
                                <div class="modal-content">
                                  <div class="modal-header">
                                    <h5 class="modal-title" id="exampleModalLabel">Editar fechas de actividad semestral</h5>
                                    <!-- <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button> -->
                                  </div>
                                  <div class="modal-body">

                                  <form action="prcd/proceso_fecha.php" method="POST">
                                    <div class="input-group mb-3 w-100">
                                      <span class="input-group-text" id="inputGroup-sizing-default"><small><i class="bi bi-calendar-week"></i> Fecha de inicio</small></span>
                                      <input type="date" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default" name="fecha_inicio" required>
                                    </div>
                                    <div class="input-group mb-3 w-10">
                                      <span class="input-group-text" id="inputGroup-sizing-default"><small><i class="bi bi-calendar-week"></i> Fecha de finalización</small></span>
                                      <input type="date" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default" name="fecha_finalizacion" required>
                                    </div>
                                  </div>
                                  <input value="'.$row['id'].'" name="id" hidden>
                                  <input value="4" name="trimestre" hidden>
                                  <div class="modal-footer">
                                    <button type="button" class="btn btn-danger btn-sm" data-bs-dismiss="modal"><i class="bi bi-x-circle-fill"></i> Cerrar</button>
                                    <button type="submit" class="btn btn-primary btn-sm"><i class="bi bi-calendar-plus"></i> Guardar</button>

                                  </form>
                                  </div>
                                </div>
                              </div>
                            </div>';

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

</html>
