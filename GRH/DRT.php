<?php
require_once('../tcpdf/config/lang/eng.php');
require_once('../tcpdf/tcpdf.php');
$IDP=$_GET['idp'];; 
//******************************************************//
$db_host="localhost";
$db_name="grh"; 
$db_user="root";
$db_pass="";
//la connection a la base de donnes par le biais de la commande mysql_connect qui a pour parametre (serveur, login, mdp)
$cnx = mysql_connect($db_host,$db_user,$db_pass)or die ('I cannot connect to the database because: ' . mysql_error());
//sélection de la base de données par le biais de la commande mysql_select_db qui a pour parametre (nom de la base, la chaine de connection) 
$db  = mysql_select_db($db_name,$cnx) ;
mysql_query("SET NAMES 'UTF8' ");
//$query_liste = "SELECT * FROM grh where  idp=$IDP ";
$query_liste= "SELECT grh.NSECU as NSECU,grh.Nomlatin as nomlatin,grh.Prenom_Latin as Prenom_Latin,grh.Date_Naissance as Date_Naissance ,wil.WILAYAS as wilaya, com.COMMUNE as commune,grade.gradefr as grade,grh.Date_Premier_Recrutement
  FROM grh
  inner join wil 
  on grh.Wilaya_Naissancear=wil.idwil
  inner join com 
  on grh.Commune_Naissancear=com.idcom
  inner join grade 
  on grh.rnvgradear=grade.idg
  WHERE  idp = '".$IDP."' "; 
//exécution de notre requête SQL:
$requete = mysql_query( $query_liste, $cnx ) or die( "ERREUR MYSQL numéro: ".mysql_errno()."<br>Type de cette erreur: ".mysql_error()."<br>\n" );
$result = mysql_fetch_array( $requete ) ;
$nom=$result["nomlatin"];
$prenom=$result["Prenom_Latin"];
$commune=$result["commune"];
$nss=$result["NSECU"];mysql_free_result($requete);
//$datenaissance=$result["Date_Naissance"];
$J      = substr($result["Date_Naissance"],8,2);
$M      = substr($result["Date_Naissance"],5,2);
$A      = substr($result["Date_Naissance"],0,4);
$datenaissance    =  $J."-".$M."-".$A ;
$nss=$result["NSECU"];

// create new PDF document
$pdf = new TCPDF('P', 'mm', 'A5', true, 'UTF-8', false);
$pdf->SetTextColor(0,0,255);
$pdf->setPrintHeader(false);
$pdf->setPrintFooter(false);
$pdf->SetDisplayMode('fullpage','single');//mode d affichage 
$pdf->AddPage();
//$pdf->setRTL(true);
$pdf->SetFont('aefurat', '', 12);
$dateeuro=date('d/m/Y');
$pdf->Text(25,43,$nom);
$pdf->Text(25,49,$prenom);$pdf->Text(90,48,$nss);
$pdf->Text(25,58,$datenaissance);$pdf->Text(70,58,$commune);
$pdf->Text(80,98,"Ainoussera");$pdf->Text(110,98,$dateeuro);
$pdf->Text(25,139,$nom);
$pdf->Text(25,146,$prenom);$pdf->Text(94,145,$nss);
$pdf->Text(80,173,"Ainoussera");$pdf->Text(110,173,$dateeuro);


$pdf->Output();

?>
