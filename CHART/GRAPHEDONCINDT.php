<?php
include "./CHART/fonction.php";	
include "./CHART/libchart/classes/libchart.php";
$DATEMOIS=date("Y");
$chart = new VerticalBarChart();
$dataSet = new XYDataSet();
$dataSet->addPoint(new Point("JAN", donparmois($DATEMOIS."-01-01",$DATEMOIS."-01-31","CIDT")));
$dataSet->addPoint(new Point("FEV", donparmois($DATEMOIS."-02-01",$DATEMOIS."-02-28","CIDT")));
$dataSet->addPoint(new Point("MAR", donparmois($DATEMOIS."-03-01",$DATEMOIS."-03-31","CIDT")));
$dataSet->addPoint(new Point("AVR", donparmois($DATEMOIS."-04-01",$DATEMOIS."-04-30","CIDT")));
$dataSet->addPoint(new Point("MAI", donparmois($DATEMOIS."-05-01",$DATEMOIS."-05-31","CIDT")));
$dataSet->addPoint(new Point("JUIN",donparmois($DATEMOIS."-06-01",$DATEMOIS."-06-31","CIDT")));
$dataSet->addPoint(new Point("JUIL",donparmois($DATEMOIS."-07-01",$DATEMOIS."-07-30","CIDT")));
$dataSet->addPoint(new Point("AOUT",donparmois($DATEMOIS."-08-01",$DATEMOIS."-08-31","CIDT")));
$dataSet->addPoint(new Point("SEP", donparmois($DATEMOIS."-09-01",$DATEMOIS."-09-30","CIDT")));
$dataSet->addPoint(new Point("OCT", donparmois($DATEMOIS."-10-01",$DATEMOIS."-10-31","CIDT")));
$dataSet->addPoint(new Point("NOV", donparmois($DATEMOIS."-11-01",$DATEMOIS."-11-30","CIDT")));
$dataSet->addPoint(new Point("DEC", donparmois($DATEMOIS."-12-01",$DATEMOIS."-12-31","CIDT")));
$chart->setDataSet($dataSet);
$DATE=date("d-m-Y");
$chart->setTitle("Etat Des Dons CONTRE-IND TEMPORAIRE   ARRET AU  :".$DATE);
$chart->render("./CHART/demo/generated/demo1.png");

?>

<div style=" position:absolute;left:340px;top:260px;"  >
	<img alt="Vertical bars chart" src="./CHART/demo/generated/demo1.png" style="border: 1px solid gray;"/>
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
