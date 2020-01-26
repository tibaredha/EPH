<?php
$ANNEE=date("Y");
$ANNEE2=date("Y")-1;
$ANNEE3=date("Y")-2;
$A1='A'.$ANNEE;
$A2='A'.$ANNEE2;
$A3='A'.$ANNEE3;
$idg = $_POST["idg"] ;
$A11 = $_POST["$A1"];
$A22 = $_POST["$A2"];
$A33 = $_POST["$A3"];
$per-> mysqlconnect(); 
$sql = "UPDATE GRADE SET
	$A1   = '$A11',
	$A2   = '$A22',
	$A3   = '$A33 '
	WHERE idg = '$idg'" ;
$requete = mysql_query($sql) or die( mysql_error() ) ;
if($requete)
{
header("Location: index.php?uc=GRADE") ;
}
else
{
header("Location: index.php?uc=GRADE") ;
}
?>
