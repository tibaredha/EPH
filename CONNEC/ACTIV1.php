<?php 
$per-> mysqlconnect();
$IDP= $_POST["IDP"] ;
$OK='1';
$sql = "UPDATE users SET
	ADMIN        = '$OK'
	WHERE IDP    = '$IDP'" ;
$requete = mysql_query($sql) or die( mysql_error() ) ; 
if($requete)
{
    //echo("La modification a ete correctement effectuee") ;
	header("Location: index.php?uc=MBRINS") ;
}
else
{
    //echo("La modification à echouee") ;
	header("Location: index.php?uc=MBRINS") ;
}
?>