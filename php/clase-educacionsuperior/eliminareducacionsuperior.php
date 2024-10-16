<?php
include("../clase-basededatos/basededatos.php");
$id="";
if(empty($_POST['CampoDui'])==true){
	$id=mysql_real_escape_string(ucwords(strtolower(utf8_decode($_POST['CampoPasaporte']))));
	}else{
	$id=mysql_real_escape_string($_POST['CampoDui']);	
	}
$universidadseleccionado=mysql_real_escape_string(ucwords(strtolower(utf8_decode($_POST['ListaUniversidad']))));
$sql = "DELETE FROM `educacionsuperior` WHERE id=\"$id\" and concat(`universidad`,' ',`carrera`,' ', `periodoinicio`,' ', `periodofinal`)=\"$universidadseleccionado\"";
$query = mysql_query($sql,$conexion)or die (json_encode("No se puede eliminar el dato seleccionado"));
mysql_close();
 
?>