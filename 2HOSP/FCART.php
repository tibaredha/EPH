<?php
//model reduit CARTE DONNEUR 
// $IDDNR=$_GET["iddnr"]; 
// $nomdnr=$_GET["nomdnr"]; 
// $prenomdnr=$_GET["prenomdnr"]; 
// $sexe=$_GET["sexe"]; 
// $GROUPAGE=$_GET["GROUPAGE"]; 
// $RHESUS=$_GET["RHESUS"]; 
// $Dns=$_GET["DATENAISSANCE"];
// $dateeuro=date('d/m/Y');
// $x=substr($dateeuro,6,4);
// $Y=substr($_GET["DATENAISSANCE"],6,4);
// $AGE=$x-$Y;
$dateeuro=date('d/m/Y');
$dateeuro1=date('H:i');
//******************************************************************************************************//  
require('../PDF/invoice.php');
$pdf = new PDF_Invoice( 'p', 'mm', 'A5' );
$pdf->SetDisplayMode('fullpage','two');//mode d affichage 
$pdf->AddPage('p','A5');
//image (url,x,y,hauteur,largeur,0)
// $pdf->Image('../IMAGES/LOGOAO.GIF',105,20,15,15,0);
$pdf->SetFont('Arial','B',6);
$pdf->Rect(1, 1,70, 100 ,"d");
$pdf->Rect(78, 1,70, 100 ,"d");
$pdf->Text(82,10,"REPUBLIQUE ALGERIENNE DEMOCRATIQUE ET POPULAIRE ");
$pdf->Text(102,15,"EPH AIN OUSSERA  ");
$pdf->Line(80 ,18 ,145 ,18 );
$pdf->SetFont('Arial','B',14);
$pdf->Text(90,45,"CARTE DE SUIVIE");
$pdf->Text(88,50," ");
$pdf->SetFont('Arial','B',8);
$pdf->Text(90,60,"SERVICE:");
$pdf->Text(92,65,"..... ");
$pdf->SetFont('Arial','B',7);
$pdf->Text(82,94,"Numéro d'identification du patient: ");//
$pdf->Text(82,98,"Delivrée le: ");
$pdf->SetFont('Arial','B',8);
// $pdf->Text(10,5,"Date");
// $pdf->Line(25,1 ,25 ,101);
// $pdf->Text(32,5,"N°don");
// $pdf->Line(50,1 ,50 ,101);
// $pdf->Text(58,5,"TA");
$pdf->Line(1 ,8 ,71 ,8 );
$pdf->Line(1 ,16 ,71 ,16 );
$pdf->Line(1 ,24 ,71 ,24 );
$pdf->Line(1 ,32 ,71 ,32);
$pdf->Line(1 ,40 ,71 ,40 );
$pdf->Line(1 ,48 ,71 ,48 );
$pdf->Line(1 ,56 ,71 ,56 );
$pdf->Line(1 ,64 ,71 ,64 );
$pdf->Line(1 ,72 ,71 ,72 );
$pdf->Line(1 ,80 ,71 ,80 );
$pdf->Line(1 ,88 ,71 ,88 );
//$pdf->Rect(1, 109,70, 100 ,"d"); RECTANGLE DE BAS 
//$pdf->Rect(78, 109,70, 100 ,"d");
//****************DONNES ******//
$pdf->SetTextColor(225,0,0);
// $pdf->Text(125,94,$IDDNR);
// $pdf->Text(95,98,$dateeuro);
$pdf->SetTextColor(0,0,0);
//********************************************************************************************************//
$pdf->AddPage('p','A5');

$pdf->SetFont('Arial','B',10);
$pdf->Rect(1, 1,70, 100 ,"d");
$pdf->Rect(78, 1,70, 100 ,"d");
$pdf->Text(4,10,"date entree:");
$pdf->Text(4,20,"date sortie:".$dateeuro."a".$dateeuro1);
$pdf->Text(4,30,"dgc:");
//$pdf->Text(48,22,"Photo");
//$pdf->Rect(35,1,36, 49 ,"d");RECTANGLE PHOTO
$pdf->Line(1 ,50 ,71 ,50);
$pdf->Text(4,55,"Nom:");
$pdf->Text(4,60,"Prénom:");
$pdf->Text(4,65,"Date de naissance:");
$pdf->Text(4,70,"Carte établie le:");
$pdf->Text(25,80,"le medecin traitant:");
$pdf->Text(30,85,"Dr TIBA");



$pdf->Text(82,8,"CAT:");
// $pdf->Text(128,8,"-----------");
// $pdf->Text(82,13,"Nombre De Don Antérieur:");
// $pdf->Text(128,13,"-----------");
$pdf->Line(78 ,24 ,148 ,24 );
//$pdf->Text(86,21,"Date");
//$pdf->Line(100,16 ,100 ,101);
//$pdf->Text(106,21,"N°don");
//$pdf->Line(125,16 ,125 ,101);
//$pdf->Text(132,21,"TA");
$pdf->Line(78 ,16 ,148,16);
$pdf->Line(78 ,32 ,148,32);
$pdf->Line(78 ,40 ,148,40 );
$pdf->Line(78 ,48 ,148,48 );
$pdf->Line(78 ,56 ,148,56 );
$pdf->Line(78 ,64 ,148,64 );
$pdf->Line(78 ,72 ,148,72 );
$pdf->Line(78 ,80 ,148,80 );
$pdf->Text(82,78,"RDV DE SUIVIE 1 MOIS A 08 HEURS");
$pdf->Text(82,86,"POLYCLINIQUE GHAZAL AMEUR");
$pdf->Line(78 ,88 ,148,88 );


$pdf->Output();
?>




