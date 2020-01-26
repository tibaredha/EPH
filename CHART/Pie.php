<?php
	include "./CHART/fonction.php";	
    include "./CHART/libchart/classes/libchart.php";
	$chart = new PieChart();
	$dataSet = new XYDataSet();
	$DATEMOIS=date("Y");
	$datem=fixemobile($DATEMOIS.'-01-01',$DATEMOIS.'-12-31','IND','MOBILE');
	$datef=fixemobile($DATEMOIS.'-01-01',$DATEMOIS.'-12-31','IND','FIXE');
	$dataSet->addPoint(new Point("fixe",$datef));
	$dataSet->addPoint(new Point("mobile",$datem));
	$chart->setDataSet($dataSet);
	$DATE=date("d-m-Y");
    $chart->setTitle("Etat Des Dons fixe/mobile annee ".$DATEMOIS." ARRET AU  :".$DATE);
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
