
      <style type="text/css">    
      .tableaux_centrer {
          -moz-border-radius: 5px;
          border-radius: 5px; 
          border: 1px solid #ff7800;
          font-size:2.7em;
          text-align:center;
          margin:auto;    
      }
      .today{
          font-weight:bold;
          color:#C00;
          background:#e6dede;
      }
      .cell_vide {
          background:#f1eded;
      }
      .dimanche{
          background:#e6dede;
          font-weight:bold;
      }
      .calendar { 
          background:#e6dede;
      }
      </style> 
     


<?php
$def_mois = array ("","Janvier","Février","Mars","Avril","Mai","Juin","Juillet","Août","Septembre","Octobre","Novembre","Décembre");

// Si pas de date demandée, aujoud'hui par défaut
if (isset($_GET['mois'])) { $mois = $_GET['mois']; } else { $mois = date("n"); }
if (isset($_GET['an']))   { $an = $_GET['an']; } else { $an = date("Y"); }
$jour = date("d");
        

// Tableau
echo "<form action=\"index.php?uc=calendrier\" method=\"get\">\n";
echo "<table border=\"0\" cellspacing=\"1\" cellpadding=\"17\" class=\"tableaux_centrer\" width=\"20%\">\n";

// ----------------------- Navigation / prec. | mois affiché | suiv. -----------------------
if ($mois == 1) $prec = "index.php?uc=calendrier&mois=12&an=".($an-1);
else $prec = "index.php?uc=calendrier&mois=".($mois-1)."&an=".$an;
if ($mois == 12) $suiv = "index.php?uc=calendrier&mois=1&an=".($an+1);
else $suiv = "index.php?uc=calendrier&mois=".($mois+1)."&an=".$an;
echo "<tr class=\"calendar\"><td><a href=".$prec.">&lt;</a></td><td colspan=\"5\">".$def_mois[$mois]." ".$an."</td><td><a href=".$suiv.">&gt;</td></tr>\n";
// ----------------------- Fin Navigation -----------------------  

// ----------------------- Affichage formulaire de choix --------------------
echo "<tr class=\"calendar\"><td colspan=\"7\">";
// mois
echo"<select name=\"mois\">\n";
for ($i=1;$i<=12;$i++) {
    if ( ($i) == $mois ) { $selected = "selected"; } else { $selected = ""; };
    echo"<option value=\"".$i."\" ".$selected.">".$def_mois[$i]."</option>\n";
}
echo "</select>\n";
// annee
echo "<select name=\"an\">\n";
for ($i=2050;$i>=1990;$i--) {
    if (($i)==$an) { $selected = "selected"; } else { $selected = ""; };
    echo("<option value=\"".$i."\" ".$selected.">".$i."</option>\n");
}
echo "</select>\n";
echo "<input type=\"submit\" class=\"submit\" value=\"ok\" />\n";    
echo "</td></tr>\n";
// ----------------------- Fin Affichage formulaire de choix --------------------

// ----------------------- Affichage calendrier -----------------------
// Premier jour et nb de jour du mois demandé
$debut = mktime(0,0,0,$mois,1,$an);    
$premJour = date("w" , $debut );
$nbJours = date("t" , $debut);    // nb de jours dans le mois
$numero_semaine=date("W");
$jour_semaine=date("w",mktime(0,0,0,$mois,1,$an)); // Jour de la semaine au format numérique 0 (pour dimanche) à 6 (pour samedi)

echo "<tr class=\"calendar\"><td>Lu</td><td>Ma</td><td>Me</td><td>Je</td><td>Ve</td><td>Sa</td><td>Di</td></tr>\n";
$nbEmptyCells = ($premJour + 6)%7;
echo "<tr>" ;
// Affichage des premières cellules vides
for ($i=1;$i<=$nbEmptyCells;$i++) {
    echo "<td class=\"cell_vide\">&nbsp;</td>\n";
}
// Affichage des jours du mois
for ($i=1;$i<=$nbJours;$i++) {
    // Dimanche
    $dimanche=($i+$jour_semaine-1)%7;
    // test si jour d'aujourd'hui
    if ( $i==$jour && $mois == date("m") && $an == date("Y") ) {
        echo "<td class=\"today\">".$i."</td>\n";
    }
    else if ($dimanche==0) {
        echo "<td class=\"dimanche\">".$i."</td>\n";    
    }
    else {
        echo "<td class=\"calendar\">".$i."</td>\n";
    }
    // Changement de ligne
    if ( ($i+$nbEmptyCells)%7 == 0 ) {
        echo "</tr>\n<tr>";
    }
}
// Affichage des dernières cellules vides
$nbEmptyCells = 7 - ($nbEmptyCells + $nbJours)%7;
if ($nbEmptyCells < 7) {
    for ($i=1;$i<=$nbEmptyCells;$i++) {
        echo "<td class=\"cell_vide\">&nbsp;</td>\n";
    }
    echo "</tr>\n";
}
if ($mois == date("n") and $an == date("Y") ) {
    echo "<tr><td colspan=\"7\" class=\"calendar\">Semaine N° ".$numero_semaine."</td></tr>\n";
}
echo "</table>\n</form>";
// ----------------------- Fin Affichage calendrier -----------------------
?>
       
