<?php

$per-> mysqlconnect();
$id  = $_GET["idp"] ;
$sql = "SELECT * FROM hemo WHERE id = ".$id ;
$requete = mysql_query( $sql ) ; 
if( $result = mysql_fetch_object( $requete ) )
{
$per ->h(2,350,170,'Suivie Du Patient Hémodialyse '.'   '.$result->NOM."_".$result->PRENOM);//.'<font color=\"black\"  >'.$_GET['Nomlatin'].'  '.$_GET['Prenom_Latin'].'</font>'
$per ->fieldset("field1","***");$per ->fieldset("field11","***");
$per ->fieldset("field5","***");$per ->fieldset("field55","***");
$per->gestion1 (790+250,260,$_GET['idp'],'Retour Liste Patients Hemodialyses','LISTMHEMO','b_home');
//$per->gestion1 (40,260,$_GET['idp'],'ORDONNANCE','ORD','b_props');
$per->gestion1 (40,260,$_GET['idp'],'Séance  D\'Hémodialyse','FHEMO','dialyse');
$per->gestion1 (191,260,$_GET['idp'],'Liste Séance  ','LISTESEANCE','b_usrlist');
$per->gestion1 (279,260,$_GET['idp'],'Graphe Séance  ','SEANCEGRAPHE','b_usrlist');
$per->gestion (384,260,$_GET['idp'],'Pdf seance ','SEANCEPDF','b_usrlist');
$per->gestion (465,260,$_GET['idp'],'Fiche seance ','FHEMO1','b_usrlist');




$per->gestion1 (575,260,$_GET['idp'],'Bilan Biologique','LABHEMO','b_usrlist');
$per->gestion1 (684,260,$_GET['idp'],'Liste Bilan','LISTEBILAN','b_usrlist');
$per->gestion1 (758,260,$_GET['idp'],'Graphe Bilan ','HBGRAPHE','b_usrlist');
$per->gestion (758+90,260,$_GET['idp'],'Pdf Bilan ','HEMOPDF','b_usrlist');




// $per->gestion (320+155,260,$_GET['idp'],'Pdf Bilan ','HEMOPDF','b_usrlist');




// $per->gestion1 (320+95,260,$_GET['idp'],'CRAET','','b_usrlist');
// $per->gestion1 (320+95+68,260,$_GET['idp'],'GLYCE','','b_usrlist');
// $per->gestion1 (320+95+68+68,260,$_GET['idp'],'CA','','b_usrlist');
// $per->gestion1 (320+95+68+68+38,260,$_GET['idp'],'PHOS','','b_usrlist');
// $per->gestion1 (320+95+68+68+92,260,$_GET['idp'],'NA','','b_usrlist');
// $per->gestion1 (320+95+68+68+132,260,$_GET['idp'],'K','','b_usrlist');
// $per->gestion1 (320+95+68+68+165,260,$_GET['idp'],'POIDS','','b_usrlist');




// $per->gestion1 (300,260,$_GET['idp'],'examen radiologie','RAD','b_usrlist');
// $per->gestion1 (440,260,$_GET['idp'],'surveillace','SUR','b_usradd');
// $per->gestion1 (550,260,$_GET['idp'],'conge','CONG','b_index');
// $per->gestion1 (550+52,260,$_GET['idp'],'DDR','DDR','b_index');
// $per->gestion1 (650,260,$_GET['idp'],'RSCS','RSCS','b_props');
// $per->gestion1 (650+60,260,$_GET['idp'],'SG','SG','b_props');
// $per->gestion1 (650+100,260,$_GET['idp'],'ISS','ISS','b_props');
// $per->gestion1 (650+140,260,$_GET['idp'],'APGAR','APGAR','b_props');
// $per->gestion1 (860,260,$_GET['idp'],'SILVERMAN','SILVERMAN','b_props');
$per->gestion1 (40,260+150,$_GET['idp'],' Transfussion','DISAH','gs');
$per->gestion1 (40+130,260+150,$_GET['idp'],'Certificat','CERT','b_props');
$per->gestion1 (40+230,260+150,$_GET['idp'],'Protocole','PROTOCOLE','b_props');




// $per->gestion1 (40+145,260+150,$_GET['idp'],'SOCORPIONISME','SCOR','b_props');
// $per->gestion1 (40+145+150,260+150,$_GET['idp'],'MORSURE','MORS','b_props');
// $per->gestion (40+400,260+150,$_GET['idp'],' auto opp','autoopp','b_props');
//PREVOIR PERMISSION 
// $per->gestion1 (670-100,260+150,$_GET['idp'],' EVASION','***','b_props');     ////PREVOIR  SORTI AUTOMATIQUE ET LIBERATION DU LIT AJOUT LIST DES EVADER
// $per->gestion1 (670,260+150,$_GET['idp'],' EVACUATION','EVA','b_props');     //PREVOIR  SORTI AUTOMATIQUE ET LIBERATION DU LIT AJOUT LIST DES EVACUER
// $per->gestion1 (800,260+150,$_GET['idp'],'CONSTAT DE DECES','CD1','b_props');//PREVOIR  SORTI AUTOMATIQUE ET LIBERATION DU LIT AJOUT LIST DES DECES



$per->gestion1 (90+790+150,260+150,$_GET['idp'],'Modification','MNHEMO1','e');
$per->gestion1 (90+790+300,260+150,$_GET['idp'],'Faire Sortir ','SORTHEMO','b_deltbl');//SORTI AUTOMATIQUE ET LIBERATION DU LIT AJOUT LIST DES SORTANT
$per -> sautligne (20);

}



// echo( "<td><div align=\"center\">"."<a title=\"protocol operatoire\" href=\"index.php?uc=PO1&idp=".$result["idp"]."\"><img src='./images/print.png' width='16' height='16' border='0' alt=''/></a>"."</div></td>\n" );
// echo( "<td><div align=\"center\">"."<a title=\"carte de suivie\" href=\"./2HOSP/FCART.php?idp=".$result["idp"]."\"><img src='./images/print.png' width='16' height='16' border='0' alt=''/></a>"."</div></td>\n" );
// echo( "<td><div align=\"center\">"."<a title=\"carte de suivie\" href=\"index.php?uc=EVA&idp=".$result["idp"]."\"><img src='./images/print.png' width='16' height='16' border='0' alt=''/></a>"."</div></td>\n" );
// echo( "<td><div align=\"center\">"."<a title=\"rage\" href=\"index.php?uc=RAGE&idp=".$result["idp"]."\"><img src='./images/hbc.jpg' width='16' height='16' border='0' alt=''/></a>"."</div></td>\n" );


?>

