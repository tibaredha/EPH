
<?php
$per-> mysqlconnect();
mysql_query("SET NAMES 'UTF8' ");
$query_liste = "SELECT * FROM grh    order by CONTAG desc ";
$requete = mysql_query( $query_liste ) or die( "ERREUR MYSQL num곯: ".mysql_errno()."<br>Type de cette erreur: ".mysql_error()."<br>\n" );
?>

<br>
<br>

<h2  align="center" class="hfgh"> القائمة الاسمية للمستخدمين  ضمان الاجتماعي </h2>

<?php
echo( "<table border=\"1\" cellpadding=\"1\" cellspacing=\"1\" align=\"center\">\n" );
echo( "<tr>
<td class=\"ligne\"><div align=\"center\">idp</div></td>
<td class=\"ligne\"><div align=\"center\">nom</div></td>
<td class=\"ligne\"><div align=\"center\">prenom</div></td>
<td class=\"ligne\"><div align=\"center\">situation familiale</div></td>
<td class=\"ligne\"><div align=\"center\">nbr enfant</div></td>
<td class=\"ligne\"><div align=\"center\">alloction fa</div></td>
<td class=\"ligne\"><div align=\"center\">conjoint</div></td>
<td class=\"ligne\"><div align=\"center\">nss</div></td>
<td class=\"ligne\"><div align=\"center\">ccp</div></td>
<td class=\"ligne\"><div align=\"center\">modifier</div></td>
</tr>" ); 
while( $result = mysql_fetch_array( $requete ) )
{
echo( "<tr>\n" );
//echo( "<td><div align=\"right\">"."<a href=\"MODGRH1PF.php?idp=".$result["idp"]."\">Modifier</a>"."</div></td>\n" );
echo( "<td><div align=\"left\">".$result["idp"]."</div></td>\n" );
echo( "<td><div align=\"left\">".$result["Nomlatin"]."</div></td>\n" );
echo( "<td><div align=\"left\">".$result["Prenom_Latin"]."</div></td>\n" );
echo( "<td><div align=\"CENTER\">".$per->nbrtostring("grh","sfamiliale","idsfamiliale",$result["Situation_familliale"],"sfamilialefr")."</div></td>\n" );
echo( "<td><div align=\"CENTER\">".$result["NBRENF"]."</div></td>\n" );
echo( "<td><div align=\"CENTER\">".$result["ALLF"]."</div></td>\n" );
echo( "<td><div align=\"CENTER\">".$result["CONJOINT"]."</div></td>\n" );
echo( "<td><div align=\"CENTER\">".$result["NSS"]."</div></td>\n" );
echo( "<td><div align=\"CENTER\">".$result["CONTAG"]."</div></td>\n" );//NCCP  
echo( "<td><div align=\"CENTER\">"."<a href=\"index.php?uc=MSAA&idp=".$result["idp"]."\"><img src='./images/E.png' width='16' height='16' border='0' alt=''/></a>"."</div></td>\n" );
echo( "</tr>\n" );
} 
echo( "<tr>
<td class=\"ligne\"><div align=\"center\">idp</div></td>
<td class=\"ligne\"><div align=\"center\">nom</div></td>
<td class=\"ligne\"><div align=\"center\">prenom</div></td>
<td class=\"ligne\"><div align=\"center\">situation familiale</div></td>
<td class=\"ligne\"><div align=\"center\">nbr enfant</div></td>
<td class=\"ligne\"><div align=\"center\">alloction fa</div></td>
<td class=\"ligne\"><div align=\"center\">conjoint</div></td>
<td class=\"ligne\"><div align=\"center\">nss</div></td>
<td class=\"ligne\"><div align=\"center\">ccp</div></td>
<td class=\"ligne\"><div align=\"center\">modifier</div></td>
</tr>" ); 
echo( "</table><br>\n" );
mysql_free_result($requete);
?>

