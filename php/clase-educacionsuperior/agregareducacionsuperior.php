<?php
include("../clase-basededatos/basededatos.php");
$id="";
if(empty($_POST['CampoDui'])==true){
	$id=mysql_real_escape_string($_POST['CampoPasaporte']);
	}else{
	$id=mysql_real_escape_string($_POST['CampoDui']);	
	}
$universidad=mysql_real_escape_string(ucwords(strtolower(utf8_decode($_POST['CampoUniversidad']))));
$carrera=mysql_real_escape_string(ucwords(strtolower(utf8_decode($_POST['CampoCarrera']))));
$fechainicial=mysql_real_escape_string($_POST['CampoIU']);
$fechafinal=mysql_real_escape_string($_POST['CampoFU']);

$sql = "INSERT INTO `educacionsuperior`(`id`, `universidad`, `carrera`,`periodoinicio`, `periodofinal`) VALUES (\"$id\",\"$universidad\",\"$carrera\",\"$fechainicial\",\"$fechafinal\")";
$query = mysql_query($sql,$conexion);
if(mysql_errno()==1054){
	echo json_encode("Error en la base de datos. La columna ".mysql_error()." No existe");
	}
if(mysql_errno()==1062){
	echo json_encode("No se puede ingresar universidades y periodos repetidos");
	}	
mysql_close();
 
?>