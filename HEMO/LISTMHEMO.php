<?php
$per ->h(2,400,175,'La Liste Nominative Des Patients Hemodialyses');
$per-> mysqlconnect();
$query_liste = "SELECT * FROM HEMO WHERE SORTI ='' ORDER BY NOM ";
$requete = mysql_query( $query_liste ) or die( "ERREUR MYSQL numéro: ".mysql_errno()."<br>Type de cette erreur: ".mysql_error()."<br>\n" );
$per -> sautligne (3);
echo( "<table width=\"85%\" border=\"0\" cellpadding=\"1\" cellspacing=\"1\" align=\"center\">\n" );
echo( "<tr>
<td class=\"ligne\"><div align=\"center\"><font  color=\"#FFFFFF\" >Séance</div></td>
<td class=\"ligne\"><div align=\"center\"><font  color=\"#FFFFFF\" >Nom_Prénom</div></td>
<td class=\"ligne\"><div align=\"center\"><font  color=\"#FFFFFF\" >Gestion </div></td>
<td class=\"ligne\"><div align=\"center\"><font  color=\"#FFFFFF\" >Sexe</div></td>
<td class=\"ligne\"><div align=\"center\"><font  color=\"#FFFFFF\" >ABO_RH</div></td>
<td class=\"ligne\"><div align=\"center\"><font  color=\"#FFFFFF\" >DNS</div></td>
<td class=\"ligne\"><div align=\"center\"><font  color=\"#FFFFFF\" >Age </div></td>
<td class=\"ligne\"><div align=\"center\"><font  color=\"#FFFFFF\" >Premiere dyalise</div></td>
<td class=\"ligne\"><div align=\"center\"><font  color=\"#FFFFFF\" >Age 1ere séance</div></td>

<td class=\"ligne\"><div align=\"center\"><font  color=\"#FFFFFF\" >Durée dyalise</div></td>
<td class=\"ligne\"><div align=\"center\"><font  color=\"#FFFFFF\" >Poids</div></td>
<td class=\"ligne\"><div align=\"center\"><font  color=\"#FFFFFF\" >Mpoids</div></td>
<td class=\"ligne\"><div align=\"center\"><font  color=\"#FFFFFF\" >Lit</div></td>
<td class=\"ligne\"><div align=\"center\"><font  color=\"#FFFFFF\" >Mlit</div></td>
<td class=\"ligne\"><div align=\"center\"><font  color=\"#FFFFFF\" >NSS</div></td>
<td class=\"ligne\"><div align=\"center\"><font  color=\"#FFFFFF\" >Mnss</div></td>
</tr>" ); 
while( $result = mysql_fetch_array( $requete ) )
{
echo( "<tr bgcolor=\"#E6E6E6\" >\n" );
echo( "<td><div align=\"center\">"."<a title=\"sأ©ance hأ©modialyse\" href=\"./HEMO/FHEMO1.php?idp=".$result["ID"]."\"><img src='./images/gs.jpg' width='16' height='16' border='0' alt=''/></a>"."</div></td>\n" );
echo( "<td><div align=\"left\">".$result["NOM"]."_".strtolower($result["PRENOM"])."</div></td>\n" );
echo( "<td><div align=\"CENTER\">"."<a title=\"Gestion Malade HEMODIALYSE\" href=\"index.php?uc=SMHEMO&idp=".$result["ID"]."\"><img src='./images/s_reload.png' width='16' height='16' border='0' alt=''/></a>"."</div></td>\n" );
echo( "<td><div align=\"center\">".$result["SEX"]."</div></td>\n" );
echo( "<td><div align=\"center\">".$result["GRABO"]."_".$result["GRRH"]."</div></td>\n" );
echo( "<td><div align=\"center\">".$result["DATENAISSA"]."</div></td>\n" );
echo( "<td><div align=\"CENTER\">".$per->AGEDIALYSE("ID",$result["ID"])."</div></td>\n" );

echo( "<td><div align=\"center\">".$result["DATE1ERSEA"]."</div></td>\n" );
echo( "<td><div align=\"center\">".$result["AGE1SEANCE"]."</div></td>\n" );


echo( "<td><div align=\"center\">".$per->DUREEDIALYSE("ID",$result["ID"])."</div></td>\n" );
echo( "<td><div align=\"center\">".$result["POIDS"]."</div></td>\n" );
echo( "<td><div align=\"center\">"."<a title=\"MODIFIER POIDS SEC\" href=\"index.php?uc=MPOIDS1&idp=".$result["ID"]."\"><img src='./images/POIDS.jpg' width='16' height='16' border='0' alt=''/></a>"."</div></td>\n" );
echo( "<td><div align=\"center\">".$result["NLIT"]."</div></td>\n" );
echo( "<td><div align=\"center\">"."<a title=\"MODIFIER LIT\" href=\"index.php?uc=MPOIDS1&idp=".$result["ID"]."\"><img src='./images/LIT.jpg' width='16' height='16' border='0' alt=''/></a>"."</div></td>\n" );
echo( "<td><div align=\"center\">".$result["NSS"]."</div></td>\n" );
echo( "<td><div align=\"center\">"."<a title=\"MODIFIER NSS\" href=\"index.php?uc=NSS1&idp=".$result["ID"]."\"><img src='./images/b_props.png' width='16' height='16' border='0' alt=''/></a>"."</div></td>\n" );
// echo( "<td><div align=\"center\">"."<a title=\"MODIFIER MALADE HEMODIALYSE\" href=\"index.php?uc=***&idp=".$result["ID"]."\"><img src='./images/E.png' width='16' height='16' border='0' alt=''/></a>"."</div></td>\n" );
// echo( "<td><div align=\"center\">"."<a title=\"SUPPRIMER MALADE HEMODIALYSE\" href=\"index.php?uc=***&idp=".$result["ID"]."\"><img src='./images/b_empty.png' width='16' height='16' border='0' alt=''/></a>"."</div></td>\n" );
echo( "</tr>\n" );
}
echo( "<tr>
<td class=\"ligne\"><div align=\"center\"><font  color=\"#FFFFFF\" >Séance</div></td>
<td class=\"ligne\"><div align=\"center\"><font  color=\"#FFFFFF\" >Nom_Prénom</div></td>
<td class=\"ligne\"><div align=\"center\"><font  color=\"#FFFFFF\" >Gestion </div></td>
<td class=\"ligne\"><div align=\"center\"><font  color=\"#FFFFFF\" >Sexe</div></td>
<td class=\"ligne\"><div align=\"center\"><font  color=\"#FFFFFF\" >ABO_RH</div></td>
<td class=\"ligne\"><div align=\"center\"><font  color=\"#FFFFFF\" >DNS</div></td>
<td class=\"ligne\"><div align=\"center\"><font  color=\"#FFFFFF\" >Age </div></td>
<td class=\"ligne\"><div align=\"center\"><font  color=\"#FFFFFF\" >Premiere dyalise</div></td>
<td class=\"ligne\"><div align=\"center\"><font  color=\"#FFFFFF\" >Age 1ere séance</div></td>
<td class=\"ligne\"><div align=\"center\"><font  color=\"#FFFFFF\" >Durée dyalise</div></td>
<td class=\"ligne\"><div align=\"center\"><font  color=\"#FFFFFF\" >Poids</div></td>
<td class=\"ligne\"><div align=\"center\"><font  color=\"#FFFFFF\" >Mpoids</div></td>
<td class=\"ligne\"><div align=\"center\"><font  color=\"#FFFFFF\" >Lit</div></td>
<td class=\"ligne\"><div align=\"center\"><font  color=\"#FFFFFF\" >Mlit</div></td>
<td class=\"ligne\"><div align=\"center\"><font  color=\"#FFFFFF\" >NSS</div></td>
<td class=\"ligne\"><div align=\"center\"><font  color=\"#FFFFFF\" >Mnss</div></td>
</tr>" );


echo( "</table><br>\n" );
mysql_free_result($requete);
?>




