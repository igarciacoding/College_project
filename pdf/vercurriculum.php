<?php
$idpersona="";
if(empty($_POST['listausuarios'])==true){
if(empty($_POST['CampoDui'])==true){
	$idpersona=mysql_real_escape_string($_POST['CampoPasaporte']);
	}else{
	$idpersona=mysql_real_escape_string($_POST['CampoDui']);	
}
}
else{
$id=$_POST['listausuarios'];
$idpersona=$id[0];		
}
require('fpdf.php');
include("../php/clase-basededatos/basededatos.php");
class PDF extends FPDF{
function Footer(){
	$this->SetY(-15);
	$this->SetFont('Times','I',9);
	$this->Cell(0,10,'Pagina '.$this->PageNo().'/{nb}',0,0,'C');
}
function institucionesacademicas($muestra, $value, $titulo){
	if(count($muestra)!=0){
		if($titulo!=""){
		$this->SetFont('Times','B',14);
		$this->Ln(5);
		$this->Cell(10);
		$this->Cell(160,5,$titulo,'B',0,'L');
		}
		$this->Ln(8);
		$this->SetFont('Times','',12);
		if($value!=""){
			for($i=0;$i<count($muestra);$i++){
				$this->Cell(10);
				$this->Cell(150,8,'* '.$muestra[$i],0,'L');
				$this->Ln(6);
				$this->Cell(10);
				$this->MultiCell(175,5,'   '.$value[$i],0,'L');
				}
			}else{
			for($i=0;$i<count($muestra);$i++){
				$this->Cell(10);
				$this->MultiCell(175,5,'* '.$muestra[$i],0,'L');
				}	
			}
		}
	}
}




$sql = "SELECT * FROM `persona` WHERE `id`=\"$idpersona\"";
$ejecutarconsulta=@mysql_query($sql,$conexion);
$datospersonales=@mysql_fetch_row($ejecutarconsulta);

$nombres=$datospersonales[1];	
$apellidos=$datospersonales[2];
$sexo=$datospersonales[9];
$estadocivil=$datospersonales[12];
$departamento=$datospersonales[10];
$fecha=$datospersonales[11];
$nit=$datospersonales[4];
$dui=$datospersonales[3];
$afp=$datospersonales[5];
$isss=$datospersonales[8];
$pasaporte=$datospersonales[6];
$direccion=$datospersonales[7];



$telefonosmuestra=array();
$sql = "SELECT * FROM `telefono` WHERE `id`=\"$idpersona\"";
$ejecutarconsulta=@mysql_query($sql,$conexion);
$x=0;
while($datospersonales=@mysql_fetch_array($ejecutarconsulta)){
	$telefonosmuestra[$x]=$datospersonales["telefono"];
	$x++;
}

$emailsmuestra=array();
$sql = "SELECT * FROM `email` WHERE `id`=\"$idpersona\"";
$ejecutarconsulta=@mysql_query($sql,$conexion);
$x=0;
while($datospersonales=@mysql_fetch_array($ejecutarconsulta)){
	$emailsmuestra[$x]=$datospersonales["email"];
	$x++;
}
$escuelamuestra=array();
$sql = "SELECT * FROM `educacionbasica` WHERE `id`=\"$idpersona\" ORDER BY 4 ASC";
$ejecutarconsulta=@mysql_query($sql,$conexion);
$x=0;
while($datospersonales=@mysql_fetch_array($ejecutarconsulta)){
	if(empty($datospersonales["periodoinicio"])==true&&empty($datospersonales["periodofinal"])==true){
	$escuelamuestra[$x]=$datospersonales["centroescolar"];	
	}
	if(empty($datospersonales["periodoinicio"])==false&&empty($datospersonales["periodofinal"])){
	$escuelamuestra[$x]=$datospersonales["centroescolar"]." ---------- ".$datospersonales["periodoinicio"];	
	}
	if(empty($datospersonales["periodoinicio"])==false&&empty($datospersonales["periodofinal"])==false){
	$escuelamuestra[$x]=$datospersonales["centroescolar"]." ---------- ".$datospersonales["periodoinicio"]." - ".$datospersonales["periodofinal"];	
	}
	$x++;
}

