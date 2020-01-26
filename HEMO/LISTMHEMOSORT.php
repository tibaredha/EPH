<?php
$per ->h(2,400,170,'La Liste Nominative Des Patients Hémodialyses');
$per-> mysqlconnect();
$query_liste = "SELECT * FROM HEMO WHERE SORTI !='' ORDER BY NOM ";
$requete = mysql_query( $query_liste ) or die( "ERREUR MYSQL numéro: ".mysql_errno()."<br>Type de cette erreur: ".mysql_error()."<br>\n" );
$per -> sautligne (3);
echo( "<table width=\"85%\" border=\"0\" cellpadding=\"1\" cellspacing=\"1\" align=\"center\">\n" );
echo( "<tr>

<td class=\"ligne\"><div align=\"center\"><font  color=\"#FFFFFF\" >IDH</div></td>
<td class=\"ligne\"><div align=\"center\"><font  color=\"#FFFFFF\" >Nom</div></td>
<td class=\"ligne\"><div align=\"center\"><font  color=\"#FFFFFF\" >Prenom</div></td>
<td class=\"ligne\"><div align=\"center\"><font  color=\"#FFFFFF\" >Sexe</div></td>
<td class=\"ligne\"><div align=\"center\"><font  color=\"#FFFFFF\" >DNS</div></td>
<td class=\"ligne\"><div align=\"center\"><font  color=\"#FFFFFF\" >DYALISE1</div></td>
<td class=\"ligne\"><div align=\"center\"><font  color=\"#FFFFFF\" >M</div></td>
<td class=\"ligne\"><div align=\"center\"><font  color=\"#FFFFFF\" >S</div></td>
<td class=\"ligne\"><div align=\"center\"><font  color=\"#FFFFFF\" >cause</div></td>
<td class=\"ligne\"><div align=\"center\"><font  color=\"#FFFFFF\" >Date sortie</div></td>
<td class=\"ligne\"><div align=\"center\"><font  color=\"#FFFFFF\" >Gestion </div></td>
</tr>" ); 
while( $result = mysql_fetch_array( $requete ) )
{
echo( "<tr bgcolor=\"#E6E6E6\" >\n" );
// echo( "<td><div align=\"center\">".$per->nbrtostring("grh","service","ids",$result["SERVICEHOSP"],"servicefr")."</div></td>\n" );

// echo( "<td><div align=\"center\">".$per->nbrtostring("grh","lit","idlit",$result["NLIT"],"nlit")."</div></td>\n" );
echo( "<td><div align=\"center\">".$result["ID"]."</div></td>\n" );
echo( "<td><div align=\"left\">".$result["NOM"]."</div></td>\n" );
echo( "<td><div align=\"left\">".$result["PRENOM"]."</div></td>\n" );
echo( "<td><div align=\"center\">".$result["SEX"]."</div></td>\n" );
echo( "<td><div align=\"center\">".$result["DATENAISSA"]."</div></td>\n" );
echo( "<td><div align=\"center\">".$result["DATE1ERSEA"]."</div></td>\n" );
echo( "<td><div align=\"center\">"."<a title=\"MODIFIER MALADE HEMODIALYSE\" href=\"index.php?uc=***&idp=".$result["ID"]."\"><img src='./images/E.png' width='16' height='16' border='0' alt=''/></a>"."</div></td>\n" );
echo( "<td><div align=\"center\">"."<a title=\"SUPPRIMER MALADE HEMODIALYSE\" href=\"index.php?uc=***&idp=".$result["ID"]."\"><img src='./images/b_empty.png' width='16' height='16' border='0' alt=''/></a>"."</div></td>\n" );
echo( "<td><div align=\"center\">".$result["SORTI"]."</div></td>\n" );
echo( "<td><div align=\"center\">".$result["DATESORTI"]."</div></td>\n" );
echo( "<td><div align=\"CENTER\">"."<a title=\"Gestion Malade HEMODIALYSE\" href=\"index.php?uc=***&idp=".$result["ID"]."\"><img src='./images/s_reload.png' width='16' height='16' border='0' alt=''/></a>"."</div></td>\n" );
echo( "</tr>\n" );
}
echo( "<tr>
<td class=\"ligne\"><div align=\"center\"><font  color=\"#FFFFFF\" >IDH</div></td>
<td class=\"ligne\"><div align=\"center\"><font  color=\"#FFFFFF\" >Nom</div></td>
<td class=\"ligne\"><div align=\"center\"><font  color=\"#FFFFFF\" >Prenom</div></td>
<td class=\"ligne\"><div align=\"center\"><font  color=\"#FFFFFF\" >Sexe</div></td>
<td class=\"ligne\"><div align=\"center\"><font  color=\"#FFFFFF\" >DNS</div></td>
<td class=\"ligne\"><div align=\"center\"><font  color=\"#FFFFFF\" >DYALISE1</div></td>
<td class=\"ligne\"><div align=\"center\"><font  color=\"#FFFFFF\" >M</div></td>
<td class=\"ligne\"><div align=\"center\"><font  color=\"#FFFFFF\" >S</div></td>
<td class=\"ligne\"><div align=\"center\"><font  color=\"#FFFFFF\" >cause</div></td>
<td class=\"ligne\"><div align=\"center\"><font  color=\"#FFFFFF\" >Date sortie</div></td>
<td class=\"ligne\"><div align=\"center\"><font  color=\"#FFFFFF\" >Gestion</div></td>
</tr>" );
echo( "</table><br>\n" );
mysql_free_result($requete);
?>
<br>
<br>
<br>
<br>
<br>
<br>
<br>


