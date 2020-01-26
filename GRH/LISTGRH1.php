<?php
require_once('../tcpdf/config/lang/eng.php');
require_once('../tcpdf/tcpdf.php');
$db_host="localhost";
$db_name="grh"; 
$db_user="root";
$db_pass="";
$cnx = mysql_connect($db_host,$db_user,$db_pass)or die ('I cannot connect to the database because: ' . mysql_error());
$db  = mysql_select_db($db_name,$cnx) ;
mysql_query("SET NAMES 'UTF8' ");
$query_liste = "SELECT * FROM service  ";
$requete = mysql_query( $query_liste, $cnx ) or die( "ERREUR MYSQL num?: ".mysql_errno()."<br>Type de cette erreur: ".mysql_error()."<br>\n" );
$result = mysql_fetch_array( $requete ) ;
$servicefr=$result["servicefr"];  
mysql_free_result($requete);
$date=date("d-m-y");
$pdf=new TCPDF('P','cm','A4');
$pdf->setRTL(true);
$pdf->SetDisplayMode('fullpage','single');//mode d affichage 
// $pdf->SetFillColor(255,255,255);
// $pdf->SetTextColor(0,0,0);
$pdf->SetFillColor(230);    //fond gris il faut ajouter au cell un autre parametre pour qui accepte la coloration
$pdf->SetTextColor(0,0,0);//text noire
$pdf->SetFont('aefurat', '', 14);
$pdf->AddPage();
$pdf->Text(6,1,"الجمهورية الجزائرية الديمقراطية الشعبيـة");
$pdf->Text(5.5,2.0,"وزارة الصحة و السكان و إصلاح المستشفيات");
$pdf->Text(0.5,3.0,"مديرية الصحة و السكان لولاية الجلفة");
$pdf->Text(0.5,4.0,"المؤسسة العمومية الاستشفائية عين وسارة");
$pdf->Text(0.5,5.0,"المديرية الفرعية للموارد البشرية ");
$pdf->Text(0.5,6.0," الرقم:......./");
$pdf->SetXY(7.0,7.0);
$pdf->Cell(6.5,1.5,'القائمة الاسمية',1,1,'C');
$h=9;
$pdf->SetXY(0.5,$h); 	  
$pdf->cell(3.5,0.5,"اللقب",1,0,'C',1,0);
$pdf->SetXY(4,$h); 	  
$pdf->cell(3.5,0.5,"الاسم",1,0,'C',1,0);
$pdf->SetXY(7.5,$h); 	  
$pdf->cell(3,0.5,"تاريخ الميلاد",1,0,'C',1,0);
$pdf->SetXY(10.5,$h); 	  
$pdf->cell(4.5,0.5,"بلدية الميلاد",1,0,'C',1,0)
$pdf->SetXY(15,$h); 	  
$pdf->cell(4.5,0.5,"ولاية الميلاد",1,0,'C',1,0);
$pdf->SetXY(0.5,10); // marge sup 13
//********************************************************************************************//
$db_host="localhost";
$db_name="grh"; 
$db_user="root";
$db_pass="";
$cnx = mysql_connect($db_host,$db_user,$db_pass)or die ('I cannot connect to the database because: ' . mysql_error());
$db  = mysql_select_db($db_name,$cnx) ;
mysql_query("SET NAMES 'UTF8' ");
$query = "SELECT grh.Commune_Naissancear as Commune_Naissancear,grh.Date_Naissance as Date_Naissance ,grh.Prenom_Arabe as Prenom_Arabe,grh.Nomarab as Nomarab ,grh.idp as idp,com.communear as communear ,wil.WILAYASAR as WILAYASAR FROM grh,com,wil  where grh.Wilaya_Naissancear=wil.idwil and grh.Commune_Naissancear=com.idcom and cessation !='y' order by Nomarab ";
$resultat=mysql_query($query);
$totalmbr1=mysql_num_rows($resultat);
//***********************************************************************//
while($row=mysql_fetch_object($resultat))
  {
    $pdf->cell(3.5,1,$row->Nomarab,1,0,'R',0);//5  =hauteur de la cellule origine =7
    $pdf->cell(3.5,1,$row->Prenom_Arabe,1,0,'R',0);
    $pdf->cell(3,1,$row->Date_Naissance,1,0,'R',0);
    $pdf->cell(4.5,1,$row->communear,1,0,'R',0);
	$pdf->cell(4.5,1,$row->WILAYASAR,1,0,'R',0);
    $pdf->SetXY(0.5,$pdf->GetY()+1); 
  }
$pdf->SetXY(0.5,$pdf->GetY()); 	  
$pdf->cell(7,0.5,"المجموع الكلى".$totalmbr1,1,0,'C',1,0);	  
$pdf->SetXY(7.5,$pdf->GetY()); 	  
$pdf->cell(12,0.5,"",1,0,'C',1,0);				 
$pdf->SetXY(13,$pdf->GetY()+2); 	  
$pdf->cell(6,0.5,"امضاء المدير",0,0,'C',0);		
$pdf->Output();
?>


