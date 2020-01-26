<?php
$per ->h(1,500,170,'Congé Maladie');
$per ->f0('./2HOSP/CONG.PHP','post');
$per ->submit(1110,525,'Congé');
$per ->fieldset("field1","***");$per ->fieldset("field5","***");
$per ->fieldset("field11","***");
$per-> mysqlconnect();
$id  = $_GET["idp"] ; 
$sql = "SELECT * FROM tpat WHERE idp = ".$id ;
$requete = mysql_query( $sql ) ; 
if( $result = mysql_fetch_object( $requete ) )
{
$x=250;
$per ->label(50,$x,'Non :');                   $per ->txt(120,$x,'NOM',20,$result->NOM);
$per ->label(350,$x,'Prenom :');               $per ->txt(470-40,$x,'PRENOM',20,$result->PRENOM);
$per ->label(50,$x+30,'Date :');               $per ->txt(120,$x+30,'DATE',20,date("Y-m-d"));
$per ->label(350,$x+30,'Heure :');             $per ->txt(470-40,$x+30,'HEUR',20,date("H:i"));
$per ->label(50,$x+60,'Diagnostic');           $per ->txt(120,$x+60,'GRADE',72,$result->DGC);
$per ->label(50,$x+90,'Entree le');            $per ->txt(120,$x+90,'DUREE',20,$result->DATE);
$per ->label(350,$x+90,'Service');             $per ->txt(470-40,$x+90,'DUREE',20,$per->nbrtostring("grh","service","ids",$result->SERVICEHOSP,"servicefr"));


$per ->label(50,$x+145,'Congé ');              $per ->radioed(200,$x+145,"TC","CON");    
$per ->label(50,$x+145+30,'Prolongation');     $per ->radio(200,$x+145+30,"TC","PRO");     
$per ->label(50,$x+145+60,'Reprise ');         $per ->radio(200,$x+145+60,"TC","REP"); 

$per ->label(50,$x+145+90,'Nbr de jour');      $per ->txt(120,$x+145+90,'NBR',20,"0");
$per ->label(350,$x+145+90,'date');            $per ->txt(470-40,$x+145+90,'DATE',20,DATE('Y-m-j'));


// $per ->txt(240,$x+145+90,'AUTRES',24,'*');   
// $per ->txt(120,$x+160,'',72,"x");$per ->txt(120,$x+160,'',72,"x");
           


$per ->hide(595,$x+90,'ADRESSE',20,$result->ADRESSE);
$per ->hide(595,$x+90,'SERVICEHOSP',20,$result->SERVICEHOSP);
$per ->hide(595,$x+90,'idp',20,$_GET["idp"]); 
$per ->hide(595,$x+90,'AGE',20,$result->AGE);   
$per ->url(790+210,250,"index.php?uc=SMH&idp=".$_GET["idp"],"SUIVIE DU PATIENT HOSPITALISE","3");
}
$per ->f1();
$per -> sautligne (20);
?> 

