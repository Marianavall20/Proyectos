
<?php
require'pdf/fpdf.php';
class PDF extends FPDF{

function Header()
{

 
   $this->SetFont('Arial', 'B', '15');
   $this->Cell(90);
   $this->Cell(180, 20,  'Contrato de trabajo indefinido', 10, 10, 'c');
   $this->Cell(-15);
   $this->SetFontSize(12);
   $this->Image('../../imgadmin/contrato.png',10,10,-100);
   $this->Ln(20);

}

function Footer(){
	$this->SetY(-15);
	$this->SetFont('Arial', 'I', 8);
	$this->Cell(0,10,'Page '.$this->PageNo().'',0,0,'C');

}




}
?>
