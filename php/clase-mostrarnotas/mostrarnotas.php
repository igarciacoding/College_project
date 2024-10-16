<?php
include("../clase-basededatos/basededatos.php");
$idpersona=$_POST['listausuarios'];
$id=$idpersona[0];
$sql = "SELECT * FROM `calificacioncurriculum` WHERE `id`=\"$id\"";
$query = mysql_query($sql,$conexion)or die (json_encode("Error al calificar. Ingrese solo valores numericos"));
 $datos = array();
    while($row = mysql_fetch_array($query)){
        $datos[] = array(
            'estudios' => $row['estudios'],
			'experiencia' => $row['experiencia'],
			'referencia' => $row['referencia'],
			'personalidad' => $row['personalidad'],
			'inteligencia' => $row['inteligencia'],
			'condicion' => $row['condicion'],
			'nota' => $row['nota'],
			'escrita' => $row['escrita']
        );
    }
echo json_encode($datos);
mysql_close();
?>