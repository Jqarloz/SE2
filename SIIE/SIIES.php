<!DOCTYPE HTML>
<html>
<head>
    <meta charset="utf-8">
    <title>Sistema de Información Integral Estadístico</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">

    <link href="scripts/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="scripts/bootstrap/css/bootstrap-responsive.min.css" rel="stylesheet">

    <!-- Le HTML5 shim, for IE6-8 support of HTML5 elements -->
    <!--[if lt IE 9]>
      <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
    <![endif]-->

    <!-- Icons -->
    <link href="scripts/icons/general/stylesheets/general_foundicons.css" media="screen" rel="stylesheet" type="text/css" />  
    <link href="scripts/icons/social/stylesheets/social_foundicons.css" media="screen" rel="stylesheet" type="text/css" />
    <!--[if lt IE 8]>
        <link href="scripts/icons/general/stylesheets/general_foundicons_ie7.css" media="screen" rel="stylesheet" type="text/css" />
        <link href="scripts/icons/social/stylesheets/social_foundicons_ie7.css" media="screen" rel="stylesheet" type="text/css" />
    <![endif]-->
    <link rel="stylesheet" href="scripts/fontawesome/css/font-awesome.min.css">
    <!--[if IE 7]>
        <link rel="stylesheet" href="scripts/fontawesome/css/font-awesome-ie7.min.css">
    <![endif]-->





    <link href="styles/custom.css" rel="stylesheet" type="text/css" />
</head>
<body id="pageBody">

<div id="decorative2">
    <div class="container">

        <div class="divPanel topArea notop nobottom">
            <div class="row-fluid">
                <div class="span12">

                    <div id="divLogo" class="pull-left">
                        <img src="images/tlaxc.PNG" alt="" />
                        <a href="index.html" id="divTagLine"></a>
                    </div>

                    <div id="divMenuRight" class="pull-right">
                    <div class="navbar">
                        <button type="button" class="btn btn-navbar-highlight btn-large btn-primary" data-toggle="collapse" data-target=".nav-collapse">
                            Menu <span class="icon-chevron-down icon-white"></span>
                        </button>
                        <div class="nav-collapse collapse">
                            <ul class="nav nav-pills ddmenu">
                                <li class="dropdown active"><a href="index.html">Inicio</a></li>
                                <li class="dropdown active"><a href="SIIES.php">Reportes</a></li>
                                <img src="images/upt.PNG" alt="" />
                        </div>
                    </div>
                    </div>

                </div>
            </div>
        </div>

    </div>
</div>

<div id="decorative1" style="position:relative">
    <div class="container">

        <div class="divPanel headerArea">
            <div class="row-fluid">
                <div class="span12">

                        <div id="headerSeparator"></div>

                        <div id="divHeaderText" class="page-content">
                            <div id="divHeaderLine1">SIIE</div><br />
                            <div id="divHeaderLine2">Sistema de Información Integral Estadístico</div><br />
                           
                        </div>

                        <div id="headerSeparator2"></div>

                </div>
            </div>

        </div>

    </div>
</div>

<div id="contentOuterSeparator"></div>

<div class="container">

    <div class="divPanel page-content">

        <div class="breadcrumbs">
                <a href="index.html">Inicio</a> &nbsp;/&nbsp; <span>Reportes</span>
            </div> 

        <div class="row-fluid">
                <div class="span8">

                    <h1>Reportes</h1>

            
            <br />
            <ul class="nav nav-tabs">
                <li class="active"><a href="#home" data-toggle="tab">Indice de Reprobación</a></li>
                <li><a href="#profile" data-toggle="tab">Zona de Influencia por Municipio</a></li>
                <li><a href="#settings" data-toggle="tab">Baja Carrera</a></li>
            </ul>
            <div class="tab-content">
                <div class="tab-pane fade in active" id="home">
                      <h3>Imprimir reporte en formato</h3>
      <p>
      <a href="INDICE.xlsx">Descargar en Formato Excel <img width='76px'src="excel.png" alt="..." class="img-thumbnail img-responsive"></a> 
