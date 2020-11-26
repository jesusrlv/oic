<?php
session_start();

if (isset($_SESSION['usr'])) {
    if($_SESSION['tipo_trabajador']==1){
        // header('Location: javascript: history.go(-1)');
    }
    elseif($_SESSION['tipo_trabajador']==2){
        // header('Location: javascript: history.go(-1)');
    }
    elseif($_SESSION['tipo_trabajador']==3){
        // header('Location: javascript: history.go(-1)');
    }
    else{
        header('Location:sort.php');
    }
    // Si esta identificado, en otras palabras existe la variable, le saludamos
    // echo 'Hola ' . $_SESSION['usr'];
} else {
    // En caso contrario redirigimos el visitante a otra página

    echo 'Usuario no válido';
    // header('Location: ../../autentificacion/');
    header('Location: sort.php');
    die();
}
?>

<!doctype html>
<html lang="es">
  <head>
  <?php
include ("conn.php")
?>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Jekyll v4.0.1">
    <title>Comité de Ética</title>

    <link rel="canonical" href="https://getbootstrap.com/docs/4.5/examples/album/">

    <!-- Bootstrap core CSS -->
<link href="bootstrap.css" rel="stylesheet">

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
    <link href="album.css" rel="stylesheet">
  </head>
  <body>
    <header>
  <div class="collapse bg-dark" id="navbarHeader">
    <div class="container">
      <div class="row">
        <div class="col-sm-8 col-md-7 py-4">
          <h4 class="text-white">About</h4>
          <p class="text-muted">Add some information about the album below, the author, or any other background context. Make it a few sentences long so folks can pick up some informative tidbits. Then, link them off to some social networking sites or contact information.</p>
        </div>
        <div class="col-sm-4 offset-md-1 py-4">
          <h4 class="text-white">Contact</h4>
          <ul class="list-unstyled">
            <li><a href="#" class="text-white">Follow on Twitter</a></li>
            <li><a href="#" class="text-white">Like on Facebook</a></li>
            <li><a href="#" class="text-white">Email me</a></li>
          </ul>
        </div>
      </div>
    </div>
  </div>
  <div class="navbar navbar-dark bg-dark shadow-sm">
    <div class="container d-flex justify-content-between">
      <a href="#" class="navbar-brand d-flex align-items-center">
        <!-- <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" aria-hidden="true" class="mr-2" viewBox="0 0 24 24" focusable="false"><path d="M23 19a2 2 0 0 1-2 2H3a2 2 0 0 1-2-2V8a2 2 0 0 1 2-2h4l2-3h6l2 3h4a2 2 0 0 1 2 2z"/><circle cx="12" cy="13" r="4"/></svg> -->
      <img src="TrabajemosJuntosJuventud.png" alt="" width="36" height="36" class="img-thumbnail" style="margin-right:9px"><strong> INJUVENTUD</strong>
      </a>

      <?php
      echo $_SESSION['usr'];
      ?>
      <!-- <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarHeader" aria-controls="navbarHeader" aria-expanded="false" aria-label="Toggle navigation"> -->
        <!-- <span class="navbar-toggler-icon"></span> -->
      <!-- </button> -->
    </div>
  </div>
</header>

