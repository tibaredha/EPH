<?php include('./SESSION/SESSION.php'); ?>
<?php
//utiliser cette commande pour afficher la langue arabe avant toute 
//mysql_query("SET NAMES 'UTF8' ");
$query_liste = "SELECT idp,idpat,nom,prenom,sexe,DATENAISSANCE,DATE,hosp FROM tpat where hosp='' ";
//exécution de notre requête SQL:
$requete = mysql_query( $query_liste, $cnx ) or die( "ERREUR MYSQL numéro: ".mysql_errno()."<br>Type de cette erreur: ".mysql_error()."<br>\n" );
?>
 
<p ALIGN="center">LA LISTE NOMINATIVE DES MALADES A CONFIRMES </p>
 
<?php
//récupération avec mysql_fetch_array(), et affichage de nos résultats :
echo( "<table bgcolor=\"white\"  bordercolor=\"green\" border=\"1\" cellpadding=\"2\" cellspacing=\"2\" align=\"center\">\n " );
echo( "<tr>
<td bgcolor=\"#cccccc\"><div align=\"center\">idp</div></td>
<td bgcolor=\"#cccccc\"><div align=\"center\">idpat</div></td>
<td bgcolor=\"#cccccc\"><div align=\"center\">nom</div></td>
<td bgcolor=\"#cccccc\"><div align=\"center\">prenom</div></td>
<td bgcolor=\"#cccccc\"><div align=\"center\">sexe</div></td>
<td bgcolor=\"#cccccc\"><div align=\"center\">dns</div></td>
<td bgcolor=\"#cccccc\"><div align=\"center\">date </div></td>
<td bgcolor=\"#cccccc\"><div align=\"center\">M</div></td>
<td bgcolor=\"#cccccc\"><div align=\"center\">S</div></td>
<td bgcolor=\"#cccccc\"><div align=\"center\">HOSPTALISATION</div></td>
<td bgcolor=\"#cccccc\"><div align=\"center\">LIBERATION</div></td>
</tr>" );
 
while( $result = mysql_fetch_array( $requete ) )
{
echo( "<tr>\n" );
echo( "<td><div align=\"left\">".$result["idp"]."</div></td>\n" );
echo( "<td><div align=\"left\">".$result["idpat"]."</div></td>\n" );
echo( "<td><div align=\"left\">".$result["nom"]."</div></td>\n" );
echo( "<td><div align=\"left\">".$result["prenom"]."</div></td>\n" );
echo( "<td><div align=\"left\">".$result["sexe"]."</div></td>\n" );
echo( "<td><div align=\"left\">".$result["DATENAISSANCE"]."</div></td>\n" );
echo( "<td><div align=\"left\">".$result["DATE"]."</div></td>\n" );
echo( "<td><div align=\"left\">"."<a title=\"MODIFIER\"href=\"*.php?idp=".$result["idp"]."\"><img src='./images/E.png' width='16' height='16' border='0' alt=''/></a>"."</div></td>\n" );
echo( "<td><div align=\"left\">"."<a title=\"supprimer\" href=\"*.php?idp=".$result["idp"]."\"><img src='./images/b_empty.png' width='16' height='16' border='0' alt=''/></a>"."</div></td>\n" );
echo( "<td><div align=\"left\">"."<a title=\"HOSPITALISATION\" href=\"index.php?uc=HOSP&idp=".$result["idp"]."\">HOSPTALISATION</a>"."</div></td>\n" );
echo( "<td><div align=\"left\">"."<a title=\"LIBERATION\" href=\"index.php?uc=LIB&idp=".$result["idp"]."\">LIBERATION</a>"."</div></td>\n" );
echo( "</tr>\n" );
} 
echo( "</table><br>\n" );
mysql_free_result($requete);
?>
<p ALIGN="center"> FIN DE LA LISTE NOMINATIVE DES MALADES A CONFIRMES </p>
<br>
<br>
<br>

