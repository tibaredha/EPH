<?php
$per-> mysqlconnect();
$query_liste = "SELECT * FROM etablissement order by  COD_WILAYA  ";
$requete = mysql_query( $query_liste ) or die( "ERREUR MYSQL num곯: ".mysql_errno()."<br>Type de cette erreur: ".mysql_error()."<br>\n" );



?>
<br>
<h2  align="center" class="hfgh"> القائمة الاسمية  للمؤسسات الصحية</h2>
<?php
// il faut regler la presence de la collone annee  dans la base de donne en foction de chaque nouvelle annee avec une fonction  en instance  
$ANNEE=date("Y");
$ANNEE2=date("Y")-1;
$ANNEE3=date("Y")-2;
echo( "<table  border=\"0\" cellpadding=\"1\" cellspacing=\"1\" align=\"center\">\n" );
echo( "<tr>
<td class=\"ligne\"><div align=\"center\"><font  color=\"#FFFFFF\" >idetablissement</div></td>
<td class=\"ligne\"><div align=\"center\"><font  color=\"#FFFFFF\" >WILAYA</div></td>
<td class=\"ligne\"><div align=\"center\"><font  color=\"#FFFFFF\" >etablissement </div></td>
<td class=\"ligne\"><div align=\"center\"><font  color=\"#FFFFFF\" >المؤسسة</div></td>
<td class=\"ligne\"><div align=\"center\"><font  color=\"#FFFFFF\" > تعديل</div></td>
<td class=\"ligne\"><div align=\"center\"><font  color=\"#FFFFFF\" > حذف</div></td>
</tr>" ); 
while( $result = mysql_fetch_array( $requete ) )
{
echo( "<tr bgcolor=\"#E6E6E6\" >\n" );
echo( "<td class=\"ligne1\"  ><div align=\"center\">".$result["0"]."</div></td>\n" );
echo( "<td class=\"ligne1\" ><div align=\"CENTER\">".$result["2"]."</div></td>\n" );
echo( "<td><div align=\"left\">".$result["10"]."</div></td>\n" );
echo( "<td><div align=\"right\">".$result["12"]."</div></td>\n" );
echo( "<td><div align=\"center\">"."<a href=\"index.php?uc=METABLISSEMENT&IDETABLISSEMENT=".$result["0"]."\"><img src='./images/E.png' width='16' height='16' border='0' alt=''/></a>"."</div></td>\n" );
echo( "<td><div align=\"center\">"."<a href=\"index.php?uc=****&idg=".$result["0"]."\"><img src='./images/b_empty.png' width='16' height='16' border='0' alt=''/></a>"."</div></td>\n" );
echo( "</tr>\n" );
} 
echo( "<tr>
<td class=\"ligne\"><div align=\"center\"><font  color=\"#FFFFFF\" >idetablissement</div></td>
<td class=\"ligne\"><div align=\"center\"><font  color=\"#FFFFFF\" >WILAYA</div></td>
<td class=\"ligne\"><div align=\"center\"><font  color=\"#FFFFFF\" >etablissement </div></td>
<td class=\"ligne\"><div align=\"center\"><font  color=\"#FFFFFF\" >المؤسسة</div></td>
<td class=\"ligne\"><div align=\"center\"><font  color=\"#FFFFFF\" > تعديل</div></td>
<td class=\"ligne\"><div align=\"center\"><font  color=\"#FFFFFF\" > حذف</div></td>
</tr>" ); 
echo( "</table><br>\n" );
mysql_free_result($requete);
?>

