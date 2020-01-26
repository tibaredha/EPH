<?php     
$id  = $_GET["idp"] ;
$per-> mysqlconnect();
$sql = "DELETE FROM grh WHERE idp = ".$id ;  
 //  $requete = mysql_query( $sql ) ;// il faut desactive pour  que sa marche 
if($requete)
{    
header("Location: index.php?uc=LGRHP") ;
}
else
{  
header("Location: index.php?uc=LGRHP") ;

}
  
 ?> 