<main role="main">

  <section class="jumbotron text-center">
    <div class="container">
      <h1>Instituto de la Juventud</h1>
      <p><img src="TrabajemosJuntosJuventud.png" alt="" width="81" height="81"></p>
      <p class="lead text-muted">Comité de ética | Sistema de nominación</p>
      <p>
        <a href="sort.php" class="btn btn-primary my-2">Salir</a>
        <!-- <a href="#" class="btn btn-secondary my-2">Secondary action</a> -->
      </p>
    </div>
  </section>

  <div class="album py-5 bg-light">
    <div class="container">

      <div class="row">
        <div class="col-md-8">
        <p class="lead text-muted">INSTRUCCIONES: Debes seleccionar 2 candidatos para ser nominado de Enlace en la categoría de Jefe de Departamento y dos trabajadores que no sean Jefes de Departamento.</p>
        
        <?php
          // session_start();
          $usuario = $_SESSION['usr'];

          $query="SELECT * FROM trabajadores WHERE tipo_trabajador=1";
          $resultado = $conn->query($query);
          // $row=$resultado->fetch_assoc();
        ?>

        <?php
          
          $query1="SELECT * FROM trabajadores WHERE tipo_trabajador=1";
          $resultado1 = $conn->query($query1);
          // $row=$resultado->fetch_assoc();
        ?>

        <?php
          $query2="SELECT * FROM trabajadores WHERE tipo_trabajador=2";
          $resultado2 = $conn->query($query2);
          // $row=$resultado->fetch_assoc();
        ?>

        <?php
          $query3="SELECT * FROM trabajadores WHERE tipo_trabajador=2";
          $resultado3 = $conn->query($query3);
          // $row=$resultado->fetch_assoc();
        ?>

        <form action="votacion.php" method="POST">

        <div class="input-group mb-3">
          <div class="input-group-prepend">
            <label class="input-group-text" for="inputGroupSelect01">Enlace Jefe de Departamento</label>
          </div>
          <select class="custom-select" id="voto1" name="voto1" required>
            <option value="">Elegir...</option>
            <?php
            while($row=$resultado->fetch_assoc()){
            echo '<option value="'.$row['id'].'">'.$row['trabajador'].'</option>';
            }
            ?>
          </select>
        </div>

        <div class="input-group mb-3">
          <div class="input-group-prepend">
            <label class="input-group-text" for="inputGroupSelect01">Vocal Jefe de Departamento</label>
          </div>
          <select class="custom-select" id="voto2" name="voto2" required>
            <option value="">Elegir...</option>
            <?php
            while($row1=$resultado1->fetch_assoc()){
            echo '<option value="'.$row1['id'].'">'.$row1['trabajador'].'</option>';
            }
            ?>
          </select>
        </div>

        <hr>

        <div class="input-group mb-3">
          <div class="input-group-prepend">
            <label class="input-group-text" for="inputGroupSelect01">Enlace Analista/Técnico de Departamento</label>
          </div>
          <select class="custom-select" id="voto3" name="voto3" required>
            <option value="">Elegir...</option>
            <?php
            while($row2=$resultado2->fetch_assoc()){
            echo '<option value="'.$row2['id'].'">'.$row2['trabajador'].'</option>';
            }
            ?>
          </select>
        </div>

        <div class="input-group mb-3">
          <div class="input-group-prepend">
            <label class="input-group-text" for="inputGroupSelect01">Vocal Analista/Técnico de Departamento</label>
          </div>
          <select class="custom-select" id="voto4" name="voto4" required>
            <option value="">Elegir...</option>
            <?php
            while($row3=$resultado3->fetch_assoc()){
            echo '<option value="'.$row3['id'].'">'.$row3['trabajador'].'</option>';
            }
            ?>
          </select>
        </div>
        
        <?php
        $query4="SELECT * FROM trabajadores WHERE usr_plataforma = '$usuario'";
        $resultado4 = $conn->query($query4);
        $row4=$resultado4->fetch_array();

        // if ($resultado5=mysqli_fetch_array($resultado4)){

            // echo $query4;
            if($row4['flag']==0){
        

              echo '<button class="btn btn-outline-success btn-lg" href="#" role="button" type="submit">VOTAR</button>';
            }
        
            elseif($row4['flag']==1){
        

          echo '¡YA HAS EMITIDO TU VOTO!';
        }

        

      // } fin del if fetch

        ?>



        </form>

      </div>
    </div>
  </div>

</main>

<footer class="text-muted">
  <div class="container">
    <p class="float-right">
      <a href="#">Arriba</a>
    </p>
    <p>Sistema de votación</p>
    <p>Comité de Ética | INJUVENTUD</p>
  </div>
</footer>
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
      <script>window.jQuery || document.write('<script src="../assets/js/vendor/jquery.slim.min.js"><\/script>')</script><script src="../assets/dist/js/bootstrap.bundle.js"></script></body>
</html>
