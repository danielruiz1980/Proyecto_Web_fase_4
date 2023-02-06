<!DOCTYPE html>
<html lang="es-la">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Consulta de producto!</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <meta http-equiv="x-ua-compatible" content="ie=edge" />
    <link href = "css/bootstrap.min.css" rel = "stylesheet">
    <link rel="icon" href="img/solologo.jpg" type="image/x-icon" />
</head>
  <body>

    <?php

    require('config.php');

    $v = $_POST['val_cod'];


    $sql = "SELECT * FROM Productos WHERE val_cod=$v";
    $result = mysqli_query($conn, $sql);

    if (mysqli_num_rows($result) > 0) {
        // output data of each row
        while($row = mysqli_fetch_assoc($result)) {



    ?>

    <!-- The Modal -->
        <div class="container">
            <div class="modal-dialog modal-dialog-centered">
              <div class="modal-content">
                <div class="modal-header">
                  <h5 class="modal-title">Datos de
                  <?php
                    echo" código de producto ".$row["val_cod"]
                  ?>
                  :</h5>
                    <button type="button" class="btn-close" onclick="location.href='../consultar.html'" aria-label="Close">&times;</button>
                </div>
                <div class="modal-body">
                  <?php
                      echo "<br> Nombre del producto: " . $row["val_nom"]
                      . "<br> Marca del producto: " . $row["val_marca"]
                      . "<br> Precio del producto: " . $row["val_precio"]
                      . "<br> Candtidades del producto ". $row["uni_pro"]
                      . "". "<br>";
                  ?>
                </div>
                <div class="modal-footer">
                  <button type="button" class="btn btn-danger" onclick="location.href='../consultar.html'">Cerrar</button>
                  <button type = "button" class="btn btn-secondary" onclick="location.href='../index.html'">Volver al menú principal</button>
                </div>
              </div>
            </div>
        </div>  



    <?php


            
    //$myJSON = json_encode($row);

    //echo $myJSON;

        }


    } else {



    ?>

    <!-- The Modal -->
      
    <div class="container">
        <div class="modal-dialog modal-dialog-centered">
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title">Ups, ocurrió un error!</h5>
                <button type="button" class="btn-close" onclick="location.href='../consultar.html'" aria-label="Close">&times;</button>
            </div>
            <div class="modal-body">
              <p>Este producto no se encuentra en el inventario</p>
              <?php
              echo "" . "<br>" . mysqli_error($conn);
              ?> 
            </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-danger" onclick="location.href='../consultar.html'" data-bs-dismiss="modal">Cerrar</button>
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