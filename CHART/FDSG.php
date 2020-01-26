<?php
include "./CHART/fonction.php";	
include "./CHART/libchart/classes/libchart.php";
if (!ISSET($_POST['annee'])||!ISSET($_POST['mois'])||!ISSET($_POST['jour'])||!ISSET($_POST['annee1'])||!ISSET($_POST['mois1'])||!ISSET($_POST['jour1']))
{
$datejour1 =date("Y-m-d");
$datejour2 =date("Y-m-d");
}
else
{
 if(empty($_POST['annee'])||empty($_POST['mois'])||empty($_POST['jour'])||empty($_POST['annee1'])||empty($_POST['mois1'])||empty($_POST['jour1']))
 {
 $datejour1 =date("Y-m-d");
 $datejour2 =date("Y-m-d");
 }
 else
 {
 $datejour1 = $_POST['annee'] .'-'.$_POST['mois'] .'-'.$_POST['jour'];
 $datejour2 = $_POST['annee1'].'-'.$_POST['mois1'].'-'.$_POST['jour1'];
 }
}
$datejour11 = $_POST['jour'].'-'.$_POST['mois'] .'-'.$_POST['annee'];
$datejour22 = $_POST['jour1'].'-'.$_POST['mois1'].'-'.$_POST['annee1'];

if ($_POST["idproduit"] !=-1 and $datejour1<=$datejour2) 
{
$idproduit=$_POST["idproduit"];
$chart = new LineChart();
$dataSet = new XYDataSet(); 
$query_liste = "SELECT * FROM stock where IDPRODUIT=$idproduit and DATE >='$datejour1'and DATE <='$datejour2'  ";
$requete = mysql_query( $query_liste, $cnx ) or die( "ERREUR MYSQL numéro: ".mysql_errno()."<br>Type de cette erreur: ".mysql_error()."<br>\n" );
while( $result = mysql_fetch_array( $requete ) )
{
$dataSet->addPoint(new Point($result["DATE"], $result["RES"])); //en cours probleme avec date du stock un mois ou sur une semaine 
} 
$chart->setDataSet($dataSet);
$DATE=date("d-m-Y");
$chart->setTitle("FICHE DE STOCK:  ARRET AU  :".$DATE);
$chart->render("./CHART/demo/generated/demo5.png");
}
else
{
header("Location: ./index.php?uc=FDSG") ;
}
echo "<div style=\" position:absolute;left:340px;top:260px;\"  >";
echo "<img alt=\"Vertical bars chart\" src=\"./CHART/demo/generated/demo5.png\" style=\"border: 1px solid gray;\"/>";
echo "</div>	";
?>
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
