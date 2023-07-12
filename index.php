<!DOCTYPE html>
<html lang="es">
  <head>
  <title>Login</title>
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

     <!--<style type="text/css">
    .backgroundFondo{
    background: url('assets/images/fondo.jpg') no-repeat center top;
    background-size: cover;
    height: 100vh;

    display: flex;
    justify-content: center;
    align-items: center;
    }
    </style>-->
  </head>
  <body class="backgroundFondo">

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
                <h3> Iniciar Sesión</h3>
                <p class="mb-4">Rappi</p>
              </div>
              <form action="verificarDatos/verificar_sesion.php" method="post">
                
                <div class="form-group first">
                  <label for="username">Correo</label>
                  <input type="email" name="email" required autocomplete="off" id="username"/>
                </div>
                <div class="form-group last mb-4">
                  <label for="password">Contraeña</label>
                  <input type="password" name="password" required autocomplete="off"  id="password"/>
                </div>

                <div class="d-flex mb-5 align-items-center">
                  <label class="control control--checkbox mb-0"><span class="caption">Acuérdate de mí</span>
                    <input type="checkbox" checked="checked" />
                    <div class="control__indicator"></div>
                  </label>
                  <span class="ml-auto"><a class="olvidar" id="olvidar" title="Recuperar Clave" href="Olvido.php">Has olvidado tu contraseña</a></span>
                </div>
                <button type="submit" class="btn btn-block btn btn-danger" value="ENTRAR">Iniciar Sesión</button>
                <a class="boton-personalizado" href="register.php"  id="volver" title="Volver">Volver</a>
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

  <script src="assets/js/jquery-3.3.1.min.js"></script>
  <script src="assets/js/popper.min.js"></script>
  <script src="assets/js/bootstrap.min.js"></script>
  <script src="assets/js/main.js"></script>
   
  </body>
</html>