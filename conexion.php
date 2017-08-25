<?php
	//$conecta = mysqli_connect('localhost', 'root', '', 'ERP') or die("Error al conectar con la BD")
	$conexion = new mysqli("localhost", "root", "", "serv");

	if(mysqli_connect_error()){
		echo "Conexion Fallida : ", mysqli_connect_error();
		echo '<script type="text/javascript">';
		    echo 'alert("Lo siento el registro no se realizo.")';
		    echo "</script>";
		exit();
	}
	
?>