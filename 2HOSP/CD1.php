<?php
$per ->h(1,500,170,'Cetificat De Décés');
$per ->f0('./2HOSP/CD2.php','post');
$per ->fieldset("field1","***");$per ->fieldset("field5","***");
$per ->fieldset("field11","***");
$per ->submit(1065,310,'Imprimer Cetificat De Decees');
$per-> mysqlconnect();
$id  = $_GET["idp"] ; 
$sql = "SELECT * FROM tpat WHERE idp = ".$id ;
$requete = mysql_query( $sql) ; 
if( $result = mysql_fetch_object( $requete ) )
  {
$x=250;
$per ->label(50,$x,'Non :');                              $per ->txt(120,$x,'NOM',20,$result->NOM);
$per ->label(350,$x,'Prénom :');                          $per ->txt(470-40,$x,'PRENOM',20,$result->PRENOM);
$per ->label(50,$x+30,'Date :');                          $per ->txt(120,$x+30,'DATE',20,date("Y-m-d"));
$per ->label(350,$x+30,'Heure :');                        $per ->txt(470-40,$x+30,'HEUR',20,date("H:i"));
$per ->label(50,$x+60,'Diagnostic');                      $per ->txt(120,$x+60,'DGC',72,$result->DGC);
$per ->label(50,$x+90,'Entrée le');                       $per ->txt(120,$x+90,'DATEADMISSION',20,$result->DATE);
$per ->label(350,$x+90,'Service');                        $per ->txt(470-40,$x+90,'SERVICEHOSP',20,$result->SERVICEHOSP);
$per ->label(50,$x+145,'Lieu du décés du malade ');
$per ->label(50,$x+145+30,'Domicile ');                   $per ->radio(200,$x+145+30,"LD","DOM");    
$per ->label(50,$x+145+60,'Voie publique ');              $per ->radio(200,$x+145+60,"LD","VP");     
$per ->label(50,$x+145+90,'Autres (a préciser). ');       $per ->radio(200,$x+145+90,"LD","AAP"); $per ->txt(240,$x+145+90,'AUTRES',24,'*');   
$per ->label(250,$x+145+30,'Structure de sante public '); $per ->radioed(400,$x+145+30,"LD","SSP");  
$per ->label(250,$x+145+60,'Structure de sante privé ');  $per ->radio(400,$x+145+60,"LD","SSPV");    
$per ->label(800,$x,'Date du décés');$per ->txt(800,$x+24,'DD',20,date("Y-m-d")); //$per ->datetime (800,$x+24,'DD');                 
$per ->label(800,$x+60,'Heure du décés'); $per ->txt(800,$x+84,'HD',4,date("H:i"));
$per ->label(600,$x,'Cause de décés'); 
$per ->label(600,$x+30,'Cause naturelle');                $per ->radioed(720,$x+30,"CD","CN");    
$per ->label(600,$x+60,'Cause viollente');                $per ->radio(720,$x+60,"CD","CV");      
$per ->label(600,$x+90,'Cause idetermine');               $per ->radio(720,$x+90,"CD","CI");     
$per ->label(490,$x+145,'Causes du décés CIM 10 ');  
$per ->label(650,$x+145,'CIM1');                          $per ->txt(750,$x+145,'CIM1',20,"***");           $per ->txtar(1170,$x+145,'NOMAR',15,"***");        $per ->label(1300,$x+145,'اللقب');
$per ->label(650,$x+145+30,'CIM2');                       $per ->txt(750,$x+145+30,'CIM2',20,"***");        $per ->txtar(1170,$x+145+30,'PRENOMAR',15,"***");  $per ->label(1300,$x+145+30,'الاسم');
$per ->label(650,$x+145+60,'CIM3');                       $per ->txt(750,$x+145+60,'CIM3',20,"***");        $per ->txtar(1170,$x+145+60,'FILSDEAR',15,"***");  $per ->label(1310,$x+145+60,'ابن'); 
$per ->label(650,$x+145+90,'CIM4');                       $per ->txt(750,$x+145+90,'CIM4',20,"***");        $per ->txtar(1170,$x+145+90,'ETDEAR',15,"***");    $per ->label(1320,$x+145+90,'و');
$per ->label(650,$x+145+120,'autres etats');              $per ->txt(750,$x+145+120,'CIM5',20,"***");       $per ->txtar(1170,$x+145+120,'EPOUZE',15,"***");    $per ->label(1305,$x+145+120,'زوج');
$per ->hide(595,$x+90,'FILS',20,$result->FILS);
$per ->hide(595,$x+90,'ETDE',20,$result->ETDE);
$per ->hide(595,$x+90,'SEXE',20,$result->SEXE);
$per ->hide(595,$x+90,'DATENAISSANCE',20,$result->DATENAISSANCE);
$per ->hide(595,$x+90,'COMMUNE',20,$result->COMMUNE);
$per ->hide(595,$x+90,'WILAYA',20,$result->WILAYA);
$per ->hide(595,$x+90,'COMMUNER',20,$result->COMMUNER);
$per ->hide(595,$x+90,'WILAYAR',20,$result->WILAYAR);
$per ->hide(595,$x+90,'ADRESSE',20,$result->ADRESSE);
$per ->hide(595,$x+90,'SERVICEHOSP',20,$result->SERVICEHOSP);
$per ->hide(595,$x+90,'idp',20,$_GET["idp"]); 
$per ->hide(595,$x+90,'AGE',20,$result->AGE);   
$per ->url(790+240,250,"index.php?uc=SMH&idp=".$_GET["idp"],"Suivie Du Patient Hospitalise","3");  
}
$per ->f1();
$per -> sautligne (20);
?>  