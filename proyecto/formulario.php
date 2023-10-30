<?php
include('conexion.php');

$correo = $_POST['correo'];
$user = $_POST['usuario'];
$password = $_POST['password'];


    $query = "INSERT INTO registro(usuario,correo, password)
              VALUES ('$user','$correo','$password')";
    if(mysqli_query($conexion,$query))
{
    echo "<script> alert('Usuario registrado: $user');window.location='formulario.html' </script>";
}
?>
