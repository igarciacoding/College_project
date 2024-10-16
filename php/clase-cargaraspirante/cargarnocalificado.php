<?php
include("../clase-basededatos/basededatos.php");
$sql = "SELECT * FROM `persona` where nota='0' ORDER BY nombre ASC";
$ejecutarconsulta=@mysql_query($sql,$conexion);
$datos = array();
    while($row = mysql_fetch_array($ejecutarconsulta)){
        $datos[] = array(
            'nombre' => utf8_encode($row['nombre']),
			'apellido' => utf8_encode($row['apellido']),
			'id' => $row['id'],
			'nota' => $row['nota']
        );
    }
echo json_encode($datos);
?>