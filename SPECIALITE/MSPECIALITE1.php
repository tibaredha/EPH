<?php
$per-> mysqlconnect(); 
//changement de service2 $id 
    $idspecialite= $_POST["idspecialite"] ;
    $specialitefr = $_POST["specialitefr"] ;
    $specialitear = $_POST["specialitear"] ;
   
	//cr�ation de la requ�te SQL:
	$sql = "UPDATE specialite SET
	specialitefr   = '$specialitefr',
	specialitear   = '$specialitear'
	
	WHERE idspecialite = '$idspecialite'" ;
 //ex�cution de la requ�te SQL:
  $requete = mysql_query($sql) or die( mysql_error() ) ;
//affichage des r�sultats, pour savoir si la modification a march�e:
 
if($requete)
{
    //echo("La modification a ete correctement effectuee") ;
	header("Location: index.php?uc=SPECIALITE") ;
}
else
{
    //echo("La modification � echouee") ;
	header("Location: index.php?uc=SPECIALITE") ;
}
?>

