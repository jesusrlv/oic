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

$ev = $_REQUEST['ev']; //trimestre
$act = $_REQUEST['act'];//actividad
$annio = $_REQUEST['annio']; //annio

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

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js" integrity="sha512-v2CJ7UaYy4JwqLDIrZUI/4hqeoQieOmAZNXBeQyjo21dadnwR+8ZaIJVT8EE2iyI61OV8e6M8PP2/4hpQINQ/g==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>

    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

    <link rel="canonical" href="https://getbootstrap.com/docs/5.3/examples/dashboard/">
    <script src="https://kit.fontawesome.com/4d63b5ef28.js" crossorigin="anonymous"></script>

    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.min.js" integrity="sha384-0pUGZvbkm6XF6gxjEnlmuGrJXVbNuzT9qBBavbLwCsOGabYfZo0T0to5eqruptLy" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    
    <!-- Bootstrap core CSS -->
    <link href="css/bootstrap.css" rel="stylesheet">

    <script src="js/documentos.js"></script>
    <script src="js/evidencia.js"></script>
    <script src="js/eliminar.js"></script>

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
    <!-- <link href="css/dashboard.css" rel="stylesheet"> -->
  </head>
  <body onload="documentosUsr();">

  <input type="text" value="<?php echo $ev ?>" id="trimestre" hidden>
  <input type="text" value="<?php echo $act ?>" id="actividad" hidden>
  <input type="text" value="<?php echo $annio ?>" id="annio" hidden>

    <!-- <nav class="navbar navbar-dark sticky-top bg-dark flex-md-nowrap p-0 shadow"> -->
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

        <h6 class="sidebar-heading d-flex justify-content-center text-center align-items-center px-3 mt-2 mb-1 text-muted">
          <span class="">
            Bienvenido<br><i class="fas fa-user"></i> 
            <?php
            
            echo ($nombre);
            
            ?>
          </span>
        </h6>
        <hr style="color: dimgrey;">
<ul class="nav flex-column">
    <li class="nav-item">
    <?php 
    if ($perfil == 1){
      echo '<a class="nav-link active" href="tablero_usr.php">';
    }
    else{
      echo '<a class="nav-link active" href="tablero_admin.php">';
    }
    ?>
       <i class="fas fa-laptop-house"></i> 
       Inicio <span class="sr-only">(current)</span>
     </a>
   </li>
  
   <?php 
    if ($perfil == 1){
      echo '<li class="nav-item" hidden>';
    }
    else{
      echo '<li class="nav-item" >';
    }
    ?>
      <a class="nav-link" href="modificar.php">
        <i class="bi bi-app-indicator"></i>
       Modificar
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
        
        <!-- <div class="btn-toolbar mb-2 mb-md-0">
          <div class="btn-group mr-2">
            <button type="button" class="btn btn-sm btn-outline-secondary">Reporte PDF</button>
            <button type="button" class="btn btn-sm btn-outline-secondary">Reporte EXCEL</button>
          </div>
         
        </div> -->
      </div>

      
<?php

if($ev==1){
    echo '<h2 class="text-center">Primer Trimestre</h2>';
}
elseif($ev==2){
    echo '<h2 class="text-center">Segundo Trimestre</h2>';
}
elseif($ev==3){
    echo '<h2 class="text-center">Tercer Trimestre</h2>';
}
elseif($ev==4){
    echo '<h2 class="text-center">Cuarto Trimestre</h2>';
}

