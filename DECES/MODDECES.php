<?php 
$per ->h(2,500,180,'Modifier Décés');
$per -> sautligne (2);
$per ->fieldset("field1","Donnees de l'état civil");$per ->fieldset("field5","***");
$per ->fieldset("field2","Adresse de residence");
$per ->fieldset("field3","Diagnostic");
$per ->fieldset("field4","Hospitalisation");
$per ->f0('index.php?uc=MODDECES1','post');
$per ->submit(1110,525,'Enregistrer Décés');
$per-> mysqlconnect();
$idp  = $_GET["idp"] ; 
$sql = "SELECT * FROM deces WHERE IDD = ".$idp ;
$requete = mysql_query( $sql ) ; 
if( $result = mysql_fetch_object( $requete ) )
{
$per ->label(40,250,'Service');                  $per ->txt(120,250,'SERVICE',15,$result->SERVICEDHO);
$per ->label(370,250,'Date');                    $per ->txt(430,250,'DATEDECES',15,$result->DATEDUDECE);
$per ->label(570,250,'H:');                      $per ->txt(600,250,'HEUREDECES',4,$result->HEURE);
$per ->label(40,280,'Nom');                      $per ->txt(120,280,'NOM',32,$result->NOM);
$per ->label(370,280,'Prénom');                  $per ->txt(430,280,'PRENOM',32,$result->PRENOM);
$per ->label(740,280,'Sexe');                    $per ->txt(800,280,'SEXE',10,$result->SEX);
$per ->label(40,310,'fils de');                  $per ->txt(120,310,'FILS',32,$result->FILS);
$per ->label(370,310,'et de');                   $per ->txt(430,310,'ETDE',32,$result->ETDE);
$per ->label(740,310,'Né(e) Le');                $per ->txt(800,310,'DATENAISSANCE',15,$result->DATENAISSA); 
$per ->label(740,340,'Age');                     $per ->txt(800,340,'AGE',15,$result->AGEA); 
$per ->label(40,340,'*Wilaya de naissance');     $per ->txt(180,340,'WILAYANFR',15,""); 
$per ->label(370,340,'*Commune de naissance');   $per ->txt(530,340,'COMMUNENFR',15,$result->LIEUNAISSA);        
$per ->label(40,370+25,'*Wilaya ');              $per ->txt(180,370+25,'WILAYAR',15,"");
$per ->label(370,370+25,'*Commune ');            $per ->txt(530,370+25,'COMMUNER',15,$result->COMMUNEDER);         
$per ->label(740,370+25,'*Adresse ');            $per ->txt(800,370+25,'ADRESSE',22,$result->NOM);
$per ->label(40,450,'Diagnostic');               $per ->txt(180,445,'DGC',62,$result->CAUSEDUDEC);
$per ->label(40,450+58,'Date Hospitalisation');  $per ->txt(180,450+58,'DATEHOSPI',15,$result->DATEHOSPIT);  
$per ->label(370,450+58,'Durée Hospitalisation');$per ->txt(530,450+58,'DUREEHOSPI',5,$result->DUREEHOSPI);
$per ->label(370+300,450+58,'Médecin');              $per ->txt(530+300,450+58,'MEDECIN',15,$result->NOMDUMEDEC); 
$per ->hide(595,90,'idp',20,$_GET["idp"]); 
}//fin if 
$per ->url(850+210,250,"index.php?uc=LISTDECES","List Des Patient décédés","3"); 
$per ->f1();
$per -> sautligne (17);
 ?>

