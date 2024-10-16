<?php
require('fpdf.php');
include("../php/clase-basededatos/basededatos.php");
class PDF extends FPDF{
function Footer(){
	$this->SetY(-15);
	$this->SetFont('Times','I',9);
	$this->Cell(0,10,'Pagina '.$this->PageNo().'/{nb}',0,0,'C');
}
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
$pdf->Ln(20);
$pdf->SetFont('Times','B',16);
$pdf->Cell(190,6,'Lista de procesos de seleccion','B',0,'C');
$pdf->Ln(13);
$pdf->SetFont('Times','',12);
$pdf->SetFillColor(240,255,255);

$fecha=$_POST['select'];
$sql = "SELECT * FROM `procesos` where fechainicial='$fecha' ORDER BY ordenprocesos ASC ";
$ejecutarconsulta=@mysql_query($sql,$conexion);
while($datospersonales=@mysql_fetch_row($ejecutarconsulta)){
$pdf->SetX(15);	
$pdf->Cell(130,5,'Fecha Inicial: '.$datospersonales[0],0,0,'L',1);
$pdf->Ln(5);
$pdf->SetX(15);	
$pdf->Cell(130,5,'Fecha Final: '.$datospersonales[1],'B',0,'L',1);
$pdf->Ln(5);
$pdf->SetX(15);	
$pdf->Cell(35,5,'Lugar de la plaza: '.$datospersonales[2],0,0,'L');
$pdf->Ln(5);
$pdf->SetX(15);	
$pdf->Cell(35,5,'Plaza de trabajo: '.$datospersonales[3],0,0,'L');
$pdf->Ln(5);
$pdf->SetX(15);	
$pdf->Cell(35,5,'Fecha de la evaluacion psicologia: '.$datospersonales[4],0,0,'L');
$pdf->Ln(5);
$pdf->SetX(15);	
$pdf->Cell(35,5,'Fecha de la entrevista: '.$datospersonales[5],0,0,'L');
$pdf->Ln(5);
$pdf->SetX(15);	
$pdf->Cell(35,5,'Fecha del analisis curricular: '.$datospersonales[6],0,0,'L');
$pdf->Ln(5);
$pdf->SetX(15);	
$pdf->Cell(35,5,'Fecha de la prueba tecnica: '.$datospersonales[7],0,0,'L');
$pdf->Ln(7);
$pdf->SetX(15);	
$pdf->Cell(35,5,'Participantes del proceso de seleccion:',0,0,'L');
$pdf->Ln(5);
$pdf->SetX(15);	
$sql2 = "SELECT personal, cargo FROM `participantes` where fechainicial='$datospersonales[0]'";
$ejecutarconsulta2=@mysql_query($sql2,$conexion);
while($datospersonale=@mysql_fetch_row($ejecutarconsulta2)){
$pdf->Cell(35,5,'    *'.$datospersonale[0],0,0,'L');
$pdf->Cell(35,5,"                                          ".$datospersonale[1],0,0,'L');
$pdf->Ln(5);
$pdf->SetX(15);	
}
$pdf->Ln(2);
$pdf->SetX(15);	
$pdf->Cell(35,5,'Aspirantes seleccionados para la plaza del proceso de seleccion:',0,0,'L');
$pdf->Ln(5);
$pdf->SetX(15);	
$sql2 = "SELECT nombre,apellido, ganador FROM listaseleccionada, persona WHERE persona.`id`=listaseleccionada.`idpersona` AND listaseleccionada.`fechainicial`='$datospersonales[0]'";
$ejecutarconsulta2=@mysql_query($sql2,$conexion);
$relleno=0;
while($datospersonale=@mysql_fetch_row($ejecutarconsulta2)){
	if($datospersonale[2]=='Ganador'){
		$relleno=1;
		}
		else{
			$relleno=0;
		}
$pdf->Cell(80,5,utf8_decode('   »').$datospersonale[0]." ".$datospersonale[1],0,0,'L',$relleno);
$pdf->Cell(30,5,"            ".$datospersonale[2],0,0,'L',$relleno);
$pdf->Ln(5);
$pdf->SetX(15);	
}
$pdf->Ln(10);
}
$pdf->Output("Lista de procesos de seleccion.pdf","I");
?>
