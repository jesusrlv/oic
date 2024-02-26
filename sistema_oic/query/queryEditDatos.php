<?php
session_start();
include ('../prcd/conn.php');

$id = $_POST['id'];
$trimestre = $_POST['trimestre'];
$actividad = $_POST['actividad'];

$idActividad = $_POST['idActividad'];

$sql = "SELECT * FROM bitacora WHERE id = '$idActividad' AND usr_vinculado = '$id' AND actividad_vinculada = '$actividad' AND trimestre = '$trimestre'";
$result = $conn->query($sql);
$row = $result->fetch_assoc();

echo '

    <input type="" name="trimestre" id="trimestre" value="'.$row['trimestre'].'">
    <input type="" name="actividad" id="actividad" value="'.$row['actividad_vinculada'].'">
                
    <div class="input-group mb-3">
        <span class="input-group-text">Observaciones de la actividad</span>
        <textarea class="form-control" aria-label="With textarea" name="descripcion" value="'.$row['descripcion'].'" REQUIRED></textarea>
    </div>

    <div class="input-group mb-3">
        <span class="input-group-text" id="inputGroup-sizing-default">Fecha de inicio</span>
        <input type="date" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default" name="fecha_inicio" value="'.$row['fecha_ini'].'" REQUIRED>
    </div>
    <div class="input-group mb-3">
        <span class="input-group-text" id="inputGroup-sizing-default">Fecha de finalización</span>
        <input type="date" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default" name="fecha_finalizacion" value="'.$row['fecha_fin'].'" REQUIRED>
    </div>

    <p><i class="fas fa-file-pdf"></i> Editar evidencia</p>
        <hr class="my-4">

                <div class="form-group">
                <label for="exampleFormControlFile1"><h5>Cargar PDF</h5></label>
                <input type="file" class="form-control-file" id="exampleFormControlFile1" name="file1" accept="application/pdf, application/vnd.ms-excel" REQUIRED>
                </div>

        <hr class="my-4">

';