<?php 
$per -> sautligne (2);
$per ->f0('index.php?uc=INS2','post');
$per ->fieldset("ins","Complete Simplement Le formulaire Si Dessous Pour  S'inscrir...");
$per ->label(500,275,'WILAYA ');               $per ->combo(670,275,'WILAYA','grh','wil','الولاية',"WILAYAN",'0','2'); //$per ->ARS(670,245,'REGION','gpts2012','ARS'); 
$per ->label(500,305,'STRUCTURE ');            $per ->combo1(670,305,'COMMUNE','COMMUNEN','البلدية'); 
$per ->label(500,335,'SERVICE :');             $per ->combov(670,335,'SERVICE',array("GRH", "MEDECINE HOMME", "MEDECINE FEMME", "CHIRURGIE HOMME", "CHIRURGIE FEMME", "GYNECO","MATERNITE", "PEDIATRIE", "BLOC OPP A", "BLOC OPP B", "UMC", "HEMODIALYSE"))   ; 
$per ->label(500,365,'Nom d’utilisateur :');   
// $per ->txt(670,365,'USER',20,'');//$per ->NOMUTILISATEUR(670,365,'USER');
$per ->usereph(670,365,'USER','grh','utilisateur','','0','1') ;
$per ->label(500,395,'Mot de passe:');         $per ->PSW(670,395,'MDP',20,'0'); // $per ->PSW(670,395,'MDP',20,'0'); 
$per ->label(500,425,'Date inscription:');     $per ->TXT(670,425,'DATEINSC',20,date("d-m-Y")); 
$per ->chekboxed(500,470,'cu');                $per ->url(590,450,'index.php?uc=CU','J\'accepte les Conditions d\'utilisation','4') ;  
$per ->label(500,485+20,'Enter Image ');       $per ->photoscaptacha(600,485+20); $per ->TXT(670,485+20,'captcha',5,'');$per ->submit(750,485+20,'inscription');          

$per ->f1();
$per -> sautligne (17);



?>










