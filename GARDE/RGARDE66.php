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
$date1=date("Y-m-d");
$date2=date("M-Y");
$pdf=new TCPDF('P','cm','A4');
$pdf->setRTL(true);
$pdf->setPrintHeader(false);
$pdf->setPrintFooter(false);
$pdf->SetDisplayMode('fullpage','single');//mode d affichage 
$pdf->SetFillColor(230);    //fond gris il faut ajouter au cell un autre parametre pour qui accepte la coloration
$pdf->SetTextColor(0,0,0);//text noire
$pdf->SetFont('aefurat', '', 10);
$pdf->AddPage();
$pdf->Text(6,1,"الجمهورية الجزائرية الديمقراطية الشعبيـة");
$pdf->Text(5.5,2.0,"وزارة الصحة و السكان و إصلاح المستشفيات");
$pdf->Text(0.5,3.0,"مديرية الصحة و السكان لولاية الجلفة");
$pdf->Text(0.5,4.0,"المؤسسة العمومية الاستشفائية عين وسارة");
$pdf->Text(0.5,5.0,"المديرية الفرعية للموارد البشرية ");
$pdf->Text(0.5,6.0," الرقم:......./");
$pdf->SetXY(7.0,6.0);
$pdf->Cell(6.5,1.5,'تحصيل المداومة لشهر ',1,1,'R');
$pdf->SetXY(7.0,7.5);
$pdf->Cell(6.5,1,'الرتبة :  '.'طبيب عام رئيسى فى الصحة العمومية',1,1,'C');
$h=9.5;
$pdf->SetXY(0.5,$h); 	  
$pdf->cell(3.5,0.5,"اللقب",1,0,'C',1,0);
$pdf->SetXY(4,$h); 	  
$pdf->cell(3.5,0.5,"الاسم",1,0,'C',1,0);
$pdf->SetXY(7.5,$h); 	  
$pdf->cell(3,0.5,"مداومة النهار",1,0,'C',1,0);
$pdf->SetXY(10.5,$h); 	  
$pdf->cell(3,0.5,"مداومة اليل",1,0,'C',1,0);
$pdf->SetXY(13.5,$h); 	  
$pdf->cell(3,0.5,"المجموع",1,0,'C',1,0);
$pdf->SetXY(16.5,$h); 	  
$pdf->cell(3,0.5,"الملاحضة",1,0,'C',1,0);
$pdf->SetXY(0.5,10); // marge sup 13
//********************************************************************************************//
$db_host="localhost";
$db_name="grh"; 
$db_user="root";
$db_pass="";
$cnx = mysql_connect($db_host,$db_user,$db_pass)or die ('I cannot connect to the database because: ' . mysql_error());
$db  = mysql_select_db($db_name,$cnx) ;
mysql_query("SET NAMES 'UTF8' ");
$query = "SELECT service.servicear as service,grh.servicear,grh.Nomlatin as Nomlatin ,grh.Prenom_Latin as Prenom_Latin,grh.Commune_Naissancear as Commune_Naissancear,grh.Sexe as Sexe ,grh.Date_Naissance as Date_Naissance ,grh.Prenom_Arabe as Prenom_Arabe,grh.Nomarab as Nomarab ,grh.idp as idp,grade.gradear as gradear FROM grh,grade,service where  grade.idg=grh.rnvgradear and  service.ids=grh.servicear   and cessation !='y' and grh.rnvgradear=6  order by Nomarab";
$resultat=mysql_query($query);
$totalmbr1=mysql_num_rows($resultat);

//***********************************************************************//
while($row=mysql_fetch_object($resultat))
  {
   $pdf->cell(3.5,0.5,$row->Nomarab,1,0,'R',0);//5  =hauteur de la cellule origine =7
   $pdf->cell(3.5,0.5,$row->Prenom_Arabe,1,0,'R',0);
   $pdf->cell(3,0.5,"",1,0,'C',0);
   $pdf->cell(3,0.5,"",1,0,'C',0);
   $pdf->cell(3,0.5,"",1,0,'C',0);
   $pdf->cell(3,0.5,"",1,0,'C',0);
   $pdf->SetXY(0.5,$pdf->GetY()+0.5); 
  }
$pdf->SetXY(0.5,$pdf->GetY()); 	  
$pdf->cell(7,0.5,"المجموع الكلى  ".$totalmbr1,1,0,'C',1,0);	  
$pdf->SetXY(7.5,$pdf->GetY()); 	  
$pdf->cell(12,0.5,"",1,0,'C',1,0);				 

$pdf->SetXY(10,$pdf->GetY()+2); 	  
$pdf->cell(6,0.5,"عين وسارة فى :".$date1,0,0,'C',0);	

$pdf->SetXY(13,$pdf->GetY()+2); 	  
$pdf->cell(6,0.5,"امضاء المدير",0,0,'C',0);		

$pdf->SetXY(1,$pdf->GetY()); 	  
$pdf->cell(6,0.5,"لجنة المداومة",0,0,'C',0);	


					  

$pdf->Output();
?>


