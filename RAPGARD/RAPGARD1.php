<?php
if (!ISSET($_POST['annee'])||!ISSET($_POST['mois'])||!ISSET($_POST['jour'])||!ISSET($_POST['annee1'])||!ISSET($_POST['mois1'])||!ISSET($_POST['jour1']))
{
$datejour1 =date("Y-m-d");
$datejour2 =date("Y-m-d");
}
else
{
 if(empty($_POST['annee'])||empty($_POST['mois'])||empty($_POST['jour'])||empty($_POST['annee1'])||empty($_POST['mois1'])||empty($_POST['jour1']))
 {
 $datejour1 =date("Y-m-d");
 $datejour2 =date("Y-m-d");
 }
 else
 {
 $datejour1 = $_POST['annee'] .'-'.$_POST['mois'] .'-'.$_POST['jour'];
 $datejour2 = $_POST['annee1'].'-'.$_POST['mois1'].'-'.$_POST['jour1'];
 }
}
//condition si date1 ET SUP A DATE2  pose probleme
if ($datejour1>$datejour2)
{
header("Location: ../index.php?uc=RAPGARD") ;
}






require_once('../tcpdf/GP.php');
//**********************************************************************************************
$date=date("d-m-y");
$pdf=new GP('P','mm','A4');
// $pdf->setRTL(true);
$pdf->SetDisplayMode('fullpage','single');//mode d affichage 
// $pdf->SetFillColor(255,255,255);
// $pdf->SetTextColor(0,0,0);
$pdf->SetFillColor(230);    //fond gris il faut ajouter au cell un autre parametre pour qui accepte la coloration
$pdf->SetTextColor(0,0,0);  //text noire
$pdf->setPrintHeader(false);
$pdf->setPrintFooter(false);
$pdf->SetFont('aefurat', '', 12);
$pdf->AddPage();
$pdf->Text(50,10,"REPUBLIQUE ALGERIENNE DEMOCRATIQUE ET POPULAIRE");
$pdf->Text(20,15,"MINISTERE DE LA SANTE DE LA POPULATION ET DE LA REFORME HOSPITALIERE");
$pdf->Text(60,20,"DIRECTION DE LA SANTÉ WILAYA DE DJELFA");
$pdf->Text(5,30,"ETABLISSEMENT PUBLIC HOSPITALIER  D'AIN - OUSSERA");
$pdf->Text(5,35,"SERVICE: UMC");$pdf->Text(130,35,"AIN OUSSERA LE :".date("j-m-Y"));
$pdf->Text(5,40,"N°.........../".date("Y"));
$pdf->SetXY(55,50);
$pdf->Cell(95,10,'ACTIVITE DE LA GARDE',1,1,'C');



