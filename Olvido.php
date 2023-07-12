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
    <link rel="stylesheet" href="assets/css/style_olvido.css">

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
          <img src="assets/images/repo.png"  alt="Image" class="img-fluid">
        </div>
        <div class="col-md-6 contents"  id="recuperarclave">
          <div class="row justify-content-center">
            <div class="col-md-8">
              <div class="mb-4">
                <h3> Recuperar tu Clave</h3>
              </div>
              <form action="recuperarClave.php" method="post" class="form">
              <div class="field-wrap">
                    <label>Correo</label>
                    <input type="email" name="email" required autocomplete="off"/ id="username">
                </div>
                <button type="submit" class="btn btn-primary btn-block""  value="RECUPERAR CLAVE">Recuperar Clave</button>
                <a class="boton-personalizado" href="index.php"  id="volver" title="Volver">Volver</a>
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
