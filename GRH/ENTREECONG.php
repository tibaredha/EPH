<?php
$per-> mysqlconnect();
$datejour1=date("Y/m/d");
$query_liste = "SELECT * FROM regcong where  ok ='' and dateent <= '$datejour1' and cause='مرضية' or cause='امومة' order by datesor";
$requete = mysql_query( $query_liste ) or die( "ERREUR MYSQL num곯: ".mysql_errno()."<br>Type de cette erreur: ".mysql_error()."<br>\n" );
$totalmbr1=mysql_num_rows($requete);
$per -> sautligne (3);//fin if
$per->regcongete($datejour1);
$per ->h(1,440,170,'الدخول من العطل ليوم '.$datejour1." وعددهم ".$totalmbr1);
?>

