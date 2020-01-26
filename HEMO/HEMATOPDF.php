<?php
require_once('../tcpdf/GP.php');
$pdf = new GP('L', 'mm', 'A4', true, 'UTF-8', false);
$pdf->SetTextColor(0,0,0);
$pdf->setPrintHeader(false);
$pdf->setPrintFooter(false);
$pdf->SetDisplayMode('fullpage','single');//mode d affichage 
$pdf->AddPage();
$pdf->SetFont('aefurat', '', 10);
$pdf->Text(5,10,"المؤسسة العمومية الاستشفائية عين وسارة");
$pdf->Text(10,15,"ETABLISSEMENT PUBLIC");
$pdf->Text(8,20,"HOSPITALIER AIN OUSSERA");
$pdf->Rect(70+150,5,65,25,"d");
$pdf->Text(85+155,7,"REGISTRE ");
$pdf->Text(83+150,12,"Laboratoire D'Hemodialyse ");
$pdf->Text(83+150,17,"Ain-Oussera le :".date('d-m-Y'));
$pdf->SetFont('aefurat', '', 12);
$pdf->Text(100,30,"REGISTRE LABORATOIRE D'HEMODIALYSE ");
$pdf->SetFont('aefurat', '', 10);
$pdf->bilan(40);
$pdf->Output();
?>
