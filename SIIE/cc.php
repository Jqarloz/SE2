<?php

$enlace = mysql_connect('172.10.42.224:3306', 'servicios',  'expres0xp');
if (!$enlace) {
    die('' . mysql_error());
}
// Hacer que foo sea la base de datos actual
$bd_seleccionada = mysql_select_db('SIIUPT', $enlace);
if (!$bd_seleccionada) {
    die ('No se puede usar foo : ' . mysql_error());
}
?>