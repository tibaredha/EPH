<?php
//changement de service2 $id 
    $idg = $_POST["idg"] ;
    $gradear = $_POST["gradear"] ;
    $gradefr = $_POST["gradefr"] ;
    $ids = $_POST["ids"] ;
	//cr�ation de la requ�te SQL:
	$sql = "UPDATE GRADE SET
	gradear   = '$gradear',
	gradefr   = '$gradefr',
	ids       = '$ids '
	WHERE idg = '$idg'" ;
 //ex�cution de la requ�te SQL:
  $requete = mysql_query($sql, $cnx) or die( mysql_error() ) ;
//affichage des r�sultats, pour savoir si la modification a march�e:
 
if($requete)
{
    //echo("La modification a ete correctement effectuee") ;
	header("Location: index.php?uc=GRADE") ;
}
else
{
    //echo("La modification � echouee") ;
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
