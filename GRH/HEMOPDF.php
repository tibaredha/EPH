<?php

// if (!ISSET($_POST['annee'])||!ISSET($_POST['mois'])||!ISSET($_POST['jour'])||!ISSET($_POST['annee1'])||!ISSET($_POST['mois1'])||!ISSET($_POST['jour1']))
// {
// $datejour1 =date("Y-m-d");
// $datejour2 =date("Y-m-d");
// }
// else
// {
 // if(empty($_POST['annee'])||empty($_POST['mois'])||empty($_POST['jour'])||empty($_POST['annee1'])||empty($_POST['mois1'])||empty($_POST['jour1']))
 // {
 // $datejour1 =date("Y-m-d");
 // $datejour2 =date("Y-m-d");
 // }
 // else
 // {
 // $datejour1 = $_POST['annee'] .'-'.$_POST['mois'] .'-'.$_POST['jour'];
 // $datejour2 = $_POST['annee1'].'-'.$_POST['mois1'].'-'.$_POST['jour1'];
 // }
// }
// condition si date1 ET SUP A DATE2  pose probleme
// if ($datejour1>$datejour2)
// {
// header("Location: ../index.php?uc=LABORATOIRE") ;
// }
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
$pdf->Text(80+155,7,"SUIVIE BIOLOGIQUE ");
$pdf->Text(83+150,12,"Laboratoire D'Hemodialyse ");
$pdf->Text(83+150,17,"......................................");

$pdf->Text(80+150,22,"AIN OUSSERA LE :".$dateeuro);
$pdf->SetFont('aefurat', '', 14);
$pdf->Text(30+70,32,"HISTORIQUE BILAN BIOLOGIQUE");
// $pdf->Text(38+70,32+5," DU ".$pdf->dateUS2FR($datejour1)." AU ".$pdf->dateUS2FR($datejour2));
$idp=$_GET["idp"];
$db_host="localhost"; 
$db_user="root";
$db_pass="";
$db_name="grh";
$cnx = mysql_connect($db_host,$db_user,$db_pass)or die ('I cannot connect to the database because: ' . mysql_error());
$db  = mysql_select_db($db_name,$cnx) ;
mysql_query("SET NAMES 'UTF8' ");
$sql = "SELECT * FROM hemo WHERE id = ".$idp ;
$requete = mysql_query( $sql ) ; 
if( $result = mysql_fetch_object( $requete ) )
{
$pdf->SetFont('aefurat', '', 12);
$pdf->Text(5,40,"Nom,Prénom du malade:".$result->NOM."_".$result->PRENOM);
$pdf->Text(5,45,"Date De Naissance:".$pdf->dateUS2FR($result->DATENAISSA)); 
$AGE=substr(date('d/m/Y'),6,4)-substr($result->DATENAISSA,0,4);   
$pdf->Text(100+150,45,"Age: ".$AGE." Ans " );
$pdf->Text(5,50,"Laboratoire:  Hemodialyse");                     $pdf->Text(100+150,50,"Matricule:-------");
$pdf->SetFont('aefurat', '', 10);
$pdf->historiquebilan($idp,59);
// $pdf->historiquebilan0($idp,59+15,"","","","","","","","","","","","","","","","","","","","","","","","","","","");
}
$pdf->Text(80+150,180,"Laboratoire : Hemodialyse");
$pdf->Text(80+150,185,"FATOUH Mustapha");
$pdf->Output();
?>
