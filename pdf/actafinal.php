<?php
require('fpdf.php');
include("../php/clase-basededatos/basededatos.php");
$Plaza=$_POST["plazas"];
$Participante1=ucwords(strtolower($_POST["nombre1"]));
$Cargo1=ucwords(strtolower($_POST["cargo1"]));
$Participante2=ucwords(strtolower($_POST["nombre2"]));
$Cargo2=ucwords(strtolower($_POST["cargo2"]));
$Participante3=ucwords(strtolower($_POST["nombre3"]));
$Cargo3=ucwords(strtolower($_POST["cargo3"]));
$CampoDepartament=$_POST["lugar"];
$CampoFechaSeleccionInicial=$_POST["fechainicial"];
$CampoFechaSeleccionFinal=$_POST["fechafinal"];
$FechaInicial= explode("dia",$CampoFechaSeleccionInicial);
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
$pdf->Ln(20);
$pdf->SetFont('Times','B',11);
$pdf->Cell(190,6,strtr(strtoupper(utf8_decode("ACTA DE FINALIZACIÓN DE PROCESO DE SELECCIÓN PARA PLAZA DE")),"àáâãäåæçèéêëìíîïðñòóôõöøùüú", "ÀÁÂÃÄÅÆÇÈÉÊËÌÍÎÏÐÑÒÓÔÕÖØÙÜÚ"),0,1,'C');
$pdf->Cell(190,6,strtr(strtoupper(utf8_decode($Plaza)),"àáâãäåæçèéêëìíîïðñòóôõöøùüú", "ÀÁÂÃÄÅÆÇÈÉÊËÌÍÎÏÐÑÒÓÔÕÖØÙÜÚ"),0,1,'C');
$pdf->Ln(5);
$pdf->SetFont('Times','',12);
$pdf->SetX(19);
$pdf->MultiCell(173,5,('Santa Ana, a las '.$CampoFechaSeleccionFinal.'. Reunidos en la Oficina de Recursos Humanos de la Region de Salud Occidental, la comision de seleccion de personal, conformada por '.utf8_decode($Participante1).', '.utf8_decode($Cargo1).', '.utf8_decode($Participante2).', '.utf8_decode($Cargo2).', y '.utf8_decode($Participante3).', '.utf8_decode($Cargo3).', con el proposito de Finalizar el proceso de seleccion, a efecto de contar con candidatos elegibles para seleccionar aquellos que mejor cumplan con los requisitos establecidos en el manual Descriptivo de Clases para el puesto de '.utf8_decode($Plaza).', En '.utf8_decode($CampoDepartament). ', conforme a la adecuacion de las ponderaciones de los factores y criterios de seleccion acordados en el acta de fecha'.$FechaInicial[1].', se obtuvieron los resultados que a continuacion se detallan:'));
$pdf->Ln(5);
$pdf->SetFont('Times','',11);
$x=14;
$pdf->SetX($x);
$n=1;
$pdf->SetFillColor(204,204,204);	
$pdf->Cell(11,5,'','LRT',0,'C','1');
$pdf->Cell(38,5,'','LRT',0,'','1');
$pdf->Cell(19,5,'','LRT',0,'','1');
$pdf->Cell(19,5,'Prueba ','LRT',0,'C','1');
$pdf->Cell(19,5,'Prueba','LRT',0,'C','1');
$pdf->Cell(19,5,'Prueba','LRT',0,'C','1');
$pdf->Cell(19,5,'Analisis','LRT',0,'C','1');
$pdf->Cell(12,5,'','LRT',0,'C','1');
$pdf->Cell(26,5,'','LRT',0,'C','1');
$pdf->Ln();
$pdf->SetX($x);
$pdf->Cell(11,5,'','LR',0,'C','1');
$pdf->Cell(38,5,'','LR',0,'','1');
$pdf->Cell(19,5,'DUI/','LR',0,'C','1');
$pdf->Cell(19,5,'Psicologica ','LR',0,'C','1');
$pdf->Cell(19,5,'Tecnica','LR',0,'C','1');
$pdf->Cell(19,5,'Entrevista','LR',0,'C','1');
$pdf->Cell(19,5,'Curricular','LR',0,'C','1');
$pdf->Cell(12,5,'Nota','LR',0,'C','1');
$pdf->Cell(26,5,'','LR',0,'C','1');
$pdf->Ln();
$pdf->SetX($x);
$pdf->Cell(11,10,utf8_decode('N°'),'LRB',0,'C','1');
$pdf->Cell(38,10,'Nombre','LRB',0,'C','1');
$pdf->Cell(19,10,'Pasaporte','LRB',0,'C','1');
$pdf->Cell(10,10,'Nota',1,0,'C','1');
$pdf->Cell(9,10,'20%',1,0,'C','1');
$pdf->Cell(10,10,'Nota',1,0,'C','1');
$pdf->Cell(9,10,'40%',1,0,'C','1');
$pdf->Cell(10,10,'Nota',1,0,'C','1');
$pdf->Cell(9,10,'10%',1,0,'C','1');
$pdf->Cell(10,10,'Nota',1,0,'C','1');
$pdf->Cell(9,10,'30%',1,0,'C','1');
$pdf->Cell(12,10,'Global','LRB',0,'C','1');
$pdf->Cell(26,10,"Observaciones",'LRB',0,'C','1');
$pdf->Ln();
$y=140;
$pdf->SetFillColor(240,255,255);
$listausuarios=$_POST["listausuarios"];
$CampoNumero=$_POST["CampoNumero"];
$relleno=1;
for($x=0;$x<$CampoNumero;$x++){
	if($n>3){
		$relleno=0;
		}
$idpersona=$listausuarios[$x];
$sql = "SELECT nombre, apellido, estudios, experiencia, referencia, personalidad, inteligencia, calificacioncurriculum.`nota` , escrita, persona.nota   FROM persona, calificacioncurriculum WHERE persona.`id`=\"$idpersona\" AND calificacioncurriculum.`id`=\"$idpersona\" ";
$ejecutarconsulta=@mysql_query($sql,$conexion);
while($datospersonales=@mysql_fetch_row($ejecutarconsulta)){
$pdf->SetX(14);		
$pdf->Cell(11,10,$n,'1',0,'C',$relleno);
$pdf->Cell(38,5,$datospersonales[0],'LRT',0,'C',$relleno);
$pdf->Cell(19,10,$idpersona,'1',0,'C',$relleno);
$pdf->Cell(10,10,(real)($datospersonales[5]+$datospersonales[6])/2,'1',0,'C',$relleno);
$pdf->Cell(9,10,$datospersonales[5]*0.10+$datospersonales[6]*0.10,'1',0,'C',$relleno);
$pdf->Cell(10,10,$datospersonales[7],'1',0,'C',$relleno);
$pdf->Cell(9,10,$datospersonales[7]*0.40,'1',0,'C',$relleno);
$pdf->Cell(10,10,$datospersonales[8],'1',0,'C',$relleno);
$pdf->Cell(9,10,$datospersonales[8]*0.10,'1',0,'C',$relleno);
$pdf->Cell(10,10,round(($datospersonales[2]*0.10+$datospersonales[3]*0.15+$datospersonales[4]*0.05)/0.30,2),'1',0,'C',$relleno);
$pdf->Cell(9,10,$datospersonales[2]*0.10+$datospersonales[3]*0.15+$datospersonales[4]*0.05,'1',0,'C',$relleno);
$pdf->Cell(12,10,$datospersonales[9],'1',0,'C',$relleno);
$pdf->Cell(26,10,"",'1',0,'C',$relleno);
$pdf->Ln(5);
$pdf->SetX(14);
$pdf->Cell(11,5,'','LRB',0,'C');
$pdf->Cell(38,5,$datospersonales[1],'LRB',0,'C',$relleno);
$pdf->Ln();
$n++;
	}
}
$pdf->SetFont('Times','',12);
$pdf->Ln(6);
$pdf->SetX(14);
$pdf->Cell(189,5,('Acta que para constancia Firmamos.'),'0',0,'');
$pdf->Ln(20);
$pdf->SetX(75);
$pdf->MultiCell(60,5,utf8_decode($Cargo1),'T','C');
$pdf->Ln(12);
$pdf->SetX(75);
$pdf->MultiCell(60,6,utf8_decode($Cargo2),'T','C');
$pdf->Ln(12);
$pdf->SetX(75);
$pdf->MultiCell(60,6,utf8_decode($Cargo3),'T','C');
$pdf->Output("Acta Final.pdf","I");
?>
