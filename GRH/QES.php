<?php

require_once('../tcpdf/GRH1.php');
//***************************post*************************//
$pdf = new GRH1('P', 'mm', 'A4', true, 'UTF-8', false);
$pdf->entete();


$idp=$_POST["idp"];
$NOM=$_POST["NOM"];
$PRENOM=$_POST["PRENOM"];
$GRADE=$_POST["GRADE"];
$service=$_POST["SERVICE"];
$rc=$_POST["QES"]; 




$pdf->SetFont('aefurat', '', 28);
$pdf->Text(60,65," طلــب  استفســار");
$pdf->SetFont('aefurat', '', 16);
$pdf->Text(5,80," الى السيد:" );
$pdf->Text(5,90,"الرتبـــة:");
$pdf->Text(5,100,"المصلحة :");
$pdf->Rect(4, 110, 202, 140 ,"d");
$pdf->Line(4 ,120 ,206 ,120 );
$pdf->Text(33,110," طلــب  استفســار");
$pdf->Text(130,110," الجـــــــــــواب");
$pdf->Line(100 ,110 ,100 ,250 );
$pdf->Text(5,250," ملاحضة: الاجابة تكون خلال 48 ساعة");
$pdf->Text(140,250," عين وسارة في :  ");
//$pdf->Text(175,250,$date);
$pdf->Text(150,260,"  المدير");


// set cell padding
$pdf->setCellPaddings(1, 1, 1, 1);
// set cell margins
$pdf->setCellMargins(1, 1, 1, 1);
// set color for background
$pdf->SetFillColor(255, 255, 2);
$pdf->SetXY(3,119);
$pdf->MultiCell(106, 130, ''.$rc."\n", 1, 'J', 0, 2, '' ,'', true); // le 8eme parametre 0=transparent 1=jaune

//**********************************enregistre dans registre questionnaire**********************************//

// mysql_query("SET NAMES 'UTF8' ");
// $sql = "INSERT INTO quest (idp,sujet,date_questionaire) 
                          // VALUES ('".$_POST["sujet"]."','".$service."','".$servicef."','".$_POST["cause"]."','".$APARTIR."')";

// $requete = @mysql_query($sql, $cnx) or die($sql."<br>".mysql_error());

//*********************************DONNES ****************************///تاريخ بداية العطلة :
$pdf->SetFont('aefurat','I', 17);
$pdf->SetTextColor(225,0,0);
$pdf->Text(30,78,$NOM." ".$PRENOM);
$pdf->Text(30,88,$GRADE);
$pdf->Text(30,98,$service);
$pdf->Output();


?>
