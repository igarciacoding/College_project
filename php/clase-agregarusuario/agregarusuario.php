<?php
include("../clase-basededatos/basededatos.php");
$nombre=mysql_real_escape_string(ucwords(strtolower(utf8_decode($_POST['CampoNombreA']))));
$apellido=mysql_real_escape_string(ucwords(strtolower(utf8_decode($_POST['CampoApellidoA']))));
$nick=mysql_real_escape_string($_POST['CampoNicknameA']);
$password=mysql_real_escape_string($_POST['CampoPasswordA']);
$sexo=mysql_real_escape_string(ucwords(strtolower(utf8_decode($_POST['CampoSexoA']))));
$dui=mysql_real_escape_string(ucwords(strtolower(utf8_decode($_POST['CampoDuiA']))));
$tipo=mysql_real_escape_string(ucwords(strtolower(utf8_decode($_POST['CampoTipo']))));
$sql = "INSERT INTO `usuarios`(`nombre`, `apellido`, `nick`, `password`, `sexo`, `dui`, `tipo`) VALUES (\"$nombre\",\"$apellido\",\"$nick\",\"$password\",\"$sexo\",\"$dui\",\"$tipo\")";
$query = mysql_query($sql,$conexion)or die (json_encode("No se puede agregar los datos"));
mysql_close();
 
?>