$bachilleratomuestra=array();
$bachilleratovalue=array();
$sql = "SELECT * FROM `educacionmedia` WHERE `id`=\"$idpersona\" ORDER BY 5 ASC";
$ejecutarconsulta=@mysql_query($sql,$conexion);
$x=0;
while($datospersonales=@mysql_fetch_array($ejecutarconsulta)){
	$bachilleratomuestra[$x]=$datospersonales["bachillerato"];
	$bachilleratovalue[$x]="";
	if($datospersonales["tipobachillerato"]!=''){
		$bachilleratovalue[$x]=$bachilleratovalue[$x].$datospersonales["tipobachillerato"];
		if($datospersonales["periodoinicio"]!=''){
			$bachilleratovalue[$x]=$bachilleratovalue[$x]." --------- ".$datospersonales["periodoinicio"];
			if($datospersonales["periodofinal"]!=''){
				$bachilleratovalue[$x]=$bachilleratovalue[$x]." - ".$datospersonales["periodofinal"];
				}
			}
	  }
	 else{
		 if($datospersonales["periodoinicio"]!=''){
			$bachilleratovalue[$x]=$bachilleratovalue[$x].$datospersonales["periodoinicio"];
			if($datospersonales["periodofinal"]!=''){
				$bachilleratovalue[$x]=$bachilleratovalue[$x]." - ".$datospersonales["periodofinal"];
				}
			}
		 }
	$x++;
}

$universidadmuestra=array();
$universidadvalue=array();
$sql = "SELECT * FROM `educacionsuperior` WHERE `id`=\"$idpersona\" ORDER BY 5 ASC";
$ejecutarconsulta=@mysql_query($sql,$conexion);
$x=0;
while($datospersonales=@mysql_fetch_array($ejecutarconsulta)){
	$universidadmuestra[$x]=$datospersonales["universidad"];
	$universidadvalue[$x]="";
	if($datospersonales["carrera"]!=''){
		$universidadvalue[$x]=$universidadvalue[$x].$datospersonales["carrera"];
		if($datospersonales["periodoinicio"]!=''){
			$universidadvalue[$x]=$universidadvalue[$x]." --------- ".$datospersonales["periodoinicio"];
			if($datospersonales["periodofinal"]!=''){
				$universidadvalue[$x]=$universidadvalue[$x]." - ".$datospersonales["periodofinal"];
				}
			}
	  }
	 else{
		 if($datospersonales["periodoinicio"]!=''){
			$universidadvalue[$x]=$universidadvalue[$x].$datospersonales["periodoinicio"];
			if($datospersonales["periodofinal"]!=''){
				$universidadvalue[$x]=$universidadvalue[$x]." - ".$datospersonales["periodofinal"];
				}
			}
		 }
	$x++;
}

$otrosmuestra=array();
$otrosvalue=array();
$sql = "SELECT * FROM `otrosestudios` WHERE `id`=\"$idpersona\" ORDER BY 5 ASC";
$ejecutarconsulta=@mysql_query($sql,$conexion);
$x=0;
while($datospersonales=@mysql_fetch_array($ejecutarconsulta)){
	$otrosmuestra[$x]=$datospersonales["institucion"];
	$otrosvalue[$x]="";
	if($datospersonales["tipoestudio"]!=''){
		$otrosvalue[$x]=$otrosvalue[$x].$datospersonales["tipoestudio"];
		if($datospersonales["periodoinicio"]!=''){
			$otrosvalue[$x]=$otrosvalue[$x]." --------- ".$datospersonales["periodoinicio"];
			if($datospersonales["periodofinal"]!=''){
				$otrosvalue[$x]=$otrosvalue[$x]." - ".$datospersonales["periodofinal"];
				}
			}
	  }
	 else{
		 if($datospersonales["periodoinicio"]!=''){
			$otrosvalue[$x]=$otrosvalue[$x].$datospersonales["periodoinicio"];
			if($datospersonales["periodofinal"]!=''){
				$otrosvalue[$x]=$otrosvalue[$x]." - ".$datospersonales["periodofinal"];
				}
			}
		 }
	$x++;
}

