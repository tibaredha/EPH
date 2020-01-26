<?php
$idp = $_POST["idp"] ;

$DATESORTIE = $_POST["DATESORTIE"] ;
$MOTIF = $_POST["MOTIF"] ;
$per-> mysqlconnect();   
$sql = "UPDATE hemo SET 
SORTI ='$MOTIF',
DATESORTI='$DATESORTIE'

WHERE ID = '$idp'" ;
$requete = mysql_query($sql) or die( mysql_error() ) ;
if($requete)
{
header("Location: index.php?uc=LISTMHEMO") ;
}
else
{
header("Location: index.php?uc=LISTMHEMO") ;
}
?>

