<?php
$per ->h(1,570,190,'List Décés Hospitaliers BE');
$per -> sautligne (5);
echo "<form ALIGN=\"center\" action=\"./DECES/LISTDECESPDF.php\" method=\"post\">";
echo "<hr size=8 width=\"700\" COLOR=\"#C0C0C0\">";
echo"<p> DU<select name=\"jour\">";$per ->jours();
echo" </select><select name=\"mois\">";$per->mois();
echo" </select><select name=\"annee\">";$per->anee();
echo"</select></p><p>AU<select name=\"jour1\">";$per->jours();
echo"</select><select name=\"mois1\">"; $per->mois();
echo" </select><select name=\"annee1\">"; $per->anee();
echo"</select></p>";
echo"<hr size=8 width=\"700\" COLOR=\"#C0C0C0\"> ";
echo"<p><input type=\"submit\" value=\" Afficher List Décés Hospitaliers\" /></p>  </form>";
echo"<hr size=8 width=\"700\" COLOR=\"#C0C0C0\">";
$per -> sautligne (7);
//
?>

  
  
  

