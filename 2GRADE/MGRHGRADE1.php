<?php
//changement de service2 $id 
    $idp          = $_POST["idp"] ;
    $GRADE        = $_POST["GRADE"] ;
    $Nomarab      = $_POST["Nomlatin"] ;
	$Prenom_Arabe = $_POST["Prenom_Latin"] ;
	$Sexe         = $_POST["Sexe"] ;
	//création de la requête SQL:
	$sql = "UPDATE grh SET
	rnvgradear   = '$GRADE'
	WHERE idp = '$idp '" ;
 //exécution de la requête SQL:
  $requete = mysql_query($sql, $cnx) or die( mysql_error() ) ;
//affichage des résultats, pour savoir si la modification a marchée:
 
if($requete)
{
    //echo("La modification a ete correctement effectuee") ;
	header("Location: index.php?uc=GRH&idp=$idp&Nomlatin=$Nomarab&Prenom_Latin=$Prenom_Arabe&Sexe=$Sexe") ;
}
else
{
    //echo("La modification à echouee") ;
	header("Location: index.php?uc=GRH&idp=$idp&Nomlatin=$Nomarab&Prenom_Latin=$Prenom_Arabe&Sexe=$Sexe") ;
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
  
 
