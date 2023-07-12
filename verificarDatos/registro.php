<?php

include('verificarDatos/con_db.php');

if(isset($_POST['enviar'])){
    if(strlen($_POST['fullName']) >=1 && strlen($_POST['email']) >=1 && strlen($_POST['password']) >=1){
        $fullName = trim($_POST['fullName']);
        $email = trim($_POST['email']);
        $password = trim($_POST['password']);

        $consulta = "INSERT INTO login (fullName, email, password) VALUES ('$fullName', '$email', '$password' )";
        $resultado = mysqli_query($conex, $consulta);
        if($resultado){
            ?>
            <h3>Te has inscrito correctamente</h3>
            <?php
        }else{
            ?>
            <h3>Ups!!! no Te has inscrito correctamente</h3>
            <?php 
        }
    }else {
        ?>
            <h3>Complete los campos faltantes</h3>
            <?php
    }
}


?>