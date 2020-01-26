<?php 	
	$idp               = $_POST["idp"] ;
	$Nomarab           = $_POST["NOM"] ;
	$Prenom_Arabe      = $_POST["PRENOM"] ;
	$Sexe              = $_POST["idp"] ;
	$datecessation     = $_POST["datecessation"] ;//
	$motifcessation    = $_POST["motifcessation"] ;
	$cessation         ="y";
	$per-> mysqlconnect(); 
	$sql = "UPDATE grh SET
    Date_Cessation     = '$datecessation  ', 
	Motif_Cessation    = '$motifcessation ',
	cessation          = '$cessation'	
	WHERE idp ='$idp'" ;
  $requete = mysql_query($sql) or die( mysql_error() ) ; 
if($requete)
{
header("Location: index.php?uc=LGRHP&idp=$idp&Nomlatin=$Nomarab&Prenom_Latin=$Prenom_Arabe&Sexe=$Sexe") ;
}
else
{
header("Location: index.php?uc=LGRHP&idp=$idp&Nomlatin=$Nomarab&Prenom_Latin=$Prenom_Arabe&Sexe=$Sexe") ;
}
?>
