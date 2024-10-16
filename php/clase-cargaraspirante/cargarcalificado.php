<?php
include("../clase-basededatos/basededatos.php");
$sql = "SELECT * FROM `persona` where nota>='0.01' ORDER BY nombre ASC";
$ejecutarconsulta=@mysql_query($sql,$conexion);
$datos = array();
    while($row = mysql_fetch_array($ejecutarconsulta)){
        $datos[] = array(
            'nombre' => $row['nombre'],
			'apellido' => $row['apellido'],
			'id' => $row['id'],
			'nota' => $row['nota']
        );
    }
echo json_encode($datos);
?>