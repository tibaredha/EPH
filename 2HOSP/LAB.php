<?php
require_once('../tcpdf/config/lang/eng.php');
require_once('../tcpdf/tcpdf.php');
require_once('../tcpdf/GP.php');
//EXAMENS BIOLOGIQUE 
$EB1=$_POST["EB1"];
$EB2=$_POST["EB2"];
$EB3=$_POST["EB3"];
$EB4=$_POST["EB4"];
$EB5=$_POST["EB5"];
$EB6=$_POST["EB6"];
$EB7=$_POST["EB7"];
$dateeuro=date('d/m/Y');
$dateeuro1=date('H:i');
// create new PDF document
$pdf = new GP('P', 'mm', 'A5', true, 'UTF-8', false);
$pdf->SetTextColor(0,0,255);
$pdf->setPrintHeader(false);
$pdf->setPrintFooter(false);
$pdf->SetDisplayMode('fullpage','single');//mode d affichage 
$pdf->AddPage();
//$pdf->setRTL(true);
$pdf->SetFont('aefurat', '', 10);
$dateeuro=date('d/m/Y');
//************************CORPS*************************// 
$pdf->Text(5,10,"المؤسسة العمومية الاستشفائية عين وسارة");
$pdf->Text(10,15,"ETABLISSEMENT PUBLIC");
$pdf->Text(8,20,"HOSPITALIER AIN OUSSERA");
$pdf->Rect(70,5,65,25,"d");
$pdf->Text(85,7,"N° d'enregistrement ");
$pdf->Text(83,12,"au service de laboratoire ");
$pdf->Text(83,17,"......................................");
$pdf->Text(80,32,"AIN OUSSERA LE :".$dateeuro);
$pdf->SetFont('aefurat', '', 15);
$pdf->Text(40,40,"DEMANDE D 'EXAMEN ");
$pdf->Text(35,48,"BIOLOGIQUE   N°-------");
$pdf->SetFont('aefurat', '', 10);
//$pdf->Text(5,60,"Docteur:".$PRATICIEN);
$pdf->Text(5,65,"Nom,Prénom du malade:");
$pdf->Text(5,70,"Date De Naissance:");$pdf->Text(100,70,"Age:_____ans");
$pdf->Text(5,75,"Service Hospitalier:");$pdf->Text(100,75,"Matricule:------------------------");
$pdf->Text(5,80,"Service Extra Hospitalier:---------------------------------------------------------------------------------------");
$pdf->Text(5,85,"Adresse:------------------------------------------------------------------------------------------------------------");
$pdf->SetFont('aefurat', '', 15);
$pdf->Text(40,90,"DIAGNOSTIC CLINIQUE :");
$pdf->Text(40,95,"----------------------------------");
$pdf->SetFont('aefurat', '', 10);
$pdf->Text(5,100,"Examen demandés :");$pdf->Text(90,100,"Resultats :");
$pdf->Line(50 ,110 ,50 ,173);
$pdf->Text(5,110,"1)-");
$pdf->Text(5,120,"2)-");
$pdf->Text(5,130,"3)-");
$pdf->Text(5,140,"4)-");
$pdf->Text(5,150,"5)-");
$pdf->Text(5,160,"6)-");
$pdf->Text(5,170,"7)-");
$pdf->Text(52,110,"------------------------------------------------------------------------------");
$pdf->Text(52,120,"------------------------------------------------------------------------------");
$pdf->Text(52,130,"------------------------------------------------------------------------------");
$pdf->Text(52,140,"------------------------------------------------------------------------------");
$pdf->Text(52,150,"------------------------------------------------------------------------------");
$pdf->Text(52,160,"------------------------------------------------------------------------------");
$pdf->Text(52,170,"------------------------------------------------------------------------------");
//********************************************************************//
$pdf->SetTextColor(225,0,0);
$pdf->SetFont('aefurat', '', 12);
$pdf->Text(45,64,$_POST["NOM"]."   ".$_POST["PRENOM"]);
// $pdf->Text(45,69,$_POST["DATENAISSANCE"]);
$pdf->Text(45,75,$pdf->nbrtostring("grh","service","ids",$_POST["SERVICEHOSP"],"servicefr"));
$pdf->Text(109,69,$_POST["AGE"]);
$pdf->Text(15,110,$EB1);
$pdf->Text(15,120,$EB2);
$pdf->Text(15,130,$EB3);
$pdf->Text(15,140,$EB4);
$pdf->Text(15,150,$EB5);
$pdf->Text(15,160,$EB6);
$pdf->Text(15,170,$EB7);
$pdf->SetTextColor(0,0,255);
$pdf->SetFont('aefurat', '', 10);

$pdf->Text(80,180,"AIN OUSSERA LE :".$dateeuro);
$pdf->Text(100,185,"Le Medecin");

$pdf->Output();

?>
