<?php
$idp=$_POST["idp"];
if (($_POST["WILAYAN"]!=="1")&&($_POST["COMMUNEN"]!=="1") )
{
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
$pdf->SetXY(58,92);
$pdf->Write(0,$_POST['NOM']);
$pdf->SetXY(132,92);
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
$pdf->Write(0,$pdf->dateUS2FR($_POST['DATENAISSANCE']));
$pdf->SetXY(50,109.5);
$pdf->Write(0,"sans profession");
//******************************************//
$pdf->SetXY(136,121.5);
$pdf->Write(0,$pdf->nbrtostring("grh","wil","IDWIL",$_POST['WILAYAR'],"WILAYAS") );
$pdf->SetXY(70,121.5);
$pdf->Write(0,$pdf->nbrtostring("grh","com","IDCOM",$_POST['COMMUNER'],"COMMUNE"));
$pdf->SetXY(70,115.5);
$pdf->Write(0,$_POST['ADRESSE']);
//*****************************************//
$pdf->SetXY(70,121.5+6);
$pdf->Write(0,$_POST['DATE']);
$pdf->SetXY(70,121.5+6+6);
$pdf->Write(0,$_POST['HDA']);
//****************************************//
$pdf->SetXY(55,122+22);
$pdf->Write(0,$pdf->nbrtostring("grh","wil","IDWIL",$_POST['WILAYAN'],"WILAYAS"));
$pdf->SetXY(60,121.5+22+6);
$pdf->Write(0,$pdf->nbrtostring("grh","com","IDCOM",$_POST['COMMUNEN'],"COMMUNE"));
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
if ($_POST['INTEXT']=='INT')
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
switch($_POST['TYPEHABITA'])  
{

case 'Maison individuelle/Villa' :
		{
		$pdf->SetXY(100,167);
		$pdf->Write(0,"X");
		;break;
		}
case 'Immeuble' :
		{
		$pdf->SetXY(161,167);
		$pdf->Write(0,"X");
		;break;
		}	
case 'Habitat précaire' :
		{
		$pdf->SetXY(100,173);
		$pdf->Write(0,"X");
		;break;
		}		
case 'Maison traditionnelle' :
		{
		$pdf->SetXY(161,173);
		$pdf->Write(0,"X");
		;break;
		}
		
case 'Tente de nomade' :
		{
		$pdf->SetXY(99,179);
		$pdf->Write(0,"X");
		;break;
		}		
case 'Autres' :
		{
		$pdf->SetXY(128,179);
		$pdf->Write(0,"X");
		;break;
		}	
}
//*****************************************//

if ($_POST['SCORVU']=='OUI')
{
$pdf->SetXY(125,185);
$pdf->Write(0,"X");
}
else
{
$pdf->SetXY(156,185);
$pdf->Write(0,"X");
}
//***************************************//
if ($_POST['GINUT']=='OUI')
{
$pdf->SetXY(78,204);
$pdf->Write(0,"X");
}
else
{
$pdf->SetXY(123.5,204);
$pdf->Write(0,"X");
}		
//****************************************//
switch($_POST['SIEGE'])  
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
//*****************************************//
if ($_POST['ATCD']=='OUI')
{
$pdf->SetXY(85,235);
$pdf->Write(0,"X");
}
else
{
$pdf->SetXY(105,235);
$pdf->Write(0,"X");
}		
//****************************************//
$pdf->AddPage();
$pdf->setSourceFile('../PDF/es1.pdf');
$tplIdx = $pdf->importPage(2);
$pdf->useTemplate($tplIdx, 5, 5, 200);
$pdf->SetFont('Arial','B',10);
$pdf->SetTextColor(255,0,0);
//****************************************//
switch($_POST['CLASSE'])  
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
$pdf->SetXY(25+65,94+11+13.5);
$pdf->Write(0,"- ASPEGIC 1GR IM");
$pdf->SetXY(25+65,94+11+13.5+5);
$pdf->Write(0,"- HHC 100 IVL");
}
else
{
$pdf->SetXY(56+30,94+11);
$pdf->Write(0,"X");
$pdf->SetXY(56+95,94+11);
$pdf->Write(0,"0");
}
//********************************//
if ($_POST['EVACUATION']=='OUI')
{
$pdf->SetXY(25+65,134);
$pdf->Write(0,"OUI");
$pdf->SetXY(50,140);
$pdf->Write(0,$_POST['DATEEVACUATION']);
// $pdf->SetXY(115,140);
// $pdf->Write(0,$_POST['DATEEVACUATION']);

if ($_POST['CLASSEEVA']=='2')
{
$pdf->SetXY(81,215);
$pdf->Write(0,"X");
}
else
{
$pdf->SetXY(127,215);
$pdf->Write(0,"X");
}	
}
else
{
$pdf->SetXY(25+65,134);
$pdf->Write(0,"NON");
}
$session=$_SESSION["USER"];	
$pdf->SetXY(140,252);
$pdf->Write(0,$session);
$pdf->Output();
}
else
{

header("Location: ../index.php?uc=SCOR&idp=".$idp) ;


}
?>


