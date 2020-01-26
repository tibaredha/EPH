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
$per ->h(1,500,170,'Suivi Séance Hémodialyse');
$per ->f0('index.php?uc=SEANCEGRAPHE&idp='.$idp1,'post');
$per ->fieldset("field1","***");
$per ->fieldset("field5","***");
$per ->fieldset("BILANHEMO1","***");
$per ->submit(1070,320,'Evolution Graphique');
$DATEMOIS=date("Y");$DATE=date("d-m-Y");
IF (isset($_POST["BL"]))
{
switch($_POST["BL"])  
{
    case 'SYSD':
		{
		$parametre="SYSD";
		break;
		} 
	case 'DIAD':
		{
		$parametre="DIAD";
		break;
		}	
	case 'POIDSD':
		{
		$parametre="POIDSD";
		break;
		}
    case 'SYSF':
		{
		$parametre="SYSF";
		break;
		} 
	case 'DIAF':
		{
		$parametre="DIAF";
		break;
		}	
	case 'POIDSF':
		{
		$parametre="POIDSF";
		break;
		}
	
	default:$parametre="SYSD";;	
}
}
else
{
$parametre="SYSD";
}

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
//avant dialyse
$per ->label(50,$x+136,'pré dialyse');
$per ->label(50,$x+136+30,'SYS');                 $per ->radioed(100,$x+135+30,"BL","SYSD");
$per ->label(50,$x+136+30+30,'DIA');              $per ->radio(100,$x+135+30+30,"BL","DIAD"); 
$per ->label(50,$x+136+60+30,'POIDS');            $per ->radio(100,$x+135+60+30,"BL","POIDSD");
//apres dialyse
$per ->label(150,$x+136,'post dialyse');
$per ->label(150,$x+136+30,'SYS');                $per ->radio(200,$x+135+30,"BL","SYSF");
$per ->label(150,$x+136+30+30,'DIA');             $per ->radio(200,$x+135+30+30,"BL","DIAF");
$per ->label(150,$x+136+60+30,'POIDS');           $per ->radio(200,$x+135+60+30,"BL","POIDSF");

$per ->hide(595,$x+90,'idp1',20,$_GET["idp"]); 
$per ->hide(595,90,'SEXE',20,$result->SEX);$per ->hide(595,90,'DATENAISSA',20,$result->DATENAISSA);
$per ->url(790+240,250,"index.php?uc=SMHEMO&idp=".$_GET["idp"],"Suivie Du Patient Hemodialyse","3"); 
}
$per ->f1(); 
include "./CHART/libchart/classes/libchart.php";
$chart = new LineChart();
$dataSet = new XYDataSet();
$dataSet->addPoint(new Point("JAN", $per->hemomoisp($DATEMOIS."-01-01",$DATEMOIS."-01-31",$idp,$parametre)));
$dataSet->addPoint(new Point("FEV", $per->hemomoisp($DATEMOIS."-02-01",$DATEMOIS."-02-28",$idp,$parametre)));
$dataSet->addPoint(new Point("MAR", $per->hemomoisp($DATEMOIS."-03-01",$DATEMOIS."-03-31",$idp,$parametre)));
$dataSet->addPoint(new Point("AVR", $per->hemomoisp($DATEMOIS."-04-01",$DATEMOIS."-04-30",$idp,$parametre)));
$dataSet->addPoint(new Point("MAI", $per->hemomoisp($DATEMOIS."-05-01",$DATEMOIS."-05-31",$idp,$parametre)));
$dataSet->addPoint(new Point("JUIN",$per->hemomoisp($DATEMOIS."-06-01",$DATEMOIS."-06-30",$idp,$parametre)));
$dataSet->addPoint(new Point("JUIL",$per->hemomoisp($DATEMOIS."-07-01",$DATEMOIS."-07-31",$idp,$parametre)));
$dataSet->addPoint(new Point("AOUT",$per->hemomoisp($DATEMOIS."-08-01",$DATEMOIS."-08-31",$idp,$parametre)));
$dataSet->addPoint(new Point("SEP", $per->hemomoisp($DATEMOIS."-09-01",$DATEMOIS."-09-30",$idp,$parametre)));
$dataSet->addPoint(new Point("OCT", $per->hemomoisp($DATEMOIS."-10-01",$DATEMOIS."-10-31",$idp,$parametre)));
$dataSet->addPoint(new Point("NOV", $per->hemomoisp($DATEMOIS."-11-01",$DATEMOIS."-11-30",$idp,$parametre)));
$dataSet->addPoint(new Point("DEC", $per->hemomoisp($DATEMOIS."-12-01",$DATEMOIS."-12-31",$idp,$parametre)));
$chart->setDataSet($dataSet);
$chart->setTitle("EVOLUTION DU TAUX  PAR MOIS  :".$DATE);
$chart->render("./CHART/demo/generated/demo5.png");
echo"<div style=\"position:absolute;left:740px;top:380px;\" >";
echo"<img alt=\"Vertical bars chart\" src=\"./CHART/demo/generated/demo5.png\" style=\"border: 1px solid gray;\"/>";
echo"</div>";

?>
	
	



















