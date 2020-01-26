<?php
$per ->h(2,40,170,'Suivi Du Patient Hospitalisé : '.'   '.$per->nbrtostring("grh","tpat","IDP",$_GET['idp'],"NOM")."_".$per->nbrtostring("grh","tpat","IDP",$_GET['idp'],"PRENOM"));//.'<font color=\"black\"  >'.$_GET['Nomlatin'].'  '.$_GET['Prenom_Latin'].'</font>'
$per ->fieldset("field1","***");$per ->fieldset("field11","***");
$per ->fieldset("field5","***");$per ->fieldset("field55","***");
$per->gestion1 (40,260,$_GET['idp'],'Changer Service','CHANGSERV','b_props');
$per->gestion1 (152,260,$_GET['idp'],'Actes M/C','ACTMED','b_props');
$per->gestion1 (232,260,$_GET['idp'],'Actes PM','','b_props');
$per->gestion1 (305,260,$_GET['idp'],'Medicament','ORDFN','b_props');
$per->gestion1 (392,260,$_GET['idp'],'perinatalite','PERINAT','b_props');
//$per->gestion (392,260,$_GET['idp'],'Fiche Navette','FN','b_props');
$per->gestion1 (500,260,$_GET['idp'],'Biologie','LAB','b_usrlist');
$per->gestion1 (560,260,$_GET['idp'],'Radiologie','RAD','b_usrlist');
$per->gestion1 (635,260,$_GET['idp'],'Ordonnance','ORD','b_props');
$per->gestion1 (723,260,$_GET['idp'],'Surveillance','SUR','b_usradd');
$per->gestion1 (807,260,$_GET['idp'],'PSL','DISA','gs');
//$per->gestion1 (846,260,$_GET['idp'],'Conge','CONG','b_index');
// $per->gestion1 (900,260,$_GET['idp'],'RSCS','RSCS','b_props');
$per->gestion1 (40,260+150,$_GET['idp'],'Socorpionisme','SCOR','b_props');
$per->gestion1 (40+103,260+150,$_GET['idp'],'Morsure','MORS','b_props');
$per->gestion1 (40+163,260+150,$_GET['idp'],'DDR','DDR','b_index');
$per->gestion1 (40+203,260+150,$_GET['idp'],'SG','SG','b_props');
$per->gestion1 (40+233,260+150,$_GET['idp'],'ISS','ISS','b_props');
$per->gestion1 (40+270,260+150,$_GET['idp'],'APGAR','APGAR','b_props');
$per->gestion1 (40+336,260+150,$_GET['idp'],'Silverman','SILVERMAN','b_props');
$per->gestion (447,260+150,$_GET['idp'],' C/sejour','CSEJOUR','b_props');
$per->gestion (510,260+150,$_GET['idp'],' A/opp','autoopp','b_props');
//$per->gestion1 (560,260+150,$_GET['idp'],'P/Operatoire','PO1','b_props');
//$per->gestion (448+205,260+150,$_GET['idp'],'fiche medicale','fm','b_props');
$per->gestion1 (760,260+150,$_GET['idp'],' Evasion','***','b_props');     ////PREVOIR  SORTI AUTOMATIQUE ET LIBERATION DU LIT AJOUT LIST DES EVADER
$per->gestion1 (820,260+150,$_GET['idp'],' Evacuation','EVA','b_props');     //PREVOIR  SORTI AUTOMATIQUE ET LIBERATION DU LIT AJOUT LIST DES EVACUER
//$per->gestion1 (900,260+150,$_GET['idp'],'Deces','CD1','b_props');//PREVOIR  SORTI AUTOMATIQUE ET LIBERATION DU LIT AJOUT LIST DES DECES
$per->gestion1 (790+290,260,$_GET['idp'],'Retour Malade Hospitalise','LISTMHOSP','b_home');
$per->gestion1 (90+790+150,260+150,$_GET['idp'],'CODE CIM 10','CODECIM','e');


$per->gestion1 (90+790+300,260+150,$_GET['idp'],'FAIRE SORTIR ','SORT0','b_deltbl');//SORTI AUTOMATIQUE ET LIBERATION DU LIT AJOUT LIST DES SORTANT


$per -> sautligne (20);
?>

