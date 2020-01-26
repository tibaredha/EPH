<?php
$colone=$_POST['SERVICE'];
$db_host="localhost";
$db_name="grh"; 
$db_user="root";
$db_pass="";
//la connection a la base de donnes par le biais de la commande mysql_connect qui a pour parametre (serveur, login, mdp)
$cnx = mysql_connect($db_host,$db_user,$db_pass)or die ('I cannot connect to the database because: ' . mysql_error());
//sélection de la base de données par le biais de la commande mysql_select_db qui a pour parametre (nom de la base, la chaine de connection) 
$db  = mysql_select_db($db_name,$cnx) ;
mysql_query("SET NAMES 'UTF8' ");
$query_liste = "SELECT * FROM service where ids = $colone ";
$requete = mysql_query( $query_liste, $cnx ) or die( "ERREUR MYSQL num?: ".mysql_errno()."<br>Type de cette erreur: ".mysql_error()."<br>\n" );
$result = mysql_fetch_array( $requete ) ;
$servicefr=$result["servicefr"];  
mysql_free_result($requete);
//**********************************************************************************************
$date=date("d-m-y");
require('../PDF/invoice.php');
$pdf=new FPDF('P','cm','A4');
//Titres des colonnes
$header=array('DATE DON','idp','nomdnr','prenomdnr');
$pdf->SetFont('Arial','B',10);
$pdf->AddPage();
$pdf->SetDisplayMode('fullpage','single');//mode d affichage 
$pdf->SetFillColor(255,255,255);
$pdf->SetTextColor(0,0,0);
$pdf->Text(5,4,"POINTAGE DU PERSONNEL   service  : ".$servicefr."  date: ".$date);
$h=4.5;
$pdf->SetXY(0.5,$h); 	  
$pdf->cell(3.5,0.5,"Nom ",1,0,'C',0);

$pdf->SetXY(4,$h); 	  
$pdf->cell(3.5,0.5,"Prenom ",1,0,'C',0);

$pdf->SetXY(7.5,$h); 	  
$pdf->cell(2,0.5,"fonction",1,0,'C',0);

$pdf->SetXY(9.5,$h); 	  
$pdf->cell(2,0.5,"entree",1,0,'C',0);

$pdf->SetXY(11.5,$h); 	  
$pdf->cell(2.5,0.5,"emargement",1,0,'C',0);

$pdf->SetXY(14,$h); 	  
$pdf->cell(2,0.5,"sortie",1,0,'C',0);

$pdf->SetXY(16,$h); 	  
$pdf->cell(2.5,0.5,"emargement",1,0,'C',0);

$pdf->SetXY(18.5,$h); 	  
$pdf->cell(2,0.5,"observation",1,0,'C',0);



$pdf->SetXY(0.5,5); // marge sup 13
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
$query = "SELECT service.servicear as service,grh.servicear,grh.Nomlatin as Nomlatin ,grh.Prenom_Latin as Prenom_Latin,grh.Commune_Naissancear as Commune_Naissancear,grh.Sexe as Sexe ,grh.Date_Naissance as Date_Naissance ,grh.Prenom_Arabe as Prenom_Arabe,grh.Nomarab as Nomarab ,grh.idp as idp,grade.gradear as gradear FROM grh,grade,service where  grade.idg=grh.rnvgradear and  service.ids=grh.servicear and grh.servicear=$colone order by Nomlatin";
//$query="SELECT grh.Nomlatin,grh.Prenom_Latin,grh.cessation,grh.SERVICEar as SERVICEar FROM GRH where cessation !='y' and SERVICEar = $colone order by Nomlatin ";
$resultat=mysql_query($query);
$totalmbr1=mysql_num_rows($resultat);

//***********************************************************************//
$pdf->Text(1,1,"REPUBLIQUE ALGERIENNE DEMOCRATIQUE ET POPULAIRE ");
$pdf->Text(1,1.5,"MINISTERE DE LA SANTE DE LA POPULATION ET DE LA REFORME HOSPITALIERE");
$pdf->Text(1,2,"Direction de la Santé Wilaya de Djelfa");
$pdf->Text(1,2.5,"Etablissement public hospitalier  D'Ain - Oussera");
$pdf->Text(1,3,"S/Direction des Ressources  Humaines");
$pdf->Text(1,3.5,"N°.........../");

$pdf->SetFont('Arial','B',10);
while($row=mysql_fetch_object($resultat))
  {
   $pdf->cell(3.5,1,$row->Nomlatin,1,0,'L',0);//5  =hauteur de la cellule origine =7
   $pdf->cell(3.5,1,$row->Prenom_Latin,1,0,'L',0);
   $pdf->cell(2,1,"",1,0,'C',0);
   $pdf->cell(2,1,"",1,0,'C',0);
   $pdf->cell(2.5,01,"",1,0,'C',0);
   $pdf->cell(2,1,"",1,0,'C',0);
   $pdf->cell(2.5,1,"",1,0,'C',0);
   $pdf->cell(2,1,"",1,0,'C',0);
   $pdf->SetXY(0.5,$pdf->GetY()+1); 
  }



$pdf->SetXY(0.5,$pdf->GetY()); 	  
$pdf->cell(7,0.5,"total effectif :".$totalmbr1,1,0,'C',0);	  

$pdf->SetXY(7.5,$pdf->GetY()); 	  
$pdf->cell(13,0.5,"",1,0,'C',0);	

			  



// $pdf->Rect(1, $pdf->GetY()+1,19, 2 ,"d");




// $pdf->SetXY(1,$pdf->GetY()+1); 	  
// $pdf->cell(3,0.5,"RH:repos hebdomadaire",0,0,'L',0);

$pdf->SetXY(13,$pdf->GetY()+1); 	  
$pdf->cell(6,0.5,"signature du chef de service",0,0,'C',0);		


// $pdf->SetXY(6,$pdf->GetY()); 	  
// $pdf->cell(3,0.5,"RC:repos compensateur",0,0,'L',0);
// $pdf->SetXY(1,$pdf->GetY()+0.5); 	  
// $pdf->cell(3,0.5,"MAL:maladie",0,0,'L',0);
// $pdf->SetXY(6,$pdf->GetY()); 	  
// $pdf->cell(3,0.5,"MAT:congé de maternité",0,0,'L',0);
// $pdf->SetXY(1,$pdf->GetY()+0.5); 	  
// $pdf->cell(3,0.5,"AI:absence irregulière",0,0,'L',0);
// $pdf->SetXY(6,$pdf->GetY()); 	  
// $pdf->cell(3,0.5,"AA:absence autorisée",0,0,'L',0);
// $pdf->SetXY(1,$pdf->GetY()+0.5); 	  
// $pdf->cell(3,0.5,"CA:congé annuel",0,0,'L',0);

					  
$pdf->output();
?>