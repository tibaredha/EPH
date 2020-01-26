<?php
include "./CHART/fonction.php";	
include "./CHART/libchart/classes/libchart.php";
$DATEMOIS=date("Y");
$chart = new VerticalBarChart();
$dataSet = new XYDataSet();
$dataSet->addPoint(new Point("JAN", disparaneec($DATEMOIS."-01-01",$DATEMOIS."-01-31")));
$dataSet->addPoint(new Point("FEV", disparaneec($DATEMOIS."-02-01",$DATEMOIS."-02-28")));
$dataSet->addPoint(new Point("MAR", disparaneec($DATEMOIS."-03-01",$DATEMOIS."-03-31")));
$dataSet->addPoint(new Point("AVR", disparaneec($DATEMOIS."-04-01",$DATEMOIS."-04-30")));
$dataSet->addPoint(new Point("MAI", disparaneec($DATEMOIS."-05-01",$DATEMOIS."-05-31")));
$dataSet->addPoint(new Point("JUIN",disparaneec($DATEMOIS."-06-01",$DATEMOIS."-06-31")));
$dataSet->addPoint(new Point("JUIL",disparaneec($DATEMOIS."-07-01",$DATEMOIS."-07-30")));
$dataSet->addPoint(new Point("AOUT",disparaneec($DATEMOIS."-08-01",$DATEMOIS."-08-31")));
$dataSet->addPoint(new Point("SEP", disparaneec($DATEMOIS."-09-01",$DATEMOIS."-09-30")));
$dataSet->addPoint(new Point("OCT", disparaneec($DATEMOIS."-10-01",$DATEMOIS."-10-31")));
$dataSet->addPoint(new Point("NOV", disparaneec($DATEMOIS."-11-01",$DATEMOIS."-11-30")));
$dataSet->addPoint(new Point("DEC", disparaneec($DATEMOIS."-12-01",$DATEMOIS."-12-31")));
$chart->setDataSet($dataSet);
$DATE=date("d-m-Y");
$chart->setTitle("Etat Des Distribution CPS  ARRET AU  :".$DATE);
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
