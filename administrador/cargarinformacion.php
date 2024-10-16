<?php
include("../php/clase-basededatos/basededatos.php");
$id=mysql_real_escape_string($_POST['username']);	
$sql = "SELECT * FROM `persona` WHERE `id`=\"$id\"";
$query = mysql_query($sql,$conexion)or die (json_encode("Su numero de Dui o Pasaporte ya existe en el sistema"));
$datospersonales=@mysql_fetch_row($query);
$nombres=utf8_encode($datospersonales[1]);
$apellidos=utf8_encode($datospersonales[2]);
$dui=$datospersonales[3];
$nit=$datospersonales[4];
$afp=$datospersonales[5];
$pasaporte=$datospersonales[6];
$direccion=utf8_encode($datospersonales[7]);
$isss=$datospersonales[8];
$sexo=$datospersonales[9];
$departamento=utf8_encode($datospersonales[10]);
$fecha=$datospersonales[11];
$estadofamiliar=$datospersonales[12];
$ListaEstado="";
if($estadofamiliar==''){
$ListaEstado='<option value="" selected="selected">Seleccionar</option>
    <option value="Soltero/a">Soltero/a</option>
    <option value="Casado/a">Casado/a</option>
    <option value="Divorciado/a">Divorciado/a</option>
    <option value="Viudo/a">Viudo/a</option>
    <option value="Acompañado/a">Acompañado/a</option>';
}
if($estadofamiliar=='Soltero/a'){
$ListaEstado='<option value="">Seleccionar</option>
    <option value="Soltero/a" selected="selected">Soltero/a</option>
    <option value="Casado/a">Casado/a</option>
    <option value="Divorciado/a">Divorciado/a</option>
    <option value="Viudo/a">Viudo/a</option>
    <option value="Acompañado/a">Acompañado/a</option>';
}
if($estadofamiliar=='Casado/a'){
$ListaEstado='<option value="">Seleccionar</option>
    <option value="Soltero/a">Soltero/a</option>
    <option value="Casado/a" selected="selected">Casado/a</option>
    <option value="Divorciado/a">Divorciado/a</option>
    <option value="Viudo/a">Viudo/a</option>
    <option value="Acompañado/a">Acompañado/a</option>';
}
if($estadofamiliar=='Acompañado/a'){
$ListaEstado='<option value="">Seleccionar</option>
    <option value="Soltero/a">Soltero/a</option>
    <option value="Casado/a">Casado/a</option>
    <option value="Divorciado/a">Divorciado/a</option>
    <option value="Viudo/a">Viudo/a</option>
    <option value="Acompañado/a" selected="selected">Acompañado/a</option>';
}
if($estadofamiliar=='Divorciado/a'){
$ListaEstado='<option value="">Seleccionar</option>
    <option value="Soltero/a">Soltero/a</option>
    <option value="Casado/a">Casado/a</option>
    <option value="Divorciado/a" selected="selected">Divorciado/a</option>
    <option value="Viudo/a">Viudo/a</option>
    <option value="Acompañado/a">Acompañado/a</option>';
}
if($estadofamiliar=='Viudo/a'){
$ListaEstado='<option value="">Seleccionar</option>
    <option value="Soltero/a">Soltero/a</option>
    <option value="Casado/a">Casado/a</option>
    <option value="Divorciado/a">Divorciado/a</option>
    <option value="Viudo/a" selected="selected">Viudo/a</option>
    <option value="Acompañado/a">Acompañado/a</option>';
}
$ListaSexo="";
if($sexo==''){
$ListaSexo='<option value="" selected="selected">Seleccionar</option>
      <option value="Masculino">Masculino</option>
      <option value="Femenino">Femenino</option>';
}
if($sexo=='Masculino'){
$ListaSexo='<option value="" >Seleccionar</option>
      <option value="Masculino" selected="selected">Masculino</option>
      <option value="Femenino">Femenino</option>';
}
if($sexo=='Femenino'){
$ListaSexo='<option value="" >Seleccionar</option>
      <option value="Masculino" >Masculino</option>
      <option value="Femenino" selected="selected">Femenino</option>';
}
$Listadepartamentos="";
if($departamento=='Ahuachapán'){
	$Listadepartamentos='
	<option value="">Seleccione el Departamento</option>
 		<option value="Ahuachapán" selected="selected">Ahuachapán</option>
		<option value="Cabañas">Cabañas</option>
        <option value="Chalatenango">Chalatenango</option>
        <option value="Cuscatlán">Cuscatlán</option>
        <option value="La Libertad">La Libertad</option>
        <option value="La Paz">La Paz</option>
        <option value="La Unión">La Unión</option>
        <option value="Morazán">Morazán</option>
        <option value="San Miguel">San Miguel</option>
        <option value="San Salvador">San Salvador</option>
        <option value="San Vicente">San Vicente</option>
        <option value="Santa Ana">Santa Ana</option>
        <option value="Sonsonate">Sonsonate</option>
        <option value="Usulután">Usulután</option>';
	}
