<?php
if ($_POST['POIDS']!=""  and $_POST['AGES']!="" )
{
// require_once('../tcpdf/config/lang/eng.php');
// require_once('../tcpdf/tcpdf.php');
require_once('../tcpdf/GP.php');

// $id=$_POST['id'];
$TV=$_POST['TV'];
$POIDS=$_POST['POIDS'];
$AGES=$_POST['AGES'];
$NOM=$_POST['NOM'];
$PRENOM=$_POST['PRENOM'];
$ADRESSE=$_POST['ADRESSE'];
// $PRATICIEN=$_POST['PRATICIEN'];




//***************************post*************************//
$pdf = new GP('P', 'mm', 'A4', true, 'UTF-8', false);
//******************************************************************************************************//  
$pdf->setPrintHeader(false);
$pdf->setPrintFooter(false);
$pdf->AddPage('P','A5');
$pdf->RAGE0();
$m=90;
$pdf->SetFont('aefurat', '', 6);

$pdf->SetFont('aefurat', '', 8);
$pdf->Text(5,5,"ref instruction n 1824 MSPRH  DU 26/10/2004 ");
$pdf->Text(5,$pdf->GetY()+5,"relative a la conduite a tenire en cas de morssure ");
$pdf->Text(5,$pdf->GetY()+5,"NB meme sur presentation du carnet de vaccination ");
$pdf->Text(5,$pdf->GetY()+5,"de l animal il faut toujours mettre en observation   ");
$pdf->Text(5,$pdf->GetY()+5,"l animal mordeur pendant 15 jours et paratiquer ");
$pdf->Text(5,$pdf->GetY()+5,"la vaccination anti rabique j usqu au 15 eme ");
$pdf->Text(5,$pdf->GetY()+5,"jours d observation si l animal mordeur est sain  ");
$pdf->Text(5,$pdf->GetY()+5,"interompre la vaccination si la rage animal est confirme ");
$pdf->Text(5,$pdf->GetY()+5,"poursuivre la vaccination ");
$pdf->Text(5,$pdf->GetY()+5," NB toute interuption de la vaccination ");
$pdf->Text(5,$pdf->GetY()+5,"  pour le vaccin preparer ");

$pdf->Text(5,$pdf->GetY()+5,"sur cerveau de souriceaux nouveaux nees ");
$pdf->Text(5,$pdf->GetY()+5,"le reprendre au debut");

$pdf->Text(5,$pdf->GetY()+5,"centre de vaccination anti rabique : benkous brahim");
$pdf->Text(5,$pdf->GetY()+5,"trt adjuvant :antibio therapie + vaccination dta/dte   ");
$pdf->Text(5,$pdf->GetY()+5,"selon le risque  ");

$pdf->AddPage('P','A5');
$pdf->SetFont('aefurat', '', 6);
$pdf->RAGE($AGES,$POIDS,$TV);//1ere var=age 2eme var=poid 3eme var=serovaccination
$pdf->SetFont('aefurat', '', 11);
$i=9;
$pdf->Text(5,10,"Grade (1) (2) (3)");
$pdf->Text(5,$pdf->GetY()+$i,"NOM: ".$NOM);
$pdf->Text(5,$pdf->GetY()+$i,"PRENOM: ".$PRENOM);
$pdf->Text(5,$pdf->GetY()+$i,"AGE: ".$AGES."an");
$pdf->Text(5,$pdf->GetY()+$i,"POIDS: ".$POIDS."KG");
$pdf->Text(5,$pdf->GetY()+$i,"ADRESSE: ");
$pdf->Text(5,$pdf->GetY()+$i,"DATE CONATAMINATION: ");
$pdf->Text(5,$pdf->GetY()+$i,"ANIMALE: ");
$pdf->Text(5,$pdf->GetY()+$i,"MEDECIN: ");
$pdf->Output();
}
else
{
//index.php?uc=SMH&idp=
// header("Location: ../index.php?uc=RAGE&idp=$id") ;
echo "champ vide" ;

}
?>


