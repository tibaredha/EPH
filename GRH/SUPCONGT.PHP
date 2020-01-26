<?php 
$per-> mysqlconnect();   
$id  = $_GET["idregcong"] ;
$sql = "DELETE FROM regcong WHERE idregcong =$id  " ;
$requete = mysql_query( $sql ) ;
if($requete)
{
header("Location: index.php?uc=REGCONG") ;
}
else
{
header("Location: index.php?uc=REGCONG") ;
}
  
 ?> 