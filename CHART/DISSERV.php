<?php
	include "./CHART/fonction.php";	
    include "./CHART/libchart/classes/libchart.php";
	$chart = new PieChart();
	$dataSet = new XYDataSet();
	
	
	
	// $per ->combov(260,250,'SERVICE',array("PTS", "", "", "", "", "", "", "", "", "BLOC OPP B", "", "")); 
	
	$DATEMOIS=date("Y"); 
	$MEDECINEHOMME=DISSERV($DATEMOIS.'-01-01',$DATEMOIS.'-12-31','MEDECINE HOMME');
	$MEDECINEFEMME=DISSERV($DATEMOIS.'-01-01',$DATEMOIS.'-12-31','MEDECINE FEMME');
	$CHIRURGIEHOMME=DISSERV($DATEMOIS.'-01-01',$DATEMOIS.'-12-31','CHIRURGIE HOMME');
	$CHIRURGIEFEMME=DISSERV($DATEMOIS.'-01-01',$DATEMOIS.'-12-31','CHIRURGIE FEMME');
	$UMC=DISSERV($DATEMOIS.'-01-01',$DATEMOIS.'-12-31','UMC');
	$BLOCOPPA=DISSERV($DATEMOIS.'-01-01',$DATEMOIS.'-12-31','BLOC OPP A');
	$HEMODIALYSE=DISSERV($DATEMOIS.'-01-01',$DATEMOIS.'-12-31','HEMODIALYSE');
	$PEDIATRIE=DISSERV($DATEMOIS.'-01-01',$DATEMOIS.'-12-31','PEDIATRIE');
	$MATERNITE=DISSERV($DATEMOIS.'-01-01',$DATEMOIS.'-12-31','MATERNITE');
	$GYNECO=DISSERV($DATEMOIS.'-01-01',$DATEMOIS.'-12-31','GYNECO');
	
	$dataSet->addPoint(new Point("MEDECINE HOMME",$MEDECINEHOMME));
	$dataSet->addPoint(new Point("MEDECINE FEMME",$MEDECINEFEMME));
	$dataSet->addPoint(new Point("CHIRURGIE HOMME",$CHIRURGIEHOMME));
	$dataSet->addPoint(new Point("CHIRURGIE FEMME",$CHIRURGIEFEMME));
	$dataSet->addPoint(new Point("UMC",$UMC));
	$dataSet->addPoint(new Point("BLOC OPP A",$BLOCOPPA));
	$dataSet->addPoint(new Point("HEMODIALYSE",$HEMODIALYSE));
	$dataSet->addPoint(new Point("PEDIATRIE",$PEDIATRIE));
	$dataSet->addPoint(new Point("MATERNITE",$MATERNITE));
	$dataSet->addPoint(new Point("GYNECO",$GYNECO));
	
	
	
	
	
	
	$chart->setDataSet($dataSet);
	$DATE=date("d-m-Y");
    $chart->setTitle("Etat Des DISTRIBUTION PAR SERVICE CGR  annee ".$DATEMOIS." ARRET AU  :".$DATE);
	$chart->render("./CHART/demo/generated/demo3.png");
?>
<div style=" position:absolute;left:340px;top:260px;"  >
	<img alt="Vertical bars chart" src="./CHART/demo/generated/demo3.png" style="border: 1px solid gray;"/>
</div>
</br>
</br>
</br>
</br>
</br>
</br>
</br>
</br>
</br>
</br>
</br>
</br>
</br>
</br>
</br>
</br>
</br>
</br>
</br>
