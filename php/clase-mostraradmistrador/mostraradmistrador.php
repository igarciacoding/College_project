<?php
include("../clase-basededatos/basededatos.php");

$sql = "SELECT * FROM `usuarios` WHERE tipo = \"Administrador\"";
$query = mysql_query($sql,$conexion)or die (json_encode("Error al calificar. Ingrese solo valores numericos"));
 $datos = array();
    while($row = mysql_fetch_array($query)){
        $datos[] = array(
            'nombre' => $row['nombre'],
			'apellido' => $row['apellido'],
			'nick' => $row['nick'],
			'password' => $row['password'],
			'sexo' => $row['sexo'],
			'dui' => $row['dui'],
			'tipo' => $row['tipo']
        );
    }
echo json_encode($datos);
mysql_close();
?>