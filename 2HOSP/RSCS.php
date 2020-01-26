<?php 
$per ->h(1,350,170,'Resumer Standard Et Clinique De Sortie Du Malade ');
$per ->f0('./2HOSP/RSS.php','post');
$per ->fieldset("field1","***");$per ->fieldset("field5","***");
$per ->fieldset("field11","***");
$per ->submit(1105,312,'Imprimer RSCS');
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
$per ->label(50,$x+60,'Diagnostic');           $per ->txt(120,$x+60,'DGC',72,$result->DGC);
$per ->label(50,$x+90,'Entree le');            $per ->txt(120,$x+90,'DUREE',20,$result->DATE);
$per ->label(650,$x,'Poids :');                $per ->txt(720,$x,'Poids',20,"70");
$per ->label(350,$x+90,'Service');             $per ->txt(470-40,$x+90,'DUREE',20,$per->nbrtostring("grh","service","ids",$result->SERVICEHOSP,"servicefr"));


$per ->label(50,$x+90+50,'Matricule');                     $per ->txt(200,$x+90+50,'M',20,'0');
$per ->label(50,$x+90+50+30,'Numero de dossier');          $per ->txt(200,$x+90+50+30,'ND',20,'0');
$per ->label(50,$x+90+50+60,'Mode De Sortie:');            $per ->txt(200,$x+90+50+60,'MDS',20,'N');
$per ->label(50,$x+90+50+90,'Sortie De L\'hopital Le:');   $per ->txt(200,$x+90+50+90,'DSH',20,date('Y-m-d'));



$per ->label(390,$x+90+50,'Motif D\'hospitalisation:');        $per ->txt(600,$x+90+50,'MH',40,$result->DGC);
$per ->label(390,$x+90+50+30,'Diagnostic Principal De Sortie');$per ->txt(600,$x+90+50+30,'DPS',40,$result->DGC);
$per ->label(390,$x+90+50+60,'Diagnostic Associes1');          $per ->txt(600,$x+90+50+60,'DA1',40,'X');
$per ->label(390,$x+90+50+90,'Diagnostic Associes2');          $per ->txt(600,$x+90+50+90,'DA2',40,'X');
$per ->label(390,$x+90+50+90+30,'Diagnostic Associes3');       $per ->txt(600,$x+90+50+90+30,'DA3',40,'X');

$per ->hide(595,$x+90,'NOM',20,$result->NOM);
$per ->hide(595,$x+90,'PRENOM',20,$result->PRENOM);
$per ->hide(595,$x+90,'DATENAISSANCE',20,$result->DATENAISSANCE);
$per ->hide(595,$x+90,'AGE',20,$result->AGE);
$per ->hide(595,$x+90,'FILS',20,$result->FILS);
$per ->hide(595,$x+90,'ETDE',20,$result->ETDE);
$per ->hide(595,$x+90,'COMMUNE',20,$result->COMMUNE);
$per ->hide(595,$x+90,'WILAYA',20,$result->WILAYA);
$per ->hide(595,$x+90,'COMMUNER',20,$result->COMMUNER);
$per ->hide(595,$x+90,'WILAYAR',20,$result->WILAYAR);
$per ->hide(595,$x+90,'ADRESSE',20,$result->ADRESSE);
$per ->hide(595,$x+90,'SEXE',20,$result->SEXE);
$per ->hide(595,$x+90,'SERVICEHOSP',20,$result->SERVICEHOSP);
$per ->hide(595,$x+90,'PRATICIEN',20,$result->PRATICIEN);
$per ->hide(595,$x+90,'DATE',20,$result->DATE);
$per ->hide(595,$x+90,'HEURE',20,$result->HEURE);
$per ->hide(595,$x+90,'id',20,$id);
 

$per ->url(790+270,250,"index.php?uc=SMH&idp=".$_GET["idp"],"Suivi Du Patient Hospitalise","3");  
}
$per ->f1();
$per -> sautligne (20);
?>  
