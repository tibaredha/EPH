<?php
$IDP=$_POST["id"]; 
$NOM=$_POST["NOM"];             
$PRENOM=$_POST["PRENOM"];        
$SEXE=$_POST["SEXE"];                  
$DATENAISSANCE=$_POST["DATENAISSANCE"];
$AGE=$_POST["AGE"];
$FILS=$_POST["FILS"];
$ETDE=$_POST["ETDE"];
$COMMUNE=$_POST["COMMUNE"];
$WILAYA=$_POST["WILAYA"];
$COMMUNER=$_POST["COMMUNER"];
$WILAYAR=$_POST["WILAYAR"];
$ADRESSE=$_POST["ADRESSE"];
$SERVICEHOSP=$_POST["SERVICEHOSP"];
$PRATICIEN=$_POST["PRATICIEN"];
$dateeuro=date('d/m/Y');
$dateeuro1=date('H:i');
// la fonction marche bien 
function datePlus($dateDo,$nbrJours)
{$timeStamp = strtotime($dateDo); 
$timeStamp += 24 * 60 * 60 * $nbrJours;
$newDate = date("Y-m-d", $timeStamp);
return  $newDate;
}
//********************************************************************//
require_once('../tcpdf/config/lang/eng.php');
require_once('../tcpdf/tcpdf.php');
require_once('../tcpdf/GP.php');

$dateeuro=date('d/m/Y');
$dateeuro1=date('H:i');
$pdf = new GP( 'L', 'mm', 'A4' );
$pdf->entetesur($dateeuro,$SERVICEHOSP);
$pdf->Rect(4,35,290,160,"d");//$pdf->Rect(x,y,l,hauteure,"d");
//ligne horizentale des temperature 
// for($i=35;$i<=42;$i +=1) 
// {
// $pdf->Text(7,$i+55,$i."°");
// }
// $pdf->Text(6,68,"la date :");
$pdf->Text(7,75,"T°");
$pdf->Text(7,80,"42°");
$pdf->Text(7,85,"41°");
$pdf->Text(7,90,"40°");
$pdf->Text(7,95,"39°");
$pdf->Text(7,100,"38°");
$pdf->Text(7,105,"37°");
$pdf->Text(7,110,"36°");
$pdf->Text(7,115,"35°");
// $pdf->Text(17,75,"TA");$pdf->Text(27,75,"DU");
//***********************************************************************************//
//ligne horizentale des dates 
for($i=0;$i<=25;$i +=1) 
{
$pdf->Text($i."3"+34,64,substr(datePlus(date('Y/m/d'),$i),8,2));
}

//variables
$pdf->SetTextColor(225,0,0);
$pdf->Text(15,30,$NOM);
$pdf->Text(65,30,$PRENOM);
$pdf->Text(130,30,$DATENAISSANCE);
$pdf->Text(179,30,$AGE);
$pdf->Text(218,30,$dateeuro);
$pdf->Text(275,30,$dateeuro1);
$pdf->SetTextColor(0,0,255);
$pdf->Output();

?>


