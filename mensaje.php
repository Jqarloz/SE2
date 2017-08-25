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
				<h2><center><?php echo $tipo; ?> de <b><?php echo $nombre; ?></b></center></h2>
			</div>
		</div>
		<div class="row center-align">
			<div class="col s12">
				<h4>Fecha: <b><?php echo $fecha; ?> </b></h4>
			</div>
			<div class="col s12">
				<h4>Email: <b><?php echo $email; ?> </b></h4>
			</div>
			<div class="col s12">
				<h4>Telefono: <b><?php echo $telefono; ?> </b></h4>
			</div>		
		</div>
		<div class="row">
			<div class="col s12">
				<article>
					<p><h4>
						<?php echo $texto;?>
					</h4></p>
				</article>
			</div>
		</div>
	</div>

</body>
</html>