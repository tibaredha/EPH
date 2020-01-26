<?php
$idp = $_POST["idp"] ;                   
$NLIT=$_POST["NLIT"];  
$MEDECIN=$_SESSION["USER"] ; 
$per-> mysqlconnect();   
$sql = "UPDATE hemo SET 
NLIT ='$NLIT'
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

