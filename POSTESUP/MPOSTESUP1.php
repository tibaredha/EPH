<?php
//changement de service2 $id 
    $idpostesup = $_POST["idpostesup"] ;
    $postesupar = $_POST["postesupar"] ;
    $postesupfr = $_POST["postesupfr"] ;
    $ids = $_POST["ids"] ;
	//création de la requête SQL:
	$sql = "UPDATE postesup SET
	postesupar   = '$postesupar',
	postesupfr   = '$postesupfr',
	ids       = '$ids '
	WHERE idpostesup = '$idpostesup'" ;
 //exécution de la requête SQL:
  $requete = mysql_query($sql, $cnx) or die( mysql_error() ) ;
//affichage des résultats, pour savoir si la modification a marchée:
 
if($requete)
{
    //echo("La modification a ete correctement effectuee") ;
	header("Location: index.php?uc=POSTESUP") ;
}
else
{
    //echo("La modification à echouee") ;
	header("Location: index.php?uc=POSTESUP") ;
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
