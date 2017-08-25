<?php
    include("../conexion.php");
        session_start(); 

    if (isset($_SESSION['id_usuario'])) {
        echo '<meta http-equiv="Refresh" content="0;URL=index.php">';
    }
    if (isset($_POST["loginEmpleado"])) {
        if (!empty($_POST)) {
            $usuario = mysqli_real_escape_string($conexion, $_POST['usuario']);
            $password = mysqli_real_escape_string($conexion, $_POST['password']);
            $error = '';

            $sha1_pass = sha1($password);

            $sql = "SELECT id, access from users where account='$usuario' and password='$sha1_pass'";
            $result = $conexion->query($sql);
            $rows = $result->num_rows;

            if ($rows > 0) {
                $row = $result->fetch_assoc();
                $_SESSION['id_usuario'] = $row['id'];
                $_SESSION['accType'] = $row['access'];

                echo '<script type="text/javascript">';
                echo 'alert("Bienvenido: '.$usuario.'")';
                echo "</script>";
                echo '<meta http-equiv="Refresh" content="0;URL=index.php">';
            }else{
                echo '<script type="text/javascript">';
                echo 'alert("Error: El usuario y contraseña son incorrectos o no existen. Acude a Recursos Humanos.")';
                echo "</script>";
                echo '<meta http-equiv="Refresh" content="0;URL=login.php">';
            }
        }
    }
    

?>


<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0"/>
	<title>SE UPTlax | Login</title>
	
     <!-- Normalize CSS -->
	<link rel="stylesheet" href="css/normalize.css">
    
     <!-- Materialize CSS -->
	<link rel="stylesheet" href="css/materialize.min.css">
    
     <!-- Material Design Iconic Font CSS -->
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/material-design-iconic-font/2.2.0/css/material-design-iconic-font.min.css">
    
    <!-- Malihu jQuery custom content scroller CSS -->
	<link rel="stylesheet" href="css/jquery.mCustomScrollbar.css">
    
    <!-- Sweet Alert CSS -->
    <link rel="stylesheet" href="css/sweetalert.css">
    
    <!-- MaterialDark CSS -->
	<link rel="stylesheet" href="css/style.css">
</head>
<body class="font-cover" id="login">



    <ul id="tabs-swipe-demo" class="tabs">
    <!--li class="tab col s3"><a class="active" href="#Cliente">Soy Cliente</a></li-->
    <li class="tab col s3"><a href="#Empleado">Soy Empleado</a></li>
    </ul>

  <div id="Empleado" class="col s12">
    <div class="container-login center-align">
        <div style="margin:15px 0;">
            <i class="zmdi zmdi-account-circle zmdi-hc-5x"></i>
            <p>Inicia sesión con tu cuenta</p>   
        </div>
        <form id="formEmpleado" name="formEmpleado" action="<?php $_SERVER['PHP_SELF']; ?>" method="POST">
            <div class="input-field">
                <input id="usuario" name="usuario" type="text" class="validate">
                <label for="usuario"><i class="zmdi zmdi-account"></i>&nbsp; Nombre</label>
            </div>
            <div class="input-field col s12">
                <input id="password" name="password" type="password" class="validate">
                <label for="password"><i class="zmdi zmdi-lock"></i>&nbsp; Contraseña</label>
            </div>
            <input type="submit" name="loginEmpleado" value="Iniciar Sesión " class="waves-effect waves-teal btn-flat" >
        </form>
    </div>
  </div>
    
    <!-- Sweet Alert JS -->
    <script src="js/sweetalert.min.js"></script>
    
    <!-- jQuery -->
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.4/jquery.min.js"></script>
	<script>window.jQuery || document.write('<script src="js/jquery-2.2.0.min.js"><\/script>')</script>
    
    <!-- Materialize JS -->
	<script src="js/materialize.min.js"></script>
    
    <!-- Malihu jQuery custom content scroller JS -->
	<script src="js/jquery.mCustomScrollbar.concat.min.js"></script>
    
    <!-- MaterialDark JS -->
	<script src="js/main.js"></script>
</body>
</html>