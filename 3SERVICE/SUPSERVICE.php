<?php     
  
    $id  = $_GET["ids"] ;
    //requête SQL:
   $sql = "DELETE FROM SERVICE WHERE ids = ".$id ;
   //exécution de la requête:
   $requete = mysql_query( $sql, $cnx ) ;
   if($requete)
{
    //echo("La suppression a ete correctement effectuee") ;
	header("Location: index.php?uc=SERVICE") ;
}
else
{
    //echo("La modification à echouee") ;
	header("Location: index.php?uc=SERVICE") ;
}
  
 ?> 