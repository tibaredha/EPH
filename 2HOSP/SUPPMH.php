<?php     
  $per-> mysqlconnect();
    $id  = $_GET["idp"] ;
    //requ�te SQL:
   $sql = "DELETE FROM TPAT WHERE IDP = ".$id ;
   //ex�cution de la requ�te:
   $requete = mysql_query( $sql ) ;
   if($requete)
{
    //echo("La suppression a ete correctement effectuee") ;
	header("Location:index.php?uc=LISTMHOSP") ;
}
else
{
    //echo("La modification � echouee") ;
	header("Location: index.php?uc=LISTMHOSP") ;
}
  
 ?> 
