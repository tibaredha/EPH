<?php
$per-> mysqlconnect(); 
$colone=$_POST['colone'];
$word=$_POST['search'];
mysql_query("SET NAMES 'UTF8' ");
$query_liste = "SELECT * FROM grh  where cessation !='y' and  $colone like '$word%'  order by Nomlatin ";
$requete = mysql_query( $query_liste ) or die( "ERREUR MYSQL num곯: ".mysql_errno()."<br>Type de cette erreur: ".mysql_error()."<br>\n" );
$totalmbr1=mysql_num_rows($requete);
?>
<br>
<h2  align="center" class="hfgh">  قائمة المستخدمين و عددهم  <?php ECHO $totalmbr1; ?>  مستخدم </h2>
<h2  align="center" class="hfgh">   <?php //echo arDate();?>  </h2>

<?php

echo( "<table width=\"75%\"border=\"0\" cellpadding=\"1\" cellspacing=\"1\" align=\"center\">\n" );
echo( "<tr>
<td class=\"ligne\"><div align=\"center\"><font  color=\"#FFFFFF\" >photos</div></td>
<td class=\"ligne\"><div align=\"center\"><font  color=\"#FFFFFF\" > حذف</div></td>
<td class=\"ligne\"><div align=\"center\"><font  color=\"#FFFFFF\" >Nom</div></td>
<td class=\"ligne\"><div align=\"center\"><font  color=\"#FFFFFF\" >Prénom</div></td>
<td class=\"ligne\"><div align=\"center\"><font  color=\"#FFFFFF\" ><img src='./images/Button Stop.png' width='16' height='16' border='0' alt=''/></div></td>
<td class=\"ligne\"><div align=\"center\"><font  color=\"#FFFFFF\" >الاب</div></td>
<td class=\"ligne\"><div align=\"center\"><font  color=\"#FFFFFF\" >الاسم</div></td>
<td class=\"ligne\"><div align=\"center\"><font  color=\"#FFFFFF\" >اللقب</div></td>
<td class=\"ligne\"><div align=\"center\"><font  color=\"#FFFFFF\" >ادارة المستخدم</div></td>
</tr>" ); 
echo( "<form action=\"tiba.php\" method=\"post\" name=\"form1\">"); 
while( $result = mysql_fetch_array( $requete ) )
{
echo( "<tr bgcolor=\"#E6E6E6\"  >\n" );

$num=$result["idp"];
echo "<td><div align=\"center\"><img src='./images/photos/$num.jpg'  width='50' height='50' border='0' alt=''/></div></td>\n" ;
echo( "<td><div align=\"center\">"."<a title=\" الحذف النهائي من قاعدة البيانات \"href=\"index.php?uc=****&idp=".$result["idp"]."\"><img src='./images/b_empty.png' width='16' height='16' border='0' alt=''/></a>"."</div></td>\n" );
//echo( "<td><div align=\"left\">"."<input type=\"text\" name=\"N"."$result[0]\" value=\"$result[0]\" size=\"5\" />"."</div></td>\n" );
echo( "<td><div align=\"left\">".$result["Nomlatin"]."</div></td>\n" );
echo( "<td><div align=\"left\">".$result["Prenom_Latin"]."</div></td>\n" );
echo( "<td><div align=\"center\"><img src='./images/Button Square.png' width='16' height='16' border='0' alt=''/></div></td>\n" );
echo( "<td><div align=\"right\">".$result["pere"]."</div></td>\n" );
echo( "<td><div align=\"right\">".$result["Prenom_Arabe"]."</div></td>\n" );
echo( "<td ><div align=\"right\">".$result["Nomarab"]."</div></td>\n" );
echo( "<td><div align=\"center\">"."<a title=\"ادارة المستخدم \"href=\"index.php?uc=LGRH1&idp=".$result["idp"]."&Nomlatin=".$result["Nomarab"]."&Prenom_Latin=".$result["Prenom_Arabe"]."&Sexe=".$result["Sexe"]."\"><img src='./images/s_reload.png' width='16' height='16' border='0' alt=''/></a>"."</div></td>\n" );
echo( "</tr>\n" );
} 
//echo( "<input type=\"submit\" name=\"VALIDER\" value=\"  اضافة\" />"); 
echo( "<tr>
<td class=\"ligne\"><div align=\"center\"><font  color=\"#FFFFFF\" >photos</div></td>
<td class=\"ligne\"><div align=\"center\"><font  color=\"#FFFFFF\" > حذف</div></td>
<td class=\"ligne\"><div align=\"center\"><font  color=\"#FFFFFF\" >Nom</div></td>
<td class=\"ligne\"><div align=\"center\"><font  color=\"#FFFFFF\" >Prénom</div></td>
<td class=\"ligne\"><div align=\"center\"><font  color=\"#FFFFFF\" ><img src='./images/Button Stop.png' width='16' height='16' border='0' alt=''/></div></td>
<td class=\"ligne\"><div align=\"center\"><font  color=\"#FFFFFF\" >الاب</div></td>
<td class=\"ligne\"><div align=\"center\"><font  color=\"#FFFFFF\" >الاسم</div></td>
<td class=\"ligne\"><div align=\"center\"><font  color=\"#FFFFFF\" >اللقب</div></td>
<td class=\"ligne\"><div align=\"center\"><font  color=\"#FFFFFF\" >ادارة المستخدم</div></td>
</tr>" );
echo( "</table><br>\n" );
mysql_free_result($requete);

?>
</br>
</br>
</br>
</br>
</br>
</br>
</br>
</br>
</br>
</br>
</br>
