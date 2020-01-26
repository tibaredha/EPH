<?php
$per-> mysqlconnect();
$per ->h(2,400,180,'LA LISTE DES MEMBRES INSCRITS ');
$per -> sautligne (4);

$sql = "SELECT * FROM users ";
$requete = mysql_query( $sql ) or die( "ERREUR MYSQL numéro: ".mysql_errno()."<br>Type de cette erreur: ".mysql_error()."<br>\n" );
echo( "<table border=\"1\" cellpadding=\"1\" cellspacing=\"1\" align=\"center\">\n" );
echo( "<tr>
<td class=\"ligne\"  ><div align=\"center\">id</div></td>
<td class=\"ligne\"  ><div align=\"center\">Wilaya</div></td>
<td class=\"ligne\"  ><div align=\"center\">commune</div></td>
<td class=\"ligne\"  ><div align=\"center\">service</div></td>
<td class=\"ligne\"  ><div align=\"center\">MEMBRES INSCRITS</div></td>
<td class=\"ligne\"  ><div align=\"center\">mdp</div></td>
<td class=\"ligne\"  ><div align=\"center\">ADMIN</div></td>
<td class=\"ligne\"  ><div align=\"center\">date inscription</div></td>
<td class=\"ligne\"  ><div align=\"center\">modification</div></td>
<td class=\"ligne\"  ><div align=\"center\">supression</div></td>
<td class=\"ligne\"  ><div align=\"center\">activer</div></td>
<td class=\"ligne\"  ><div align=\"center\">desactiver</div></td>
</tr>" );
// il existe 04 methode pour afficher les resultats mysql_fetch_(array/assoc/objet/row)
// array  .$result["id"]. 
// assoc  .$result["id"].
// objet  .$result->id.
// row    .$result[1]. 
while( $result = mysql_fetch_array( $requete ) )
{
echo( "<tr class=\"resultat\" >\n" );
echo( "<td class=\"ligne1\" ><div align=\"left\">".$result[0]."</div></td>\n" );
echo( "<td><div align=\"center\">".$result[1]."</div></td>\n" );
echo( "<td><div align=\"center\">".$result[2]."</div></td>\n" );
echo( "<td><div align=\"center\">".$result[3]."</div></td>\n" );
echo( "<td><div align=\"center\">".$result[4]."</div></td>\n" );
echo( "<td><div align=\"center\">".$result[5]."</div></td>\n" );
echo( "<td><div align=\"center\">".$result[6]."</div></td>\n" );
echo( "<td><div align=\"center\">".$result[7]."</div></td>\n" );
echo( "<td><div align=\"center\">"."<a title=\"modification\" href=\"INDEX.php?uc=***&idon=".$result[0]."\"><img src='./images/e.png' width='16' height='16' border='0' alt=''/></a>"."</div></td>\n" );
echo( "<td><div align=\"center\">"."<a title=\"suppression\"href=\"INDEX.php?uc=SUPMBR&IDP=".$result[0]."\"><img src='./images/s.png' width='16' height='16' border='0' alt=''/></a>"."</div></td>\n" );
echo( "<td><div align=\"center\">"."<a title=\"activer compte\" href=\"index.php?uc=ACTIV&IDP=".$result[0]."&Nom=".$result['USER']."\"><img src='./images/s_okay.png' width='16' height='16' border='0' alt=''/></a>"."</div></td>\n" );
echo( "<td><div align=\"center\">"."<a title=\"dÃ©sactiver compte\" href=\"index.php?uc=DACTIV&IDP=".$result[0]."&Nom=".$result['USER']."\"><img src='./images/s_error.png' width='16' height='16' border='0' alt=''/></a>"."</div></td>\n" );


echo( "</tr>\n" );
} 
echo( "<tr>
<td class=\"ligne\"  bgcolor=\"#cccccc\"><div align=\"center\">id</div></td>
<td class=\"ligne\"  bgcolor=\"#cccccc\"><div align=\"center\">Wilaya</div></td>
<td class=\"ligne\"  bgcolor=\"#cccccc\"><div align=\"center\">commune</div></td>
<td class=\"ligne\"  bgcolor=\"#cccccc\"><div align=\"center\">service</div></td>
<td class=\"ligne\"  bgcolor=\"#cccccc\"><div align=\"center\">MEMBRES INSCRITS</div></td>
<td class=\"ligne\"  bgcolor=\"#cccccc\"><div align=\"center\">mdp</div></td>
<td class=\"ligne\"  bgcolor=\"#cccccc\"><div align=\"center\">ADMIN</div></td>
<td class=\"ligne\"  bgcolor=\"#cccccc\"><div align=\"center\">date inscription</div></td>
<td class=\"ligne\"  bgcolor=\"#cccccc\"><div align=\"center\">modification</div></td>
<td class=\"ligne\"  bgcolor=\"#cccccc\"><div align=\"center\">supression</div></td>
<td class=\"ligne\"  bgcolor=\"#cccccc\"><div align=\"center\">activer</div></td>
<td class=\"ligne\"  bgcolor=\"#cccccc\"><div align=\"center\">desactiver</div></td>
</tr>" );
echo( "</table><br>\n" );
mysql_free_result($requete);
?>
