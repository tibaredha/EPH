<?php
require_once('../tcpdf/GRH1.php');
$colone=$_POST['SERVICE'];
//*********************************************************************************************//
$db_host="localhost";
$db_name="grh"; 
$db_user="root";
$db_pass="";
$cnx = mysql_connect($db_host,$db_user,$db_pass)or die ('I cannot connect to the database because: ' . mysql_error());
$db  = mysql_select_db($db_name,$cnx) ;
mysql_query("SET NAMES 'UTF8' ");
$query_liste = "SELECT * FROM SERVICE where ids = $colone  ";
$requete = mysql_query( $query_liste, $cnx ) or die( "ERREUR MYSQL num?: ".mysql_errno()."<br>Type de cette erreur: ".mysql_error()."<br>\n" );
$result = mysql_fetch_array( $requete ) ;
$servicear=$result["servicear"];  
mysql_free_result($requete);
//*********************************************************************************************//
$cnx = mysql_connect($db_host,$db_user,$db_pass)or die ('I cannot connect to the database because: ' . mysql_error());
$db  = mysql_select_db($db_name,$cnx) ;
mysql_query("SET NAMES 'UTF8' ");
$query = "SELECT * FROM grh where SERVICEAR=$colone and  cessation ='' ";
$resultat=mysql_query($query);
$totalmbr1=mysql_num_rows($resultat);
//*********************************************************************************************//
$date=date("d-m-y");
$pdf = new GRH1('L', 'cm', 'A4', true, 'UTF-8', false);
$pdf->setRTL(true);
$pdf->setPrintHeader(false);
$pdf->setPrintFooter(false);
$pdf->SetDisplayMode('fullpage','single');//mode d affichage 
$pdf->SetFillColor(230); //fond gris il faut ajouter au cell un autre parametre pour qui accepte la coloration
$pdf->SetTextColor(0,0,0);//text noire
$pdf->SetFont('aefurat', '', 14);
$pdf->AddPage();
$pdf->Text(12,1,"الجمهورية الجزائرية الديمقراطية الشعبيـة");
$pdf->Text(11.5,2.0,"وزارة الصحة و السكان و إصلاح المستشفيات");
$pdf->Text(0.5,3.0,"مديرية الصحة و السكان لولاية الجلفة");
$pdf->Text(0.5,4.0,"المؤسسة العمومية الاستشفائية عين وسارة");
$pdf->Text(0.5,5.0,"المديرية الفرعية للموارد البشرية ");
$pdf->Text(0.5,6.0," الرقم:......./".date("Y"));
$pdf->SetXY(9.0,7.0);
$pdf->Cell(6.5,1.5,'القائمة الاسمية  لمصلحة '.' '.$servicear,0,1,'C');
$h=9;
$pdf->SetXY(0.5,$h); 	  
$pdf->cell(3.5,0.5,"اللقب",1,0,'R',1,0);
$pdf->SetXY(4,$h); 	  
$pdf->cell(3.5,0.5,"الاسم",1,0,'R',1,0);
$pdf->SetXY(7.5,$h); 	  
$pdf->cell(11,0.5,"الرتبة",1,0,'R',1,0);

$pdf->SetXY(18.5,$h); 	  
$pdf->cell(3,0.5,"تاريخ اول تعين ",1,0,'C',1,0);
$pdf->SetXY(21.5,$h); 	  
$pdf->cell(3,0.5,"تاريخ الالتحاق",1,0,'C',1,0);
$pdf->SetXY(24.5,$h); 	  
$pdf->cell(2,0.5,"الصنف",1,0,'C',1,0);
$pdf->SetXY(26.5,$h); 	  
$pdf->cell(2,0.5,"الدرجة",1,0,'C',1,0);
$pdf->SetXY(0.5,10); // marge sup 13
//***********************************************************************//
while($row=mysql_fetch_object($resultat))
  {
   $pdf->cell(3.5,1,$row->Nomarab,1,0,'R',0);//5  =hauteur de la cellule origine =7
   $pdf->cell(3.5,1,$row->Prenom_Arabe,1,0,'R',0);
   $pdf->cell(11,1,$pdf->nbrtostring("grh","grade","idg",$row->rnvgradear,"gradear") ,1,0,'R',0);
   
   $pdf->cell(3,1,$row->Date_Premier_Recrutement,1,0,'C',0);
   $pdf->cell(3,1,$row->DATEARRIVE,1,0,'C',0);
   $pdf->cell(2,1,$row->CATEGORIE,1,0,'C',0);
   $pdf->cell(2,1,$row->ECHELON,1,0,'C',0);
   $pdf->SetXY(0.5,$pdf->GetY()+1); 
  }
$pdf->SetXY(0.5,$pdf->GetY()); 	  
$pdf->cell(7,0.5,"المجموع الكلى للمستخدمين",1,0,'C',1,0);	  
$pdf->SetXY(7.5,$pdf->GetY()); 	  
$pdf->cell(21,0.5,$totalmbr1,1,0,'C',1,0);	 			 
$pdf->SetXY(13,$pdf->GetY()+1); 	  
$pdf->cell(18,0.5,"عين وسارة في :"." ".date("Y-m-d"),0,0,'C',0);		
$pdf->SetXY(20,$pdf->GetY()+1); 	  
$pdf->cell(6,0.5,"المدير",0,0,'C',0);
$pdf->Output();
?>


