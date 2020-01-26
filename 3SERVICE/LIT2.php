<?php
$SERVICE=$_POST["SERVICE"];            
$NLIT=$_POST["NLIT"];                  
$per-> mysqlconnect();
$sql = "INSERT INTO lit( idservice,nlit) VALUES ('".$SERVICE."','".$NLIT."')";
$requete = @mysql_query($sql) or die($sql."<br>".mysql_error());
//*********************************************************//
if($_POST["SERVICE"] !== "0" )
{
header("Location: index.php?uc=LIT1") ;
}
else
{
header("Location: index.php?uc=LIT1") ;
}




  





 





?>


