<?php
  $idp=$_GET["idp"];
  $db_host="localhost";
  $db_name="grh"; 
  $db_user="root";
  $db_pass="";
  $cnx = mysql_connect($db_host,$db_user,$db_pass)or die ('I cannot connect to the database because: ' . mysql_error());
  $db  = mysql_select_db($db_name,$cnx) ;
  mysql_query("SET NAMES 'UTF8' ");
  $ETAO ="0";
  $sql = "UPDATE grh SET POSTESUP ='$ETAO' WHERE idp = '$idp'" ;
  $requete = mysql_query($sql, $cnx) or die( mysql_error() ) ;
  
  
  
  header("Location: ./index.php?uc=POSTESUPGRH") ;
  mysql_free_result($requete);
  
?>

