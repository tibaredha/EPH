<?php
require('../PDF/DNR.php');
$pdf = new DNR( 'p', 'mm', 'A5' );
$pdf->mysqlconnect();
$idon=$_GET["idon"]; 
$query0 = "select * from tdon WHERE  idon = '$idon'";
$resultat0=mysql_query($query0);
$row0 = mysql_fetch_array($resultat0); 
$IDDNR=$row0['IDDNR'];

//1ere page
$pdf->entetecarte($IDDNR);
$h=01;
$pdf->SetXY(01,$h); 	  
$pdf->cell(23,05,"Date",1,0,'C',0);
$pdf->SetXY(01+23,$h); 	  
$pdf->cell(24,05,"N°don",1,0,'C',0);
$pdf->SetXY(01+23+24,$h); 	  
$pdf->cell(23,05,"TA",1,0,'C',0);
$pdf->SetXY(01,06); // marge sup 13
$query1 = "select datedon,IDP,ta,IDDNR,idon from tdon WHERE  IDDNR='$IDDNR'  order by  idon asc    LIMIT 15, 30 ";
$resultat1=mysql_query($query1);
$totalmbr1=mysql_num_rows($resultat1);
while($row1=mysql_fetch_object($resultat1))
  {
   $pdf->cell(23,5,$pdf->dateUS2FR($row1->datedon),1,0,'L',0);//5  =hauteur de la cellule origine =7
   $pdf->cell(24,5,$row1->idon,1,0,'C',0);
   $pdf->cell(23,5,$row1->ta,1,0,'C',0);
   $pdf->SetXY(01,$pdf->GetY()+5); 
  }
for( $compteur = 0 ; $compteur < 19-$totalmbr1 ; $compteur++)
  {
   $pdf->cell(23,5,'',1,0,'L',0);
   $pdf->cell(24,5,'',1,0,'C',0);
   $pdf->cell(23,5,'',1,0,'C',0);
   $pdf->SetXY(01,$pdf->GetY()+5); 
  } 
//2eme page
//face gauche  
$pdf->AddPage('p','A5');
$pdf->SetFont('Arial','B',10);
$pdf->RoundedRect(1, 1, 70, 100, 2, $style = '');
$pdf->RoundedRect(78, 1, 70, 100, 2, $style = '');

$pdf->Text(4,10,"GROUPAGE:");
$pdf->Text(7,20,"RHESUS:");
$pdf->Text(6,30,"Phenotype:");
$pdf->Text(48,22,"Photo");
$pdf->RoundedRect(35, 1, 36, 49, 2, $style = '');//RECTANGLE PHOTO

$pdf->Line(1 ,50 ,71 ,50);
$pdf->Text(4,55,"Nom:");
$pdf->Text(4,60,"Prénom:");
$pdf->Text(4,65,"Date de naissance:");
$pdf->Text(4,70,"Carte établie le:");
$pdf->Text(25,80,"le responsable:");
$pdf->Text(30,85,"Dr TIBA");//$pdf->USER()
$h=15.8;
$pdf->SetXY(78,$h); 	  
$pdf->cell(23,05,"Date",1,0,'C',0);
$pdf->SetXY(78+23,$h); 	  
$pdf->cell(24,05,"N°don",1,0,'C',0);
$pdf->SetXY(78+23+24,$h); 	  
$pdf->cell(23,05,"TA",1,0,'C',0);
$pdf->SetXY(78,20.8); // marge sup 13
$query2 = "select datedon,IDP,ta,IDDNR,idon from tdon WHERE  IDDNR='$IDDNR' order by  idon asc LIMIT 0, 15 ";
$resultat2=mysql_query($query2);
$totalmbr2=mysql_num_rows($resultat2);
while($row2=mysql_fetch_object($resultat2))
  {
   $pdf->cell(23,5,$pdf->dateUS2FR($row2->datedon),1,0,'L',0);//5  =hauteur de la cellule origine =7
   $pdf->cell(24,5,$row2->idon,1,0,'C',0);
   $pdf->cell(23,5,$row2->ta,1,0,'C',0);
   $pdf->SetXY(78,$pdf->GetY()+5); 
  } 
 for( $compteur = 0 ; $compteur < 16-$totalmbr2 ; $compteur++)
  {
   $pdf->cell(23,5,'',1,0,'L',0);//5  =hauteur de la cellule origine =7
   $pdf->cell(24,5,'',1,0,'C',0);
   $pdf->cell(23,5,'',1,0,'C',0);
   $pdf->SetXY(78,$pdf->GetY()+5); 
  }

$query3 = "select datedon,IDP,ta,IDDNR,idon from tdon WHERE  IDDNR='$IDDNR' order by idon asc LIMIT 0, 1 ";
$resultat3=mysql_query($query3);
$row3 = mysql_fetch_array($resultat3); 
$datedon=$row3['datedon'];
$pdf->Text(82,8,"Date Du Premier Don:");
$pdf->Text(120,8,$pdf->dateUS2FR($datedon));
$pdf->Text(82,13,"Nombre De Don Antérieur:");
$pdf->Text(128,13,$totalmbr2);

//face droite 
$query4 = "select * from tdon WHERE  idon = '$idon'";
$resultat4=mysql_query($query4);
$row4 = mysql_fetch_array($resultat4);
$pdf->SetTextColor(225,0,0);
$pdf->SetFont('Arial','B',14);
$pdf->Text(13,15,$row4['GROUPAGE']);
$pdf->Text(8,25,$row4['RHESUS']);
$pdf->SetFont('Arial','B',10);
$pdf->Text(8,35,"********");
$pdf->Text(14,55,$row4['NOMDNR']);
$pdf->Text(19,60,$row4['PRENOMDNR']);
$pdf->Text(37,65,$row4['DATENAISSANCE']);
$pdf->Text(30,70,date('d/m/Y'));
$pdf->SetTextColor(0,0,0);
$pdf->Output();




?>




