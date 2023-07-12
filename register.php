<!DOCTYPE html>
<html lang="es">
  <head>
  <title>Registrar Usuario</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="shortcut icon" type="image/x-icon" href="assets/images/logo.jpg">
    <link href="https://fonts.googleapis.com/css?family=Roboto:300,400&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="fonts/icomoon/style.css">
    <link rel="stylesheet" href="assets/css/owl.carousel.min.css">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="assets/css/util.css">
    <link rel="stylesheet" type="text/css" href="assets/css/main.css">

     <!-- Style -->
    <link rel="stylesheet" href="assets/css/style.css">
  </head>
  <body >
<?php
    include('msjs.php');
?>

<div class="content">
    <div class="container">
      <div class="row">
        <div class="col-md-6">
          <img src="assets/images/login.png" alt="Image" class="img-fluid">
        </div>
        <div class="col-md-6 contents">
          <div class="row justify-content-center">
            <div class="col-md-8">
              <div class="mb-4">
                <h3> Registrar Usuario</h3>
                <p class="mb-4">Unete a la gran familia Rappi <br> Recibe oferna unicas acorde a tus necesidades </p>
              </div>
              <form  method="post">
                
                <div class="form-group first">
                  <label for="username">Nombre</label>
                  <input type="text" name="fullName" required autocomplete="off" id="fullName"/>
                </div>
                <div class="form-group first">
                  <label for="password">Correo</label>
                  <input type="email" name="email" required autocomplete="off"  id="password"/>
                </div>
                <div class="form-group last mb-4">
                  <label for="password">Contraeña</label>
                  <input type="password" name="password" required autocomplete="off"  id="password"/>
                </div>

                <button type="submit" class="btn btn-block btn btn-danger"  name="enviar" value="enviar" href="index.php">Crear Cuenta</button>
                <button type="submit" class="btn btn-block btn btn-primary"  name="enviar" value="enviar" href="index.php">Regresar</button>

                <span class="d-block text-center my-4 text-muted">&mdash; o inicia sesión con &mdash;</span>

                <div class="login100-form-social flex-c-m social-login">
                  <a href="#" class="login100-form-social-item flex-c-m bg1 m-r-5">
                    <span class="icon-facebook mr-3"></span>
                  </a>
      
                  <a href="#" class="login100-form-social-item flex-c-m bg2 m-r-5">
                    <span class="icon-twitter mr-3"></span>
                  </a>
              </form>
            </div>
          </div>

         

        </div>

      </div>
    </div>
  </div>

  <?php
	include("verificarDatos/registro.php")
	?>

  <script src="assets/js/jquery-3.3.1.min.js"></script>
  <script src="assets/js/popper.min.js"></script>
  <script src="assets/js/bootstrap.min.js"></script>
  <script src="assets/js/main.js"></script>
   
  </body>
</html>