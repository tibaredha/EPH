<?php
 $per-> mysqlconnect(); 
    $idniveauetude= $_POST["idniveauetude"] ;
    $niveauetudefr = $_POST["niveauetudefr"] ;
    $niveauetudear = $_POST["niveauetudear"] ;
   
	//cr�ation de la requ�te SQL:
	$sql = "UPDATE niveauetude SET
	niveauetudefr   = '$niveauetudefr',
	niveauetudear   = '$niveauetudear'
	
	WHERE idniveauetude = '$idniveauetude'" ;
 //ex�cution de la requ�te SQL:
  $requete = mysql_query($sql) or die( mysql_error() ) ;
//affichage des r�sultats, pour savoir si la modification a march�e:
 
if($requete)
{
    echo("La modification a ete correctement effectuee") ;
	header("Location: index.php?uc=NIVEAUETUDE") ;
}
else
{
    echo("La modification � echouee") ;
	header("Location: index.php?uc=NIVEAUETUDE") ;
}
?>
 
