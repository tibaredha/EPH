<?php
if($_POST["DUREE"]!="" and $_POST["DC"]!="" and $_POST["REMPLACANT"]!="" and $_POST["CC"]!="")
{
require_once('../tcpdf/GRH1.php');
$pdf = new GRH1('P', 'mm', 'A4', true, 'UTF-8', false);
$pdf->entete();
$dif=0;
$pdf->registreconges($_POST["idp"],$_POST["DUREE"],$_POST["DC"],$pdf->datePlus($_POST["DC"],$_POST["DUREE"]),$pdf->nbrtostring("grh","causeconge","idcc",$_POST["CC"],"causecongear"),$_POST["REMPLACANT"],$dif);
$pdf->congespecial($_POST["CC"]);
$pdf->Text(30,100,$_POST["PRENOM"]);
$pdf->Text(30,110,$_POST["NOM"]);
$pdf->Text(30,120,$_POST["GRADE"]);
$pdf->Text(30,130,$_POST["FONCTION"]);
$pdf->Text(30,140,$_POST["SERVICE"]);
$pdf->Text(25,150,$_POST["DUREE"]." "."");
$pdf->Text(35,160,$_POST["DC"]);
$pdf->Text(35,170,$pdf->datePlus($_POST["DC"],$_POST["DUREE"]));
$pdf->Text(35,180,$pdf->nbrtostring("grh","causeconge","idcc",$_POST["CC"],"causecongear"));
$pdf->Text(35,190,$_POST["REMPLACANT"]);
$pdf->SetFont('dejavusans','B', 18);  
$pdf->Output();
}
else
{
$idp=$_POST["idp"];
header("Location: ../index.php?uc=EXCE&idp=$idp") ;   
}
?>
