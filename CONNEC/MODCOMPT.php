<?php 
$per-> mysqlconnect();
$IDP=$_SESSION["USER"]; 
$per ->fieldset("field1","***");$per ->fieldset("field5","***");
$per ->h(2,150,180,'Modification Compte Utilisateur ');
$per -> sautligne (19);
$per ->f0('index.php?uc=MODCOMPT1','post','formGCS');
$per ->hide(100,100,'IDP',20,$IDP);
$per ->submit(1100,300,' modification');
$query_liste = "SELECT * FROM users where USER='$IDP' ";
$requete = mysql_query( $query_liste ) or die( "ERREUR MYSQL numéro: ".mysql_errno()."<br>Type de cette erreur: ".mysql_error()."<br>\n" );	
while( $result = mysql_fetch_array( $requete ) )
{             
$per ->label(100,270,'NOM UTILISATEUR');               $per ->txt(260,270,'USER',29,$result['USER']);
$per ->label(100,310,'MDP');                           $per ->txt(260,310,'MDP',29,$result['MDP']);
} 
$per ->f1();
?>