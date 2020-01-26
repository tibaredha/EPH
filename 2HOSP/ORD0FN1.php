<?php

//**********************************************************//
           //
$DATE=$_POST["DATE"];            //
$MED1=$_POST["MED1"];            //
$QUT1=$_POST["QUT1"];            //
$idp=$_POST["idp"];            //
$USER=$_SESSION["USER"] ; 
$per-> mysqlconnect();  
$sql = "INSERT INTO medfn
(DATE,MED1,QUT1,idp,USER) 
VALUES 
('".$DATE."','".$MED1."','".$QUT1."','".$idp."','".$USER."')";
$requete = @mysql_query($sql) or die($sql."<br>".mysql_error());
header("Location: index.php?uc=ORDFN&idp=$idp") ;
?>


