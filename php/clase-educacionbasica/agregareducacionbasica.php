<?php
include("../clase-basededatos/basededatos.php");
$id="";
if(empty($_POST['CampoDui'])==true){
	$id=mysql_real_escape_string($_POST['CampoPasaporte']);
	}else{
	$id=mysql_real_escape_string($_POST['CampoDui']);	
	}
$centroescolar=mysql_real_escape_string(ucwords(strtolower(utf8_decode($_POST['CampoCentroEscolar']))));
$fechainicial=mysql_real_escape_string($_POST['CampoICE']);
$fechafinal=mysql_real_escape_string($_POST['CampoFCE']);

$sql = "INSERT INTO `educacionbasica`(`id`, `centroescolar`, `periodoinicio`, `periodofinal`) VALUES (\"$id\",\"$centroescolar\",\"$fechainicial\",\"$fechafinal\")";
$query = mysql_query($sql,$conexion);
if(mysql_errno()==1054){
	echo json_encode("Error en la base de datos. La columna ".mysql_error()." No existe");
	}
if(mysql_errno()==1062){
	echo json_encode("No se puede ingresar centro escolares y periodos repetidos");
	}
mysql_close();
 
?>