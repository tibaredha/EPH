<?php
include "./CHART/fonction.php";	
include "./CHART/libchart/classes/libchart.php";
$DATEMOIS=date("Y");
$chart = new VerticalBarChart();
$dataSet = new XYDataSet();
$dataSet->addPoint(new Point("JAN", disparaneea($DATEMOIS."-01-01",$DATEMOIS."-01-31")));
$dataSet->addPoint(new Point("FEV", disparaneea($DATEMOIS."-02-01",$DATEMOIS."-02-28")));
$dataSet->addPoint(new Point("MAR", disparaneea($DATEMOIS."-03-01",$DATEMOIS."-03-31")));
$dataSet->addPoint(new Point("AVR", disparaneea($DATEMOIS."-04-01",$DATEMOIS."-04-30")));
$dataSet->addPoint(new Point("MAI", disparaneea($DATEMOIS."-05-01",$DATEMOIS."-05-31")));
$dataSet->addPoint(new Point("JUIN",disparaneea($DATEMOIS."-06-01",$DATEMOIS."-06-31")));
$dataSet->addPoint(new Point("JUIL",disparaneea($DATEMOIS."-07-01",$DATEMOIS."-07-30")));
$dataSet->addPoint(new Point("AOUT",disparaneea($DATEMOIS."-08-01",$DATEMOIS."-08-31")));
$dataSet->addPoint(new Point("SEP", disparaneea($DATEMOIS."-09-01",$DATEMOIS."-09-30")));
$dataSet->addPoint(new Point("OCT", disparaneea($DATEMOIS."-10-01",$DATEMOIS."-10-31")));
$dataSet->addPoint(new Point("NOV", disparaneea($DATEMOIS."-11-01",$DATEMOIS."-11-30")));
$dataSet->addPoint(new Point("DEC", disparaneea($DATEMOIS."-12-01",$DATEMOIS."-12-31")));
$chart->setDataSet($dataSet);
$DATE=date("d-m-Y");
$chart->setTitle("Etat Des Distribution CGR  ARRET AU  :".$DATE);
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
