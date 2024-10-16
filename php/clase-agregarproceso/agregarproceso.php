<?php
include("../clase-basededatos/basededatos.php");
$Plaza=$_POST["plazas"];
$Participante1=ucwords(strtolower($_POST["nombre1"]));
$Cargo1=ucwords(strtolower(utf8_decode($_POST["cargo1"])));
$Participante2=ucwords(strtolower($_POST["nombre2"]));
$Cargo2=ucwords(strtolower(utf8_decode($_POST["cargo2"])));
$Participante3=ucwords(strtolower($_POST["nombre3"]));
$Cargo3=ucwords(strtolower(utf8_decode($_POST["cargo3"])));
$CampoDepartament=$_POST["lugar"];
$CampoFechaSeleccionInicial=$_POST["fechainicial"];
$CampoFechaSeleccionFinal=$_POST["fechafinal"];
$fecha1=$_POST["evaluacion"];
$fecha2=$_POST["entrevista"];
$fecha3=$_POST["analisis"];
$fecha4=$_POST["prueba"];	
$sql =("INSERT INTO `procesos`(`fechainicial`, `fechafinal`, `lugar`, `plaza`, `evaluacionpsicologica`, `entrevista`, `analisis`, `pruebatecnica`) VALUES (\"$CampoFechaSeleccionInicial\",\"$CampoFechaSeleccionFinal\",\"$CampoDepartament\",\"$Plaza\",\"$fecha1\",\"$fecha2\",\"$fecha3\",\"$fecha4\")"); 
$query = mysql_query($sql,$conexion)or die (json_encode("No se puede agregar procesos repetidos repetidos"));
$sql =("INSERT INTO `participantes`(`fechainicial`, `personal`, `cargo`) VALUES (\"$CampoFechaSeleccionInicial\",\"$Participante1\",\"$Cargo1\")"); 
$query = mysql_query($sql,$conexion)or die (json_encode("No se puede agregar procesos repetidos repetidos"));
$sql =("INSERT INTO `participantes`(`fechainicial`, `personal`, `cargo`) VALUES (\"$CampoFechaSeleccionInicial\",\"$Participante2\",\"$Cargo2\")"); 
$query = mysql_query($sql,$conexion)or die (json_encode("No se puede agregar procesos repetidos repetidos"));
$sql =("INSERT INTO `participantes`(`fechainicial`, `personal`, `cargo`) VALUES (\"$CampoFechaSeleccionInicial\",\"$Participante3\",\"$Cargo3\")"); 
$query = mysql_query($sql,$conexion)or die (json_encode("No se puede agregar procesos repetidos repetidos"));
$listausuarios=$_POST['listausuarios'];
$CampoNumero=$_POST['CampoNumero'];
for($x=0;$x<$CampoNumero;$x++){
$idpersona=$listausuarios[$x];
$sql =("INSERT INTO `listaseleccionada`(`fechainicial`, `idpersona`) VALUES (\"$CampoFechaSeleccionInicial\",\"$idpersona\")"); 
$query = mysql_query($sql,$conexion)or die (json_encode("No se puede agregar procesos repetidos repetidos"));	
}
mysql_close();
?>