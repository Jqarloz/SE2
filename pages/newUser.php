<html lang="es">
<head>
</head>
<body>
	<header></header>
    <?php
	if(!isset($_SESSION)){ 
	session_start(); 
	} 
	include("../conexion.php"); 
	include("components.php");
	?>
<section class="ContentPage">
    <form name="registrar" method="POST" enctype="multipart/form-data">
    <div class="container">
	<div class="card-panel #9e9e9e grey">
		<div class="col s12 center">
			<i class="zmdi zmdi-account-add zmdi-hc-2x prefix"></i> Datos de cuenta:
		</div>
	</div>
	<div class="row">
		<div class="col s6 input-field">
			<i class="zmdi zmdi-account zmdi-hc-2x prefix"></i>
            <input id="usuario" name="usuario" type="text" class="validate" required="required">
            <label for="usuario">Nombre de Usuario:</label>
		</div>
	</div>
	<div class="row">
		<div class="col s6 input-field">
			<i class="zmdi zmdi-alert-circle zmdi-hc-2x prefix"></i>
			<input id="password" name="password" type="password" class="validate" required="required">
            <label for="password">Contraseña:</label>
		</div>
		<div class="col s6 input-field">
			<i class="zmdi zmdi-alert-circle zmdi-hc-2x prefix"></i>
			<input id="password2" name="password2" type="password" class="validate" required="required">
            <label for="password2">Confirma contraseña:</label>
		</div>
	</div>
	<div class="card-panel #9e9e9e grey">
		<div class="col s12 center">
			<i class="zmdi zmdi-account-add zmdi-hc-2x prefix"></i> Datos Personales:
		</div>
	</div>
	<div class="row">
		<div class="col s4 input-field">
			<input id="nombre" name="nombre" type="text" class="validate" required="required">
            <label for="nombre">Nombre:</label>
		</div>
		<div class="col s4 input-field">
			<input id="ap" name="ap" type="text" class="validate" required="required">
            <label for="ap">Apellido Paterno:</label>
		</div>
		<div class="col s4 input-field">
			<input id="am" name="am" type="text" class="validate" required="required">
            <label for="am">Apellido Materno:</label>
		</div>
	</div>
	<div class="row">
		<div class="file-field input-field">
	      <div class="btn">
	        <span>Foto de Perfil</span>
	        <input type="file" id="img" name="img" accept="image/*">
	      </div>
	      <div class="file-path-wrapper">
	        <input class="file-path" type="text">
	      </div>
	    </div>
	</div>
	<div class="row">
		<div class="col s6 input-field">
			<i class="zmdi zmdi-email zmdi-hc-2x prefix"></i>
			<input id="mail" name="mail" type="text" class="validate" required="required">
            <label for="mail">E-mail:</label>
		</div>
		<div class="col s6 input-field">
			<i class="zmdi zmdi-account-box-phone zmdi-hc-2x prefix"></i>
			<input id="tel" name="tel" type="number" class="validate" required="required">
            <label for="tel">Telefono:</label>
		</div>
	</div>
	<div class="row">
		<div class="col s6 input-field offset-s3">
			<i class="zmdi zmdi-email zmdi-hc-2x prefix"></i>
			<input id="access" name="access" type="number" class="validate" required="required">
            <label for="access">Acceso:</label>
		</div>
	</div>
	</div>
	<div class="card-panel #9e9e9e grey">
		<div class="col s12 center">
			<input type="submit" name="submit" value="Registrar" class="waves-effect waves-teal btn red" >
		</div>
	</div>
	
	</form>

</section>

	<script>
		$(document).ready(function(){
		$(".button-collapse").sideNav();
		$('.modal-trigger').leanModal();
		$('.collapsible').collapsible({
			  accordion : false // A setting that changes the collapsible behavior to expandable instead of the default accordion style
			});
		$('.slider').slider({full_width: true});
			})
	  </script>
</body>
</html>

<?php
	@$nomfoto=$_FILES['img']['name'];
	@$origen=$_FILES['img']['tmp_name'];
	@$destino= "../assets/perfil/".$nomfoto;
	@copy($origen, $destino);

	@$usuario = $_POST['usuario'];
	@$password = $_POST['password'];
	@$password2 = $_POST['password2'];
	@$nombre = $_POST['nombre'];
	@$ap = $_POST['ap'];
	@$am = $_POST['am'];
	@$tel = $_POST['tel'];
	@$mail = $_POST['mail'];
	@$access = $_POST['access'];
	@$fecha = date("Y"). "/". date("m") ."/". date("d");

	if ($password == $password2) {
		$pass = sha1($password);
		if (isset($usuario) and isset($pass) and isset($nombre) and isset($ap) and isset($am) and isset($access) and isset($fecha) and isset($nomfoto) and isset($tel) and isset($mail)) {

			$inserta = mysqli_query($conexion, "insert into users values(NULL, '$usuario', '$pass','$nombre','$ap','$am','$access','$fecha','$destino','$tel','$mail');");
	
			if($inserta){
				echo '<script type="text/javascript">';
                echo 'alert("Registro con exito!")';
                echo "</script>";
                echo '<meta http-equiv="Refresh" content="0;URL=../index.html">';
			}
			
			else{
				echo '<script type="text/javascript">';
                echo 'alert("Error al registrar!'.$destino.'")';
                echo "</script>";
				}	
			}
	}else{
		echo '<script type="text/javascript">';
        echo 'alert("La contraseña no coincide! intente nuevamente.")';
        echo "</script>";
	}
?>