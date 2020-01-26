
<?php
$per-> mysqlconnect();
mysql_query("SET NAMES 'UTF8' ");
$query_liste = "SELECT * FROM SERVICE  order by servicefr ";
$requete = mysql_query( $query_liste ) or die( "ERREUR MYSQL num곯: ".mysql_errno()."<br>Type de cette erreur: ".mysql_error()."<br>\n" );
?>

<br>
<br>

<h2  align="center" class="hfgh"> القائمة الاسمية للمصالح  </h2>

<?php
echo( "<table border=\"1\" cellpadding=\"1\" cellspacing=\"1\" align=\"center\">\n" );
echo( "<tr>
<td class=\"ligne\"><div align=\"center\">ids</div></td>
<td class=\"ligne\"><div align=\"center\">service</div></td>
<td class=\"ligne\"><div align=\"center\">المصلحة</div></td>
<td class=\"ligne\"><div align=\"center\">عدد الاسرة</div></td>
<td class=\"ligne\"><div align=\"center\"> تعديل</div></td>
<td class=\"ligne\"><div align=\"center\"> حذف</div></td>
<td class=\"ligne\"><div align=\"center\">إضافة الاسرة</div></td>
<td class=\"ligne\"><div align=\"center\"> حذف الاسرة</div></td>

</tr>" ); 
while( $result = mysql_fetch_array( $requete ) )
{
echo( "<tr bgcolor=\"#E6E6E6\" >\n" );
//echo( "<td><div align=\"right\">"."<a href=\"MODGRH1PF.php?idp=".$result["idp"]."\">Modifier</a>"."</div></td>\n" );
echo( "<td class=\"ligne1\"  ><div align=\"left\">".$result["ids"]."</div></td>\n" );
echo( "<td><div align=\"left\">".$result["servicefr"]."</div></td>\n" );
echo( "<td><div align=\"right\">".$result["servicear"]."</div></td>\n" );
echo( "<td><div align=\"CENTER\">".$result["NBRLIT"]."</div></td>\n" );
echo( "<td><div align=\"CENTER\">"."<a href=\"index.php?uc=MSERVICE&ids=".$result["ids"]."\"><img src='./images/E.png' width='16' height='16' border='0' alt=''/></a>"."</div></td>\n" );
echo( "<td><div align=\"CENTER\">"."<a href=\"index.php?uc=SUPSERVICE&ids=".$result["ids"]."\"><img src='./images/b_empty.png' width='16' height='16' border='0' alt=''/></a>"."</div></td>\n" );
echo( "<td><div align=\"CENTER\">"."<a href=\"index.php?uc=CREERLITS&ids=".$result["ids"]."&NBRLIT=".$result["NBRLIT"]."\"><img src='./images/b_index.png' width='16' height='16' border='0' alt=''/></a>"."</div></td>\n" );
echo( "<td><div align=\"CENTER\">"."<a href=\"index.php?uc=SUPLITS&ids=".$result["ids"]."\"><img src='./images/b_empty.png' width='16' height='16' border='0' alt=''/></a>"."</div></td>\n" );

echo( "</tr>\n" );
} 
echo( "<tr>
<td class=\"ligne\"><div align=\"center\">ids</div></td>
<td class=\"ligne\"><div align=\"center\">service</div></td>
<td class=\"ligne\"><div align=\"center\">المصلحة</div></td>
<td class=\"ligne\"><div align=\"center\">عدد الاسرة</div></td>
<td class=\"ligne\"><div align=\"center\"> تعديل</div></td>
<td class=\"ligne\"><div align=\"center\"> حذف</div></td>
<td class=\"ligne\"><div align=\"center\">إضافة الاسرة</div></td>
<td class=\"ligne\"><div align=\"center\"> حذف الاسرة</div></td>
</tr>" );
echo( "</table><br>\n" );
mysql_free_result($requete);
?>

