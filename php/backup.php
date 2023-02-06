<!DOCTYPE html>
<html lang="es-la">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Backup</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <meta http-equiv="x-ua-compatible" content="ie=edge" />
    <link href = "css/bootstrap.min.css" rel = "stylesheet">
    <link rel="icon" href="img/solologo.jpg" type="image/x-icon" />
</head>
<body>




<?php
// variables

date_default_timezone_set("America/Bogota");

require('config.php');



//Para utilizar Mysqldump y realizar el respaldo, se debe declarar una variable haciendo referencia a la ubicacion del archivo mysqldump.exe
$mysqldump='"../../../MySQL/bin/mysqldump.exe"';
$backup_file = '"../backups/"'.$dbname. "-" .date("Y-m-d-H-i-s"). ".sql";
system("$mysqldump --no-defaults -u $username -p$password $dbname > $backup_file",$output);


//var_dump($output);  //para mostrar el resultado de la operación, 0 satisfactoria, 1 error en path, 2 error en conexión a base de datos


switch($output){
case 0:


?>

<!-- The Modal -->
  
<div class="container">
              <div class="modal-dialog modal-dialog-centered">
                <div class="modal-content">
                  <div class="modal-header">
                    <h5 class="modal-title">Excelente!</h5>
                    <button type="button" class="btn-close" onclick="location.href='../index.html'" aria-label="Close"></button>
                  </div>
                  <div class="modal-body">
                    <?php
                      echo 'La base de datos <b>' .$dbname .'</b> se ha almacenado correctamente en la siguiente ruta '.getcwd().'/' .$backup_file .'</b>';
                     ?>
                  </div>
                  <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" onclick="location.href='../index.html'">Cerrar</button>
                  </div>
                </div>
              </div>
          </div>
    


 <?php

break;
case 1:


?>

<!-- The Modal -->
  
          <div class="container">
            <div class="modal-dialog modal-dialog-centered">
                <div class="modal-content">
                  <div class="modal-header">
                    <h5 class="modal-title">Ups, ocurrió un error!</h5>
                    <button type="button" class="btn-close" onclick="location.href='../index.html'" aria-label="Close"></button>
                  </div>
                  <div class="modal-body">
                    
                    <?php
                     echo 'Se ha producido un error al exportar <b>' .$dbname .'</b> a '.getcwd().'/ verifique la siguiente ruta: ' .$backup_file .'</b>';
                    ?>
                  </div>
                  <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" onclick="location.href='../index.html'">Cerrar</button>
                  </div>
                </div>
            </div>
          </div>



 <?php



break;
case 2:

?>

<!-- The Modal -->
  
          <div class="container">
            <div class="modal-dialog modal-dialog-centered">
                <div class="modal-content">
                  <div class="modal-header">
                    <h5 class="modal-title">Ups, ocurrió un error!</h5>
                    <button type="button" class="btn-close" onclick="location.href='../index.html'" aria-label="Close"></button>
                  </div>
                  <div class="modal-body">
                    
                  <?php
                    echo 'Se ha producido un error de exportación, compruebe la siguiente información: <br/><br/><table><tr><td>Nombre de la base de datos:</td><td><b>' .$dbname .'</b></td></tr><tr><td>Nombre de usuario MySQL:</td><td><b>' .$username .'</b></td></tr><tr><td>Contraseña MySQL:</td><td><b> '.$password.' </b></td></tr><tr><td>Nombre de host MySQL:</td><td><b>' .$servername .'</b></td></tr></table>';
                  ?>
                  </div>
                  <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" onclick="location.href='../index.html'">Cerrar</button>
                  </div>
                </div>
            </div>
          </div>
    


 <?php


break;
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


