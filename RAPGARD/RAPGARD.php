<?php
$per ->h(1,600,190,'Rapport De Garde ');
$per -> sautligne (5);
echo "<form ALIGN=\"center\" action=\"./RAPGARD/RAPGARD1.PHP\" method=\"post\">";
echo "<hr size=8 width=\"700\" COLOR=\"#C0C0C0\">";
echo"<p> DU<select name=\"jour\">";$per ->jours();
echo" </select><select name=\"mois\">";$per ->mois();
echo" </select><select name=\"annee\">";$per ->anee();
echo"</select></p><p>AU<select name=\"jour1\">";$per ->jours();
echo"</select><select name=\"mois1\">"; $per ->mois();
echo" </select><select name=\"annee1\">"; $per ->anee();
echo"</select></p>";
echo"<hr size=8 width=\"700\" COLOR=\"#C0C0C0\"> ";
echo"<p><input type=\"submit\" value=\"Imprimer Rapport De Garde\" /></p>  </form>";
echo"<hr size=8 width=\"700\" COLOR=\"#C0C0C0\">";
$per -> sautligne (7);
?>

  
  
  

