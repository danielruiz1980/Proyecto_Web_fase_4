<!DOCTYPE html>
<html lang="es">
<head>
  <title>Insertar</title>
    <title>Insertar</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
</head>
</head>
<body>

 <?php

require('config.php');
    $v = $_POST['val_cod'];
    $n = $_POST['val_nom'];
    $m = $_POST['val_marca'];
    $p = $_POST['val_precio'];
    $u = $_POST['uni_pro'];


$sql = "UPDATE productos SET val_nom='$n', val_marca='$m', val_precio='$p',uni_pro='$u'  WHERE val_cod='$v'";

if (mysqli_query($conn, $sql)) {


?>

<!-- The Modal -->
  
    <div class="container">
        <div class="modal-dialog modal-dialog-centered">
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title">Excelente!</h5>
                <button type="button" class="btn-close" onclick="location.href='../actualizar.html'" aria-label="Close">&times;</button>
            </div>
            <div class="modal-body">
              <p>Datos del producto registrados y actualizados exitosamente.</p>
            </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-danger" onclick="location.href='../actualizar.html'">Cerrar</button>
              <button type = "button" class="btn btn-secondary" onclick="location.href='../index.html'">Volver al menú principal</button>
            </div>
          </div>
        </div>
    </div>



 <?php


} else {


?>

<!-- The Modal -->
  
<div class="container">
        <div class="modal-dialog modal-dialog-centered">
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title">Ups, ocurrió un error!</h5>
                <button type="button" class="btn-close" onclick="location.href='../actualizar.html'" aria-label="Close">&times;</button>
            </div>
            <div class="modal-body">
              <p>Revise los datos ingresados o vuelva a realizar el formulario de actualización</p>
              <?php
              echo "" . "<br>" . mysqli_error($conn);
              ?> 
            </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-danger" onclick="location.href='../actualizar.html'" data-bs-dismiss="modal">Cerrar</button>
              <button type = "button" class="btn btn-secondary" onclick="location.href='../index.html'">Volver al menú principal</button>
            </div>
          </div>
        </div>
    </div>



 <?php

}

mysqli_close($conn);
?> 