<?php
include("../clase-basededatos/basededatos.php");
$dui=mysql_real_escape_string(ucwords(strtolower(utf8_decode($_POST['listausuarios']))));
$sql = "DELETE FROM `usuarios` WHERE `dui`='$dui'";
$query = mysql_query($sql,$conexion)or die (json_encode("No se puede eliminar los datos"));
mysql_close();
?>