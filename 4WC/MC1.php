<?php
//changement de service2 $id 
    $IDWIL = $_POST["IDWIL"] ;
    $IDCOM = $_POST["IDCOM"] ;
    $communear = $_POST["communear"] ;
    $COMMUNE = $_POST["COMMUNE"] ;
	//création de la requête SQL:
	$sql = "UPDATE COM SET
	IDWIL     = '$IDWIL',
	communear = '$communear',
	COMMUNE   = '$COMMUNE'
	WHERE IDCOM = '$IDCOM'" ;
 //exécution de la requête SQL:
  $requete = mysql_query($sql, $cnx) or die( mysql_error() ) ;
//affichage des résultats, pour savoir si la modification a marchée:
 
if($requete)
{
    //echo("La modification a ete correctement effectuee") ;
	header("Location: index.php?uc=WC1") ;
}
else
{
    //echo("La modification à echouee") ;
	header("Location: index.php?uc=WC1") ;
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
