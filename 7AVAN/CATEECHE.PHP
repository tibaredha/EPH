<?php
$per-> mysqlconnect();
$date=date("Y-12-31");
mysql_query("SET NAMES 'UTF8' ");
$query_liste = "SELECT * FROM grh  where cessation !='y' AND rnvgradear !='172'  order by PREVISION DESC";
$requete = mysql_query( $query_liste) or die( "ERREUR MYSQL num곯: ".mysql_errno()."<br>Type de cette erreur: ".mysql_error()."<br>\n" );
$totalmbr1=mysql_num_rows($requete);
?>
<br>
<br>
<h2  align="center" class="hfgh"> القائمة الاسمية للمستخدمين و عددهم الخاضعين للترقية  <?php ECHO $totalmbr1; ?>  مستخدم </h2>
<?php

echo( "<table border=\"1\" cellpadding=\"1\" cellspacing=\"1\" align=\"center\">\n" );
echo( "<tr>
<td bgcolor=\"#cccccc\"><div align=\"center\"> حذف</div></td>

<td bgcolor=\"#cccccc\"><div align=\"center\">Nom</div></td>
<td bgcolor=\"#cccccc\"><div align=\"center\">Prénom</div></td>
<td bgcolor=\"#cccccc\"><div align=\"center\"><img src='./images/Button Stop.png' width='16' height='16' border='0' alt=''/></div></td>
<td bgcolor=\"#cccccc\"><div align=\"center\">الاب</div></td>
<td bgcolor=\"#cccccc\"><div align=\"center\">الاسم</div></td>
<td bgcolor=\"#cccccc\"><div align=\"center\">اللقب</div></td>
<td bgcolor=\"#cccccc\"><div align=\"center\">تاريخ اول تعيين</div></td>

<td bgcolor=\"#cccccc\"><div align=\"center\">الصنف</div></td>
<td bgcolor=\"#cccccc\"><div align=\"center\"> الدرجة</div></td>
<td bgcolor=\"#cccccc\"><div align=\"center\"> تاريخ اخر ترقية</div></td>
<td bgcolor=\"#cccccc\"><div align=\"center\"> التاريخ التوقعي للدرجة </div></td>
<td bgcolor=\"#cccccc\"><div align=\"center\">ادارة المستخدم</div></td>
</tr>" ); 
echo( "<form action=\"tiba.php\" method=\"post\" name=\"form1\">"); 
while( $result = mysql_fetch_array( $requete ) )
{
echo( "<tr>\n" );
echo( "<td><div align=\"right\">"."<a title=\" الحذف النهائي من قاعدة البيانات \"href=\"index.php?uc=&idp=".$result["idp"]."\"><img src='./images/b_empty.png' width='16' height='16' border='0' alt=''/></a>"."</div></td>\n" );
//echo( "<td><div align=\"left\">"."<input type=\"text\" name=\"N"."$result[0]\" value=\"$result[0]\" size=\"5\" />"."</div></td>\n" );
echo( "<td><div align=\"left\">".$result["Nomlatin"]."</div></td>\n" );
echo( "<td><div align=\"left\">".$result["Prenom_Latin"]."</div></td>\n" );
echo( "<td><div align=\"center\"><img src='./images/Button Square.png' width='16' height='16' border='0' alt=''/></div></td>\n" );
echo( "<td><div align=\"right\">".$result["pere"]."</div></td>\n" );
echo( "<td><div align=\"right\">".$result["Prenom_Arabe"]."</div></td>\n" );
echo( "<td ><div align=\"right\">".$result["Nomarab"]."</div></td>\n" );


echo( "<td ><div align=\"center\">".$result["Date_Premier_Recrutement"]."</div></td>\n" );
echo( "<td ><div align=\"center\">".$result["CATEGORIE"]."</div></td>\n" );
echo( "<td ><div align=\"center\">".$result["ECHELON"]."</div></td>\n" );
echo( "<td ><div align=\"right\">".$result["DATEDEFFET"]."</div></td>\n" );
echo( "<td ><div align=\"right\">".$result["PREVISION"]."</div></td>\n" );


echo( "<td><div align=\"center\">"."<a title=\"ادارة المستخدم \"href=\"index.php?uc=LGRH1&idp=".$result["idp"]."&Nomlatin=".$result["Nomarab"]."&Prenom_Latin=".$result["Prenom_Arabe"]."&Sexe=".$result["Sexe"]."\"><img src='./images/s_reload.png' width='16' height='16' border='0' alt=''/></a>"."</div></td>\n" );
echo( "</tr>\n" );
} 
//echo( "<input type=\"submit\" name=\"VALIDER\" value=\"  اضافة\" />"); 

echo( "</table><br>\n" );
mysql_free_result($requete);
?>

