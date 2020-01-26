<?php
$per-> mysqlconnect();
$query_liste = "SELECT * FROM CIM ORDER BY diag_nom ";
$requete = mysql_query( $query_liste ) or die( "ERREUR MYSQL num곯: ".mysql_errno()."<br>Type de cette erreur: ".mysql_error()."<br>\n" );
$totalmbr1=mysql_num_rows($requete);
echo"<br>"; 
echo"<h2  align=\"center\" class=\"hfgh\"> CIM 10 NBR Total $totalmbr1 diagnostics</h2>"; 


echo"<br><br><br><br><br>"; 
$per ->label(40+280,280,'Chapitre');     $per ->CHAPITRE(180+280,280,'CHAPITRE','grh','CHAPITRE');  
$per ->label(40+280,350,'Sous-Categorie');    $per ->CATEGORIECIM(180+280,350,'CATEGORIECIM'); 
echo"<br><br><br><br><br>"; 
echo( "<table width=\"60%\" border=\"0\" cellpadding=\"1\" cellspacing=\"1\" align=\"center\">\n" );
echo( "<tr>
<td class=\"ligne\"><div align=\"center\"><font  color=\"#FFFFFF\">Diagnostic</div></td>
<td class=\"ligne\" ><div align=\"center\"><font  color=\"#FFFFFF\">Code Diag</div></td>

<td class=\"ligne\"><div align=\"center\"><font  color=\"#FFFFFF\">Modification</div></td>
</tr>" ); 
echo( "<form action=\"index.php?uc=cheked \" method=\"post\" name=\"form1\">"); 
while( $result = mysql_fetch_array( $requete ) )
{
echo( "<tr bgcolor=\"#E6E6E6\" >\n" );
//supression desactive
//echo( "<td><div align=\"center\">"."<a title=\" الحذف النهائي من قاعدة البيانات \" href=\"\"  onclick=\"ConfirmDeleteMessage('index.php?uc=***&idp=".$result["row_id"]."'); return false;\"><img src='./images/b_empty.png' width='16' height='16' border='0' alt=''  /></a>"."</div></td>\n" );
echo( "<td \"><div align=\"LEFT\">".$result["diag_nom"]."</div></td>\n" );
echo( "<td class=\"ligne1\" ><div align=\"center\">".$result["diag_cod"]."</div></td>\n" );
echo( "<td class=\"ligne1\"><div align=\"center\">"."<a title=\"modification cim \"href=\"index.php?uc=MCIM&idp=".$result["row_id"]."&Nomlatin=".$result["diag_cod"]."&Prenom_Latin=".$result["diag_cod"]."&Sexe=".$result["diag_cod"]."\"><img src='./images/s_reload.png' width='16' height='16' border='0' alt=''/></a>"."</div></td>\n" );
echo( "</tr>\n" );
} 
echo( "<tr>
<td class=\"ligne\"><div align=\"center\"><font  color=\"#FFFFFF\">Diagnostic</div></td>
<td class=\"ligne\" ><div align=\"center\"><font  color=\"#FFFFFF\">Code Diag</div></td>

<td class=\"ligne\"><div align=\"center\"><font  color=\"#FFFFFF\">Modification</div></td>
</tr>" );
echo( "</form >"); 
echo( "</table><br>\n" );
mysql_free_result($requete);
?>

