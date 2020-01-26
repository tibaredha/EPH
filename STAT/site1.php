<?php
$per-> mysqlconnect();
$sql = " select * from tconn where pageconn='/GPTS2011/index.php'";
$requete = @mysql_query($sql) or die($sql."<br>".mysql_error());
$totalmbr=mysql_num_rows($requete);
mysql_free_result($requete);
include('site2.php'); 
 ?>

 
 