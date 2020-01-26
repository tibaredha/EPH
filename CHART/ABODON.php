<?php
	include "./CHART/fonction.php";	
    include "./CHART/libchart/classes/libchart.php";
	$chart = new PieChart();
	$dataSet = new XYDataSet();
	// ABODON($datejour1,$datejour2,$GROUPAGE) 
	
	
	
	
	$DATEMOIS=date("Y");
	$AP=ABODON($DATEMOIS.'-01-01',$DATEMOIS.'-12-31','A','Positif');
	$BP=ABODON($DATEMOIS.'-01-01',$DATEMOIS.'-12-31','B','Positif');
	$ABP=ABODON($DATEMOIS.'-01-01',$DATEMOIS.'-12-31','AB','Positif');
	$OP=ABODON($DATEMOIS.'-01-01',$DATEMOIS.'-12-31','O','Positif');
	$AN=ABODON($DATEMOIS.'-01-01',$DATEMOIS.'-12-31','A','negatif');
	$BN=ABODON($DATEMOIS.'-01-01',$DATEMOIS.'-12-31','B','negatif');
	$ABN=ABODON($DATEMOIS.'-01-01',$DATEMOIS.'-12-31','AB','negatif');
	$ON=ABODON($DATEMOIS.'-01-01',$DATEMOIS.'-12-31','O','negatif');
	
	$dataSet->addPoint(new Point("A+",$AP));
	$dataSet->addPoint(new Point("B+",$BP));
	$dataSet->addPoint(new Point("AB+",$ABP));
	$dataSet->addPoint(new Point("O+",$OP));
	$dataSet->addPoint(new Point("A-",$AN));
	$dataSet->addPoint(new Point("B-",$BN));
	$dataSet->addPoint(new Point("AB-",$ABN));
	$dataSet->addPoint(new Point("O-",$ON));
	
	
	
	$chart->setDataSet($dataSet);
	$DATE=date("d-m-Y");
    $chart->setTitle("Etat Des Dons PAR GROUPAGE ABO RH annee ".$DATEMOIS." ARRET AU  :".$DATE);
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
