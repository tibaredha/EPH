<?php
$per-> mysqlconnect();
$query_liste = "SELECT * FROM regcong order by datesor";
$requete = mysql_query( $query_liste ) or die( "ERREUR MYSQL num곯: ".mysql_errno()."<br>Type de cette erreur: ".mysql_error()."<br>\n" );
$totalmbr1=mysql_num_rows($requete);
$per -> sautligne (3);//fin if
// $per->regconget();
$per->congeparper();
$per ->h(1,500,170,'عدد رخص العطل حسب كل مستخدم ');



?>

