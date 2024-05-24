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
<hr class="my-4">
    <form method="post" action="prcd/proceso_editar_evidencia_datos.php" class="mt-2">
    <label for="exampleFormControlFile1"><h5><i class="bi bi-person-up"></i> Actualizar datos</h5></label>
    <input type="hidden" id="urlAct" value="'.$row['url_doc'].'">
    <input type="hidden" id="idActualizar" value="'.$row['id'].'">
    <input type="hidden" id="actividadActualizar" value="'.$row['actividad_vinculada'].'">
    <input type="hidden" name="trimestre" id="trimestreActualizar" value="'.$row['trimestre'].'">
    <input type="hidden" name="cuentaActualizar" id="cuentaActualizar" value="'.$row['cuenta'].'">
    <input type="hidden" name="annioActualizar" id="annioActualizar" value="'.$annio.'">
                
    <div class="input-group mb-3">
        <span class="input-group-text">Observaciones de la actividad</span>
        <textarea class="form-control" aria-label="With textarea" name="descripcion" id="observacionesActualizar" REQUIRED>'.$row['descripcion'].'</textarea>
    </div>

    
    </form>
    
    <button class="btn btn-primary w-100" onclick="actualizarDatosEvidencia()">Actualizar datos</button>
    ';


    ?>