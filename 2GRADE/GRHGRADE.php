<?php

mysql_query("SET NAMES 'UTF8' ");
//$query_liste = "SELECT * FROM grh  where cessation !='y' order by Nomlatin ";
 $query_liste = "SELECT service.servicear as service,grh.Sexe as Sexe ,grh.Nomlatin as Nomlatin ,grh.Prenom_Latin as Prenom_Latin,grh.Commune_Naissancear as Commune_Naissancear,grh.Date_Naissance as Date_Naissance ,grh.Prenom_Arabe as Prenom_Arabe,grh.Nomarab as Nomarab ,grh.idp as idp,grade.gradear as gradear FROM grh,grade,service where  grade.idg=grh.rnvgradear and  service.ids=grh.servicear and grh.cessation !='y' order by Nomlatin";
  //exécution de la requête:
$requete = mysql_query( $query_liste, $cnx ) or die( "ERREUR MYSQL num곯: ".mysql_errno()."<br>Type de cette erreur: ".mysql_error()."<br>\n" );
 $totalmbr1=mysql_num_rows($requete);
?>
<br>
<br>
<h2  align="center" class="hfgh"> القائمة الاسمية للمستخدمين  حسب الرتبة و عددهم   <?php ECHO $totalmbr1; ?>  مستخدم </h2>
<?php
echo( "<table border=\"1\" cellpadding=\"1\" cellspacing=\"1\" align=\"center\">\n" );
echo( "<tr>
<td bgcolor=\"#cccccc\"><div align=\"center\">nom</div></td>
<td bgcolor=\"#cccccc\"><div align=\"center\">prenom</div></td>
<td bgcolor=\"#cccccc\"><div align=\"center\">الرتبة</div></td>
<td bgcolor=\"#cccccc\"><div align=\"center\">الاسم</div></td>
<td bgcolor=\"#cccccc\"><div align=\"center\">اللقب</div></td>
<td bgcolor=\"#cccccc\"><div align=\"center\">mouvement</div></td>
</tr>" ); 
while( $result = mysql_fetch_array( $requete ) )
{
echo( "<tr>\n" );
echo( "<td><div align=\"left\">".$result["Nomlatin"]."</div></td>\n" );
echo( "<td><div align=\"left\">".$result["Prenom_Latin"]."</div></td>\n" );
echo( "<td><div align=\"right\">".$result["gradear"]."</div></td>\n" );
echo( "<td><div align=\"right\">".$result["Prenom_Arabe"]."</div></td>\n" );
echo( "<td ><div align=\"right\">".$result["Nomarab"]."</div></td>\n" );
echo( "<td><div align=\"center\">"."<a title=\"متابعة مسار مستخدم \"href=\"index.php?uc=MGRHGRADE&idp=".$result["idp"]."&Nomlatin=".$result["Nomarab"]."&Prenom_Latin=".$result["Prenom_Arabe"]."&Sexe=".$result["Sexe"]."\"><img src='./images/s_reload.png' width='16' height='16' border='0' alt=''/></a>"."</div></td>\n" );
echo( "</tr>\n" );
} 
echo( "</table><br>\n" );
mysql_free_result($requete);
?>

