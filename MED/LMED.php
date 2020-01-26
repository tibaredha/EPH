
<script type="text/javascript" language="javascript">
function ConfirmDeleteMessage(URL)
{
   if (confirm("Confirmez-vous la suppression ?"))
   {
       window.location = URL;
   }
}
</script>

<?php
$per-> mysqlconnect();
$query_liste = "SELECT * FROM T21 ORDER BY dci ";
$requete = mysql_query( $query_liste ) or die( "ERREUR MYSQL num곯: ".mysql_errno()."<br>Type de cette erreur: ".mysql_error()."<br>\n" );
$totalmbr1=mysql_num_rows($requete);
?>
<br>
<h2  align="center" class="hfgh"> Liste Nominative Des Medicaments En Nombre De  <?php ECHO $totalmbr1; ?>  Medicaments </h2>

<?php

echo( "<table width=\"90%\" border=\"0\" cellpadding=\"1\" cellspacing=\"1\" align=\"center\">\n" );
echo( "<tr>
<td class=\"ligne\"><div align=\"center\"><font  color=\"#FFFFFF\">Code</div></td>
<td class=\"ligne\"><div align=\"center\"><font  color=\"#FFFFFF\">Dci</div></td>
<td class=\"ligne\"><div align=\"center\"><font  color=\"#FFFFFF\">Presentation</div></td>
<td class=\"ligne\"><div align=\"center\"><font  color=\"#FFFFFF\">posologie</div></td>
<td class=\"ligne\"><div align=\"center\"><font  color=\"#FFFFFF\">Prix</div></td>
<td class=\"ligne\"><div align=\"center\"><font  color=\"#FFFFFF\">Modification</div></td>
</tr>" ); 
echo( "<form action=\"index.php?uc=cheked \" method=\"post\" name=\"form1\">"); 
while( $result = mysql_fetch_array( $requete ) )
{
echo( "<tr bgcolor=\"#E6E6E6\" >\n" );
//supression desactive
//echo( "<td><div align=\"center\">"."<a title=\" الحذف النهائي من قاعدة البيانات \" href=\"\"  onclick=\"ConfirmDeleteMessage('index.php?uc=SUPGRH&idp=".$result["idp"]."'); return false;\"><img src='./images/b_empty.png' width='16' height='16' border='0' alt=''  /></a>"."</div></td>\n" );

echo( "<td class=\"ligne1\"  ><div align=\"left\">".$result["code"]."</div></td>\n" );
//echo( "<td><div align=\"center\"><img src='./images/Button Square.png' width='16' height='16' border='0' alt=''/></div></td>\n" );
//echo ("<td align=center><input type='checkbox' name='state[]' value=".$result["idp"]."></td>");
echo( "<td><div align=\"LEFT\">".$result["dci"]."</div></td>\n" );
echo( "<td><div align=\"LEFT\">".$result["pre"]."</div></td>\n" );
echo( "<td ><div align=\"LEFT\">".$result["dose"]."</div></td>\n" );

echo( "<td ><div align=\"LEFT\">".$result["prix"]."</div></td>\n" );
echo( "<td class=\"ligne1\"  ><div align=\"center\">"."<a title=\"gestion medicament \"href=\"index.php?uc=MMED&idp=".$result["ID"]."&Nomlatin=".$result["code"]."&Prenom_Latin=".$result["dci"]."&Sexe=".$result["pre"]."\"><img src='./images/s_reload.png' width='16' height='16' border='0' alt=''/></a>"."</div></td>\n" );
echo( "</tr>\n" );
} 
//echo( "<h2 align=\"center\"  ><input type=\"submit\" name=\"VALIDER\" value=\"إختار\" /></h2>"); 
echo( "<tr>

<td class=\"ligne\"><div align=\"center\"><font  color=\"#FFFFFF\">Code</div></td>
<td class=\"ligne\"><div align=\"center\"><font  color=\"#FFFFFF\">Dci</div></td>
<td class=\"ligne\"><div align=\"center\"><font  color=\"#FFFFFF\">Presentation</div></td>
<td class=\"ligne\"><div align=\"center\"><font  color=\"#FFFFFF\">posologie</div></td>
<td class=\"ligne\"><div align=\"center\"><font  color=\"#FFFFFF\">Prix</div></td>
<td class=\"ligne\"><div align=\"center\"><font  color=\"#FFFFFF\">Modification</div></td>
</tr>" ); 
echo( "</form >"); 
echo( "</table><br>\n" );
mysql_free_result($requete);
?>

