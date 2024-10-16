<?php
include("../clase-basededatos/basededatos.php");
session_id("Usuario");
session_start();
$id=mysql_real_escape_string($_POST['username']);
$id2=mysql_real_escape_string($_POST['password']);
$sql = "SELECT nick, password, dui FROM `usuarios` WHERE `nick`= BINARY \"$id\" and `nick`= BINARY \"$id2\" and `tipo`=\"Usuario/a\"";
$query = mysql_query($sql,$conexion)or die (json_encode("Su numero de Dui o Pasaporte ya existe en el sistema"));
$datospersonales=@mysql_fetch_row($query);
if(empty($datospersonales[0])==true&&empty($datospersonales[1])==true){
echo json_encode("Los datos ingresados son invalidos, intente nuevamente");
}else{
	$idsession = substr( md5(microtime()), 1, 8);
	$_SESSION["idsession"] = $idsession;
	session_regenerate_id($_SESSION["idsession"]);
}
mysql_close();
?>