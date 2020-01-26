<?php
$per-> mysqlconnect();
 $query_liste = "SELECT idp,cessation,QUT FROM grh order by idp desc limit 1";
 $requete = mysql_query( $query_liste ) or die( "ERREUR MYSQL num곯: ".mysql_errno()."<br>Type de cette erreur: ".mysql_error()."<br>\n" );
 $result = mysql_fetch_array( $requete ) ;
 $x=$result["idp"];
for ($idp=0; $idp<=$x; $idp++) 
{
$query_liste = "SELECT idp,cessation,QUT FROM grh  where cessation !='y' and idp ='$idp' ";
$requete = mysql_query( $query_liste ) or die( "ERREUR MYSQL num곯: ".mysql_errno()."<br>Type de cette erreur: ".mysql_error()."<br>\n" );
$result = mysql_fetch_array( $requete ) ;
$CGRAP=$result["QUT"];
$QUT1=$CGRAP+30;
//$QUT1=0;
$sql = "UPDATE grh SET QUT = '$QUT1' where idp = '$idp' " ;    
$requete = mysql_query($sql) or die( mysql_error() );		
}

header("Location: ./index.php?uc=RELIQUAT") ;

?>