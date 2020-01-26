<?php
$per-> mysqlconnect(); 
//changement de service2 $id 
    $idspecialite= $_POST["idspecialite"] ;
    $specialitefr = $_POST["specialitefr"] ;
    $specialitear = $_POST["specialitear"] ;
   
	//création de la requête SQL:
	$sql = "UPDATE specialite SET
	specialitefr   = '$specialitefr',
	specialitear   = '$specialitear'
	
	WHERE idspecialite = '$idspecialite'" ;
 //exécution de la requête SQL:
  $requete = mysql_query($sql) or die( mysql_error() ) ;
//affichage des résultats, pour savoir si la modification a marchée:
 
if($requete)
{
    //echo("La modification a ete correctement effectuee") ;
	header("Location: index.php?uc=SPECIALITE") ;
}
else
{
    //echo("La modification à echouee") ;
	header("Location: index.php?uc=SPECIALITE") ;
}
?>

