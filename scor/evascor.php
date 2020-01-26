<?php
require('../PDF/fpdf.php');
require('../PDF/fpdi.php');
$pdf = new FPDI();
$pdf->AddPage();
$pdf->setSourceFile('../PDF/eseva.pdf');
$tplIdx = $pdf->importPage(1);
$pdf->useTemplate($tplIdx, 5, 5, 200);
$pdf->SetFont('Arial','B',10);
$pdf->SetTextColor(255,0,0);
$pdf->SetXY(43,52.5);
$pdf->Write(0,"Djelfa");
$pdf->Output();
?>


