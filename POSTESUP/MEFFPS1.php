<?php
//changement de service2 $id 
    $idpostesup = $_POST["idpostesup"] ;
    $A2011 = $_POST["A2011"];
    $A2012 = $_POST["A2012"];
    $A2013 = $_POST["A2013"];
	//cr�ation de la requ�te SQL:
	$sql = "UPDATE postesup SET
	A2011   = '$A2011',
	A2012   = '$A2012',
	A2013   = '$A2013 '
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
