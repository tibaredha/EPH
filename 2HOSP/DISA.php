<?php
$per ->h(1,230,170,'Demande De Distribution De Produits Sanguins Labiles   CGR / PFC / CPS ');
$per ->f0('./2HOSP/fdis.php','post');

$per ->fieldset("field1","***");$per ->fieldset("field5","***");
$per ->fieldset("field11","***");
$per ->submit(1080,312,'Enregistrer Demande PSL');
$per ->photosx(1080,390,'PRELEVEMENT',150,150);
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
$per ->label(50,$x+60,'Diagnostic');           $per ->txt(120,$x+60,'DIAGNOSTIC',72,$result->DGC);
$per ->label(50,$x+90,'Entrée le');            $per ->txt(120,$x+90,'DUREE',20,$result->DATE);
$per ->label(650,$x,'Poids :');                $per ->txt(720,$x,'Poids',27,"70");
$per ->label(350,$x+90,'Service');             $per ->txt(430,$x+90,'SERVICE',20,$per->nbrtostring("grh","service","ids",$result->SERVICEHOSP,"servicefr"));
$per ->label(650,$x+31,'Groupage');            $per ->combov(720,$x+30,'GROUPAGE',array("A","B","AB","O")); //
$per ->label(650+137,$x+31,'Rhésus');          $per ->combov(720+130,$x+30,'rhesus',array("Positif", "negatif")); //
$per ->label(650,$x+60,'hemoglobine');         $per ->txt(770,$x+60,'hemoglobine',18,'07'); //
$per ->label(650,$x+90,'Matricule/Dossier');   $per ->txt(770,$x+90,'MATRICULE',5,'x'); $per ->txt(850,$x+90,'DOSSIER',5,'x');
$per ->label(50,$x+150,'Polytransfusé'); 
$per ->label(180,$x+150,'Non');                $per ->radioed(180+30,$x+150,"POLYTRANSFUSE","NON");    
$per ->label(180+60,$x+150,'Oui');             $per ->radio(180+90,$x+150,"POLYTRANSFUSE","OUI");  
$per ->label(350,$x+150,'DDTR');               $per ->datetime (430,$x+150,'DDT');  
$per ->label(50,$x+180,'Réaction Ant'); 
$per ->label(180,$x+180,'Non');                $per ->radioed(180+30,$x+180,"RTA","NON");    
$per ->label(180+60,$x+180,'Oui');             $per ->radio(180+90,$x+180,"RTA","OUI");  
$per ->label(350,$x+180,'Type');               $per ->combov(430,$x+180,'TYPE',array("","INFECTIEUSE","IMMUNO-ALLE")); //
$per ->label(50,$x+180+30,'Date DRAI');        $per ->datetime (180,$x+180+30,'DRAI'); 
$per ->label(350,$x+180+30,'Resultat');        $per ->txt(430,$x+180+30,'RES',20,'x'); 
$per ->label(50,$x+180+60,'Nombre de grossesses antérieures:');        $per ->txt(430,$x+180+60,'NBRG',20,'0'); 
//****************************************************************************************************************************************//
$per ->label(650,$x+150,'Concentre Globule Rouge');        $per ->combov(860,$x+150,'CGR',array("O", "X")); $per ->txt(910,$x+150,'QCGR',1,'0'); //
$per ->label(650,$x+180,'Plasma Frais Congelé');           $per ->combov(860,$x+180,'PFC',array("O", "X")); $per ->txt(910,$x+180,'QPFC',1,'0'); //
$per ->label(650,$x+210,'Concentre Plaquettaire Standard');$per ->combov(860,$x+210,'CPS',array("O", "X")); $per ->txt(910,$x+210,'QCPS',1,'0'); //
$per ->hide(595,90,'idp',20,$_GET["idp"]); 
$per ->hide(595,90,'SEXE',20,$result->SEXE); 
$per ->hide(595,90,'DATENAISSANCE',20,$result->DATENAISSANCE);
$per ->hide(595,90,'WILAYA',20,$result->WILAYA);
$per ->hide(595,90,'COMMUNE',20,$result->COMMUNE);
$per ->hide(595,90,'IDSERVICE',20,$result->SERVICEHOSP); 
$per ->url(790+270,250,"index.php?uc=SMH&idp=".$_GET["idp"],"Suivi Du Patient Hospitalise","3");  
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
