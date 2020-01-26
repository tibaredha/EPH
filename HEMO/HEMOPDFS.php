<?php
if (!ISSET($_POST['annee'])||!ISSET($_POST['mois'])||!ISSET($_POST['jour'])||!ISSET($_POST['annee1'])||!ISSET($_POST['mois1'])||!ISSET($_POST['jour1']))
{
$datejour1 =date("Y-m-d");
$datejour2 =date("Y-m-d");
}
else
{
 if(empty($_POST['annee'])||empty($_POST['mois'])||empty($_POST['jour'])||empty($_POST['annee1'])||empty($_POST['mois1'])||empty($_POST['jour1']))
 {
 $datejour1 =date("Y-m-d");
 $datejour2 =date("Y-m-d");
 }
 else
 {
 $datejour1 = $_POST['annee'] .'-'.$_POST['mois'] .'-'.$_POST['jour'];
 $datejour2 = $_POST['annee1'].'-'.$_POST['mois1'].'-'.$_POST['jour1'];
 }
}
//condition si date1 ET SUP A DATE2  pose probleme
if ($datejour1>$datejour2)
{
header("Location: ../index.php?uc=LABOSERO") ;
}
require_once('../tcpdf/GP.php');
$pdf = new GP('L', 'mm', 'A4', true, 'UTF-8', false);
$pdf->SetTextColor(0,0,0);
$pdf->setPrintHeader(false);
$pdf->setPrintFooter(false);
$pdf->SetDisplayMode('fullpage','single');//mode d affichage 
$pdf->AddPage();
$pdf->SetFont('aefurat', '', 10);
$pdf->Text(5,10,"المؤسسة العمومية الاستشفائية عين وسارة");
$pdf->Text(10,15,"ETABLISSEMENT PUBLIC");
$pdf->Text(8,20,"HOSPITALIER AIN OUSSERA");
$pdf->Rect(70+150,5,65,25,"d");
$pdf->Text(85+155,7,"REGISTRE ");
$pdf->Text(83+150,12,"Laboratoire D'Hemodialyse ");
$pdf->Text(83+150,17,"Ain-Oussera le :".date('d-m-Y'));
$pdf->SetFont('aefurat', '', 12);
$pdf->Text(90,25,"REGISTRE LABORATOIRE D'HEMODIALYSE SEROLOGIE");
$pdf->Text(38+70,32," Du ".$pdf->dateUS2FR($datejour1)." Au ".$pdf->dateUS2FR($datejour2));
$pdf->SetFont('aefurat', '', 10);
$pdf->bilanS(40,$datejour1,$datejour2);
$pdf->Output();
?>
