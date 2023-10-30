<?php
    session_start();
    include("conexion.php");

    $usuario = $_POST['usuario'];
    $password = $_POST['password'];

    $queryusuario = mysqli_query($conexion,"SELECT * FROM registro WHERE usuario ='$usuario' and password = '$password'");
   
    $nr	= mysqli_num_rows($queryusuario);

    if ($nr == 1)
    {
    echo	"<script> alert('Usuario logueado.');window.location= 'seccionprincipal.html' </script>";
    }
    else
    {
    echo "<script> alert('Usuario o contraseña incorrecto.');window.location= 'login.html' </script>";
    }

?>
