<?php
require_once('../tcpdf/config/lang/eng.php');
require_once('../tcpdf/tcpdf.php');
//***************************post*************************//
$IDP=$_GET['idp']; 
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
$query_liste= "SELECT grh.Date_Premier_Recrutement as DPR,grh.NSECU as NSECU,grh.Nomlatin as nomlatin,grh.Prenom_Latin as Prenom_Latin,grh.Date_Naissance as Date_Naissance ,wil.WILAYAS as wilaya, com.COMMUNE as commune,grade.gradefr as grade,grh.Date_Premier_Recrutement
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
$nss=$result["NSECU"];
$grade=$result["grade"];


mysql_free_result($requete);
//$datenaissance=$result["Date_Naissance"];
$J      = substr($result["Date_Naissance"],8,2);
$M      = substr($result["Date_Naissance"],5,2);
$A      = substr($result["Date_Naissance"],0,4);
$datenaissance    =  $J."-".$M."-".$A ;
$nss=$result["NSECU"];

//********************************************************//
// create new PDF document
$pdf = new TCPDF('P', 'mm', 'A4', true, 'UTF-8', false);
$pdf->setPrintHeader(false);
$pdf->setPrintFooter(false);
//$lg['w_page'] = 'page';
//$pdf->setLanguageArray($lg);
$pdf->SetDisplayMode('fullpage','single');//mode d affichage 
$pdf->AddPage();
//$pdf->setRTL(true);
$pdf->SetFont('aefurat', '', 12);
$dateeuro=date('d/m/Y');
$pdf->Text(40,54,"EPH AIN OUSSERA");
$pdf->Text(80,61,"1715003473");
$pdf->Text(40,67,"EPH AIN OUSSERA");
$pdf->Text(40,74,"EPH AIN OUSSERA");
$pdf->Text(25,100,$nom);
$pdf->Text(90,105,$nss);
$pdf->Text(25,110,$prenom);
$pdf->Text(25,115,$datenaissance);$pdf->Text(70,115,$commune);

$pdf->Text(25,120,"Etablissement Public Hospitalier Ain oussera ");
$pdf->Text(25,125,$grade);
$JR      = substr($result["DPR"],8,2);
$MR      = substr($result["DPR"],5,2);
$AR      = substr($result["DPR"],0,4);
$DPR    =  $JR."-".$MR."-".$AR ;
$pdf->Text(100,146,$DPR);
$pdf->Output();

?>
