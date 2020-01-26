<?php
$NOM=$_POST["NOM"]; 
$PRENOM=$_POST["PRENOM"]; 
$DATENAISSANCE=$_POST["DATENAISSANCE"]; 
$DATE1ERSEA=$_POST["DATE1ERSEA"]; 
$NBRS=$_POST["NBRS"]; 

require_once('../tcpdf/GRH1.php');
$pdf = new GRH1('P', 'mm', 'A4', true, 'UTF-8', false);
$pdf->entetecertificat($_POST["idp"],$_POST["NOM"],$_POST["PRENOM"],$pdf->dateUS2FR($_POST["DATENAISSANCE"]),$_POST["NBRS"],$pdf->dateUS2FR($_POST["DATE1ERSEA"]),$_POST["PA"]);




$pdf->Output();
?>