$referenciasmuestrarp=array();
$referenciasmuestraocupacionrp=array();
$sql = "SELECT * FROM `referencias` WHERE `id`=\"$idpersona\" and tipo='Personal'";
$ejecutarconsulta=@mysql_query($sql,$conexion);
$x=0;
while($datospersonales=@mysql_fetch_array($ejecutarconsulta)){
$referenciasmuestrarp[$x]=$datospersonales["nombres"]." ".$datospersonales["apellidos"];

if($datospersonales["dui"]!=''){
	$referenciasmuestrarp[$x]=$referenciasmuestrarp[$x]." --------- ".$datospersonales["dui"];
	if($datospersonales["telefono"]!=''){
		$referenciasmuestrarp[$x]=$referenciasmuestrarp[$x]." --------- ".$datospersonales["telefono"];
		}
   }else{
	if($datospersonales["telefono"]!=''){
		$referenciasmuestrarp[$x]=$referenciasmuestrarp[$x]." --------- ".$datospersonales["telefono"];
		}   
   }
$referenciasmuestraocupacionrp[$x]=$datospersonales["ocupacion"];
	$x++;
}
$referenciasmuestrarl=array();
$referenciasmuestraocupacionrl=array();
$sql = "SELECT * FROM `referencias` WHERE `id`=\"$idpersona\" and tipo='Laborales'";
$ejecutarconsulta=@mysql_query($sql,$conexion);
$x=0;
while($datospersonales=@mysql_fetch_array($ejecutarconsulta)){
$referenciasmuestrarl[$x]=$datospersonales["nombres"]." ".$datospersonales["apellidos"];	
if($datospersonales["dui"]!=''){
	$referenciasmuestrarl[$x]=$referenciasmuestrarl[$x]." --------- ".$datospersonales["dui"];
	if($datospersonales["telefono"]!=''){
		$referenciasmuestrarl[$x]=$referenciasmuestrarl[$x]." --------- ".$datospersonales["telefono"];
		}
   }else{
	if($datospersonales["telefono"]!=''){
		$referenciasmuestrarl[$x]=$referenciasmuestrarl[$x]." --------- ".$datospersonales["telefono"];
		}   
   }
$referenciasmuestraocupacionrl[$x]=$datospersonales["ocupacion"];
	$x++;
}
$experienciasmuestra=array();
$experienciasvalue=array();
$sql = "SELECT * FROM `experiencias` WHERE `id`=\"$idpersona\" ORDER BY 5 ASC";
$ejecutarconsulta=@mysql_query($sql,$conexion);
$x=0;
while($datospersonales=@mysql_fetch_array($ejecutarconsulta)){
$experienciasmuestra[$x]=$datospersonales["empresa"];
	$experienciasvalue[$x]="";
	if($datospersonales["puesto"]!=''){
		$experienciasvalue[$x]=$experienciasvalue[$x].$datospersonales["puesto"];
		if($datospersonales["periodoinicio"]!=''){
			$experienciasvalue[$x]=$experienciasvalue[$x]." --------- ".$datospersonales["periodoinicio"];
			if($datospersonales["periodofinal"]!=''){
				$experienciasvalue[$x]=$experienciasvalue[$x]." - ".$datospersonales["periodofinal"];
				}
			}
	  }
	 else{
		 if($datospersonales["periodoinicio"]!=''){
			$experienciasvalue[$x]=$experienciasvalue[$x].$datospersonales["periodoinicio"];
			if($datospersonales["periodofinal"]!=''){
				$experienciasvalue[$x]=$experienciasvalue[$x]." - ".$datospersonales["periodofinal"];
				}
			}
		 }
	$x++;
}

