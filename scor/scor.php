<?php 
include('./SESSION/SESSION.php'); 
include('./STAT/site.php');
include('./class/class.php');
$per ->h(2,350,180,'NOUVELLE ENVENIMATION SCORPIONIQUE ');
$per -> sautligne (2);
//$per -> photos(1000,250);
$per ->f0('./scor/scor1.php','post');
$per ->submit(670,490+30,'ENREGISTRER');
// $per ->label(100,250,'Structure');               $per ->combov(260,250,'STR',array("FIXE", "MOBILE"));// $per ->datetime (670,250,'DATE');
$per ->label(500,250,'Date de l\'accident ');       $per ->txt(670,250,'DATE',6,date('d/m/Y'));$per ->label(755,250,'heure don');$per ->txt(832,250,'HDA',3,date("H:i"));
$per ->label(100,280,'*Nom');                       $per ->txt(260,280,'NOM',29,'x');
$per ->label(500,280,'*Prénom');                    $per ->txt(670,280,'PRENOM',30,'y');
$per ->label(100,310,'Sexe');                       $per ->combov(260,310,'SEXE',array("M", "F")); 
$per ->label(500,310,'*Né(e) Le (jj/mm/aaaa)');     $per ->txt(670,310,'DATENAISSANCE',30,'00/00/0000');
//combo dynamique avec ajax qui marche bien necessitan 3 fichies js.js ajax.php classe.php  
$per ->label(100,340,'*Wilaya de residence');       $per ->WILAYAR(260,340,'WILAYAR','gpts2012','wil'); 
$per ->label(500,340,'*Commune de residence');      $per ->COMMUNER(670,340,'COMMUNER');           
$per ->label(860,340,'*Adresse de residence');      $per ->txt(1010,340,'ADRESSE',29,'xy');
$per ->label(100,370,'*Wilaya de l\'accident ');    $per ->WILAYAN(260,370,'WILAYAN','gpts2012','wil');  
$per ->label(500,370,'*Commune de l\'accident ');   $per ->COMMUNEN(670,370,'COMMUNEN');            
$per ->label(860,370,'Zone de l\'accident');        $per ->combov(1010,370,'ZONE',array("rurale", "urbaine")); 
$per ->label(1093,372,'logement');                  $per ->combov(1167,370,'LOGE',array("INT", "EXT")); 
$per ->label(100,372+30,'Type d\'habitat ');        $per ->combov(260,370+30,'LOGE',array("Maison individuelle/Villa","Habitat précaire","Tente de nomade","Immeuble","Maison traditionnelle","Autres")); //BASE DE DONNEES
$per ->label(500,372+30,'scorpion_vu');             $per ->combov(670,370+30,'LOGE',array("OUI", "NON")); 
$per ->label(860,372+30,'gestes_inutiles');         $per ->combov(1010,370+30,'LOGE',array("NON","OUI")); 
$per ->label(100,372+60,'ATCD');                    $per ->combov(260,370+60,'LOGE',array("NON", "OUI")); 
$per ->label(500,372+60,'Siège');                   $per ->combov(670,370+60,'Siège',array("Tête Cou", "Tronc","Membre supérieur","Membre inférieur")); //BASE DE DONNEES
$per ->label(100,372+60+30,'classe');               $per ->combov(260,370+60+30,'classe',array("1","2","3")); 
$per ->label(500,372+60+30,'SAS');                  $per ->combov(670,370+60+30,'SAS',array("OUI", "NON")); //BASE DE DONNEES
$per ->label(860,372+60+30,'NBR AMP');              $per ->combov(1010,370+60+30,'NBRAMP',array("1","2","3","4","5","6","7","8","9","10")); //BASE DE DONNEES

$per ->label(100,372+60+30+30,'evacuation');        $per ->combov(260,370+60+60,'classe',array("NON","OUI")); 
$per ->label(500,372+60+30+30,'dateeva');           $per ->txt(670,370+60+60,'DATE',6,date('d/m/Y'));  
$per ->label(860,372+60+30+30,'classeeva');         $per ->combov(1010,370+60+60,'classeeva',array("1","2","3")); //BASE DE DONNEES









$per ->f1();
$per ->label(80,535,'(*)champ obligatoire'); 
$per -> sautligne (15);
?>




 
