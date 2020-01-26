<?php
if( $_POST["DC"]!="" and $_POST["REMPLACANT"]!="-1" )
{
require_once('../tcpdf/GRH1.php');
$pdf = new GRH1('P', 'mm', 'A4', true, 'UTF-8', false);
$pdf->entete();
$idp=$_POST["idp"];
$date=date("Y-m-d");
$HEUR=$_POST["HEUR"];
$DATE=$_POST["DATE"];
$NOM=$_POST["NOM"];
$PRENOM=$_POST["PRENOM"];
$FONCTION=$_POST["FONCTION"];
$GRADE=$_POST["GRADE"];
$DUREE=$_POST["DUREE"];
$SERVICE=$_POST["SERVICE"];
//$FC=$_POST["FC"];
$DC=$_POST["DC"];
$REMPLACANT=$_POST["REMPLACANT"];
$CC=$_POST["CC"];

//********************************************************//
$pdf->SetFont('aefurat', '', 28);
$pdf->Text(50,65," طلـــــب عطلــــــــة");
$pdf->SetFont('aefurat', '', 16);
$pdf->Text(5,80," الاسم :");
$pdf->Text(120,80," اللقب :");
$pdf->Text(5,90,"الرتبـــة:");
$pdf->Text(5,100," الوظيفـة :");
$pdf->Text(5,110,"المصلحة :");
$pdf->Text(135,110,"المدة :");
$pdf->Text(5,120,"تاريخ بداية العطلة:");
$pdf->Text(120,120,"تاريخ نهاية العطلة:");
$pdf->Text(4,130," سبب الخروج:");
$pdf->Text(100,130," المستخلـف:");
$pdf->Text(5,140," إمضاء المعني");
$pdf->Text(70,140,"إمضاء المستخلف");
$pdf->Text(130,140,"  رئيس المصلحة");
$pdf->Text(5,170," المراقبة الطبية");
$pdf->Text(130,170," رئيس المجلس الطبي");
$pdf->Text(5,200," المدير الفرعي للمالية و الوسائل ");
$pdf->Text(130,200," المدير الفرعي للمصالح الصحية");
$pdf->Text(5,230,"المدير الفرعي لصيانة المعدات الطبية ");
$pdf->Text(130,230,"  المدير الفرعي للموارد البشرية");
$pdf->Text(100,250," عين وسارة في :  ");$pdf->Text(135,250,$date);
$pdf->Text(150,260,"  المدير");
//*********************************DONNES ****************************///تاريخ بداية العطلة :
$pdf->SetFont('dejavusans','B', 16);
$pdf->Text(22,80,$PRENOM);
$pdf->Text(136,80,$NOM);
$pdf->Text(26,90,$GRADE);
$pdf->Text(28,100,$FONCTION);
$pdf->Text(25,110,$SERVICE);
$pdf->Text(150,110,$DUREE." يوم");
$pdf->Text(44,120,$_POST["DC"]);
$pdf->Text(160,120,$pdf->datePlus($_POST["DC"],$_POST["DUREE"]));
$pdf->Text(33,130,$CC);
$pdf->Text(128,130,$pdf->nbrtostring("grh","grh","idp",$REMPLACANT,"Nomarab")."  ".$pdf->nbrtostring("grh","grh","idp",$REMPLACANT,"Prenom_Arabe") );
$pdf->SetFont('dejavusans','B', 18);
$pdf->Output();
} 
else
{
$idp=$_POST["idp"];
header("Location: ../index.php?uc=DEMCON&idp=$idp") ;  
}
?>
