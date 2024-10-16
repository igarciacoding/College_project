<?php
include("../php/clase-basededatos/basededatos.php");
$sql = "SELECT * FROM `procesos` ORDER BY ordenprocesos ASC ";
$Listafechas="<option value=''>Seleccione la fecha</option>";
$ejecutarconsulta=@mysql_query($sql,$conexion);
while($datospersonales=@mysql_fetch_array($ejecutarconsulta)){
$fecha=utf8_encode($datospersonales["fechainicial"]);
$Listafechas=$Listafechas."<option value='$fecha'>".$fecha."</option>";
}
mysql_close();
?>
