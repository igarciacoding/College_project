<?php
include("../clase-basededatos/basededatos.php");
$id="";
if(empty($_POST['CampoDui'])==true){
	$id=mysql_real_escape_string($_POST['CampoPasaporte']);
	}else{
	$id=mysql_real_escape_string($_POST['CampoDui']);	
	}
$telefono=mysql_real_escape_string($_POST['CampoTelefono']);
$sql =("INSERT INTO `telefono`(`id`, `telefono`) VALUES (\"$id\",\"$telefono\")"); 
$query = mysql_query($sql,$conexion)or die (json_encode("No se puede agregar numeros de telefonos repetidos"));
mysql_close();
 
?>