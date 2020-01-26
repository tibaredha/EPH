<?php
$per-> mysqlconnect();
$USER    = $_POST["USER"] ;
$MDP     = $_POST["MDP"] ;
$sql = "UPDATE users SET
	USER            = '$USER',
	MDP             = '$MDP'
	WHERE USER      = '$USER'" ;
$requete = mysql_query($sql) or die( mysql_error() ) ; 
if($requete)
{
header("Location: index.php?uc=MODCOMPT") ;
}
else
{
header("Location: index.php?uc=MODCOMPT") ;
}
?>