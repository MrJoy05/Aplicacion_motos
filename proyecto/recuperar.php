<?php
include('conexion.php');

$correo = $_POST['correo'];

$queryusuario 	= mysqli_query($conexion,"SELECT * FROM registro WHERE correo = '$correo'");
$nr 			= mysqli_num_rows($queryusuario); 
if ($nr == 1)
{
$mostrar		= mysqli_fetch_array($queryusuario); 
$enviarpass 	= $mostrar['password'];

$paracorreo 		= $correo;
$titulo				= "Recuperar contraseña";
$mensaje			= $enviarpass;
$tucorreo			= "From: yahir.guzman04@gmail.com";

if(mail($paracorreo,$titulo,$mensaje,$tucorreo))
{
	echo "<script> alert('Contraseña enviado');window.location= 'login.html' </script>";
}else
{
	echo "<script> alert('Error');window.location= 'login.html' </script>";
}
}
else
{
	echo "<script> alert('Este correo no existe');window.location= 'login.html' </script>";
}
/*VaidrollTeam*/
?>