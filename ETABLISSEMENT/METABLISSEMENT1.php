<?php
//changement de service2 $id 
    $IDETABLISSEMENT= $_POST["IDETABLISSEMENT"] ;
    $ETABLISSEMENTAR = $_POST["ETABLISSEMENTAR"] ;
    $ETABLISSEMENTFR = $_POST["ETABLISSEMENTFR"] ;
 $per-> mysqlconnect();    
	//création de la requête SQL:
	$sql = "UPDATE etablissement SET
	ETABLISSEMENTFR   = '$ETABLISSEMENTFR',
	ETABLISSEMENTAR   = '$ETABLISSEMENTAR'
	
	WHERE IDETABLISSEMENT = '$IDETABLISSEMENT'" ;
 //exécution de la requête SQL:
  $requete = mysql_query($sql) or die( mysql_error() ) ;
//affichage des résultats, pour savoir si la modification a marchée:
 
if($requete)
{
    //echo("La modification a ete correctement effectuee") ;
	header("Location: index.php?uc=ETABLISSEMENT") ;
}
else
{
    //echo("La modification à echouee") ;
	header("Location: index.php?uc=ETABLISSEMENT") ;
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
