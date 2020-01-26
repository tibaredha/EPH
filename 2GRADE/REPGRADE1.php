<?php
$per-> mysqlconnect();
$colone=$_GET['GRADE'];
$query_liste = "SELECT idp,Nomlatin,Prenom_Latin,Prenom_Arabe,Nomarab,rnvgradear FROM grh  where cessation !='y' and rnvgradear = $colone order by Nomlatin ";
$requete = mysql_query( $query_liste ) or die( "ERREUR MYSQL num곯: ".mysql_errno()."<br>Type de cette erreur: ".mysql_error()."<br>\n" );
$totalmbr1=mysql_num_rows($requete);
$per ->h(2,470,180,'القائمة الاسمية للمستخدمين  حسب  الرتبة  وعددهم'.$totalmbr1);
$per -> sautligne (3);
$per ->f0('./2grade/REPGRADE2.PHP','post');
$per ->submit(1110,200,'اطبع القائمة');
$per ->hide(595,90,'GRADE',20,$_GET["GRADE"]); 
$per ->f1();
echo( "<table border=\"1\" cellpadding=\"1\" cellspacing=\"1\" align=\"center\">\n" );
echo( "<tr>
<td class=\"ligne\"><div align=\"center\"><font  color=\"#FFFFFF\" >photos</div></td>
<td class=\"ligne\"><div align=\"center\">Nom</div></td>
<td class=\"ligne\"><div align=\"center\">Prénom</div></td>
<td class=\"ligne\"><div align=\"center\">***</div></td>
<td class=\"ligne\"><div align=\"center\">الاسم</div></td>
<td class=\"ligne\"><div align=\"center\">اللقب</div></td>
</tr>" ); 
while( $result = mysql_fetch_array( $requete ) )
{
echo( "<tr>\n" );
$num=$result["idp"];
echo "<td class=\"ligne\" ><div align=\"center\"><img src='./images/photos/$num.jpg'  width='50' height='50' border='0' alt=''/></div></td>\n" ;
echo( "<td class=\"ligne1\" ><div align=\"left\">".$result["Nomlatin"]."</div></td>\n" );
echo( "<td class=\"ligne1\"><div align=\"left\">".$result["Prenom_Latin"]."</div></td>\n" );
echo( "<td class=\"ligne1\" ><div align=\"right\">***</div></td>\n" );
echo( "<td class=\"ligne1\" ><div align=\"right\">".$result["Prenom_Arabe"]."</div></td>\n" );
echo( "<td class=\"ligne1\" ><div align=\"right\">".$result["Nomarab"]."</div></td>\n" );
echo( "</tr>\n" );
} 
echo( "<tr>
<td class=\"ligne\"><div align=\"center\"><font  color=\"#FFFFFF\" >photos</div></td>
<td class=\"ligne\"><div align=\"center\">Nom</div></td>
<td class=\"ligne\"><div align=\"center\">Prénom</div></td>
<td class=\"ligne\"><div align=\"center\">***</div></td>
<td class=\"ligne\"><div align=\"center\">الاسم</div></td>
<td class=\"ligne\"><div align=\"center\">اللقب</div></td>
</tr>" );
echo( "</table><br>\n" );
mysql_free_result($requete);
?>

