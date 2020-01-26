<?php
require_once('../tcpdf/GRH1.php');
//***************************post*************************//
$pdf = new GRH1('P', 'mm', 'A4', true, 'UTF-8', false);
$pdf->entete();
$pdf->titre($_GET["idp"]);
$pdf->Output();

?>
