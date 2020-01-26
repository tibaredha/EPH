<?php
require_once('../tcpdf/config/lang/eng.php');
require_once('../tcpdf/tcpdf.php');
$db_host="localhost";
$db_name="grh"; 
$db_user="root";
$db_pass="";
//la connection a la base de donnes par le biais de la commande mysql_connect qui a pour parametre (serveur, login, mdp)
$cnx = mysql_connect($db_host,$db_user,$db_pass)or die ('I cannot connect to the database because: ' . mysql_error());
//sélection de la base de données par le biais de la commande mysql_select_db qui a pour parametre (nom de la base, la chaine de connection) 
$db  = mysql_select_db($db_name,$cnx) ;
mysql_query("SET NAMES 'UTF8' ");
$query_liste = "SELECT * FROM service  ";
$requete = mysql_query( $query_liste, $cnx ) or die( "ERREUR MYSQL num?: ".mysql_errno()."<br>Type de cette erreur: ".mysql_error()."<br>\n" );
$result = mysql_fetch_array( $requete ) ;
$servicefr=$result["servicefr"];  
mysql_free_result($requete);
//**********************************************************************************************
$date=date("d-m-y");
$pdf=new TCPDF('P','cm','A4');
$pdf->setRTL(true);
$pdf->setPrintHeader(false);
$pdf->setPrintFooter(false);
$pdf->SetDisplayMode('fullpage','single');//mode d affichage 
// $pdf->SetFillColor(255,255,255);
// $pdf->SetTextColor(0,0,0);
$pdf->SetFillColor(230);    //fond gris il faut ajouter au cell un autre parametre pour qui accepte la coloration
$pdf->SetTextColor(0,0,0);//text noire
$pdf->SetFont('aefurat', '', 11);
$nbrJours =911 ;
$pdf->AddPage();
$pdf->SetXY(0.5,1); // marge sup 13
//********************************************************************************************//
$db_host="localhost";
$db_name="grh"; 
$db_user="root";
$db_pass="";$date1=date("Y");
$cnx = mysql_connect($db_host,$db_user,$db_pass)or die ('I cannot connect to the database because: ' . mysql_error());
$db  = mysql_select_db($db_name,$cnx) ;
mysql_query("SET NAMES 'UTF8' ");
$query = "SELECT service.servicear as service,grh.PREVISION,grh.ECHELON,grh.DATEDEFFET,grh.servicear,grh.Nomlatin as Nomlatin ,grh.Situation_familliale,grh.Prenom_Latin as Prenom_Latin,grh.Commune_Naissancear as Commune_Naissancear,grh.Sexe as Sexe ,grh.Date_Naissance as Date_Naissance ,grh.Prenom_Arabe as Prenom_Arabe,grh.Nomarab as Nomarab ,grh.idp as idp,grade.gradear as gradear FROM grh,grade,service where  grade.idg=grh.rnvgradear and  service.ids=grh.servicear and cessation !='y' ";
$resultat=mysql_query($query);
$totalmbr1=mysql_num_rows($resultat);
//***********************************************************************//
while($row=mysql_fetch_object($resultat))
  {
   $pdf->SetTextColor(225,0,0);
   $pdf->SetFont('aefurat', '', 11);
   $pdf->Text(1.8,$pdf->GetY()+4.5,$row->Prenom_Arabe);          $pdf->Text(12,$pdf->GetY(),$row->gradear);
   $pdf->Text(1.8,$pdf->GetY()+0.5,$row->Nomarab);               $pdf->Text(12.2,$pdf->GetY(),$row->ECHELON);//echelon
   $pdf->Text(3.3,$pdf->GetY()+0.5,$row->Date_Naissance);        $pdf->Text(15.5,$pdf->GetY(),$row->DATEDEFFET);//date dernier echelon
   $pdf->Text(3.3,$pdf->GetY()+0.5,$row->Situation_familliale);
   $pdf->Text(16.2,$pdf->GetY()+0.5,$row->PREVISION);//presume
   $pdf->SetXY(0.5,$pdf->GetY()+1);
   $pdf->AddPage();
  }
$pdf->Output();

?>
