<?php include('./SESSION/SESSION.php'); ?>
<?php include('fonction.php'); ?>
<script type="text/javascript" language="javascript">
function ConfirmDeleteMessage(URL)
{
   if (confirm("Confirmez-vous la suppression ?"))
   {
       window.location = URL;
   }
}
</script>

<?php
mysql_query("SET NAMES 'UTF8' ");
//remarque la clause (and rnvgradear !=172)  a ete ajoute pour selection des titulaire 
$query_liste = "SELECT * FROM grh  where cessation !='y' and rnvgradear =6 order by Nomarab ";
$requete = mysql_query( $query_liste, $cnx ) or die( "ERREUR MYSQL num곯: ".mysql_errno()."<br>Type de cette erreur: ".mysql_error()."<br>\n" );
$totalmbr1=mysql_num_rows($requete);
?>
<br>
<h2  align="center" class="hfgh">تحصيل المداومة </h2>
<h2  align="center" class="hfgh">طبيب عام رئيسي في الصحة العمومية</h2>
<?php

echo( "<table width=\"75%\" border=\"0\" cellpadding=\"1\" cellspacing=\"1\" align=\"center\">\n" );
echo( "<tr>
<td bgcolor=\"#993333\"><div align=\"center\"><font  color=\"#FFFFFF\">الملاحضة</div></td>
<td bgcolor=\"#993333\"><div align=\"center\"><font  color=\"#FFFFFF\">الاعياد</div></td>
<td bgcolor=\"#993333\"><div align=\"center\"><font  color=\"#FFFFFF\">نهاية الاسبوع</div></td>
<td bgcolor=\"#993333\"><div align=\"center\"><font  color=\"#FFFFFF\">ايام عادية</div></td>
<td bgcolor=\"#993333\"><div align=\"center\"><font  color=\"#FFFFFF\">الاسم</div></td>
<td bgcolor=\"#993333\"><div align=\"center\"><font  color=\"#FFFFFF\">اللقب</div></td>
<td bgcolor=\"#993333\"><div align=\"center\"><font  color=\"#FFFFFF\">تبديل مداومة</div></td>
</tr>" ); 
echo( "<form action=\"./garde/RGARDE6.php \" method=\"post\" name=\"form1\">"); 
while( $result = mysql_fetch_array( $requete ) )
{
echo( "<tr bgcolor=\"#E6E6E6\" >\n" );
echo ("<td align=center><input type='text' name='state3[]'       size='15'  STYLE='Text-ALIGN:center'  value='***' ></td>");
echo ("<td align=center><input type='text' name='state2[]'       size='5'   STYLE='Text-ALIGN:center'  value='0' ></td>");
echo ("<td align=center><input type='text' name='state1[]'       size='5'   STYLE='Text-ALIGN:center'  value='0'></td>");
echo ("<td align=center><input type='text' name='state0[]'       size='5'   STYLE='Text-ALIGN:center'  value='0' ></td>");
echo ("<td align=center><input type='text' name='Prenom_Arabe[]' size='15'  STYLE='Text-ALIGN:center'  value='".$result["Prenom_Arabe"]."' ></td>\n");
echo ("<td align=center><input type='text' name='Nomarab[]'      size='15'  STYLE='Text-ALIGN:center'  value='".$result["Nomarab"]."' ></td>\n");
echo( "<td><div align=\"center\">"."<a title=\"ادارة المستخدم \"href=\"index.php?uc=DEMPERGP&idp=".$result["idp"]."&Nomlatin=".$result["Nomarab"]."&Prenom_Latin=".$result["Prenom_Arabe"]."&Sexe=".$result["Sexe"]."\"><img src='./images/s_reload.png' width='16' height='16' border='0' alt=''/></a>"."</div></td>\n" );
echo( "</tr>\n" );
} 
echo( "<h2 align=\"center\"  ><input type=\"submit\" name=\"VALIDER\" value=\"  تحصيل المداومة   \" /></h2>"); 
echo( "<tr>
<td bgcolor=\"#993333\"><div align=\"center\"><font  color=\"#FFFFFF\">الملاحضة</div></td>
<td bgcolor=\"#993333\"><div align=\"center\"><font  color=\"#FFFFFF\">الاعياد</div></td>
<td bgcolor=\"#993333\"><div align=\"center\"><font  color=\"#FFFFFF\">نهاية الاسبوع</div></td>
<td bgcolor=\"#993333\"><div align=\"center\"><font  color=\"#FFFFFF\">ايام عادية</div></td>
<td bgcolor=\"#993333\"><div align=\"center\"><font  color=\"#FFFFFF\">الاسم</div></td>
<td bgcolor=\"#993333\"><div align=\"center\"><font  color=\"#FFFFFF\">اللقب</div></td>
<td bgcolor=\"#993333\"><div align=\"center\"><font  color=\"#FFFFFF\">تبديل مداومة</div></td>
</tr>" ); 
echo( "</form >"); 
echo( "</table><br>\n" );
mysql_free_result($requete);
?>














