<?php 
  $per-> mysqlconnect();   
    $id  = $_GET["idp"] ;
    //requête SQL:
   $sql = "DELETE FROM hemo WHERE ID = ".$id ;
   //exécution de la requête:
   $requete = mysql_query( $sql ) ;
   if($requete)
{
    //echo("La suppression a ete correctement effectuee") ;
	header("Location: index.php?uc=LISTMHEMO") ;
}
else
{
    //echo("La modification à echouee") ;
	header("Location: index.php?uc=LISTMHEMO") ;
}
  
 ?> 
 