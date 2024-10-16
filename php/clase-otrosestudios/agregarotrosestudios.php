<?php
include("../clase-basededatos/basededatos.php");
$id="";
if(empty($_POST['CampoDui'])==true){
	$id=mysql_real_escape_string($_POST['CampoPasaporte']);
	}else{
	$id=mysql_real_escape_string($_POST['CampoDui']);	
	}
$institucion=mysql_real_escape_string(ucwords(strtolower(utf8_decode($_POST['CampoOtros']))));
$tipo=mysql_real_escape_string(ucwords(strtolower(utf8_decode($_POST['CampoOtrosTipo']))));
$fechainicial=mysql_real_escape_string($_POST['CampoIO']);
$fechafinal=mysql_real_escape_string($_POST['CampoFO']);

$sql = "INSERT INTO `otrosestudios`(`id`, `institucion`, `tipoestudio`,`periodoinicio`, `periodofinal`) VALUES (\"$id\",\"$institucion\",\"$tipo\",\"$fechainicial\",\"$fechafinal\")";
$query = mysql_query($sql,$conexion);
if(mysql_errno()==1054){
	echo json_encode("Error en la base de datos. La columna ".mysql_error()." No existe");
	}
if(mysql_errno()==1062){
	echo json_encode("No se puede ingresar datos repetidos");
	}	
mysql_close();
 
?>