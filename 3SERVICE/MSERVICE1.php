<?php
$per-> mysqlconnect();
//changement de service2 $id 
    $idservice = $_POST["idservice"] ;
    $servicear = $_POST["servicear"] ;
    $servicefr = $_POST["servicefr"] ;
	//cr�ation de la requ�te SQL:
	$sql = "UPDATE SERVICE SET
	servicear = '$servicear',
	servicefr = '$servicefr'
	
	WHERE ids = '$idservice'" ;
 //ex�cution de la requ�te SQL:
  $requete = mysql_query($sql) or die( mysql_error() ) ;
//affichage des r�sultats, pour savoir si la modification a march�e:
 
if($requete)
{
    //echo("La modification a ete correctement effectuee") ;
	header("Location: index.php?uc=SERVICE") ;
}
else
{
    //echo("La modification � echouee") ;
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
