<?php
include("../clase-basededatos/basededatos.php");
$sql = "SELECT * FROM `usuarios` where tipo='Usuario/a' or tipo='Secretaria'";
$ejecutarconsulta=@mysql_query($sql,$conexion);
$datos = array();
    while($row = mysql_fetch_array($ejecutarconsulta)){
        $datos[] = array(
            'nombre' => $row['nombre'],
			'apellido' => $row['apellido'],
			'tipo' => $row['tipo'],
			'dui' => $row['dui']
        );
    }
echo json_encode($datos);
?>