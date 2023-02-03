<!DOCTYPE html>
<html lang="es-la">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Creación de tabla!</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <meta http-equiv="x-ua-compatible" content="ie=edge" />
    <link href = "css/bootstrap.min.css" rel = "stylesheet">
    <link rel="icon" href="img/solologo.jpg" type="image/x-icon" />
</head>
<body>




    <?php

    require('config.php');
    $v = $_POST['val_cod'];
    $n = $_POST['val_nom'];
    $m = $_POST['val_marca'];
    $p = $_POST['val_precio'];
    $u = $_POST['uni_pro'];



    $sql = "INSERT INTO productos (val_cod, val_nom, val_marca, val_precio, uni_pro) VALUES ('$v','$n','$m', '$p', '$u')";

    if (mysqli_query($conn, $sql)) {
    
    ?>
    <div class="container">
        <div class="modal-dialog modal-dialog-centered">
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title">Excelente!</h5>
                <button type="button" class="btn-close" onclick="location.href='../insertar.html'" aria-label="Close">&times;</button>
            </div>
            <div class="modal-body">
              <p>Datos del producto registrados exitosamente.</p>
            </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-danger" onclick="location.href='../ingresar.html'">Cerrar</button>
              <button type = "button" class="btn btn-secondary" onclick="location.href='../index.html'">Volver al menú principal</button>
            </div>
          </div>
        </div>
    </div>
     
     

    <?php
    } else 
    {



    ?>

      <div class="container">
        <div class="modal-dialog modal-dialog-centered">
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title">Ups, ocurrió un error!</h5>
                <button type="button" class="btn-close" onclick="location.href='../insertar.html'" aria-label="Close">&times;</button>
            </div>
            <div class="modal-body">
              <p>Se ha producido un error al ingresar el producto o ya existe con el código de producto ingresado</p>
              <?php
              echo "" . $sql. mysqli_error($conn);
              ?> 
            </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-danger" onclick="location.href='../ingresar.html'">Cerrar</button>
              <button type = "button" class="btn btn-secondary" onclick="location.href='../index.html'">Volver al menú principal</button>
            </div>
          </div>
        </div>
      </div>
    
              


    <?php


    }

    mysqli_close($conn);

    ?>
  
  
    <script>
      (function(){
        'use strict'

        // Fetch all the forms we want to apply custom Bootstrap validation styles to
        const forms = document.querySelectorAll('needs-validation')

        // Loop over them and prevent submission
        Array.from(forms).forEach(form => {
          form.addEventListener('submit', event => {
            if (!form.checkValidity()) {
              event.preventDefault()
              event.stopPropagation()
            }

            form.classList.add('was-validated')
          }, false)
        })
      })()
    </script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src = "js/bootstrap.bundle.js"></script>
    <script src="https://code.jquery.com/jquery-3.6.3.slim.js" integrity="sha256-DKU1CmJ8kBuEwumaLuh9Tl/6ZB6jzGOBV/5YpNE2BWc=" crossorigin="anonymous"></script>      

    
  </body>
</html>