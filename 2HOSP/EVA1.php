<?php
$per ->h(1,40,170,'Evacuation  Du Malade  : '.'   '.$per->nbrtostring("grh","tpat","IDP",$_GET['idp'],"NOM")."_".$per->nbrtostring("grh","tpat","IDP",$_GET['idp'],"PRENOM"));
$per ->f0('./2HOSP/EVA.php','post');
$per ->fieldset("field1","***");$per ->fieldset("field5","***");
$per ->fieldset("field11","***");
$per ->photosx(1080,390,'AMB',150,150);
$per ->submit(1080,312,'Evacuation  Du Malade');
$per-> mysqlconnect();
$id  = $_GET["idp"] ; 
$sql = "SELECT * FROM tpat WHERE idp = ".$id ;
$requete = mysql_query( $sql ) ; 
if( $result = mysql_fetch_object( $requete ) )
{
$x=250;
$per ->label(50,$x,'Non :');                   $per ->txt(120,$x,'NOM',20,$result->NOM);
$per ->label(350,$x,'Prenom :');               $per ->txt(470-40,$x,'PRENOM',20,$result->PRENOM);
$per ->label(50,$x+30,'Date :');               $per ->txt(120,$x+30,'DATE',20,date("Y-m-d"));
$per ->label(350,$x+30,'Heure :');             $per ->txt(470-40,$x+30,'HEUR',20,date("H:i"));
$per ->label(50,$x+60,'Diagnostic');           $per ->txt(120,$x+60,'GRADE',72,$result->DGC);
$per ->label(50,$x+90,'Entree le');            $per ->txt(120,$x+90,'DUREE',20,$result->DATE);
$per ->label(350,$x+90,'Service');             $per ->txt(470-40,$x+90,'DUREE',20,$per->nbrtostring("grh","service","ids",$result->SERVICEHOSP,"servicefr"));
$per ->label(50,$x+90+50,'Caise de sécurité'); $per ->combov(200,$x+90+50,'1',array("SAA","CAAR","CAAT","AA")); //                    
$per ->label(50,$x+90+50+30,'N° d\'immatriculation');          $per ->txt(200,$x+90+50+30,'2',20,'0');




$per ->label(390,$x+90+50,'Renseingnement cliniques');         $per ->txt(600,$x+90+50,'3',40,'X');
$per ->label(390,$x+90+50+30,'Préstation dispensées');         $per ->txt(600,$x+90+50+30,'4',40,'Avis Et Prise En Charge');
$per ->label(390,$x+90+50+60,'Motif d\'évacuation');           $per ->combov(600,$x+90+50+60,'5',array("Manque De Specialite","Manque De Materiel","Manque De Place"));
$per ->label(390,$x+90+50+90,'l\'établissement d\'acceuil');   $per ->txt(600,$x+90+50+90,'6',40,'X');
$per ->label(390,$x+90+50+90+30,'accompagnateurs ');       $per ->txt(600,$x+90+50+90+30,'7',40,'Paramedical De Garde');

$per ->hide(595,$x+90,'NOM',20,$result->NOM);
$per ->hide(595,$x+90,'PRENOM',20,$result->PRENOM);
$per ->hide(595,$x+90,'DATENAISSANCE',20,$result->DATENAISSANCE);
$per ->hide(595,$x+90,'AGE',20,$result->AGE);
$per ->hide(595,$x+90,'FILS',20,$result->FILS);
$per ->hide(595,$x+90,'ETDE',20,$result->ETDE);
$per ->hide(595,$x+90,'COMMUNE',20,$result->COMMUNE);
$per ->hide(595,$x+90,'WILAYA',20,$result->WILAYA);
$per ->hide(595,$x+90,'COMMUNER',20,$result->COMMUNER);
$per ->hide(595,$x+90,'WILAYAR',20,$result->WILAYAR);
$per ->hide(595,$x+90,'ADRESSE',20,$result->ADRESSE);
$per ->hide(595,$x+90,'SEXE',20,$result->SEXE);
$per ->hide(595,$x+90,'SERVICEHOSP',20,$result->SERVICEHOSP);
$per ->hide(595,$x+90,'PRATICIEN',20,$result->PRATICIEN);
$per ->hide(595,$x+90,'DATE',20,$result->DATE);
$per ->hide(595,$x+90,'HEURE',20,$result->HEURE);
$per ->hide(595,$x+90,'id',20,$id);


$per ->url(790+270,250,"index.php?uc=SMH&idp=".$_GET["idp"],"Suivi Du Patient Hospitalise","3");  

}
$per ->f1();
$per -> sautligne (20);

 
?>



 
 



	
	

  
