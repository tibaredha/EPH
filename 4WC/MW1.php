<?php
//changement de service2 $id 
    $IDWIL = $_POST["IDWIL"] ;
    $WILAYASAR = $_POST["WILAYASAR"] ;
    $WILAYAS = $_POST["WILAYAS"] ;
	//cr�ation de la requ�te SQL:
	$sql = "UPDATE WIL SET
	WILAYASAR = '$WILAYASAR',
	WILAYAS = '$WILAYAS'
	WHERE IDWIL = '$IDWIL'" ;
 //ex�cution de la requ�te SQL:
  $requete = mysql_query($sql, $cnx) or die( mysql_error() ) ;
//affichage des r�sultats, pour savoir si la modification a march�e:
 
if($requete)
{
    //echo("La modification a ete correctement effectuee") ;
	header("Location: index.php?uc=WC") ;
}
else
{
    //echo("La modification � echouee") ;
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
