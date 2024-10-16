<?php
include("../clase-basededatos/basededatos.php");
$id=mysql_real_escape_string($_POST['id']);	
$sql = "SELECT * FROM `persona` WHERE `id`=\"$id\"";
$query = mysql_query($sql,$conexion)or die (json_encode("Su numero de Dui o Pasaporte ya existe en el sistema"));
$datos = array();
    while($row = mysql_fetch_array($query))
    {
        $datos[] = array(
            'nombre' => $row['nombre'],
			'apellido' => $row['apellido'],
			'id' => $row['id'],
			'plaza' => utf8_encode($row['plaza'])
        );
    }
echo json_encode($datos);
mysql_close();
 
?>