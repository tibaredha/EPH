<?php
if ($_POST['POIDS']!=""  and $_POST['AGES']!="" )
{
require_once('../tcpdf/config/lang/eng.php');
require_once('../tcpdf/tcpdf.php');
require_once('../tcpdf/GP.php');

$id=$_POST['id'];
$TV=$_POST['TV'];
$POIDS=$_POST['POIDS'];
$AGES=$_POST['AGES'];


$NOM=$_POST['NOM'];
$PRENOM=$_POST['PRENOM'];
$ADRESSE=$_POST['ADRESSE'];
$PRATICIEN=$_POST['PRATICIEN'];




//***************************post*************************//
$pdf = new GP('P', 'mm', 'A4', true, 'UTF-8', false);
//******************************************************************************************************//  
$pdf->setPrintHeader(false);
$pdf->setPrintFooter(false);
$pdf->AddPage('P','A4');
$pdf->RAGE0();
$m=90;
$pdf->SetFont('aefurat', '', 6);
$pdf->Text($m,10,"REPUBLIQUE ALGERIENNE DEMOCRATIQUE ET POPULAIRE ");
$pdf->Text($m+10,15,"ETABLISSEMENT PUBLIC HOSPITALIER");
$pdf->Text($m+20,20,"AIN OUSSERA");
$pdf->SetFont('aefurat', '', 10);
$pdf->Text($m+18,40,"CARTE SUIVIE ");
$pdf->Text($m+7,50,"VACCINATION ANTIRABIQUE  ");

$pdf->SetFont('aefurat', '', 8);
$pdf->Text(5,5,"ref instruction n 1824 MSPRH  DU 26/10/2004 ");
$pdf->Text(5,$pdf->GetY()+5,"relative a la conduite a tenire en cas de morssure ");
$pdf->Text(5,$pdf->GetY()+5,"NB meme sur presentation du carnet de vaccination de l animal");
$pdf->Text(5,$pdf->GetY()+5,"il faut toujours mettre en observation l animal mordeur  ");
$pdf->Text(5,$pdf->GetY()+5,"pendant 15 jours et paratiquer la vaccination anti rabique");
$pdf->Text(5,$pdf->GetY()+5,"j usqu au 15 eme jours d observation");
$pdf->Text(5,$pdf->GetY()+5,"si l animal mordeur est sain interompre la vaccination ");
$pdf->Text(5,$pdf->GetY()+5,"si la rage animal est confirme poursuivre la vaccination");
$pdf->Text(5,$pdf->GetY()+5,"NB toute interuption de la vaccination pour le vaccin preparer ");
$pdf->Text(5,$pdf->GetY()+5,"sur cerveau de souriceaux nouveaux nees le reprendre au debut");
$pdf->Text(5,$pdf->GetY()+5,"centre de vaccination anti rabique : benkous brahim");
$pdf->Text(5,$pdf->GetY()+5," trt adjuvant :antibio therapie + vaccination dta/dte selon le risque  ");







$pdf->AddPage('P','A4');
$pdf->SetFont('aefurat', '', 6);
$pdf->RAGE($AGES,$POIDS,$TV);//1ere var=age 2eme var=poid 3eme var=serovaccination

$pdf->SetFont('aefurat', '', 12);
$i=9;
$pdf->Text(5,10,"Grade (1) (2) (3)");
$pdf->Text(5,$pdf->GetY()+$i,"NOM ".$NOM);
$pdf->Text(5,$pdf->GetY()+$i,"PRENOM".$PRENOM);
$pdf->Text(5,$pdf->GetY()+$i,"AGE".$AGES."an");
$pdf->Text(5,$pdf->GetY()+$i,"POIDS".$POIDS."KG");
$pdf->Text(5,$pdf->GetY()+$i,"ADRESSE");
$pdf->Text(5,$pdf->GetY()+$i,"DATE CONATAMINATION");
$pdf->Text(5,$pdf->GetY()+$i,"ANIMALE");
$pdf->Text(5,$pdf->GetY()+$i,"MEDECIN");
$pdf->Output();
}
else
{
//index.php?uc=SMH&idp=
// header("Location: ../index.php?uc=RAGE&idp=$id") ;
echo "champ vide" ;

}
?>




