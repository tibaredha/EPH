<?php
$per-> mysqlconnect();
$query_liste = "SELECT * FROM T11 ORDER BY LIB_COURAN ";
$requete = mysql_query( $query_liste ) or die( "ERREUR MYSQL num곯: ".mysql_errno()."<br>Type de cette erreur: ".mysql_error()."<br>\n" );
$totalmbr1=mysql_num_rows($requete);
echo"<br>"; 
echo"<h2  align=\"center\" class=\"hfgh\"> Actes Medicaux NBR Total $totalmbr1 Actes</h2>"; 
echo"<br><br><br><br><br>"; 
$per ->label(40,280,'Chapitre');           $per ->CHAP(180,280,'CHAP','grh','T14');  
$per ->label(40,350,'Acte');               $per ->ACTE(180,350,'ACTE');  
echo"<br><br><br><br><br>"; 
echo( "<table width=\"80%\" border=\"0\" cellpadding=\"1\" cellspacing=\"1\" align=\"center\">\n" );
echo( "<tr>
<td class=\"ligne\"><div align=\"center\"><font  color=\"#FFFFFF\">ACTE</div></td>
<td class=\"ligne\" ><div align=\"center\"><font  color=\"#FFFFFF\">Code ACTE</div></td>
<td class=\"ligne\"><div align=\"center\"><font  color=\"#FFFFFF\">Modification</div></td>
</tr>" ); 
echo( "<form action=\"index.php?uc=cheked \" method=\"post\" name=\"form1\">"); 
while( $result = mysql_fetch_array( $requete ) )
{
echo( "<tr bgcolor=\"#E6E6E6\" >\n" );
//supression desactive
//echo( "<td><div align=\"center\">"."<a title=\" الحذف النهائي من قاعدة البيانات \" href=\"\"  onclick=\"ConfirmDeleteMessage('index.php?uc=***&idp=".$result["row_id"]."'); return false;\"><img src='./images/b_empty.png' width='16' height='16' border='0' alt=''  /></a>"."</div></td>\n" );
echo( "<td \"><div align=\"LEFT\">".$result["LIB_COURAN"]."</div></td>\n" );
echo( "<td class=\"ligne1\" ><div align=\"center\">".$result["COTAT_ACT"]."</div></td>\n" );
echo( "<td class=\"ligne1\"><div align=\"center\">"."<a title=\"modification cim \"href=\"index.php?uc=***&idp=".$result["IDA"]."&CODE_CHAP=".$result["CODE_CHAP"]."&Prenom_Latin=".$result["CODE_CHAP"]."&Sexe=".$result["CODE_CHAP"]."\"><img src='./images/s_reload.png' width='16' height='16' border='0' alt=''/></a>"."</div></td>\n" );
echo( "</tr>\n" );
} 
echo( "<tr>
<td class=\"ligne\"><div align=\"center\"><font  color=\"#FFFFFF\">ACTE</div></td>
<td class=\"ligne\" ><div align=\"center\"><font  color=\"#FFFFFF\">Code ACTE</div></td>

<td class=\"ligne\"><div align=\"center\"><font  color=\"#FFFFFF\">Modification</div></td>
</tr>" );
echo( "</form >"); 
echo( "</table><br>\n" );
mysql_free_result($requete);
?>

