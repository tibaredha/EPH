<?php
require_once('../tcpdf/GRH1.php');
$pdf = new GRH1('P', 'mm', 'A4', true, 'UTF-8', false);
$pdf->PROTOCOLE($_POST["HVB"],$_POST["HVC"],$_POST["HIV"],$_POST["idp"],$_POST["NOM"],$_POST["PRENOM"],$pdf->dateUS2FR($_POST["DATENAISSANCE"]),$_POST["NBRS"],$pdf->dateUS2FR($_POST["DATE1ERSEA"]),$_POST["GROUPAGE"],$_POST["rhesus"],$_POST["CAUSEMALAD"]);
$pdf->Output();
?>
