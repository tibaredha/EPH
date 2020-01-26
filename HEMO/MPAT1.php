<?php 
$per ->h(2,500,180,'MODIFIER PATIENT HEMODIALYSE');
$per -> sautligne (2);
$per ->fieldset("field1","Donnees de l'état civil");$per ->fieldset("field5","***");
$per ->fieldset("field2","Adresse de residence");
$per ->fieldset("field3","Diagnostic");
$per ->fieldset("field4","Qualifiquation Immuno-Hematologie-Serologie");
$per ->f0('index.php?uc=MNHEMO2','post');
$per ->submit(1110,525,'Enregistrer Patient');
$per-> mysqlconnect();
$id  = $_GET["idp"] ;
$sql = "SELECT * FROM hemo WHERE ID = ".$id ;
$requete = mysql_query( $sql ) ; 
if( $result = mysql_fetch_object( $requete ) )
{
$per ->label(40,250,'MODIFIER PATIENT HEMODIALYSE');                 
$per ->label(370,250,'Date');                    $per ->txt(430,250,'DATE',15,date("d-m-Y"));
$per ->label(570,250,'H:');                      $per ->txt(600,250,'HEURE',4,date("H:i"));
$per ->label(740,250,'Poids');                   $per ->txt(830,250,'POIDS',10,'70');
$per ->label(40,280,'Nom');                      $per ->txt(120,280,'NOM',32,$result->NOM);
$per ->label(370,280,'Prénom');                  $per ->txt(430,280,'PRENOM',32,$result->PRENOM);
$per ->label(740,280,'Sexe');                    $per ->txt(830,280,'SEXE',10,$result->SEX);
$per ->label(40,310,'fils de');                  $per ->txt(120,310,'FILS',32,$result->FILS);
$per ->label(370,310,'et de');                   $per ->txt(430,310,'ETDE',32,$result->ETDE);
$per ->label(740,310,'Né(e) Le');                $per ->txt(830,310,'DATENAISSANCE',10,$result->DATENAISSA); 
$per ->label(40,340,'*Wilaya de naissance');     $per ->WILAYAN(180,340,'WILAYANFR','gpts2012','wil'); //$per ->txt(180,340,'WILAYANFR',10,$result->WILAYA);   // 
$per ->label(370,340,'*Commune de naissance');   $per ->COMMUNEN(530,340,'COMMUNENFR');//$per ->txt(530,340,'COMMUNENFR',10,$result->COMMUNE);  //            
$per ->label(40,370+25,'*Wilaya ');              $per ->WILAYAR(180,370+25,'WILAYAR','gpts2012','wil'); //$per ->txt(180,370+25,'WILAYAR',10,$result->WILAYAR);  //
$per ->label(370,370+25,'*Commune ');            $per ->COMMUNER(530,370+25,'COMMUNER'); //$per ->txt(530,370+25,'COMMUNER',10,$result->COMMUNER); //          
$per ->label(740,370+25,'*Adresse ');            $per ->txt(800,370+25,'ADRESSE',22,$result->ADRESSE);
$per ->label(40,450,'Cause IRCT');               $per ->txt(180,445,'DGC',62,$result->CAUSEMALAD);
$per ->label(740,450,'N° du lit  ');             $per ->txt(800,450,'NLIT',22,$result->NLIT);
$per ->label(740,340,'1ere dialyse');            $per ->txt(830,340,'DATEDIALYSE',10,$result->DATE1ERSEA);
$per ->label(40,450+60,'ABO');                   $per ->combov(80,450+60,'GROUPAGE',array("A","B","AB","O")); // $per ->txt(80,450+60,'GROUPAGE',3,$result->GRABO);
$per ->label(160,450+60,'RHESUS');               $per ->combov(240,450+60,'rhesus',array("Positif","negatif"));// $per ->txt(240,450+60,'rhesus',6,$result->GRRH); // 
$per ->label(370,450+60,'HVB');                  $per ->combov(370+40,450+60,'HVB',array("negatif","douteux","Positif")); //$per ->txt(370+40,450+60,'HVB',6,$result->HVB); // 
$per ->label(470+40,450+60,'HVC');               $per ->combov(470+80,450+60,'HVC',array("negatif","douteux","Positif")); //$per ->txt(470+80,450+60,'HVC',6,$result->HVC); // 
$per ->label(570+80,450+60,'HIV');               $per ->combov(570+120,450+60,'HIV',array("negatif","douteux","Positif")); //$per ->txt(570+120,450+60,'HIV',6,$result->HIV); //
$per ->label(670+120,450+60,'VDRL');             $per ->combov(670+170,450+60,'TPHA',array("negatif","douteux","Positif")); //$per ->txt(670+170,450+60,'TPHA',6,$result->SYPHI); // 
$per ->hide(595,90,'idp',20,$_GET["idp"]); 
}
$per ->url(790+230,250,"index.php?uc=LISTMHEMO","LISTE PATIENT HEMODIALYSE","3"); 
$per ->f1();
$per -> sautligne (17);
 ?>

