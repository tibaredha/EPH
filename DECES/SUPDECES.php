<?php     
$idp  = $_GET["idp"] ;
$per-> mysqlconnect(); 
$sql = "DELETE FROM deces WHERE IDD= ".$idp ;
$requete = mysql_query( $sql ) ;
if($requete)
{
header("Location: index.php?uc=LISTDECES0") ;
}
else
{
header("Location: index.php?uc=LISTDECES0") ;
}
 ?> 
