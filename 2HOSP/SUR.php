<?php

$NOM=$_POST["NOM"];             
$PRENOM=$_POST["PRENOM"];        
// $SEXE=$_POST["SEXE"];                  
// $DATENAISSANCE=$_POST["DATENAISSANCE"];
// $AGE=$_POST["AGE"];
// $FILS=$_POST["FILS"];
// $ETDE=$_POST["ETDE"];
// $COMMUNE=$_POST["COMMUNE"];
// $WILAYA=$_POST["WILAYA"];
// $COMMUNER=$_POST["COMMUNER"];
// $WILAYAR=$_POST["WILAYAR"];
// $ADRESSE=$_POST["ADRESSE"];
$SERVICEHOSP=$_POST["SERVICEHOSP"];
// $PRATICIEN=$_POST["PRATICIEN"];
$dateeuro=date('d/m/Y');
$dateeuro1=date('H:i');
//********************************************************************//
require_once('../tcpdf/config/lang/eng.php');
require_once('../tcpdf/tcpdf.php');
require_once('../tcpdf/GP.php');
$pdf = new GP( 'L', 'mm', 'A4' );
$pdf->entetesur($dateeuro,$SERVICEHOSP);
$pdf->Rect(4,35,290,160,"d");//$pdf->Rect(x,y,l,hauteur,"d");
$pdf->Rect(15,70,10,125,"d");//$pdf->Rect(x,y,l,hauteur,"d");
$pdf->Text(10,63,"la date :"); 
$pdf->Text(7,70,"TE");
$pdf->Text(17,70,"TA");
$pdf->Text(27,70,"DU");
// $pdf->Text(7,80,"42");
// $pdf->Text(7,85,"41");
// $pdf->Text(7,90,"40");
// $pdf->Text(7,95,"39");
// $pdf->Text(7,100,"38");
$pdf->Text(7,105,"37");
//temperature
$i=150;
$pdf-> SetDrawColor(225,0,0);
$pdf->SetLineWidth(1);
$pdf->Line(15 ,$i,294 ,$i );
$pdf->Text(7,$i-3,"37");
$pdf->SetDrawColor(0,0,255);

//ta
$i=130;
$pdf->Line(25,$i,294,$i);
$pdf->Text(17,$i-5,"110");
$pdf->Text(17,$i-10,"120");
$pdf->Text(17,$i-15,"130");
$pdf->Text(17,$i-20,"140");
$pdf->Text(17,$i-25,"150");
$pdf->Text(17,$i-30,"160");
$pdf->Text(17,$i-35,"170");
$pdf->Text(17,$i-40,"180");
$pdf->Text(17,$i-45,"190");
$pdf->Text(17,$i-50,"200");
$pdf->Text(17,$i-55,"210");
$pdf->Text(17,$i,"100");
$pdf->Text(17,$i+5,"090");
$pdf->Text(17,$i+10,"080");
$pdf->Text(17,$i+15,"070");
$pdf->Text(17,$i+20,"060");
$pdf->Text(17,$i+25,"050");
$pdf->Text(17,$i+30,"040");
$pdf->Text(17,$i+35,"030");
$pdf->Text(17,$i+40,"020");
$pdf->Text(17,$i+45,"010");
$pdf->Text(17,$i+50,"000");
$pdf->Text(17,$i+55,"000");







//variables
$pdf->SetTextColor(225,0,0);
$pdf->Text(15,30,$NOM);
$pdf->Text(65,30,$PRENOM);
//$pdf->Text(130,30,$DATENAISSANCE);
//$pdf->Text(179,30,$AGE);
$pdf->Text(218,30,$dateeuro);
$pdf->Text(275,30,$dateeuro1);
$pdf->SetTextColor(0,0,255);
$pdf->Output();
?>


