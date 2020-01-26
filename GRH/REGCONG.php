<?php
//$query_liste = "SELECT COUNT(IDDNR) as nbr,NOMDNR,PRENOMDNR,IND,idon,IDDNR,str FROM tdon    GROUP BY IDDNR HAVING COUNT( IDDNR ) >1   order by nbr desc ";

$per-> mysqlconnect();
$query_liste = "SELECT * FROM regcong order by datesor";
$requete = mysql_query( $query_liste ) or die( "ERREUR MYSQL num곯: ".mysql_errno()."<br>Type de cette erreur: ".mysql_error()."<br>\n" );
$totalmbr1=mysql_num_rows($requete);
$per -> sautligne (3);//fin if
$per->regconget();
$per ->h(1,580,170,'سجل العطل  وعددهم '.$totalmbr1);



?>

