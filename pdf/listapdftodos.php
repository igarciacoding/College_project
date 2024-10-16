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
$pdf->Cell(190,6,'Lista de todas las personas que estan registradas en el sistema','B',0,'C');
$pdf->Ln(13);
$pdf->SetFont('Times','',12);
$pdf->SetFillColor(204,204,204);
$pdf->Cell(33,5,'Nombre completo: ',0,1,'L');
$pdf->Cell(19,5,'Direccion: ',0,1,'L');
$pdf->Cell(49,5,'Plaza en que esta laborando:',0,1,'L');
$pdf->Cell(19,5,'Telefonos:',0,1,'L');
$pdf->Ln(5);
$sql = "SELECT * FROM `persona`";
$relleno=0;
$ejecutarconsulta=@mysql_query($sql,$conexion);
while($datospersonales=@mysql_fetch_array($ejecutarconsulta)){
	if($datospersonales["plaza"]!=""){
		$relleno=1;
		}
		else{
		$relleno=0;	
		}
	$pdf->Cell(50,5,$datospersonales["nombre"]." ".$datospersonales["apellido"],0,1,'L');
	$pdf->MultiCell(160,5,$datospersonales["direccion"]);
	if($datospersonales["plaza"]!=""){
		$pdf->MultiCell(170,5,$datospersonales["plaza"],'','',$relleno);
		}
	
	$id=$datospersonales["id"];
$sql2 = "SELECT * FROM `telefono` where `id`='$id'";
$ejecutarconsulta2=@mysql_query($sql2,$conexion);
while($datospersonales2=@mysql_fetch_array($ejecutarconsulta2)){
	$pdf->Cell(20,5,$datospersonales2["telefono"],'','1');
	}
$pdf->Ln(5);	
	}
$pdf->Output("Lista de todas las personas que estan registradas en el sistema.pdf","I");
?>