if($departamento=='Cabañas'){
	$Listadepartamentos='
	<option value="">Seleccione el Departamento</option>
 		<option value="Ahuachapán">Ahuachapán</option>
		<option value="Cabañas" selected="selected">Cabañas</option>
        <option value="Chalatenango">Chalatenango</option>
        <option value="Cuscatlán">Cuscatlán</option>
        <option value="La Libertad">La Libertad</option>
        <option value="La Paz">La Paz</option>
        <option value="La Unión">La Unión</option>
        <option value="Morazán">Morazán</option>
        <option value="San Miguel">San Miguel</option>
        <option value="San Salvador">San Salvador</option>
        <option value="San Vicente">San Vicente</option>
        <option value="Santa Ana">Santa Ana</option>
        <option value="Sonsonate">Sonsonate</option>
        <option value="Usulután">Usulután</option>';
	}
if($departamento=='Chalatenango'){
	$Listadepartamentos='
	<option value="">Seleccione el Departamento</option>
 		<option value="Ahuachapán">Ahuachapán</option>
		<option value="Cabañas">Cabañas</option>
        <option value="Chalatenango" selected="selected">Chalatenango</option>
        <option value="Cuscatlán">Cuscatlán</option>
        <option value="La Libertad">La Libertad</option>
        <option value="La Paz">La Paz</option>
        <option value="La Unión">La Unión</option>
        <option value="Morazán">Morazán</option>
        <option value="San Miguel">San Miguel</option>
        <option value="San Salvador">San Salvador</option>
        <option value="San Vicente">San Vicente</option>
        <option value="Santa Ana">Santa Ana</option>
        <option value="Sonsonate">Sonsonate</option>
        <option value="Usulután">Usulután</option>';
	}
if($departamento=='Cuscatlán'){
	$Listadepartamentos='
	<option value="">Seleccione el Departamento</option>
 		<option value="Ahuachapán">Ahuachapán</option>
		<option value="Cabañas">Cabañas</option>
        <option value="Chalatenango">Chalatenango</option>
        <option value="Cuscatlán" selected="selected">Cuscatlán</option>
        <option value="La Libertad">La Libertad</option>
        <option value="La Paz">La Paz</option>
        <option value="La Unión">La Unión</option>
        <option value="Morazán">Morazán</option>
        <option value="San Miguel">San Miguel</option>
        <option value="San Salvador">San Salvador</option>
        <option value="San Vicente">San Vicente</option>
        <option value="Santa Ana">Santa Ana</option>
        <option value="Sonsonate">Sonsonate</option>
        <option value="Usulután">Usulután</option>';
	}
if($departamento=='La Libertad'){
	$Listadepartamentos='
	<option value="">Seleccione el Departamento</option>
 		<option value="Ahuachapán">Ahuachapán</option>
		<option value="Cabañas">Cabañas</option>
        <option value="Chalatenango">Chalatenango</option>
        <option value="Cuscatlán">Cuscatlán</option>
        <option value="La Libertad" selected="selected">La Libertad</option>
        <option value="La Paz">La Paz</option>
        <option value="La Unión">La Unión</option>
        <option value="Morazán">Morazán</option>
        <option value="San Miguel">San Miguel</option>
        <option value="San Salvador">San Salvador</option>
        <option value="San Vicente">San Vicente</option>
        <option value="Santa Ana">Santa Ana</option>
        <option value="Sonsonate">Sonsonate</option>
        <option value="Usulután">Usulután</option>';
	}
if($departamento=='La Paz'){
	$Listadepartamentos='
	<option value="">Seleccione el Departamento</option>
 		<option value="Ahuachapán">Ahuachapán</option>
		<option value="Cabañas">Cabañas</option>
        <option value="Chalatenango">Chalatenango</option>
        <option value="Cuscatlán">Cuscatlán</option>
        <option value="La Libertad">La Libertad</option>
        <option value="La Paz" selected="selected">La Paz</option>
        <option value="La Unión">La Unión</option>
        <option value="Morazán">Morazán</option>
        <option value="San Miguel">San Miguel</option>
        <option value="San Salvador">San Salvador</option>
        <option value="San Vicente">San Vicente</option>
        <option value="Santa Ana">Santa Ana</option>
        <option value="Sonsonate">Sonsonate</option>
        <option value="Usulután">Usulután</option>';
	}	
