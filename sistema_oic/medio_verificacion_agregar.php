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

    <link rel="icon" type="image/png" href="../icon.ico"/>

    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js" integrity="sha384-BBtl+eGJRgqQAUMxJ7pMwbEyER4l1g+O15P+16Ep7Q9Q+zqX6gSbd85u4mG4QzX+" crossorigin="anonymous"></script>

    <link rel="canonical" href="https://getbootstrap.com/docs/4.5/examples/dashboard/">
    <script src="https://kit.fontawesome.com/4d63b5ef28.js" crossorigin="anonymous"></script>

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.2/font/bootstrap-icons.min.css">

    <!-- Bootstrap core CSS -->
    <link href="css/bootstrap.css" rel="stylesheet">

    <script src="https://code.jquery.com/jquery-3.7.1.js" integrity="sha256-eKhayi8LEQwp4NKxN+CfCh+3qOVUtJn3QNZ0TciWLP4=" crossorigin="anonymous"></script> 

    <script src="js/medios_verificacion.js"></script>
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
  <body onload="medioQuery()">
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
      
        <div class="alert alert-info mt-3 text-center" role="alert">
        <i class="bi bi-pc-display"></i><strong> Medio verificación </strong>
        </div>
        <hr>

      <!-- <hr style="color: dimgrey;"> -->
      <h2></h2>
          <div class="container-fluid">
        
          <!-- <form action="prcd/proceso_agregar_usr.php" method="POST"> -->
          
              <div class="row">
                  <div class="col-6">
                    <div class="form-group">
                      <label for="exampleInputEmail1">Medio de verificación</label>
                      <input type="text" class="form-control" aria-describedby="Text" name="medioN" id="medioN" REQUIRED>
                      <small id="emailHelp" class="form-text text-muted">Medio de verificación</small>
                  </div>
                </div>
                <div class="col-6">
                  <div class="form-group">
                      <label for="exampleInputEmail1">Descripción</label>
                      <input type="text" class="form-control" aria-describedby="Text" name="descripcionM" id="descripcionM" REQUIRED>
                      <small id="emailHelp" class="form-text text-muted">Texto descriptivo</small>
                  </div>
                </div>
                
              </div>
                  
              <button class="btn btn-primary" onclick="agregarMedio()"><i class="fas fa-save"></i> Registrar medio</button>
              <a href="javascript:history.back()" type="submit" class="btn btn-danger"><i class="far fa-times-circle"></i> Cancelar</a>

            </div> <!-- div container -->
            <div class="container mt-4">
              <h3>Medios registrados</h3>
              <table class="table">
                <thead>
                  <tr>
                    <th scope="col">#</th>
                    <th scope="col">Nombre</th>
                    <th scope="col">Descripción</th>
                    <th scope="col">Editar</th>
                    <th scope="col">Eliminar</th>
                  </tr>
                </thead>
                <tbody id="resultadoDescripcion">
                 
                </tbody>
              </table>
            </div>
      

      </div>


    </main>
  </div>
</div>


        <script src="https://cdnjs.cloudflare.com/ajax/libs/feather-icons/4.9.0/feather.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.7.3/Chart.min.js"></script>
        <script src="css/dashboard.js"></script></body>
</html>

<!-- Modal -->
<div class="modal fade" id="modalEditar" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="exampleModalLabel">Editar medio de verificación</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
      <div class="row">
        <input type="text" id="idEdit" hidden>
                  <div class="col-12">
                    <div class="form-group">
                      <label for="exampleInputEmail1">Medio de verificación</label>
                      <input type="text" class="form-control" aria-describedby="Text" name="medioEdit" id="medioEdit" REQUIRED>
                      <small id="emailHelp" class="form-text text-muted">Medio</small>
                  </div>
                </div>
                <div class="col-12">
                  <div class="form-group">
                      <label for="exampleInputEmail1">Descripción del medio</label>
                      <input type="text" class="form-control" aria-describedby="Text" name="descripcionEdit" id="descripcionEdit" REQUIRED>
                      <small id="emailHelp" class="form-text text-muted">Descripción</small>
                  </div>
                </div>
                
              </div>
                  
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Cerrar</button>
        <button type="button" class="btn btn-primary" onclick="edicionMedio()">Editar</button>
      </div>
    </div>
  </div>
</div>

