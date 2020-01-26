<?php
require_once('../tcpdf/GRH1.php');
$pdf = new GRH1('P', 'cm', 'A4', true, 'UTF-8', false);
//********************************************************************************************//
$db_host="localhost";
$db_name="grh"; 
$db_user="root";
$db_pass="";
$cnx = mysql_connect($db_host,$db_user,$db_pass)or die ('I cannot connect to the database because: ' . mysql_error());
$db  = mysql_select_db($db_name,$cnx) ;
mysql_query("SET NAMES 'UTF8' ");
$query = "SELECT service.servicear as service,grh.servicear,grh.Nomlatin as Nomlatin ,grh.Prenom_Latin as Prenom_Latin,grh.Commune_Naissancear as Commune_Naissancear,grh.Sexe as Sexe ,grh.Date_Naissance as Date_Naissance ,grh.Prenom_Arabe as Prenom_Arabe,grh.Nomarab as Nomarab ,grh.idp as idp,grade.gradear as gradear FROM grh,grade,service where  grade.idg=grh.rnvgradear and  service.ids=grh.servicear   and cessation !='y' and grh.rnvgradear=1  order by Nomarab";
$resultat=mysql_query($query);
$totalmbr1=mysql_num_rows($resultat);
//***********************************************************************//
$date=date("d-m-y");
$date1=date("Y-m-d");
$date2=date("M-Y");

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
//$pdf->Cell(6.5,1.5,'تحصيل المداومة لشهر '.$date2,1,1,'C');
$pdf->Cell(6.5,1.5,'تحصيل المداومة لشهر ',1,1,'C');
$pdf->SetXY(7.0,7.5);
$pdf->Cell(6.5,1,'الرتبة :  '.'ممارس أخصائي مساعد',1,1,'C');
$h=9.5;
$pdf->SetXY(0.5,$h); 	  
$pdf->cell(3.5,0.5,"اللقب",1,0,'C',1,0);
$pdf->SetXY(4,$h); 	  
$pdf->cell(3.5,0.5,"الاسم",1,0,'C',1,0);
$pdf->SetXY(7.5,$h); 	  
$pdf->cell(3,0.5,"ايام عادية",1,0,'C',1,0);
$pdf->SetXY(10.5,$h); 	  
$pdf->cell(3,0.5,"نهاية الاسبوع",1,0,'C',1,0);
$pdf->SetXY(13.5,$h); 	  
$pdf->cell(3,0.5,"الاعياد",1,0,'C',1,0);
$pdf->SetXY(16.5,$h); 	  
$pdf->cell(3,0.5,"الملاحضة",1,0,'C',1,0);

$h1=$totalmbr1/2;
//Nomarab
$pdf->SetXY(0.5,$pdf->GetY()+0.5); 
$Nomarab=$_POST['Nomarab'];
foreach ($Nomarab as $Nomarab0)
{
$pdf->cell(3.5,0.5,''.$Nomarab0,1,0,'C',0);
$pdf->SetXY(0.5,$pdf->GetY()+0.5);
}

//Prenom_Arabe
$pdf->SetXY(4,$pdf->GetY()-$h1-0.5); 
$Prenom_Arabe=$_POST['Prenom_Arabe'];
foreach ($Prenom_Arabe as $Prenom_Arabe0)
{
$pdf->cell(3.5,0.5,''.$Prenom_Arabe0,1,0,'C',0);
$pdf->SetXY(4,$pdf->GetY()+0.5);
}

//ايام عادية
$pdf->SetXY(7.5,$pdf->GetY()-$h1-0.5  );
$state0=$_POST['state0'];
foreach ($state0 as $statename0)
{
$pdf->cell(3,0.5,''.$statename0,1,0,'C',0);
$pdf->SetXY(7.5,$pdf->GetY()+0.5);
}		

//هاية الاسبوع
$pdf->SetXY(10.5,$pdf->GetY()-$h1-0.5  );
$state1=$_POST['state1'];
foreach ($state1 as $statename1)
{
$pdf->cell(3,0.5,''.$statename1,1,0,'C',0);
$pdf->SetXY(10.5,$pdf->GetY()+0.5);
}	

//الاعياد
$pdf->SetXY(13.5,$pdf->GetY()-$h1-0.5  );
$state2=$_POST['state2'];
foreach ($state2 as $statename2)
{
$pdf->cell(3,0.5,''.$statename2,1,0,'C',0);
$pdf->SetXY(13.5,$pdf->GetY()+0.5);
}	

//الملاحضة
$pdf->SetXY(16.5,$pdf->GetY()-$h1-0.5  );
$state3=$_POST['state3'];
foreach ($state3 as $statename3)
{
$pdf->cell(3,0.5,''.$statename3,1,0,'C',0);
$pdf->SetXY(16.5,$pdf->GetY()+0.5);
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


