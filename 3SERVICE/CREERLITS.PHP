<?php
$ids  = $_GET["ids"] ; 
$NBRLIT  = $_GET["NBRLIT"] ; 
$idpt="0";
$per-> mysqlconnect();
for ($idp=1; $idp<=$NBRLIT; $idp++) 
{
$sql = "INSERT INTO lit ( idservice,nlit,idpt) VALUES ('".$ids."','".$idp."','".$idpt."')";
$requete = @mysql_query($sql) or die($sql."<br>".mysql_error());  	
}
header("Location: ./index.php?uc=SERVICE") ;
?>