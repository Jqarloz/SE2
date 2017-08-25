<!DOCTYPE html>
<html>
<head>
</head>
<body>
	<?php
		include("components.php");
	?>




	<nav>
	<div class="nav-wrapper teal darken-3">
	  <a href="#" ><img src="assets/images/logo.png" class="brand-logo right" height="98%"></a>
	  <ul id="nav-mobile" class="left hide-on-med-and-down">
	    <li><a href="../index.html"><i class="small material-icons left">home</i>Volver al Inicio</a></li>
	  </ul>
	</div>
	</nav>


	<div class="container">
		<div class="row">
			<form class="col s10" method="post">
				<div class="row">
					<div class="col s6"></div>
				</div>
				<div class="row">
					<div class="col s6">
						<label for="nombre">Nombre:</label>
						<input placeholder="No obligatorio..." id="nombre" name="nombre" type="text" class="validate">
					</div>
					<div class="col s6">
						<label for="Email">Email:</label>
						<input placeholder="No obligatorio..." id="Email" name="email" class="validate">
					</div>
				</div>
				<div class="row">
					<div class="col s6">
						<label for="Ap">Apellidos:</label>
						<input placeholder="No obligatorio..." id="Ap" name="ap" type="text" class="validate">
					</div>
					<div class="col s6">
						<label>*Tipo</label>
						<select id="tipo" name="tipo" required="required" class="validate">
							<option value="" disabled selected>Elija una opción</option>
						    <option value="Queja">Queja</option>
						    <option value="Sugerencia">Sugerencia</option>
					    </select>
					</div>
				</div>
				<div class="row">
					<div class="col offset-s4">
						<label for="tel">Telefono:</label>
						<input placeholder="No obligatorio..." id="Tel" name="tel" type="number" class="validate">
					</div>
				</div>
				<div class="row">
					<div class="input-field col s12">
						<label for="texto">Mensaje:</label>
			        	<textarea id="texto" name="texto" required="required" class="materialize-textarea"></textarea>
			        </div>
				</div>
				<div class="col s12">
					<center>
				  		<button class="btn waves-effect waves-light" type="submit" name="action">Enviar
				  		<i class="material-icons right">send</i>
				  	</center>
				  </button>
				</div>
			</form>
		</div>
	</div>
	

</body>
</html>

<?php
	include('../conexion.php');
	@$fecha = date("Y"). "/". date("m") ."/". date("d");
	@$nom = $_POST['nombre'];
	@$ap = $_POST['ap'];
	@$nombre = $nom . " " . $ap;
	@$tel = $_POST['tel'];
	@$email = $_POST['email'];
	@$tipo = $_POST['tipo'];
	@$texto = $_POST['texto'];

	if($nom == null){
		$nombre = "Anónimo";
	}
	if($email == null){
		$email = "Anónimo";
	}
	if(isset($texto) and isset($tipo)){
		$cons=mysqli_query($conexion,"insert into mailbox values(null,'$fecha','$nombre','$tel','$email','$tipo','$texto');");
		if($cons){
			echo '<script type="text/javascript">';
			echo 'alert("Tu mensaje se ha enviado con éxito.")';
			echo "</script>";
			header("Refresh:0;URL=index.html");
		}
		else{
			echo '<script type="text/javascript">';
			echo 'alert("Error.")';
			echo "</script>";
			header("Refresh:0;URL=mailbox.php");
		}
	}
	mysqli_close($conexion);
?>
