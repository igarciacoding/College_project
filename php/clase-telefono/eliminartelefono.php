<?php
include("../clase-basededatos/basededatos.php");
$id="";
if(empty($_POST['CampoDui'])==true){
	$id=mysql_real_escape_string(ucwords(strtolower(utf8_decode($_POST['CampoPasaporte']))));
	}else{
	$id=mysql_real_escape_string($_POST['CampoDui']);	
	}
$telefono=mysql_real_escape_string($_POST['ListaTelefono']);
$sql =("DELETE FROM `telefono` WHERE `id`=\"$id\" and `telefono`=\"$telefono\""); 
$query = mysql_query($sql,$conexion)or die (json_encode("No se puede eliminar el telefono seleccionado"));
mysql_close();
 
?>