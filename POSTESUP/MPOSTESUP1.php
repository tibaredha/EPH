<?php
//changement de service2 $id 
    $idpostesup = $_POST["idpostesup"] ;
    $postesupar = $_POST["postesupar"] ;
    $postesupfr = $_POST["postesupfr"] ;
    $ids = $_POST["ids"] ;
	//cr�ation de la requ�te SQL:
	$sql = "UPDATE postesup SET
	postesupar   = '$postesupar',
	postesupfr   = '$postesupfr',
	ids       = '$ids '
	WHERE idpostesup = '$idpostesup'" ;
 //ex�cution de la requ�te SQL:
  $requete = mysql_query($sql, $cnx) or die( mysql_error() ) ;
//affichage des r�sultats, pour savoir si la modification a march�e:
 
if($requete)
{
    //echo("La modification a ete correctement effectuee") ;
	header("Location: index.php?uc=POSTESUP") ;
}
else
{
    //echo("La modification � echouee") ;
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
