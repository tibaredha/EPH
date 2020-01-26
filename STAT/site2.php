<h5 ALIGN = "center">NBR D ACCE PAR PAGE </h5>
<?php
$sql = "SELECT pageconn, count(*) FROM `tconn` group by pageconn";
//exécution de notre requête SQL:
$requete = mysql_query( $sql ) or die( "ERREUR MYSQL numéro: ".mysql_errno()."<br>Type de cette erreur: ".mysql_error()."<br>\n" );
//récupération avec mysql_fetch_array(), et affichage de nos résultats :
echo( "<table border=\"1\" cellpadding=\"1\" cellspacing=\"1\" align=\"center\">\n" );
echo( "<tr>
<td class=\"ligne\"  bgcolor=\"#cccccc\"><div align=\"center\">pageconn</div></td>
<td class=\"ligne\"  bgcolor=\"#cccccc\"><div align=\"center\">count</div></td>
</tr>" );
// il existe 04 methode pour afficher les resultats mysql_fetch_(array/assoc/objet/row)
// array  .$result["id"]. 
// assoc  .$result["id"].
// objet  .$result->id.
// row    .$result[1]. 
while( $result = mysql_fetch_array( $requete ) )
{
echo( "<tr class=\"resultat\"  >\n" );
echo( "<td><div align=\"left\">".$result["pageconn"]."</div></td>\n" );
echo( "<td><div align=\"left\">".$result["count(*)"]."</div></td>\n" );
echo( "</tr>\n" );
}
echo( "<tr>
<td class=\"ligne\"  bgcolor=\"#cccccc\"><div align=\"center\">pageconn</div></td>
<td class=\"ligne\"  bgcolor=\"#cccccc\"><div align=\"center\">count</div></td>
</tr>" );
echo( "</table><br>\n" );
mysql_free_result($requete);
?>
<h5 ALIGN = "center">NBR D ACCE PAR IP </h5>
<?php
$sql = "SELECT IP, count(*) FROM `tconn` group by IP";
//exécution de notre requête SQL:
$requete = mysql_query( $sql ) or die( "ERREUR MYSQL numéro: ".mysql_errno()."<br>Type de cette erreur: ".mysql_error()."<br>\n" );
//récupération avec mysql_fetch_array(), et affichage de nos résultats :
echo( "<table border=\"1\" cellpadding=\"1\" cellspacing=\"1\" align=\"center\">\n" );
echo( "<tr>
<td class=\"ligne\"  bgcolor=\"#cccccc\"><div align=\"center\">IP</div></td>
<td class=\"ligne\"  bgcolor=\"#cccccc\"><div align=\"center\">count</div></td>
</tr>" );
// il existe 04 methode pour afficher les resultats mysql_fetch_(array/assoc/objet/row)
// array  .$result["id"]. 
// assoc  .$result["id"].
// objet  .$result->id.
// row    .$result[1]. 
while( $result = mysql_fetch_array( $requete ) )
{
echo( "<tr class=\"resultat\"  >\n" );
echo( "<td><div align=\"left\">".$result["IP"]."</div></td>\n" );
echo( "<td><div align=\"left\">".$result["count(*)"]."</div></td>\n" );
echo( "</tr>\n" );
}
echo( "<tr>
<td class=\"ligne\"  bgcolor=\"#cccccc\"><div align=\"center\">IP</div></td>
<td class=\"ligne\"  bgcolor=\"#cccccc\"><div align=\"center\">count</div></td>
</tr>" );
echo( "</table><br>\n" );
mysql_free_result($requete);
?>