?>
      <hr style="color: dimgrey;">

      <h4>Agregar evidencia</h4>

      <div class="mb-3">
        <label for="basic-url" class="form-label text-secondary">Redacta texto sobre la evidencia:</label>
        <div class="input-group">
          <span class="input-group-text" id="basic-addon3">Observaciones</span>
          <input type="text" class="form-control" id="observacionesCargar" aria-describedby="basic-addon3 basic-addon4" placeholder="Escribe descripción de la evidencia">
        </div>
        <!-- <div class="form-text" id="basic-addon4">Example help text goes outside the input group.</div> -->
      </div>

      <form id="upload_form" enctype="multipart/form-data" method="post">

        <input type="file" name="file" id="file" accept="application/pdf" class="h6 w-100 mt-3"><br>
        <progress id="progressBar" value="0" max="100" style="width:300px;"></progress>
        <small id="status"></small>
        <p id="loaded_n_total"></p>
        
        <div class="d-grid gap-2">
          <button class="btn btn-warning w-100 mb-2" id="btnEvidenciaNuevo" type="button" onclick="nuevoRegistro()" hidden><i class="bi bi-plus-circle-fill"></i> Nuevo registro</button>
          <button class="btn btn-primary w-100" id="btnEvidencia" type="button" onclick="uploadFile()"><i class="bi bi-plus-circle-fill"></i> Registrar documento</button>
        </div>

      </form>

      <div class="table-responsive mt-3">
        <table class="table table-bordered table-hover table-striped table-md align-middle" style="text-align: center;">
          <thead class="bg-dark text-light">
            <tr>
              <th class="align-middle">#</th>
              <th class="align-middle">Descripción</th>
              <th class="align-middle">Fecha de registro</th>
              <th class="align-middle"><i class="fas fa-eye"></i></th>
              <th class="align-middle"><i class="bi bi-pencil-square"></i></th>
              <th class="align-middle"><i class="fas fa-trash"></i></th>
            </tr>
          </thead>
          <tbody id="actividadTrim">
            <!-- inicio loop tabla -->
            
            <!-- fin loop tabla -->
          </tbody>
        </table>
      </div>
      <div class="d-grid gap-2">
            <a href="tablero_usr.php?annio=<?php echo $annio?>" class="btn btn-primary" type="button">Regresar</a>
          </div>

    </main>
  </div>


<!-- Modal editar-->
<div class="modal fade" id="editarFiles" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg">
    <div class="modal-content">
      <div class="modal-header">
        <h4 class="modal-title fs-5" id="staticBackdropLabel">Editar</h4>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">

      <ul class="nav nav-tabs" id="myTab" role="tablist">
        <li class="nav-item" role="presentation">
          <button class="nav-link active" id="home-tab" data-bs-toggle="tab" data-bs-target="#home-tab-pane" type="button" role="tab" aria-controls="home-tab-pane" aria-selected="true">Datos</button>
        </li>
        <li class="nav-item" role="presentation">
          <button class="nav-link" id="profile-tab" data-bs-toggle="tab" data-bs-target="#profile-tab-pane" type="button" role="tab" aria-controls="profile-tab-pane" aria-selected="false">Documento</button>
        </li>
        
      </ul>
      <div class="tab-content" id="myTabContent">
        <div class="tab-pane fade show active" id="home-tab-pane" role="tabpanel" aria-labelledby="home-tab" tabindex="0">
          <div class="container" id="evidenciaEdit">

          </div>

        </div>
        <div class="tab-pane fade" id="profile-tab-pane" role="tabpanel" aria-labelledby="profile-tab" tabindex="0">
          <div class="container mt-2" id="evidenciaDocumentos">
          <hr class="my-4">
            <form id="upload_form" enctype="multipart/form-data" method="post">
            <label for="exampleFormControlFile1"><h5><i class="fas fa-file-pdf"></i> Actualizar documento</h5></label>
                <div class="input-group mb-3">
                    <input type="file" name="fileActualizar" id="fileActualizar" accept="application/pdf" class="form-control" value="'.$row['url_doc'].'">
                </div>
                <div class="progress" role="progressbar" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100" value="0">
                    <div class="progress-bar progress-bar" style="background-color:#917799" id="progressBarAct" value="0" max="100" style="height: 20px">
                    <p id="loaded_n_totalAct"></p>
                    </div>
                </div>
                <small id="statusAct"></small>
            </form>

            <button class="btn btn-primary w-100 mt-2" onclick="actualizarFile()">Actualizar documento</button>
          </div>
        </div>
      </div>


      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Cerrar</button>
        <!-- <button type="submit" class="btn btn-primary" onclick="editarActividad() ">Actualizar</button> -->
      </div>
    </div>
  </div>
</div>

</div>


        <!-- <script src="css/dashboard.js"></script>-->
      </body> 
</html>
