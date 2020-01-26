<?php
$idp=$_POST["idp"];
if($_POST["CAT"]!="--------------------------------" and $_POST["ECH"]!="--------------------------------" and  $_POST["SF"]!="--------------------------------" )
{
require_once('../tcpdf/config/lang/eng.php');
require_once('../tcpdf/tcpdf.php');
require_once('../tcpdf/TCPDFPAIE.PHP');
//********************************************************// GRADEAR
$NOMAR=$_POST["NOM"] ;
$PRENOMAR=$_POST["PRENOM"] ;
$DATNSC=$_POST["idg"] ;
$idgrade=$_POST["idg"] ;
$JOURS=$_POST["JOURS"] ;
$cat=$_POST["CAT"] ;
$ech=$_POST["ECH"] ;
$ccp=$_POST["CCP"] ;
$CNASAT=$_POST["CNASAT"] ;
$CONJ=$_POST["CONJ"] ;
$idg=$_POST["idg"];
$GRADE=$_POST["GRADE"];
$SF=$_POST["SF"];
$ENFS=$_POST["ENFS"];
$PSUP=$_POST["PSUP"];
$uc=intval($_POST["idg"]);
//********************************************************//
// create new PDF document
$pdf = new TCPDFPAIE('P', 'mm', 'A4', true, 'UTF-8', false);
$pdf->entete();

$pdf->titre1($CNASAT,$ccp,$JOURS,$NOMAR,$PRENOMAR,$DATNSC,$SF,$GRADE,$cat,$ech,$ENFS);
$pdf->tab($PSUP,$JOURS,$cat,$ech,$uc,$ENFS);
$pdf->pied();

}//fin if 
else
{
	header("Location: ../index.php?uc=PAIE&idp=$idp") ; 
}
?>
