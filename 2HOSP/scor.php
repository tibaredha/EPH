<?php 

$id  = $_GET["idp"] ; 

$per ->h(2,450,170,'Envenimation Scorpionique');
$per ->f0('./scor/scor1.php','post');
$per ->fieldset("field1","***");$per ->fieldset("field5","***");
$per ->fieldset("field11","***");$per ->photosx(1080,390,'dialyse',150,150);
$per-> mysqlconnect();$per ->submit(1050,315,'Enregistré Envenimation Scorpionique');
$id  = $_GET["idp"] ; 
$sql = "SELECT * FROM tpat WHERE idp = ".$id ;
$requete = mysql_query( $sql) ; 
if( $result = mysql_fetch_object( $requete ) )
{
$per ->label(30,250,'Date de l\'accident ');       $per ->txt(180,250,'DATE',6,date('d/m/Y'));
$per ->label(360+20,250,'Heure Piqure');           $per ->txt(510+20,250,'HDA',3,date("H:i"));
$per ->label(30,280,'Nom');                        $per ->txt(180,280,'NOM',22,$result->NOM);
$per ->label(360+20,280,'Prénom');                 $per ->txt(510+20,280,'PRENOM',30,$result->PRENOM);
$per ->label(30,310,'Sexe');                       $per ->txt(180,310,'SEXE',10,$result->SEXE);
$per ->label(360+20,310,'Né(e) Le (aaaa/mm/jj)'); $per ->txt(510+20,310,'DATENAISSANCE',30,$result->DATENAISSANCE);
//combo dynamique avec ajax qui marche bien necessitan 3 fichies js.js ajax.php classe.php  
$per ->label(30,340,'Wilaya de residence');        $per ->txt(180,340,'WILAYAR',15,$result->WILAYAR);
$per ->label(360+20,340,'Commune de residence');   $per ->txt(510+20,340,'COMMUNER',15,$result->COMMUNER);         
$per ->label(660+40,340,'Adresse de residence');   $per ->txt(800+40,340,'ADRESSE',15,$result->ADRESSE);
$x=390;
$per ->label(30,$x,'Wilaya de l\'accident ');    $per ->WILAYAN(180,$x,'WILAYAN','gpts2012','wil');  
$per ->label(360,$x,'Commune de l\'accident ');  $per ->COMMUNEN(510,$x,'COMMUNEN'); 
$per ->label(660+40,$x,'Zone de l\'accident');   $per ->combov(800+40,$x,'ZONE',array("rurale", "urbaine")); 
$y=372+50;
$per ->label(30,$y,'Logement');                   $per ->combov(180,$y,'INTEXT',array("INT", "EXT")); 
$per ->label(360,$y,'Type d\'habitat ');          $per ->combov(510,$y,'TYPEHABITA',array("Maison individuelle/Villa","Habitat précaire","Tente de nomade","Immeuble","Maison traditionnelle","Autres")); //BASE DE DONNEES
$per ->label(660+40,$y,'Scorpion_vu');            $per ->combov(800+55,$y,'SCORVU',array("OUI", "NON")); 
$z=372+80; 
$per ->label(30,$z,'Gestes_inutiles');            $per ->combov(180,$z,'GINUT',array("NON","OUI")); 
$per ->label(360,$z,'ATCD');                      $per ->combov(510,$z,'ATCD',array("NON", "OUI")); 
$per ->label(660+40,$z,'Siège');                  $per ->combov(780,$z,'SIEGE',array("Tête Cou", "Tronc","Membre supérieur","Membre inférieur")); 
$a=372+110;
$per ->label(30,$a,'Classe');                      $per ->combov(180,$a,'CLASSE',array("1","2","3")); 
$per ->label(360,$a,'SAS');                        $per ->combov(510,$a,'SAS',array("OUI", "NON")); 
$per ->label(660+40,$a,'Nbr AMP');                 $per ->combov(870,$a,'NBRAMP',array("1","2","3","4","5","6","7","8","9","10")); 
$b=372+140;
$per ->label(30,$b,'Evacuation');                  $per ->combov(180,$b,'EVACUATION',array("NON","OUI")); 
$per ->label(360,$b,'Date Evacuation');            $per ->txt(510,$b,'DATEEVACUATION',6,date('d/m/Y'));  
$per ->label(660+40,$b,'classe Evacuation');       $per ->combov(876,$b,'CLASSEEVA',array("2","3")); 




$per ->hide(595,90,'idp',20,$_GET["idp"]); 
$per ->url(840+220,250,"index.php?uc=SMH&idp=".$_GET["idp"],"Suivi Du Patient Hospitalise","3");  
}
$per ->f1();
$per -> sautligne (20);

?>




 
