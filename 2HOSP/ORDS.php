<?php
//*******************************************************//
//******************données envoyées de ord2****************//
$NOM="nom";             
$PRENOM="prenom";        
$SEXE="sexe";                  
$DATENAISSANCE="DATENAISSANCE";
$AGE="AGE";
$ADRESSE="ADRESSE"; 

$MED1="MED1";             
$DOSE1="DOSE1";        
$QUT1="QUT1";        

$MED2="MED2";             
$DOSE2="DOSE2";        
$QUT2="QUT2";  

$MED3="MED3";             
$DOSE3="DOSE3";        
$QUT3="QUT3";  

$MED4="MED4";             
$DOSE4="DOSE4";        
$QUT4="QUT4";  

$MED5="MED5";             
$DOSE5="DOSE5";        
$QUT5="QUT5";  


//*******************************************************//

require_once('../tcpdf/config/lang/eng.php');
require_once('../tcpdf/tcpdf.php');
// create new PDF document
$pdf = new TCPDF('P', 'mm', 'A5', true, 'UTF-8', false);


$pdf->AddPage();
$pdf->setPrintHeader(false);
$pdf->setPrintFooter(false);
//$pdf->setRTL(true);
$pdf->SetFont('aefurat', '', 10);
$dateeuro=date('d/m/Y');
//************************CORPS*************************// 
$pdf->Text(5,10,"المؤسسة العمومية الاستشفائية عين وسارة");
$pdf->Text(10,15,"ETABLISSEMENT PUBLIC");
$pdf->Text(8,20,"HOSPITALIER AIN OUSSERA");
$pdf->Text(80,30,"AIN OUSSERA LE :".$dateeuro);
$pdf->SetFont('aefurat', '', 15);
$pdf->Text(98,40,"وصــفــة");
$pdf->Text(92,48,"ORDONNACE");
$pdf->SetFont('aefurat', '', 14);
$pdf->Text(5,60,"Delivrée par le Docteur");
$pdf->Text(5,70,"A Mr/Mme/Melle"."   ".$NOM."   ".$PRENOM);
$pdf->Text(100,70,"Age".$AGE);
$pdf->Text(5,80,"Domicile".$ADRESSE);


$pdf->Text(5,90,"1)".$MED1);$pdf->Text(130,90,$QUT1);

$pdf->Text(5,100,"2)".$MED2);$pdf->Text(130,100,$QUT2);

$pdf->Text(5,110,"3)".$MED3);$pdf->Text(130,110,$QUT3);

$pdf->Text(5,120,"4)".$MED4);$pdf->Text(130,120,$QUT4);

$pdf->Text(5,130,"5)".$MED5);$pdf->Text(130,130,$QUT5);

$pdf->SetFont('aefurat', '', 10);
$pdf->Text(20,95,$DOSE1);
$pdf->Text(20,105,$DOSE2);
$pdf->Text(20,115,$DOSE3);
$pdf->Text(20,125,$DOSE4);
$pdf->Text(20,135,$DOSE5);
$pdf->SetFont('aefurat', '', 14);
//********************************************************************//
$pdf->SetFont('aefurat', '', 12);
$pdf->Text(100,155,"Le Medecin");
$pdf->Line(5 ,174 ,142 ,174 );
$pdf->Text(45,175,"لاتتركو ابدا الادوية فى متناول الاطفال");
$pdf->Text(30,180," Ne Laissez Jamais Les Medicament a La Portée Des Enfants");
//*********************************DONNES ****************************///




$pdf->Output();

?>
