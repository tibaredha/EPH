<?php
$per-> mysqlconnect();
$query_liste = "SELECT * FROM grh WHERE cessation=''  and rnvgradear=1 or rnvgradear=3   order by Nomlatin  ";
$requete = mysql_query( $query_liste) or die( "ERREUR MYSQL num곯: ".mysql_errno()."<br>Type de cette erreur: ".mysql_error()."<br>\n" );
?>
<br>
<h2  align="center" class="hfgh"> القائمة الاسمية للمختصين</h2>
<?php
// il faut regler la presence de la collone annee  dans la base de donne en foction de chaque nouvelle annee avec une fonction  en instance  
$ANNEE=date("Y");
$ANNEE2=date("Y")-1;
$ANNEE3=date("Y")-2;
echo( "<table  border=\"0\" cellpadding=\"1\" cellspacing=\"1\" align=\"center\">\n" );
echo( "<tr>
<td class=\"ligne\"><div align=\"center\"><font  color=\"#FFFFFF\" >idp</div></td>
<td class=\"ligne\"><div align=\"center\"><font  color=\"#FFFFFF\" >Nom</div></td>
<td class=\"ligne\"><div align=\"center\"><font  color=\"#FFFFFF\" >Prenom</div></td>
<td class=\"ligne\"><div align=\"center\"><font  color=\"#FFFFFF\" >specialite </div></td>
<td class=\"ligne\"><div align=\"center\"><font  color=\"#FFFFFF\" >التخصص</div></td>
<td class=\"ligne\"><div align=\"center\"><font  color=\"#FFFFFF\" > الاسم</div></td>
<td class=\"ligne\"><div align=\"center\"><font  color=\"#FFFFFF\" > القب/div></td>
<td class=\"ligne\"><div align=\"center\"><font  color=\"#FFFFFF\" > تعديل</div></td>

</tr>" ); 
while( $result = mysql_fetch_array( $requete ) )
{
echo( "<tr bgcolor=\"#E6E6E6\" >\n" );
echo( "<td><div align=\"center\">".$result["idp"]."</div></td>\n" );
echo( "<td><div align=\"left\">".$result["Nomlatin"]."</div></td>\n" );
echo( "<td><div align=\"left\">".$result["Prenom_Latin"]."</div></td>\n" );
echo( "<td><div align=\"left\">".$per->nbrtostring("grh","specialite","idspecialite",$result["FILIEREFR"],"specialitefr") ."</div></td>\n" );
echo( "<td><div align=\"right\">".$per->nbrtostring("grh","specialite","idspecialite",$result["FILIEREFR"],"specialitear")."</div></td>\n" );
echo( "<td><div align=\"right\">".$result["Prenom_Arabe"]."</div></td>\n" );
echo( "<td><div align=\"right\">".$result["Nomarab"]."</div></td>\n" );
echo( "<td><div align=\"center\">"."<a href=\"index.php?uc=MSPECIALISTE&idp=".$result["idp"]."\"><img src='./images/E.png' width='16' height='16' border='0' alt=''/></a>"."</div></td>\n" );
echo( "</tr>\n" );
} 
echo( "<tr>
<td class=\"ligne\"><div align=\"center\"><font  color=\"#FFFFFF\" >idp</div></td>
<td class=\"ligne\"><div align=\"center\"><font  color=\"#FFFFFF\" >Nom</div></td>
<td class=\"ligne\"><div align=\"center\"><font  color=\"#FFFFFF\" >Prenom</div></td>
<td class=\"ligne\"><div align=\"center\"><font  color=\"#FFFFFF\" >specialite </div></td>
<td class=\"ligne\"><div align=\"center\"><font  color=\"#FFFFFF\" >التخصص</div></td>
<td class=\"ligne\"><div align=\"center\"><font  color=\"#FFFFFF\" > الاسم</div></td>
<td class=\"ligne\"><div align=\"center\"><font  color=\"#FFFFFF\" > القب/div></td>
<td class=\"ligne\"><div align=\"center\"><font  color=\"#FFFFFF\" > تعديل</div></td>

</tr>" );
echo( "</table><br>\n" );
mysql_free_result($requete);
?>

