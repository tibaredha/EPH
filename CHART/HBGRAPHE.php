<?php
$idp=$_GET["idp"];
IF (isset($_POST["idp1"]))
{
$idp1=$_POST["idp1"];
}
else
{
$idp1=$idp;
}
$per ->h(1,500,170,'Suivi Bilan Biologique');
$per ->f0('index.php?uc=HBGRAPHE&idp='.$idp1,'post');
$per ->fieldset("field1","***");
$per ->fieldset("field5","***");
$per ->fieldset("BILANHEMO1","***");
$per ->submit(1070,320,'Calculer Bilan Biologique');
$DATEMOIS=date("Y");$DATE=date("d-m-Y");
IF (isset($_POST["BL"]))
{
switch($_POST["BL"])  
{
    case 'GB':
		{
		$parametre="GB";
		break;
		} 
	case 'GR':
		{
		$parametre="GR";
		break;
		}	
	case 'HB':
		{
		$parametre="HB";
		break;
		}
    case 'HT':
		{
		$parametre="HT";
		break;
		}
    case 'PLQT':
		{
		$parametre="PLQT";
		break;
		}
	case 'TP':
		{
		$parametre="TP";
		break;
		}
	case 'INR':
			{
			$parametre="INR";
			break;
			}
	case 'VS1H':
			{
			$parametre="VS1H";
			break;
			}
	case 'VS2H':
			{
			$parametre="VS2H";
			break;
			}
	case 'GLYCE':
			{
			$parametre="GLYCE";
			break;
			}
	case 'UREE':
			{
			$parametre="UREE";
			break;
			}
	case 'CREAT':
			{
			$parametre="CREAT";
			break;
			}
	case 'ACURIQUE':
			{
			$parametre="ACURIQUE";
			break;
			}
    case 'BILIT':
			{
			$parametre="BILIT";
			break;
			}
case 'TGO':
			{
			$parametre="TGO";
			break;
			}
case 'TGP':
			{
			$parametre="TGP";
			break;
			}
case 'ASLO':
			{
			$parametre="ASLO";
			break;
			}
case 'CRP':
			{
			$parametre="CRP";
			break;
			}
case 'TG':
			{
			$parametre="TG";
			break;
			}
case 'CHOLES':
			{
			$parametre="CHOLES";
			break;
			}
case 'NA':
			{
			$parametre="NA";
			break;
			}
case 'K':
			{
			$parametre="K";
			break;
			}
case 'PHOS':
			{
			$parametre="PHOS";
			break;
			}
case 'CL':
			{
			$parametre="CL";
			break;
			}
case 'CA':
			{
			$parametre="CA";
			break;
			}
	default:$parametre="GB";;	
}
}
else
{
$parametre="GB";
}


