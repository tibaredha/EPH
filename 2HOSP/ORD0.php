<?php 
$per ->h(1,500,170,'Ordonance');
$per ->f0('./2HOSP/ORD.PHP','post');
$per ->submit(1110,525,'Ordonance');
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
$per ->label(350,$x+90,'Service');             $per ->txt(470-40,$x+90,'DUREE',20,$per->nbrtostring("grh","service","ids",$result->SERVICEHOSP,"servicefr"));

$per ->label(50,$x+145,'MED1');                $per ->combomed(120,$x+145,'MED1','grh','t21','choisir medicament',"WILAYAN",'2','2'); 
$per ->label(650+70,$x+145,'DOSE1');             $per ->txt(700+70,$x+145,'DOSE1',5,"");//$per ->combov(700+70,$x+145,'DOSE1',array("","1 cp x 3 /j"))   ;  
$per ->label(800+50,$x+145,'QUT1');              $per ->txt(850+50,$x+145,'QUT1',5,""); //$per ->combov(850+70,$x+145,'QUT1',array("","1bte"))   ;  

$per ->label(50,$x+145+30,'MED2');             $per ->combomed(120,$x+145+30,'MED2','grh','t21','choisir medicament',"WILAYAN",'2','2'); 
$per ->label(650+70,$x+145+30,'DOSE2');            $per ->txt(700+70,$x+145+30,'DOSE2',5,"");//$per ->combov(700+70,$x+145+30,'DOSE2',array("","1 cp x 3 /j"))   ;  
$per ->label(800+50,$x+145+30,'QUT2');            $per ->txt(850+50,$x+145+30,'QUT2',5,"");//$per ->combov(850+70,$x+145+30,'QUT2',array("","1bte"))   ;  

$per ->label(50,$x+145+60,'MED3');             $per ->combomed(120,$x+145+60,'MED3','grh','t21','choisir medicament',"WILAYAN",'2','2'); 
$per ->label(650+70,$x+145+60,'DOSE3');           $per ->txt(700+70,$x+145+60,'DOSE3',5,""); //$per ->combov(700+70,$x+145+60,'DOSE3',array("","1 cp x 3 /j"))   ;  
$per ->label(800+50,$x+145+60,'QUT3');           $per ->txt(850+50,$x+145+60,'QUT3',5,"");// $per ->combov(850+70,$x+145+60,'QUT3',array("","1bte"))   ;  

$per ->label(50,$x+145+90,'MED4');             $per ->combomed(120,$x+145+90,'MED4','grh','t21','choisir medicament',"WILAYAN",'2','2'); 
$per ->label(650+70,$x+145+90,'DOSE4');           $per ->txt(700+70,$x+145+90,'DOSE4',5,"");  //$per ->combov(700+70,$x+145+90,'DOSE4',array("","1 cp x 3 /j"))   ;  
$per ->label(800+50,$x+145+90,'QUT4');             $per ->txt(850+50,$x+145+90,'QUT4',5,"");//$per ->combov(850+70,$x+145+90,'QUT4',array("","1bte"))   ;  

$per ->label(50,$x+145+120,'MED5');            $per ->combomed(120,$x+145+120,'MED5','grh','t21','choisir medicament',"WILAYAN",'2','2'); 
$per ->label(650+70,$x+145+120,'DOSE5');           $per ->txt(700+70,$x+145+120,'DOSE5',5,""); //$per ->combov(700+70,$x+145+120,'DOSE5',array("","1 cp x 3 /j"))   ;  
$per ->label(800+50,$x+145+120,'QUT5');          $per ->txt(850+50,$x+145+120,'QUT5',5,"");// $per ->combov(850+70,$x+145+120,'QUT5',array("","1bte"))   ;  

$per ->hide(595,$x+90,'ADRESSE',20,$result->ADRESSE);
$per ->hide(595,$x+90,'SERVICEHOSP',20,$result->SERVICEHOSP);
$per ->hide(595,$x+90,'idp',20,$_GET["idp"]); 
$per ->hide(595,$x+90,'AGE',20,$result->AGE);   
$per ->url(790+210,250,"index.php?uc=SMH&idp=".$_GET["idp"],"SUIVIE DU PATIENT HOSPITALISE","3");  
}
$per ->f1();
$per -> sautligne (20);
?>  