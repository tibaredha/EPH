<?php
$per-> mysqlconnect(); 
//changement de service2 $id 
    $idp= $_POST["idp"] ;
    $specialite = $_POST["specialite"] ;
    
   
	//cr�ation de la requ�te SQL:
	$sql = "UPDATE grh SET
	FILIERE     = '$specialite',
	FILIEREFR   = '$specialite'
	
	WHERE idp = '$idp'" ;
 //ex�cution de la requ�te SQL:
  $requete = mysql_query($sql) or die( mysql_error() ) ;
//affichage des r�sultats, pour savoir si la modification a march�e:
 
if($requete)
{
    //echo("La modification a ete correctement effectuee") ;
	header("Location: index.php?uc=SPECIALISTE") ;
}
else
{
    //echo("La modification � echouee") ;
	header("Location: index.php?uc=SPECIALISTE") ;
}
?>