$pdf->SetXY(55,60);
$pdf->Cell(95,10," Du ".$pdf->dateUS2FR($datejour1)." Au ".$pdf->dateUS2FR($datejour2),1,1,'C');
$h=80;
$pdf->SetXY(05,$h); 	  
$pdf->cell(80,10,"Malades",1,0,'C',1,0);
$pdf->SetXY(85,$h); 	  
$pdf->cell(46,10,"Nombres",1,0,'C',1,0);
$pdf->SetXY(131,$h); 	  
$pdf->cell(70,10,"Observations",1,0,'C',1,0);
$h=90;
$pdf->SetXY(05,$h); 	  
$pdf->cell(80,10,"Examinés",1,0,'L',0);
$pdf->SetXY(85,$h); 	  
$pdf->cell(46,10,"",1,0,'C',0);
$pdf->SetXY(131,$h); 	  
$pdf->cell(70,10,"",1,0,'C',0);
$h=100;
$pdf->SetXY(05,$h); 	  
$pdf->cell(80,10,"Hospitalisés",1,0,'L',0);
$pdf->SetXY(85,$h); 	  
$pdf->cell(46,10,"",1,0,'C',0);
$pdf->SetXY(131,$h); 	  
$pdf->cell(70,10,"",1,0,'C',0);
$h=110;
$pdf->SetXY(05,$h); 	  
$pdf->cell(80,10,"Ayant Subi Une Intervention Chirurgicale",1,0,'L',0);
$pdf->SetXY(85,$h); 	  
$pdf->cell(46,10,"",1,0,'C',0);
$pdf->SetXY(131,$h); 	  
$pdf->cell(70,10,"",1,0,'C',0);
$h=120;
$pdf->SetXY(05,$h); 	  
$pdf->cell(80,10,"Recus Par Evacuation Origines Et Motifs",1,0,'L',0);
$pdf->SetXY(85,$h); 	  
$pdf->cell(46,10,"",1,0,'C',0);
$pdf->SetXY(131,$h); 	  
$pdf->cell(70,10,"",1,0,'C',0);
$h=130;
$pdf->SetXY(05,$h); 	  
$pdf->cell(80,10,"Traités A Titre Externe ",1,0,'L',0);
$pdf->SetXY(85,$h); 	  
$pdf->cell(46,10,"",1,0,'C',0);
$pdf->SetXY(131,$h); 	  
$pdf->cell(70,10,"",1,0,'C',0);
$h=140;
$pdf->SetXY(05,$h); 	  
$pdf->cell(80,10,"Evacués Motifs Lieu D'évacuation ",1,0,'L',0);
$pdf->SetXY(85,$h); 	  
$pdf->cell(46,10,"",1,0,'C',0);
$pdf->SetXY(131,$h); 	  
$pdf->cell(70,10,"",1,0,'C',0);
$h=155;
$pdf->SetXY(05,$h); 	  
$pdf->cell(100,10,"DIFFICULTES RENCONTREES PENDANT LA GARDE ",0,0,'L',0);
$h=200;
$pdf->SetXY(05,$h); 	  
$pdf->cell(100,10,"SUGGESTIONS ",0,0,'L',0);
$h=240;
$pdf->SetXY(05,$h); 	  
$pdf->cell(90,10,"VISA DU DIRECTEUR DE GARDE ",0,0,'L',0);
$h=240;
$pdf->SetXY(110,$h); 	  
$pdf->cell(90,10,"LE PRATICIEN RESPONSABLE DE LA GARDE ",0,0,'L',0);
$pdf->AddPage();
$pdf->Text(50,10,"REPUBLIQUE ALGERIENNE DEMOCRATIQUE ET POPULAIRE");
$pdf->Text(20,15,"MINISTERE DE LA SANTE DE LA POPULATION ET DE LA REFORME HOSPITALIERE");
$pdf->Text(60,20,"DIRECTION DE LA SANTÉ WILAYA DE DJELFA");
$pdf->Text(5,30,"ETABLISSEMENT PUBLIC HOSPITALIER  D'AIN - OUSSERA");
$pdf->Text(5,35,"SERVICE: UMC");$pdf->Text(130,35,"AIN OUSSERA LE :".date("j-m-Y"));
$pdf->Text(5,40,"N°.........../".date("Y"));
$pdf->SetXY(55,50);
$pdf->Cell(95,10,'FICHE MEDICALE DE GARDE',1,1,'C');
$pdf->SetXY(55,60);
$pdf->Cell(95,10," Du ".$pdf->dateUS2FR($datejour1)." Au ".$pdf->dateUS2FR($datejour2),1,1,'C');
$h=80;
$pdf->SetXY(05,$h); 	  
$pdf->cell(40,10,"NOM",1,0,'C',1,0);
$pdf->SetXY(45,$h); 	  
$pdf->cell(40,10,"PRENOM",1,0,'C',1,0);
$pdf->SetXY(85,$h); 	  
$pdf->cell(116,10,"GRADE",1,0,'C',1,0);
$pdf->SetXY(05,90); // MARGE SUP 13
//********************************************************************************************//
$db_host="localhost";
$db_name="grh"; 
$db_user="root";
$db_pass="";
$cnx = mysql_connect($db_host,$db_user,$db_pass)or die ('I cannot connect to the database because: ' . mysql_error());
$db  = mysql_select_db($db_name,$cnx) ;
mysql_query("SET NAMES 'UTF8' ");
$query = "SELECT * FROM garde  ";//where SORTI =''where DATEDUDECE >= '2014-01-01'
$resultat=mysql_query($query);
$totalmbr1=mysql_num_rows($resultat);
while($row=mysql_fetch_object($resultat))
  {
    $pdf->cell(40,10,$row->idp,1,0,'C',0);//5  =hauteur de la cellule origine =7
    $pdf->cell(40,10,$row->idp,1,0,'C',0);
    $pdf->cell(116,10,$row->idp,1,0,'L',0);
    $pdf->SetXY(5,$pdf->GetY()+10); 
  }
