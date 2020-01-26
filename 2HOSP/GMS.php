<?php
$per ->h(2,40,170,'Suivi Du Patient Sortant : '.'   '.$per->nbrtostring("grh","tpat","IDP",$_GET['idp'],"NOM")."_".$per->nbrtostring("grh","tpat","IDP",$_GET['idp'],"PRENOM"));//.'<font color=\"black\"  >'.$_GET['Nomlatin'].'  '.$_GET['Prenom_Latin'].'</font>'
$per ->fieldset("field1","***");$per ->fieldset("field11","***");
$per ->fieldset("field5","***");$per ->fieldset("field55","***");
$per->gestion (392,260,$_GET['idp'],'Fiche Navette','FN','b_props');
$per->gestion1 (900,260,$_GET['idp'],'RSCS','RSCS','b_props');
$per->gestion1 (900,260+150,$_GET['idp'],'Deces','CD1','b_props');
$per->gestion1 (790+250,260,$_GET['idp'],'RETOUR MALADE SORTANTS','LISTMSORT','b_home');
$per->gestion (448+205,260+150,$_GET['idp'],'fiche medicale','fm','b_props');
$per->gestion1 (560,260+150,$_GET['idp'],'P/Operatoire','PO1','b_props');
$per->gestion1 (846,260,$_GET['idp'],'Conge','CONG','b_index');
$per->gestion1 (500,260,$_GET['idp'],'Biologie','LAB','b_usrlist');
$per->gestion1 (560,260,$_GET['idp'],'Radiologie','RAD','b_usrlist');
$per->gestion1 (635,260,$_GET['idp'],'Ordonnance','ORD','b_props');
$per -> sautligne (20);
?>