if($departamento=='La Unión'){
	$Listadepartamentos='
	<option value="">Seleccione el Departamento</option>
 		<option value="Ahuachapán">Ahuachapán</option>
		<option value="Cabañas">Cabañas</option>
        <option value="Chalatenango">Chalatenango</option>
        <option value="Cuscatlán">Cuscatlán</option>
        <option value="La Libertad">La Libertad</option>
        <option value="La Paz">La Paz</option>
        <option value="La Unión" selected="selected">La Unión</option>
        <option value="Morazán">Morazán</option>
        <option value="San Miguel">San Miguel</option>
        <option value="San Salvador">San Salvador</option>
        <option value="San Vicente">San Vicente</option>
        <option value="Santa Ana">Santa Ana</option>
        <option value="Sonsonate">Sonsonate</option>
        <option value="Usulután">Usulután</option>';
	}	
if($departamento=='Morazán'){
	$Listadepartamentos='
	<option value="">Seleccione el Departamento</option>
 		<option value="Ahuachapán">Ahuachapán</option>
		<option value="Cabañas">Cabañas</option>
        <option value="Chalatenango">Chalatenango</option>
        <option value="Cuscatlán">Cuscatlán</option>
        <option value="La Libertad">La Libertad</option>
        <option value="La Paz">La Paz</option>
        <option value="La Unión">La Unión</option>
        <option value="Morazán" selected="selected">Morazán</option>
        <option value="San Miguel">San Miguel</option>
        <option value="San Salvador">San Salvador</option>
        <option value="San Vicente">San Vicente</option>
        <option value="Santa Ana">Santa Ana</option>
        <option value="Sonsonate">Sonsonate</option>
        <option value="Usulután">Usulután</option>';
	}
if($departamento=='San Miguel'){
	$Listadepartamentos='
	<option value="">Seleccione el Departamento</option>
 		<option value="Ahuachapán">Ahuachapán</option>
		<option value="Cabañas">Cabañas</option>
        <option value="Chalatenango">Chalatenango</option>
        <option value="Cuscatlán">Cuscatlán</option>
        <option value="La Libertad">La Libertad</option>
        <option value="La Paz">La Paz</option>
        <option value="La Unión">La Unión</option>
        <option value="Morazán">Morazán</option>
        <option value="San Miguel" selected="selected">San Miguel</option>
        <option value="San Salvador">San Salvador</option>
        <option value="San Vicente">San Vicente</option>
        <option value="Santa Ana">Santa Ana</option>
        <option value="Sonsonate">Sonsonate</option>
        <option value="Usulután">Usulután</option>';
	}	
if($departamento=='San Salvador'){
	$Listadepartamentos='
	<option value="">Seleccione el Departamento</option>
 		<option value="Ahuachapán">Ahuachapán</option>
		<option value="Cabañas">Cabañas</option>
        <option value="Chalatenango">Chalatenango</option>
        <option value="Cuscatlán">Cuscatlán</option>
        <option value="La Libertad">La Libertad</option>
        <option value="La Paz">La Paz</option>
        <option value="La Unión">La Unión</option>
        <option value="Morazán">Morazán</option>
        <option value="San Miguel">San Miguel</option>
        <option value="San Salvador" selected="selected">San Salvador</option>
        <option value="San Vicente">San Vicente</option>
        <option value="Santa Ana">Santa Ana</option>
        <option value="Sonsonate">Sonsonate</option>
        <option value="Usulután">Usulután</option>';
	}	
if($departamento=='San Vicente'){
	$Listadepartamentos='
	<option value="">Seleccione el Departamento</option>
 		<option value="Ahuachapán">Ahuachapán</option>
		<option value="Cabañas">Cabañas</option>
        <option value="Chalatenango">Chalatenango</option>
        <option value="Cuscatlán">Cuscatlán</option>
        <option value="La Libertad">La Libertad</option>
        <option value="La Paz">La Paz</option>
        <option value="La Unión">La Unión</option>
        <option value="Morazán">Morazán</option>
        <option value="San Miguel">San Miguel</option>
        <option value="San Salvador">San Salvador</option>
        <option value="San Vicente" selected="selected">San Vicente</option>
        <option value="Santa Ana">Santa Ana</option>
        <option value="Sonsonate">Sonsonate</option>
        <option value="Usulután">Usulután</option>';
	}	
