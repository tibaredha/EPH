<?php
//changement de service2 $id 
    $ID            = $_POST["ID"];
    $code          = $_POST["code"];
    $dci           = $_POST["dci"];
    // $pre           = $_POST["pre"];
    // $prix          = $_POST["prix"];
    
 $per-> mysqlconnect();   
    
	//cr�ation de la requ�te SQL:
	$sql = "UPDATE CIM SET
	diag_cod        = '$code' ,
	diag_nom        = '$dci'   
	WHERE row_id    = '$ID'
	" ;
 //ex�cution de la requ�te SQL:
  $requete = mysql_query($sql) or die( mysql_error() ) ;
//affichage des r�sultats, pour savoir si la modification a march�e:
 
if($requete)
{
    //echo("La modification a ete correctement effectuee") ;
	header("Location: index.php?uc=LCIM") ;
}
else
{
    //echo("La modification � echouee") ;
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
