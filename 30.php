<?php
//REMISE DE LA COLONE AVNW UNE VALEUR BIEN DETERMINE
 $db_host="localhost";
 $db_name="grh"; 
 $db_user="root";
 $db_pass="";
 $cnx = mysql_connect($db_host,$db_user,$db_pass)or die ('I cannot connect to the database because: ' . mysql_error());
 $db  = mysql_select_db($db_name,$cnx) ;
 $query_liste = "SELECT ID FROM hemo order by ID desc limit 1";
 $requete = mysql_query( $query_liste, $cnx ) or die( "ERREUR MYSQL num곯: ".mysql_errno()."<br>Type de cette erreur: ".mysql_error()."<br>\n" );
 $result = mysql_fetch_array( $requete ) ;
 $x=$result["ID"];

 for ($idp=0; $idp<=$x; $idp++) 
{
$query_liste = "SELECT ID,DATENAISSA,DATE1ERSEA FROM hemo  where  ID	 ='$idp' ";
$requete = mysql_query( $query_liste, $cnx ) or die( "ERREUR MYSQL num곯: ".mysql_errno()."<br>Type de cette erreur: ".mysql_error()."<br>\n" );
$result = mysql_fetch_array( $requete ) ;
$AGE1SEANCE=substr($result["DATE1ERSEA"],0,4)-substr($result["DATENAISSA"],0,4);  
$sql = "UPDATE hemo SET AGE1SEANCE = '$AGE1SEANCE' where ID = '$idp' " ;    
$requete = mysql_query($sql, $cnx) or die( mysql_error() );		
}

header("Location: ./index.php") ;

?>