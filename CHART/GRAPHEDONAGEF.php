<?php
// include "./CHART/fonction.php";	
include "./CHART/libchart/classes/libchart.php";

function cdv($colone1,$colone2,$colone3,$datejour1,$datejour2)
{
  $db_host="localhost";
  $db_name="gpts2012"; 
  $db_user="root";
  $db_pass="";
  $cnx = mysql_connect($db_host,$db_user,$db_pass)or die ('I cannot connect to the database because: ' . mysql_error());
  $db  = mysql_select_db($db_name,$cnx) ;
  $sql = " select SEXE,AGE,datedon,IND from tdon where IND='IND'and SEXE='$colone1' and AGE >=$colone2  and AGE <=$colone3    and datedon >='$datejour1'and datedon <='$datejour2'";
  $requete = @mysql_query($sql, $cnx) or die($sql."<br>".mysql_error());
  $collecte=mysql_num_rows($requete);
  mysql_free_result($requete);
  return $collecte;
}
// cdv('M',0,14,$datejour1,$datejour2)
$datejour1=date("Y");
$datejour2=date("Y-m-d");
//pour modifier la couleur  du graphe  C:\wamp\www\GPTS2013\CHART\libchart\classes\view\color\Palette.php ligne 60
$DATEMOIS=date("Y");
$chart = new VerticalBarChart();
$dataSet = new XYDataSet();
$dataSet->addPoint(new Point("18-19", cdv('F',18,19,$datejour1.'-01-01',$datejour2)));
$dataSet->addPoint(new Point("20-29", cdv('F',20,29,$datejour1.'-01-01',$datejour2)));
$dataSet->addPoint(new Point("30-39", cdv('F',30,39,$datejour1.'-01-01',$datejour2)));
$dataSet->addPoint(new Point("40-49", cdv('F',40,49,$datejour1.'-01-01',$datejour2)));
$dataSet->addPoint(new Point("50-59", cdv('F',50,59,$datejour1.'-01-01',$datejour2)));
$dataSet->addPoint(new Point("60-69", cdv('F',60,69,$datejour1.'-01-01',$datejour2)));
$dataSet->addPoint(new Point("70-79", cdv('F',70,79,$datejour1.'-01-01',$datejour2)));
$chart->setDataSet($dataSet);
$DATE=date("d-m-Y");
$chart->setTitle("Etat Des Dons IND Par Tranche d'age (sexe feminin)  ARRET AU  :".$DATE);
$chart->render("./CHART/demo/generated/demo1.png");
?>

<div style=" position:absolute;left:340px;top:260px;"  >
	<img alt="Vertical bars chart" src="./CHART/demo/generated/demo1.png" style="border: 4px solid RED;"/>
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
