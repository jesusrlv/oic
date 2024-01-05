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
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <meta name="generator" content="">
    <title>Dashboard | OIC</title>

    <link rel="icon" type="image/png" href="../icon.ico"/>
    <!-- <link rel="canonical" href="https://getbootstrap.com/docs/4.5/examples/dashboard/"> -->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js" integrity="sha384-BBtl+eGJRgqQAUMxJ7pMwbEyER4l1g+O15P+16Ep7Q9Q+zqX6gSbd85u4mG4QzX+" crossorigin="anonymous"></script>

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">

    <script src="https://kit.fontawesome.com/4d63b5ef28.js" crossorigin="anonymous"></script>

    <script src="https://code.jquery.com/jquery-3.7.1.js" integrity="sha256-eKhayi8LEQwp4NKxN+CfCh+3qOVUtJn3QNZ0TciWLP4=" crossorigin="anonymous"></script> 

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
    <script src="css/dashboard.js"></script>
    <script src="js/actividad.js"></script>
  </head>
  <body onload="queryActividad()">
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
<hr>
<ul class="nav flex-column">
    <li class="nav-item">
        <a class="nav-link active" href="modificar.php">
       <!-- <span data-feather="home"></span> -->
       <i class="fas fa-laptop-house"></i> 
       Inicio <span class="sr-only">(current)</span>
     </a>
   </li>
   <hr style="color: dimgrey;">
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
        <div class="d-flex align-items-center p-3 my-3 text-white-50 bg-light rounded shadow-sm w-100">
          <img class="mr-3" src="../logo_injuventud_01.png" alt="" width="48" height="48">
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

      <div class="container-fluid text-start mt-4">
        <h3>Agregar actividad</h3>
      </div>

          <div class="container-fluid">

          <input type="text" id="usr" value="<?php echo $_SESSION['id'] ?>" hidden>

            <div class="row">
                  <div class="col-12">
                    <div class="form-group">
                        <label for="exampleInputEmail1">Nombre de la actividad</label>
                        <input type="text" class="form-control" id="nombre_actv" aria-describedby="Text" name="actividad" REQUIRED>
                        <small id="emailHelp" class="form-text text-muted">Agregar la actividad para tu perfil.</small>
                    </div>
                  </div>
                  <div class="col-12">
                    <div class="form-group">
                        <label for="responsable">Seleccionar responsable de la actividad</label>
                        <select class="form-control" id="responsable" name="usr" REQUIRED>
                        <option value="">Seleccionar...</option>
                        <?php
                        $tabla="SELECT * FROM usr WHERE perfil = 1 ORDER BY id ASC";
                        $resultadotabla = $conn->query($tabla);
                        $numero=0;
                        while($row = $resultadotabla->fetch_assoc()){
                            $numero++;
    
                                echo '<option value="'.($row['id'].'">'.$row['nombre']).'</option>';
                        }
                         ?> <!-- fin loop tabla -->
                        </select>
                    </div>
                  </div>
                  <div class="col-12">
                    <div class="input-group mb-3">
                      <span class="input-group-text">Descripción de la actividad</span>
                      <textarea class="form-control" aria-label="With textarea" name="descripcion" id="descripcion" required></textarea>
                    </div>
                  </div>
                  <div class="col-12">
                    <div class="form-group" >
                        <label for="exampleFormControlSelect1">Seleccionar medio de verificación</label>
                        <select class="form-control" id="medio_verificacion" name="medio_verificacion" REQUIRED>
                        <option value="">Seleccionar...</option>
                        <?php
                        $tabla="SELECT * FROM medio_verificacion ORDER BY id ASC";
                        $resultadotabla = $conn->query($tabla);
                        $numero=0;
                        while($row = $resultadotabla->fetch_assoc()){
                            $numero++;
    
                                echo '<option value="'.($row['id'].'">'.$row['medio']).'</option>';
                        }
                         ?> <!-- fin loop tabla -->
                        </select>
                    </div>
                  </div>
                  <div class="col-12">
                    <div class="form-group" >
                        <label for="exampleFormControlSelect1">Seleccionar año</label>
                        <select class="form-control" id="annio" name="annio" REQUIRED>
                        <option value="">Seleccionar...</option>
                        <?php
                        $tabla="SELECT * FROM annio ORDER BY id ASC";
                        $resultadotabla = $conn->query($tabla);
                        $numero=0;
                        while($row = $resultadotabla->fetch_assoc()){
                            $numero++;
    
                                echo '<option value="'.($row['annio'].'">'.$row['annio']).'</option>';
                        }
                         ?> <!-- fin loop tabla -->
                        </select>
                    </div>
                  </div>
                </div>
        
                <button type="button" class="btn btn-primary" onclick="agregarActividad2()"><i class="fas fa-save"></i> Guardar actividad</button>
                <a href="javascript:history.back()" type="submit" class="btn btn-danger"><i class="far fa-times-circle"></i> Cancelar</a>
     
        

            </div> <!-- div container -->
            <hr>
            <div class="container-fluid text-start mt-4">
              <h3>Actividades agregadas</h3>
            </div>

            <div class="table-responsive">
          
                <table class="table table-bordered table-hover table-striped table-md" style="text-align: center;">
                <thead class="bg-dark text-light">
                    <tr>
                      <th scope="col" class="align-middle">#</th>
                      <th scope="col" class="align-middle">Nombre de la actividad</th>
                      <th scope="col" class="align-middle">Responsable</th>
                      <th scope="col" class="align-middle">Descripción</th>
                      <th scope="col" class="align-middle">Medio Verificación</th>
                      <th scope="col" class="align-middle">Año</th>
                      <th scope="col" class="align-middle">Editar</th>
                      <th scope="col" class="align-middle">Alta/Baja</th>
                      <th scope="col" class="align-middle">Eliminar</th>
                    </tr>
                  </thead>
                  <tbody class="align-middle" id="actividad">
                    
                  
                  </tbody>
                </table>

            </div> <!-- div table-responsive -->
            
      

      </div>


    </main>
  </div>
