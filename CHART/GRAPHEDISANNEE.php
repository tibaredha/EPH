<?php
include "./CHART/fonction.php";	
include "./CHART/libchart/classes/libchart.php";
$DATEMOIS=date("Y");
$chart = new VerticalBarChart();
$dataSet = new XYDataSet();
// $dataSet->addPoint(new Point("2000", disparanee("2000-01-01","2000-12-31")));
// $dataSet->addPoint(new Point("2001", disparanee("2001-01-01","2001-12-31")));
$dataSet->addPoint(new Point("2002", disparanee("2002-01-01","2002-12-31")));
$dataSet->addPoint(new Point("2003", disparanee("2003-01-01","2003-12-31")));
$dataSet->addPoint(new Point("2004", disparanee("2004-01-01","2004-12-31")));
$dataSet->addPoint(new Point("2005", disparanee("2005-01-01","2005-12-31")));
$dataSet->addPoint(new Point("2006", disparanee("2006-01-01","2006-12-31")));
$dataSet->addPoint(new Point("2007", disparanee("2007-01-01","2007-12-31")));
$dataSet->addPoint(new Point("2008", disparanee("2008-01-01","2008-12-31")));
$dataSet->addPoint(new Point("2009", disparanee("2009-01-01","2009-12-31")));
$dataSet->addPoint(new Point("2010", disparanee("2010-01-01","2010-12-31")));
$dataSet->addPoint(new Point("2011", disparanee("2011-01-01","2011-12-31")));
$dataSet->addPoint(new Point("2012", disparaneea("2012-01-01","2012-12-31")));//nouvelle base de donnes saisie incomplete
$dataSet->addPoint(new Point("2013", disparaneea("2013-01-01","2013-12-31")));//nouvelle base de donnes saisie incomplete
$dataSet->addPoint(new Point("2014", disparaneea("2014-01-01","2014-12-31")));//nouvelle base de donnes

$chart->setDataSet($dataSet);
$DATE=date("d-m-Y");
$chart->setTitle("Etat Des Distribution 2002-2014 ARRET AU  :".$DATE);
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
