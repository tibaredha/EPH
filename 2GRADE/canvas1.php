<?php
require_once('../tcpdf/GRH1.php');
$colone=159;
$pdf=new GRH1('L','cm','A4');
$pdf->setPrintHeader(false);
$pdf->setPrintFooter(false);
$pdf->SetDisplayMode('fullpage','single');//mode d affichage 
$pdf->SetFillColor(230); //fond gris il faut ajouter au cell un autre parametre pour qui accepte la coloration
$pdf->SetTextColor(0,0,0);//text noire

for ($i=1; $i<=187; $i++) 
{
$pdf->tabfr1($i);
}
//**********************************************************************************************************************//				 
$pdf->SetXY(13,$pdf->GetY()+1); 	  
$pdf->cell(18,0.5,"ain oussera :"." ".date("d-m-Y"),0,0,'C',0);		
$pdf->SetXY(20,$pdf->GetY()+1); 	  
$pdf->cell(6,0.5,"le directeur",0,0,'C',0);
$pdf->Output();
?>


