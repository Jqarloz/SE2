<!DOCTYPE html>
<html>
<head>
	<title>Servicios Escolares</title>
	<meta charset="utf-8">
	<!--Import Google Icon Font-->
      <link href="http://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
      <!--Import materialize.css-->
      <link type="text/css" rel="stylesheet" href="css/materialize.min.css"  media="screen,projection"/>

    <link rel="icon" type="image/png" href="img/favicon.ico">
</head>
<body>
	<!-- jQuery -->
    <script type="text/javascript" src="assets/js/jquery.js"></script>
    <!-- Bootstrap Core JavaScript -->
    <script type="text/javascript" src="assets/js/bootstrap.js"></script>
    <!-- Material Design Bootstrap -->
    <script type="text/javascript" src="assets/js/mdb.js"></script>
    <!-- Analytics -->
    <script type="text/javascript" src="assets/js/analytics.js"></script>
    <!-- barra de navegación-->
    <script type="text/javascript" src="assets/js/navbar.js"></script>
    <!--para el carrusel -->
    <script type="text/javascript" src="assets/js/modernizr.custom.79639.js"></script>
    <script type="text/javascript" src="assets/js/jquery.ba-cond.min.js"></script>
    <script type="text/javascript" src="assets/js/jquery.slitslider.js"></script>
    <script type="text/javascript" src="assets/js/slider.js"></script>
    <script type="text/javascript" src="assets/js/anima-links.js"></script>
    <script type="text/javascript" src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
      <script type="text/javascript" src="js/materialize.min.js"></script>
    <!-- /Sección: Scripts -->
    <script>
    	$(document).ready(function() {
            $('.modal-trigger').leanModal();
		    $('select').material_select();
            $('.datepicker').pickadate({
                selectMonths: true, // Creates a dropdown to control month
                selectYears: 100, // Creates a dropdown of 15 years to control year
                format: 'yyyy-mm-dd'    
            });

		});
    </script>

</body>
</html>