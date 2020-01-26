<?php
require_once('../tcpdf/GRH1.php');
$pdf=new GRH1('L','cm','A4');
$pdf->mysqlconnect();
$query_liste = "SELECT * FROM service  ";
$requete = mysql_query( $query_liste ) or die( "ERREUR MYSQL num?: ".mysql_errno()."<br>Type de cette erreur: ".mysql_error()."<br>\n" );
$result = mysql_fetch_array( $requete ) ;
$servicefr=$result["servicefr"];  
mysql_free_result($requete);
//**********************************************************************************************
$date=date("d-m-y");

$pdf->setPrintHeader(false);
$pdf->setPrintFooter(false);
$pdf->setRTL(true);

$pdf->SetDisplayMode('fullpage','single');//mode d affichage 
// $pdf->SetFillColor(255,255,255);
// $pdf->SetTextColor(0,0,0);
$pdf->SetFillColor(230);    //fond gris il faut ajouter au cell un autre parametre pour qui accepte la coloration
$pdf->SetTextColor(0,0,0);//text noire
$pdf->SetFont('aefurat', '', 14);
$pdf->AddPage();
$pdf->Text(12,1,"الجمهورية الجزائرية الديمقراطية الشعبيـة");
$pdf->Text(11.5,2.0,"وزارة الصحة و السكان و إصلاح المستشفيات");
$pdf->Text(0.5,3.0,"مديرية الصحة و السكان لولاية الجلفة");
$pdf->Text(0.5,4.0,"المؤسسة العمومية الاستشفائية عين وسارة");
$pdf->Text(0.5,5.0,"المديرية الفرعية للموارد البشرية ");
$pdf->Text(0.5,6.0," الرقم:......./");
$pdf->SetXY(10,7.0);
$pdf->Cell(10,1.5,'القائمة الاسمية للمستخدمين المغادرين  بسبب   التقاعد',1,1,'C');

$h=9;
$pdf->SetXY(0.5,$h); 	  
$pdf->cell(3.5,0.5,"اللقب",1,0,'C',1,0);

$pdf->SetXY(4,$h); 	  
$pdf->cell(3.5,0.5,"الاسم",1,0,'C',1,0);

$pdf->SetXY(7.5,$h); 	  
$pdf->cell(3.5,0.5,"سبب الذهاب",1,0,'C',1,0);

$pdf->SetXY(11,$h); 	  
$pdf->cell(3.5,0.5,"تاريخ الذهاب",1,0,'C',1,0);

$pdf->SetXY(14.5,$h); 	  
$pdf->cell(10,0.5,"الرتبة",1,0,'C',1,0);

$pdf->SetXY(24.5,$h); 	  
$pdf->cell(4.5,0.5,"الملاحضة",1,0,'C',1,0);


$pdf->SetXY(0.5,10); // marge sup 13


//********************************************************************************************//
$pdf->mysqlconnect();
$query = "SELECT service.servicear as service,grh.Date_Cessation,grh.Motif_Cessation,grh.servicear,grh.Nomlatin as Nomlatin ,grh.Prenom_Latin as Prenom_Latin,grh.Commune_Naissancear as Commune_Naissancear,grh.Sexe as Sexe ,grh.Date_Naissance as Date_Naissance ,grh.Prenom_Arabe as Prenom_Arabe,grh.Nomarab as Nomarab ,grh.idp as idp,grade.gradear as gradear FROM grh,grade,service where  grade.idg=grh.rnvgradear and  service.ids=grh.servicear and cessation ='y' and Motif_Cessation='3'order by Motif_Cessation";
$resultat=mysql_query($query);
$totalmbr1=mysql_num_rows($resultat);

//***********************************************************************//



while($row=mysql_fetch_object($resultat))
  {
   $pdf->cell(3.5,1,$row->Nomarab,1,0,'R',0);//5  =hauteur de la cellule origine =7
   $pdf->cell(3.5,1,$row->Prenom_Arabe,1,0,'R',0);
   $pdf->cell(3.5,1,$pdf->nbrtostring("grh","causedepart","idcausedepart",$row->Motif_Cessation,"causedepartar"),1,0,'R',0);
   $pdf->cell(3.5,1,$row->Date_Cessation,1,0,'R',0);
   $pdf->cell(10,1,$row->gradear,1,0,'R',0);
   $pdf->cell(4.5,1,"",1,0,'R',0);
   $pdf->SetXY(0.5,$pdf->GetY()+1); 
  }
$pdf->SetXY(0.5,$pdf->GetY()); 	  
$pdf->cell(7,0.5,"المجموع الكلى  ".$totalmbr1,1,0,'C',1,0);	  
$pdf->SetXY(7.5,$pdf->GetY()); 	  
$pdf->cell(21.5,0.5,"",1,0,'C',1,0);				 
$pdf->SetXY(13,$pdf->GetY()+2); 	  
$pdf->cell(6,0.5,"امضاء المدير",0,0,'C',0);		


//$pdf->Table('select idp as الرقم,Nomarab as اللقب ,Prenom_Arabe as الاسم from GRH where cessation ="y" order by idp');

$pdf->Output();
?>


