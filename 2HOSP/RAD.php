<?php
require_once('../tcpdf/config/lang/eng.php');
require_once('../tcpdf/tcpdf.php');
require_once('../tcpdf/GP.php');

$NOM=$_POST["NOM"];             
$PRENOM=$_POST["PRENOM"];        

//EXAMENS RADIOLOGIQUE 
$ER1=$_POST["ER1"];
$ER2=$_POST["ER2"];
$ER3=$_POST["ER3"];
$ER4=$_POST["ER4"];
$ER5=$_POST["ER5"];
$INC1=$_POST["INC1"];
$INC2=$_POST["INC2"];
$INC3=$_POST["INC3"];
$INC4=$_POST["INC4"];
$INC5=$_POST["INC5"];
// create new PDF document
$pdf = new GP('P', 'mm', 'A5', true, 'UTF-8', false);
$dateeuro=date('d/m/Y');
$pdf->enteterx($dateeuro);
//********************************************************************//
$pdf->SetTextColor(225,0,0);
$pdf->SetFont('aefurat', '', 12);
$pdf->Text(45,64,$NOM."  ".$PRENOM);
// $pdf->Text(45,69,$DATENAISSANCE);
$pdf->Text(45,75,$pdf->nbrtostring("grh","service","ids",$_POST["SERVICEHOSP"],"servicefr"));
//$pdf->Text(109,69,$AGE);
$pdf->Text(10,110,$ER1.":".$INC1);
$pdf->Text(10,120,$ER2.":".$INC2);
$pdf->Text(10,130,$ER3.":".$INC3);
$pdf->Text(10,140,$ER4.":".$INC4);
$pdf->Text(10,150,$ER5.":".$INC5);
$pdf->SetTextColor(0,0,255);
$pdf->Output();

?>
