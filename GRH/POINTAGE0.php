<?php
require_once('../tcpdf/GRH1.php');
$colone=$_POST['SERVICE'];
$date=date("d-m-y");
$pdf = new GRH1('P', 'cm', 'A4', true, 'UTF-8', false);
$pdf-> mysqlconnect();
$query = "SELECT * FROM grh where SERVICEAR=$colone and  cessation ='' ORDER BY Nomlatin";
$resultat=mysql_query($query);
$totalmbr1=mysql_num_rows($resultat);
$date=date("d-m-Y");
$date1=date("Y-m-d");



$pdf->setRTL(true);
$pdf->setPrintHeader(false);
$pdf->setPrintFooter(false);
$pdf->SetDisplayMode('fullpage','single');//mode d affichage 
$pdf->SetFillColor(230); //fond gris il faut ajouter au cell un autre parametre pour qui accepte la coloration
$pdf->SetTextColor(0,0,0);//text noire
$pdf->SetFont('aefurat', '', 10);
$pdf->AddPage();
$pdf->Text(8.2,0.5,"الجمهورية الجزائرية الديمقراطية الشعبيـة");
$pdf->Text(8,1,"وزارة الصحة و السكان و إصلاح المستشفيات");
$pdf->Text(8.5,1.5,"مديرية الصحة و السكان لولاية الجلفة");
$pdf->Text(0.5,2.0,"المؤسسة العمومية الاستشفائية عين وسارة");
$pdf->Text(0.5,2.5,"المديرية الفرعية للموارد البشرية ");
$pdf->Text(0.5,3.0," الرقم:......./");
$pdf->Text(2.2,3.0,date("Y"));

$pdf->SetXY(3,3.5); 	  
$pdf->cell(15,0.5,"كشف الحضور للمصلحة  ".$pdf->nbrtostring("grh","service","ids",$_POST['SERVICE'],"servicear")."  ليوم  ".date("Y-m-d"),1,0,'C',0);

//$pdf->Text(5,3.5,"MOUVEMENT DU PERSONNEL   service  :".."  DU: ");//".$servicefr."
$h=4.5;
$pdf->SetXY(0.5,$h); 	  
$pdf->cell(6,0.5,"اللفب و الاسم",1,0,'l',0);
$pdf->SetXY($pdf->GetX(),$h); 	  
$pdf->cell(2,0.5,"الحضور",1,0,'C',0);
$pdf->SetXY($pdf->GetX(),$h); 	  
$pdf->cell(1,0.5,"RH",1,0,'C',0);
$pdf->SetXY($pdf->GetX(),$h); 	  
$pdf->cell(1,0.5,"RC",1,0,'C',0);
$pdf->SetXY($pdf->GetX(),$h); 	  
$pdf->cell(1,0.5,"AA",1,0,'C',0);
$pdf->SetXY($pdf->GetX(),$h); 	  
$pdf->cell(1,0.5,"CA",1,0,'C',0);
$pdf->SetXY($pdf->GetX(),$h); 	  
$pdf->cell(1,0.5,"MAL",1,0,'C',0);
$pdf->SetXY($pdf->GetX(),$h); 	  
$pdf->cell(1,0.5,"MAT",1,0,'C',0);
$pdf->SetXY($pdf->GetX(),$h); 	  
$pdf->cell(1,0.5,"AI",1,0,'C',0);
$pdf->SetXY($pdf->GetX(),$h); 	  
$pdf->cell(5,0.5,"الملاحضة",1,0,'C',0);
$pdf->SetXY(0.5,5); 
while($row=mysql_fetch_object($resultat))
  {
   $pdf->cell(6,0.5,$row->Nomarab."  ".$row->Prenom_Arabe,1,0,'R',0);
   $pdf->cell(2,0.5,"",1,0,'C',0);
   $pdf->cell(1,0.5,"",1,0,'C',0);
   $pdf->cell(1,0.5,"",1,0,'C',0);
   $pdf->cell(1,0.5,"",1,0,'C',0);
   $pdf->cell(1,0.5,"",1,0,'C',0);
   $pdf->cell(1,0.5,"",1,0,'C',0);
   $pdf->cell(1,0.5,"",1,0,'C',0);
   $pdf->cell(1,0.5,"",1,0,'C',0);
   $pdf->cell(5,0.5,$pdf->SITUATION($row->idp,$date1),1,0,'C',0); //"468" 
   $pdf->SetXY(0.5,$pdf->GetY()+0.5); 
  }  
$pdf->SetXY(0.5,$pdf->GetY()); 	  
$pdf->cell(6,0.5,"المجموع الكلي : ".$totalmbr1,1,0,'C',0);	  
$pdf->SetXY($pdf->GetX(),$pdf->GetY()); 	  
$pdf->cell(2,0.5,"___",1,0,'C',0);
$pdf->SetXY($pdf->GetX(),$pdf->GetY()); 	  
$pdf->cell(1,0.5,"___",1,0,'C',0);
$pdf->SetXY($pdf->GetX(),$pdf->GetY()); 	  
$pdf->cell(1,0.5,"___",1,0,'C',0);
$pdf->SetXY($pdf->GetX(),$pdf->GetY()); 	  
$pdf->cell(1,0.5,"___",1,0,'C',0);
$pdf->SetXY($pdf->GetX(),$pdf->GetY()); 	  
$pdf->cell(1,0.5,"___",1,0,'C',0);
$pdf->SetXY($pdf->GetX(),$pdf->GetY()); 	  
$pdf->cell(1,0.5,"___",1,0,'C',0);
$pdf->SetXY($pdf->GetX(),$pdf->GetY()); 	  
$pdf->cell(1,0.5,"___",1,0,'C',0);
$pdf->SetXY($pdf->GetX(),$pdf->GetY()); 	  
$pdf->cell(1,0.5,"___",1,0,'C',0);
$pdf->SetXY($pdf->GetX(),$pdf->GetY()); 	  
$pdf->cell(5,0.5,"____________",1,0,'C',0);
$pdf->Rect(1, $pdf->GetY()+1,19, 2 ,"d");
$pdf->SetXY(1.7,$pdf->GetY()+1); 	  
$pdf->cell(3,0.5,"RH:repos hebdomadaire",0,0,'L',0);
$pdf->SetXY(13,$pdf->GetY()); 	  
$pdf->cell(6,0.5,"رئيس المصلحة",0,0,'C',0);		
$pdf->SetXY(7,$pdf->GetY()); 	  
$pdf->cell(3,0.5,"RC:repos compensateur",0,0,'L',0);
$pdf->SetXY(1.7,$pdf->GetY()+0.5); 	  
$pdf->cell(3,0.5,"MAL:maladie",0,0,'L',0);
$pdf->SetXY(6,$pdf->GetY()); 	  
$pdf->cell(4,0.5,"MAT:congé de maternité",0,'L',0);
$pdf->SetXY(0.7,$pdf->GetY()+0.5); 	  
$pdf->cell(4,0.5,"AI:absence irregulière",0,0,'L',0);
$pdf->SetXY(7,$pdf->GetY()); 	  
$pdf->cell(3,0.5,"AA:absence autorisée",0,0,'L',0);
$pdf->SetXY(1.7,$pdf->GetY()+0.5); 	  
$pdf->cell(3,0.5,"CA::congé annuel",0,0,'L',0);
$pdf->Output();
?>