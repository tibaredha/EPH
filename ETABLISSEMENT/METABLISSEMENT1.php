<?php
//changement de service2 $id 
    $IDETABLISSEMENT= $_POST["IDETABLISSEMENT"] ;
    $ETABLISSEMENTAR = $_POST["ETABLISSEMENTAR"] ;
    $ETABLISSEMENTFR = $_POST["ETABLISSEMENTFR"] ;
 $per-> mysqlconnect();    
	//cr�ation de la requ�te SQL:
	$sql = "UPDATE etablissement SET
	ETABLISSEMENTFR   = '$ETABLISSEMENTFR',
	ETABLISSEMENTAR   = '$ETABLISSEMENTAR'
	
	WHERE IDETABLISSEMENT = '$IDETABLISSEMENT'" ;
 //ex�cution de la requ�te SQL:
  $requete = mysql_query($sql) or die( mysql_error() ) ;
//affichage des r�sultats, pour savoir si la modification a march�e:
 
if($requete)
{
    //echo("La modification a ete correctement effectuee") ;
	header("Location: index.php?uc=ETABLISSEMENT") ;
}
else
{
    //echo("La modification � echouee") ;
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
