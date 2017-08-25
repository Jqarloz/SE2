<html lang="en">
<head>

  <title>SIIE</title>

<head>
<body>

    
<?php
include("cc.php");
$Consultar=mysql_query("select DISTINCT resultado.idmateria,resultado.calificacion,materiaplan.cuatrimestre,alumno.nocuenta 
as matricula  from  resultado  inner join alumno on alumno.nocuenta=resultado.nocuenta inner join materiaplan   
on materiaplan.idmateria=resultado.idmateria  where alumno.nocuenta=1331107449 and resultado.calificacion>=70 
and promediable>0 order by materiaplan.cuatrimestre");
if (!$Consultar) {
    echo 'No se pudo ejecutar la consulta: ' . mysql_error();
    exit;
}
header("Pragma: public");
header("Expires: 0");
$filename = "Reporte1.xls";
header("Content-type: application/x-msdownload");
header("Content-Disposition: attachment; filename=$filename");
header("Pragma: no-cache");
header("Cache-Control: must-revalidate, post-check=0, pre-check=0");
echo '<table class="table table-striped table-bordered table-hover" id="dataTables-example" border="1">';
echo '<th colspan="3" bgcolor="skyblue"><CENTER><strong>REPORTE DE LA TABLA USUARIOS</strong></CENTER></th>';
echo '<tr><th>idmateria</th>';
echo '<th>calificacion</th>';
echo '<th>cuatrimestre</th>';

while ($Guardar=mysql_fetch_array($Consultar))
{
  echo '<tr><td>';
  echo $Guardar['idmateria'];
  echo '</td><td>';
  echo $Guardar['calificacion'];
  echo '</td><td>';
  echo $Guardar['cuatrimestre'];
  echo '</td></tr>';
}
echo '</table>';
?>
    



</body>
</html>

