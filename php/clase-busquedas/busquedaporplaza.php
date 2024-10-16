<?php
include("../clase-basededatos/basededatos.php");

$departamento=utf8_decode(mysql_real_escape_string($_POST["CampoDepartamento"]));
$especialidadoprofesion=utf8_decode(mysql_real_escape_string($_POST["especialidadoprofesion"]));
$universidadoinstitucion=utf8_decode(mysql_real_escape_string($_POST["universidadoinstitucion"]));
$sql="";
if(empty($departamento)==false&&empty($especialidadoprofesion)==true&&empty($universidadoinstitucion)==true){
$sql = "SELECT nombre,apellido,id,nota FROM persona 
		WHERE departamento = \"$departamento\" AND nota > 0 AND plaza IS NULL ORDER BY nota DESC";		
}
if(empty($departamento)==false&&empty($especialidadoprofesion)==false&&empty($universidadoinstitucion)==true){
$sql = "SELECT T1.nombre, T1.apellido, T1.id, T1.nota FROM persona T1, educacionmedia T2 
		WHERE T1.id=T2.`id` AND T2.`tipobachillerato` LIKE \"%$especialidadoprofesion%\" 
		AND T1.departamento=\"$departamento\" AND T1.`nota`> 0 and T1.`plaza` IS NULL
										UNION
		SELECT T1.nombre, T1.apellido, T1.id, T1.nota FROM persona T1, educacionsuperior T2 
		WHERE T1.id=T2.`id` AND T2.`carrera` LIKE \"%$especialidadoprofesion%\" 
		AND T1.departamento=\"$departamento\" AND T1.`nota`> 0 and T1.`plaza` IS NULL
										UNION
		SELECT T1.nombre, T1.apellido, T1.id, T1.nota FROM persona T1, otrosestudios T2 
		WHERE T1.id=T2.`id` AND T2.`tipoestudio` LIKE \"%$especialidadoprofesion%\" 
		AND T1.departamento=\"$departamento\" AND T1.`nota`> 0 and T1.`plaza` IS NULL
										UNION
		SELECT T1.nombre, T1.apellido, T1.id, T1.nota FROM persona T1, experiencias T2 
		WHERE T1.id=T2.`id` AND T2.`puesto` LIKE \"%$especialidadoprofesion%\"
		AND T1.departamento=\"$departamento\" AND T1.`nota`> 0 and T1.`plaza` IS NULL ORDER BY nota DESC								
		";		
}
if(empty($departamento)==false&&empty($especialidadoprofesion)==false&&empty($universidadoinstitucion)==false){
$sql = "SELECT T1.nombre, T1.apellido, T1.id, T1.nota FROM persona T1, educacionmedia T2 
		WHERE T1.id=T2.`id` AND T2.`tipobachillerato` LIKE \"%$especialidadoprofesion%\"
		AND T2.`bachillerato` LIKE \"%$universidadoinstitucion%\" 
		AND T1.departamento=\"$departamento\" AND T1.`nota`> 0 and T1.`plaza` IS NULL
										UNION
		SELECT T1.nombre, T1.apellido, T1.id, T1.nota FROM persona T1, educacionsuperior T2 
		WHERE T1.id=T2.`id` AND T2.`carrera` LIKE \"%$especialidadoprofesion%\" 
		AND T2.`universidad` LIKE \"%$universidadoinstitucion%\"
		AND T1.departamento=\"$departamento\" AND T1.`nota`> 0 and T1.`plaza` IS NULL
										UNION
		SELECT T1.nombre, T1.apellido, T1.id, T1.nota FROM persona T1, otrosestudios T2 
		WHERE T1.id=T2.`id` AND T2.`tipoestudio` LIKE \"%$especialidadoprofesion%\"
		AND T2.`institucion` LIKE \"%$universidadoinstitucion%\" 
		AND T1.departamento=\"$departamento\" AND T1.`nota`> 0 and T1.`plaza` IS NULL
										UNION
		SELECT T1.nombre, T1.apellido, T1.id, T1.nota FROM persona T1, experiencias T2 
		WHERE T1.id=T2.`id` AND T2.`puesto` LIKE \"%$especialidadoprofesion%\" 
		AND T2.`empresa` LIKE \"%$universidadoinstitucion%\"
		AND T1.departamento=\"$departamento\" AND T1.`nota`> 0 and T1.`plaza` IS NULL ORDER BY nota DESC								
		";		
}
if(empty($departamento)==true&&empty($especialidadoprofesion)==false&&empty($universidadoinstitucion)==true){
$sql = "SELECT T1.nombre, T1.apellido, T1.id, T1.nota FROM persona T1, educacionmedia T2 
		WHERE T1.id=T2.`id` AND T2.`tipobachillerato` LIKE \"%$especialidadoprofesion%\" 
		AND T1.`nota`> 0 and T1.`plaza` IS NULL
										UNION
		SELECT T1.nombre, T1.apellido, T1.id, T1.nota FROM persona T1, educacionsuperior T2 
		WHERE T1.id=T2.`id` AND T2.`carrera` LIKE \"%$especialidadoprofesion%\" 
		AND T1.`nota`> 0 and T1.`plaza` IS NULL
										UNION
		SELECT T1.nombre, T1.apellido, T1.id, T1.nota FROM persona T1, otrosestudios T2 
		WHERE T1.id=T2.`id` AND T2.`tipoestudio` LIKE \"%$especialidadoprofesion%\" 
		AND T1.`nota`> 0 and T1.`plaza` IS NULL
										UNION
		SELECT T1.nombre, T1.apellido, T1.id, T1.nota FROM persona T1, experiencias T2 
		WHERE T1.id=T2.`id` AND T2.`puesto` LIKE \"%$especialidadoprofesion%\" 
		AND T1.`nota`> 0 and T1.`plaza` IS NULL ORDER BY nota DESC								
		";	
}
if(empty($departamento)==true&&empty($especialidadoprofesion)==false&&empty($universidadoinstitucion)==false){
$sql = "SELECT T1.nombre, T1.apellido, T1.id, T1.nota FROM persona T1, educacionmedia T2 
		WHERE T1.id=T2.`id` AND T2.`tipobachillerato` LIKE \"%$especialidadoprofesion%\"
		AND T2.`bachillerato` LIKE \"%$universidadoinstitucion%\" 
		AND T1.`nota`> 0 and T1.`plaza` IS NULL
										UNION
		SELECT T1.nombre, T1.apellido, T1.id, T1.nota FROM persona T1, educacionsuperior T2 
		WHERE T1.id=T2.`id` AND T2.`carrera` LIKE \"%$especialidadoprofesion%\" 
		AND T2.`universidad` LIKE \"%$universidadoinstitucion%\"
		AND T1.`nota`> 0 and T1.`plaza` IS NULL
										UNION
		SELECT T1.nombre, T1.apellido, T1.id, T1.nota FROM persona T1, otrosestudios T2 
		WHERE T1.id=T2.`id` AND T2.`tipoestudio` LIKE \"%$especialidadoprofesion%\"
		AND T2.`institucion` LIKE \"%$universidadoinstitucion%\" 
		AND T1.`nota`> 0 and T1.`plaza` IS NULL
										UNION
		SELECT T1.nombre, T1.apellido, T1.id, T1.nota FROM persona T1, experiencias T2 
		WHERE T1.id=T2.`id` AND T2.`puesto` LIKE \"%$especialidadoprofesion%\" 
		AND T2.`empresa` LIKE \"%$universidadoinstitucion%\"
		AND T1.`nota`> 0 and T1.`plaza` IS NULL ORDER BY nota DESC								
		";		
}
if(empty($departamento)==true&&empty($especialidadoprofesion)==true&&empty($universidadoinstitucion)==false){
$sql = "SELECT T1.nombre, T1.apellido, T1.id, T1.nota FROM persona T1, educacionmedia T2 
		WHERE T1.id=T2.`id` AND T2.`bachillerato` LIKE \"%$universidadoinstitucion%\" 
		AND T1.`nota`> 0 and T1.`plaza` IS NULL
										UNION
		SELECT T1.nombre, T1.apellido, T1.id, T1.nota FROM persona T1, educacionsuperior T2 
		WHERE T1.id=T2.`id` AND T2.`universidad` LIKE \"%$universidadoinstitucion%\"
		AND T1.`nota`> 0 and T1.`plaza` IS NULL
										UNION
		SELECT T1.nombre, T1.apellido, T1.id, T1.nota FROM persona T1, otrosestudios T2 
		WHERE T1.id=T2.`id` AND T2.`institucion` LIKE \"%$universidadoinstitucion%\" 
		AND T1.`nota`> 0 and T1.`plaza` IS NULL
										UNION
		SELECT T1.nombre, T1.apellido, T1.id, T1.nota FROM persona T1, experiencias T2 
		WHERE T1.id=T2.`id` AND T2.`empresa` LIKE \"%$universidadoinstitucion%\"
		AND T1.`nota`> 0 and T1.`plaza` IS NULL ORDER BY nota DESC								
		";		
}
if(empty($departamento)==false&&empty($especialidadoprofesion)==true&&empty($universidadoinstitucion)==false){
$sql = "SELECT T1.nombre, T1.apellido, T1.id, T1.nota FROM persona T1, educacionmedia T2 
		WHERE T1.id=T2.`id` AND T2.`bachillerato` LIKE \"%$universidadoinstitucion%\" 
		AND T1.departamento=\"$departamento\" AND T1.`nota`> 0 and T1.`plaza` IS NULL
										UNION
		SELECT T1.nombre, T1.apellido, T1.id, T1.nota FROM persona T1, educacionsuperior T2 
		WHERE T1.id=T2.`id`	AND T2.`universidad` LIKE \"%$universidadoinstitucion%\"
		AND T1.departamento=\"$departamento\" AND T1.`nota`> 0 and T1.`plaza` IS NULL
										UNION
		SELECT T1.nombre, T1.apellido, T1.id, T1.nota FROM persona T1, otrosestudios T2 
		WHERE T1.id=T2.`id` AND T2.`institucion` LIKE \"%$universidadoinstitucion%\" 
		AND T1.departamento=\"$departamento\" AND T1.`nota`> 0 and T1.`plaza` IS NULL
										UNION
		SELECT T1.nombre, T1.apellido, T1.id, T1.nota FROM persona T1, experiencias T2 
		WHERE T1.id=T2.`id` AND T2.`empresa` LIKE \"%$universidadoinstitucion%\"
		AND T1.departamento=\"$departamento\" AND T1.`nota`> 0 and T1.`plaza` IS NULL ORDER BY nota DESC								
		";		
}
$query = mysql_query($sql,$conexion)or die (json_encode("No se puede agregar numeros de telefonos repetidos"));
$datos = array();
    while($row = mysql_fetch_array($query))
    {
        $datos[] = array(
            'nombre' => $row['nombre'],
			'apellido' => $row['apellido'],
			'id' => $row['id'],
			'nota' => $row['nota']
        );
    }
echo json_encode($datos);
mysql_close();
 
?>