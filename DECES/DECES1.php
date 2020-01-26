<?php 
$per ->h(2,500,180,'Nouveau Décés');
$per -> sautligne (2);
$per ->fieldset("field1","Donnees de l'état civil");$per ->fieldset("field5","***");
$per ->fieldset("field2","Adresse de residence");
$per ->fieldset("field3","Diagnostic");
$per ->fieldset("field44","CIM10");
$per ->f0('index.php?uc=DECES2','post');
$per ->submit(1100,310,'Enregistrer Décés');
//$per ->combov(120,250,'SERVICE',array("UMC","MEDECINE HOMME","MEDECINE FEMME","CHIRURGIE HOMME","CHIRURGIE FEMME","GYNECO","MATERNITE","PEDIATRIE"));  //ancien service
$per ->label(40,250,'Service');                  $per ->combov(120,250,'SERVICE',array("PUMC","M HOMME","M FEMME","C HOMME","C FEMME","PEDIATRIE","HEMODIALYS","GYNECO","MATERNITE","BLOC"));  
$per ->label(370,250,'Date Deces ');             $per ->txt(450,250,'DATEDECES',10,date("Y-m-d"));
$per ->label(565,250,'Heure:');                      $per ->txt(618,250,'HEUREDECES',4,date("H:i"));

$per ->label(700+40,250,'Date Hospitalisation'); $per ->txt(830+65,250,'DATEHOSPI',6,date("Y-m-d"));  
$per ->label(40,280,'Nom');                      $per ->txt(120,280,'NOM',32,'X');
$per ->label(370,280,'Prénom');                  $per ->txt(450,280,'PRENOM',32,'X');
$per ->label(40,310,'fils de');                  $per ->txt(120,310,'FILS',32,'X');
$per ->label(370,310,'et de');                   $per ->txt(450,310,'ETDE',32,'X');

$per ->label(700+40,280,'Sexe');                 $per ->combov(830+65,280,'SEXE',array("M", "F")); 

$per ->label(700+40,310,'Date Naissance');       $per ->txt(830+65,310,'DATENAISSANCE',6,date("Y-m-d")); //$per ->datetime (800,310,'DATENAISSANCE');  //$per ->txtme(800,310,"DATENAISSANCE",20,"")	;//// masque avec jquery

$per ->label(700+40,340,'*Matricule');           $per ->txt(830+65,340,'MATRICULE',6,date("y")."_00_"); //$per ->datetime (800,310,'DATENAISSANCE');  //$per ->txtme(800,310,"DATENAISSANCE",20,"")	;//// masque avec jquery



$per ->label(40,340,'*Wilaya ');                  $per ->WILAYAN(120,340,'WILAYANFR','gpts2012','wil');  
$per ->label(370,340,'Commune ');                 $per ->COMMUNEN(450,340,'COMMUNENFR');            
$per ->label(40,370+25,'*Wilaya ');               $per ->WILAYAR(120,370+25,'WILAYAR','gpts2012','wil'); 
$per ->label(370,370+25,'Commune ');              $per ->COMMUNER(450,370+25,'COMMUNER');           
$per ->label(740,370+25,'*Adresse ');             $per ->txt(800,370+25,'ADRESSE',22,'X');
$per ->label(40,450,'*Diagnostic');               $per ->txt(120,445,'DGC',62,'X');
$per ->label(640,450,'*Médecin');                 $per ->MEDECIN(740,450,'MEDECIN',"grh","","","0","") ;
$per ->label(40,505,'*Chapitre');                 $per ->CHAPITRE(180,500,'CHAPITRE','grh','CHAPITRE');  
$per ->label(40,530,'*Sous-Categorie');           $per ->CATEGORIECIM(180,530,'CATEGORIECIM');
// $per ->comboservice(470,450+58,"SERVICE","grh","service","SERVICE","SERVICE","ids","servicefr") ;
//$per ->combov(800-240,445,'SERVICE',array("0","UMC","MEDECINE HOMME","MEDECINE FEMME","CHIRURGIE HOMME","CHIRURGIE FEMME","GYNECO","MATERNITE","PEDIATRIE"));  
$per ->url(850+210,250,"index.php?uc=LISTDECES0","List Des Patient décédés","3"); 
$per ->f1();
$per -> sautligne (18);
 ?>

