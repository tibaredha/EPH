<?php
$per->mysqlconnect();
$IDP=$_POST["idp"];
$CATEGORIECIM=$_POST["CATEGORIECIM"]; 
$sql = "UPDATE tpat SET 
CODCIM    = '$CATEGORIECIM '
WHERE IDP    = '$IDP' " ;

$requete = mysql_query($sql) or die( mysql_error() ) ;
	if($requete)
	{
	header("Location:index.php?uc=LISTMHOSP") ;
	}
	else
	{
	header("Location:index.php?uc=SMH") ; 
	}



?>


