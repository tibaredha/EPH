<?php 
$idp=$_POST["idp"];
$NOM=$_POST["NOM"];
$PRENOM=$_POST["PRENOM"];
$GRADE=$_POST["GRADE"];
require_once('../tcpdf/config/lang/eng.php');
require_once('../tcpdf/tcpdf.php');
$pdf=new TCPDF('P','cm','A4');
$pdf->setPrintHeader(false);
$pdf->setPrintFooter(false);
$pdf->setRTL(true);
$pdf->SetDisplayMode('fullpage','single');//mode d affichage 
// $pdf->SetFillColor(255,255,255);
// $pdf->SetTextColor(0,0,0);
$pdf->SetFillColor(230);    //fond gris il faut ajouter au cell un autre parametre pour qui accepte la coloration
$pdf->SetTextColor(0,0,0);  //text noire
$pdf->SetFont('aefurat', '', 14);
$pdf->AddPage();
$pdf->Text(6,1,"الجمهورية الجزائرية الديمقراطية الشعبيـة");
$pdf->Text(5.5,2.0,"وزارة الصحة و السكان و إصلاح المستشفيات");
$pdf->Text(0.5,3.0,"مديرية الصحة و السكان لولاية الجلفة");
$pdf->Text(0.5,4.0,"المؤسسة العمومية الاستشفائية عين وسارة");
$pdf->Text(0.5,5.0,"المديرية الفرعية للموارد البشرية ");
$pdf->Text(0.5,6.0," الرقم:......./");
$pdf->SetXY(7.0,7.0);
$pdf->Cell(6.5,1.5,'بطاقــــة حساب العطلــة السنوية',1,1,'C');
$h=11;
$pdf->SetXY(0.5,$h); 	  
$pdf->cell(2,0.5,"الرقم",1,0,'C',1,0);
$pdf->SetXY(2.5,$h); 	  
$pdf->cell(3,0.5,"تاريخ   الخروج ",1,0,'C',1,0);
$pdf->SetXY(5.5,$h); 	  
$pdf->cell(3,0.5,"تاريخ الدخول",1,0,'C',1,0);
$pdf->SetXY(8.5,$h); 	  
$pdf->cell(1.5,0.5,"المدة ",1,0,'C',1,0);
$pdf->SetXY(10,$h); 	  
$pdf->cell(3.5,0.5,"نوع العطلة ",1,0,'C',1,0);
$pdf->SetXY(13.5,$h); 	  
$pdf->cell(3.5,0.5,"الباقي من السنة ",1,0,'C',1,0);
$pdf->SetXY(17,$h); 	  
$pdf->cell(3.5,0.5,"الملاحظة ",1,0,'C',1,0);
$pdf->SetXY(0.5,11.8); // marge sup 13
//******************************************************************************************************************//
$db_host="localhost";
$db_name="grh"; 
$db_user="root";
$db_pass="";
$cnx = mysql_connect($db_host,$db_user,$db_pass)or die ('I cannot connect to the database because: ' . mysql_error());
$db  = mysql_select_db($db_name,$cnx) ;
mysql_query("SET NAMES 'UTF8' ");
$colone=$_POST['idp'];
$query_liste = "SELECT * FROM regcong WHERE idp=$idp";
$requete = mysql_query( $query_liste, $cnx ) or die( "ERREUR MYSQL num곯: ".mysql_errno()."<br>Type de cette erreur: ".mysql_error()."<br>\n" );
$totalmbr1= mysql_num_rows($requete);
//***************************************************************************************************************************************//
while($row=mysql_fetch_object($requete))
  {
   $pdf->cell(2,0.5,$row->idregcong,0,0,'R',0);//5  =hauteur de la cellule origine =7  //السنوات
   $pdf->cell(3,0.5,$row->datesor,0,0,'C',0);//تاريخ   الخروج
   $pdf->cell(3,0.5,$row->dateent,0,0,'C',0);//تاريخ الدخول
   $pdf->cell(1.5,0.5,$row->duree,0,0,'C',0);//المدة 
   $pdf->cell(3.5,0.5,$row->cause,0,0,'C',0);//نوع العطلة 
   $pdf->cell(3.5,0.5,$row->STOCK,0,0,'C',0);//الباقي من السنة$row->reliquat
   $pdf->cell(3.5,0.5,"",0,0,'C',0);//الملاحظة
   $pdf->SetXY(0.5,$pdf->GetY()+0.77); 
  }

$pdf->SetXY(0.5,$pdf->GetY()); 	  
$pdf->cell(7,0.5,"المجموع الكلى  ".$totalmbr1,1,0,'C',1,0);	  
$pdf->SetXY(7.5,$pdf->GetY()); 	  
$pdf->cell(13,0.5,"",1,0,'C',1,0);				 
$pdf->SetXY(13,$pdf->GetY()+2); 	  
$pdf->cell(6,0.5,"امضاء المدير",0,0,'C',0);	
$pdf->Text(0.5,9," الاسم :".$PRENOM );
$pdf->Text(10,9,"اللقب: ".$NOM);
$pdf->Text(0.5,10,"الرتبـــة: ".$GRADE);
$pdf->SetFont('dejavusans','B', 18); //police d ecriture  
$pdf->Output();
?>
