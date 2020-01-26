<?php
//changement de service2 $id 
    $ID            = $_POST["ID"];
    $code          = $_POST["code"];
    $dci           = $_POST["dci"];
    // $pre           = $_POST["pre"];
    // $prix          = $_POST["prix"];
    
 $per-> mysqlconnect();   
    
	//création de la requête SQL:
	$sql = "UPDATE CIM SET
	diag_cod        = '$code' ,
	diag_nom        = '$dci'   
	WHERE row_id    = '$ID'
	" ;
 //exécution de la requête SQL:
  $requete = mysql_query($sql) or die( mysql_error() ) ;
//affichage des résultats, pour savoir si la modification a marchée:
 
if($requete)
{
    //echo("La modification a ete correctement effectuee") ;
	header("Location: index.php?uc=LCIM") ;
}
else
{
    //echo("La modification à echouee") ;
    header("Location: index.php?uc=LCIM") ;

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
