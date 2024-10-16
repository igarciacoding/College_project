<?php
include("../clase-basededatos/basededatos.php");
$id="";
if(empty($_POST['CampoDui'])==true){
	$id=mysql_real_escape_string($_POST['CampoPasaporte']);
	}else{
	$id=mysql_real_escape_string($_POST['CampoDui']);	
	}
$bachillerato=mysql_real_escape_string(ucwords(strtolower(utf8_decode($_POST['CampoBachillerato']))));
$tipobachillerato=mysql_real_escape_string(ucwords(strtolower(utf8_decode($_POST['CampoTipoBachillerato']))));
$fechainicial=mysql_real_escape_string($_POST['CampoIIN']);
$fechafinal=mysql_real_escape_string($_POST['CampoFIN']);

$sql = "INSERT INTO `educacionmedia`(`id`, `bachillerato`, `tipobachillerato`,`periodoinicio`, `periodofinal`) VALUES (\"$id\",\"$bachillerato\",\"$tipobachillerato\",\"$fechainicial\",\"$fechafinal\")";
$query = mysql_query($sql,$conexion);
if(mysql_errno()==1054){
	echo json_encode("Error en la base de datos. La columna ".mysql_error()." No existe");
	}
if(mysql_errno()==1062){
	echo json_encode("No se puede ingresar bachilleratos y periodos repetidos");
	}
mysql_close();
 
?>