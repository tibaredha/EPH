<?php
require_once('../tcpdf/config/lang/eng.php');
require_once('../tcpdf/tcpdf.php');
require_once('../tcpdf/GRH1.PHP');
//***************************post*************************//
$ndp=$_GET["idp"];
$date=date("Y-m-d");
$date1=date("Y");
//**********************************connection sql*******************************///
  $db_host="localhost";
  $db_name="grh"; 
  $db_user="root";
  $db_pass="";
  //la connection a la base de donnes 
  $cnx = mysql_connect($db_host,$db_user,$db_pass)or die ('I cannot connect to the database because: ' . mysql_error());
  //sélection de la base de données
  $db  = mysql_select_db($db_name,$cnx) ;
//******************************************************************************************************//
  $IDRECmg ;
  //requette de recherche si un idrec existe 
  mysql_query("SET NAMES 'UTF8' ");
  $sql = "SELECT grh.Nom_Latin,wil.WILAYASAR as wilaya, com.communear as commune,grh.Nomarab as nomar,grade.gradear as grade,grh.Prenom_Arabe as prenomar,grh.Date_Naissance,grh.Commune_Naissancear,grh.Wilaya_Naissancear,grh.Grade_Actuel,grh.Date_Premier_Recrutement
  FROM grh
  inner join wil 
  on grh.Wilaya_Naissancear=wil.idwil
  inner join com 
  on grh.Commune_Naissancear=com.idcom
  inner join grade 
  on grh.rnvgradear=grade.idg
  WHERE  idp = '".$ndp."' "; 
  //$sql = "SELECT * FROM grh WHERE  idp = '".$ndp."' "	;
  $requete = @mysql_query($sql, $cnx) or die($sql."<br>".mysql_error()) ;
  $result = mysql_fetch_array( $requete ); 
  mysql_free_result($requete);
//********************************************************//
// create new PDF document
$pdf = new GRH1('P', 'mm', 'A4', true, 'UTF-8', false);

//************************CORPS*************************// 
$pdf->entete();

$pdf->Text(90,70,"دعــــوة");
$pdf->Text(25,80,"السيد  : مدير المؤسسة العمومية الاستشفائية عين وسارة ");

$pdf->SetFont('aefurat', '', 18);
$pdf->Text(5,95,"إلــى السيد(ة): ".$result["nomar"]."  ".$result["prenomar"]);
$pdf->Text(5,105,"الرتبة:"." ".$result["grade"]);
//$pdf->Line(5 ,70 ,203 ,70 );
$pdf->Text(5,115,"المصلحة:");
$pdf->Text(5,125,"بصفتكم ");
$pdf->Text(5,135,"يشرفنا أن ندعوكم لحضور ");
$pdf->Text(5,145,"يوم"."**/**/****  "."على الساعة");
$pdf->Text(5,155,"بـ:");
$pdf->Text(128,165,"عين وسارة في :  ");
$pdf->Text(150,175," المدير");




$pdf->Output();

?>
