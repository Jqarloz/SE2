<!DOCTYPE html>
<html>
<head>

</head>
<body>
	<?php
		include("components.php");
		include('../conexion.php');
	?>


<section>
<div class="navbar-fixed">
<nav>
<div class="nav-wrapper blue-grey darken-3">
  <a href="#!" class="brand-logo right">Buzón de Sugerencias<img class="circle responsive-img" src="../assets/images/selo.png" width="40" height="40"></a>
  <a href="#" data-activates="mobile-demo" class="button-collapse"><i class="material-icons">menu</i></a>
  <ul class="left hide-on-med-and-down">
    <li>
      <a href="index.php">
        <i class="small material-icons left">home</i>Volver
      </a>
    </li>
  </ul>
  <ul class="side-nav" id="mobile-demo">
  <li>
    <a href="index.php">
      <i class="small material-icons left">home</i>Inicio
    </a>
  </li>
  </ul>
</div>
</nav>
</div>
</section>

	<!-- Modal Structure -->
	  <div id="modal1" class="modal">
	  	<form method="POST">
	    <div class="modal-content">
	      	<h4>Eliminar</h4>
	      	<p>¿Esta seguro de eliminar el mensaje de <?php $nombre; ?>?</p>
	    </div>
	    <div class="modal-footer">
	      <a href="#!" class="modal-action modal-close waves-effect waves-green btn-flat">Agree</a>
	    </div>
	    </form>
	  </div>

	<div class="col s12 center"><h5> Registro del buzón de sugerencias </h5></div>
	<form method="POST" >
		<div class="row">
		<div class="col s2 center offset-s4"> De (fecha): </div>
		<div class="col s2"> <input type="date" name="fechaI" value="" class="datepicker"> </div>
		<div class="col s2 center offset-s4"> Hasta (fecha): </div>
		<div class="col s2"> <input type="date" name="fechaF" value="" class="datepicker"> </div>
		</div>
		<div class="row">
			<div class="col s2 offset-s5"> <input type="submit" name="Buscar" value="Buscar" class="waves-effect waves-light btn"> </div>
		</div>
	</form>
	<?php
	@$FechaI = $_POST['fechaI'];
	@$FechaF = $_POST['fechaF'];
	?>

	<div class="container">
		<div class="row">
			<table class="striped responsive-table">
				<thead>
					<tr>
						<td>Fecha</td>
						<td>Nombre</td>
						<td>Tipo</td>
						<td>Ver</td>
						<td>Eliminar</td>
						<td></td>
					</tr>
				</thead>
				<tbody>
					<?php
					@$reg=mysqli_query($conexion,"select * from mailbox where 1 ORDER BY fecha DESC;");
					while (@$a=mysqli_fetch_array($reg)){
					    echo "<tr>";
					    echo "<td>".$a['fecha']."</td>";
					    echo "<td>".$a['nombre']."</td>";
					    echo "<td>".$a['tipo']."</td>";
					    echo "<td><a href='mensaje.php?id=".$a['id']."' class='waves-effect waves-light btn'>Ver Mensaje</a></td>";
					    echo "<td><a class='waves-effect waves-light btn red' href='#modal1'>Eliminar</a></td>";
					}
					?> 
					<?php
					@$reg=mysqli_query($conexion,"select * from mailbox where fecha>='$FechaI' and fecha<='$FechaF' ORDER BY fecha DESC;");
					while (@$a=mysqli_fetch_array($reg)){
					    echo "<tr>";
					    echo "<td>".$a['fecha']."</td>";
					    echo "<td>".$a['nombre']."</td>";
					    echo "<td>".$a['tipo']."</td>";
					    echo "<td><a href='mensaje.php?id=".$a['id']."' class='waves-effect waves-light btn'>Ver Mensaje</a></td>";
					    echo "<td><a class='waves-effect waves-light btn red' href='#modal1'>Eliminar</a></td>";
					}
					?>  
				</tbody>
			</table>
		</div>
	</div>
</body>
</html>