if($departamento=='Santa Ana'){
	$Listadepartamentos='
	<option value="">Seleccione el Departamento</option>
 		<option value="Ahuachapán">Ahuachapán</option>
		<option value="Cabañas">Cabañas</option>
        <option value="Chalatenango">Chalatenango</option>
        <option value="Cuscatlán">Cuscatlán</option>
        <option value="La Libertad">La Libertad</option>
        <option value="La Paz">La Paz</option>
        <option value="La Unión">La Unión</option>
        <option value="Morazán">Morazán</option>
        <option value="San Miguel">San Miguel</option>
        <option value="San Salvador">San Salvador</option>
        <option value="San Vicente">San Vicente</option>
        <option value="Santa Ana" selected="selected">Santa Ana</option>
        <option value="Sonsonate">Sonsonate</option>
        <option value="Usulután">Usulután</option>';
	}	
if($departamento=='Sonsonate'){
	$Listadepartamentos='
	<option value="">Seleccione el Departamento</option>
 		<option value="Ahuachapán">Ahuachapán</option>
		<option value="Cabañas">Cabañas</option>
        <option value="Chalatenango">Chalatenango</option>
        <option value="Cuscatlán">Cuscatlán</option>
        <option value="La Libertad">La Libertad</option>
        <option value="La Paz">La Paz</option>
        <option value="La Unión">La Unión</option>
        <option value="Morazán">Morazán</option>
        <option value="San Miguel">San Miguel</option>
        <option value="San Salvador">San Salvador</option>
        <option value="San Vicente">San Vicente</option>
        <option value="Santa Ana">Santa Ana</option>
        <option value="Sonsonate" selected="selected">Sonsonate</option>
        <option value="Usulután">Usulután</option>';
	}	
if($departamento=='Usulután'){
	$Listadepartamentos='
		<option value="">Seleccione el Departamento</option>
 		<option value="Ahuachapán">Ahuachapán</option>
		<option value="Cabañas">Cabañas</option>
        <option value="Chalatenango">Chalatenango</option>
        <option value="Cuscatlán">Cuscatlán</option>
        <option value="La Libertad">La Libertad</option>
        <option value="La Paz">La Paz</option>
        <option value="La Unión">La Unión</option>
        <option value="Morazán">Morazán</option>
        <option value="San Miguel">San Miguel</option>
        <option value="San Salvador">San Salvador</option>
        <option value="San Vicente">San Vicente</option>
        <option value="Santa Ana">Santa Ana</option>
        <option value="Sonsonate">Sonsonate</option>
        <option value="Usulután" selected="selected">Usulután</option>';
	}
if($departamento==''){
	$Listadepartamentos='
		<option value="" selected="selected" >Seleccione el Departamento</option>
 		<option value="Ahuachapán">Ahuachapán</option>
		<option value="Cabañas">Cabañas</option>
        <option value="Chalatenango">Chalatenango</option>
        <option value="Cuscatlán">Cuscatlán</option>
        <option value="La Libertad">La Libertad</option>
        <option value="La Paz">La Paz</option>
        <option value="La Unión">La Unión</option>
        <option value="Morazán">Morazán</option>
        <option value="San Miguel">San Miguel</option>
        <option value="San Salvador">San Salvador</option>
        <option value="San Vicente">San Vicente</option>
        <option value="Santa Ana">Santa Ana</option>
        <option value="Sonsonate">Sonsonate</option>
        <option value="Usulután">Usulután</option>';
	}	
$telefonos="";
$sql = "SELECT * FROM `telefono` WHERE `id`=\"$id\"";
$ejecutarconsulta=@mysql_query($sql,$conexion);
$x=0;
while($datospersonales=@mysql_fetch_array($ejecutarconsulta)){
	$telefonos=$telefonos.'<option value='.$datospersonales["telefono"].'>'.$datospersonales["telefono"].'</option>';
	$x++;
}
$emails="";
$sql = "SELECT * FROM `email` WHERE `id`=\"$id\"";
$ejecutarconsulta=@mysql_query($sql,$conexion);
$x=0;
while($datospersonales=@mysql_fetch_array($ejecutarconsulta)){
	$emails=$emails.'<option value='.$datospersonales["email"].'>'.$datospersonales["email"].'</option>';
	$x++;
}