// $parametre="HB";
$per-> mysqlconnect();
$sql = "SELECT * FROM hemo WHERE id = ".$idp ;
$requete = mysql_query( $sql ) ; 
if( $result = mysql_fetch_object( $requete ) )
{
$x=250;
$per ->label(50,$x,'Non :');                   $per ->txt(120,$x,'NOM',20,$result->NOM);
$per ->label(350,$x,'Prenom :');               $per ->txt(470-40,$x,'PRENOM',20,$result->PRENOM);
$per ->label(50,$x+30,'Date :');               $per ->txt(120,$x+30,'DATE',20,date("Y-m-d"));
$per ->label(350,$x+30,'Heure :');             $per ->txt(470-40,$x+30,'HEURE',20,date("H:i"));
$per ->label(50,$x+60,'Diagnostic');           $per ->txt(120,$x+60,'DIAGNOSTIC',72,"ANNEMIE SUR IRC");
$per ->label(50,$x+90,'Entree le');            $per ->txt(120,$x+90,'DUREE',20,$result->DATE1ERSEA);
$per ->label(650,$x,'Poids :');                $per ->txt(720,$x,'Poids',20,"70");
$per ->label(350,$x+90,'Service');             $per ->txt(430,$x+90,'SERVICE',20,"HEMODIALYSE");
$per ->label(650,$x+30,'Groupage');            $per ->txt(720,$x+30,'GROUPAGE',3,$result->GRABO);   //
$per ->label(650+130,$x+30,'rhesus');          $per ->txt(720+130,$x+30,'rhesus',3,$result->GRRH);
$per ->label(50,$x+136,'GB');                 $per ->radioed(100,$x+135,"BL","GB");
$per ->label(50,$x+136+30,'GR');              $per ->radio(100,$x+135+30,"BL","GR"); 
$per ->label(50,$x+136+60,'HB');              $per ->radio(100,$x+135+60,"BL","HB");
$per ->label(50,$x+136+90,'HT');              $per ->radio(100,$x+135+90,"BL","HT");
$per ->label(50,$x+136+120,'PLQT');           $per ->radio(100,$x+135+120,"BL","PLQT");
$per ->label(150,$x+136,'TP');                $per ->radio(200,$x+135,"BL","TP");
$per ->label(150,$x+136+30,'INR');            $per ->radio(200,$x+135+30,"BL","INR");
$per ->label(150,$x+136+60,'VS1H');           $per ->radio(200,$x+135+60,"BL","VS1H");
$per ->label(150,$x+136+90,'VS2H');           $per ->radio(200,$x+135+90,"BL","VS2H");
$per ->label(250,$x+136,'GLYCE');             $per ->radio(300,$x+135,"BL","GLYCE");
$per ->label(250,$x+136+30,'UREE');           $per ->radio(300,$x+135+30,"BL","UREE");
$per ->label(250,$x+136+60,'CRAET');          $per ->radio(300,$x+135+60,"BL","CREAT");
$per ->label(250,$x+136+90,'ACURI');          $per ->radio(300,$x+135+90,"BL","ACURIQUE"); 
$per ->label(350,$x+136,'BILI T');            $per ->radio(400,$x+135,"BL","BILIT");
$per ->label(350,$x+136+30,'BILI D');         $per ->radio(400,$x+135+30,"BL","BILID");
$per ->label(350,$x+136+60,'TGO');            $per ->radio(400,$x+135+60,"BL","TGO");
$per ->label(350,$x+136+90,'TGP');            $per ->radio(400,$x+135+90,"BL","TGP");
$per ->label(450,$x+136,'ASLO');              $per ->radio(500,$x+135,"BL","ASLO");
$per ->label(450,$x+136+30,'CRP');            $per ->radio(500,$x+135+30,"BL","CRP");
$per ->label(450,$x+136+60,'TRIGLI');         $per ->radio(500,$x+135+60,"BL","TG");
$per ->label(450,$x+136+90,'CHOLES');        $per ->radio(500,$x+135+90,"BL","CHOLES"); 
$per ->label(550,$x+136,'NA+');              $per ->radio(600,$x+135,"BL","NA");
$per ->label(550,$x+136+30,'K+');            $per ->radio(600,$x+135+30,"BL","K");
$per ->label(550,$x+136+60,'PHOS');          $per ->radio(600,$x+135+60,"BL","PHOS");
$per ->label(550,$x+136+90,'CL');            $per ->radio(600,$x+135+90,"BL","CL");
$per ->label(550,$x+136+120,'CA++');         $per ->radio(600,$x+135+120,"BL","CA"); 
$per ->hide(595,$x+90,'idp1',20,$_GET["idp"]); 
$per ->hide(595,90,'SEXE',20,$result->SEX);$per ->hide(595,90,'DATENAISSA',20,$result->DATENAISSA);
$per ->url(790+240,250,"index.php?uc=SMHEMO&idp=".$_GET["idp"],"Suivie Du Patient Hemodialyse","3"); 

}
$per ->f1(); 
include "./CHART/libchart/classes/libchart.php";
$chart = new LineChart();
$dataSet = new XYDataSet();
$dataSet->addPoint(new Point("JAN", $per->hemomois($DATEMOIS."-01-01",$DATEMOIS."-01-31",$idp,$parametre)));
$dataSet->addPoint(new Point("FEV", $per->hemomois($DATEMOIS."-02-01",$DATEMOIS."-02-28",$idp,$parametre)));
$dataSet->addPoint(new Point("MAR", $per->hemomois($DATEMOIS."-03-01",$DATEMOIS."-03-31",$idp,$parametre)));
$dataSet->addPoint(new Point("AVR", $per->hemomois($DATEMOIS."-04-01",$DATEMOIS."-04-30",$idp,$parametre)));
$dataSet->addPoint(new Point("MAI", $per->hemomois($DATEMOIS."-05-01",$DATEMOIS."-05-31",$idp,$parametre)));
$dataSet->addPoint(new Point("JUIN",$per->hemomois($DATEMOIS."-06-01",$DATEMOIS."-06-30",$idp,$parametre)));
$dataSet->addPoint(new Point("JUIL",$per->hemomois($DATEMOIS."-07-01",$DATEMOIS."-07-31",$idp,$parametre)));
$dataSet->addPoint(new Point("AOUT",$per->hemomois($DATEMOIS."-08-01",$DATEMOIS."-08-31",$idp,$parametre)));
$dataSet->addPoint(new Point("SEP", $per->hemomois($DATEMOIS."-09-01",$DATEMOIS."-09-30",$idp,$parametre)));
$dataSet->addPoint(new Point("OCT", $per->hemomois($DATEMOIS."-10-01",$DATEMOIS."-10-31",$idp,$parametre)));
$dataSet->addPoint(new Point("NOV", $per->hemomois($DATEMOIS."-11-01",$DATEMOIS."-11-30",$idp,$parametre)));
$dataSet->addPoint(new Point("DEC", $per->hemomois($DATEMOIS."-12-01",$DATEMOIS."-12-31",$idp,$parametre)));
$chart->setDataSet($dataSet);
$chart->setTitle("EVOLUTION DU TAUX  PAR MOIS  :".$DATE);
$chart->render("./CHART/demo/generated/demo5.png");
echo"<div style=\"position:absolute;left:740px;top:380px;\" >";
echo"<img alt=\"Vertical bars chart\" src=\"./CHART/demo/generated/demo5.png\" style=\"border: 1px solid gray;\"/>";
echo"</div>";

?>
	
	



















