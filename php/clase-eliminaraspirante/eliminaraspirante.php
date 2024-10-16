<?php
include("../clase-basededatos/basededatos.php");
$idpersona=$_POST['listausuarios'];
$id=$idpersona[0];
$sql = "DELETE FROM `persona` WHERE `id`='$id'";
$query = mysql_query($sql,$conexion)or die (json_encode("No se puede eliminar los datos"));
mysql_close();
?>