$pdf = new PDF();
$pdf->AliasNbPages();
$pdf->AddPage();
$pdf->Image('../images/LogoPais.png',14,12,30);
$pdf->Image('../images/LogoGobierno.jpg',154,12,45);
$pdf->SetFont('Times','B',17);
$pdf->Cell(175,20,'Ministerio de Salud',0,0,'C');
$pdf->SetFont('Times','',13);
$pdf->Ln(5);
$pdf->Cell(175,20,'Direccion Regional de Salud Occidental',0,0,'C');
$pdf->Ln(5);
$pdf->Cell(175,20,'Departamento de Recursos Humanos',0,0,'C');
$pdf->Ln(5);
$pdf->Cell(175,20,'Seleccion de Recursos Humanos',0,0,'C');
$pdf->Ln(5);
$pdf->Cell(175,20,'Curriculum Vitae',0,0,'C');
$pdf->Ln(42);
$pdf->SetFont('Times','B',14);
$pdf->Cell(4);
$pdf->Cell(186,5,"                                                                                ".$nombres.' '.$apellidos,'B',0,'L');
$pdf->Ln(20);
$pdf->SetFont('Times','B',16);
$pdf->Cell(190,6,'Datos Personales','B',0,'L');
$pdf->Ln(13);
$pdf->SetFont('Times','',12);
$pdf->Cell(35,5,'  Sexo: '.$sexo,0,0,'L');
$pdf->Ln(6);
$pdf->Cell(35,5,'  Estado Familiar: '.$estadocivil,0,0,'L');
$pdf->Ln(6);
$pdf->Cell(35,5,'  Departamento: '.$departamento,0,0,'L');
$pdf->Ln(6);
$pdf->Cell(35,5,'  Fecha de Nacimiento: '.$fecha,0,0,'L');
$pdf->Ln(6);
$pdf->Cell(35,5,'  NIT: '.$nit,0,0,'L');
$pdf->Ln(6);
$pdf->Cell(35,5,'  DUI: '.$dui,0,0,'L');
$pdf->Ln(6);
if($afp!=""){
$pdf->Cell(35,5,'  AFP: '.$afp,0,0,'L');
$pdf->Ln(6);
}
if($isss!=""){
$pdf->Cell(35,5,'  ISSS: '.$isss,0,0,'L');
$pdf->Ln(6);
}
if($pasaporte!=""){
$pdf->Cell(35,5,'  Pasaporte: '.$pasaporte,0,0,'L');
$pdf->Ln(6);
}
$pdf->Cell(2);
$pdf->MultiCell(180,5,'Direccion: '.$direccion);
$pdf->Ln(1);
$pdf->Cell(21,5,'  Telefonos:',0,0,'L');
for($i=0;$i<count($telefonosmuestra);$i++){
	if($i==0){
		$pdf->Cell(0,5," ".$telefonosmuestra[$i],0,0,'L');
	}else{
		$pdf->Cell(63,5,$telefonosmuestra[$i],0,0,'C');
		}
if(count($telefonosmuestra)-$i>1){		
$pdf->Ln(6);	
}	
}
$pdf->Ln(6);	
if(count($emailsmuestra)!=0){
$pdf->Cell(16,5,'  Emails:',0,0,'L');
for($i=0;$i<count($emailsmuestra);$i++){
	if($i==0){
		$pdf->Cell(0,5,$emailsmuestra[$i],0,0,'L');
	}else{
		$pdf->Cell(66,5,"               ".$emailsmuestra[$i],0,0,'L');
		}
if(count($emailsmuestra)-$i>1){		
$pdf->Ln(6);	}
}		
}
$pdf->Ln(12);


if(count($escuelamuestra)!=0||count($bachilleratomuestra)!=0||count($universidadmuestra)!=0||count($otrosmuestra)!=0){
$pdf->SetFont('Times','B',16);
$pdf->Cell(190,6,'Formacion Academica','B',0,'L');
$pdf->Ln(8);
$pdf->institucionesacademicas($escuelamuestra,"", "Educacion Basica");
$pdf->institucionesacademicas($bachilleratomuestra,$bachilleratovalue, "Educacion Media");
$pdf->institucionesacademicas($universidadmuestra,$universidadvalue, "Educacion Superior");
$pdf->institucionesacademicas($otrosmuestra,$otrosvalue, "Otros Estudios");	
}
if(count($referenciasmuestrarp)!=0){
$pdf->SetFont('Times','B',16);
$pdf->Ln(5);
$pdf->Cell(190,5,'Referencias Personales','B',0,'L');
$pdf->institucionesacademicas($referenciasmuestrarp,$referenciasmuestraocupacionrp, "");
}
if(count($referenciasmuestrarl)!=0){
$pdf->SetFont('Times','B',16);
$pdf->Ln(5);
$pdf->Cell(190,5,'Referencias Laborales','B',0,'L');
$pdf->institucionesacademicas($referenciasmuestrarl,$referenciasmuestraocupacionrl, "");
}
if(count($experienciasmuestra)!=0){	
$pdf->SetFont('Times','B',16);
$pdf->Ln(5);
$pdf->Cell(190,5,'Experiencias Laborales','B',0,'L');
$pdf->institucionesacademicas($experienciasmuestra,$experienciasvalue, "");
}
$pdf->Output($nombres." ".$apellidos.".pdf","I");
?>
