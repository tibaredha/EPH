<?php
$per ->h(2,500,180,'Sortie Patient Hémodialyse');
$per -> sautligne (2);
$per ->fieldset("field1","Donnees de l'état civil");$per ->fieldset("field5","***");
$per ->fieldset("field2","Motif sortie");
// $per ->fieldset("field3","Diagnostic");
// $per ->fieldset("field4","Qualifiquation Immuno-Hematologie-Serologie");
$per ->f0('index.php?uc=SORTHEMO1','post');
$per ->submit(1110,525,'Enregistrer Patient');
$per-> mysqlconnect();
$id  = $_GET["idp"] ;
$sql = "SELECT * FROM hemo WHERE ID = ".$id ;
$requete = mysql_query( $sql ) ; 
if( $result = mysql_fetch_object( $requete ) )
{
$per ->label(40,250,'MODIFIER PATIENT HEMODIALYSE');                 
$per ->label(370,250,'Date');                    $per ->txt(430,250,'DATE',15,date("d-m-Y"));
$per ->label(570,250,'H:');                      $per ->txt(600,250,'HEURE',4,date("H:i"));
$per ->label(740,250,'Poids');                   $per ->txt(830,250,'POIDS',10,'70');
$per ->label(40,280,'Nom');                      $per ->txt(120,280,'NOM',32,$result->NOM);
$per ->label(370,280,'Prénom');                  $per ->txt(430,280,'PRENOM',32,$result->PRENOM);
$per ->label(740,280,'Sexe');                    $per ->txt(830,280,'SEXE',10,$result->SEX);
$per ->label(40,310,'fils de');                  $per ->txt(120,310,'FILS',32,$result->FILS);
$per ->label(370,310,'et de');                   $per ->txt(430,310,'ETDE',32,$result->ETDE);
$per ->label(740,310,'Né(e) Le');                $per ->txt(830,310,'DATENAISSANCE',10,$result->DATENAISSA); 
$per ->label(40,340,'*Wilaya de naissance');     $per ->txt(180,340,'WILAYANFR',10,$result->WILAYA);   //$per ->WILAYAN(180,340,'WILAYANFR','gpts2012','wil');  
$per ->label(370,340,'*Commune de naissance');   $per ->txt(530,340,'COMMUNENFR',10,$result->COMMUNE);  //$per ->COMMUNEN(530,340,'COMMUNENFR');            
$per ->label(40,370+25,'Motif ');                $per ->combov(180,370+25,'MOTIF',array("","DECES","MUTATION")); 
$per ->label(370,370+25,'date sortie ');         $per ->txt(530,370+25,'DATESORTIE',10,date("Y-m-d"));
$per ->hide(595,90,'idp',20,$_GET["idp"]); 
}
$per ->url(790+230,250,"index.php?uc=LISTMHEMO","LISTE PATIENT HEMODIALYSE","3"); 
$per ->f1();
$per -> sautligne (17);

?>

