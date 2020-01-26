<?php
$per-> mysqlconnect(); 
//changement de service2 $id 
    $idp= $_POST["idp"] ;
    $specialite = $_POST["specialite"] ;
    
   
	//création de la requête SQL:
	$sql = "UPDATE grh SET
	FILIERE     = '$specialite',
	FILIEREFR   = '$specialite'
	
	WHERE idp = '$idp'" ;
 //exécution de la requête SQL:
  $requete = mysql_query($sql) or die( mysql_error() ) ;
//affichage des résultats, pour savoir si la modification a marchée:
 
if($requete)
{
    //echo("La modification a ete correctement effectuee") ;
	header("Location: index.php?uc=SPECIALISTE") ;
}
else
{
    //echo("La modification à echouee") ;
	header("Location: index.php?uc=SPECIALISTE") ;
}
?>

