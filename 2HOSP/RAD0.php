<?php 
$per ->h(1,500,170,'Radiologie');
$per ->f0('./2HOSP/RAD.PHP','post');
$per ->submit(1110,525,'Ordonance');
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
$per ->label(50,$x+145,'EXAMEN1');             $per ->combov(120,$x+145,'ER1',array("","CRANE","FACE","COU","THORAX","ASP","EPAULE","BRAS","COUD","AVBRAS","POIGNET","MAIN","HANCHE","CUISSE","GENOUX","JAMBE","CHEVILLE","PIED"))   ; 
$per ->label(50,$x+145+30,'EXAMEN2');          $per ->combov(120,$x+145+30,'ER2',array("","CRANE","FACE","COU","THORAX","ASP","EPAULE","BRAS","COUD","AVBRAS","POIGNET","MAIN","HANCHE","CUISSE","GENOUX","JAMBE","CHEVILLE","PIED"))   ; 
$per ->label(50,$x+145+60,'EXAMEN3');          $per ->combov(120,$x+145+60,'ER3',array("","CRANE","FACE","COU","THORAX","ASP","EPAULE","BRAS","COUD","AVBRAS","POIGNET","MAIN","HANCHE","CUISSE","GENOUX","JAMBE","CHEVILLE","PIED"))   ; 
$per ->label(50,$x+145+90,'EXAMEN4');          $per ->combov(120,$x+145+90,'ER4',array("","CRANE","FACE","COU","THORAX","ASP","EPAULE","BRAS","COUD","AVBRAS","POIGNET","MAIN","HANCHE","CUISSE","GENOUX","JAMBE","CHEVILLE","PIED"))   ; 
$per ->label(350,$x+145+30,'EXAMEN5');         $per ->combov(470-40,$x+145+30,'ER5',array("","CRANE","FACE","COU","THORAX","ASP","EPAULE","BRAS","COUD","AVBRAS","POIGNET","MAIN","HANCHE","CUISSE","GENOUX","JAMBE","CHEVILLE","PIED"))   ; 
$per ->label(350,$x+145+60,'EXAMEN6');         $per ->combov(470-40,$x+145+60,'ER6',array("","CRANE","FACE","COU","THORAX","ASP","EPAULE","BRAS","COUD","AVBRAS","POIGNET","MAIN","HANCHE","CUISSE","GENOUX","JAMBE","CHEVILLE","PIED"))   ; 
$per ->label(350,$x+145+90,'EXAMEN7');         $per ->combov(470-40,$x+145+90,'ER7',array("","CRANE","FACE","COU","THORAX","ASP","EPAULE","BRAS","COUD","AVBRAS","POIGNET","MAIN","HANCHE","CUISSE","GENOUX","JAMBE","CHEVILLE","PIED"))   ; 

$per ->combov(120+100,$x+145,'INC1',array("","FACE","PROFIL DRT","PROFIL GHE")); 
$per ->combov(120+100,$x+145+30,'INC2',array("","FACE","PROFIL DRT","PROFIL GHE")); 
$per ->combov(120+100,$x+145+60,'INC3',array("","FACE","PROFIL DRT","PROFIL GHE")); 
$per ->combov(120+100,$x+145+90,'INC4',array("","FACE","PROFIL DRT","PROFIL GHE")); 
$per ->combov(470-40+100,$x+145+30,'INC5',array("","FACE","PROFIL DRT","PROFIL GHE"));  
$per ->combov(470-40+100,$x+145+60,'INC6',array("","FACE","PROFIL DRT","PROFIL GHE")); 
$per ->combov(470-40+100,$x+145+90,'INC7',array("","FACE","PROFIL DRT","PROFIL GHE")); 



$per ->hide(595,$x+90,'ADRESSE',20,$result->ADRESSE);
$per ->hide(595,$x+90,'SERVICEHOSP',20,$result->SERVICEHOSP);
$per ->hide(595,$x+90,'idp',20,$_GET["idp"]); 
$per ->hide(595,$x+90,'AGE',20,$result->AGE);   
$per ->url(790+210,250,"index.php?uc=SMH&idp=".$_GET["idp"],"SUIVIE DU PATIENT HOSPITALISE","3");  
}
$per ->f1();
$per -> sautligne (20);
?>  
