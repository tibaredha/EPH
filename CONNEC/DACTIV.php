<?php 
$IDP=$_GET["IDP"];
$per ->fieldset("field1","DESACTIVATION DU COMPTE UTILISATEUR");$per ->fieldset("field5","***");
$per -> sautligne (17);
$per ->f0('index.php?uc=DACTIV1','post','formGCS');
$x=280;
$per ->label(450,$x,"N° Utilisateur : ".$_GET["IDP"]); 
$per ->label(450,$x+30,"Nom Utilisateur : ".$_GET["Nom"]); 
$per ->submit(1040,290,' DESACTIVER LE COMPTE UTILISATEUR');
$per ->hide(100,100,'IDP',20,$IDP);
$per ->f1();
?>