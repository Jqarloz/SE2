<!DOCTYPE html>
<html>
<head>

</head>
<body>
	<?php
		include("components.php");
		include('conexion.php');
		$id=$_GET['id'];
		$res=mysqli_query($conexion,"select * from mailbox where id='$id';");
		while($resultados=mysqli_fetch_array($res)){
			$fecha=$resultados['fecha'];
			$nombre=$resultados['nombre'];
			$telefono=$resultados['telefono'];
			$email=$resultados['email'];
			$tipo=$resultados['tipo'];
			$texto=$resultados['texto'];
		}
	?>

	<div class="container">
		<div class="row">
			<div class="col s12">
				<center><?php $tipo; ?> de <?php $Nombre; ?></center>
			</div>
		</div>
		<div class="row">
			<div class="col s4">
				Fecha: <?php $fecha; ?>
			</div>
			<div class="col s4">
				Email: <?php $email; ?>
			</div>
			<div class="col s4">
				Telefono: <?php $telefono; ?>
			</div>		
		</div>
		<div class="container">
			<article>
				<p>
					<?php $texto;?>
				</p>
			</article>
		</div>
	</div>

</body>
</html>