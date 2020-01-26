<?php
//changement de service2 $id 
    $ID            = $_POST["ID"];
    $code          = $_POST["code"];
    $dci           = $_POST["dci"];
    $pre           = $_POST["pre"];
    $prix          = $_POST["prix"];
    
 $per-> mysqlconnect();   
    
	//création de la requête SQL:
	$sql = "UPDATE T21 SET
	code            = '$code' ,
	dci             = '$dci'  ,
	pre             = '$pre'  ,
	prix            = '$prix' 
	WHERE ID        = '$ID'
	" ;
 //exécution de la requête SQL:
  $requete = mysql_query($sql) or die( mysql_error() ) ;
//affichage des résultats, pour savoir si la modification a marchée:
 
if($requete)
{
    //echo("La modification a ete correctement effectuee") ;
	header("Location: index.php?uc=LMED") ;
}
else
{
    //echo("La modification à echouee") ;
    header("Location: index.php?uc=LMED") ;

}
?>
<br> 
 <br> 
 <br> 
 <br> 
 <br> 
 <br> 
 <br> 
 <br> 
 <br> 
 <br> 
 <br> 
 <br> 
 <br> 
 <br> 
