<?php
$per ->h(2,350,170,'LA LISTE NOMINATIVE DES PATIENTS NON HOSPITALISES');
$per-> mysqlconnect();
$query_liste = "SELECT idp,idpat,nom,prenom,sexe,DATENAISSANCE,DATE,hosp,SERVICEHOSP,HOSP FROM tpat where SERVICEHOSP='0' ";
$requete = mysql_query( $query_liste ) or die( "ERREUR MYSQL num�ro: ".mysql_errno()."<br>Type de cette erreur: ".mysql_error()."<br>\n" );
$per -> sautligne (3);
echo( "<table width=\"85%\" border=\"0\" cellpadding=\"1\" cellspacing=\"1\" align=\"center\">\n" );
echo( "<tr>
<td class=\"ligne\"><div align=\"center\"><font  color=\"#FFFFFF\" >Service</div></td>
<td class=\"ligne\"><div align=\"center\"><font  color=\"#FFFFFF\" >IDP</div></td>
<td class=\"ligne\"><div align=\"center\"><font  color=\"#FFFFFF\" >Nom</div></td>
<td class=\"ligne\"><div align=\"center\"><font  color=\"#FFFFFF\" >Prenom</div></td>
<td class=\"ligne\"><div align=\"center\"><font  color=\"#FFFFFF\" >Sexe</div></td>
<td class=\"ligne\"><div align=\"center\"><font  color=\"#FFFFFF\" >DNS</div></td>
<td class=\"ligne\"><div align=\"center\"><font  color=\"#FFFFFF\" >Date</div></td>
<td class=\"ligne\"><div align=\"center\"><font  color=\"#FFFFFF\" >M</div></td>
<td class=\"ligne\"><div align=\"center\"><font  color=\"#FFFFFF\" >S</div></td>
<td class=\"ligne\"><div align=\"center\"><font  color=\"#FFFFFF\" >Gestion Malade</div></td>
</tr>" );
 
while( $result = mysql_fetch_array( $requete ) )
{
echo( "<tr bgcolor=\"#E6E6E6\" >\n" );
echo( "<td><div align=\"center\">".$result["SERVICEHOSP"]."</div></td>\n" );
echo( "<td><div align=\"center\">".$result["idp"]."</div></td>\n" );
echo( "<td><div align=\"left\">".$result["nom"]."</div></td>\n" );
echo( "<td><div align=\"left\">".$result["prenom"]."</div></td>\n" );
echo( "<td><div align=\"center\">".$result["sexe"]."</div></td>\n" );
echo( "<td><div align=\"center\">".$result["DATENAISSANCE"]."</div></td>\n" );
echo( "<td><div align=\"center\">".$result["DATE"]."</div></td>\n" );
echo( "<td><div align=\"center\">"."<a title=\"MODIFIER MALADE HOSPITALISE\" href=\"index.php?uc=***&idp=".$result["idp"]."\"><img src='./images/E.png' width='16' height='16' border='0' alt=''/></a>"."</div></td>\n" );
echo( "<td><div align=\"center\">"."<a title=\"SUPPRIMER MALADE HOSPITALISE\" href=\"index.php?uc=SUPPMNH&idp=".$result["idp"]."\"><img src='./images/b_empty.png' width='16' height='16' border='0' alt=''/></a>"."</div></td>\n" );
echo( "<td><div align=\"CENTER\">"."<a title=\"Gestion Malade\" href=\"index.php?uc=SMH1&idp=".$result["idp"]."\"><img src='./images/s_reload.png' width='16' height='16' border='0' alt=''/></a>"."</div></td>\n" );
echo( "</tr>\n" );
}
 echo( "<tr>
<td class=\"ligne\"><div align=\"center\"><font  color=\"#FFFFFF\" >Service</div></td>
<td class=\"ligne\"><div align=\"center\"><font  color=\"#FFFFFF\" >IDP</div></td>
<td class=\"ligne\"><div align=\"center\"><font  color=\"#FFFFFF\" >Nom</div></td>
<td class=\"ligne\"><div align=\"center\"><font  color=\"#FFFFFF\" >Prenom</div></td>
<td class=\"ligne\"><div align=\"center\"><font  color=\"#FFFFFF\" >Sexe</div></td>
<td class=\"ligne\"><div align=\"center\"><font  color=\"#FFFFFF\" >DNS</div></td>
<td class=\"ligne\"><div align=\"center\"><font  color=\"#FFFFFF\" >Date</div></td>
<td class=\"ligne\"><div align=\"center\"><font  color=\"#FFFFFF\" >M</div></td>
<td class=\"ligne\"><div align=\"center\"><font  color=\"#FFFFFF\" >S</div></td>
<td class=\"ligne\"><div align=\"center\"><font  color=\"#FFFFFF\" >Gestion Malade</div></td>
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


