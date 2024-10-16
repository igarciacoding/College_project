<?php
include("../clase-basededatos/basededatos.php");
$id="";
if(empty($_POST['CampoDui'])==true){
	$id=mysql_real_escape_string($_POST['CampoPasaporte']);
	}else{
	$id=mysql_real_escape_string($_POST['CampoDui']);	
	}
$nombre=mysql_real_escape_string(ucwords(strtolower(utf8_decode($_POST['CampoNombreRP']))));
$apellido=mysql_real_escape_string(ucwords(strtolower(utf8_decode($_POST['CampoApellidoRP']))));
$dui=mysql_real_escape_string($_POST['CampoDuiRP']);
$telefono=mysql_real_escape_string($_POST['CampoTelefonoRP']);
$ocupacion=mysql_real_escape_string(ucwords(strtolower(utf8_decode($_POST['CampoOcupacionRP']))));
$sql = "INSERT INTO `referencias`(`id`, `nombres`, `apellidos`, `dui`, `telefono`, `ocupacion`, `tipo`) VALUES (\"$id\",\"$nombre\",\"$apellido\",\"$dui\",\"$telefono\",\"$ocupacion\",\"Personal\")";
$query = mysql_query($sql,$conexion);
if(mysql_errno()==1054){
	echo json_encode("Error en la base de datos. La columna ".mysql_error()." No existe");
	}
if(mysql_errno()==1062){
	echo json_encode("No se puede ingresar datos repetidos");
	}	
mysql_close();
 
?>