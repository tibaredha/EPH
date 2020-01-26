<?php
require_once('../tcpdf/GP.php');
$dateeuro=date('d/m/Y');
$pdf = new GP('P', 'mm', 'A5', true, 'UTF-8', false);
$pdf->entete($dateeuro);
$pdf->Text(10,24,"Service :");
$pdf->SetTextColor(225,0,0);
$pdf->SetFont('aefurat', '', 10);
$pdf->Text(25,24,$pdf->nbrtostring("grh","service","ids",$_POST["SERVICEHOSP"],"servicefr"));
$pdf->SetFont('aefurat', '', 12);
$pdf->Text(110,10,$_POST["Poids"]." kg");
$pdf->Text(45,70,$_POST["NOM"]."  ".$_POST["PRENOM"]);
$pdf->Text(112,70,$_POST["AGE"]);
$pdf->Text(30,80,$_POST["ADRESSE"]);
$pdf->Text(15,90,$_POST["MED1"]);$pdf->Text(130,90,$_POST["QUT1"]);
$pdf->Text(35,95,$_POST["DOSE1"]);
$pdf->Text(15,105,$_POST["MED2"]);$pdf->Text(130,105,$_POST["QUT2"]);
$pdf->Text(35,110,$_POST["DOSE2"]);
$pdf->Text(15,120,$_POST["MED3"]);$pdf->Text(130,120,$_POST["QUT3"]);
$pdf->Text(35,125,$_POST["DOSE3"]);
$pdf->Text(15,135,$_POST["MED4"]);$pdf->Text(130,135,$_POST["QUT4"]);
$pdf->Text(35,140,$_POST["DOSE4"]);
$pdf->Text(15,150,$_POST["MED5"]);$pdf->Text(130,150,$_POST["QUT5"]);
$pdf->Text(35,155,$_POST["DOSE5"]);
$pdf->SetTextColor(0,0,255);
$pdf->SetFont('aefurat', '', 10);
$pdf->Output();

?>
