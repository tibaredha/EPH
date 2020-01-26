<?php 
$per-> mysqlconnect();  
$id  = $_GET["idregcong"] ;
$idp  = $_GET["idp"] ;
$sql = "DELETE FROM regcong WHERE idregcong =$id  and idp=$idp " ;
$requete = mysql_query( $sql ) ;
if($requete)
{
$per-> mysqlconnect();
$dif=$_GET["duree"]+$_GET["STOCK"];
$sql = "UPDATE grh SET  QUT = '$dif' WHERE idp = $idp " ; 
$requete = @mysql_query($sql) or die($sql."<br>".mysql_error());
header("Location: index.php?uc=FC&idp=$idp") ;
}
else
{
header("Location: index.php?uc=FC&idp=$idp") ;
}
  
 ?> 