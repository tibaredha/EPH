<?php
$ids  = $_GET["ids"] ; 
$per-> mysqlconnect();
$sql = "DELETE FROM lit WHERE  idservice =$ids ";
$requete = @mysql_query($sql) or die($sql."<br>".mysql_error());  	
header("Location: ./index.php?uc=SERVICE") ;
?>