<?php
//un code qui marche tres bien mais ne repond pas au exigence personnel  le code fichier listdnr1
//simple et sofistique 
require('../PDF/invoice.php');

$pdf=new FPDF('L','cm','A4');

//Titres des colonnes
$header=array('DATE DON','idp','nomdnr','prenomdnr');

$pdf->SetFont('Arial','B',14);
$pdf->AddPage();
$pdf->SetDisplayMode('fullpage','single');//mode d affichage 
$pdf->SetFillColor(255,255,255);
$pdf->SetTextColor(0,0,0);
$pdf->SetXY(0.5,13); // marge sup 13

//**********************************************************************//



//********************************************************************************************//
  $db_host="localhost";
  $db_name="grh"; 
  $db_user="root";
  $db_pass="";
  //la connection a la base de donnes par le biais de la commande mysql_connect qui a pour parametre (serveur, login, mdp)
  $cnx = mysql_connect($db_host,$db_user,$db_pass)or die ('I cannot connect to the database because: ' . mysql_error());
  //sélection de la base de données par le biais de la commande mysql_select_db qui a pour parametre (nom de la base, la chaine de connection) 
  $db  = mysql_select_db($db_name,$cnx) ;
  mysql_query("SET NAMES 'UTF8' ");
$query="SELECT * FROM GRH ";
$resultat=mysql_query($query);
$totalmbr1=mysql_num_rows($resultat);
//***********************************************************************//
$pdf->Text(1,1,"S.A.R.L :SWEETLE ");
$pdf->Text(1,2,"ZONE INDUSTRIELLE AIN OUSSERA BP 151 ");
$pdf->Text(1,3,"17200 AIN OUSSERA DJELFA");
$pdf->Text(1,4,"CF:0004.1731.9002.843");
$pdf->Text(1,5,"ART/IMP:1731.5103.058");
$pdf->Text(1,6,"N°COMPTE BNA/AO:653.300.323");
$pdf->Text(1,7,"TEL:027.82.68.00");
$pdf->Text(1,8,"FAX:027.82.78.00");
$pdf->Text(20,1,"DIRECTION COMMERCIAL");
$pdf->Text(20,2,"LE DIRECTEUR COMMERCIAL");
$pdf->Text(10.5,10,"ETAT DES COMMANDES ");
$pdf->Image('../IMAGES/sweetle.JPG',13,1,2,2,0);
while($row=mysql_fetch_array($resultat))
  {
   $pdf->cell(1,0.7,$row["IDCOMM"],1,0,'C',0);//5  =hauteur de la cellule origine =7
   $pdf->cell(3,0.7,$row["DATECOMM"],1,0,'C',0);
   $pdf->cell(3,0.7,$row["HEURECOMM"],1,0,'C',0);
   $pdf->cell(2,0.7,$row["CODECLI"],1,0,'C',0);
   $pdf->cell(2,0.7,$row["QUTLP"],1,0,'C',0);
   $pdf->cell(2,0.7,$row["QUTLF"],1,0,'C',0);
   $pdf->cell(2,0.7,$row["QUTLC"],1,0,'C',0);
   $pdf->cell(2,0.7,$row["QUTLDV"],1,0,'C',0);
   $pdf->cell(2,0.7,$row["QUTYA"],1,0,'C',0);
   $pdf->cell(2,0.7,$row["QUTYF"],1,0,'C',0);
   $pdf->cell(2,0.7,$row["QUTBA"],1,0,'C',0);
   $pdf->SetXY(0.5,$pdf->GetY()+0.8); 
  }
 
	  
					  
					  
					  
$pdf->AddPage();

//1ER PRODUIT LAIT PASTEURISE
    $query_liste = "SELECT DATECOMM,SUM(QUTLP)as QUTLP  FROM commande where DATECOMM >='$datejour1'and DATECOMM <='$datejour2'";
	$requete = mysql_query( $query_liste, $cnx ) or die( "ERREUR MYSQL num?: ".mysql_errno()."<br>Type de cette erreur: ".mysql_error()."<br>\n" );
	$row = mysql_fetch_array($requete); 
	$QLP=$row['QUTLP'];
	mysql_free_result($requete);
//2EME PRODUIT LAIT FERMENTE
$query_liste = "SELECT DATECOMM,SUM(QUTLF)as QUTLF  FROM commande where DATECOMM >='$datejour1'and DATECOMM <='$datejour2' ";
  $requete = mysql_query( $query_liste, $cnx ) or die( "ERREUR MYSQL num?: ".mysql_errno()."<br>Type de cette erreur: ".mysql_error()."<br>\n" );
  $row = mysql_fetch_array($requete); 
  $QLF=$row['QUTLF'];
  mysql_free_result($requete);
//3EME PRODUIT LAIT CAILLE QUTLC
  $query_liste = "SELECT DATECOMM,SUM(QUTLC)as QUTLC  FROM commande where DATECOMM >='$datejour1'and DATECOMM <='$datejour2' ";
  $requete = mysql_query( $query_liste, $cnx ) or die( "ERREUR MYSQL num?: ".mysql_errno()."<br>Type de cette erreur: ".mysql_error()."<br>\n" );
  $row = mysql_fetch_array($requete); 
  $QLC=$row['QUTLC'];
  mysql_free_result($requete);  
