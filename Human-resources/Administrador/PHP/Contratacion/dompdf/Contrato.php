<?php ob_start();


include "../../Conexion/conexion.php";


$sql1= "select * from contratos ";
$query = $conexion->query($sql1);

?>

<?php if($query->num_rows>0):?>

      
<?php while ($r=$query->fetch_array()):?>

<!DOCTYPE html>
<html>
<head>
	<title></title>
 <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>

</head>
<style type="text/css">
  body{
    margin: 30px;
  }
  .container{
    margin-left: 50px;
    margin-right: 50px;
    text-align: justify;
  }
  h2{
    text-align: center;
    font-family: "Helvetica Neue",Roboto,Arial,"Droid Sans",sans-serif;
  }
</style>
<body>
<h2>Contrato de trabajo indefinido</h2>
<br>
<div class="container">
<h3><b><center>DECLARAN</center></b></h3>

<p><b>Que el/la trabajador/a, esté admitido/a en el Programa de Activación para el Empleo y esté en posesión del documento acreditativo o resolución del SEPE. </b></p>
<br>
<br>
<br>
<br>


<h3><b><center>CLÁUSULAS</center></b></h3>

<b>PRIMERA:</b> El/la trabajador/a prestará sus servicios como <b><?php echo $r["profesion_trabajador"]; ?></b>, incluido en el grupo profesional de <b><?php echo $r["grupo_profesional"]; ?></b> para la realización de las funciones <b> <?php echo $r["funciones"]; ?></b> de acuerdo con el sistema de clasificación profesional vigente en la empresa. 
<p></p>

En el centro de trabajo ubicado en (calle, nº y localidad): <b><?php echo $r["direccion_centro"]; ?></b>
<p></p>
<br><br>
<b>SEGUNDA:</b> EI contrato se concierta para realizar trabajos periódicos de carácter discontinuo consistentes en <b><?php echo $r["actividad_trabajador"]; ?></b> dentro de la actividad cíclica intermitente de <b> <?php echo $r["actividad"]; ?></b> cuya duración será de <b><?php echo $r["duracion_actividad"]; ?></b>.
<p></p>

La duración estimada de la actividad será de <b><?php echo $r["duracion_estimada"]; ?></b>.Los/as trabajadores/as serán llamados en el orden y forma que se determine en el Convenio Colectivo de <b><?php echo $r["convenio"]; ?></b>. La jornada estimada dentro del periodo de actividad será de <b><?php echo $r["jornada_actividad"]; ?></b> y la distribución horaria será <b><?php echo $r["distribucion_horaria"]; ?></b>. 
<p></p>
Si el convenio colectivo de ámbito sectorial permite en los contratos fijos discontinuos utilizar la modalidad de tiempo parcial, indique si se acoge al mismo. <b><?php echo $r["tiempo_parcial"]; ?></b>.
<br><br>
  

<b>TERCERA:</b> La jornada de trabajo será: 
<p></p>

    <li><b>A tiempo completo:</b> La jornada de trabajo será de <b><?php echo $r["jornada_completa"]; ?></b>. horas semanales, prestadas de <b><?php echo $r["hora_inicio"]; ?></b> a <b><?php echo $r["hora_final"]; ?></b>, con los descansos establecidos legal o convencionalmente.</li>
<br>
<li><b>A tiempo parcial:</b> La jornada de trabajo ordinaria será de<b><?php echo $r["jornada_parcial"]; ?> </b> horas <b> <?php echo $r["tiempo"]; ?></b> siendo esta jornada inferior a la de un/a trabajador/a a tiempo completo.
</li>
<br>
La distribución del tiempo de trabajo será de <b><?php echo $r["distribucion_tiempo"]; ?></b>. 
<br>
En el caso de jornada a tiempo parcial señálese si existe o no pacto sobre la realización de horas complementarias (15): <b><?php echo $r["extras"]; ?></b>
<br><br>

<b>CUARTA:</b> La duración del presente contrato será INDEFINIDA, iniciándose la relación laboral en fecha <b><?php echo $r["fecha_inicio"]; ?></b> y se establece un período de prueba de <b><?php echo $r["periodo_prueba"]; ?></b> días.
<p></p>

<b>QUINTA:</b> El/la trabajador/a percibirá una retribución total de <b><?php echo $r["salario"]; ?></b> pesos brutos que se distribuirán en los siguientes conceptos salariales : <b><?php echo $r["concepto_salarial"]; ?></b>.
<p></p>
<br>
<br>

<b>SEXTA:</b> La duración de las vacaciones anuales será de <b><?php echo $r["duracion_vacaciones"]; ?></b> días.
<p></p>
<br>

<b>SÉPTIMA:</b> En lo no previsto en este contrato, se estará a la legislación vigente que resulte de aplicación y particularmente, el Estatuto de los Trabajadores aprobado por el Real Decreto Legislativo 2/2015, de 23 de octubre (BOE de 24 de octubre) y el Convenio Colectivo de: <b><?php echo $r["convenio_colectivo"]; ?></b>. 
                     


<div id="step-4" class="ultimo">
<b>OCTAVA:</b> El presente contrato se formaliza bajo la modalidad de contrato de relevo: <b> <?php echo $r["contrato_relevo"]; ?></b>

<p></p>

El/la trabajador/a:
Que está en desempleo e inscrito/a como demandante en Lanbide de <b><?php echo $r["desempleado"]; ?></b>.
<br>
Que tiene concertado con la empresa un contrato de duración determinada que fue comunicado con el número <b> <?php echo $r["numero_contrato"]; ?> </b> con fecha <b> <?php echo $r["fecha_contrato"]; ?></b>.
<p></p>
El/la representante de la Empresa: Que el/la trabajador/a de la Empresa D/Dña. <b><?php echo $r["nombre_trabajador"]; ?></b>nacido el <b><?php echo $r["fecha_nacimiento"]; ?></b> que presta sus servicios en el centro de trabajo ubicado en (calle, nº y localidad): <b> <?php echo $r["direccion"];?> </b> con la profesión de , incluido en el grupo/laboral/nivel profesional <b><?php echo $r["grupo_laboral"]; ?></b> de acuerdo con el sistema de clasificación profesional vigente en la empresa que reduce su jornada ordinaria de trabajo y su salario en un <b><?php echo $r["salario_jubilacion"]; ?></b> por acceder a la situación de jubilación parcial regulada en el Real Decreto-Ley 5/2013 de 15 de marzo ha suscrito con fecha <b><?php echo $r["fecha_decreto"]; ?></b> y hasta <b><?php echo $r["fecha_final_decreto"]; ?></b> el correspondiente contrato de trabajo a tiempo parcial, comunicado con el número <b> <?php echo $r["num_contrato"]; ?> </b> y con fecha <b><?php echo $r["fecha_finaldecreto"]; ?></b>
<input type="submit" value="Enviar" name="Enviar"> 
</div>
                 
</form>

</div>
                            <?php endwhile;?>
</table>
<?php else:
print "<script>alert(\"No hay resultados.\");window.location='Contratacion.php';</script>";
endif;?>
</body>
</html>


<?php
require_once("dompdf_config.inc.php");
$dompdf = new DOMPDF();
$dompdf->load_html(ob_get_clean());
$dompdf->load_html(utf8_encode($htmlbuffer)); 
$dompdf->render();
$pdf = $dompdf->output();
$filename = 'Contrato.pdf';
$dompdf->stream($filename, array("Attachment" => 0));
?>