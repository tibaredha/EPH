<?php
 $per-> mysqlconnect(); 
    $idniveauetude= $_POST["idniveauetude"] ;
    $niveauetudefr = $_POST["niveauetudefr"] ;
    $niveauetudear = $_POST["niveauetudear"] ;
   
	//création de la requête SQL:
	$sql = "UPDATE niveauetude SET
	niveauetudefr   = '$niveauetudefr',
	niveauetudear   = '$niveauetudear'
	
	WHERE idniveauetude = '$idniveauetude'" ;
 //exécution de la requête SQL:
  $requete = mysql_query($sql) or die( mysql_error() ) ;
//affichage des résultats, pour savoir si la modification a marchée:
 
if($requete)
{
    echo("La modification a ete correctement effectuee") ;
	header("Location: index.php?uc=NIVEAUETUDE") ;
}
else
{
    echo("La modification à echouee") ;
	header("Location: index.php?uc=NIVEAUETUDE") ;
}
?>
 
