<?php
session_start();
include ('../prcd/conn.php');

$id = $_POST['id'];
$trimestre = $_POST['trimestre'];
$actividad = $_POST['actividad'];
$idActividad = $_POST['idActividad'];
$cuenta = $_POST['cuenta'];
$annio = $_POST['annio'];

$sql = "SELECT * FROM bitacora WHERE 
id = '$idActividad' 
AND trimestre = '$trimestre' 
AND actividad_vinculada = '$actividad' 
AND usr_vinculado = '$id' 
AND cuenta = '$cuenta'";
$result = $conn->query($sql);
$row = $result->fetch_assoc();

echo '
    <form method="post" action="prcd/proceso_editar_evidencia_datos.php">
    
    <input type="hidden" name="actividad" id="actividad" value="'.$row['actividad_vinculada'].'">
    <input type="hidden" name="trimestre" id="trimestre" value="'.$row['trimestre'].'">
    <input type="hidden" name="cuenta" id="cuenta" value="'.$row['cuenta'].'">
    <input type="hidden" name="annio" id="annio" value="'.$annio.'">
                
    <div class="input-group mb-3">
        <span class="input-group-text">Observaciones de la actividad</span>
        <textarea class="form-control" aria-label="With textarea" name="descripcion" REQUIRED>'.$row['descripcion'].'</textarea>
    </div>

    <div class="input-group mb-3">
        <span class="input-group-text" id="inputGroup-sizing-default">Fecha de inicio</span>
        <input type="date" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default" name="fecha_inicio" value="'.$row['fecha_ini'].'" REQUIRED>
    </div>
    <div class="input-group mb-3">
        <span class="input-group-text" id="inputGroup-sizing-default">Fecha de finalización</span>
        <input type="date" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default" name="fecha_finalizacion" value="'.$row['fecha_fin'].'" REQUIRED>
    </div>
    <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Cerrar</button>
    <button type="submit" class="btn btn-primary">Actualizar</button>
    </form>';

//     echo ' 
//     <hr class="my-4">
//     <form id="upload_form" enctype="multipart/form-data" method="post">
//     <label for="exampleFormControlFile1"><h5><i class="fas fa-file-pdf"></i> Actualizar documento</h5></label>
//         <div class="input-group mb-3">
//             <input type="file" name="file1" id="file1" accept="application/pdf" class="form-control">
//         </div>
//         <div class="progress" role="progressbar" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100" value="0">
//             <div class="progress-bar progress-bar" style="background-color:#917799" id="progressBar1" value="0" max="100" style="height: 20px">
//             <p id="loaded_n_total1"></p>
//             </div>
//         </div>
//         <small id="status1"></small>
//     </form>
// ';