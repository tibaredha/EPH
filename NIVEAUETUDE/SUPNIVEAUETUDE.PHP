<?php 
$per-> mysqlconnect();  
$idniveauetude  = $_GET["idniveauetude"] ;
$sql = "DELETE FROM niveauetude WHERE 	idniveauetude =$idniveauetude " ;
$requete = mysql_query( $sql ) ;
if($requete)
{

header("Location: index.php?uc=NIVEAUETUDE") ;
}
else
{
header("Location: index.php?uc=NIVEAUETUDE") ;
}
  
 ?> 