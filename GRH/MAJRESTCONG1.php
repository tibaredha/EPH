<?php
$idp            = $_POST["idp"] ;
$QUT            = $_POST["QUT"] ;
$per-> mysqlconnect();   
$sql = "UPDATE grh SET QUT  = '$QUT'  WHERE idp = '$idp'" ;
$requete = mysql_query($sql) or die( mysql_error() ) ;
if($requete)
{
header("Location: index.php?uc=RELIQUAT") ;
}
else
{
header("Location: index.php?uc=RELIQUAT") ;
}
?>

