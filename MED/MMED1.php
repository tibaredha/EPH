<?php
//changement de service2 $id 
    $ID            = $_POST["ID"];
    $code          = $_POST["code"];
    $dci           = $_POST["dci"];
    $pre           = $_POST["pre"];
    $prix          = $_POST["prix"];
    
 $per-> mysqlconnect();   
    
	//cr�ation de la requ�te SQL:
	$sql = "UPDATE T21 SET
	code            = '$code' ,
	dci             = '$dci'  ,
	pre             = '$pre'  ,
	prix            = '$prix' 
	WHERE ID        = '$ID'
	" ;
 //ex�cution de la requ�te SQL:
  $requete = mysql_query($sql) or die( mysql_error() ) ;
//affichage des r�sultats, pour savoir si la modification a march�e:
 
if($requete)
{
    //echo("La modification a ete correctement effectuee") ;
	header("Location: index.php?uc=LMED") ;
}
else
{
    //echo("La modification � echouee") ;
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
