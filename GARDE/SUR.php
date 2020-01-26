<?php
require_once('../tcpdf/GRH1.php');
$pdf = new GRH1('P', 'mm', 'A4', true, 'UTF-8', false);
$pdf->setPrintHeader(false);
$pdf->setPrintFooter(false);
$pdf->SetDisplayMode('fullpage','single');
$pdf->AddPage();
$pdf->SetFont('aefurat','I', 10);
// $pdf->SetDisplayMode('fullpage','single');//mode d affichage
$pdf->Text(50,5,"REPUBLIQUE ALGERIENNE DEMOCRATIQUE ET POPULAIRE ");
$pdf->Text(35,10,"MINSTRE DE LA SANTE DE LA POPULATION ET DE LA REFORME HOSPITALIERE ");
$pdf->Text(40,15,"DIRECTION DE LA SANTE DE LA POPULATION DE LA WILAYA DE DJELFA ");
$pdf->Text(5,20,"ETABLISSEMENT PUBLIC HOSPITALIER  AIN OUSSERA");
$pdf->Text(5,25,"UMC");
$pdf->Text(50,30,"LISTE DE GARDE MEDECIN GENERALISTE DU MOIS DE ".$_POST['mois']."-".$_POST['an']);
$pdf->SetXY(4,40);
$pdf->Cell(24,05,'DATE',1,1,'C');
$pdf->SetXY(28,40);
$pdf->Cell(88,05,'08H-16H',1,1,'C');
$pdf->SetXY(116,40);
$pdf->Cell(88,05,'16H-08H',1,1,'C');
$mois =date("m")+1;
$an = date("Y");
$debut = mktime(0,0,0,$mois,1,$an);    
$premJour = date("w" , $debut );
$nbJours = date("t" , $debut);    // nb de jours dans le mois
$numero_semaine=date("W");
$jour_semaine=date("w",mktime(0,0,0,$mois,1,$an)); // Jour de la semaine au format numérique 0 (pour dimanche) à 6 (pour samedi) 
for ($i=1;$i<=$nbJours;$i++)
   {
   $M1=$i.'M1';
   $M2=$i.'M2';
   $M3=$i.'M3';
   $M4=$i.'M4';
   $pdf->SetXY(4,$pdf->GetY());
   $pdf->cell(24,07,$i."-".$mois."-".$an,1,0,'C',0);
   $pdf->cell(44,07,'DR '.$_POST[$M1],1,0,'L',0);
   $pdf->cell(44,07,'DR '.$_POST[$M2],1,0,'L',0);
   $pdf->cell(44,07,'DR '.$_POST[$M3],1,0,'L',0);
   $pdf->cell(44,07,'DR '.$_POST[$M4],1,0,'L',0);
   $pdf->SetXY(4,$pdf->GetY()+07); 
   //INSERER DA TABLE relever de garde 
   // $sql = "INSERT INTO ***( *** ) VALUES ('".$***."')";
   // $requete = @mysql_query($sql) or die($sql."<br>".mysql_error());
 
   }  
$pdf->Text(5,$pdf->GetY()+5,"Comite De Garde"); $pdf->Text(160,$pdf->GetY(),"Le Directeur");

$pdf->Output();
?>


