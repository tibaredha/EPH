<?php
//changement de service2 $id 
    $idg = $_POST["idg"] ;
    $gradear = $_POST["gradear"] ;
    $gradefr = $_POST["gradefr"] ;
    $ids = $_POST["ids"] ;
	//création de la requête SQL:
	$sql = "UPDATE GRADE SET
	gradear   = '$gradear',
	gradefr   = '$gradefr',
	ids       = '$ids '
	WHERE idg = '$idg'" ;
 //exécution de la requête SQL:
  $requete = mysql_query($sql, $cnx) or die( mysql_error() ) ;
//affichage des résultats, pour savoir si la modification a marchée:
 
if($requete)
{
    //echo("La modification a ete correctement effectuee") ;
	header("Location: index.php?uc=GRADE") ;
}
else
{
    //echo("La modification à echouee") ;
	header("Location: index.php?uc=GRADE") ;
}
?>
<br> 
 <br> 
 <br> 
 <br> 
 <br> 
 <br> 
 <br> 
 <br> 
 <br> 
 <br> 
 <br> 
 <br> 
 <br> 
 <br> 
