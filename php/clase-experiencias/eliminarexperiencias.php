<?php
include("../clase-basededatos/basededatos.php");
$id="";
if(empty($_POST['CampoDui'])==true){
	$id=mysql_real_escape_string(ucwords(strtolower(utf8_decode($_POST['CampoPasaporte']))));
	}else{
	$id=mysql_real_escape_string($_POST['CampoDui']);	
	}
$empresaseleccionado=mysql_real_escape_string(ucwords(strtolower(utf8_decode($_POST['ListaEsperiencias']))));
$sql = "DELETE FROM `experiencias` WHERE id=\"$id\" and concat(`empresa`,' ',`puesto`,' ', `periodoinicio`,' ', `periodofinal`)=\"$empresaseleccionado\"";
$query = mysql_query($sql,$conexion)or die (json_encode("No se puede eliminar el dato seleccionado"));
mysql_close();
 
?>