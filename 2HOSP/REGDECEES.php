<?php
require_once('../tcpdf/config/lang/eng.php');
require_once('../tcpdf/tcpdf.php');
//require_once('../tcpdf/TCPDF_MySQL_Table.php'); //classe special colone en arabe  
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

$pdf=new TCPDF('l','cm','A4');
$pdf->setPrintHeader(false);
$pdf->setPrintFooter(false);
// $pdf->setRTL(true);

$pdf->SetDisplayMode('fullpage','single');//mode d affichage 
// $pdf->SetFillColor(255,255,255);
// $pdf->SetTextColor(0,0,0);
$pdf->SetFillColor(230);    //fond gris il faut ajouter au cell un autre parametre pour qui accepte la coloration
$pdf->SetTextColor(0,0,0);//text noire
$pdf->SetFont('aefurat', '', 14);
$pdf->AddPage();
$pdf->Text(12,1,"republique algerienne democratique et populaire");
$pdf->Text(11.5,2.0,"ministere de la sante de la population et de la reforme hospitaliere ");
$pdf->Text(0.5,3.0,"direction de la sante de la population de la wilaya de djelfa ");


$pdf->Text(0.5,4.0,"etablissement public hospitalier ain oussera");
$pdf->Text(0.5,5.0,"service ");
$pdf->Text(0.5,6.0," N°.........".date("Y"));
$pdf->SetXY(9,7.0);
$pdf->Cell(12,1.5,'RELEVE MENSUEL DES CAUSES DE DECES',1,1,'C');
$h=9;
$pdf->SetXY(0.5,$h); 	  
$pdf->cell(3,0.5,"Age du decede",1,0,'C',1,0);

$pdf->SetXY(3.5,$h); 	  
$pdf->cell(1,0.5,"Sexe",1,0,'C',1,0);

$pdf->SetXY(4.5,$h); 	  
$pdf->cell(5,0.5,"Commune de residence",1,0,'C',1,0);

$pdf->SetXY(9.5,$h); 	  
$pdf->cell(3,0.5,"Profession",1,0,'C',1,0);

$pdf->SetXY(12.5,$h); 	  
$pdf->cell(5,0.5,"Service D'hospitalisation",1,0,'C',1,0);

$pdf->SetXY(17.5,$h); 	  
$pdf->cell(5,0.5,"Durée D'hospitalisation",1,0,'C',1,0);

$pdf->SetXY(22.5,$h); 	  
$pdf->cell(6,0.5,"cause du decees",1,0,'C',1,0);

$pdf->SetXY(0.5,10); // marge sup 13


//********************************************************************************************//
$db_host="localhost";
$db_name="grh"; 
$db_user="root";
$db_pass="";
$cnx = mysql_connect($db_host,$db_user,$db_pass)or die ('I cannot connect to the database because: ' . mysql_error());
$db  = mysql_select_db($db_name,$cnx) ;
mysql_query("SET NAMES 'UTF8' ");
$query = "SELECT service.servicear as service,grh.servicear,grh.DATEARRIVE,grh.Nomlatin as Nomlatin ,grh.Prenom_Latin as Prenom_Latin,grh.Commune_Naissancear as Commune_Naissancear,grh.Sexe as Sexe ,grh.Date_Naissance as Date_Naissance ,grh.Prenom_Arabe as Prenom_Arabe,grh.Nomarab as Nomarab ,grh.idp as idp,grade.gradear as gradear FROM grh,grade,service where  grade.idg=grh.rnvgradear and  service.ids=grh.servicear and cessation !='y' order by Nomarab";

$resultat=mysql_query($query);
$totalmbr1=mysql_num_rows($resultat);

//***********************************************************************//
while($row=mysql_fetch_object($resultat))
  {
   // $pdf->cell(3.5,1,$row->Nomarab,1,0,'R',0);//5  =hauteur de la cellule origine =7
   // $pdf->cell(3.5,1,$row->Prenom_Arabe,1,0,'R',0);
   // $pdf->cell(10,1,$row->gradear,1,0,'R',0);
   // $pdf->cell(3,1,$row->DATEARRIVE,1,0,'C',0);
   // $pdf->cell(8,1,$row->service,1,0,'R',0);
   
   // $pdf->SetXY(0.5,$pdf->GetY()+1); 
  }
$pdf->SetXY(0.5,$pdf->GetY()); 	  
$pdf->cell(7,0.5,"المجموع الكلى".$totalmbr1,1,0,'C',1,0);	  
$pdf->SetXY(7.5,$pdf->GetY()); 	  
$pdf->cell(21,0.5,"",1,0,'C',1,0);				 
$pdf->SetXY(13,$pdf->GetY()+2); 	  
$pdf->cell(6,0.5,"امضاء المدير",0,0,'C',0);		
$pdf->Output();
?>


