<?php
require_once('../tcpdf/GRH1.php');
$pdf = new GRH1('P', 'mm', 'A4', true, 'UTF-8', false);
$pdf->CSEJOUR($_GET["idp"]);
$pdf->Output();
?>
