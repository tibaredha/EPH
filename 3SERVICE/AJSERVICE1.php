<?php 
    $servicear        = $_POST["servicear"];
	$servicefr        = $_POST["servicefr"];
    
  //création de la requête SQL
  $sql = "INSERT INTO SERVICE (servicear,servicefr ) VALUES ('".$servicear."','".$servicefr."')";
  //exécution de la requête SQL
  $requete = @mysql_query($sql, $cnx) or die($sql."<br>".mysql_error());
  if($requete)
{
    //echo("La modification a ete correctement effectuee") ;
	header("Location:index.php?uc=SERVICE") ;
}
else
{
    //echo("La modification à echouee") ;
	header("Location:index.php?uc=SERVICE") ;
}
 
?>  
