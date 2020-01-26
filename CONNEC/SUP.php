<?php
$per-> mysqlconnect(); 
$IDP=$_GET["IDP"];
$per ->fieldset("field1","SUPPRESSION DU COMPTE UTILISATEUR");$per ->fieldset("field5","***");
$per -> sautligne (17);
$per ->f0('index.php?uc=SUPMBR1','post','formGCS');
$per ->submit(1030,290,'SUPPRESSION DU COMPTE UTILISATEUR');
$per ->hide(100,100,'IDP',20,$IDP);
$per ->f1();
?>