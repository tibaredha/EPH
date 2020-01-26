<?php
//fichier doit etre present dans chaque page qui entre dans le procesus de contabilisation statistique 
$date_courante = date( "d-m-y h:i:s");
if ($_SERVER['QUERY_STRING'] == "")
{
$page_courante= $_SERVER['PHP_SELF'];
}
else
{
$page_courante=$_SERVER['PHP_SELF'];
}
if ( ISSET ($_SERVER['HTTP_x_forwarded_for']))
{
$ip=$_SERVER['HTTP_x_forwarded_for'];
}
elseif ( ISSET ($_SERVER['HTTP_client_ip']))
{
$ip=$_SERVER['HTTP_client_ip'];
}
else 
{
$ip=$_SERVER['REMOTE_ADDR'];
}
$per-> mysqlconnect();
$sql = "INSERT INTO tconn ( dateconn ,ip,pageconn) VALUES ('".$date_courante."', '".$ip."','".$page_courante."')";
$requete = @mysql_query($sql) or die($sql."<br>".mysql_error());

 ?>