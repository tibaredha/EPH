<?php
//changement de service2 $id 
    $IDWIL = $_POST["IDWIL"] ;
    $IDCOM = $_POST["IDCOM"] ;
    $communear = $_POST["communear"] ;
    $COMMUNE = $_POST["COMMUNE"] ;
	//cr�ation de la requ�te SQL:
	$sql = "UPDATE COM SET
	IDWIL     = '$IDWIL',
	communear = '$communear',
	COMMUNE   = '$COMMUNE'
	WHERE IDCOM = '$IDCOM'" ;
 //ex�cution de la requ�te SQL:
  $requete = mysql_query($sql, $cnx) or die( mysql_error() ) ;
//affichage des r�sultats, pour savoir si la modification a march�e:
 
if($requete)
{
    //echo("La modification a ete correctement effectuee") ;
	header("Location: index.php?uc=WC1") ;
}
else
{
    //echo("La modification � echouee") ;
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
