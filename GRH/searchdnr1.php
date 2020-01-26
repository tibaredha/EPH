<?php 
include('./SESSION/SESSION.php');
include('./class/class.php');
$structure=$_SESSION["STRUCTURE"];  
$colone=$_POST['colone'];
$word=$_POST['search'];
// $colone1=$_POST['colone1'];
// $word1=$_POST['search1'];
$query_liste = "SELECT str,idon,nomdnr,prenomdnr,iddnr,sexe,IDP,datedon,IND,GROUPAGE,RHESUS,DATENAISSANCE,SRS FROM tdon  where SRS='$structure' and $colone like '$word%'  order by IDP desc ";
$requete = mysql_query( $query_liste, $cnx ) or die( "ERREUR MYSQL numéro: ".mysql_errno()."<br>Type de cette erreur: ".mysql_error()."<br>\n" );
echo "<H3 align=\"center\">liste des donneurs trouves avec le critere choisi </H3>";
echo( "<table width=\"100%\" border=\"0\" cellpadding=\"1\" cellspacing=\"1\" align=\"center\">\n" );
echo( "<tr>
<td class=\"ligne\">LIEU</div></td>
<td class=\"ligne\">Nom Donneur</div></td>
<td class=\"ligne\">Prenom Donneur</div></td>
<td class=\"ligne\">Indication</div></td>
<td class=\"ligne\">Sexe</div></td>
<td class=\"ligne\">Date Du Don</div></td>
<td class=\"ligne\">IDP</div></td>
<td class=\"ligne\">M</div></td>
<td class=\"ligne\">S</div></td>
<td class=\"ligne\">Fiche D</div></td>
<td class=\"ligne\">carte D</div></td>
<td class=\"ligne\">carte G</div></td>
<td class=\"ligne\">CPN</div></td>
<td class=\"ligne\">CPN</div>
</td><td class=\"ligne\">RES</div></td>
<td class=\"ligne\">NDon</div></td>
</tr>" ); 
while( $result = mysql_fetch_array( $requete ) )
{
echo( "<tr class=\"resultat\" >\n" );
echo( "<td><div align=\"center\">".$result["str"]."</div></td>\n" );
echo( "<td><div align=\"left\">".$result["nomdnr"]."</div></td>\n" );
echo( "<td><div align=\"left\">".$result["prenomdnr"]."</div></td>\n" );
echo( "<td><div align=\"left\">".$result["IND"]."</div></td>\n" );
echo( "<td><div align=\"center\">".$result["sexe"]."</div></td>\n" );
echo( "<td><div align=\"center\">".$per ->dateUS2FR($result["datedon"])."</div></td>\n" );
echo( "<td bgcolor=\"#cccccc\" align=\"CENTER\"  ><div >".$result["IDP"]."</div></td>\n" );
echo( "<td><div align=\"center\">"."<a title=\"modification\" href=\"index.php?uc=MODDNRSEARCH&idon=".$result["idon"]."\"><img src='./images/e.png' width='16' height='16' border='0' alt=''/></a>"."</div></td>\n" );
echo( "<td><div align=\"center\">"."<a title=\"suppression\" href=\"index.php?uc=SUPDNRSEARCH&idon=".$result["idon"]."\"><img src='./images/s.png' width='16' height='16' border='0' alt=''/></a>"."</div></td>\n" );
echo( "<td><div align=\"center\">"."<a title=\"fiche donneur\" href=\"./1dnr/FDON.php?"."idon=".$result["idon"]."\"> <img src='./images/print.png' width='16' height='16' border='0' alt=''/></a>"."</div></td>\n" );
echo( "<td><div align=\"center\">"."<a title=\"carte donneur\" href=\"./1dnr/FCART1.php?"."idon=".$result["idon"]."\"><img  src='./images/print.png' width='16' height='16' border='0' alt=''/></a>"."</div></td>\n" );
echo( "<td><div align=\"center\">"."<a title=\"carte groupage\" href=\"./1dnr/FABOR1.php?"."idon=".$result["idon"]."\"><img src='./images/print.png' width='16' height='16' border='0' alt=''/></a>"."</div></td>\n" );
echo( "<td><div align=\"center\">"."<a title=\"CERTIFICAT MEDICAL PRENUPTIAL\" href=\"./1dnr/CPN.php?"."idon=".$result["idon"]."\"><img src='./images/CPN.png' width='16' height='16' border='0' alt=''/></a>"."</div></td>\n" );
echo( "<td><div align=\"center\">"."<a title=\"CERTIFICAT MEDICAL PRENUPTIAL1\" href=\"./1dnr/CPN1.php?"."idon=".$result["idon"]."\"><img src='./images/CPN.png' width='16' height='16' border='0' alt=''/></a>"."</div></td>\n" );
echo( "<td><div align=\"center\">"."<a title=\"resultat qualification\" href=\"./1dnr/fqua.php?"."idon=".$result["idon"]."\"><img src='./images/Folder2.png' width='16' height='16' border='0' alt=''/></a>"."</div></td>\n" );

echo( "<td><div align=\"center\">"."<a title=\"Nouveau Don\" href=\"index.php?uc=NDON&idon=".$result["idon"]."\"><img src='./images/gs.jpg' width='16' height='16' border='0' alt=''/></a>"."</div></td>\n" );

echo( "</tr>\n" );
} 
echo( "<tr>
<td class=\"ligne\">LIEU</div></td>
<td class=\"ligne\">Nom Donneur</div></td>
<td class=\"ligne\">Prenom Donneur</div></td>
<td class=\"ligne\">Indication</div></td>
<td class=\"ligne\">Sexe</div></td>
<td class=\"ligne\">Date Du Don</div></td>
<td class=\"ligne\">IDP</div></td>
<td class=\"ligne\">M</div></td>
<td class=\"ligne\">S</div></td>
<td class=\"ligne\">Fiche D</div></td>
<td class=\"ligne\">carte D</div></td>
<td class=\"ligne\">carte G</div></td>
<td class=\"ligne\">CPN</div></td>
<td class=\"ligne\">CPN</div>
</td><td class=\"ligne\">RES</div></td>
<td class=\"ligne\">NDon</div></td>
</tr>" );
echo( "</table><br>\n" );
mysql_free_result($requete);
echo "<h3 align=center>fin de la recherche ... </h3>";
$per ->f0('./1DNR/LISTDNRPDF1.PHP','post');
$per ->submit(900,200,'imprimer liste');
$per ->hide(600,310,'colone',32,$colone);
$per ->hide(600,310,'search',32,$word);
// $per ->hide(600,310,'colone1',32,$colone1);
// $per ->hide(600,310,'search1',32,$word1);
$per ->hide(600,310,'structure',32,$structure);
$per ->f1();
$per -> sautligne (1);
?>

