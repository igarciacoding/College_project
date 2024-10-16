<?php
include("../clase-basededatos/basededatos.php");
$id="";
if(empty($_POST['CampoDui'])==true){
	$id=mysql_real_escape_string(ucwords(strtolower(utf8_decode($_POST['CampoPasaporte']))));
	}else{
	$id=mysql_real_escape_string($_POST['CampoDui']);	
	}
$email=mysql_real_escape_string($_POST['CampoListaEmail']);
$sql =("DELETE FROM `email` WHERE `id`=\"$id\" and`email`=\"$email\""); 
$query = mysql_query($sql,$conexion)or die (json_encode("No se puede eliminar el email seleccionado"));
mysql_close();
 
?>