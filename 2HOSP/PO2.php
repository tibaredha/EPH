<?php
//****************donnees/****************************************//
$IDP=$_POST["id"]; 
$NOM=$_POST["NOM"];             
$PRENOM=$_POST["PRENOM"];        
$SEXE=$_POST["SEXE"];                  
$DATENAISSANCE=$_POST["DATENAISSANCE"];
$AGE=$_POST["AGE"];
$FILS=$_POST["FILS"];
$ETDE=$_POST["ETDE"];
$COMMUNE=$_POST["COMMUNE"];
$WILAYA=$_POST["WILAYA"];
$COMMUNER=$_POST["COMMUNER"];
$WILAYAR=$_POST["WILAYAR"];
$ADRESSE=$_POST["ADRESSE"];
$HOSP="H";     
$dateeuro=date('d/m/Y');
$dateeuro1=date('H:i');
$rc=$_POST["1"]; 

require_once('../TCPDF/tcpdf.php');

$pdf = new TCPDF(PDF_PAGE_ORIENTATION, PDF_UNIT, PDF_PAGE_FORMAT, true, 'UTF-8', false);
$pdf->AddPage('p','A4');
$pdf->SetDisplayMode('fullpage','single');//mode d affichage 

//****************************************************************//
$pdf->Rect(4,5,202,25,"d");
$pdf->Text(50,10,"Minstére de la Santé de la Population et de réforme hospitaliére ");
$pdf->Text(50,15,"Direction de la Santé et de la Population de la Wilaya de Djelfa ");
$pdf->Text(65,20,"Etablissement public hospitalier d'Ain oussera  ");
$pdf->Text(70,38,"COMPTE RENDU OPPERATOIRE");
$pdf->Text(5,50,"Identification de l'établissement: EPH AIN OUSSERA WILAYA DE DJELFA ");
$pdf->Text(5,60,"intervention le : ".$dateeuro);                     $pdf->Text(60,60," Heurs  : ".$dateeuro1);
$pdf->Text(5,70,"Identification du service d'hospitalisation :"); 
$pdf->Text(5,80,"Identification du medecin traitant :");
$pdf->Text(5,90,"Identification du medecin anesthesiste :");
$pdf->Text(70,100,"Renseignement sur le malade  ");
$pdf->Text(5,110,"Nom:");
$pdf->Text(5,120,"Prénom:");
$pdf->Text(5,130,"Date et lieu de naissance:");  $pdf->Text(80,130," à:");
$pdf->Text(5,140,"Adresse: ");                   $pdf->Text(80,140,"Wilaya:  ");
$pdf->Text(5,160,"Type d'anesthesie: ");
$pdf->Text(5,170,"Position Definitive de L'oppere: ");
$pdf->Text(5,180,"La Voie D'abord: ");
$pdf->Text(5,190,"Les Constatations Opperatoires: ");
$pdf->Text(5,210,"La Justification Des Decisions: ");
$pdf->Text(5,220,"Les Gestes Effectues: ");
$pdf->Text(5,230,"Appareillage Externe Eventuel: ");
$pdf->Text(5,240,"Les Prelevement BAC OU ANAPATH: ");
$pdf->SetFont('times', '', 12);
$pdf->setCellPaddings(1, 1, 1, 1);
$pdf->setCellMargins(1, 1, 1, 1);
$pdf->SetFillColor(255, 255, 2);
$pdf->SetXY(5,195);
$pdf->multicell(200,20,$rc,1);
//******************************donnes*************************************************//
$pdf->SetTextColor(225,0,0);
$pdf->Text(15,108,$NOM);
$pdf->Text(18,118,$PRENOM);
$pdf->Text(55,128,$DATENAISSANCE);
$pdf->Text(80,128,$COMMUNE.$WILAYA);
$pdf->Text(25,138,$COMMUNER);
$pdf->Text(100,138,$WILAYAR);
$pdf->Output();
?>


