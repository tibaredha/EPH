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
$per ->submit(1070,320,'Evolution Graphique ');
$DATEMOIS=date("Y");$DATE=date("d-m-Y");
// IF (isset($_POST["BL"]))
// {
// switch($_POST["BL"])  
// {
    // case 'SEANCE':
		// {
		// $parametre="POIDS";
		// break;
		// } 
	// case 'POIDS':
		// {
		// $parametre="POIDS";
		// break;
		// }	
	// case 'TA':
		// {
		// $parametre="TA";
		// break;
		// }

	// default:$parametre="POIDS";;	
// }
// }
// else
// {
// $parametre="POIDS";
// }
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
$per ->label(50,$x+136,'POIDS');              $per ->radioed(110,$x+135,"BL","SEANCE");
// $per ->label(50,$x+136+30,'TA');            $per ->radio(110,$x+135+30,"BL","POIDS"); 
// $per ->label(50,$x+136+60,'SEANCE');               $per ->radio(110,$x+135+60,"BL","TA");
$per ->hide(595,$x+90,'idp1',20,$_GET["idp"]); 
$per ->hide(595,90,'SEXE',20,$result->SEX);$per ->hide(595,90,'DATENAISSA',20,$result->DATENAISSA);
$per ->url(790+210,250,"index.php?uc=SMHEMO&idp=".$_GET["idp"],"SUIVIE DU PATIENT HEMODIALYSE","3"); 
}
$per ->f1();

include "./CHART/libchart/classes/libchart.php";
$chart = new LineChart();
    
