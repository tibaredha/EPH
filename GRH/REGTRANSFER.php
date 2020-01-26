<?php
$per -> mysqlconnect();
$query_liste = "SELECT grh.Nomarab as nomar,grh.Prenom_Arabe as prenomar,changeservice.idsa as servicea,changeservice.idsn as servicen,changeservice.cause as cause ,changeservice.idchangeservice as idchangeservice ,changeservice.date as date 
FROM changeservice
inner join grh
 on grh.idp=changeservice.idp
"; 
$requete = mysql_query( $query_liste ) or die( "ERREUR MYSQL num곯: ".mysql_errno()."<br>Type de cette erreur: ".mysql_error()."<br>\n" );
$totalmbr1=mysql_num_rows($requete);


?>
<br>
<br>
<h2  align="center" class="hfgh"> سجل  تحويل مصلحة  <?php //ECHO $totalmbr1; ?></h2>
<?php
echo( "<table border=\"1\" cellpadding=\"1\" cellspacing=\"1\" align=\"center\">\n" );
echo( "<tr>
<td class=\"ligne\"><div align=\"center\">الحدف</div></td>
<td class=\"ligne\"><div align=\"center\">السبب</div></td>
<td class=\"ligne\"><div align=\"center\">التاريخ</div></td>
<td class=\"ligne\"><div align=\"center\">الى</div></td>
<td class=\"ligne\"><div align=\"center\">من</div></td>
<td class=\"ligne\"><div align=\"center\">الاسم</div></td>
<td class=\"ligne\"><div align=\"center\">اللقب</div></td>
<td class=\"ligne\"><div align=\"center\">الرقم</div></td>
</tr>" ); 
while( $result = mysql_fetch_array( $requete ) )
{
echo( "<tr>\n" );
echo( "<td><div align=\"right\">"."<a title=\" الحذف النهائي من قاعدة البيانات \"href=\"index.php?uc=SUPREGSER&idchangeservice=".$result["idchangeservice"]."\"><img src='./images/b_empty.png' width='16' height='16' border='0' alt=''/></a>"."</div></td>\n" );
echo( "<td><div align=\"center\">".$result["cause"]."</div></td>\n" );
echo( "<td><div align=\"center\">".$result["date"]."</div></td>\n" );
echo( "<td><div align=\"right\">".$result["servicen"]."</div></td>\n" );
echo( "<td><div align=\"right\">".$result["servicea"]."</div></td>\n" );
echo( "<td><div align=\"right\">".$result["prenomar"]."</div></td>\n" );
echo( "<td><div align=\"right\">".$result["nomar"]."</div></td>\n" );
echo( "<td><div align=\"right\">".$result["idchangeservice"]."</div></td>\n" );

// echo( "<td><div align=\"center\">".$result["dateent"]."</div></td>\n" );
// echo( "<td><div align=\"center\">".$result["cause"]."</div></td>\n" );
// echo( "<td><div align=\"center\">".$result["remplacant"]."</div></td>\n" );

echo( "</tr>\n" );
} 
echo( "<tr>
<td class=\"ligne\"><div align=\"center\">الحدف</div></td>
<td class=\"ligne\"><div align=\"center\">السبب</div></td>
<td class=\"ligne\"><div align=\"center\">التاريخ</div></td>
<td class=\"ligne\"><div align=\"center\">الى</div></td>
<td class=\"ligne\"><div align=\"center\">من</div></td>
<td class=\"ligne\"><div align=\"center\">الاسم</div></td>
<td class=\"ligne\"><div align=\"center\">اللقب</div></td>
<td class=\"ligne\"><div align=\"center\">الرقم</div></td>
</tr>" ); 
echo( "</table><br>\n" );
mysql_free_result($requete);
?>

