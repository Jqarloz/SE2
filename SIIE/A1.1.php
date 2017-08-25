<html lang="en">
<head>

  <title>SIIE</title>

<head>
<body>

    
<?php
include("cc.php");
$Consultar=mysql_query("select alumno.nocuenta as Matricula,concat(persona.apellidopat,' ',persona.apellidomat,' ',persona.nombre) as NombreCompleto,materia.nombre as Materia,concat(prof.apellidopat,' ',prof.apellidomat,' ',prof.nombre) as MestroN,resultado.calificacion as Calificacion  from resultado
inner join alumno on alumno.nocuenta=resultado.nocuenta
inner join persona on persona.idpersonas=alumno.idpersonas
inner join persona as prof on prof.idpersonas=resultado.idprofesor
left join materia on materia.idmateria = resultado.idmateria
left join materiaplan on materiaplan.idmateria=resultado.idmateria
where resultado.estatus='FIRMADO' and alumno.estatus='ACTIVO' and materiaplan.promediable!=0 and resultado.calificacion<70");
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
echo '<table width="100%" border="1" cellspacing="0" cellpadding="0">';
echo '<th colspan="5" bgcolor="skyblue"><CENTER><strong>REPORTE DE LA TABLA USUARIOS</strong></CENTER></th>';
echo '<tr><th>MATRICULA</th>';
echo '<th>ALUMNO</th>';
echo '<th>MATERIA</th>';
echo '<th>MAESTRO</th>';
echo '<th>CALIFICACION</th>';

while ($Guardar=mysql_fetch_array($Consultar))
{
  echo '<tr><td>';
  echo $Guardar['Matricula'];
  echo '</td><td>';
  echo $Guardar['NombreCompleto'];
  echo '</td><td>';
  echo $Guardar['Materia'];
  echo '</td><td>';
  echo $Guardar['MestroN'];
  echo '</td><td>';
  echo $Guardar['Calificacion'];
  echo '</td></tr>';
}
echo '</table>';
?>
    



</body>
</html>

