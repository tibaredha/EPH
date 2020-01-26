<?php 
$per ->h(2,450,170,'MORSURES');
$per ->f0('./2HOSP/MORS1.php','post');
$per ->submit(1050,525,'MORSURES');
$per ->fieldset("field1","***");$per ->fieldset("field5","***");
$per ->fieldset("field11","***");
$per-> mysqlconnect();
$id  = $_GET["idp"] ; 
$sql = "SELECT * FROM tpat WHERE idp = ".$id ;
$requete = mysql_query( $sql) ; 
if( $result = mysql_fetch_object( $requete ) )
{
$per ->label(30,250,'Date de l\'accident ');       $per ->txt(180,250,'DATE',6,date('d/m/Y'));
$per ->label(360,250,'heure don');                 $per ->txt(510,250,'HDA',3,date("H:i"));
$per ->label(30,280,'*Nom');                       $per ->txt(180,280,'NOM',22,$result->NOM);$per ->label(360+400,310-30,'POIDS');    $per ->txt(510+300,310-30,'POIDS',5,'70');
$per ->label(360,280,'*Prénom');                   $per ->txt(510,280,'PRENOM',30,$result->PRENOM);
$per ->label(30,310,'Sexe');                       $per ->txt(180,310,'SEXE',10,$result->SEXE);
$per ->label(360,310,'*Né(e) Le (jj/mm/aaaa)');    $per ->txt(510,310,'DATENAISSANCE',30,$result->DATENAISSANCE);$per ->label(360+400,310,'AGE');    $per ->txt(510+300,310,'AGES',5,'35');
//combo dynamique avec ajax qui marche bien necessitan 3 fichies js.js ajax.php classe.php  
$per ->label(30,340,'*Wilaya de residence');       $per ->txt(180,340,'WILAYAR',15,$result->SEXE);
$per ->label(360,340,'*Commune de residence');     $per ->txt(510,340,'COMMUNER',15,$result->SEXE);         
$per ->label(660,340,'*Adresse de residence');     $per ->txt(800,340,'ADRESSE',15,$result->SEXE);

echo "<select name=\"TV\" >";
echo "<option value=\"1\" >VACCINATION  SOURICEAU</option>";
echo "<option value=\"2\" >SERO-VACCINATION SOURICEAU</option>";
echo "<option value=\"3\" >VACCINATION CELLULAIRE</option>";
echo " <option value=\"4\" >SERO-VACCINATION CELLULAIRE</option>";
echo "<option>-------------------------------------</option>";
echo "</select>";


	       
          
		  
		  
		 
          
        



// $x=390;
// $per ->label(30,$x,'*SHEMA ANTI RABIQUE ');        $per ->txt(180,$x,'WILAYAN',15,$result->SEXE);
// $per ->label(360,$x,'*Commune de l\'accident ');   $per ->txt(510,$x,'COMMUNEN',15,$result->SEXE);           
// $per ->label(650,$x,'Zone de l\'accident');        $per ->combov(770,$x,'ZONE',array("rurale", "urbaine")); 
// $per ->label(850,$x,'logement');                   $per ->combov(910,$x,'LOGE',array("INT", "EXT")); 
// $y=372+50;
// $per ->label(30,$y,'Type d\'habitat ');            $per ->combov(180,$y,'LOGE',array("Maison individuelle/Villa","Habitat précaire","Tente de nomade","Immeuble","Maison traditionnelle","Autres")); //BASE DE DONNEES
// $per ->label(360,$y,'scorpion_vu');                $per ->combov(510,$y,'LOGE',array("OUI", "NON")); 
// $per ->label(650,$y,'gestes_inutiles');            $per ->combov(770,$y,'LOGE',array("NON","OUI")); 
// $z=372+80; 
// $per ->label(30,$z,'ATCD');                        $per ->combov(180,$z,'LOGE',array("NON", "OUI")); 
// $per ->label(360,$z,'Siège');                      $per ->combov(510,$z,'Siège',array("Tête Cou", "Tronc","Membre supérieur","Membre inférieur")); 
// $a=372+110;
// $per ->label(30,$a,'classe');                      $per ->combov(180,$a,'classe',array("1","2","3")); 
// $per ->label(360,$a,'SAS');                        $per ->combov(510,$a,'SAS',array("OUI", "NON")); 
// $per ->label(660,$a,'NBR AMP');                    $per ->combov(770,$a,'NBRAMP',array("1","2","3","4","5","6","7","8","9","10")); 
// $b=372+140;
// $per ->label(30,$b,'evacuation');                  $per ->combov(180,$b,'classe',array("NON","OUI")); 
// $per ->label(360,$b,'dateeva');                    $per ->txt(510,$b,'DATE',6,date('d/m/Y'));  
// $per ->label(660,$b,'classeeva');                  $per ->combov(770,$b,'classeeva',array("1","2","3")); 
$per ->url(790+220,250,"index.php?uc=SMH&idp=".$_GET["idp"],"SUIVIE DU PATIENT HOSPITALISE","3");  
}
$per ->f1();
$per -> sautligne (20);

?>

    
     
	    



 
