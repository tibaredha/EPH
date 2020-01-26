<?php
if($_POST["DUREE"]!="" and $_POST["DC"]!="" )
{
require_once('../tcpdf/GRH1.php');
$pdf = new GRH1('P', 'mm', 'A4', true, 'UTF-8', false);
$pdf->entete();
$idp=$_POST["idp"];
$HEUR=$_POST["HEUR"];
$DATE=$_POST["DATE"];
$NOM=$_POST["NOM"];
$PRENOM=$_POST["PRENOM"];
$GRADE=$_POST["GRADE"];
$REMPLACANT="***";
$CC="مرضية";
$dif=0;
$pdf->registreconges($idp,$_POST["DUREE"],$_POST["DC"],$pdf->datePlus($_POST["DC"],$_POST["DUREE"]),$CC,$REMPLACANT,$dif);
$pdf->MAL();
$pdf->SetFont('aefurat','I', 17);
$pdf->SetTextColor(225,0,0);
$pdf->Text(98,180,$_POST["DUREE"]."  "."( يوم  /  أيام )");
$pdf->Text(68,190,$NOM." ".$PRENOM);
$pdf->Text(62,200,$GRADE);
$pdf->Text(57,210,$_POST["DC"]);
$pdf->Text(116,210,$pdf->datePlus($_POST["DC"],$_POST["DUREE"]));
$pdf->SetFont('dejavusans','B', 18); //police d ecriture  
$pdf->Output();
}
else
{
$idp=$_POST["idp"];
header("Location: ../index.php?uc=MAL&idp=$idp") ;
}
?>