$centroescolares="";
$sql = "SELECT * FROM `educacionbasica` WHERE `id`=\"$id\"";
$ejecutarconsulta=@mysql_query($sql,$conexion);
$x=0;
while($datospersonales=@mysql_fetch_array($ejecutarconsulta)){
	$centroescolar=utf8_encode($datospersonales['centroescolar']);
	$periodoinicioce=$datospersonales["periodoinicio"];
	$periodofinalce=$datospersonales["periodofinal"];
	
	if(empty($centroescolar)==false&&empty($periodoinicioce)==true&&empty($periodofinalce)==true){
	$centroescolares=$centroescolares."<option value=\"$centroescolar\">".$centroescolar."</option>";
	}
	if(empty($centroescolar)==false&&empty($periodoinicioce)==false&&empty($periodofinalce)==true){
	$centroescolares=$centroescolares."<option value=\"$centroescolar $periodoinicioce\">".$centroescolar." ------ ".$periodoinicioce."</option>";
	}
	if(empty($centroescolar)==false&&empty($periodoinicioce)==false&&empty($periodofinalce)==false){
	$centroescolares=$centroescolares."<option value=\"$centroescolar $periodoinicioce $periodofinalce\">".$centroescolar." ------ ".$periodoinicioce." - ".$periodofinalce."</option>";
	}
	$x++;
}
$bachilleratos="";
$sql = "SELECT * FROM `educacionmedia` WHERE `id`=\"$id\"";
$ejecutarconsulta=@mysql_query($sql,$conexion);
$x=0;
while($datospersonales=@mysql_fetch_array($ejecutarconsulta)){
	$bachillerato=utf8_encode($datospersonales['bachillerato']);
	$tipobachillerato=utf8_encode($datospersonales['tipobachillerato']);
	$periodoinicioba=$datospersonales["periodoinicio"];
	$periodofinalba=$datospersonales["periodofinal"];
	
	if(empty($bachillerato)==false&&empty($tipobachillerato)==true&&empty($periodoinicioba)==true&&empty($periodofinalba)==true){
	$bachilleratos=$bachilleratos."<option value=\"$bachillerato\">".$bachillerato."</option>";
	}
	if(empty($bachillerato)==false&&empty($tipobachillerato)==false&&empty($periodoinicioba)==true&&empty($periodofinalba)==true){
	$bachilleratos=$bachilleratos."<option value=\"$bachillerato $tipobachillerato\">".$bachillerato." ------ ".$tipobachillerato."</option>";
	}
	if(empty($bachillerato)==false&&empty($tipobachillerato)==true&&empty($periodoinicioba)==false&&empty($periodofinalba)==true){
	$bachilleratos=$bachilleratos."<option value=\"$bachillerato  $periodoinicioba\">".$bachillerato." ------ ".$periodoinicioba."</option>";
	}
	if(empty($bachillerato)==false&&empty($tipobachillerato)==false&&empty($periodoinicioba)==false&&empty($periodofinalba)==true){
	$bachilleratos=$bachilleratos."<option value=\"$bachillerato $tipobachillerato $periodoinicioba\">".$bachillerato." ------ ".$tipobachillerato." ------ ".$periodoinicioba."</option>";
	}
	if(empty($bachillerato)==false&&empty($tipobachillerato)==false&&empty($periodoinicioba)==false&&empty($periodofinalba)==false){
	$bachilleratos=$bachilleratos."<option value=\"$bachillerato $tipobachillerato $periodoinicioba $periodofinalba\">".$bachillerato." ------ ".$tipobachillerato." ------ ".$periodoinicioba." - ".$periodofinalba."</option>";
	}
	if(empty($bachillerato)==false&&empty($tipobachillerato)==true&&empty($periodoinicioba)==false&&empty($periodofinalba)==false){
	$bachilleratos=$bachilleratos."<option value=\"$bachillerato  $periodoinicioba $periodofinalba\">".$bachillerato." ------ ".$periodoinicioba." - ".$periodofinalba."</option>";
	}
	$x++;
}
$universidades="";
$sql = "SELECT * FROM `educacionsuperior` WHERE `id`=\"$id\"";
$ejecutarconsulta=@mysql_query($sql,$conexion);
$x=0;
while($datospersonales=@mysql_fetch_array($ejecutarconsulta)){
	$universidad=utf8_encode($datospersonales['universidad']);
	$carrera=utf8_encode($datospersonales['carrera']);
	$periodoiniciou=$datospersonales["periodoinicio"];
	$periodofinalu=$datospersonales["periodofinal"];
	
	if(empty($universidad)==false&&empty($carrera)==true&&empty($periodoiniciou)==true&&empty($periodofinalu)==true){
	$universidades=$universidades."<option value=\"$universidad\">".$universidad."</option>";
	}
	if(empty($universidad)==false&&empty($carrera)==false&&empty($periodoiniciou)==true&&empty($periodofinalu)==true){
	$universidades=$universidades."<option value=\"$universidad $carrera\">".$universidad." ------ ".$carrera."</option>";
	}
	if(empty($universidad)==false&&empty($carrera)==true&&empty($periodoiniciou)==false&&empty($periodofinalu)==true){
	$universidades=$universidades."<option value=\"$universidad  $periodoiniciou\">".$universidad." ------ ".$periodoiniciou."</option>";
	}
	if(empty($universidad)==false&&empty($carrera)==false&&empty($periodoiniciou)==false&&empty($periodofinalu)==true){
	$universidades=$universidades."<option value=\"$universidad $carrera $periodoiniciou\">".$universidad." ------ ".$carrera." ------ ".$periodoiniciou."</option>";
	}
	if(empty($universidad)==false&&empty($carrera)==false&&empty($periodoiniciou)==false&&empty($periodofinalu)==false){
	$universidades=$universidades."<option value=\"$universidad $carrera $periodoiniciou $periodofinalu\">".$universidad." ------ ".$carrera." ------ ".$periodoiniciou." - ".$periodofinalu."</option>";
	}
	if(empty($universidad)==false&&empty($carrera)==true&&empty($periodoiniciou)==false&&empty($periodofinalu)==false){
	$universidades=$universidades."<option value=\"$universidad  $periodoiniciou $periodofinalu\">".$universidad." ------ ".$periodoiniciou." - ".$periodofinalu."</option>";
	}
	$x++;
}
$otros="";
$sql = "SELECT * FROM `otrosestudios` WHERE `id`=\"$id\"";
$ejecutarconsulta=@mysql_query($sql,$conexion);
$x=0;
while($datospersonales=@mysql_fetch_array($ejecutarconsulta)){
	$institucion=utf8_encode($datospersonales['institucion']);
	$tipoestudio=utf8_encode($datospersonales['tipoestudio']);
	$periodoinicioo=$datospersonales["periodoinicio"];
	$periodofinalo=$datospersonales["periodofinal"];
	
	if(empty($institucion)==false&&empty($tipoestudio)==true&&empty($periodoinicioo)==true&&empty($periodofinalo)==true){
	$otros=$otros."<option value=\"$institucion\">".$institucion."</option>";
	}
	if(empty($institucion)==false&&empty($tipoestudio)==false&&empty($periodoinicioo)==true&&empty($periodofinalo)==true){
	$otros=$otros."<option value=\"$institucion $tipoestudio\">".$institucion." ------ ".$tipoestudio."</option>";
	}
	if(empty($institucion)==false&&empty($tipoestudio)==true&&empty($periodoinicioo)==false&&empty($periodofinalo)==true){
	$otros=$otros."<option value=\"$institucion  $periodoinicioo\">".$institucion." ------ ".$periodoinicioo."</option>";
	}
	if(empty($institucion)==false&&empty($tipoestudio)==false&&empty($periodoinicioo)==false&&empty($periodofinalo)==true){
	$otros=$otros."<option value=\"$institucion $tipoestudio $periodoinicioo\">".$institucion." ------ ".$tipoestudio." ------ ".$periodoinicioo."</option>";
	}
	if(empty($institucion)==false&&empty($tipoestudio)==false&&empty($periodoinicioo)==false&&empty($periodofinalo)==false){
	$otros=$otros."<option value=\"$institucion $tipoestudio $periodoinicioo $periodofinalo\">".$institucion." ------ ".$tipoestudio." ------ ".$periodoinicioo." - ".$periodofinalo."</option>";
	}
	if(empty($institucion)==false&&empty($tipoestudio)==true&&empty($periodoinicioo)==false&&empty($periodofinalo)==false){
	$otros=$otros."<option value=\"$institucion  $periodoinicioo $periodofinalo\">".$institucion." ------ ".$periodoinicioo." - ".$periodofinalo."</option>";
	}
	$x++;
}
$personal="";
$sql = "SELECT * FROM `referencias` WHERE `id`=\"$id\" and `tipo`=\"Personal\"";
$ejecutarconsulta=@mysql_query($sql,$conexion);
$x=0;
while($datospersonales=@mysql_fetch_array($ejecutarconsulta)){
	$nombrepe=utf8_encode($datospersonales['nombres']);
	$apellidope=utf8_encode($datospersonales['apellidos']);
	$duipe=$datospersonales['dui'];
	$telefonope=$datospersonales['telefono'];
	$ocupacionpe=utf8_encode($datospersonales['ocupacion']);
	
	if(empty($nombrepe)==false&&empty($apellidope)==false&&empty($duipe)==true&&empty($telefonope)==true&&empty($ocupacionpe)==true){
	$personal=$personal."<option value=\"$nombrepe $apellidope    Personal\">".$nombrepe." ".$apellidope."</option>";
	}
	if(empty($nombrepe)==false&&empty($apellidope)==false&&empty($duipe)==false&&empty($telefonope)==true&&empty($ocupacionpe)==true){
	$personal=$personal."<option value=\"$nombrepe $apellidope $duipe   Personal\">".$nombrepe." ".$apellidope." ------ ".$duipe."</option>";
	}
	if(empty($nombrepe)==false&&empty($apellidope)==false&&empty($duipe)==false&&empty($telefonope)==false&&empty($ocupacionpe)==true){
	$personal=$personal."<option value=\"$nombrepe $apellidope $duipe $telefonope  Personal\">".$nombrepe." ".$apellidope." ------ ".$duipe." ------ ".$telefonope."</option>";
	}
	if(empty($nombrepe)==false&&empty($apellidope)==false&&empty($duipe)==true&&empty($telefonope)==false&&empty($ocupacionpe)==true){
	$personal=$personal."<option value=\"$nombrepe $apellidope  $telefonope  Personal\">".$nombrepe." ".$apellidope." ------ ".$telefonope."</option>";
	}
	if(empty($nombrepe)==false&&empty($apellidope)==false&&empty($duipe)==true&&empty($telefonope)==true&&empty($ocupacionpe)==false){
	$personal=$personal."<option value=\"$nombrepe $apellidope   $ocupacionpe Personal\">".$nombrepe." ".$apellidope." ------ ".$ocupacionpe."</option>";
	}
	if(empty($nombrepe)==false&&empty($apellidope)==false&&empty($duipe)==false&&empty($telefonope)==true&&empty($ocupacionpe)==false){
	$personal=$personal."<option value=\"$nombrepe $apellidope $duipe  $ocupacionpe Personal\">".$nombrepe." ".$apellidope." ------ ".$duipe." ------ ".$ocupacionpe."</option>";
	}
	if(empty($nombrepe)==false&&empty($apellidope)==false&&empty($duipe)==true&&empty($telefonope)==false&&empty($ocupacionpe)==false){
	$personal=$personal."<option value=\"$nombrepe $apellidope  $telefonope $ocupacionpe Personal\">".$nombrepe." ".$apellidope." ------ ".$telefonope." ------ ".$ocupacionpe."</option>";
	}
	if(empty($nombrepe)==false&&empty($apellidope)==false&&empty($duipe)==false&&empty($telefonope)==false&&empty($ocupacionpe)==false){
	$personal=$personal."<option value=\"$nombrepe $apellidope $duipe $telefonope $ocupacionpe Personal\">".$nombrepe." ".$apellidope." ------ ".$duipe." ------ ".$telefonope." ------ ".$ocupacionpe."</option>";
	}	
	$x++;
}
$laboral="";
$sql = "SELECT * FROM `referencias` WHERE `id`=\"$id\" and `tipo`=\"Laborales\"";
$ejecutarconsulta=@mysql_query($sql,$conexion);
$x=0;
while($datospersonales=@mysql_fetch_array($ejecutarconsulta)){
	$nombrela=utf8_encode($datospersonales['nombres']);
	$apellidola=utf8_encode($datospersonales['apellidos']);
	$duila=$datospersonales['dui'];
	$telefonola=$datospersonales['telefono'];
	$ocupacionla=utf8_encode($datospersonales['ocupacion']);
	
	if(empty($nombrela)==false&&empty($apellidola)==false&&empty($duila)==true&&empty($telefonola)==true&&empty($ocupacionla)==true){
	$laboral=$laboral."<option value=\"$nombrela $apellidola    Laborales\">".$nombrela." ".$apellidola."</option>";
	}
	if(empty($nombrela)==false&&empty($apellidola)==false&&empty($duila)==false&&empty($telefonola)==true&&empty($ocupacionla)==true){
	$laboral=$laboral."<option value=\"$nombrela $apellidola $duila   Laborales\">".$nombrela." ".$apellidola." ------ ".$duila."</option>";
	}
	if(empty($nombrela)==false&&empty($apellidola)==false&&empty($duila)==false&&empty($telefonola)==false&&empty($ocupacionla)==true){
	$laboral=$laboral."<option value=\"$nombrela $apellidola $duila $telefonola  Laborales\">".$nombrela." ".$apellidola." ------ ".$duila." ------ ".$telefonola."</option>";
	}
	if(empty($nombrela)==false&&empty($apellidola)==false&&empty($duila)==true&&empty($telefonola)==false&&empty($ocupacionla)==true){
	$laboral=$laboral."<option value=\"$nombrela $apellidola  $telefonola  Laborales\">".$nombrela." ".$apellidola." ------ ".$telefonola."</option>";
	}
	if(empty($nombrela)==false&&empty($apellidola)==false&&empty($duila)==true&&empty($telefonola)==true&&empty($ocupacionla)==false){
	$laboral=$laboral."<option value=\"$nombrela $apellidola   $ocupacionla Laborales\">".$nombrela." ".$apellidola." ------ ".$ocupacionla."</option>";
	}
	if(empty($nombrela)==false&&empty($apellidola)==false&&empty($duila)==false&&empty($telefonola)==true&&empty($ocupacionla)==false){
	$laboral=$laboral."<option value=\"$nombrela $apellidola $duila  $ocupacionla Laborales\">".$nombrela." ".$apellidola." ------ ".$duila." ------ ".$ocupacionla."</option>";
	}
	if(empty($nombrela)==false&&empty($apellidola)==false&&empty($duila)==true&&empty($telefonola)==false&&empty($ocupacionla)==false){
	$laboral=$laboral."<option value=\"$nombrela $apellidola  $telefonola $ocupacionla Laborales\">".$nombrela." ".$apellidola." ------ ".$telefonola." ------ ".$ocupacionla."</option>";
	}
	if(empty($nombrela)==false&&empty($apellidola)==false&&empty($duila)==false&&empty($telefonola)==false&&empty($ocupacionla)==false){
	$laboral=$laboral."<option value=\"$nombrela $apellidola $duila $telefonola $ocupacionla Laborales\">".$nombrela." ".$apellidola." ------ ".$duila." ------ ".$telefonola." ------ ".$ocupacionla."</option>";
	}	
	$x++;
}
$experiencias="";
$sql = "SELECT * FROM `experiencias` WHERE `id`=\"$id\"";
$ejecutarconsulta=@mysql_query($sql,$conexion);
$x=0;
while($datospersonales=@mysql_fetch_array($ejecutarconsulta)){
	$empresa=utf8_encode($datospersonales['empresa']);
	$puesto=utf8_encode($datospersonales['puesto']);
	$periodoinicioe=$datospersonales["periodoinicio"];
	$periodofinale=$datospersonales["periodofinal"];
	
	if(empty($empresa)==false&&empty($puesto)==true&&empty($periodoinicioe)==true&&empty($periodofinale)==true){
	$experiencias=$experiencias."<option value=\"$empresa\">".$empresa."</option>";
	}
	if(empty($empresa)==false&&empty($puesto)==false&&empty($periodoinicioe)==true&&empty($periodofinale)==true){
	$experiencias=$experiencias."<option value=\"$empresa $puesto\">".$empresa." ------ ".$puesto."</option>";
	}
	if(empty($empresa)==false&&empty($puesto)==true&&empty($periodoinicioe)==false&&empty($periodofinale)==true){
	$experiencias=$experiencias."<option value=\"$empresa  $periodoinicioe\">".$empresa." ------ ".$periodoinicioe."</option>";
	}
	if(empty($empresa)==false&&empty($puesto)==false&&empty($periodoinicioe)==false&&empty($periodofinale)==true){
	$experiencias=$experiencias."<option value=\"$empresa $puesto $periodoinicioe\">".$empresa." ------ ".$puesto." ------ ".$periodoinicioe."</option>";
	}
	if(empty($empresa)==false&&empty($puesto)==false&&empty($periodoinicioe)==false&&empty($periodofinale)==false){
	$experiencias=$experiencias."<option value=\"$empresa $puesto $periodoinicioe $periodofinale\">".$empresa." ------ ".$puesto." ------ ".$periodoinicioe." - ".$periodofinale."</option>";
	}
	if(empty($empresa)==false&&empty($puesto)==true&&empty($periodoinicioo)==false&&empty($periodofinalo)==false){
	$experiencias=$experiencias."<option value=\"$empresa  $periodoinicioe $periodofinale\">".$empresa." ------ ".$periodoinicioe." - ".$periodofinale."</option>";
	}
	$x++;
}

mysql_close();



?>