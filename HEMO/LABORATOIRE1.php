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
header("Location: ../index.php?uc=LABORATOIRE") ;
}
require_once('../tcpdf/GP.php');
$pdf = new GP('L', 'mm', 'A4', true, 'UTF-8', false);
$pdf->SetTextColor(0,0,0);
$pdf->setPrintHeader(false);
$pdf->setPrintFooter(false);
$pdf->SetDisplayMode('fullpage','single');//mode d affichage 
$pdf->AddPage();
//$pdf->setRTL(true);
$pdf->SetFont('aefurat', '', 10);
$dateeuro=date('d/m/Y');
$pdf->Text(5,10,"المؤسسة العمومية الاستشفائية عين وسارة");
$pdf->Text(10,15,"ETABLISSEMENT PUBLIC");
$pdf->Text(8,20,"HOSPITALIER AIN OUSSERA");
$pdf->Rect(70+150,5,65,25,"d");
$pdf->Text(85+155,7,"TABLEAU B5 ");
$pdf->Text(83+150,12,"Laboratoire D'Hemodialyse ");
$pdf->Text(83+150,17,"......................................");

$pdf->Text(80+150,22,"AIN OUSSERA LE :".$dateeuro);
$pdf->SetFont('aefurat', '', 14);
$pdf->Text(20+70,32,"ACTIVITE DU LABORATOIRE D'HEMODIALYSE");
$pdf->SetFont('aefurat', '', 12);
$pdf->Text(38+70,32+5," Du ".$pdf->dateUS2FR($datejour1)." Au ".$pdf->dateUS2FR($datejour2));


$pdf->SetFont('aefurat', '', 10);
$pdf->hemoeva1(59,"Type d'Examens","Codes","NBR d'Examens","NBR de B");

$parametre="HB";//$pdf->evahemomois($datejour1,$datejour2,$parametre)
$pdf->hemoeva(65,"FNS","***",$datejour1,$datejour2,"GB","33");
$pdf->hemoeva(70,"VS","1510",$datejour1,$datejour2,"VS1H","8");
$pdf->hemoeva(75,"*?GROUPAGE","1524",$datejour1,$datejour2,"null","30");//
$pdf->hemoeva(80,"TP","1500",$datejour1,$datejour2,"TP","20");
$pdf->hemoeva(85,"GLY","1346",$datejour1,$datejour2,"GLYCE","10");
$pdf->hemoeva(90,"CRE","1340",$datejour1,$datejour2,"CREAT","10");
$pdf->hemoeva(95,"UREE","1360",$datejour1,$datejour2,"UREE","10");
$pdf->hemoeva(100,"CHOLESTEROLE","1338",$datejour1,$datejour2,"CHOLES","10");
$pdf->hemoeva(105,"TRIGLYCERIDE","1359",$datejour1,$datejour2,"TG","50");
$pdf->hemoeva(110,"ACIDE URIQUE","1329",$datejour1,$datejour2,"ACURIQUE","10");
$pdf->hemoeva(115,"PHOSPHORE","1353",$datejour1,$datejour2,"PHOS","16");
$pdf->hemoeva(120,"TRANSAMINASE","1424",$datejour1,$datejour2,"TGO","10");
$pdf->hemoeva(125,"BILIRUBINE","1334",$datejour1,$datejour2,"BILIT","40");
$pdf->hemoeva(130,"*?FER SERIQUE","1342",$datejour1,$datejour2,"null","30");//
$pdf->hemoeva(135,"*?PROTEINE T","",$datejour1,$datejour2,"null","10");//
$pdf->hemoeva(140,"CAL","1335",$datejour1,$datejour2,"CA","20");
$pdf->hemoeva(145,"ASLO","1645",$datejour1,$datejour2,"ASLO","10");
$pdf->hemoeva(150,"CRP","1439",$datejour1,$datejour2,"CRP","50");
$pdf->hemoeva(155,"IONOGRAME","",$datejour1,$datejour2,"NA","10");
$pdf->hemoeva(160,"HCV","1630",$datejour1,$datejour2,"HVC","40");
$pdf->hemoeva(165,"HIV","1630",$datejour1,$datejour2,"HIV","45");
$pdf->hemoeva(170,"HBS","1634",$datejour1,$datejour2,"HVB","70");
$pdf->Text(80+150,180,"Laboratoire : Hemodialyse");
 $pdf->Text(80+150,185,"FATOUH Mustapha");
$pdf->Output();
?>
