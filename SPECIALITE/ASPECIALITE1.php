<?php 
if
(
$_POST["specialitear"]!="" 
and $_POST["specialitefr"]!="" 
)
{
	$specialitear         = $_POST["specialitear"] ;
    $specialitefr         = $_POST["specialitefr"];
  mysql_query("SET NAMES 'UTF8' ");
  //création de la requête SQL
  $sql = "INSERT INTO specialite (specialitefr,specialitear) 
                   VALUES ('".$specialitefr."','".$specialitear."')";
  $requete = @mysql_query($sql, $cnx) or die($sql."<br>".mysql_error());
 header("Location: ./index.php?uc=ASPECIALITE2&specialitefr=$specialitefr&specialitear=$specialitear") ;
//********************************************//
}//fin if 
else
{
    
    //echo("La modification à echouee redirection ver page") ;
	header("Location: ./index.php?uc=ASPECIALITE") ;
   
}

 
?>  
