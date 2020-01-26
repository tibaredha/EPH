<?php 
$per ->h(2,500,180,'Nouveau Patient');
$per -> sautligne (2);
$per ->fieldset("field1","Donnees de l'état civil");$per ->fieldset("field5","***");
$per ->fieldset("field2","Adresse de residence");
$per ->fieldset("field3","Diagnostic");
$per ->fieldset("field4","Hospitalisation");
$per ->photosx(1080,390,'PH',150,150);
$per ->f0('index.php?uc=PAT2','post');
$per ->submit(1105,312,'Enregistrer Patient');
$per ->label(40,250,'Source');                   $per ->combov(120,250,'ORIGINE',array("maison","evacuer")); 
$per ->label(370,250,'Date');                    $per ->txt(430,250,'DATE',15,date("d-m-Y"));
$per ->label(570,250,'H:');                      $per ->txt(600,250,'HEURE',4,date("H:i"));
$per ->label(40,280,'Nom');                      $per ->txt(120,280,'NOM',32,'X');
$per ->label(370,280,'Prénom');                  $per ->txt(430,280,'PRENOM',32,'X');
$per ->label(740,280,'Sexe');                    $per ->combov(800,280,'SEXE',array("M", "F")); 
$per ->label(40,310,'fils de');                  $per ->txt(120,310,'FILS',32,'X');
$per ->label(370,310,'et de');                   $per ->txt(430,310,'ETDE',32,'X');
$per ->label(740,310,'Né(e) Le');                $per ->txt(800,310,'DATENAISSANCE',15,date("Y-m-d")); //$per ->datetime (800,310,'DATENAISSANCE');  //$per ->txtme(800,310,"DATENAISSANCE",20,"")	;//// masque avec jquery
$per ->label(40,340,'*Wilaya de naissance');     $per ->WILAYAN(180,340,'WILAYANFR','gpts2012','wil');  
$per ->label(370,340,'*Commune de naissance');   $per ->COMMUNEN(530,340,'COMMUNENFR');            
$per ->label(40,370+25,'*Wilaya ');              $per ->WILAYAR(180,370+25,'WILAYAR','gpts2012','wil'); 
$per ->label(370,370+25,'*Commune ');            $per ->COMMUNER(530,370+25,'COMMUNER');           
$per ->label(740,370+25,'*Adresse ');            $per ->txt(800,370+25,'ADRESSE',22,'X');
$per ->label(40,450,'Diagnostic');               $per ->txt(180,445,'DGC',62,'X');


// ECHO "<input type=\"radio\" id=\"radio_10\" name=\"radios_0\" onClick=\"GereControle('radio_10', 'liste_10', '1');\" CHECKED>";
// ECHO "<input type=\"radio\" id=\"radio_20\" name=\"radios_0\" onClick=\"GereControle('radio_10', 'liste_10', '1');\" >";
// echo'</br>';
// echo "<select id=\"liste_10\"><option value=\"1\">Ligne 1</option></select>";


$per ->label(40,450+58,'Hospitalisation');    
$per ->label(170,450+58,'Oui');  $per ->radio(200,450+58,"HOS","OUI");  
$per ->label(270,450+58,'Non');  $per ->radioed(300,450+58,"HOS","NON");  

$per ->label(370,450+58,'SERVICE');
$per ->comboservice(470,450+58,"SERVICE","grh","service","SERVICE","SERVICE","ids","servicefr") ;
//$per ->combov(800-240,445,'SERVICE',array("0","UMC","MEDECINE HOMME","MEDECINE FEMME","CHIRURGIE HOMME","CHIRURGIE FEMME","GYNECO","MATERNITE","PEDIATRIE"));  



$per ->label(670,450+58,'N° du lit  ');     $per ->NLIT(810,450+58,"NLIT");   //$per ->combo(810,445,"NLIT","grh","lit","nlit","lit","idlit","nlit") ; 
$per ->url(790+270,250,"index.php?uc=LISTMHOSP","Suivi Du Patient Hospitalise","3"); 
$per ->f1();
$per -> sautligne (17);
 ?>

