<?php
require_once('../tcpdf/config/lang/eng.php');
require_once('../tcpdf/tcpdf.php');
require_once('../tcpdf/GP.php');
$IDP=2; 
$NOM=$_POST["NOM"];             
$PRENOM=$_POST["PRENOM"];        
// $SEXE=$_POST["SEXE"];                  
// $DATENAISSANCE=$_POST["DATENAISSANCE"];
// $AGE=$_POST["AGE"];
// $FILS=$_POST["FILS"];
// $ETDE=$_POST["ETDE"];
// $COMMUNE=$_POST["COMMUNE"];
// $WILAYA=$_POST["WILAYA"];
// $COMMUNER=$_POST["COMMUNER"];
// $WILAYAR=$_POST["WILAYAR"];
// $ADRESSE=$_POST["ADRESSE"];
// $SERVICEHOSP=$_POST["SERVICEHOSP"];
// $PRATICIEN=$_POST["PRATICIEN"];


$NBR=$_POST["NBR"];
$DATE=$_POST["DATE"];





// create new PDF document
$pdf = new GP('P', 'mm', 'A5', true, 'UTF-8', false);
$pdf->SetDisplayMode('fullpage','single');//mode d affichage 
$pdf->SetTextColor(0,0,255);
$pdf->setPrintHeader(false);
$pdf->setPrintFooter(false);
//$lg['w_page'] = 'page';
//$pdf->setLanguageArray($lg);
$pdf->AddPage();
$pdf->setRTL(true);
$pdf->SetFont('aefurat', '', 18);
$dateeuro=date('Y/m/d');
//************************CORPS*************************// 
$pdf->CONGE($IDP,$dateeuro);
//*********************************DONNES ****************************///
//aealarabiya
//dejavusans
//aefurat
//$pdf->SetFont('dejavusans','B', 18);
$pdf->SetTextColor(225,0,0);
$pdf->SetFont('aefurat', 'B', 16);
$pdf->Text(49,60,$NOM."--".$PRENOM);
// $pdf->Text(39,70,$DATENAISSANCE);
$pdf->Text(45,20,$pdf->nbrtostring("grh","service","ids",$_POST["SERVICEHOSP"],"servicefr"));

switch($_POST["TC"])  
{
    case 'CON':
		{
		$pdf->Text(90,90,$NBR);
        $pdf->Text(45,100,$DATE);
		break;
		}
	case 'PRO':
		{
		$pdf->Text(90,110,$NBR);
        $pdf->Text(45,120,$DATE);
		break;
		}
	case 'REP':
		{
		$pdf->Text(85,150,$DATE);
		break;
		}			
}





$pdf->SetTextColor(0,0,255);
//avec forcage de limression
// require_once('../tcpdf/imp.php');
$pdf->Output();

?>
