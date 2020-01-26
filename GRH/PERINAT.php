<?php
$per ->h(1,480,170,'Histoire Clinique Périnatale');
$per ->f0('./2HOSP/PARTO.php','post');
$per ->submit(1110,200,'Partogramme');
$per ->fieldset("OBS","IDENTIFICATION");$per ->fieldset("OBS1","***");$per ->fieldset("OBS2","***");$per ->fieldset("OBS3","***");$per ->fieldset("OBS4","***");$per ->fieldset("OBS5","***");
$per ->fieldset("OBS0","ATCD");$per ->fieldset("OBS01","GROSSESES ANTERIEURES");
//$per ->fieldset("field5","***");
//$per ->fieldset("field11","***");
$per-> mysqlconnect();
$id  = $_GET["idp"] ; 
$sql = "SELECT * FROM tpat WHERE idp = ".$id ;
$requete = mysql_query( $sql ) ; 
if( $result = mysql_fetch_object( $requete ) )
{
$x=250;
$per ->label(30,$x+3,'Non :');                   $per ->txt(100,$x,'NOM',20,$result->NOM);
$per ->label(270,$x+3,'Prenom :');               $per ->txt(350,$x,'PRENOM',20,$result->PRENOM);
$per ->label(30,$x+33,'Wilaya :');               $per ->txt(100,$x+30,'WILAYAR',20,$result->WILAYAR);
$per ->label(270,$x+33,'Commune :');             $per ->txt(350,$x+30,'COMMUNER',20,$result->COMMUNER);
$per ->label(30,$x+63,'Adresse');                $per ->txt(100,$x+60,'ADRESSE',62,$result->ADRESSE);
$per ->label(30,$x+93,'Téléphone');              $per ->txt(100,$x+90,'TEL',20,"");
$per ->label(552,$x+3,'Date de Naissance');      $per ->txt(565,$x+30,'DATENAISSANCE',7,$result->DATENAISSANCE);         
$per ->label(530,$x+63,'Age (années)');          $per ->txt(530,$x+90,'AGE',1,$result->AGE);         

$per ->label(530+85,$x+63,'(<15  >35)');                   
$per ->label(540+55,$x+90,'Oui');                $per ->radio(540+80,$x+90,"AGEEXT","OUI");    
$per ->label(540+100,$x+90,'Non');               $per ->radioed(540+125,$x+90,"AGEEXT","NON"); 
$per ->label(702,$x+3,'Lieu Dernier Acc');                   
$per ->label(705,$x+30,'Hopital');                $per ->radioed(770,$x+30,"LDA","HOSP");    
$per ->label(705,$x+60,'Domicil');                $per ->radio(770,$x+60,"LDA","DOMI");      
$per ->label(705,$x+90,'Autres');                 $per ->radio(770,$x+90,"LDA","AUTR"); 
$per ->label(835,$x+3,'Niveau D\'etude et instruction');                   
$per ->label(822,$x+30,'Primaire');               $per ->radioed(825+70,$x+30,"ND","PRI");    
$per ->label(822,$x+60,'Moyen');                  $per ->radio(825+70,$x+60,"ND","MOY");      
$per ->label(822,$x+90,'Secondaire');             $per ->radio(825+70,$x+90,"ND","SEC"); 
$per ->label(922,$x+30,'Universitaire');          $per ->radio(925+75,$x+30,"ND","UNIV");    
$per ->label(922,$x+60,'Aucun');                  $per ->radio(925+75,$x+60,"ND","AUCUN");      
$per ->label(925,$x+90,'Date ');                  $per ->txt(925+50,$x+90,'DATEND',1,DATE('Y'));
$per ->label(1055,$x+3,'Etat Civil');                   
$per ->label(1040,$x+30,'Mariée');                $per ->radioed(1040+70,$x+30,"EC","MAR");    
$per ->label(1040,$x+60,'Divorcé');               $per ->radio(1040+70,$x+60,"EC","DIV");      
$per ->label(1040,$x+90,'Celibataire');           $per ->radio(1040+70,$x+90,"EC","CEL"); 
$per ->label(1170,$x,'Lieu Controle Prénatal');   $per ->txt(1140,$x+22,'LCP',27,"");        
$per ->label(1180,$x+50,'Lieu Accouchement');      $per ->txt(1140,$x+70,'LAC',27,"");     



$per ->label(30,$x+140,'Familiaux ');          $per ->label(180,$x+140,'Personnels '); 
$per ->chekbox(50,$x+140+30,'FTBC');           $per ->label(100,$x+140+30,'Tuberculose ');      $per ->chekbox(200,$x+140+30,'PTBC');
$per ->chekbox(50,$x+140+60,'FDT12');          $per ->label(100,$x+140+60,'Diabete ');          $per ->chekbox(200,$x+140+60,'PDT12');
$per ->chekbox(50,$x+140+90,'FHTA');           $per ->label(100,$x+140+90,'Hypertension ');     $per ->chekbox(200,$x+140+90,'PHTA');
$per ->chekbox(50,$x+140+120,'FPECL');         $per ->label(100,$x+140+120,'Prééclampsie ');    $per ->chekbox(200,$x+140+120,'PPECL');
$per ->chekbox(50,$x+140+150,'FECL');          $per ->label(100,$x+140+150,'Eclampsie ');       $per ->chekbox(200,$x+140+150,'PECL');
$per ->chekbox(50,$x+140+180,'FAUTRES');       $per ->label(100,$x+140+180,'Autre ');           $per ->chekbox(200,$x+140+180,'PAUTRES');

$per ->label(300,$x+140+30,'Chi App Genital ');      $per ->chekbox(400,$x+140+30,'CHAPPGENI');
$per ->label(300,$x+140+60,'Infertilité ');          $per ->chekbox(400,$x+140+60,'INFER');
$per ->label(300,$x+140+90,'Cardiopathie ');         $per ->chekbox(400,$x+140+90,'CARDIO');
$per ->label(300,$x+140+120,'néphropathie ');        $per ->chekbox(400,$x+140+120,'NEPHRO');
$per ->label(300,$x+140+150,'violence ');            $per ->chekbox(400,$x+140+150,'VIOLO');
$per ->label(300,$x+140+180,'HIV ');                 $per ->chekbox(400,$x+140+180,'HIV');

$per ->label(530,$x+140,'Grosseses Anterieures '); 
$per ->label(530,$x+170,'Voie Basse Vaginale ');    $per ->txt(670,$x+170,'AVB',1,"0");
$per ->label(530,$x+200,'Voie Haute Césarienes ');  $per ->txt(670,$x+200,'AVH',1,"0");
$per ->label(730,$x+170,'Nouveaux nées ');          $per ->txt(730+110,$x+170,'NN',1,"0");
$per ->label(730,$x+200,'Morts    nées ');          $per ->txt(730+110,$x+200,'MN',1,"0");
$per ->label(930,$x+140,'ATCD jumeaux ');          
$per ->label(980+55,$x+140,'Oui');                  $per ->radio(980+80,$x+140,"GG","OUI");    
$per ->label(980+100,$x+140,'Non');                 $per ->radioed(980+125,$x+140,"GG","NON"); 
$per ->label(930,$x+170,'Enfants vivants');         $per ->txt(930+110,$x+170,'EV',1,"0");
$per ->label(930,$x+200,'Enfants decédés');         $per ->txt(930+110,$x+200,'ED',1,"0");
$per ->label(1128,$x+170,'Nombre De Gestes ');      $per ->txt(1140+145,$x+170,'NG',1,"0");
$per ->label(1128,$x+200,'Avortements Spantanes');  $per ->txt(1140+145,$x+200,'ABRT',1,"0");
$per ->label(1128,$x+140,'Grosseses extra uteine'); $per ->txt(1140+145,$x+140,'GEU',1,"0"); 

// $per ->label(530,$x+230,'Date D\'Accouchement De La Derniere Grossese '); $per ->txt(840,$x+230,'NOM',10,$result->AGE);
// $per ->label(530,$x+260,'Grossese Desirée');                              
// $per ->label(590+55,$x+260,'Oui');                  $per ->radioed(590+80,$x+260,"CD04","CN");    
// $per ->label(590+100,$x+260,'Non');                 $per ->radio(590+125,$x+260,"CD04","CV"); 

// $per ->label(530,$x+290,'Methode Contraceptive '); 
// $per ->label(530,$x+320,'Aucune ');         $per ->radioed(530+50,$x+320,"CD02","CN");                
// $per ->label(660,$x+320,'Preservatif ');    $per ->radio(660+70,$x+320,"CD02","CN");                    
// $per ->label(790,$x+320,'Sterilet ');       $per ->radio(790+50,$x+320,"CD02","CN");                
// $per ->label(900,$x+320,'Hormonale ');      $per ->radio(900+70,$x+320,"CD02","CN");                
// $per ->label(1030,$x+320,'Urgence ');        $per ->radio(1030+50,$x+320,"CD02","CN");              
// $per ->label(1160,$x+320,'Naturelles ');    $per ->radio(1160+70,$x+320,"CD02","CN");                 







$per ->hide(595,$x+90,'SERVICEHOSP',20,$result->SERVICEHOSP);
$per ->hide(595,$x+90,'HEURE',20,$result->HEURE);
$per ->hide(595,$x+90,'DATEADMISSION',20,$result->DATE);
$per ->hide(595,$x+90,'idp',20,$_GET["idp"]); 
$per ->hide(595,$x+90,'AGE',20,$result->AGE);   
//$per ->url(790+210,250,"index.php?uc=SMH&idp=".$_GET["idp"],"SUIVIE DU PATIENT HOSPITALISE","3");
}
$per ->f1();
$per -> sautligne (22);
?> 

