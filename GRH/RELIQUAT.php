
<?php 
$per ->h(1,450,170,'الباقى من العطلة السنوية للمستخدمين ');
$per -> sautligne (4);
$per-> mysqlconnect();
//remarque la clause (and rnvgradear !=172)  a ete ajoute pour selection des titulaire 
$query_liste = "SELECT * FROM grh  where cessation !='y' and rnvgradear !=172 and rnvgradear !=186 and rnvgradear !=187 order by Nomlatin ";
$requete = mysql_query( $query_liste ) or die( "ERREUR MYSQL num곯: ".mysql_errno()."<br>Type de cette erreur: ".mysql_error()."<br>\n" );
$totalmbr1=mysql_num_rows($requete);
echo( "<table width=\"75%\" border=\"0\" cellpadding=\"1\" cellspacing=\"1\" align=\"center\">\n" );
echo( "<tr>
<td bgcolor=\"#993333\"><div align=\"center\"><font  color=\"#FFFFFF\">Nom</div></td>
<td bgcolor=\"#993333\"><div align=\"center\"><font  color=\"#FFFFFF\"><font face=\"Verdana, Arial, Helvetica, sans-serif\" size=\"-1\" color=\"#FFFFFF\">Prénom</div></td>
<td bgcolor=\"#993333\"><div align=\"center\"><font  color=\"#FFFFFF\"><img src='./images/Button Stop.png' width='16' height='16' border='0' alt=''/></div></td>
<td bgcolor=\"#993333\"><div align=\"center\"><font  color=\"#FFFFFF\">الاب</div></td>
<td bgcolor=\"#993333\"><div align=\"center\"><font  color=\"#FFFFFF\">الاسم</div></td>
<td bgcolor=\"#993333\"><div align=\"center\"><font  color=\"#FFFFFF\">اللقب</div></td>
<td bgcolor=\"#993333\"><div align=\"center\"><font  color=\"#FFFFFF\">الباقى من العطلة السنوية</div></td>
<td bgcolor=\"#993333\"><div align=\"center\"><font  color=\"#FFFFFF\">تعديل</div></td>
</tr>" ); 
echo( "<form action=\"index.php?uc=cheked \" method=\"post\" name=\"form1\">"); 
while( $result = mysql_fetch_array( $requete ) )
{
echo( "<tr bgcolor=\"#E6E6E6\" >\n" );
//supression desactive
echo( "<td><div align=\"left\">".$result["Nomlatin"]."</div></td>\n" );
echo( "<td><div align=\"left\">".$result["Prenom_Latin"]."</div></td>\n" );
echo( "<td><div align=\"center\"><img src='./images/Button Square.png' width='16' height='16' border='0' alt=''/></div></td>\n" );
echo( "<td><div align=\"right\">".$result["pere"]."</div></td>\n" );
echo( "<td><div align=\"right\">".$result["Prenom_Arabe"]."</div></td>\n" );
echo( "<td ><div align=\"right\">".$result["Nomarab"]."</div></td>\n" );
echo( "<td ><div align=\"center\">".$result["QUT"]."</div></td>\n" );
echo( "<td><div align=\"center\">"."<a title=\"تعديل \"href=\"index.php?uc=MAJRESTCONG&idp=".$result["idp"]."&Nomlatin=".$result["Nomarab"]."&Prenom_Latin=".$result["Prenom_Arabe"]."&Sexe=".$result["Sexe"]."\"><img src='./images/s_reload.png' width='16' height='16' border='0' alt=''/></a>"."</div></td>\n" );
echo( "</tr>\n" );
} 
echo( "<tr>
<td bgcolor=\"#993333\"><div align=\"center\"><font  color=\"#FFFFFF\">Nom</div></td>
<td bgcolor=\"#993333\"><div align=\"center\"><font  color=\"#FFFFFF\"><font face=\"Verdana, Arial, Helvetica, sans-serif\" size=\"-1\" color=\"#FFFFFF\">Prénom</div></td>
<td bgcolor=\"#993333\"><div align=\"center\"><font  color=\"#FFFFFF\"><img src='./images/Button Stop.png' width='16' height='16' border='0' alt=''/></div></td>
<td bgcolor=\"#993333\"><div align=\"center\"><font  color=\"#FFFFFF\">الاب</div></td>
<td bgcolor=\"#993333\"><div align=\"center\"><font  color=\"#FFFFFF\">الاسم</div></td>
<td bgcolor=\"#993333\"><div align=\"center\"><font  color=\"#FFFFFF\">اللقب</div></td>
<td bgcolor=\"#993333\"><div align=\"center\"><font  color=\"#FFFFFF\">الباقى من العطلة السنوية</div></td>
<td bgcolor=\"#993333\"><div align=\"center\"><font  color=\"#FFFFFF\">تعديل</div></td>
</tr>" ); 
echo( "</form >"); 
echo( "</table><br>\n" );
mysql_free_result($requete);
?>

