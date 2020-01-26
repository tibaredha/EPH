<?php
$per-> mysqlconnect();
//changement de service2 $id 
    $idservice = $_POST["idservice"] ;
    $servicear = $_POST["servicear"] ;
    $servicefr = $_POST["servicefr"] ;
	//création de la requête SQL:
	$sql = "UPDATE SERVICE SET
	servicear = '$servicear',
	servicefr = '$servicefr'
	
	WHERE ids = '$idservice'" ;
 //exécution de la requête SQL:
  $requete = mysql_query($sql) or die( mysql_error() ) ;
//affichage des résultats, pour savoir si la modification a marchée:
 
if($requete)
{
    //echo("La modification a ete correctement effectuee") ;
	header("Location: index.php?uc=SERVICE") ;
}
else
{
    //echo("La modification à echouee") ;
	header("Location: index.php?uc=SERVICE") ;
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
