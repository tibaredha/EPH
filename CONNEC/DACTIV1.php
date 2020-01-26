<?php 
$per-> mysqlconnect();
$IDP= $_POST["IDP"] ;
$OK='0';
$sql = "UPDATE users SET
	ADMIN        = '$OK'
	WHERE IDP    = '$IDP'" ;
$requete = mysql_query($sql) or die( mysql_error() ) ; 
if($requete)
{
header("Location: index.php?uc=MBRINS") ;
}
else
{
header("Location: index.php?uc=MBRINS") ;
}
?>