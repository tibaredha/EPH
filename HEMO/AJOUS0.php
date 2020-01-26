<?php 
$per ->h(1,500,170,'Ajout Séance D\'Hémodialyse');
$per ->f0('index.php?uc=AJOUS','post');
$per ->fieldset("field1","***");$per ->fieldset("field5","***");
$per ->fieldset("field11","***");
$per ->submit(1070,320,'Ajout Séance D\'Hémodialyse');
$x=250;
$per ->label(50,$x,'Nom Prénom:');                      $per ->NOMPRENOMHEMO(150,$x,"idp");       
$per ->label(50,$x+30,'Date :');                        $per ->txt(120,$x+30,'DATE',20,date("Y-m-d"));
$per ->label(350,$x+30,'Heure :');                      $per ->txt(470-40,$x+30,'HEUR',20,date("H:i"));
$per ->label(50,$x+140,'Heure Debut De Dialyse :');     $per ->txt(234,$x+140,'HEUREDD',1,date("H:i"));  
$per ->label(50,$x+170,'Poids :');                      $per ->txt(100,$x+170,'POIDSD',5,"0");          
$per ->label(50+160,$x+170,'SYS :');                    $per ->txt(100+160,$x+170,'SYSD',5,"0");            
$per ->label(50+160+160,$x+170,'DIA:');                 $per ->txt(100+160+160,$x+170,'DIAD',5,"0");            
// $per ->label(50,$x+170,'T°:');                       $per ->txt(120,$x+170,'TD',5,"0");             
$per ->label(50,$x+205,' Heure Fin De Dialyse :');      $per ->txt(234,$x+205,'HEUREFD',1,date("H:i")); 
$per ->label(50,$x+235,'Poids :');                      $per ->txt(100,$x+235,'POIDSF',5,"0");          
$per ->label(50+160,$x+235,'SYS :');                    $per ->txt(100+160,$x+235,'SYSF',5,"0");            
$per ->label(50+160+160,$x+235,'DIA:');                 $per ->txt(100+160+160,$x+235,'DIAF',5,"0");   
// $per ->label(350,$x+260,'T°:');                          $per ->txt(430,$x+260,'TF',20,"0");
$per ->label(650,$x+140,'Parametres De Dialyse : ');
$per ->label(650,$x+170,'Type De Dialyse :');  $per ->combov(770,$x+170,'TYPEDIA',array("PROGRAMME","URGENCE")); 
$per ->label(650,$x+200,'Appareil Utilise:');  $per ->txt(770,$x+200,'NAPP',18,""); 
$per ->label(650,$x+230,'Acces Sang :');       $per ->combov(770,$x+230,'ACCSANG',array("FAV","CCJ","CCF","PER"));  
$per ->label(650,$x+260,'Infirmier :');        $per ->txt(770,$x+260,'IDE',18,"x"); 
$per ->url(1050,250,"index.php?uc=LISTMHEMO","Suivie Du Patient Hemodialyse","3");   

$per ->f1();
$per -> sautligne (20);
?>  