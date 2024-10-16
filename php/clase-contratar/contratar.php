<?php
include("../clase-basededatos/basededatos.php");
$id=mysql_real_escape_string(utf8_decode($_POST['id']));	
$plazas=mysql_real_escape_string(utf8_decode($_POST['plazas']));	
$sql = "UPDATE `persona` SET `plaza`=\"$plazas\" WHERE `id`=\"$id\"";
$query = mysql_query($sql,$conexion)or die (json_encode("Su numero de Dui o Pasaporte ya existe en el sistema")); 
$sql = "UPDATE `listaseleccionada` SET `ganador`=\"Ganador\" WHERE `idpersona`=\"$id\"";
$query = mysql_query($sql,$conexion)or die (json_encode("Su numero de Dui o Pasaporte ya existe en el sistema")); 
mysql_close();
 
?>