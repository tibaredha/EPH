<?php
$colone=$_POST['SERVICE'];
$query_liste = "SELECT idp,Nomlatin,Prenom_Latin,Prenom_Arabe,Nomarab,SERVICEar FROM grh  where cessation !='y' and SERVICEar = $colone order by Nomlatin ";
$requete = mysql_query( $query_liste, $cnx ) or die( "ERREUR MYSQL num곯: ".mysql_errno()."<br>Type de cette erreur: ".mysql_error()."<br>\n" );
$totalmbr1=mysql_num_rows($requete);
?>
<br>
<br>
<h2  align="center" class="hfgh"> القائمة الاسمية للمستخدمين  حسب المصلحة وعددهم  <?php ECHO $totalmbr1; ?> </h2>
<form action="./3SERVICE/REPGRH2.php" method="post" name="form1" id="form1">
<div style=" position:absolute;left:630px;top:200px;">	 
<input type="submit" name="VALIDER" id="VALIDER" value="اطبع القائمة" /></td>
<input type="hidden" name="SERVICE" id="VALIDER" value="<?php ECHO $colone ; ?>" /></td>
</div>
</form> 
<?php
echo( "<table border=\"1\" cellpadding=\"1\" cellspacing=\"1\" align=\"center\">\n" );
echo( "<tr>
<td bgcolor=\"#cccccc\"><div align=\"center\">Nom</div></td>
<td bgcolor=\"#cccccc\"><div align=\"center\">Prénom</div></td>
<td bgcolor=\"#cccccc\"><div align=\"center\">***</div></td>
<td bgcolor=\"#cccccc\"><div align=\"center\">الاسم</div></td>
<td bgcolor=\"#cccccc\"><div align=\"center\">اللقب</div></td>
</tr>" ); 
while( $result = mysql_fetch_array( $requete ) )
{
echo( "<tr>\n" );
echo( "<td><div align=\"left\">".$result["Nomlatin"]."</div></td>\n" );
echo( "<td><div align=\"left\">".$result["Prenom_Latin"]."</div></td>\n" );
echo( "<td><div align=\"right\">***</div></td>\n" );
echo( "<td><div align=\"right\">".$result["Prenom_Arabe"]."</div></td>\n" );
echo( "<td ><div align=\"right\">".$result["Nomarab"]."</div></td>\n" );
echo( "</tr>\n" );
} 
echo( "</table><br>\n" );
mysql_free_result($requete);
?>

