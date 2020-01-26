<?php
$per ->h(2,550,180,'عدد المستخدمين حسب الرتب');
$per -> sautligne (4);
$per-> mysqlconnect();
$query_liste = "SELECT count(grh.Nomlatin) as nbr, grade.gradear as grade,grh.rnvgradear as idg FROM grh,grade where grh.rnvgradear=grade.idg and cessation !='y' group by grade order by nbr desc";
$requete = mysql_query( $query_liste ) or die( "ERREUR MYSQL num곯: ".mysql_errno()."<br>Type de cette erreur: ".mysql_error()."<br>\n" );
echo( "<table border=\"1\" cellpadding=\"1\" cellspacing=\"1\" align=\"center\">\n" );
echo( "<tr>
<td class=\"ligne\"><div align=\"center\">العدد</div></td>
<td class=\"ligne\"><div align=\"center\">الرتبة</div></td>
<td class=\"ligne\"><div align=\"center\">رقم الرتبة</div></td>
<td class=\"ligne\"><div align=\"center\">رقم الرتبة</div></td>
</tr>" ); 
while( $result = mysql_fetch_array( $requete ) )
{
echo( "<tr>\n" );
echo( "<td class=\"ligne1\" ><div align=\"center\">".$result["nbr"]."</div></td>\n" );
echo( "<td ><div align=\"right\">".$result["grade"]."</div></td>\n" );
echo( "<td class=\"ligne1\"><div align=\"right\">".$result["idg"]."</div></td>\n" );
echo( "<td><div align=\"center\">"."<a title=\""."القائمة الاسمية للمستخدمين  حسب  الرتبة  "."  ".$result["grade"]."  \"href=\"index.php?uc=REPGRADE1&GRADE=".$result["idg"]."&Nomlatin=".$result["idg"]."&Prenom_Latin=".$result["idg"]."&Sexe=".$result["idg"]."\"><img src='./images/s_reload.png' width='16' height='16' border='0' alt=''/></a>"."</div></td>\n" );
echo( "</tr>\n" );
}
 echo( "<tr>
<td class=\"ligne\"><div align=\"center\">العدد</div></td>
<td class=\"ligne\"><div align=\"center\">الرتبة</div></td>
<td class=\"ligne\"><div align=\"center\">رقم الرتبة</div></td>
<td class=\"ligne\"><div align=\"center\">رقم الرتبة</div></td>
</tr>" ); 
echo( "</table><br>\n" );
mysql_free_result($requete);
?>
 