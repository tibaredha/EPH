<?php
$per-> mysqlconnect();
$query_liste = "SELECT * FROM lit ORDER BY idlit ";
$requete = mysql_query( $query_liste ) or die( "ERREUR MYSQL num곯: ".mysql_errno()."<br>Type de cette erreur: ".mysql_error()."<br>\n" );
$totalmbr1=mysql_num_rows($requete);
?>
<br>
<h2  align="center" class="hfgh"> LIST LITS   <?php ECHO $totalmbr1; ?> </h2>
<?php

echo( "<table width=\"60%\" border=\"0\" cellpadding=\"1\" cellspacing=\"1\" align=\"center\">\n" );
echo( "<tr>
<td bgcolor=\"#993333\"><div align=\"center\"><font  color=\"#FFFFFF\">Id lit</div></td>
<td bgcolor=\"#993333\"><div align=\"center\"><font  color=\"#FFFFFF\">Service</div></td>
<td bgcolor=\"#993333\"><div align=\"center\"><font  color=\"#FFFFFF\">N° lit</div></td>
<td bgcolor=\"#993333\"><div align=\"center\"><font  color=\"#FFFFFF\">Nom Prenom Du Patient</div></td>
<td bgcolor=\"#993333\"><div align=\"center\"><font  color=\"#FFFFFF\">Modification</div></td>
</tr>" ); 
echo( "<form action=\"index.php?uc=cheked \" method=\"post\" name=\"form1\">"); 
while( $result = mysql_fetch_array( $requete ) )
{
echo( "<tr bgcolor=\"#E6E6E6\" >\n" );
//supression desactive
//echo( "<td><div align=\"center\">"."<a title=\" الحذف النهائي من قاعدة البيانات \" href=\"\"  onclick=\"ConfirmDeleteMessage('index.php?uc=***&idp=".$result["row_id"]."'); return false;\"><img src='./images/b_empty.png' width='16' height='16' border='0' alt=''  /></a>"."</div></td>\n" );
echo( "<td><div align=\"left\">".$result["idlit"]."</div></td>\n" );
echo( "<td><div align=\"LEFT\">".$per->nbrtostring("grh","service","ids",$result["idservice"],"servicefr") ."</div></td>\n" );
echo( "<td><div align=\"LEFT\">".$result["nlit"]."</div></td>\n" );
echo( "<td><div align=\"LEFT\">".$result["idpt"]."</div></td>\n" );
echo( "<td><div align=\"center\">"."<a title=\"ادارة المستخدم \"href=\"index.php?uc=MLIT&idp=".$result["idlit"]."&Nomlatin=".$result["idlit"]."&Prenom_Latin=".$result["idlit"]."&Sexe=".$result["idlit"]."\"><img src='./images/s_reload.png' width='16' height='16' border='0' alt=''/></a>"."</div></td>\n" );
echo( "</tr>\n" );
} 
echo( "<tr>
<td bgcolor=\"#993333\"><div align=\"center\"><font  color=\"#FFFFFF\">Id lit</div></td>
<td bgcolor=\"#993333\"><div align=\"center\"><font  color=\"#FFFFFF\">Service</div></td>
<td bgcolor=\"#993333\"><div align=\"center\"><font  color=\"#FFFFFF\">N° lit</div></td>
<td bgcolor=\"#993333\"><div align=\"center\"><font  color=\"#FFFFFF\">Nom Prenom Du Patient</div></td>
<td bgcolor=\"#993333\"><div align=\"center\"><font  color=\"#FFFFFF\">Modification</div></td>
</tr>" ); 
echo( "</form >"); 
echo( "</table><br>\n" );
mysql_free_result($requete);
?>

