<?php
require_once('../tcpdf/GP.php');
//**************************************************************************************//
$NOM=$_GET["NOM"];
$PRENOM=$_GET["PRENOM"];
$SEXE=$_GET["SEXE"];
$DATENAISSANCE=$_GET["DATENAISSANCE"];
$SERVICE=$_GET["SERVICE"];
$MEDECIN=$_GET["medecin"];
$NLIT=$_GET["NLIT"]; 
$dgc=$_GET["dgc"];
$WILAYAR=$_GET["WILAYAR"];
$COMMUNER=$_GET["COMMUNER"];
$ADRESSE=$_GET["ADRESSE"];
$pdf = new GP('P', 'mm', 'A4');
$pdf->setPrintHeader(false);
$pdf->setPrintFooter(false);
$pdf->DEMHOS($MEDECIN,$SERVICE,$NOM,$PRENOM,$SEXE,$DATENAISSANCE,$dgc,$NLIT,$WILAYAR,$COMMUNER,$ADRESSE);
//$pdf->temporaire('EPH AIN OUSSERA ');
$db_host="localhost";
$db_name="grh"; 
$db_user="root";
$db_pass="";
$cnx = mysql_connect($db_host,$db_user,$db_pass)or die ('I cannot connect to the database because: ' . mysql_error());
$db  = mysql_select_db($db_name,$cnx) ;
$sql = "UPDATE lit SET idpt = '$NOM.$PRENOM' WHERE idlit    = '$NLIT' " ;
$requete = mysql_query($sql, $cnx) or die( mysql_error() ) ;
//$pdf->Write(5,'retour','http://localhost/PATIENT/1dnr/confdnr.php');
//$pdf->SetFillColor(250,0,0);
//elle fonctionne avec 3 parametre si le 2et 3 sont absent  la couleurvarie du noire  au gris 
//sinon 1=rouge 2vert 3 bleu 

//$CODE=$NOM.$PRENOM;
//$pdf->Output("../ARCH/$CODE.PDF","f");
$pdf->Output();
?>


