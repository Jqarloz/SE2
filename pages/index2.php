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
    <section class="ContentPage full-width">


	<div class="ContentPage-Nav full-width">
            <ul class="">
                <li class="btn-MobileMenu ShowHideMenu"><a href="#" class="tooltipped waves-effect waves-light" data-position="bottom" data-delay="50" data-tooltip="Menu"><i class="zmdi zmdi-more-vert"></i></a></li>
                <?php if (isset($_SESSION['id_usuario'])){ ?><!-- start if -->
                	<?php  
                		@$tabla = $_SESSION['tabla'];
                		@$id = $_SESSION['id_usuario'];
            			$sql = "SELECT name, image from users where id ='$id';";
        				$result = $conexion->query($sql);
        				$row = $result->fetch_assoc();
                	?>
                	<li><figure><a href="perfil.php"><img class="circle" src="<?php echo "".$row['image']; ?>" alt="UserImage"></a></figure></li>
            		<li><?php echo "".utf8_decode($row['name']); ?></li>
            		<li><a href="logout.php" class="tooltipped waves-effect waves-light btn-flat" data-position="bottom" data-delay="50" data-tooltip="Logout"><i class="zmdi zmdi-power"></i></a></li>
            	<?php }else{ ?><!-- end if -->
            		<li><figure><img src="assets/img/user.png" alt="UserImage"></figure></li>
            		<li>Invitado</li>
            		<li><a href="login.php" class="tooltipped waves-effect waves-light btn-flat" data-position="bottom" data-delay="50" data-tooltip="Login"><i class="zmdi zmdi-power"></i></a></li>
            	<?php } ?><!-- end else -->
            </ul>
        </div>
	
	<!-- SLIDER -->
		
		<div class="slider">
			<ul class="slides">
			  <li>
				<img src="assets/img/slider1.jpg"> <!-- random image -->
				<div class="caption center-align">
				  <h3>“La cocina es alquimia de amor”</h3>
				  <h5 class="light grey-text text-lighten-3">Guy de Maupassant.</h5>
				</div>
			  </li>
			  <li>
				<img src="assets/img/slider2.jpg"> <!-- random image -->
				<div class="caption left-align">
				  <h3>“La calidad de tu servicio, depende de la calidad de tu personal”</h3>
				  <h5 class="light grey-text text-lighten-3">....</h5>
				</div>
			  </li>
			  <li>
				<img src="assets/img/slider3.jpg"> <!-- random image -->
				<div class="caption right-align">
				  <h3>“La historia de la gastronomía es la historia del mundo”</h3>
				  <h5 class="light grey-text text-lighten-3">....</h5>
				</div>
			  </li>
			  <li>
				<img src="assets/img/slider4.jpg"> <!-- random image -->
				<div class="caption center-align">
				  <h3>“El descubrimiento de un nuevo plato es de más provecho para la humanidad que el descubrimiento de una estrella” </h3>
				  <h5 class="light grey-text text-lighten-3">Brillant- Savarin.</h5>
				</div>
			  </li>
			  <li>
				<img src="assets/img/slider5.jpg"> <!-- random image -->
				<div class="caption center-align">
				  <h3>"La buena comida se anuncia a la nariz desde la cocina"</h3>
				  <h5 class="light grey-text text-lighten-3">....</h5>
				</div>
			  </li>
			  <li>
				<img src="assets/img/slider6.jpg"> <!-- random image -->
				<div class="caption center-align">
				  <h3>"Una receta no tiene alma.Es el cocinero quien debe darle alma a la receta"</h3>
				  <h5 class="light grey-text text-lighten-3">Thomas keller.</h5>
				</div>
			  </li>
			  <li>
				<img src="assets/img/slider7.jpg"> <!-- random image -->
				<div class="caption center-align">
				  <h3>"El mejor banquete del mundo no merece ser degustado a menos que se tenga alguien para compartirlo"</h3>
				  <h5 class="light grey-text text-lighten-3">Groucho Marx.</h5>
				</div>
			  </li>
			  <li>
				<img src="assets/img/slider8.jpg"> <!-- random image -->
				<div class="caption center-align">
				  <h3> “Bien hecho es mejor que bien dicho” </h3>
				  <h5 class="light grey-text text-lighten-3">Benjamin Franklin.</h5>
				</div>
			  </li>
			</ul>
		</div>
		
	<!-- end SLIDER -->
	<br><br>
	<div class="divider"></div>
	<br>
	<!-- MODALS -->
	<div class="section">
	<center>
	<div class="container">
		<div class="row">
		<!-- Bienvenida -->
			<div class="col s12">
				<a class="waves-effect waves-light btn modal-trigger" href="#modal1">Bienvenida</a>
			</div>
		<!-- Mision -->
			<div class="col s6">
				<a class="waves-effect waves-light btn modal-trigger" href="#modal2">Misión</a>
			</div>
		<!-- Vision -->
			<div class="col s6">
				<a class="waves-effect waves-light btn modal-trigger" href="#modal3">Visión</a>
			</div>
		</div>
	</div>
	</center>
	</div>
	<!-- END MODALS -->

	<!-- Carrusel -->
	<div class="divider"></div>
	<div class="carousel">
    <a class="carousel-item" href="#1"><img src="imagenes/promo1.jpg" height="50%" width="50%"></a>
    <a class="carousel-item" href="#2"><img src="imagenes/promo2.jpg" height="50%" width="50%"></a>
    <a class="carousel-item" href="#3"><img src="imagenes/promo3.jpg" height="50%" width="50%"></a>
    <a class="carousel-item" href="#4"><img src="imagenes/promo4.jpg" height="50%" width="50%"></a>
    <a class="carousel-item" href="#5"><img src="imagenes/promo5.jpg" height="50%" width="50%"></a>
    <a class="carousel-item" href="#6"><img src="imagenes/promo6.jpg" height="50%" width="50%"></a>
    <a class="carousel-item" href="#7"><img src="imagenes/promo7.jpg" height="50%" width="50%"></a>
    <a class="carousel-item" href="#8"><img src="imagenes/promo8.jpg" height="50%" width="50%"></a>
    <a class="carousel-item" href="#9"><img src="imagenes/promo9.jpg" height="50%" width="50%"></a>
    <a class="carousel-item" href="#10"><img src="imagenes/promo10.jpg" height="50%" width="50%"></a>
    <a class="carousel-item" href="#11"><img src="imagenes/promo11.jpg" height="50%" width="50%"></a>
    <a class="carousel-item" href="#12"><img src="imagenes/promo12.jpg" height="50%" width="50%"></a>
    <a class="carousel-item" href="#12"><img src="imagenes/promo13.jpg" height="50%" width="50%"></a>
    </div>
  	<!-- END Carrusel -->
	<br>
	<div class="divider"></div>
	<br>
	<!-- ESTRUCTURA MODAL -->
	<!-- Bienvenida -->
	<div id="modal1" class="modal">
		<div class="modal-content">
			<h4> Bienvenida </h4>
			<p> Esperamos que disfruten de la comida de este relajado y amigable restaurante, nuestros platos están preparados y cocinados al momento. Utilizando siempre cuando es posible, productos de la región.
			<br><br>
			Se puede elegir de nuestro extenso menú a la carta o de los “especiales”.
			<br><br>
			Es un espacio para reunir a personas que buscan un encuentro con la gastronomía, la música, el arte, la historia y aquellos elementos que derivan de la expresión espontanea de la vida; logrando que el espacio y el ambiente lleguen al interior de cada visitantes y contribuyan  a vivir experiencias, intercambios y conversaciones que enriquezcan la existencia <br>
 			</p>
		</div>
		<div class="modal-footer">
			<a href="" class="modal-action modal-close waves-effect waves-green btn-flat">Hecho</a>
		</div>
	</div>
	<!-- Mission -->
	<div id="modal2" class="modal">
		<div class="modal-content">
			<h4> Misión </h4>
			<p> Superar las expectativas de nuestros clientes ofreciendo un concepto único e incomparable donde la gastronomía, la historia, el arte y la música conviva en armonía.
 			</p>
		</div>
		<div class="modal-footer">
			<a href="" class="modal-action modal-close waves-effect waves-green btn-flat">Hecho</a>
		</div>
	</div>
	<!-- Vision -->
	<div id="modal3" class="modal">
		<div class="modal-content">
			<h4> Visión </h4>
			<p>Ser la mejor empresa gastronómica y cultural de la ciudad Tlaxcala referencia Nacional e Internacional para los visitantes a la ciudad.
			<br><br> 
			Destacarnos por una oferta que aporte autenticidad, innovación y que cuide cada detalle.
 			</p>
		</div>
		<div class="modal-footer">
			<a href="" class="modal-action modal-close waves-effect waves-green btn-flat">Hecho</a>
		</div>
	</div>
	<!-- END ESTRUCTURA MODAL -->
	</div>

	<!-- Descripcion de la empresa -->
	<center>
	<div class="container">
	<div class="card-panel #9e9e9e grey">
	<div class="row">
	<i class="zmdi zmdi-info zmdi-hc-3x mdc-text-amber"></i>
            <h3><p>El Recuerdo | Restaurante</p></h3>
            <p>
            	El restaurante El Recuerdo fue fundado en el año de 1969, ubicado en Puebla, Puebla. Sus fundadores fueron la señora Oliva Garizurieta y el señor Jesús Briz, esposos y padres de siete hijos, quienes desde un inicio se sumaron al esfuerzo de construcción de un patrimonio para la familia. Los objetivos generales fueron en realidad bastante modestos; se trataba en principio de afrontar el sostenimiento de la familia. No obstante, dentro de este utilitarismo necesario, en el camino surgieron principios que determinaron el rumbo: era indispensable hacer las cosas bien y para ello había que hacer oficio. El quehacer cotidiano se transformó entonces en permanente reto y reflexión. <br><br>

				En el año de 1984 abrió sus puertas El Recuerdo de la calle de Palma, en un edificio porfiriano de estilo francés, que en el siglo XX se convirtió en las oficinas de la Compañía Contratista de Servicios Eléctricos “Amacuzac”. Esta última función había implicado una importante transformación en el interior del edificio, por lo que su restauración y recuperación requirió de un trabajo muy minucioso.

            </p>
	</div>
	</div>
	</div>
	</center>
	<!-- end descripcion -->

	<div class="container">
	<div class="card-panel white">
	<div class="row">

	  			<!--img class="responsive-img" src="assets/img/organigrama.png"-->

	</div>
	</div>
	</div>
	</center>

	</section>

	<script>
		$(document).ready(function(){
		$(".button-collapse").sideNav();
		$('.modal-trigger').leanModal();
		$('.carousel').carousel();
		$('.collapsible').collapsible({
			  accordion : false // A setting that changes the collapsible behavior to expandable instead of the default accordion style
			});
		$('.slider').slider({full_width: true});
			})
	  </script>
</body>
</html>