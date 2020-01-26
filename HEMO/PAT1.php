<?php 
$per ->h(2,500,180,'Nouveau Patient Hemodialyse');
$per -> sautligne (2);
$per ->fieldset("field1","Donnees de l'état civil");$per ->fieldset("field5","***");
$per ->fieldset("field2","Adresse de residence");
$per ->fieldset("field3","Diagnostic");
$per ->fieldset("field4","Qualifiquation Immuno-Hematologie-Serologie");
$per ->photosx(1080,390,'APPD',150,150);
$per ->f0('index.php?uc=NHEMO1','post');
$per ->submit(1090,315,'Enregistrer Patient'); 
$per ->label(40,250,'NOUVEAU PATIENT HEMODIALYSE');                 
$per ->label(370,250,'Date');                    $per ->txt(430,250,'DATE',15,date("d-m-Y"));
$per ->label(570,250,'H:');                      $per ->txt(600,250,'HEURE',4,date("H:i"));
$per ->label(740,250,'Poids Sec');                   $per ->txt(830,250,'POIDS',10,'70');
$per ->label(40,280,'Nom');                      $per ->txt(120,280,'NOM',32,'X');
$per ->label(370,280,'Prénom');                  $per ->txt(430,280,'PRENOM',32,'X');
$per ->label(740,280,'Sexe');                    $per ->combov(830,280,'SEXE',array("M", "F")); 
$per ->label(40,310,'fils de');                  $per ->txt(120,310,'FILS',32,'X');
$per ->label(370,310,'et de');                   $per ->txt(430,310,'ETDE',32,'X');
$per ->label(740,310,'Né(e) Le');                $per ->txt(830,310,'DATENAISSANCE',10,date("Y-m-d")); 
$per ->label(40,340,'*Wilaya de naissance');     $per ->WILAYAN(180,340,'WILAYANFR','gpts2012','wil');  
$per ->label(370,340,'*Commune de naissance');   $per ->COMMUNEN(530,340,'COMMUNENFR');            
$per ->label(40,370+25,'*Wilaya ');              $per ->WILAYAR(180,370+25,'WILAYAR','gpts2012','wil'); 
$per ->label(370,370+25,'*Commune ');            $per ->COMMUNER(530,370+25,'COMMUNER');           
$per ->label(740,370+25,'*Adresse ');            $per ->txt(800,370+25,'ADRESSE',22,'X');
$per ->label(40,450,'Cause initial');            $per ->combov(180,445,'DGC',array("HTA","DIABETE","PKR","GNC","PNC","VASCULAIRE","AUTRE","X")); //txt(180,445,'DGC',62,'X');
$per ->label(370,450,'Comorbidité');             $per ->combov(530,445,'CODGC',array("HTA","DIABETE","INSUFISANCE CARDIAQUE","CORONAROPATHIE","TROUBLE DU RYTHME","ARTERITE DES MBR INF","AVC","AUTRE","INCONNU")); //txt(180,445,'DGC',62,'X');
$per ->label(740,450,'N° du lit  ');             $per ->txt(800,450,'NLIT',22,'0');
$per ->label(740,340,'1ere dialyse');            $per ->txt(830,340,'DATEDIALYSE',10,date("Y-m-d"));
$per ->label(40,450+60,'ABO');                   $per ->combov(80,450+60,'GROUPAGE',array("A","B","AB","O")); 
$per ->label(160,450+60,'RHESUS');               $per ->combov(240,450+60,'rhesus',array("Positif","negatif")); 
$per ->label(370,450+60,'HVB');                  $per ->combov(370+40,450+60,'HVB',array("negatif","douteux","Positif")); 
$per ->label(470+40,450+60,'HVC');               $per ->combov(470+80,450+60,'HVC',array("negatif","douteux","Positif")); 
$per ->label(570+80,450+60,'HIV');               $per ->combov(570+120,450+60,'HIV',array("negatif","douteux","Positif")); 
$per ->label(670+120,450+60,'VDRL');             $per ->combov(670+170,450+60,'TPHA',array("negatif","douteux","Positif")); 
$per ->url(1050,250,"index.php?uc=LISTMHEMO","Liste Patient Hemodialyse","3"); 
$per ->f1();
$per -> sautligne (17);
 ?>

