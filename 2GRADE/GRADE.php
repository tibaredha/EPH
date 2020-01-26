<?php
$per-> mysqlconnect(); 
$query_liste = "SELECT * FROM GRADE  order by gradear ";
$requete = mysql_query( $query_liste ) or die( "ERREUR MYSQL num곯: ".mysql_errno()."<br>Type de cette erreur: ".mysql_error()."<br>\n" );
?>
<br>
<h2  align="center" class="hfgh"> القائمة الاسمية  للرتب / التعداد المالى</h2>
<?php
// il faut regler la presence de la collone annee  dans la base de donne en foction de chaque nouvelle annee avec une fonction  en instance  
$ANNEE=date("Y");
$ANNEE2=date("Y")-1;
$ANNEE3=date("Y")-2;
echo( "<table  border=\"0\" cellpadding=\"1\" cellspacing=\"1\" align=\"center\">\n" );
echo( "<tr>
<td class=\"ligne\"><div align=\"center\"><font  color=\"#FFFFFF\" >idg</div></td>
<td class=\"ligne\"><div align=\"center\"><font  color=\"#FFFFFF\" >GRADE </div></td>
<td class=\"ligne\"><div align=\"center\"><font  color=\"#FFFFFF\" >الرتبة</div></td>
<td class=\"ligne\"><div align=\"center\"><font  color=\"#FFFFFF\" >statut</div></td>
<td class=\"ligne\"><div align=\"center\"><font  color=\"#FFFFFF\" > تعديل</div></td>
<td class=\"ligne\"><div align=\"center\"><font  color=\"#FFFFFF\" >".$ANNEE3."</div></td>
<td class=\"ligne\"><div align=\"center\"><font  color=\"#FFFFFF\" >".$ANNEE2."</div></td>
<td class=\"ligne\"><div align=\"center\"><font  color=\"#FFFFFF\" >".$ANNEE."</div></td>
<td class=\"ligne\"><div align=\"center\"><font  color=\"#FFFFFF\" > تعداد المناصب</div></td>
<td class=\"ligne\"><div align=\"center\"><font  color=\"#FFFFFF\" > حذف</div></td>
</tr>" ); 
while( $result = mysql_fetch_array( $requete ) )
{
echo( "<tr bgcolor=\"#E6E6E6\" >\n" );
echo( "<td class=\"ligne1\" ><div align=\"center\">".$result["idg"]."</div></td>\n" );
echo( "<td><div align=\"left\">".$result["gradefr"]."</div></td>\n" );
echo( "<td><div align=\"right\">".$result["gradear"]."</div></td>\n" );
echo( "<td><div align=\"center\">".$result["ids"]."</div></td>\n" );
echo( "<td><div align=\"center\">"."<a href=\"index.php?uc=MGRADE&idg=".$result["idg"]."\"><img src='./images/E.png' width='16' height='16' border='0' alt=''/></a>"."</div></td>\n" );
echo( "<td><div align=\"center\">".$result["A$ANNEE3"]."</div></td>\n" );
echo( "<td><div align=\"center\">".$result["A$ANNEE2"]."</div></td>\n" );
echo( "<td><div align=\"center\">".$result["A$ANNEE"]."</div></td>\n" );
echo( "<td><div align=\"center\">"."<a href=\"index.php?uc=MEFF&idg=".$result["idg"]."\"><img src='./images/b_usrlist.png' width='16' height='16' border='0' alt=''/></a>"."</div></td>\n" );
echo( "<td><div align=\"center\">"."<a href=\"index.php?uc=****&idg=".$result["idg"]."\"><img src='./images/b_empty.png' width='16' height='16' border='0' alt=''/></a>"."</div></td>\n" );
echo( "</tr>\n" );
} 
echo( "<tr>
<td class=\"ligne\"><div align=\"center\"><font  color=\"#FFFFFF\" >idg</div></td>
<td class=\"ligne\"><div align=\"center\"><font  color=\"#FFFFFF\" >GRADE </div></td>
<td class=\"ligne\"><div align=\"center\"><font  color=\"#FFFFFF\" >الرتبة</div></td>
<td class=\"ligne\"><div align=\"center\"><font  color=\"#FFFFFF\" >statut</div></td>
<td class=\"ligne\"><div align=\"center\"><font  color=\"#FFFFFF\" > تعديل</div></td>
<td class=\"ligne\"><div align=\"center\"><font  color=\"#FFFFFF\" >".$ANNEE3."</div></td>
<td class=\"ligne\"><div align=\"center\"><font  color=\"#FFFFFF\" >".$ANNEE2."</div></td>
<td class=\"ligne\"><div align=\"center\"><font  color=\"#FFFFFF\" >".$ANNEE."</div></td>
<td class=\"ligne\"><div align=\"center\"><font  color=\"#FFFFFF\" > تعداد المناصب</div></td>
<td class=\"ligne\"><div align=\"center\"><font  color=\"#FFFFFF\" > حذف</div></td>
</tr>" );
echo( "</table><br>\n" );
mysql_free_result($requete);
?>

