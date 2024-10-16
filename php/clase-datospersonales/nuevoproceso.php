<?php
include("../clase-basededatos/basededatos.php");
$id="";
if(empty($_POST['CampoDui'])==true){
	$id=mysql_real_escape_string(ucwords(strtolower(utf8_decode($_POST['CampoPasaporte']))));
	}else{
	$id=mysql_real_escape_string($_POST['CampoDui']);	
	}
$idantiguo=$_POST['idantiguo'];		
$nombre=        mysql_real_escape_string(ucwords(strtolower(utf8_decode($_POST['CampoNombre']))));
$apellido=      mysql_real_escape_string(ucwords(strtolower(utf8_decode($_POST['CampoApellido']))));
$dui=           mysql_real_escape_string($_POST['CampoDui']);
$nit=           mysql_real_escape_string($_POST['CampoNit']);
$afp=           mysql_real_escape_string($_POST['CampoAfp']);
$pasaporte=     mysql_real_escape_string(ucwords(strtolower(utf8_decode($_POST['CampoPasaporte']))));
$direccion=     mysql_real_escape_string(ucwords(strtolower(utf8_decode($_POST['CampoDireccion']))));
$isss=          mysql_real_escape_string($_POST['CampoIsss']);
$sexo=          mysql_real_escape_string(utf8_decode($_POST['CampoSexo']));
$departamento=  mysql_real_escape_string(utf8_decode($_POST['CampoDepartamento']));
$fecha=         mysql_real_escape_string($_POST['CampoFecha']);
$estadofamiliar=mysql_real_escape_string(utf8_decode($_POST['CampoEstadoFamiliar']));
$añoingreso=date("Y");
$sql = "UPDATE `persona` SET `id`=\"$id\",`nombre`=\"$nombre\",`apellido`=\"$apellido\",`dui`=\"$dui\",`nit`=\"$nit\",`afp`=\"$afp\",`pasaporte`=\"$pasaporte\",`direccion`=\"$direccion\",`isss`=\"$isss\",`sexo`=\"$sexo\",`departamento`=\"$departamento\",`fecha`=\"$fecha\",`estadofamiliar`=\"$estadofamiliar\",`nota`= 0,`fechaingreso`=$añoingreso WHERE `id`=\"$idantiguo\"";
$query = mysql_query($sql,$conexion)or die (json_encode("Su numero de Dui o Pasaporte ya existe en el sistema"));

$sql = "DELETE FROM `calificacioncurriculum` WHERE `id`=\"$idantiguo\"";
$query = mysql_query($sql,$conexion)or die (json_encode("No se pudo entrar al nuevo proceso"));
mysql_close();
 
?>