<?php
// header('Refresh: 5');
include "./CHART/fonction.php";	
include "./CHART/libchart/classes/libchart.php";
$DATEMOIS=date("Y");
$chart = new VerticalBarChart();
$dataSet = new XYDataSet();
$dataSet->addPoint(new Point("JAN", decesparmois($DATEMOIS."-01-01",$DATEMOIS."-01-31",'IND')));
$dataSet->addPoint(new Point("FEV", decesparmois($DATEMOIS."-02-01",$DATEMOIS."-02-28","IND")));
$dataSet->addPoint(new Point("MAR", decesparmois($DATEMOIS."-03-01",$DATEMOIS."-03-31","IND")));
$dataSet->addPoint(new Point("AVR", decesparmois($DATEMOIS."-04-01",$DATEMOIS."-04-30","IND")));
$dataSet->addPoint(new Point("MAI", decesparmois($DATEMOIS."-05-01",$DATEMOIS."-05-31","IND")));
$dataSet->addPoint(new Point("JUIN",decesparmois($DATEMOIS."-06-01",$DATEMOIS."-06-31","IND")));
$dataSet->addPoint(new Point("JUIL",decesparmois($DATEMOIS."-07-01",$DATEMOIS."-07-30","IND")));
$dataSet->addPoint(new Point("AOUT",decesparmois($DATEMOIS."-08-01",$DATEMOIS."-08-31","IND")));
$dataSet->addPoint(new Point("SEP", decesparmois($DATEMOIS."-09-01",$DATEMOIS."-09-30","IND")));
$dataSet->addPoint(new Point("OCT", decesparmois($DATEMOIS."-10-01",$DATEMOIS."-10-31","IND")));
$dataSet->addPoint(new Point("NOV", decesparmois($DATEMOIS."-11-01",$DATEMOIS."-11-30","IND")));
$dataSet->addPoint(new Point("DEC", decesparmois($DATEMOIS."-12-01",$DATEMOIS."-12-31",'IND')));
$chart->setDataSet($dataSet);
$DATE=date("d-m-Y");
$chart->setTitle("Etat Des Déces  ARRET AU  : ".$DATE);
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