<?php
include("cc.php");
$Consultar=mysql_query("select resultado.idgrupo as IDGRUPO,concat(persona.nombre,persona.apellidopat,persona.apellidomat)as NOMBRE,materia.nombre as MATERIA,avg(resultado.calificacion) as PROM,count(resultado.calificacion) as ALUMNO, sum(if(resultado.calificacion<70,1,0)) as REPROBADOS,curso.nombre as CARRERA from resultado 

inner join grupo on grupo.idgrupo=resultado.idgrupo

inner join persona on persona.idpersonas=resultado.idprofesor

inner join materia on materia.idmateria=resultado.idmateria

inner join plan_estudios on plan_estudios.idplan_estudios=grupo.idplan_estudios

inner join curso on curso.idcurso=plan_estudios.idcurso

where grupo.idperiodo=161 group by resultado.idgrupo");
if (!$Consultar) {
    echo 'No se pudo ejecutar la consulta: ' . mysql_error();
    exit;
}
echo '<table class="table table-striped table-bordered table-hover" id="dataTables-example">';
echo '<tr><th>ID GRUPO</th>';
echo '<th>NOMBRE DEL MAESTRO</th>';
echo '<th>MATERIA</th>';
echo '<th>ALUMNO</th>';
echo '<th>PROMEDIO</th>';
echo '<th>REPROBADOS</th>';
echo '<th>CARRERA</th>';

while ($Guardar=mysql_fetch_array($Consultar))
{
  echo '<tr><td>';
  echo $Guardar['IDGRUPO'];
  echo '</td><td>';
  echo $Guardar['NOMBRE'];
  echo '</td><td>';
  echo $Guardar['MATERIA'];
  echo '</td><td>';
  echo $Guardar['ALUMNO'];
  echo '</td><td>';
  echo $Guardar['PROM'];
  echo '</td><td>';
  echo $Guardar['REPROBADOS'];
  echo '</td><td>';
  echo $Guardar['CARRERA'];
  echo '</td></tr>';
}
echo '</table>';
?>
                </div>
                <div class="tab-pane fade" id="profile">
                    <h3>Imprimir reporte en formato</h3>
      <p>
      <a href="ZONA DE INFLUENCIA POR MUNICIPIO ENE ABR 2017.xlsx">Descargar en Formato Excel <img width='76px'src="excel.png" alt="..." class="img-thumbnail img-responsive"></a> 

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
echo '<table class="table table-striped table-bordered table-hover" id="dataTables-example">';
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
                </div>
                <div class="tab-pane fade" id="settings">
                <h3>Imprimir reporte en formato</h3>
      <p>
      <a href="BAJAS CARRERAS okKK (1).xlsx">Descargar en Formato Excel <img width='76px'src="excel.png" alt="..." class="img-thumbnail img-responsive"></a> 

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
echo '<table class="table table-striped table-bordered table-hover" id="dataTables-example">';
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
</div>
                <div class="tab-pane fade" id="settings2">
                    <p>sdfsafsafaetting industry. Lorem Ipsum has been the industry’s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.</p>
                </div>
                <div class="tab-pane fade" id="ka">
                    <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry’s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.</p>
                </div>
            </div>
            <br />

                <br />

      
                </div>
                <div class="span4">


                    <h2>SIIE</h2>

                    <br />

	                    <p><img src="images/SIIE.gif" class="img-polaroid3" /> </p>
	                    <small>Sistema de Información Integral Estadístico</small>


                    <br />

                  

                  


                </div>
            </div>

        <div id="footerInnerSeparator"></div>
    </div>

</div>

<div id="footerOuterSeparator"></div>

<div id="divFooter" class="footerArea">

    <div class="container">

        <div class="divPanel">

            <div class="row-fluid">
                <div class="span3" id="footerArea1">
                    <h3>Servicios Escolares</h3>

                    <p><img src="images/SE.PNG"  alt="" /></p>
                  

                </div>

              
                <div class="span3" id="footerArea4">

                    <h3>Contacto</h3>  
                                                               
                    <ul id="contact-info">
                    <li>                                    
                        <i class="general foundicon-phone icon"></i>
                        <span class="field">Teléfono:</span>
                        <br />
                        (0046)246 456 1300                                                                     
                    </li>
                   
                    <li>
                        <i class="general foundicon-home icon" style="margin-bottom:50px"></i>
                        <span class="field">Dirección:</span>
                        <br />
                        A. Universidad Politécnica de Tlaxcala No.1<br />
                        San Pedo Xalcaltzinco Tepeyanco,Tlax.<br />
                    </li>
                    </ul>

                </div>
            </div>

            <br /><br />
            <div class="row-fluid">
                <div class="span12">
                    <p class="copyright">
                        Copyright © 2017 Universidad Politécnica de Tlaxcala.
                    </p>

                    <p class="social_bookmarks">
                        <a href="#"><i class="social foundicon-facebook"></i> Facebook</a>
			<a href=""><i class="social foundicon-twitter"></i> Twitter</a>
                    </p>
                </div>
            </div>
            <br />

        </div>

    </div>
    
</div>

<script src="scripts/jquery.min.js" type="text/javascript"></script> 
<script src="scripts/bootstrap/js/bootstrap.min.js" type="text/javascript"></script>
<script src="scripts/default.js" type="text/javascript"></script>


<script type="text/javascript">$('.ttip').tooltip();</script>



</body>
</html>