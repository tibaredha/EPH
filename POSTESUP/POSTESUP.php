<?php
$per-> mysqlconnect();
$query_liste = "SELECT * FROM postesup   ";//order by 
$requete = mysql_query( $query_liste ) or die( "ERREUR MYSQL num곯: ".mysql_errno()."<br>Type de cette erreur: ".mysql_error()."<br>\n" );
?>
<br>
<h2  align="center" class="hfgh"> القائمة الاسمية  للمناصب العليا/التعداد المالي</h2>
<?php
// il faut regler la presence de la collone annee  dans la base de donne en foction de chaque nouvelle annee avec une fonction  en instance  
$ANNEE=date("Y");
$ANNEE2=date("Y")-1;
$ANNEE3=date("Y")-2;
echo( "<table  border=\"0\" cellpadding=\"1\" cellspacing=\"1\" align=\"center\">\n" );
echo( "<tr>
<td class=\"ligne\"><div align=\"center\"><font  color=\"#FFFFFF\" >idg</div></td>
<td class=\"ligne\"><div align=\"center\"><font  color=\"#FFFFFF\" >POSTE SUP </div></td>
<td class=\"ligne\"><div align=\"center\"><font  color=\"#FFFFFF\" >المنصب العالي</div></td>
<td class=\"ligne\"><div align=\"center\"><font  color=\"#FFFFFF\" >statut</div></td>
<td class=\"ligne\"><div align=\"center\"><font  color=\"#FFFFFF\" > تعديل</div></td>
<td class=\"ligne\"><div align=\"center\"><font  color=\"#FFFFFF\" >".$ANNEE3."BDG</div></td>
<td class=\"ligne\"><div align=\"center\"><font  color=\"#FFFFFF\" >".$ANNEE2."BDG</div></td>
<td class=\"ligne\"><div align=\"center\"><font  color=\"#FFFFFF\" >".$ANNEE."BDG</div></td>
<td class=\"ligne\"><div align=\"center\"><font  color=\"#FFFFFF\" > تعداد المناصب</div></td>
<td class=\"ligne\"><div align=\"center\"><font  color=\"#FFFFFF\" > حذف</div></td>
</tr>" ); 
while( $result = mysql_fetch_array( $requete ) )
{
echo( "<tr bgcolor=\"#E6E6E6\" >\n" );
echo( "<td class=\"ligne1\" ><div align=\"center\">".$result["idpostesup"]."</div></td>\n" );
echo( "<td><div align=\"left\">".$result["postesupfr"]."</div></td>\n" );
echo( "<td><div align=\"right\">".$result["postesupar"]."</div></td>\n" );
echo( "<td><div align=\"center\">".$result["ids"]."</div></td>\n" );
echo( "<td><div align=\"center\">"."<a href=\"index.php?uc=MPOSTESUP&idpostesup=".$result["idpostesup"]."\"><img src='./images/E.png' width='16' height='16' border='0' alt=''/></a>"."</div></td>\n" );
echo( "<td><div align=\"center\">".$result["A$ANNEE3"]."</div></td>\n" );
echo( "<td><div align=\"center\">".$result["A$ANNEE2"]."</div></td>\n" );
echo( "<td><div align=\"center\">".$result["A$ANNEE2"]."</div></td>\n" );//???????
echo( "<td><div align=\"center\">"."<a href=\"index.php?uc=MEFFPS&idpostesup=".$result["idpostesup"]."\"><img src='./images/b_usrlist.png' width='16' height='16' border='0' alt=''/></a>"."</div></td>\n" );
echo( "<td><div align=\"center\">"."<a href=\"index.php?uc=****&idpostesup=".$result["idpostesup"]."\"><img src='./images/b_empty.png' width='16' height='16' border='0' alt=''/></a>"."</div></td>\n" );
echo( "</tr>\n" );
} 
echo( "<tr>
<td class=\"ligne\"><div align=\"center\"><font  color=\"#FFFFFF\" >idg</div></td>
<td class=\"ligne\"><div align=\"center\"><font  color=\"#FFFFFF\" >POSTE SUP </div></td>
<td class=\"ligne\"><div align=\"center\"><font  color=\"#FFFFFF\" >المنصب العالي</div></td>
<td class=\"ligne\"><div align=\"center\"><font  color=\"#FFFFFF\" >statut</div></td>
<td class=\"ligne\"><div align=\"center\"><font  color=\"#FFFFFF\" > تعديل</div></td>
<td class=\"ligne\"><div align=\"center\"><font  color=\"#FFFFFF\" >".$ANNEE3."BDG</div></td>
<td class=\"ligne\"><div align=\"center\"><font  color=\"#FFFFFF\" >".$ANNEE2."BDG</div></td>
<td class=\"ligne\"><div align=\"center\"><font  color=\"#FFFFFF\" >".$ANNEE."BDG</div></td>
<td class=\"ligne\"><div align=\"center\"><font  color=\"#FFFFFF\" > تعداد المناصب</div></td>
<td class=\"ligne\"><div align=\"center\"><font  color=\"#FFFFFF\" > حذف</div></td>
</tr>" );  
echo( "</table><br>\n" );
mysql_free_result($requete);
?>