$parametre0="POIDSD";
$parametre1="POIDS";
$parametre2="POIDSF";
	//AV DIALYSE
    $serie1 = new XYDataSet();
	$serie1->addPoint(new Point("JAN", $per->hemomoisp($DATEMOIS."-01-01",$DATEMOIS."-01-31",$idp,$parametre0)));
	$serie1->addPoint(new Point("FEV", $per->hemomoisp($DATEMOIS."-02-01",$DATEMOIS."-02-28",$idp,$parametre0)));
	$serie1->addPoint(new Point("MAR", $per->hemomoisp($DATEMOIS."-03-01",$DATEMOIS."-03-31",$idp,$parametre0)));
	$serie1->addPoint(new Point("AVR", $per->hemomoisp($DATEMOIS."-04-01",$DATEMOIS."-04-30",$idp,$parametre0)));
	$serie1->addPoint(new Point("MAI", $per->hemomoisp($DATEMOIS."-05-01",$DATEMOIS."-05-31",$idp,$parametre0)));
	$serie1->addPoint(new Point("JUIN",$per->hemomoisp($DATEMOIS."-06-01",$DATEMOIS."-06-30",$idp,$parametre0)));
	$serie1->addPoint(new Point("JUIL",$per->hemomoisp($DATEMOIS."-07-01",$DATEMOIS."-07-31",$idp,$parametre0)));
	$serie1->addPoint(new Point("AOUT",$per->hemomoisp($DATEMOIS."-08-01",$DATEMOIS."-08-31",$idp,$parametre0)));
	$serie1->addPoint(new Point("SEP", $per->hemomoisp($DATEMOIS."-09-01",$DATEMOIS."-09-30",$idp,$parametre0)));
	$serie1->addPoint(new Point("OCT", $per->hemomoisp($DATEMOIS."-10-01",$DATEMOIS."-10-31",$idp,$parametre0)));
	$serie1->addPoint(new Point("NOV", $per->hemomoisp($DATEMOIS."-11-01",$DATEMOIS."-11-30",$idp,$parametre0)));
	$serie1->addPoint(new Point("DEC", $per->hemomoisp($DATEMOIS."-12-01",$DATEMOIS."-12-31",$idp,$parametre0)));
	//POIDS SEC
	$serie2 = new XYDataSet();
	$serie2->addPoint(new Point("JAN", $per->hemomoisp($DATEMOIS."-01-01",$DATEMOIS."-01-31",$idp,$parametre1)));
	$serie2->addPoint(new Point("FEV", $per->hemomoisp($DATEMOIS."-02-01",$DATEMOIS."-02-28",$idp,$parametre1)));
	$serie2->addPoint(new Point("MAR", $per->hemomoisp($DATEMOIS."-03-01",$DATEMOIS."-03-31",$idp,$parametre1)));
	$serie2->addPoint(new Point("AVR", $per->hemomoisp($DATEMOIS."-04-01",$DATEMOIS."-04-30",$idp,$parametre1)));
	$serie2->addPoint(new Point("MAI", $per->hemomoisp($DATEMOIS."-05-01",$DATEMOIS."-05-31",$idp,$parametre1)));
	$serie2->addPoint(new Point("JUIN",$per->hemomoisp($DATEMOIS."-06-01",$DATEMOIS."-06-30",$idp,$parametre1)));
	$serie2->addPoint(new Point("JUIL",$per->hemomoisp($DATEMOIS."-07-01",$DATEMOIS."-07-31",$idp,$parametre1)));
	$serie2->addPoint(new Point("AOUT",$per->hemomoisp($DATEMOIS."-08-01",$DATEMOIS."-08-31",$idp,$parametre1)));
	$serie2->addPoint(new Point("SEP", $per->hemomoisp($DATEMOIS."-09-01",$DATEMOIS."-09-30",$idp,$parametre1)));
	$serie2->addPoint(new Point("OCT", $per->hemomoisp($DATEMOIS."-10-01",$DATEMOIS."-10-31",$idp,$parametre1)));
	$serie2->addPoint(new Point("NOV", $per->hemomoisp($DATEMOIS."-11-01",$DATEMOIS."-11-30",$idp,$parametre1)));
	$serie2->addPoint(new Point("DEC", $per->hemomoisp($DATEMOIS."-12-01",$DATEMOIS."-12-31",$idp,$parametre1)));
	//APRES DIALYSE
	$serie3 = new XYDataSet();
	$serie3->addPoint(new Point("JAN", $per->hemomoisp($DATEMOIS."-01-01",$DATEMOIS."-01-31",$idp,$parametre2)));
	$serie3->addPoint(new Point("FEV", $per->hemomoisp($DATEMOIS."-02-01",$DATEMOIS."-02-28",$idp,$parametre2)));
	$serie3->addPoint(new Point("MAR", $per->hemomoisp($DATEMOIS."-03-01",$DATEMOIS."-03-31",$idp,$parametre2)));
	$serie3->addPoint(new Point("AVR", $per->hemomoisp($DATEMOIS."-04-01",$DATEMOIS."-04-30",$idp,$parametre2)));
	$serie3->addPoint(new Point("MAI", $per->hemomoisp($DATEMOIS."-05-01",$DATEMOIS."-05-31",$idp,$parametre2)));
	$serie3->addPoint(new Point("JUIN",$per->hemomoisp($DATEMOIS."-06-01",$DATEMOIS."-06-30",$idp,$parametre2)));
	$serie3->addPoint(new Point("JUIL",$per->hemomoisp($DATEMOIS."-07-01",$DATEMOIS."-07-31",$idp,$parametre2)));
	$serie3->addPoint(new Point("AOUT",$per->hemomoisp($DATEMOIS."-08-01",$DATEMOIS."-08-31",$idp,$parametre2)));
	$serie3->addPoint(new Point("SEP", $per->hemomoisp($DATEMOIS."-09-01",$DATEMOIS."-09-30",$idp,$parametre2)));
	$serie3->addPoint(new Point("OCT", $per->hemomoisp($DATEMOIS."-10-01",$DATEMOIS."-10-31",$idp,$parametre2)));
	$serie3->addPoint(new Point("NOV", $per->hemomoisp($DATEMOIS."-11-01",$DATEMOIS."-11-30",$idp,$parametre2)));
	$serie3->addPoint(new Point("DEC", $per->hemomoisp($DATEMOIS."-12-01",$DATEMOIS."-12-31",$idp,$parametre2)));
	
	$dataSet = new XYSeriesDataSet();
	$dataSet->addSerie("poids AVD", $serie1);
	$dataSet->addSerie("poids SEC", $serie2);
	$dataSet->addSerie("poids APD", $serie3);
	
	$chart->setDataSet($dataSet);

	$chart->setTitle("EVOLUTION DU POIDS  PAR MOIS  :".$DATE);
	$chart->getPlot()->setGraphCaptionRatio(0.62);
	$chart->render("./CHART/demo/generated/demo6.png");
	
echo"<div style=\"position:absolute;left:740px;top:380px;\" >";
echo"<img alt=\"Vertical bars chart\" src=\"./CHART/demo/generated/demo6.png\" style=\"border: 1px solid gray;\"/>";
echo"</div>";

?>
	
	



















