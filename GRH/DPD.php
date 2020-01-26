<?php 

  
$query_liste = "SELECT COUNT(IDDNR) as nbr,NOMDNR,PRENOMDNR,IND,idon,IDDNR,str FROM tdon    GROUP BY IDDNR HAVING COUNT( IDDNR ) >1   order by nbr desc ";
$requete = mysql_query( $query_liste, $cnx ) or die( "ERREUR MYSQL numéro: ".mysql_errno()."<br>Type de cette erreur: ".mysql_error()."<br>\n" );
echo "<H3 align=\"center\"> LES DONS PAR DONNEURS   </H3>";
echo( "<table width=\"95%\" border=\"0\" cellpadding=\"1\" cellspacing=\"1\" align=\"center\">\n" );
echo( "<tr>
<td class=\"ligne\">Nombre De Don</div></td>
<td class=\"ligne\">Nom Donneur</div></td>
<td class=\"ligne\">Prenom Donneur</div></td>
<td class=\"ligne\">IDDNR</div></td>
<td class=\"ligne\">Fiche Don</div></td>
<td class=\"ligne\">carte donneur</div></td>
<td class=\"ligne\">carte groupage</div></td>
</tr>" ); 
while( $result = mysql_fetch_array( $requete ) )
{
echo( "<tr class=\"resultat\" >\n" );
echo( "<td><div align=\"center\">".$result["nbr"]."</div></td>\n" );
echo( "<td><div align=\"left\">".$result["NOMDNR"]."</div></td>\n" );
echo( "<td><div align=\"left\">".$result["PRENOMDNR"]."</div></td>\n" );
echo( "<td><div align=\"center\">".$result["IDDNR"]."</div></td>\n" );
echo( "<td><div align=\"center\">"."<a title=\"fiche donneur\" href=\"./1dnr/FDON.php?"."idon=".$result["idon"]."\"> <img src='./images/print.png' width='16' height='16' border='0' alt=''/>F</a>"."</div></td>\n" );
echo( "<td><div align=\"center\">"."<a title=\"carte donneur\" href=\"./1dnr/FCART1.php?"."idon=".$result["idon"]."\"><img  src='./images/print.png' width='16' height='16' border='0' alt=''/>C</a>"."</div></td>\n" );
echo( "<td><div align=\"center\">"."<a title=\"carte groupage\" href=\"./1dnr/FABOR1.php?"."idon=".$result["idon"]."\"><img src='./images/print.png' width='16' height='16' border='0' alt=''/>CG</a>"."</div></td>\n" );
echo( "</tr>\n" );
} 
echo( "<tr>
<td class=\"ligne\">Nombre De Don</div></td>
<td class=\"ligne\">Nom Donneur</div></td>
<td class=\"ligne\">Prenom Donneur</div></td>
<td class=\"ligne\">IDDNR</div></td>
<td class=\"ligne\">Fiche Don</div></td>
<td class=\"ligne\">carte donneur</div></td>
<td class=\"ligne\">carte groupage</div></td>
</tr>" );
echo( "</table><br>\n" );
mysql_free_result($requete);
?>


