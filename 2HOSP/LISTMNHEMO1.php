<?php

$per ->h(2,400,170,'SUIVIE DU PATIENT NOM HOSPITALISE '.'   ');//.'<font color=\"black\"  >'.$_GET['Nomlatin'].'  '.$_GET['Prenom_Latin'].'</font>'
$per ->fieldset("field1","***");$per ->fieldset("field11","***");
$per ->fieldset("field5","***");$per ->fieldset("field55","***");


// $per->gestion (40,260,$_GET['idp'],' شهادة عمل عربى','ctravail','b_props');
// $per->gestion (40+100,260,$_GET['idp'],'شهادة عمل فرنسي','ctravail1','b_props');

$per->gestion1 (40,260,$_GET['idp'],'ORDONNANCE','ORD','b_props');
$per->gestion1 (200,260,$_GET['idp'],'laboratoire','LAB','b_usrlist');
$per->gestion1 (300,260,$_GET['idp'],'examen radiologie','RAD','b_usrlist');
// $per->gestion1 (440,260,$_GET['idp'],'surveillace','SUR','b_usradd');
// $per->gestion1 (550,260,$_GET['idp'],'conge','CONG','b_index');
// $per->gestion1 (650,260,$_GET['idp'],'RSCS','RSCS','b_props');
$per->gestion1 (790+250,260,$_GET['idp'],'RETOUR MALADE NON HOSPITALISE','LISTMNHOSP','b_home');


// $per->gestion1 (40,260+150,$_GET['idp'],' TRANSFUSSION','DISA','b_props');
// $per->gestion1 (40+145,260+150,$_GET['idp'],'SOCORPIONISME','SCOR','b_props');


// $per->gestion1 (670,260+150,$_GET['idp'],' EVACUATION','EVA','b_props');
// $per->gestion1 (800,260+150,$_GET['idp'],'CONSTAT DE DECES','CD1','b_props');//decesCD1



$per->gestion1 (90+790+150,260+150,$_GET['idp'],'MODIFICATION','***','e');
$per->gestion1 (90+790+300,260+150,$_GET['idp'],'FAIRE SORTIR ','SORT','b_deltbl');
$per -> sautligne (20);




// echo( "<td><div align=\"center\">"."<a title=\"protocol operatoire\" href=\"index.php?uc=PO1&idp=".$result["idp"]."\"><img src='./images/print.png' width='16' height='16' border='0' alt=''/></a>"."</div></td>\n" );
// echo( "<td><div align=\"center\">"."<a title=\"carte de suivie\" href=\"./2HOSP/FCART.php?idp=".$result["idp"]."\"><img src='./images/print.png' width='16' height='16' border='0' alt=''/></a>"."</div></td>\n" );
// echo( "<td><div align=\"center\">"."<a title=\"carte de suivie\" href=\"index.php?uc=EVA&idp=".$result["idp"]."\"><img src='./images/print.png' width='16' height='16' border='0' alt=''/></a>"."</div></td>\n" );
// echo( "<td><div align=\"center\">"."<a title=\"rage\" href=\"index.php?uc=RAGE&idp=".$result["idp"]."\"><img src='./images/hbc.jpg' width='16' height='16' border='0' alt=''/></a>"."</div></td>\n" );


?>

