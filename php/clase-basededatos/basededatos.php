<?php
$conexion=@mysql_connect("localhost","root","");
$basededatos=@mysql_select_db("siasep") or die(json_encode("Error al establecer conexion con la base de datos  <br>Verifique su servidor"));
?>