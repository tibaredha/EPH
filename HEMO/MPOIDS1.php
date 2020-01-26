<?php 
$per ->h(2,400,180,'Modifier  Poids Sec  Patient Hemodialyse');
$per -> sautligne (2);
$per ->fieldset("field1","Donnees de l'état civil");$per ->fieldset("field5","***");
$per ->photosx(1080,390,'POIDS',150,150);
$per ->f0('index.php?uc=MPOIDS2','post');
$per ->submit(1090,315,'Enregistrer Patient'); 
$per-> mysqlconnect();
$id  = $_GET["idp"] ;
$sql = "SELECT * FROM hemo WHERE ID = ".$id ;
$requete = mysql_query( $sql ) ; 
if( $result = mysql_fetch_object( $requete ) )
{
$per ->label(40,250,'Modifier  Poids Sec  Patient Hemodialyse');                 
$per ->label(370,250,'Date');                    $per ->txt(430,250,'DATE',15,date("d-m-Y"));
$per ->label(570,250,'H:');                      $per ->txt(600,250,'HEURE',4,date("H:i"));
$per ->label(740,250,'Poids');                   $per ->txt(830,250,'POIDS',10,$result->POIDS);
$per ->label(40,280,'Nom');                      $per ->txt(120,280,'NOM',32,$result->NOM);
$per ->label(370,280,'Prénom');                  $per ->txt(430,280,'PRENOM',32,$result->PRENOM);
$per ->label(740,280,'Sexe');                    $per ->txt(830,280,'SEXE',10,$result->SEX);
$per ->label(40,310,'fils de');                  $per ->txt(120,310,'FILS',32,$result->FILS);
$per ->label(370,310,'et de');                   $per ->txt(430,310,'ETDE',32,$result->ETDE);
$per ->label(740,310,'Né(e) Le');                $per ->txt(830,310,'DATENAISSANCE',10,$result->DATENAISSA); 
$per ->hide(595,90,'idp',20,$_GET["idp"]); 
}
$per ->url(830+212,250,"index.php?uc=LISTMHEMO&idp=".$_GET["idp"],"Suivi Du Patient Hémodialyse","3");  
//$per ->url(790+230,250,"index.php?uc=LISTMHEMO","Liste Patient Hemodialyse","3"); 
$per ->f1();
$per -> sautligne (17);
 ?>

