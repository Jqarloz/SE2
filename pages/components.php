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

<script>
$(document).ready(function(){
$(".button-collapse").sideNav();
$('.collapsible').collapsible({
    accordion : false // A setting that changes the collapsible behavior to expandable instead of the default accordion style
});
$('.modal-trigger').leanModal();
$('select').material_select();
$(".dropdown-button").dropdown();
$('.parallax').parallax();
$('.datepicker').pickadate({
    selectMonths: true, // Creates a dropdown to control month
    selectYears: 100, // Creates a dropdown of 15 years to control year
    format: 'yyyy-mm-dd'    
});
$('.slider').slider({full_width: true});
    })
</script>
</body>
</html>