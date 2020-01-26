<?php 
include('./SESSION/SESSION.php');
include('./class/class.php');
$NOM=$_GET["NOM"];
$PRENOM=$_GET["PRENOM"];
$SEXE=$_GET["SEXE"];
$DATENAISSANCE=$_GET["DATENAISSANCE"];
$MEDECIN=$_GET["medecin"];
$per ->h(2,500,180,'DEMANDE HOSPITALISATION');
$per -> sautligne (2);
$per -> photos(1000,250);
$per ->f0('./1pat/ADM.php','post');
$per ->submit(100,490,'Hospitaliser Patient');
$per ->label(100,280,$NOM);                            $per ->hide(200,280,'NOM',32,$NOM);$per ->hide(200,280,'medecin',32,$MEDECIN);
$per ->label(500,280,$PRENOM);                         $per ->hide(600,280,'PRENOM',32,$PRENOM);
$per ->label(100,310,$SEXE);                           $per ->hide(200,310,'SEXE',32,$SEXE); 
$per ->label(500,310,$DATENAISSANCE);                  $per ->hide(600,310,'DATENAISSANCE',32,$DATENAISSANCE);
//********************MALADE ORIENTE OU ADRESSE PAR*********************************************************************************
$per ->label(100,340,'MALADE ORIENTE OU ADRESSE PAR'); $per ->txt(200,340,'MOAP',32,'');
$per ->label(100,370,'Grade');                         $per ->txt(200,370,'Grade',32,'');
$per ->label(100,400,'Etablissement');                 $per ->txt(200,400,'Etablissement',32,''); 
$per ->label(100,430,'Unite / Service');               $per ->txt(200,430,'EUS',32,'');
//**********************************************************************************************************************************
$per ->label(500,460,'Hospitalisation');           $per ->combov(630,460,'SERVICE',array("UMC","MEDECINE HOMME","MEDECINE FEMME","CHIRURGIE HOMME","CHIRURGIE FEMME","GYNECO","MATERNITE","PEDIATRIE")); 
$per ->f1();
$per -> sautligne (15);


// $MEDECIN=$_SESSION["USER"] ;
// echo $MEDECIN;
 ?>


 
  

