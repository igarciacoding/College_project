<?php
include("../php/clase-basededatos/basededatos.php");
$sql = "SELECT * FROM plazas";
$ListaPlazas='<option value="">Seleccione la plaza</option>';
$ejecutarconsulta=@mysql_query($sql,$conexion);
while($datospersonales=@mysql_fetch_array($ejecutarconsulta)){
$plaza=utf8_encode($datospersonales["plazas"]);
$ListaPlazas=$ListaPlazas."<option value='$plaza'>".$plaza."</option>";
}
mysql_close();



?>