$pdf->SetXY(5,$pdf->GetY()); 	  
$pdf->cell(40,05,"TOTAL",1,0,'C',1,0);	  
$pdf->SetXY(45,$pdf->GetY()); 	  
$pdf->cell(116+40,05,$totalmbr1." Praticiens",1,0,'C',1,0);				 
$pdf->SetXY(110,$pdf->GetY()+20); 	  
$pdf->cell(90,10,"LE PRATICIEN RESPONSABLE DE LA GARDE ",0,0,'L',0);
$pdf->AddPage();
$pdf->Text(50,10,"REPUBLIQUE ALGERIENNE DEMOCRATIQUE ET POPULAIRE");
$pdf->Text(20,15,"MINISTERE DE LA SANTE DE LA POPULATION ET DE LA REFORME HOSPITALIERE");
$pdf->Text(60,20,"DIRECTION DE LA SANTÉ WILAYA DE DJELFA");
$pdf->Text(5,30,"ETABLISSEMENT PUBLIC HOSPITALIER  D'AIN - OUSSERA");
$pdf->Text(5,35,"SERVICE: UMC");$pdf->Text(130,35,"AIN OUSSERA LE :".date("j-m-Y"));
$pdf->Text(5,40,"N°.........../".date("Y"));
$pdf->SetXY(55,50);
$pdf->Cell(95,10,'PASSATION DE SERVICES',1,1,'C');
$pdf->SetXY(55,60);
$pdf->Cell(95,10," Du ".$pdf->dateUS2FR($datejour1)." Au ".$pdf->dateUS2FR($datejour2),1,1,'C');
$h=80;
$pdf->SetXY(05,$h); 	  
$pdf->cell(40,10,"N° DU LIT",1,0,'C',1,0);
$pdf->SetXY(45,$h); 	  
$pdf->cell(40,10,"NOM_PRENOM",1,0,'C',1,0);
$pdf->SetXY(85,$h); 	  
$pdf->cell(116,10,"DIAGNOSTIC",1,0,'C',1,0);
$pdf->SetXY(05,90); 
$db_host="localhost";
$db_name="grh"; 
$db_user="root";
$db_pass="";
$cnx = mysql_connect($db_host,$db_user,$db_pass)or die ('I cannot connect to the database because: ' . mysql_error());
$db  = mysql_select_db($db_name,$cnx) ;
mysql_query("SET NAMES 'UTF8' ");
$query = "SELECT * FROM garde  ";//where SORTI =''where DATEDUDECE >= '2014-01-01'
$resultat=mysql_query($query);
$totalmbr1=mysql_num_rows($resultat);
while($row=mysql_fetch_object($resultat))
  {
    $pdf->cell(40,10,$row->idp,1,0,'C',0);//5  =hauteur de la cellule origine =7
    $pdf->cell(40,10,$row->idp,1,0,'C',0);
    $pdf->cell(116,10,$row->idp,1,0,'L',0);
    $pdf->SetXY(5,$pdf->GetY()+10); 
  }
$pdf->SetXY(5,$pdf->GetY()); 	  
$pdf->cell(40,05,"TOTAL",1,0,'C',1,0);	  
$pdf->SetXY(45,$pdf->GetY()); 	  
$pdf->cell(116+40,05,$totalmbr1." Malades",1,0,'C',1,0);				 
$pdf->SetXY(110,$pdf->GetY()+20); 	  
$pdf->cell(90,10,"LE PRATICIEN RESPONSABLE DE LA GARDE ",0,0,'L',0);


	
$pdf->Output();
?>


