<?php
include("../clase-basededatos/basededatos.php");
$id="";
if(empty($_POST['CampoDui'])==true){
	$id=mysql_real_escape_string($_POST['CampoPasaporte']);
	}else{
	$id=mysql_real_escape_string($_POST['CampoDui']);	
	}
$email=mysql_real_escape_string(utf8_decode($_POST['CampoEmail']));
$sql =("INSERT INTO `email`(`id`, `email`) VALUES (\"$id\",\"$email\")"); 
$query = mysql_query($sql,$conexion)or die (json_encode("No se puede agregar email repetidos"));
mysql_close();
 
?>