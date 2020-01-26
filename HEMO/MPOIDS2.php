<?php
$idp = $_POST["idp"] ;                   
$POIDS=$_POST["POIDS"];  
$MEDECIN=$_SESSION["USER"] ; 
$per-> mysqlconnect();   
$sql = "UPDATE hemo SET 
POIDS ='$POIDS'
WHERE ID = '$idp'" ;
$requete = mysql_query($sql) or die( mysql_error() ) ;
if($requete)
{
header("Location: index.php?uc=LISTMHEMO") ;
}
else
{
header("Location: index.php?uc=LISTMHEMO") ;
}
?>

