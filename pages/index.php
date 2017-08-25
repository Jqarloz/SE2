<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>SE UPTlax | Admin"</title>
</head>
<body>

<!-- Que nunca Falte!!! -->
<?php 
if(!isset($_SESSION)){ 
  session_start(); 
} 
if (!isset($_SESSION['id_usuario'])) {
  echo '<script type="text/javascript">';
  echo 'alert("Lo siento esta pagina es solo para administradores de SE")';
  echo "</script>";
  echo '<meta http-equiv="Refresh" content="0;URL=../index.html">';
} 
include("../conexion.php");
include("components.php");
?>
<!-- ok -->

<!-- NAV BAR -->
<!-- Dropdown Structure -->
<section>
<ul id="dropdown1" class="dropdown-content">
  <li><a href="Recursos_humanos/index.php">Recursos Humanos</a></li>
  <li class="divider"></li>
</ul>
<ul id="dropdown2" class="dropdown-content">
  <li><a href="logout.php" class="btn red">Cerrar Sesión</a></li>
  <li class="divider"></li>
</ul>
<div class="navbar-fixed">
<nav>
<div class="nav-wrapper blue-grey darken-3">
  <a href="#!" class="brand-logo right">Administración de Servicios Escolares<img class="circle responsive-img" src="../assets/images/selo.png" width="40" height="40"></a>
  <a href="#" data-activates="mobile-demo" class="button-collapse"><i class="material-icons">menu</i></a>
  <ul class="left hide-on-med-and-down">
    <li>
      <a class="dropdown-button" href="#!" data-activates="dropdown1">
        Modulos<i class="material-icons right">arrow_drop_down</i>
      </a>
    </li>
    <li>
      <a href="../index.html">
        <i class="small material-icons left">home</i>Inicio
      </a>
    </li>
    <?php
      @$id = $_SESSION['id_usuario'];  
      $sql = "SELECT name, image from users where id ='$id';";
      $result = $conexion->query($sql);
      $row = $result->fetch_assoc();

      $idType = $_SESSION['accType'];
      $sql2 = "SELECT name from acctype where id ='$idType';";
      $NomTipo = $conexion->query($sql2);
      $row2 = $NomTipo->fetch_assoc();
    ?>
    <li>
      <img class="circle responsive-img" src="../<?php echo "".$row['image']; ?>" width="40" height="40"><?php echo "".utf8_decode($row['name']); ?>
    </li>
    <li>
      <a class="dropdown-button" href="#!" data-activates="dropdown2">
        <?php echo "".utf8_decode($row2['name']); ?>
        <i class="material-icons right">arrow_drop_down</i>
      </a>
    </li>
  </ul>
  <ul class="side-nav" id="mobile-demo">
  <li>
    <a href="../index.html">
      <i class="small material-icons left">home</i>Inicio
    </a>
  </li>
  </ul>
</div>
</nav>
</div>
</section>
<!-- END NAV BAR -->

<!-- PARALLAX -->
<main>
<div class="parallax-container">
  <div class="parallax"><img src="../img/ventanillalogos.png"></div>
</div>



<div class="section blue-grey darken-1">
  <div class="row container">
    <div class="row">
      <div class="col s4">
        <div class="card">
          <div class="card-image">
            <img src="http://materializecss.com/images/sample-1.jpg">
            <span class="card-title">Administración de Buzón</span>
          </div>
          <div class="card-content">
            <p>Busqueda de todos los mensajes almacenados en el buzón de sugerencias.</p>
          </div>
          <div class="card-action">
            <center><a href="viewmailbox.php" class="btn blue">Ir</a></center>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>




<div class="parallax-container">
  <div class="parallax"><img src="../assets/images/upt.jpg"></div>
</div>
</main>
<!-- end PARALLAX -->
</body>
</html>