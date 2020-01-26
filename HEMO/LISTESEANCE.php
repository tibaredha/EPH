<?php
$id  = $_GET["idp"] ;
$per ->h(2,500,175,'LIST SEANCE HEMODIALYSES');
$per-> mysqlconnect();
$query_liste = "SELECT * FROM HEMOSEANCE WHERE idp  ='$id' ";
$requete = mysql_query( $query_liste ) or die( "ERREUR MYSQL numéro: ".mysql_errno()."<br>Type de cette erreur: ".mysql_error()."<br>\n" );
$per -> sautligne (3);
echo( "<table width=\"85%\" border=\"0\" cellpadding=\"1\" cellspacing=\"1\" align=\"center\">\n" );
echo( "<tr>
<td class=\"ligne\"><div align=\"center\"><font  color=\"#FFFFFF\" >DATE</div></td>
<td class=\"ligne\"><div align=\"center\"><font  color=\"#FFFFFF\" >HEURE</div></td>
<td class=\"ligne\"><div align=\"center\"><font  color=\"#FFFFFF\" >TYPE</div></td>
<td class=\"ligne\"><div align=\"center\"><font  color=\"#FFFFFF\" >APP</div></td>
<td class=\"ligne\"><div align=\"center\"><font  color=\"#FFFFFF\" >ACCES VX</div></td>
<td class=\"ligne\"><div align=\"center\"><font  color=\"#FFFFFF\" >IDE</div></td>
<td class=\"ligne\"><div align=\"center\"><font  color=\"#FFFFFF\" >POIDS SEC</div></td>
<td class=\"ligne\"><div align=\"center\"><font  color=\"#FFFFFF\" >PDS</div></td>
<td class=\"ligne\"><div align=\"center\"><font  color=\"#FFFFFF\" >SYSD</div></td>
<td class=\"ligne\"><div align=\"center\"><font  color=\"#FFFFFF\" >DIAD</div></td>
<td class=\"ligne\"><div align=\"center\"><font  color=\"#FFFFFF\" >TD</div></td>
<td class=\"ligne\"><div align=\"center\"><font  color=\"#FFFFFF\" >PFS</div></td>
<td class=\"ligne\"><div align=\"center\"><font  color=\"#FFFFFF\" >SYSF</div></td>
<td class=\"ligne\"><div align=\"center\"><font  color=\"#FFFFFF\" >DIAF</div></td>
<td class=\"ligne\"><div align=\"center\"><font  color=\"#FFFFFF\" >TF</div></td>
<td class=\"ligne\"><div align=\"center\"><font  color=\"#FFFFFF\" >MEDECIN</div></td>
</tr>" ); 
while( $result = mysql_fetch_array( $requete ) )
{
echo( "<tr bgcolor=\"#E6E6E6\" >\n" );
// echo( "<td><div align=\"center\">".$result["idhemobio"]."</div></td>\n" );(,,,,,,,,,,,,) 
echo( "<td><div align=\"center\">".$result["dateseance"]."</div></td>\n" );
echo( "<td><div align=\"center\">".$result["heures"]."</div></td>\n" );
echo( "<td><div align=\"center\">".$result["TYPEDIA"]."</div></td>\n" );
echo( "<td><div align=\"center\">".$result["NAPP"]."</div></td>\n" );
echo( "<td><div align=\"center\">".$result["ACCSANG"]."</div></td>\n" );
echo( "<td><div align=\"center\">".$result["IDE"]."</div></td>\n" );
echo( "<td><div align=\"center\">".$result["POIDS"]."</div></td>\n" );
echo( "<td><div align=\"center\">".$result["POIDSD"]."</div></td>\n" );
echo( "<td><div align=\"center\">".$result["SYSD"]."</div></td>\n" );
echo( "<td><div align=\"center\">".$result["DIAD"]."</div></td>\n" );
echo( "<td><div align=\"center\">".$result["TD"]."</div></td>\n" );
echo( "<td><div align=\"center\">".$result["POIDSF"]."</div></td>\n" );
echo( "<td><div align=\"center\">".$result["SYSF"]."</div></td>\n" );
echo( "<td><div align=\"center\">".$result["DIAF"]."</div></td>\n" );
echo( "<td><div align=\"center\">".$result["TF"]."</div></td>\n" );
echo( "<td><div align=\"center\">".$result["MEDECIN"]."</div></td>\n" );
// echo( "<td><div align=\"center\">"."<a title=\"MODIFIER BILAN HEMODIALYSE\" href=\"index.php?uc=&idp=".$result["idhemobio"]."\"><img src='./images/E.png' width='16' height='16' border='0' alt=''/></a>"."</div></td>\n" );
// echo( "<td><div align=\"center\">"."<a title=\"SUPPRIMER BILAN HEMODIALYSE\" href=\"index.php?uc=***&idp=".$result["idhemobio"]."\"><img src='./images/b_empty.png' width='16' height='16' border='0' alt=''/></a>"."</div></td>\n" );
// echo( "<td><div align=\"CENTER\">"."<a title=\"Gestion BILAN HEMODIALYSE\" href=\"index.php?uc=&idp=".$result["idhemobio"]."\"><img src='./images/s_reload.png' width='16' height='16' border='0' alt=''/></a>"."</div></td>\n" );
echo( "</tr>\n" );
}
echo( "<tr>
<td class=\"ligne\"><div align=\"center\"><font  color=\"#FFFFFF\" >DATE</div></td>
<td class=\"ligne\"><div align=\"center\"><font  color=\"#FFFFFF\" >HEURE</div></td>
<td class=\"ligne\"><div align=\"center\"><font  color=\"#FFFFFF\" >TYPE</div></td>
<td class=\"ligne\"><div align=\"center\"><font  color=\"#FFFFFF\" >APP</div></td>
<td class=\"ligne\"><div align=\"center\"><font  color=\"#FFFFFF\" >ACCES VX</div></td>
<td class=\"ligne\"><div align=\"center\"><font  color=\"#FFFFFF\" >IDE</div></td>
<td class=\"ligne\"><div align=\"center\"><font  color=\"#FFFFFF\" >POIDS SEC</div></td>
<td class=\"ligne\"><div align=\"center\"><font  color=\"#FFFFFF\" >PDS</div></td>
<td class=\"ligne\"><div align=\"center\"><font  color=\"#FFFFFF\" >SYSD</div></td>
<td class=\"ligne\"><div align=\"center\"><font  color=\"#FFFFFF\" >DIAD</div></td>
<td class=\"ligne\"><div align=\"center\"><font  color=\"#FFFFFF\" >TD</div></td>
<td class=\"ligne\"><div align=\"center\"><font  color=\"#FFFFFF\" >PFS</div></td>
<td class=\"ligne\"><div align=\"center\"><font  color=\"#FFFFFF\" >SYSF</div></td>
<td class=\"ligne\"><div align=\"center\"><font  color=\"#FFFFFF\" >DIAF</div></td>
<td class=\"ligne\"><div align=\"center\"><font  color=\"#FFFFFF\" >TF</div></td>
<td class=\"ligne\"><div align=\"center\"><font  color=\"#FFFFFF\" >MEDECIN</div></td>
</tr>" ); 
echo( "</table><br>\n" );
mysql_free_result($requete);
?>




