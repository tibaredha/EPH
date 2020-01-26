<?php
require('../PDF/fpdf.php');
require('../PDF/fpdi.php');
$pdf = new FPDI();
$pdf->AddPage();
$pdf->setSourceFile('../PDF/es1.pdf');
$tplIdx = $pdf->importPage(1);
$pdf->useTemplate($tplIdx, 5, 5, 200);
$pdf->SetFont('Arial','B',10);
$pdf->SetTextColor(255,0,0);
$pdf->SetXY(40,61);
$pdf->Write(0,"Djelfa");
$pdf->SetXY(45,61+6);
$pdf->Write(0,"***");
$pdf->SetXY(55,61+12);
$pdf->Write(0,"***");
$pdf->SetXY(123,61+12);
$pdf->Write(0,"***");
$pdf->SetXY(117,61);
$pdf->Write(0,"Ain oussera");
$pdf->SetXY(43,61+18);
$pdf->Write(0,"Ain oussera");
$pdf->SetXY(100,61+18);
$pdf->Write(0,"***");
$pdf->SetXY(150,61+18);
$pdf->Write(0,"***");
//******************************************//
$pdf->SetXY(58,91);
$pdf->Write(0,$_POST['NOM']);
$pdf->SetXY(132,91);
$pdf->Write(0,$_POST['PRENOM']);
if ($_POST['SEXE']=='M')
{
$pdf->SetXY(49.5,98);
$pdf->Write(0,"X");
}
else 
{
$pdf->SetXY(67,98);
$pdf->Write(0,"X");
}
$pdf->SetXY(67,103.5);
$pdf->Write(0,$_POST['DATENAISSANCE']);

$pdf->SetXY(50,108.5);
$pdf->Write(0,$_POST['DATENAISSANCE']);
//******************************************//
$pdf->SetXY(136,121.5);
$pdf->Write(0,$_POST['WILAYAR']);
$pdf->SetXY(70,121.5);
$pdf->Write(0,$_POST['COMMUNER']);
$pdf->SetXY(70,115);
$pdf->Write(0,$_POST['ADRESSE']);
//*****************************************//
$pdf->SetXY(70,121.5+6);
$pdf->Write(0,$_POST['DATE']);
$pdf->SetXY(70,121.5+6+6);
$pdf->Write(0,$_POST['HDA']);
//****************************************//
$pdf->SetXY(55,121.5+22);
$pdf->Write(0,$_POST['WILAYAN']);
$pdf->SetXY(60,121.5+22+6);
$pdf->Write(0,$_POST['COMMUNEN']);
//****************************************//
if ($_POST['ZONE']=='rurale')
{
$pdf->SetXY(77,121.5+22+6+6);
$pdf->Write(0,"X");
}
else
{
$pdf->SetXY(146,121.5+22+6+6);
$pdf->Write(0,"X");
}
//****************************************//
if ($_POST['LOGE']=='INT')
{
$pdf->SetXY(76.5,121.5+22+6+6+5);
$pdf->Write(0,"X");
}
else
{
$pdf->SetXY(146,121.5+22+6+6+5);
$pdf->Write(0,"X");
}
//****************************************//
switch($_POST['Siège'])  
{
case 'Tête Cou' :
		{
		$pdf->SetXY(69.5,251.5);
		$pdf->Write(0,"X");
		;break;
		}
case 'Tronc' :
		{
		$pdf->SetXY(69.5+53.5,251.5);
		$pdf->Write(0,"X");
		;break;
		}		
		
case 'Membre supérieur' :
		{
		$pdf->SetXY(69.5,251.5+4.5);
		$pdf->Write(0,"X");
		;break;
		}
case 'Membre inférieur' :
		{
		$pdf->SetXY(69+53.5,251.5+5);
		$pdf->Write(0,"X");
		;break;
		}		
}		
//****************************************//
$pdf->SetXY(70,161+65);
$pdf->Write(0,date('d/m/Y'));
$pdf->SetXY(70,161+70);
$pdf->Write(0,date("H:i"));
//****************************************//
$pdf->AddPage();
$pdf->setSourceFile('../PDF/es1.pdf');
$tplIdx = $pdf->importPage(2);
$pdf->useTemplate($tplIdx, 5, 5, 200);
$pdf->SetFont('Arial','B',10);
$pdf->SetTextColor(255,0,0);
//****************************************//
switch($_POST['classe'])  
{
case '1' :
		{
		$pdf->SetXY(59,94);
		$pdf->Write(0,"X");
		;break;
		}
case '2' :
		{
		$pdf->SetXY(59+51.5,94);
		$pdf->Write(0,"X");
		;break;
		}		
		
case '3' :
		{
		$pdf->SetXY(59+101.5,94);
		$pdf->Write(0,"X");
		;break;
		}				
}		
//****************************************//		
if ($_POST['SAS']=='OUI')
{
$pdf->SetXY(56,94+11);
$pdf->Write(0,"X");
$pdf->SetXY(56+95,94+11);
$pdf->Write(0,$_POST['NBRAMP']);
$pdf->SetXY(56+65,94+11+4.5);
$pdf->Write(0,DATE('H:I'));
$pdf->SetXY(56+65,94+11+13.5);
$pdf->Write(0,"aspegic 1gr IM");
$pdf->SetXY(56+65,94+11+13.5+5);
$pdf->Write(0,"HHC 100 IVL");
}
else
{
$pdf->SetXY(56+30,94+11);
$pdf->Write(0,"X");
$pdf->SetXY(56+95,94+11);
$pdf->Write(0,"0");
}
$pdf->Output();
?>


