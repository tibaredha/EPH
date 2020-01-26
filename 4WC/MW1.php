<?php
//changement de service2 $id 
    $IDWIL = $_POST["IDWIL"] ;
    $WILAYASAR = $_POST["WILAYASAR"] ;
    $WILAYAS = $_POST["WILAYAS"] ;
	//création de la requête SQL:
	$sql = "UPDATE WIL SET
	WILAYASAR = '$WILAYASAR',
	WILAYAS = '$WILAYAS'
	WHERE IDWIL = '$IDWIL'" ;
 //exécution de la requête SQL:
  $requete = mysql_query($sql, $cnx) or die( mysql_error() ) ;
//affichage des résultats, pour savoir si la modification a marchée:
 
if($requete)
{
    //echo("La modification a ete correctement effectuee") ;
	header("Location: index.php?uc=WC") ;
}
else
{
    //echo("La modification à echouee") ;
	header("Location: index.php?uc=WC") ;
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