</div>
</html>

<!-- Modal editar -->
<div class="modal fade" id="modalEditar" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="exampleModalLabel">Editar actividad</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">

        <div class="container-fluid">

          <input type="text" id="idEdit" hidden>

            <div class="row">
                  <div class="col-12">
                    <div class="form-group">
                        <label for="actividadEdit">Nombre de la actividad</label>
                        <input type="text" class="form-control" id="actividadEdit" aria-describedby="Text" name="actividadEdit" REQUIRED>
                        <small id="emailHelp" class="form-text text-muted">Agregar la actividad para tu perfil.</small>
                    </div>
                  </div>
                  <div class="col-12">
                    <div class="form-group">
                        <label for="responsable">Seleccionar responsable de la actividad</label>
                        <select class="form-control" id="responsableEdit" name="responsableEdit" REQUIRED>
                        <option value="">Seleccionar...</option>
                        <?php
                        $tabla="SELECT * FROM usr WHERE perfil = 1 ORDER BY id ASC";
                        $resultadotabla = $conn->query($tabla);
                        $numero=0;
                        while($row = $resultadotabla->fetch_assoc()){
                            $numero++;

                                echo '<option value="'.($row['id'].'">'.$row['nombre']).'</option>';
                        }
                        ?> <!-- fin loop tabla -->
                        </select>
                    </div>
                  </div>
                  <div class="col-12">
                    <div class="input-group mb-3">
                      <span class="input-group-text">Descripción de la actividad</span>
                      <textarea class="form-control" aria-label="With textarea" name="descripcionEdit" id="descripcionEdit" required></textarea>
                    </div>
                  </div>
                  <div class="col-12">
                    <div class="form-group" >
                        <label for="exampleFormControlSelect1">Seleccionar medio de verificación</label>
                        <select class="form-control" id="medio_verificacionEdit" name="medio_verificacionEdit" REQUIRED>
                        <option value="">Seleccionar...</option>
                        <?php
                        $tabla="SELECT * FROM medio_verificacion ORDER BY id ASC";
                        $resultadotabla = $conn->query($tabla);
                        $numero=0;
                        while($row = $resultadotabla->fetch_assoc()){
                            $numero++;

                                echo '<option value="'.($row['id'].'">'.$row['medio']).'</option>';
                        }
                        ?> <!-- fin loop tabla -->
                        </select>
                    </div>
                  </div>
                  <div class="col-12">
                    <div class="form-group" >
                        <label for="exampleFormControlSelect1">Seleccionar año</label>
                        <select class="form-control" id="annioEdit" name="annioEdit" REQUIRED>
                        <option value="">Seleccionar...</option>
                        <?php
                        $tabla="SELECT * FROM annio ORDER BY id ASC";
                        $resultadotabla = $conn->query($tabla);
                        $numero=0;
                        while($row = $resultadotabla->fetch_assoc()){
                            $numero++;

                                echo '<option value="'.($row['annio'].'">'.$row['annio']).'</option>';
                        }
                        ?> <!-- fin loop tabla -->
                        </select>
                    </div>
                  </div>
                </div>

        </div> <!-- div container --> 

      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Cerrar</button>
        <button type="button" class="btn btn-primary" onclick="editarActividad()">Editar</button>
      </div>
    </div>
  </div>
</div>

<!-- Modal estatus 0-->
<div class="modal fade bg-warning" id="modalEstatus0" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered">
    <div class="modal-content">
      <div class="modal-header">
        <h4 class="modal-title fs-5" id="exampleModalLabel">Cambiar estatus</h4>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <input type="text" name="" id="valorId0" hidden>
        <h3 class="text-center">¿Desea cambiar el estatus? Dar de alta</h3>

      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Cerrar</button>
        <button type="button" class="btn btn-primary" onclick="editarEstatus(1)">Cambiar estatus</button>
      </div>
    </div>
  </div>
</div>
<!-- Modal estatus 1-->
<div class="modal fade bg-warning" id="modalEstatus1" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered">
    <div class="modal-content">
      <div class="modal-header">
        <h4 class="modal-title fs-5" id="exampleModalLabel">Cambiar estatus</h4>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <input type="text" id="valEstatus" hidden>
        <input type="text" name="" id="valorId1" hidden>

        <h3 class="text-center">¿Desea cambiar el estatus? Dar de baja</h3>

      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Cerrar</button>
        <button type="button" class="btn btn-primary" onclick="editarEstatus(0)">Cambiar estatus</button>
      </div>
    </div>
  </div>
</div>

<!-- Modal eliminar -->
<div class="modal fade bg-danger" id="modalEliminar" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered">
    <div class="modal-content">
      <div class="modal-header">
        <h4 class="modal-title fs-5" id="exampleModalLabel">Eliminar actividad</h4>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <input type="text" name="" id="idEliminar" hidden>
        <h3 class="text-center">¿Desea eliminar la actividad?</h3>
        <p><h5>Se eliminarán todos los documentos en los perfiles asignados a esta actividad</h5></p>

      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Cerrar</button>
        <button type="button" class="btn btn-primary" onclick="eliminarActividad()">Eliminar</button>
      </div>
    </div>
  </div>
</div>

