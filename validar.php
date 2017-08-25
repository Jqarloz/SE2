<?php
$usuario=$_POST['usuario'];
$clave=$_POST['clave'];

$conexion=mysqli_connect('localhost','root','','siie');
$consulta="SELECT * FROM usuarios WHERE usuario='$usuario' and clave='$clave'";
$resultado=mysqli_query($conexion, $consulta);

$filas=mysqli_num_rows($resultado);

if ($filas>0) {
	header("location:SIIE/");
}

else{
	echo "Error usuario y contraseña no validos";
}

mysqli_free_result($resultado);
mysqli_close($conexion);
