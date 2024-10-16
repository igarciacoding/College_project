<?php
include("../clase-basededatos/basededatos.php");
$id="";
if(empty($_POST['CampoDui'])==true){
	$id=mysql_real_escape_string($_POST['CampoPasaporte']);
	}else{
	$id=mysql_real_escape_string($_POST['CampoDui']);	
	}
$empresa=mysql_real_escape_string(ucwords(strtolower(utf8_decode($_POST['CampoExperiencias']))));
$puesto=mysql_real_escape_string(ucwords(strtolower(utf8_decode($_POST['CampoTipoExperiencias']))));
$fechainicial=mysql_real_escape_string($_POST['CampoIE']);
$fechafinal=mysql_real_escape_string($_POST['CampoFE']);

$sql = "INSERT INTO `experiencias`(`id`, `empresa`, `puesto`, `periodoinicio`, `periodofinal`) VALUES (\"$id\",\"$empresa\",\"$puesto\",\"$fechainicial\",\"$fechafinal\")";
$query = mysql_query($sql,$conexion);
if(mysql_errno()==1054){
	echo json_encode("Error en la base de datos. La columna ".mysql_error()." No existe");
	}
if(mysql_errno()==1062){
	echo json_encode("No se puede ingresar datos repetidos");
	}	
mysql_close();
 
?>