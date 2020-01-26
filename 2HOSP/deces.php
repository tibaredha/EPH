<?php
$per-> mysqlconnect();
$id  = $_GET["idp"] ; 
$sql = "SELECT * FROM tpat WHERE idp = ".$id ;
$requete = mysql_query( $sql ) ; 
$result = mysql_fetch_object( $requete ) ;

$per ->h(2,390,160,'CERTIFICAT MEDICAL DE CONSTAT DE DECES');
// $per -> sautligne (2);
$m=50;
$per ->f0('./deces/cd1.php','post');
$per ->submit(100,590-$m,'Imprimer certificat du Deces');
// $per ->label(900,590-$m,'Medecin');                 $per ->combom(990,590-$m,'MEDECIN','gpts2012','grh'); 
$per ->label(100,280-$m,'Nom');                        $per ->txt(260,280-$m,'NOM',29,$result->NOM);
$per ->label(500,280-$m,'Prénom');                     $per ->txt(640,280-$m,'PRENOM',29,$result->PRENOM);
$per ->label(100,310-$m,'Sexe');                       $per ->txt(260,310-$m,'SEXE',10,$result->SEXE);//$per ->combov(260,310-$m,'SEXE',array("M", "F")); 
$per ->label(500,310-$m,'Né(e) Le');                   $per ->txt(640,310-$m,'DATENAISSANCE',10,$result->DATENAISSANCE);  //$per ->datetime (640,310-$m,'');
$per ->label(100,340-$m,'Commune de naissance');       //$per ->combo(260,340-$m,'COMMUNE','gpts2012','com');
$per ->label(500,340-$m,'Wilaya de naissance');        //$per ->combo(640,340-$m,'WILAYA','gpts2012','wil');
$per ->label(100,370-$m,'Commune de residence');       //$per ->combo(260,370-$m,'COMMUNER','gpts2012','com');
$per ->label(500,370-$m,'Wilaya de residence');        //$per ->combo(640,370-$m,'WILAYAR','gpts2012','wil');
$per ->label(100,400-$m,'Adresse de residence');       $per ->txt(260,400-$m,'ADRESSE',29,$result->ADRESSE);
$per ->label(100,430-$m,'Fils de');                    $per ->txt(260,430-$m,'FILS',29,$result->FILS);
$per ->label(500,430-$m,'Et De');                      $per ->txt(640,430-$m,'ETDE',29,$result->ETDE);
$per ->label(100,460-$m,'Lieu du deces du malade ');
$per ->label(100,480-$m,'Domicile ');                  $per ->radio(260,480-$m,"LD","DOM");    
$per ->label(500,480-$m,'Structure de sante public '); $per ->radioed(655,480-$m,"LD","SSP");  
$per ->label(100,500-$m,'Voie publique ');             $per ->radio(260,500-$m,"LD","VP");     
$per ->label(500,500-$m,'Structure de sante prive ');  $per ->radio(655,500-$m,"LD","SSPV");    
$per ->label(100,520-$m,'Autres (à preciser). ');      $per ->txt(240,520-$m,'AUTRES',29,''); $per ->radio(655,520-$m,"LD","AAP");  
$per ->label(780,550-$m,'الاسم و اللقب');               $per ->txt(500,550-$m,'NOMPRENOMARAB',29,'');
$per ->label(470,550-$m,'ابن');                        $per ->txt(323,550-$m,'FILSARA',15,'');
$per ->label(270,550-$m,'و');                          $per ->txt(100,550-$m,'ETDEARA',15,'');
$per ->label(900,280-$m,'Date du deces');              $per ->datetime (1000,280-$m,'DATEDECES');$per ->txt(1150,280-$m,'HDP',4,date("H:i"));
$per ->label(900,310-$m,'cause de deces'); 
$per ->label(900,340-$m,'Cause naturelle');            $per ->radioed(1000,340-$m,"CD","CN");    
$per ->label(900,370-$m,'Cause viollente');            $per ->radio(1000,370-$m,"CD","CV");      
$per ->label(900,400-$m,'Cause idetermine');           $per ->radio(1000,400-$m,"CD","CI");      
$per ->label(900,430-$m,'Date ');                      $per ->datetime (1000,430-$m,'DATE');
$per ->label(900,460-$m,'due à ou consécutive à');     $per ->txt(1040,460-$m,'CIM1',29,'');
$per ->label(900,490-$m,'due à ou consécutive à');     $per ->txt(1040,490-$m,'CIM2',29,'');
$per ->label(900,520-$m,'due à ou consécutive à');     $per ->txt(1040,520-$m,'CIM3',29,'');
$per ->label(900,550-$m,'due à ou consécutive à');     $per ->txt(1040,550-$m,'CIM4',29,'');
$per ->f1();
$per -> sautligne (17);
?>



