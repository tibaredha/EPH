<?php 
$per ->h(1,430,170,'MEDICAMENT FICHE NAVETTE');
$per ->f0('index.php?uc=ORDFN1','post');
$per ->submit(1110,525,'MEDICAMENT FICHE NAVETTE');
$per ->fieldset("field1","***");$per ->fieldset("field5","***");
$per ->fieldset("field11","***");
$per-> mysqlconnect();
$id  = $_GET["idp"] ; 
$sql = "SELECT * FROM tpat WHERE idp = ".$id ;
$requete = mysql_query( $sql ) ; 
if( $result = mysql_fetch_object( $requete ) )
{
$x=250;//$per ->txt(120,$x,'DOSE',20,"");
$per ->label(50,$x,'Non :');                   $per ->txt(120,$x,'NOM',20,$result->NOM);
$per ->label(350,$x,'Prenom :');               $per ->txt(470-40,$x,'PRENOM',20,$result->PRENOM);
$per ->label(50,$x+30,'Date :');               $per ->txt(120,$x+30,'DATE',20,date("Y-m-d"));
$per ->label(350,$x+30,'Heure :');             $per ->txt(470-40,$x+30,'HEUR',20,date("H:i"));
$per ->label(50,$x+60,'Diagnostic');           $per ->txt(120,$x+60,'GRADE',72,$result->DGC);
$per ->label(50,$x+90,'Entree le');            $per ->txt(120,$x+90,'DUREE',20,$result->DATE);
$per ->label(650,$x,'Poids :');                $per ->txt(720,$x,'Poids',20,"70");
$per ->label(350,$x+90,'Service');             $per ->txt(470-40,$x+90,'DUREE',20,$result->SERVICEHOSP);

$per ->label(50,$x+145,'MED1');                $per ->combomed(120,$x+145,'MED1','grh','t21','choisir medicament',"WILAYAN",'0','2'); 
$per ->label(50,$x+145+30,'DOSE1');            $per ->txt(120,$x+145+30,'DOSE1',5,"0");//$per ->combov(700+70,$x+145,'DOSE1',array("","1 cp x 3 /j"))   ;  
$per ->label(50,$x+145+60,'QUT1');             $per ->txt(120,$x+145+60,'QUT1',5,"1"); //$per ->combov(850+70,$x+145,'QUT1',array("","1bte"))   ;  

$per ->hide(595,$x+90,'ADRESSE',20,$result->ADRESSE);
$per ->hide(595,$x+90,'SERVICEHOSP',20,$result->SERVICEHOSP);
$per ->hide(595,$x+90,'idp',20,$_GET["idp"]); 
$per ->hide(595,$x+90,'AGE',20,$result->AGE);   
$per ->url(790+210,250,"index.php?uc=SMH&idp=".$_GET["idp"],"SUIVIE DU PATIENT HOSPITALISE","3");  
}
$per ->f1();
$per -> sautligne (20);
?>  