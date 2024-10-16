<?php
include("../clase-basededatos/basededatos.php");
$idpersona=$_POST['listausuarios'];
$id=$idpersona[0];
$estudios=$_POST['estudios'];
$experiencia=$_POST['experiencias'];
$referencias=$_POST['referencias'];
$personalidad=$_POST['personalidad'];
$inteligencia=$_POST['inteligencia'];
$condicion=$_POST['CampoCondicion'];
$nota=$_POST['nota'];
$escrita=$_POST['escrita'];
$sql = "UPDATE `calificacioncurriculum` SET `estudios`=$estudios,`experiencia`=$experiencia,`referencia`=$referencias,`personalidad`=$personalidad,`inteligencia`=$inteligencia,`condicion`=\"$condicion\",`nota`=$nota,`escrita`=$escrita WHERE `id`=\"$id\"";
$query = mysql_query($sql,$conexion)or die (json_encode("Error al calificar. Ingrese solo valores numericos"));
$notaglobal=$estudios*0.10+$experiencia*0.15+$referencias*0.05+$personalidad*0.10+$inteligencia*0.10+$nota*0.10+$escrita*0.40;
$sql = "UPDATE `persona` SET `nota`=\"$notaglobal\" WHERE `id`=\"$id\"";
$query = mysql_query($sql,$conexion)or die (json_encode("No se pudo actualizar la nota del aspirante"));
mysql_close();
?>