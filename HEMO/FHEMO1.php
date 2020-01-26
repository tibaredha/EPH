<?php
// $NOM=$_POST["NOM"]; 
// $PRENOM=$_POST["PRENOM"]; 
// $DATENAISSANCE=$_POST["DATENAISSANCE"]; 
// $DATE1ERSEA=$_POST["DATE1ERSEA"]; 
// $GROUPAGE=$_POST["GROUPAGE"]; 
// $rhesus=$_POST["rhesus"]; 
// $CAUSEMALAD=$_POST["CAUSEMALAD"]; 
$idp=$_GET["idp"]; 
require_once('../tcpdf/GRH1.php');
$pdf = new GRH1('P', 'mm', 'A4', true, 'UTF-8', false);
$pdf->SetFillColor(230);    //fond gris il faut ajouter au cell un autre parametre pour qui accepte la coloration
$pdf->SetTextColor(0,0,0);  //text noire
$pdf->setPrintHeader(false);
$pdf->setPrintFooter(false);
$pdf->SetFont('aefurat', '', 12);
//$pdf->DEMHOS($MEDECIN,$SERVICE,$NOM,$PRENOM,$SEXE,$DATENAISSANCE,$dgc,$NLIT,$WILAYAR,$COMMUNER,$ADRESSE);
$pdf->fichenavettehd($_GET["idp"]);
$pdf->Output();
?>
