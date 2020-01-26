<?php
$per ->h(1,500,170,'Séance  D\'hémodialyse');
$per ->f0('index.php?uc=SHEMO','post');//./HEMO/FHEMO1.php

$per ->fieldset("field1","***");$per ->fieldset("field5","***");
$per ->fieldset("field11","***");
$per ->photosx(1080,390,'dialyse',150,150);
$per-> mysqlconnect();$per ->submit(1050,315,'Enregistré Séance D \'hemodialyse');
$id  = $_GET["idp"] ;
$sql = "SELECT * FROM hemo WHERE id = ".$id ;
$requete = mysql_query( $sql ) ; 
if( $result = mysql_fetch_object( $requete ) )
{
$x=250;
$per ->label(50,$x,'Non :');                   $per ->txt(120,$x,'NOM',20,$result->NOM);
$per ->label(350,$x,'Prenom :');               $per ->txt(470-40,$x,'PRENOM',20,$result->PRENOM);
$per ->label(50,$x+30,'Date :');               $per ->txt(120,$x+30,'DATE',20,date("Y-m-d"));
$per ->label(350,$x+30,'Heure :');             $per ->txt(470-40,$x+30,'HEUR',20,date("H:i"));
$per ->label(50,$x+60,'Diagnostic');           $per ->txt(120,$x+60,'CAUSEMALAD',72,$result->CAUSEMALAD);
$per ->label(50,$x+90,'Date 1ere dialyse');    $per ->txt(180,$x+90,'DATE1ERSEA',10,$result->DATE1ERSEA);
$per ->label(650,$x,'Poids :');                $per ->txt(720,$x,'POIDS',26,$result->POIDS);
$per ->label(350,$x+90,'Service');             $per ->txt(430,$x+90,'SERVICE',20,"HEMODIALYSE");
$per ->label(650,$x+30,'Groupage');            $per ->txt(720,$x+30,'GROUPAGE',3,$result->GRABO);   //
$per ->label(800,$x+30,'rhesus');              $per ->txt(728+130,$x+30,'RHESUS',3,$result->GRRH);
$per ->label(650,$x+60,'hemoglobine');         $per ->txt(770,$x+60,'HEMOGLOBINE',18,'0'); //
$per ->label(650,$x+90,'Matricule/Dossier');   $per ->txt(770,$x+90,'MATRICULE',5,'x'); $per ->txt(850,$x+90,'DOSSIER',5,'x');


$per ->label(50,$x+140,'Heure Debut De Dialyse :');     $per ->txt(234,$x+140,'HEUREDD',1,date("H:i"));  
$per ->label(50,$x+170,'Poids :');                      $per ->txt(100,$x+170,'POIDSD',5,"0");          
$per ->label(50+160,$x+170,'SYS :');                    $per ->txt(100+160,$x+170,'SYSD',5,"0");            
$per ->label(50+160+160,$x+170,'DIA:');                 $per ->txt(100+160+160,$x+170,'DIAD',5,"0");            
// $per ->label(50,$x+170,'T°:');                          $per ->txt(120,$x+170,'TD',5,"0");             

$per ->label(50,$x+205,' Heure Fin De Dialyse :');      $per ->txt(234,$x+205,'HEUREFD',1,date("H:i")); 
$per ->label(50,$x+235,'Poids :');                      $per ->txt(100,$x+235,'POIDSF',5,"0");          
$per ->label(50+160,$x+235,'SYS :');                    $per ->txt(100+160,$x+235,'SYSF',5,"0");            
$per ->label(50+160+160,$x+235,'DIA:');                 $per ->txt(100+160+160,$x+235,'DIAF',5,"0");   
// $per ->label(350,$x+260,'T°:');                          $per ->txt(430,$x+260,'TF',20,"0");

 

$per ->label(650,$x+140,'Parametres De Dialyse : '.$result->NOM);
$per ->label(650,$x+170,'Type De Dialyse :');  $per ->combov(770,$x+170,'TYPEDIA',array("PROGRAMME","URGENCE")); 
$per ->label(650,$x+200,'Appareil Utilise:');  $per ->txt(770,$x+200,'NAPP',18,$result->NLIT); 
$per ->label(650,$x+230,'Acces Sang :');       $per ->combov(770,$x+230,'ACCSANG',array("FAV","CCJ","CCF","PER"));  
$per ->label(650,$x+260,'Infirmier :');        $per ->txt(770,$x+260,'IDE',18,"x"); 
$per ->hide(595,90,'idp',20,$_GET["idp"]); 
$per ->hide(595,90,'SEXE',20,$result->SEX); 
$per ->hide(595,90,'DATENAISSANCE',20,$result->DATENAISSA);
$per ->url(830+212,250,"index.php?uc=SMHEMO&idp=".$_GET["idp"],"Suivi Du Patient Hémodialyse","3");  
}
$per ->f1();
$per -> sautligne (19);
//Quantité d'hémoglobine à donner = (Objectif taux Hb - taux Hb mesuré) x 10 x (poids x 75) (en g) 
?>
<!-- 
Exemples de désactivations :<br /><br />
<input type="checkbox" id="chkb_1" onClick="GereControle('chkb_1', 'texte_1', '0');" CHECKED>&nbsp;<label for="chkb_1">Contrôle de "texte_1"</label>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<input type="text" id="texte_1" value="Contenu de texte_1">

<br /><br />
<input type="radio" id="radio_1" name="radios" onClick="GereControle('radio_1', 'liste_1', '0');" CHECKED>&nbsp;<label for="radio_1">Active de "liste_1"</label>
<br />
<input type="radio" id="radio_2" name="radios" onClick="GereControle('radio_1', 'liste_1', '0');">&nbsp;<label for="radio_2">Désactive de "liste_1"</label>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<select id="liste_1">
	<option value="1">Ligne 1</option>
	<option value="2">Ligne 2</option>
	<option value="3">Ligne 3</option>
</select>

<br /><br /><br /><br />
Exemples de masquage :<br /><br />

<input type="checkbox" id="chkb_10" onClick="GereControle('chkb_10', 'texte_10', '1');" CHECKED>&nbsp;<label for="chkb_10">Contrôle de "texte_10"</label>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<input type="text" id="texte_10" value="Contenu de texte_10">

<br /><br />
<input type="radio" id="radio_10" name="radios_0" onClick="GereControle('radio_10', 'liste_10', '1');" CHECKED>&nbsp;<label for="radio_10">Active de "liste_10"</label>
<br />
<input type="radio" id="radio_20" name="radios_0" onClick="GereControle('radio_10', 'liste_10', '1');">&nbsp;<label for="radio_20">Désactive de "liste_10"</label>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<select id="liste_10">
	<option value="1">Ligne 1</option>
	<option value="2">Ligne 2</option>
	<option value="3">Ligne 3</option>
</select>
<noscript><a href="http://www.editeurjavascript.com/countus/">compteur live</a></noscript>
 -->
