<?php
if($_POST["DUREE"]!="" and $_POST["DC"]!="" and $_POST["REMPLACANT"]!="" and $_POST["CC"]!=""  )
{
if ($_POST["JANNPRE"] >= $_POST["DUREE"] ) 
{
require_once('../tcpdf/GRH1.php');
$pdf = new GRH1('P', 'mm', 'A4', true, 'UTF-8', false);
$pdf->entete();
$idp=$_POST["idp"];
$date=date("Y-m-d");
$date1=date("Y");
$HEUR=$_POST["HEUR"];           //ساعة الطلب
$DATE=$_POST["DATE"];           //التاريخ
$NOM=$_POST["NOM"];             //اللقب
$PRENOM=$_POST["PRENOM"];        //الاسم 
$GRADE=$_POST["GRADE"];           //الرتبة
$FONCTION=$_POST["FONCTION"];    //الوظيفة
$DUREE=$_POST["DUREE"];          //sous controle  la dure du conge المدة*
$JMADC=$_POST["DC"];             //تاريخ بداية العطلة*
$SERVICE=$_POST["SERVICE"];      //المصلحة
$REMPLACANT=$_POST["REMPLACANT"];//sous controle المستخلف* 
$CC=$_POST["CC"];                //sous controle سبب الخروج* 
$JANNPRE=$_POST["JANNPRE"];      //عدد الأيام
$JANNACT=$_POST["JANNACT"];      //jour annee actuel عدد الأيام 
//***************************************************************************//
$pdf->SetFont('aefurat', '', 28);
$pdf->Text(60,65," رخصة عطلة ");
$pdf->Text(108,65,$CC);
$pdf->SetFont('aefurat', '', 16);
$pdf->Text(5,80," الاسم :" );
$pdf->Text(5,90,"اللقب:");
$pdf->Text(5,100,"الرتبـــة:");
$pdf->Text(5,110," الوظيفـة :");
$pdf->Text(5,120,"المصلحة :");
$pdf->Text(5,130,"المدة :");
$pdf->Text(5,140,"تاريخ الخروج:");
$pdf->Text(5,150,"تاريخ الدخول:");
$pdf->Text(5,160," سبب الخروج:");
$pdf->Text(5,170," المستخلـف:");
$pdf->Text(80,180," توضيح العطلة ال".$CC);
$pdf->Rect(4, 180, 202, 60 ,"d");
$pdf->Line(4 ,188 ,206 ,188 );
$pdf->Line(55 ,188 ,55 ,240 );
$pdf->Line(4 ,188+30 ,206 ,188 +30);
$pdf->Text(5,190,"الباقي من العطل الماضية ");
$pdf->Text(160,190,$JANNPRE);
$pdf->Text(180,190,"يوم  / ايام ");
$pdf->Text(5,200," السنة الحالية");
$pdf->Text(160,200,$JANNACT);
$pdf->Text(180,200,"يوم  / ايام ");
$pdf->Text(5,210," المجموع");
$pdf->Text(160,210,$JANNACT+$JANNPRE);
$pdf->Text(180,210,"يوم  / ايام ");
$pdf->Text(5,220," المدة المأخوذة");
$pdf->Text(160,220,$DUREE);
$pdf->Text(180,220,"يوم  / ايام ");
$dif=$JANNACT+$JANNPRE-$DUREE;
$pdf->Text(5,230," الباقى من العطل ");
$pdf->Text(160,230,$dif);
$pdf->Text(180,230,"يوم  / ايام ");
$pdf->SetFont('aefurat', '', 12);
$pdf->Text(5,245," حررت من طرف :");//
$pdf->Text(6,250," السيد(ة):".$_SESSION["USER"]);//
$pdf->SetFont('aefurat', '', 16);

$pdf->Text(140,250," عين وسارة في :  ");
$pdf->Text(150,260,"  المدير");
$pdf->SetFont('aefurat','I', 17);



$pdf->registreconges($_POST["idp"],$_POST["DUREE"],$_POST["DC"],$pdf->datePlus($_POST["DC"],$_POST["DUREE"]),$CC,$pdf->nbrtostring("grh","grh","idp",$REMPLACANT,"Nomarab"),$dif);//************************enregistrement au niveau du registre des conges *******//
$pdf->maj($dif,$idp);//************************mise ajour le reste de jour en stock**************// 
$pdf->SetTextColor(225,0,0);
$pdf->Text(23,80,$PRENOM);
$pdf->Text(20,90,$NOM);
$pdf->Text(30,100,$GRADE);
$pdf->Text(30,110,$FONCTION);
$pdf->Text(30,120,$SERVICE);
$pdf->Text(25,130,$DUREE." "."يوم /أيام");
$pdf->Text(38,140,$JMADC);
$pdf->Text(38,150,$pdf->datePlus($_POST["DC"],$_POST["DUREE"]));
$pdf->Text(35,169,$pdf->nbrtostring("grh","grh","idp",$REMPLACANT,"Nomarab")."  ".$pdf->nbrtostring("grh","grh","idp",$REMPLACANT,"Prenom_Arabe"));
$pdf->Text(35,160,$CC);
$pdf->SetFont('dejavusans','B', 18); //police d ecriture  
$pdf->Output();
//$pdf->Output('$NOM.pdf','F');file
//$pdf->Output('directory/yourfilename.pdf','F');
//$pdf->Output('yourfilename.pdf','D');
//$pdf->Output('tiba','D');
//$pdf->Output('yourfilename.pdf','I'); Automatically open PDF in your browser after being generated:
}
else
{
$idp=$_POST["idp"];
header("Location: ../index.php?uc=CAP&idp=$idp") ;   
}
}
else
{
$idp=$_POST["idp"];
header("Location: ../index.php?uc=CAP&idp=$idp") ;   
}









?>
