<?php
if( $_POST["DC"]!=""  )
{
$date=date("Y-m-d");
$date1=date("Y");
$HEUR=$_POST["HEUR"];
$DATE=$_POST["DATE"];
$NOM=$_POST["NOM"];
$PRENOM=$_POST["PRENOM"];
$GRADE=$_POST["GRADE"];
$DUREE=$_POST["DUREE"];
$SERVICE=$_POST["SERVICE"];
$DC=$_POST["DC"];
$REMPLACANT=$_POST["REMPLACANT"];
// $CC=$_POST["CC"];
//DEBUT CONGE
$J = substr($_POST["DC"],0,2);
$M = substr($_POST["DC"],3,2);
$A = substr($_POST["DC"],6,4);
$JMADC=$A."-".$M."-".$J;
//********************************************************//
// la fonction marche bien 
function datePlus($dateDo,$nbrJours)
{$timeStamp = strtotime($dateDo); 
$timeStamp += 24 * 60 * 60 * $nbrJours;
$newDate = date("Y-m-d", $timeStamp);
return  $newDate;
}
$dateDo=$JMADC;
$nbrJours =$DUREE ;
$FIN=datePlus($dateDo,$nbrJours);
//********************************************************//
// create new PDF document
require_once('../tcpdf/GRH1.php');
$pdf = new GRH1('P', 'mm', 'A4', true, 'UTF-8', false);
$pdf->setPrintHeader(false);
$pdf->setPrintFooter(false);
$lg['w_page'] = 'page';
$pdf->setLanguageArray($lg);
$pdf->AddPage();
$pdf->setRTL(true);
$pdf->SetDisplayMode('fullpage','single');//mode d affichage 
$pdf->SetFont('aefurat', '', 18);
//************************CORPS*************************// 
$pdf->Text(60,10,"الجمهورية الجزائرية الديمقراطية الشعبيـة");
$pdf->Text(55,20,"وزارة الصحة و السكان و إصلاح المستشفيات");
$pdf->Text(5,30,"مديرية الصحة و السكان لولاية الجلفة");
$pdf->Text(5,40,"المؤسسة العمومية الاستشفائية عين وسارة");
$pdf->Text(5,50,"المديرية الفرعية للموارد البشرية ");
$pdf->Text(5,60," الرقم:......./");
$pdf->Text(35,60,$date1);
$pdf->SetFont('aefurat', '', 28);
$pdf->Text(58,65," طلب تبديل المداومة");
$pdf->SetFont('aefurat', '', 16);
$pdf->Text(5,80," الاسم :");
$pdf->Text(120,80," اللقب :");
$pdf->Text(5,90,"الرتبـــة:");
$pdf->Text(5,100,"المصلحة :");
$pdf->Text(5,110,"تاريخ  المداومة :");
$pdf->Text(120,110,"من الساعة :");
$pdf->Text(4,120," سبب  التبديل : ظرف طارئ");
//*************************************//
$pdf->Text(120,120," المستخلـف:");
$pdf->Text(20,145," إمضاء المعني");
$pdf->Text(80,145,"إمضاء المستخلف");
$pdf->Text(148,145," لجنة المداومة");
$pdf->Line(5 ,145 ,205 ,145 );
$pdf->Line(5 ,155 ,205 ,155 );
$pdf->Line(5 ,185 ,205 ,185 );
$pdf->Line(205,145,205,185 );
$pdf->Line(140,145,140,185 );
$pdf->Line(80,145,80,185 );
$pdf->Line(5,145,5,185 );
$pdf->Text(5,200," المدير الفرعي للمصالح الصحية");
//**************************************//
$pdf->Text(100,250," عين وسارة في :  ");
$pdf->Text(150,260,"  المدير");
//*********************************DONNES ****************************///تاريخ بداية العطلة :
$pdf->SetFont('aefurat','B', 16);
$pdf->SetTextColor(225,0,0);
$pdf->Text(22,80,$PRENOM);
$pdf->Text(136,80,$NOM);
$pdf->Text(26,90,$GRADE);
$pdf->Text(25,100,$SERVICE);
$pdf->Text(146,110,$DUREE);
$pdf->Text(40,110,$_POST["DC"]);
// $pdf->Text(35,120,$CC);
$pdf->Text(148,120,$REMPLACANT);$pdf->Text(135,250,$date);


//aealarabiya
//dejavusans
//aefurat
$pdf->Output();
}//fin if 
else
{
    $idp=$_POST["idp"];
    //echo("La modification à echouee redirection ver page") ;
	header("Location: ../index.php?uc=DEMPERS&idp=$idp") ;
   
}
?>
