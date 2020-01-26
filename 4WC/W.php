
<?php

$query_liste = "SELECT * FROM WIL  order BY	IDWIL ";
$requete = mysql_query( $query_liste ) or die( "ERREUR MYSQL num곯: ".mysql_errno()."<br>Type de cette erreur: ".mysql_error()."<br>\n" );
?>

<br>
<br>

<h2  align="center" class="hfgh"> القائمة الاسمية للولاايات  </h2>




<?php
echo( "<table border=\"1\" cellpadding=\"1\" cellspacing=\"1\" align=\"center\">\n" );
echo( "<tr>

<td bgcolor=\"#cccccc\"><div align=\"center\">ids</div></td>
<td bgcolor=\"#cccccc\"><div align=\"center\">WILAYAS</div></td>
<td bgcolor=\"#cccccc\"><div align=\"center\">WILAYASAR</div></td>
<td bgcolor=\"#cccccc\"><div align=\"center\"> تعديل</div></td>
<td bgcolor=\"#cccccc\"><div align=\"center\"> حذف</div></td>
</tr>" ); 
while( $result = mysql_fetch_array( $requete ) )
{
echo( "<tr>\n" );
//echo( "<td><div align=\"right\">"."<a href=\"MODGRH1PF.php?idp=".$result["idp"]."\">Modifier</a>"."</div></td>\n" );
echo( "<td><div align=\"left\">".$result["IDWIL"]."</div></td>\n" );
echo( "<td><div align=\"left\">".$result["WILAYAS"]."</div></td>\n" );
echo( "<td><div align=\"right\">".$result["WILAYASAR"]."</div></td>\n" );

echo( "<td><div align=\"right\">"."<a href=\"index.php?uc=MW&IDWIL=".$result["IDWIL"]."\"><img src='./images/E.png' width='16' height='16' border='0' alt=''/></a>"."</div></td>\n" );
echo( "<td><div align=\"right\">"."<a href=\"index.php?uc=***&IDWIL=".$result["IDWIL"]."\"><img src='./images/b_empty.png' width='16' height='16' border='0' alt=''/></a>"."</div></td>\n" );

echo( "</tr>\n" );
} 
echo( "</table><br>\n" );
mysql_free_result($requete);
?>

