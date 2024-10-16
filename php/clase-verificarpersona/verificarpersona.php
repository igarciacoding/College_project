<?php
include("../clase-basededatos/basededatos.php");
$id=mysql_real_escape_string($_POST['username']);
$sql = "SELECT * FROM `persona` WHERE `id`=\"$id\"";
$query = mysql_query($sql,$conexion)or die (json_encode("Su numero de Dui o Pasaporte ya existe en el sistema"));
$datospersonales=@mysql_fetch_row($query);
echo json_encode($datospersonales[0]);
mysql_close();


?>