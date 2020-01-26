<?php 
$per-> mysqlconnect();


$word=$_POST['search'];
// $colone1=$_POST['colone1'];
// $word1=$_POST['search1'];
$query_liste = "SELECT Nomlatin FROM grh  where  Nomlatin = '$word'  order by IDP desc ";
$requete = mysql_query( $query_liste ) or die( "ERREUR MYSQL numéro: ".mysql_errno()."<br>Type de cette erreur: ".mysql_error()."<br>\n" );
echo "<H3 align=\"center\">liste  trouves avec le critere choisi </H3>";
echo( "<table width=\"100%\" border=\"0\" cellpadding=\"1\" cellspacing=\"1\" align=\"center\">\n" );
echo( "<tr>
<td class=\"ligne\">LIEU</div></td>
<td class=\"ligne\">LIEU</div></td>
</tr>" ); 
while( $result = mysql_fetch_array( $requete ) )
{
echo( "<tr class=\"resultat\" >\n" );
echo( "<td><div align=\"center\">".$result["0"]."</div></td>\n" );
echo( "<td bgcolor=\"#cccccc\" align=\"CENTER\"  ><div >".$result["0"]."</div></td>\n" );
echo( "</tr>\n" );
} 
echo( "<tr>
<td class=\"ligne\">LIEU</div></td>
<td class=\"ligne\">Nom Donneur</div></td>

</tr>" );
echo( "</table><br>\n" );
mysql_free_result($requete);
echo "<h3 align=center>fin de la recherche ... </h3>";

$per -> sautligne (1);
?>