//4EME PRODUIT LAIT DE VACHE
$query_liste = "SELECT DATECOMM,SUM(QUTLDV)as QUTLDV  FROM commande where DATECOMM >='$datejour1'and DATECOMM <='$datejour2' ";
  $requete = mysql_query( $query_liste, $cnx ) or die( "ERREUR MYSQL num?: ".mysql_errno()."<br>Type de cette erreur: ".mysql_error()."<br>\n" );
  $row = mysql_fetch_array($requete); 
  $QLDV=$row['QUTLDV'];
  mysql_free_result($requete);  
//5EME PRODUIT YAOURT AROMATISE 
$query_liste = "SELECT DATECOMM,SUM(QUTYA)as QUTYA  FROM commande where DATECOMM >='$datejour1'and DATECOMM <='$datejour2'";
  $requete = mysql_query( $query_liste, $cnx ) or die( "ERREUR MYSQL num?: ".mysql_errno()."<br>Type de cette erreur: ".mysql_error()."<br>\n" );
  $row = mysql_fetch_array($requete); 
  $QYA=$row['QUTYA'];
  mysql_free_result($requete);
//6EME PRODUIT YAOURT FRUITE QUTYF
  $query_liste = "SELECT DATECOMM,SUM(QUTYF)as QUTYF FROM commande where DATECOMM >='$datejour1'and DATECOMM <='$datejour2'";
  $requete = mysql_query( $query_liste, $cnx ) or die( "ERREUR MYSQL num?: ".mysql_errno()."<br>Type de cette erreur: ".mysql_error()."<br>\n" );
  $row = mysql_fetch_array($requete); 
  $QYAF=$row['QUTYF'];  
//7EME PRODUIT BOISSON AROMATISE QUTBA
$query_liste = "SELECT DATECOMM,SUM(QUTBA)as QUTBA FROM commande where DATECOMM >='$datejour1'and DATECOMM <='$datejour2'";
  $requete = mysql_query( $query_liste, $cnx ) or die( "ERREUR MYSQL num?: ".mysql_errno()."<br>Type de cette erreur: ".mysql_error()."<br>\n" );
  $row = mysql_fetch_array($requete); 
  $QBA=$row['QUTBA'];
  mysql_free_result($requete);  
////
$pdf->SetFont('Arial','B',12);
$pdf->SetXY(1,2);
$pdf->cell(3,0.7,"total lait",1,0,'C',0);
$pdf->SetXY(1,2.7);
$pdf->cell(3,0.7,"pasterise",1,0,'C',0);
$pdf->SetXY(1,3.4);
$pdf->cell(3,0.7,$QLP,1,0,'C',0);

$pdf->SetXY(5,2);
$pdf->cell(3,0.7,"total lait",1,0,'C',0);
$pdf->SetXY(5,2.7);
$pdf->cell(3,0.7,"fermente",1,0,'C',0);
$pdf->SetXY(5,3.4);
$pdf->cell(3,0.7,$QLF,1,0,'C',0);


$pdf->SetXY(8.7,2);
$pdf->cell(3,0.7,"total lait",1,0,'C',0);
$pdf->SetXY(8.7,2.7);
$pdf->cell(3,0.7,"caillie",1,0,'C',0);
$pdf->SetXY(8.7,3.4);
$pdf->cell(3,0.7,$QLC,1,0,'C',0);

$pdf->SetXY(12.7,2);
$pdf->cell(3,0.7,"total lait",1,0,'C',0);
$pdf->SetXY(12.7,2.7);
$pdf->cell(3,0.7,"vache",1,0,'C',0);
$pdf->SetXY(12.7,3.4);
$pdf->cell(3,0.7,$QLDV,1,0,'C',0);


$pdf->SetXY(16.7,2);
$pdf->cell(3,0.7,"total yaourt",1,0,'C',0);
$pdf->SetXY(16.7,2.7);
$pdf->cell(3,0.7,"aromatise",1,0,'C',0);
$pdf->SetXY(16.7,3.4);
$pdf->cell(3,0.7,$QYA,1,0,'C',0);

$pdf->SetXY(20.7,2);
$pdf->cell(3,0.7,"total yaourt",1,0,'C',0);
$pdf->SetXY(20.7,2.7);
$pdf->cell(3,0.7,"fruite",1,0,'C',0);
$pdf->SetXY(20.7,3.4);
$pdf->cell(3,0.7,$QYAF,1,0,'C',0);


$pdf->SetXY(25,2);
$pdf->cell(3,0.7,"total boisson",1,0,'C',0);
$pdf->SetXY(25,2.7);
$pdf->cell(3,0.7,"aromatise",1,0,'C',0);
$pdf->SetXY(25,3.4);
$pdf->cell(3,0.7,$QBA,1,0,'C',0);


 $pdf->SetFont('Arial','B',14);  
$pdf->Text(1,10,"LE DIRECTEUR COMMERCIAL");
$pdf->Text(10,10,"LE CAISSIER ");
$pdf->Text(15,10,"LE FINANCIER ");
$pdf->Text(20,10,"LE DIRECTEUR DU COMPLEXE");

 
 
$pdf->output();
?>