<?php
include("../clase-basededatos/basededatos.php");
$id="";
if(empty($_POST['CampoDui'])==true){
	$id=mysql_real_escape_string(ucwords(strtolower(utf8_decode($_POST['CampoPasaporte']))));
	}else{
	$id=mysql_real_escape_string($_POST['CampoDui']);	
	}
$centroescolarseleccionado=mysql_real_escape_string(ucwords(strtolower(utf8_decode($_POST['ListaCentroEscolar']))));
$sql = "DELETE FROM `educacionbasica` WHERE id=\"$id\" and concat(`centroescolar`,' ', `periodoinicio`,' ', `periodofinal`)=\"$centroescolarseleccionado\"";
$query = mysql_query($sql,$conexion)or die (json_encode("No se puede eliminar el dato seleccionado"));
mysql_close();
 
?>