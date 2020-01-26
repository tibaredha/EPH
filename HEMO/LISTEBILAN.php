<?php
$id  = $_GET["idp"] ;
$per ->h(2,400,175,'LIST BILANS HEMODIALYSES');
$per-> mysqlconnect();
$query_liste = "SELECT * FROM HEMOBIO WHERE idp  ='$id' ";
$requete = mysql_query( $query_liste ) or die( "ERREUR MYSQL numéro: ".mysql_errno()."<br>Type de cette erreur: ".mysql_error()."<br>\n" );
$per -> sautligne (3);
echo( "<table width=\"85%\" border=\"0\" cellpadding=\"1\" cellspacing=\"1\" align=\"center\">\n" );
echo( "<tr>
<td class=\"ligne\"><div align=\"center\"><font  color=\"#FFFFFF\" >DATE</div></td>
<td class=\"ligne\"><div align=\"center\"><font  color=\"#FFFFFF\" >GB</div></td>
<td class=\"ligne\"><div align=\"center\"><font  color=\"#FFFFFF\" >GR</div></td>
<td class=\"ligne\"><div align=\"center\"><font  color=\"#FFFFFF\" >HB</div></td>
<td class=\"ligne\"><div align=\"center\"><font  color=\"#FFFFFF\" >HT</div></td>
<td class=\"ligne\"><div align=\"center\"><font  color=\"#FFFFFF\" >PLQT</div></td>
<td class=\"ligne\"><div align=\"center\"><font  color=\"#FFFFFF\" >TP</div></td>
<td class=\"ligne\"><div align=\"center\"><font  color=\"#FFFFFF\" >INR</div></td>
<td class=\"ligne\"><div align=\"center\"><font  color=\"#FFFFFF\" >GLYCE</div></td>
<td class=\"ligne\"><div align=\"center\"><font  color=\"#FFFFFF\" >UREE</div></td>
<td class=\"ligne\"><div align=\"center\"><font  color=\"#FFFFFF\" >CREAT</div></td>
<td class=\"ligne\"><div align=\"center\"><font  color=\"#FFFFFF\" >ACU</div></td>
<td class=\"ligne\"><div align=\"center\"><font  color=\"#FFFFFF\" >NA</div></td>
<td class=\"ligne\"><div align=\"center\"><font  color=\"#FFFFFF\" >K</div></td>
<td class=\"ligne\"><div align=\"center\"><font  color=\"#FFFFFF\" >PHOS</div></td>
<td class=\"ligne\"><div align=\"center\"><font  color=\"#FFFFFF\" >CL</div></td>
<td class=\"ligne\"><div align=\"center\"><font  color=\"#FFFFFF\" >CA</div></td>
<td class=\"ligne\"><div align=\"center\"><font  color=\"#FFFFFF\" >Poids</div></td>
<td class=\"ligne\"><div align=\"center\"><font  color=\"#FFFFFF\" >Duplicata</td>

</tr>" ); 
while( $result = mysql_fetch_array( $requete ) )
{
echo( "<tr bgcolor=\"#E6E6E6\" >\n" );
// echo( "<td><div align=\"center\">".$result["idhemobio"]."</div></td>\n" );
echo( "<td><div align=\"center\">".$result["DATE"]."</div></td>\n" );
echo( "<td><div align=\"center\">".$result["GB"]."</div></td>\n" );
echo( "<td><div align=\"center\">".$result["GR"]."</div></td>\n" );
echo( "<td><div align=\"center\">".$result["HB"]."</div></td>\n" );
echo( "<td><div align=\"center\">".$result["HT"]."</div></td>\n" );
echo( "<td><div align=\"center\">".$result["PLQT"]."</div></td>\n" );
echo( "<td><div align=\"center\">".$result["TP"]."</div></td>\n" );//SNHEMO1 POUR SUPRESSION DESACTIVE 
echo( "<td><div align=\"center\">".$result["INR"]."</div></td>\n" );
echo( "<td><div align=\"center\">".$result["GLYCE"]."</div></td>\n" );
echo( "<td><div align=\"center\">".$result["UREE"]."</div></td>\n" );
echo( "<td><div align=\"center\">".$result["CREAT"]."</div></td>\n" );
echo( "<td><div align=\"center\">".$result["ACURIQUE"]."</div></td>\n" );
echo( "<td><div align=\"center\">".$result["NA"]."</div></td>\n" );
echo( "<td><div align=\"center\">".$result["K"]."</div></td>\n" );
echo( "<td><div align=\"center\">".$result["PHOS"]."</div></td>\n" );
echo( "<td><div align=\"center\">".$result["CL"]."</div></td>\n" );
echo( "<td><div align=\"center\">".$result["CA"]."</div></td>\n" );
echo( "<td><div align=\"center\">".$result["Poids"]."</div></td>\n" );
echo( "<td><div align=\"center\">"."<a title=\" Duplicata Bilan \" href=\"./HEMO/DUPLICATA.php?idhemobio=".$result["idhemobio"]."\"><img src='./images/print.png' width='16' height='16' border='0' alt=''/></a>"."</div></td>\n" );
// echo( "<td><div align=\"center\">"."<a title=\"MODIFIER BILAN HEMODIALYSE\" href=\"index.php?uc=&idp=".$result["idhemobio"]."\"><img src='./images/E.png' width='16' height='16' border='0' alt=''/></a>"."</div></td>\n" );
// echo( "<td><div align=\"center\">"."<a title=\"SUPPRIMER BILAN HEMODIALYSE\" href=\"index.php?uc=***&idp=".$result["idhemobio"]."\"><img src='./images/b_empty.png' width='16' height='16' border='0' alt=''/></a>"."</div></td>\n" );
// echo( "<td><div align=\"CENTER\">"."<a title=\"Gestion BILAN HEMODIALYSE\" href=\"index.php?uc=&idp=".$result["idhemobio"]."\"><img src='./images/s_reload.png' width='16' height='16' border='0' alt=''/></a>"."</div></td>\n" );
echo( "</tr>\n" );
}
echo( "<tr>

<td class=\"ligne\"><div align=\"center\"><font  color=\"#FFFFFF\" >DATE</div></td>
<td class=\"ligne\"><div align=\"center\"><font  color=\"#FFFFFF\" >GB</div></td>
<td class=\"ligne\"><div align=\"center\"><font  color=\"#FFFFFF\" >GR</div></td>
<td class=\"ligne\"><div align=\"center\"><font  color=\"#FFFFFF\" >HB</div></td>
<td class=\"ligne\"><div align=\"center\"><font  color=\"#FFFFFF\" >HT</div></td>
<td class=\"ligne\"><div align=\"center\"><font  color=\"#FFFFFF\" >PLQT</div></td>
<td class=\"ligne\"><div align=\"center\"><font  color=\"#FFFFFF\" >TP</div></td>
<td class=\"ligne\"><div align=\"center\"><font  color=\"#FFFFFF\" >INR</div></td>
<td class=\"ligne\"><div align=\"center\"><font  color=\"#FFFFFF\" >GLYCE</div></td>
<td class=\"ligne\"><div align=\"center\"><font  color=\"#FFFFFF\" >UREE</div></td>
<td class=\"ligne\"><div align=\"center\"><font  color=\"#FFFFFF\" >CREAT</div></td>
<td class=\"ligne\"><div align=\"center\"><font  color=\"#FFFFFF\" >ACU</div></td>
<td class=\"ligne\"><div align=\"center\"><font  color=\"#FFFFFF\" >NA</div></td>
<td class=\"ligne\"><div align=\"center\"><font  color=\"#FFFFFF\" >K</div></td>
<td class=\"ligne\"><div align=\"center\"><font  color=\"#FFFFFF\" >PHOS</div></td>
<td class=\"ligne\"><div align=\"center\"><font  color=\"#FFFFFF\" >CL</div></td>
<td class=\"ligne\"><div align=\"center\"><font  color=\"#FFFFFF\" >CA</div></td>
<td class=\"ligne\"><div align=\"center\"><font  color=\"#FFFFFF\" >Poids</div></td>
<td class=\"ligne\"><div align=\"center\"><font  color=\"#FFFFFF\" >Duplicata</td>
</tr>" );
echo( "</table><br>\n" );
mysql_free_result($requete);
?>




