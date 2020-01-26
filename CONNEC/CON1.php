<?php 
$per -> sautligne (2);
$per ->f0('index.php?uc=CONN2','post');
$per ->fieldset("con","Complete Simplement Le formulaire Si Dessous Pour Se Connecter...");
$per ->label(500,275,'WILAYA ');               $per ->combo(670,275,'WILAYA','grh','wil','الولاية',"WILAYAN",'0','2'); 
$per ->label(500,305,'COMMUNE ');              $per ->combo1(670,305,'COMMUNE','COMMUNEN','البلدية'); 
$per ->label(500,335,'SERVICE :');             $per ->combov(670,335,'SERVICE',array("GRH", "MEDECINE HOMME", "MEDECINE FEMME", "CHIRURGIE HOMME", "CHIRURGIE FEMME", "GYNECO","MATERNITE", "PEDIATRIE", "BLOC OPP A", "BLOC OPP B", "UMC","HEMODIALYSE")); // service pri en charge par pts 
$per ->label(500,365,'Nom d’utilisateur :');   
// $per ->txt(670,365,'USER',15,"X");
// $per ->usereph(670,365,'USER','grh','utilisateur','','0','1') ;
$per ->NOMUTILISATEUR(670,365,'USER');
$per ->label(500,395,'Mot de passe:');         $per ->PSW(670,395,'MDP',20,'160556');
$per ->label(500,430,'CONNECTION');            $per ->submit(670,430,'connection');
$per ->f1();
$per -> sautligne (17);
?>

  
