<?php
$per ->h(1,380,190,'Activite Laboratoire d\'Hemodialyse Sérologie');
$per -> sautligne (5);
echo "<form ALIGN=\"center\" action=\"./HEMO/HEMOPDFS.php\" method=\"post\">";
echo "<hr size=8 width=\"700\" COLOR=\"#C0C0C0\">";
echo"<p> DU<select name=\"jour\">";$per ->jours();
echo" </select><select name=\"mois\">";$per ->mois();
echo" </select><select name=\"annee\">";$per ->anee();
echo"</select></p><p>AU<select name=\"jour1\">";$per ->jours();
echo"</select><select name=\"mois1\">"; $per ->mois();
echo" </select><select name=\"annee1\">"; $per ->anee();
echo"</select></p>";
echo"<hr size=8 width=\"700\" COLOR=\"#C0C0C0\"> ";
echo"<p><input type=\"submit\" value=\"imprimer Activite Laboratoire Sérologie \" /></p>  </form>";
echo"<hr size=8 width=\"700\" COLOR=\"#C0C0C0\">";
$per -> sautligne (7);
?>

  
  
  

