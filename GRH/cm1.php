<?php
if( $_POST["DC"]!="" )
{
require_once('../tcpdf/GRH1.php');
$pdf = new GRH1('P', 'mm', 'A4', true, 'UTF-8', false);
$pdf->entete();
$idp=$_POST["idp"];
$REMPLACANT="***";
$CC="امومة";
$dif=0;
$pdf->registreconges($_POST["idp"],$_POST["DUREE"],$_POST["DC"],$pdf->datePlus($_POST["DC"],$_POST["DUREE"]),$CC,$REMPLACANT,$dif);
$pdf->maternite();
$pdf->Text(126,180,$_POST["NOM"]." ".$_POST["PRENOM"]);
$pdf->Text(54,190,$_POST["GRADE"]);
$pdf->Text(57,200,$_POST["DC"]);
$pdf->Text(116,200,$pdf->datePlus($_POST["DC"],$_POST["DUREE"]));
$pdf->SetFont('dejavusans','B', 18); //police d ecriture  
$pdf->Output();
}
else
{
$idp=$_POST["idp"];
$Sexe=$_POST["Sexe"];
header("Location: ../index.php?uc=MAT&idp=$idp&Sexe=$Sexe") ;   
}
?>
