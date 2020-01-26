<style type="text/css">
input { text-align:center; }
</style>
<?php 
$query_liste = "SELECT * FROM com where IDWIL=17000 ";//
$requete = mysql_query( $query_liste ) or die( "ERREUR MYSQL numéro: ".mysql_errno()."<br>Type de cette erreur: ".mysql_error()."<br>\n" );
$per ->h(2,550,180,'Bultin Epidemiologique Instantané');
$per -> sautligne (3);
$per ->f0('./5EVA/BENTCOM.PHP','post');
// $per ->submit(920,200,'Entree Produit');
echo( "<table width=\"85%\" border=\"0\" cellpadding=\"1\" cellspacing=\"1\" align=\"center\">\n" );
echo( "<tr>
<td ROWSPAN=4 class=\"ligne0\">Résidence</td>
<td COLSPAN=10 class=\"ligne0\">Année de décés </td>
</tr>" );
echo( "<tr>
<td COLSPAN=2 class=\"ligne0\">2010</td>
<td COLSPAN=2 class=\"ligne0\">2011</td>
<td COLSPAN=2 class=\"ligne0\">2012</td>
<td COLSPAN=2 class=\"ligne0\">2013</td>
<td COLSPAN=2 class=\"ligne0\">2014</td>
</tr>" );
$per->nbrhemototald("2010-01-01","2010-21-31");
echo "<tr>";
echo "<td COLSPAN=2 class=\"ligne0\">N=".$per->nbrhemototald("2010-01-01","2010-12-31")."</td>";
echo "<td COLSPAN=2 class=\"ligne0\">N=".$per->nbrhemototald("2011-01-01","2011-12-31")."</td>";
echo "<td COLSPAN=2 class=\"ligne0\">N=".$per->nbrhemototald("2012-01-01","2012-12-31")."</td>";
echo "<td COLSPAN=2 class=\"ligne0\">N=".$per->nbrhemototald("2013-01-01","2013-12-31")."</td>";
echo "<td COLSPAN=2 class=\"ligne0\">N=".$per->nbrhemototald("2014-01-01","2014-12-31")."</td>";
echo"</tr>" ;
echo( "<tr>
<td class=\"ligne0\">n</td>
<td class=\"ligne0\">%</td>
<td class=\"ligne0\">n</td>
<td class=\"ligne0\">%</td>
<td class=\"ligne0\">n</td>
<td class=\"ligne0\">%</td>
<td class=\"ligne0\">n</td>
<td class=\"ligne0\">%</td>
<td class=\"ligne0\">n</td>
<td class=\"ligne0\">%</td>
</tr>" );
//ajoute remarque /date premption
while( $result = mysql_fetch_array( $requete ) )
{
echo( "<tr class=\"resultat\" >\n" );
echo( "<td class=\"ligne0\" ><div align=\"left\">".$result["COMMUNE"]."</div></td>\n" );
echo( "<td class=\"ligne00\" ><div align1=\"center\">".$per->nbrhemod("2010-01-01","2010-12-31",$result["IDCOM"]) ."</div></td>\n" );
echo( "<td class=\"lignep\"><div align=\"center\">".$per->rapport("2010-01-01","2010-12-31",$result["IDCOM"])  ."</div></td>\n" );
echo( "<td class=\"ligne00\" ><div align=\"center\">".$per->nbrhemod("2011-01-01","2011-12-31",$result["IDCOM"]) ."</div></td>\n" );
echo( "<td class=\"lignep\"><div align=\"center\">".$per->rapport("2011-01-01","2011-12-31",$result["IDCOM"])  ."</div></td>\n" );
echo( "<td class=\"ligne00\"><div align=\"center\">".$per->nbrhemod("2012-01-01","2012-12-31",$result["IDCOM"])."</div></td>\n" );
echo( "<td class=\"lignep\"><div align=\"center\">".$per->rapport("2012-01-01","2012-12-31",$result["IDCOM"])  ."</div></td>\n" );
echo( "<td class=\"ligne00\"><div align=\"center\">".$per->nbrhemod("2013-01-01","2013-12-31",$result["IDCOM"])."</div></td>\n" );
echo( "<td class=\"lignep\"><div align=\"center\">".$per->rapport("2013-01-01","2013-12-31",$result["IDCOM"])  ."</div></td>\n" );
echo( "<td class=\"ligne00\"><div align=\"center\">".$per->nbrhemod("2014-01-01","2014-12-31",$result["IDCOM"])."</div></td>\n" );
echo( "<td class=\"lignep\"><div align=\"center\">".$per->rapport("2014-01-01","2014-12-31",$result["IDCOM"])  ."</div></td>\n" );
echo( "</tr>\n" );
} 



//***************************************************************************//// la  somme des hor wilaya
// $query_liste = "SELECT * FROM com where IDWIL!=17000 ";//
// $requete = mysql_query( $query_liste ) or die( "ERREUR MYSQL numéro: ".mysql_errno()."<br>Type de cette erreur: ".mysql_error()."<br>\n" );
// echo( "<tr class=\"resultat\" >\n" );
// echo( "<td class=\"ligne0\" ><div align=\"left\"> Hors wilaya  </div></td>\n" );
// echo( "<td class=\"ligne00\" ><div align1=\"center\">".$per->nbrhemo("2010-01-01","2010-12-31",$result["IDCOM"]) ."</div></td>\n" );
// echo( "<td class=\"lignep\"><div align=\"center\">".round($per->nbrhemo("2010-01-01","2010-12-31",$result["IDCOM"]) / $per ->nbrhemototal("2010-01-01","2010-12-31") ,2)  ."</div></td>\n" );
// echo( "<td class=\"ligne00\" ><div align=\"center\">".$per->nbrhemo("2011-01-01","2011-12-31",$result["IDCOM"]) ."</div></td>\n" );
// echo( "<td class=\"lignep\"><div align=\"center\">".round($per->nbrhemo("2011-01-01","2011-12-31",$result["IDCOM"]) / $per ->nbrhemototal("2011-01-01","2011-12-31"),2) ."</div></td>\n" );
// echo( "<td class=\"ligne00\"><div align=\"center\">".$per->nbrhemo("2012-01-01","2012-12-31",$result["IDCOM"])."</div></td>\n" );
// echo( "<td class=\"lignep\"><div align=\"center\">".round($per->nbrhemo("2012-01-01","2012-12-31",$result["IDCOM"]) / $per ->nbrhemototal("2012-01-01","2012-12-31"),2)."</div></td>\n" );
// echo( "<td class=\"ligne00\"><div align=\"center\">".$per->nbrhemo("2013-01-01","2013-12-31",$result["IDCOM"])."</div></td>\n" );
// echo( "<td class=\"lignep\"><div align=\"center\">".round($per->nbrhemo("2013-01-01","2013-12-31",$result["IDCOM"]) / $per ->nbrhemototal("2013-01-01","2013-12-31"),2)."</div></td>\n" );
// echo( "<td class=\"ligne00\"><div align=\"center\">".$per->nbrhemo("2014-01-01","2014-12-31",$result["IDCOM"])."</div></td>\n" );
// echo( "<td class=\"lignep\"><div align=\"center\">".round($per->nbrhemo("2014-01-01","2014-12-31",$result["IDCOM"]) / $per ->nbrhemototal("2014-01-01","2014-12-31"),2)."</div></td>\n" );
// echo( "</tr>\n" );
//***************************************************************************//
echo( "<tr><td COLSPAN=11 class=\"ligne0\">Résidence</td></tr>" );
echo( "</table><br>\n" );


//*****************************************************************************************************//
// $per -> sautligne (1);
// echo( "<table width=\"85%\" border=\"0\" cellpadding=\"1\" cellspacing=\"1\" align=\"center\">\n" );
// echo( "<tr>
// <td ROWSPAN=4 class=\"ligne0\">Néphropathie</td>
// <td COLSPAN=10 class=\"ligne0\">Année de mise en dialyse</td>
// </tr>" );
// echo( "<tr>
// <td COLSPAN=2 class=\"ligne0\">2010</td>
// <td COLSPAN=2 class=\"ligne0\">2011</td>
// <td COLSPAN=2 class=\"ligne0\">2012</td>
// <td COLSPAN=2 class=\"ligne0\">2013</td>
// <td COLSPAN=2 class=\"ligne0\">2014</td>
// </tr>" );
// $per->nbrhemototal("2010-01-01","2010-21-31");
// echo "<tr>";
// echo "<td COLSPAN=2 class=\"ligne0\">N=".$per->nbrhemototal("2010-01-01","2010-12-31")."</td>";
// echo "<td COLSPAN=2 class=\"ligne0\">N=".$per->nbrhemototal("2011-01-01","2011-12-31")."</td>";
// echo "<td COLSPAN=2 class=\"ligne0\">N=".$per->nbrhemototal("2012-01-01","2012-12-31")."</td>";
// echo "<td COLSPAN=2 class=\"ligne0\">N=".$per->nbrhemototal("2013-01-01","2013-12-31")."</td>";
// echo "<td COLSPAN=2 class=\"ligne0\">N=".$per->nbrhemototal("2014-01-01","2014-12-31")."</td>";
// echo"</tr>" ;
// echo( "<tr>
// <td class=\"ligne0\">n</td>
// <td class=\"ligne0\">%</td>
// <td class=\"ligne0\">n</td>
// <td class=\"ligne0\">%</td>
// <td class=\"ligne0\">n</td>
// <td class=\"ligne0\">%</td>
// <td class=\"ligne0\">n</td>
// <td class=\"ligne0\">%</td>
// <td class=\"ligne0\">n</td>
// <td class=\"ligne0\">%</td>
// </tr>" );

// echo "<tr>";
// echo "<td class=\"ligne0\">HTA</td>";
// echo "<td class=\"ligne00\">".$per->nbrhemocarct("2010-01-01","2010-12-31","CAUSEMALAD","HTA")."</td>";
// echo "<td class=\"ligne00\">".round($per->nbrhemocarct("2010-01-01","2010-12-31","CAUSEMALAD","HTA") / $per->nbrhemototal("2010-01-01","2010-12-31"),2)."</td>";
// echo "<td class=\"ligne00\">".$per->nbrhemocarct("2011-01-01","2011-12-31","CAUSEMALAD","HTA")."</td>";
// echo "<td class=\"ligne00\">".round($per->nbrhemocarct("2011-01-01","2011-12-31","CAUSEMALAD","HTA")/ $per->nbrhemototal("2011-01-01","2011-12-31"),2)."</td>";
// echo "<td class=\"ligne00\">".$per->nbrhemocarct("2012-01-01","2012-12-31","CAUSEMALAD","HTA")."</td>";
// echo "<td class=\"ligne00\">".round($per->nbrhemocarct("2012-01-01","2012-12-31","CAUSEMALAD","HTA")/ $per->nbrhemototal("2012-01-01","2012-12-31"),2)."</td>";
// echo "<td class=\"ligne00\">".$per->nbrhemocarct("2013-01-01","2013-12-31","CAUSEMALAD","HTA")."</td>";
// echo "<td class=\"ligne00\">".round($per->nbrhemocarct("2013-01-01","2013-12-31","CAUSEMALAD","HTA")/ $per->nbrhemototal("2013-01-01","2013-12-31"),2)."</td>";
// echo "<td class=\"ligne00\">".$per->nbrhemocarct("2014-01-01","2014-12-31","CAUSEMALAD","HTA")."</td>";
// echo "<td class=\"ligne00\">".round($per->nbrhemocarct("2014-01-01","2014-12-31","CAUSEMALAD","HTA")/ $per->nbrhemototal("2014-01-01","2014-12-31"),2)."</td>";
// echo"</tr>" ;

// echo "<tr>";
// echo "<td class=\"ligne0\">Diabete</td>";
// echo "<td class=\"ligne00\">".$per->nbrhemocarct("2010-01-01","2010-12-31","CAUSEMALAD","DIABETE")."</td>";
// echo "<td class=\"ligne00\">".round($per->nbrhemocarct("2010-01-01","2010-12-31","CAUSEMALAD","DIABETE") / $per->nbrhemototal("2010-01-01","2010-12-31"),2)."</td>";
// echo "<td class=\"ligne00\">".$per->nbrhemocarct("2011-01-01","2011-12-31","CAUSEMALAD","DIABETE")."</td>";
// echo "<td class=\"ligne00\">".round($per->nbrhemocarct("2011-01-01","2011-12-31","CAUSEMALAD","DIABETE")/ $per->nbrhemototal("2011-01-01","2011-12-31"),2)."</td>";
// echo "<td class=\"ligne00\">".$per->nbrhemocarct("2012-01-01","2012-12-31","CAUSEMALAD","DIABETE")."</td>";
// echo "<td class=\"ligne00\">".round($per->nbrhemocarct("2012-01-01","2012-12-31","CAUSEMALAD","DIABETE")/ $per->nbrhemototal("2012-01-01","2012-12-31"),2)."</td>";
// echo "<td class=\"ligne00\">".$per->nbrhemocarct("2013-01-01","2013-12-31","CAUSEMALAD","DIABETE")."</td>";
// echo "<td class=\"ligne00\">".round($per->nbrhemocarct("2013-01-01","2013-12-31","CAUSEMALAD","DIABETE")/ $per->nbrhemototal("2013-01-01","2013-12-31"),2)."</td>";
// echo "<td class=\"ligne00\">".$per->nbrhemocarct("2014-01-01","2014-12-31","CAUSEMALAD","DIABETE")."</td>";
// echo "<td class=\"ligne00\">".round($per->nbrhemocarct("2014-01-01","2014-12-31","CAUSEMALAD","DIABETE")/ $per->nbrhemototal("2014-01-01","2014-12-31"),2)."</td>";
// echo"</tr>" ;

// echo "<tr>";
// echo "<td class=\"ligne0\">Polykystose renale</td>";
// echo "<td class=\"ligne00\">".$per->nbrhemocarct("2010-01-01","2010-12-31","CAUSEMALAD","PKR")."</td>";
// echo "<td class=\"ligne00\">".round($per->nbrhemocarct("2010-01-01","2010-12-31","CAUSEMALAD","PKR") / $per->nbrhemototal("2010-01-01","2010-12-31"),2)."</td>";
// echo "<td class=\"ligne00\">".$per->nbrhemocarct("2011-01-01","2011-12-31","CAUSEMALAD","PKR")."</td>";
// echo "<td class=\"ligne00\">".round($per->nbrhemocarct("2011-01-01","2011-12-31","CAUSEMALAD","PKR")/ $per->nbrhemototal("2011-01-01","2011-12-31"),2)."</td>";
// echo "<td class=\"ligne00\">".$per->nbrhemocarct("2012-01-01","2012-12-31","CAUSEMALAD","PKR")."</td>";
// echo "<td class=\"ligne00\">".round($per->nbrhemocarct("2012-01-01","2012-12-31","CAUSEMALAD","PKR")/ $per->nbrhemototal("2012-01-01","2012-12-31"),2)."</td>";
// echo "<td class=\"ligne00\">".$per->nbrhemocarct("2013-01-01","2013-12-31","CAUSEMALAD","PKR")."</td>";
// echo "<td class=\"ligne00\">".round($per->nbrhemocarct("2013-01-01","2013-12-31","CAUSEMALAD","PKR")/ $per->nbrhemototal("2013-01-01","2013-12-31"),2)."</td>";
// echo "<td class=\"ligne00\">".$per->nbrhemocarct("2014-01-01","2014-12-31","CAUSEMALAD","PKR")."</td>";
// echo "<td class=\"ligne00\">".round($per->nbrhemocarct("2014-01-01","2014-12-31","CAUSEMALAD","PKR")/ $per->nbrhemototal("2014-01-01","2014-12-31"),2)."</td>";
// echo"</tr>" ;

// echo "<tr>";
// echo "<td class=\"ligne0\">*Glomérulonéphrite chronique</td>";
// echo "<td class=\"ligne00\">0</td>";
// echo "<td class=\"ligne00\">0</td>";
// echo "<td class=\"ligne00\">0</td>";
// echo "<td class=\"ligne00\">0</td>";
// echo "<td class=\"ligne00\">0</td>";
// echo "<td class=\"ligne00\">0</td>";
// echo "<td class=\"ligne00\">0</td>";
// echo "<td class=\"ligne00\">0</td>";
// echo "<td class=\"ligne00\">0</td>";
// echo "<td class=\"ligne00\">0</td>";
// echo"</tr>" ;


// echo "<tr>";
// echo "<td class=\"ligne0\">*Pylonéphrite chronique</td>";
// echo "<td class=\"ligne00\">0</td>";
// echo "<td class=\"ligne00\">0</td>";
// echo "<td class=\"ligne00\">0</td>";
// echo "<td class=\"ligne00\">0</td>";
// echo "<td class=\"ligne00\">0</td>";
// echo "<td class=\"ligne00\">0</td>";
// echo "<td class=\"ligne00\">0</td>";
// echo "<td class=\"ligne00\">0</td>";
// echo "<td class=\"ligne00\">0</td>";
// echo "<td class=\"ligne00\">0</td>";
// echo"</tr>" ;

// echo "<tr>";
// echo "<td class=\"ligne0\">*Vasculaire</td>";
// echo "<td class=\"ligne00\">0</td>";
// echo "<td class=\"ligne00\">0</td>";
// echo "<td class=\"ligne00\">0</td>";
// echo "<td class=\"ligne00\">0</td>";
// echo "<td class=\"ligne00\">0</td>";
// echo "<td class=\"ligne00\">0</td>";
// echo "<td class=\"ligne00\">0</td>";
// echo "<td class=\"ligne00\">0</td>";
// echo "<td class=\"ligne00\">0</td>";
// echo "<td class=\"ligne00\">0</td>";
// echo"</tr>" ;

// echo "<tr>";
// echo "<td class=\"ligne0\">*Autre</td>";
// echo "<td class=\"ligne00\">0</td>";
// echo "<td class=\"ligne00\">0</td>";
// echo "<td class=\"ligne00\">0</td>";
// echo "<td class=\"ligne00\">0</td>";
// echo "<td class=\"ligne00\">0</td>";
// echo "<td class=\"ligne00\">0</td>";
// echo "<td class=\"ligne00\">0</td>";
// echo "<td class=\"ligne00\">0</td>";
// echo "<td class=\"ligne00\">0</td>";
// echo "<td class=\"ligne00\">0</td>";
// echo"</tr>" ;

// echo "<tr>";
// echo "<td class=\"ligne0\">Inconnu</td>";
// echo "<td class=\"ligne00\">".$per->nbrhemocarct("2010-01-01","2010-12-31","CAUSEMALAD","X")."</td>";
// echo "<td class=\"ligne00\">".round($per->nbrhemocarct("2010-01-01","2010-12-31","CAUSEMALAD","X") / $per->nbrhemototal("2010-01-01","2010-12-31"),2)."</td>";
// echo "<td class=\"ligne00\">".$per->nbrhemocarct("2011-01-01","2011-12-31","CAUSEMALAD","X")."</td>";
// echo "<td class=\"ligne00\">".round($per->nbrhemocarct("2011-01-01","2011-12-31","CAUSEMALAD","X")/ $per->nbrhemototal("2011-01-01","2011-12-31"),2)."</td>";
// echo "<td class=\"ligne00\">".$per->nbrhemocarct("2012-01-01","2012-12-31","CAUSEMALAD","X")."</td>";
// echo "<td class=\"ligne00\">".round($per->nbrhemocarct("2012-01-01","2012-12-31","CAUSEMALAD","X")/ $per->nbrhemototal("2012-01-01","2012-12-31"),2)."</td>";
// echo "<td class=\"ligne00\">".$per->nbrhemocarct("2013-01-01","2013-12-31","CAUSEMALAD","X")."</td>";
// echo "<td class=\"ligne00\">".round($per->nbrhemocarct("2013-01-01","2013-12-31","CAUSEMALAD","X")/ $per->nbrhemototal("2013-01-01","2013-12-31"),2)."</td>";
// echo "<td class=\"ligne00\">".$per->nbrhemocarct("2014-01-01","2014-12-31","CAUSEMALAD","X")."</td>";
// echo "<td class=\"ligne00\">".round($per->nbrhemocarct("2014-01-01","2014-12-31","CAUSEMALAD","X")/ $per->nbrhemototal("2014-01-01","2014-12-31"),2)."</td>";
// echo"</tr>" ;

// echo( "<tr>
// <td COLSPAN=11 class=\"ligne0\">Néphropathie initial ( * en cour de réalisation)</td>
// </tr>" );
// echo( "</table><br>\n" );

//*****************************************************************************************************//
// $per -> sautligne (1);
// echo( "<table width=\"85%\" border=\"0\" cellpadding=\"1\" cellspacing=\"1\" align=\"center\">\n" );
// echo( "<tr>
// <td ROWSPAN=4 class=\"ligne0\">Tranche d'age (ans)</td>
// <td COLSPAN=10 class=\"ligne0\">Année de mise en dialyse</td>
// </tr>" );
// echo( "<tr>
// <td COLSPAN=2 class=\"ligne0\">2010</td>
// <td COLSPAN=2 class=\"ligne0\">2011</td>
// <td COLSPAN=2 class=\"ligne0\">2012</td>
// <td COLSPAN=2 class=\"ligne0\">2013</td>
// <td COLSPAN=2 class=\"ligne0\">2014</td>
// </tr>" );
// $per->nbrhemototal("2010-01-01","2010-21-31");
// echo "<tr>";
// echo "<td COLSPAN=2 class=\"ligne0\">N=".$per->nbrhemototal("2010-01-01","2010-12-31")."</td>";
// echo "<td COLSPAN=2 class=\"ligne0\">N=".$per->nbrhemototal("2011-01-01","2011-12-31")."</td>";
// echo "<td COLSPAN=2 class=\"ligne0\">N=".$per->nbrhemototal("2012-01-01","2012-12-31")."</td>";
// echo "<td COLSPAN=2 class=\"ligne0\">N=".$per->nbrhemototal("2013-01-01","2013-12-31")."</td>";
// echo "<td COLSPAN=2 class=\"ligne0\">N=".$per->nbrhemototal("2014-01-01","2014-12-31")."</td>";
// echo"</tr>" ;
// echo( "<tr>
// <td class=\"ligne0\">n</td>
// <td class=\"ligne0\">%</td>
// <td class=\"ligne0\">n</td>
// <td class=\"ligne0\">%</td>
// <td class=\"ligne0\">n</td>
// <td class=\"ligne0\">%</td>
// <td class=\"ligne0\">n</td>
// <td class=\"ligne0\">%</td>
// <td class=\"ligne0\">n</td>
// <td class=\"ligne0\">%</td>
// </tr>" );



// echo "<tr>";
// echo "<td class=\"ligne0\">00-19</td>";
// echo "<td class=\"ligne00\">".$per->tranchehemo("2010-01-01","2010-12-31",0,19)."</td>";
// echo "<td class=\"ligne00\">".round($per->tranchehemo("2010-01-01","2010-12-31",0,19) / $per->nbrhemototal("2010-01-01","2010-12-31") ,2) ."</td>";
// echo "<td class=\"ligne00\">".$per->tranchehemo("2011-01-01","2011-12-31",0,19)."</td>";
// echo "<td class=\"ligne00\">".round($per->tranchehemo("2011-01-01","2011-12-31",0,19) / $per->nbrhemototal("2011-01-01","2011-12-31") ,2) ."</td>";
// echo "<td class=\"ligne00\">".$per->tranchehemo("2012-01-01","2012-12-31",0,19)."</td>";
// echo "<td class=\"ligne00\">".round($per->tranchehemo("2012-01-01","2012-12-31",0,19) / $per->nbrhemototal("2012-01-01","2012-12-31") ,2) ."</td>";
// echo "<td class=\"ligne00\">".$per->tranchehemo("2013-01-01","2013-12-31",0,19)."</td>";
// echo "<td class=\"ligne00\">".round($per->tranchehemo("2013-01-01","2013-12-31",0,19) / $per->nbrhemototal("2013-01-01","2013-12-31") ,2) ."</td>";
// echo "<td class=\"ligne00\">".$per->tranchehemo("2014-01-01","2014-12-31",0,19)."</td>";
// echo "<td class=\"ligne00\">".round($per->tranchehemo("2014-01-01","2014-12-31",0,19) / $per->nbrhemototal("2014-01-01","2014-12-31") ,2) ."</td>";
// echo"</tr>" ;

// echo "<tr>";
// echo "<td class=\"ligne0\">20-44</td>";
// echo "<td class=\"ligne00\">".$per->tranchehemo("2010-01-01","2010-12-31",20,44)."</td>";
// echo "<td class=\"ligne00\">".round($per->tranchehemo("2010-01-01","2010-12-31",20,44) / $per->nbrhemototal("2010-01-01","2010-12-31") ,2) ."</td>";
// echo "<td class=\"ligne00\">".$per->tranchehemo("2011-01-01","2011-12-31",20,44)."</td>";
// echo "<td class=\"ligne00\">".round($per->tranchehemo("2011-01-01","2011-12-31",20,44) / $per->nbrhemototal("2011-01-01","2011-12-31") ,2) ."</td>";
// echo "<td class=\"ligne00\">".$per->tranchehemo("2012-01-01","2012-12-31",20,44)."</td>";
// echo "<td class=\"ligne00\">".round($per->tranchehemo("2012-01-01","2012-12-31",20,44) / $per->nbrhemototal("2012-01-01","2012-12-31") ,2) ."</td>";
// echo "<td class=\"ligne00\">".$per->tranchehemo("2013-01-01","2013-12-31",20,44)."</td>";
// echo "<td class=\"ligne00\">".round($per->tranchehemo("2013-01-01","2013-12-31",20,44) / $per->nbrhemototal("2013-01-01","2013-12-31") ,2) ."</td>";
// echo "<td class=\"ligne00\">".$per->tranchehemo("2014-01-01","2014-12-31",20,44)."</td>";
// echo "<td class=\"ligne00\">".round($per->tranchehemo("2014-01-01","2014-12-31",20,44) / $per->nbrhemototal("2014-01-01","2014-12-31") ,2) ."</td>";
// echo"</tr>" ;


// echo "<tr>";
// echo "<td class=\"ligne0\">45-64</td>";
// echo "<td class=\"ligne00\">".$per->tranchehemo("2010-01-01","2010-12-31",45,64)."</td>";
// echo "<td class=\"ligne00\">".round($per->tranchehemo("2010-01-01","2010-12-31",45,64) / $per->nbrhemototal("2010-01-01","2010-12-31") ,2) ."</td>";
// echo "<td class=\"ligne00\">".$per->tranchehemo("2011-01-01","2011-12-31",45,64)."</td>";
// echo "<td class=\"ligne00\">".round($per->tranchehemo("2011-01-01","2011-12-31",45,64) / $per->nbrhemototal("2011-01-01","2011-12-31") ,2) ."</td>";
// echo "<td class=\"ligne00\">".$per->tranchehemo("2012-01-01","2012-12-31",45,64)."</td>";
// echo "<td class=\"ligne00\">".round($per->tranchehemo("2012-01-01","2012-12-31",45,64) / $per->nbrhemototal("2012-01-01","2012-12-31") ,2) ."</td>";
// echo "<td class=\"ligne00\">".$per->tranchehemo("2013-01-01","2013-12-31",45,64)."</td>";
// echo "<td class=\"ligne00\">".round($per->tranchehemo("2013-01-01","2013-12-31",45,64) / $per->nbrhemototal("2013-01-01","2013-12-31") ,2) ."</td>";
// echo "<td class=\"ligne00\">".$per->tranchehemo("2014-01-01","2014-12-31",45,64)."</td>";
// echo "<td class=\"ligne00\">".round($per->tranchehemo("2014-01-01","2014-12-31",45,64) / $per->nbrhemototal("2014-01-01","2014-12-31") ,2) ."</td>";
// echo"</tr>" ;


// echo "<tr>";
// echo "<td class=\"ligne0\">65-74</td>";
// echo "<td class=\"ligne00\">".$per->tranchehemo("2010-01-01","2010-12-31",65,74)."</td>";
// echo "<td class=\"ligne00\">".round($per->tranchehemo("2010-01-01","2010-12-31",65,74) / $per->nbrhemototal("2010-01-01","2010-12-31") ,2) ."</td>";
// echo "<td class=\"ligne00\">".$per->tranchehemo("2011-01-01","2011-12-31",65,74)."</td>";
// echo "<td class=\"ligne00\">".round($per->tranchehemo("2011-01-01","2011-12-31",65,74) / $per->nbrhemototal("2011-01-01","2011-12-31") ,2) ."</td>";
// echo "<td class=\"ligne00\">".$per->tranchehemo("2012-01-01","2012-12-31",65,74)."</td>";
// echo "<td class=\"ligne00\">".round($per->tranchehemo("2012-01-01","2012-12-31",65,74) / $per->nbrhemototal("2012-01-01","2012-12-31") ,2) ."</td>";
// echo "<td class=\"ligne00\">".$per->tranchehemo("2013-01-01","2013-12-31",65,74)."</td>";
// echo "<td class=\"ligne00\">".round($per->tranchehemo("2013-01-01","2013-12-31",65,74) / $per->nbrhemototal("2013-01-01","2013-12-31") ,2) ."</td>";
// echo "<td class=\"ligne00\">".$per->tranchehemo("2014-01-01","2014-12-31",65,74)."</td>";
// echo "<td class=\"ligne00\">".round($per->tranchehemo("2014-01-01","2014-12-31",65,74) / $per->nbrhemototal("2014-01-01","2014-12-31") ,2) ."</td>";
// echo"</tr>" ;


// echo "<tr>";
// echo "<td class=\"ligne0\"> >=75 </td>";
// echo "<td class=\"ligne00\">".$per->tranchehemo("2010-01-01","2010-12-31",75,100)."</td>";
// echo "<td class=\"ligne00\">".round($per->tranchehemo("2010-01-01","2010-12-31",75,100) / $per->nbrhemototal("2010-01-01","2010-12-31") ,2) ."</td>";
// echo "<td class=\"ligne00\">".$per->tranchehemo("2011-01-01","2011-12-31",75,100)."</td>";
// echo "<td class=\"ligne00\">".round($per->tranchehemo("2011-01-01","2011-12-31",75,100) / $per->nbrhemototal("2011-01-01","2011-12-31") ,2) ."</td>";
// echo "<td class=\"ligne00\">".$per->tranchehemo("2012-01-01","2012-12-31",75,100)."</td>";
// echo "<td class=\"ligne00\">".round($per->tranchehemo("2012-01-01","2012-12-31",75,100) / $per->nbrhemototal("2012-01-01","2012-12-31") ,2) ."</td>";
// echo "<td class=\"ligne00\">".$per->tranchehemo("2013-01-01","2013-12-31",75,100)."</td>";
// echo "<td class=\"ligne00\">".round($per->tranchehemo("2013-01-01","2013-12-31",75,100) / $per->nbrhemototal("2013-01-01","2013-12-31") ,2) ."</td>";
// echo "<td class=\"ligne00\">".$per->tranchehemo("2014-01-01","2014-12-31",75,100)."</td>";
// echo "<td class=\"ligne00\">".round($per->tranchehemo("2014-01-01","2014-12-31",75,100) / $per->nbrhemototal("2014-01-01","2014-12-31") ,2) ."</td>";
// echo"</tr>" ;

// echo( "<tr>
// <td COLSPAN=11 class=\"ligne0\">Age initial ( * en cour de réalisation)</td>
// </tr>" );
// echo( "</table><br>\n" );


//*****************************************************************************************************//
// $per -> sautligne (1);
// echo( "<table width=\"85%\" border=\"0\" cellpadding=\"1\" cellspacing=\"1\" align=\"center\">\n" );
// echo( "<tr>
// <td ROWSPAN=4 class=\"ligne0\">Sexe </td>
// <td COLSPAN=10 class=\"ligne0\">Année de mise en dialyse</td>
// </tr>" );
// echo( "<tr>
// <td COLSPAN=2 class=\"ligne0\">2010</td>
// <td COLSPAN=2 class=\"ligne0\">2011</td>
// <td COLSPAN=2 class=\"ligne0\">2012</td>
// <td COLSPAN=2 class=\"ligne0\">2013</td>
// <td COLSPAN=2 class=\"ligne0\">2014</td>
// </tr>" );

// echo "<tr>";
// echo "<td COLSPAN=2 class=\"ligne0\">N=".$per->nbrhemototal("2010-01-01","2010-12-31")."</td>";
// echo "<td COLSPAN=2 class=\"ligne0\">N=".$per->nbrhemototal("2011-01-01","2011-12-31")."</td>";
// echo "<td COLSPAN=2 class=\"ligne0\">N=".$per->nbrhemototal("2012-01-01","2012-12-31")."</td>";
// echo "<td COLSPAN=2 class=\"ligne0\">N=".$per->nbrhemototal("2013-01-01","2013-12-31")."</td>";
// echo "<td COLSPAN=2 class=\"ligne0\">N=".$per->nbrhemototal("2014-01-01","2014-12-31")."</td>";
// echo"</tr>" ;
// echo( "<tr>
// <td class=\"ligne0\">n</td>
// <td class=\"ligne0\">%</td>
// <td class=\"ligne0\">n</td>
// <td class=\"ligne0\">%</td>
// <td class=\"ligne0\">n</td>
// <td class=\"ligne0\">%</td>
// <td class=\"ligne0\">n</td>
// <td class=\"ligne0\">%</td>
// <td class=\"ligne0\">n</td>
// <td class=\"ligne0\">%</td>
// </tr>" );

// echo "<tr>";
// echo "<td class=\"ligne0\">Hommes</td>";
// echo "<td class=\"ligne00\">".$per->nbrhemocarct("2010-01-01","2010-12-31","SEX","M")."</td>";
// echo "<td class=\"ligne00\">".round($per->nbrhemocarct("2010-01-01","2010-12-31","SEX","M") / $per->nbrhemototal("2010-01-01","2010-12-31"),2)."</td>";
// echo "<td class=\"ligne00\">".$per->nbrhemocarct("2011-01-01","2011-12-31","SEX","M")."</td>";
// echo "<td class=\"ligne00\">".round($per->nbrhemocarct("2011-01-01","2011-12-31","SEX","M")/ $per->nbrhemototal("2011-01-01","2011-12-31"),2)."</td>";
// echo "<td class=\"ligne00\">".$per->nbrhemocarct("2012-01-01","2012-12-31","SEX","M")."</td>";
// echo "<td class=\"ligne00\">".round($per->nbrhemocarct("2012-01-01","2012-12-31","SEX","M")/ $per->nbrhemototal("2012-01-01","2012-12-31"),2)."</td>";
// echo "<td class=\"ligne00\">".$per->nbrhemocarct("2013-01-01","2013-12-31","SEX","M")."</td>";
// echo "<td class=\"ligne00\">".round($per->nbrhemocarct("2013-01-01","2013-12-31","SEX","M")/ $per->nbrhemototal("2013-01-01","2013-12-31"),2)."</td>";
// echo "<td class=\"ligne00\">".$per->nbrhemocarct("2014-01-01","2014-12-31","SEX","M")."</td>";
// echo "<td class=\"ligne00\">".round($per->nbrhemocarct("2014-01-01","2014-12-31","SEX","M")/ $per->nbrhemototal("2014-01-01","2014-12-31"),2)."</td>";
// echo"</tr>" ;

// echo "<tr>";
// echo "<td class=\"ligne0\">Femmes</td>";
// echo "<td class=\"ligne00\">".$per->nbrhemocarct("2010-01-01","2010-12-31","SEX","F")."</td>";
// echo "<td class=\"ligne00\">".round($per->nbrhemocarct("2010-01-01","2010-12-31","SEX","F") / $per->nbrhemototal("2010-01-01","2010-12-31"),2)."</td>";
// echo "<td class=\"ligne00\">".$per->nbrhemocarct("2011-01-01","2011-12-31","SEX","F")."</td>";
// echo "<td class=\"ligne00\">".round($per->nbrhemocarct("2011-01-01","2011-12-31","SEX","F")/ $per->nbrhemototal("2011-01-01","2011-12-31"),2)."</td>";
// echo "<td class=\"ligne00\">".$per->nbrhemocarct("2012-01-01","2012-12-31","SEX","F")."</td>";
// echo "<td class=\"ligne00\">".round($per->nbrhemocarct("2012-01-01","2012-12-31","SEX","F")/ $per->nbrhemototal("2012-01-01","2012-12-31"),2)."</td>";
// echo "<td class=\"ligne00\">".$per->nbrhemocarct("2013-01-01","2013-12-31","SEX","F")."</td>";
// echo "<td class=\"ligne00\">".round($per->nbrhemocarct("2013-01-01","2013-12-31","SEX","F")/ $per->nbrhemototal("2013-01-01","2013-12-31"),2)."</td>";
// echo "<td class=\"ligne00\">".$per->nbrhemocarct("2014-01-01","2014-12-31","SEX","F")."</td>";
// echo "<td class=\"ligne00\">".round($per->nbrhemocarct("2014-01-01","2014-12-31","SEX","F")/ $per->nbrhemototal("2014-01-01","2014-12-31"),2)."</td>";
// echo"</tr>" ;
// echo( "<tr>
// <td COLSPAN=11 class=\"ligne0\">Sexe initial</td>
// </tr>" );
// echo( "</table><br>\n" );

//*****************************************************************************************************//
// $per -> sautligne (1);
// echo( "<table width=\"85%\" border=\"0\" cellpadding=\"1\" cellspacing=\"1\" align=\"center\">\n" );
// echo( "<tr>
// <td ROWSPAN=4 class=\"ligne0\">Co-morbidités</td>
// <td COLSPAN=10 class=\"ligne0\">Année de mise en dialyse</td>
// </tr>" );
// echo( "<tr>
// <td COLSPAN=2 class=\"ligne0\">2010</td>
// <td COLSPAN=2 class=\"ligne0\">2011</td>
// <td COLSPAN=2 class=\"ligne0\">2012</td>
// <td COLSPAN=2 class=\"ligne0\">2013</td>
// <td COLSPAN=2 class=\"ligne0\">2014</td>
// </tr>" );
// $per->nbrhemototal("2010-01-01","2010-21-31");
// echo "<tr>";
// echo "<td COLSPAN=2 class=\"ligne0\">N=".$per->nbrhemototal("2010-01-01","2010-12-31")."</td>";
// echo "<td COLSPAN=2 class=\"ligne0\">N=".$per->nbrhemototal("2011-01-01","2011-12-31")."</td>";
// echo "<td COLSPAN=2 class=\"ligne0\">N=".$per->nbrhemototal("2012-01-01","2012-12-31")."</td>";
// echo "<td COLSPAN=2 class=\"ligne0\">N=".$per->nbrhemototal("2013-01-01","2013-12-31")."</td>";
// echo "<td COLSPAN=2 class=\"ligne0\">N=".$per->nbrhemototal("2014-01-01","2014-12-31")."</td>";
// echo"</tr>" ;
// echo( "<tr>
// <td class=\"ligne0\">n</td>
// <td class=\"ligne0\">%</td>
// <td class=\"ligne0\">n</td>
// <td class=\"ligne0\">%</td>
// <td class=\"ligne0\">n</td>
// <td class=\"ligne0\">%</td>
// <td class=\"ligne0\">n</td>
// <td class=\"ligne0\">%</td>
// <td class=\"ligne0\">n</td>
// <td class=\"ligne0\">%</td>
// </tr>" );

// echo "<tr>";
// echo "<td class=\"ligne0\">HTA</td>";
// echo "<td class=\"ligne00\">0</td>";
// echo "<td class=\"ligne00\">0</td>";
// echo "<td class=\"ligne00\">0</td>";
// echo "<td class=\"ligne00\">0</td>";
// echo "<td class=\"ligne00\">0</td>";
// echo "<td class=\"ligne00\">0</td>";
// echo "<td class=\"ligne00\">0</td>";
// echo "<td class=\"ligne00\">0</td>";
// echo "<td class=\"ligne00\">0</td>";
// echo "<td class=\"ligne00\">0</td>";
// echo"</tr>" ;

// echo "<tr>";
// echo "<td class=\"ligne0\">Diabete</td>";
// echo "<td class=\"ligne00\">0</td>";
// echo "<td class=\"ligne00\">0</td>";
// echo "<td class=\"ligne00\">0</td>";
// echo "<td class=\"ligne00\">0</td>";
// echo "<td class=\"ligne00\">0</td>";
// echo "<td class=\"ligne00\">0</td>";
// echo "<td class=\"ligne00\">0</td>";
// echo "<td class=\"ligne00\">0</td>";
// echo "<td class=\"ligne00\">0</td>";
// echo "<td class=\"ligne00\">0</td>";
// echo"</tr>" ;

// echo "<tr>";
// echo "<td class=\"ligne0\">Insufisance cardiaque</td>";
// echo "<td class=\"ligne00\">0</td>";
// echo "<td class=\"ligne00\">0</td>";
// echo "<td class=\"ligne00\">0</td>";
// echo "<td class=\"ligne00\">0</td>";
// echo "<td class=\"ligne00\">0</td>";
// echo "<td class=\"ligne00\">0</td>";
// echo "<td class=\"ligne00\">0</td>";
// echo "<td class=\"ligne00\">0</td>";
// echo "<td class=\"ligne00\">0</td>";
// echo "<td class=\"ligne00\">0</td>";
// echo"</tr>" ;

// echo "<tr>";
// echo "<td class=\"ligne0\">Coronaropathie</td>";
// echo "<td class=\"ligne00\">0</td>";
// echo "<td class=\"ligne00\">0</td>";
// echo "<td class=\"ligne00\">0</td>";
// echo "<td class=\"ligne00\">0</td>";
// echo "<td class=\"ligne00\">0</td>";
// echo "<td class=\"ligne00\">0</td>";
// echo "<td class=\"ligne00\">0</td>";
// echo "<td class=\"ligne00\">0</td>";
// echo "<td class=\"ligne00\">0</td>";
// echo "<td class=\"ligne00\">0</td>";
// echo"</tr>" ;

// echo "<tr>";
// echo "<td class=\"ligne0\">Trouble du rythme</td>";
// echo "<td class=\"ligne00\">0</td>";
// echo "<td class=\"ligne00\">0</td>";
// echo "<td class=\"ligne00\">0</td>";
// echo "<td class=\"ligne00\">0</td>";
// echo "<td class=\"ligne00\">0</td>";
// echo "<td class=\"ligne00\">0</td>";
// echo "<td class=\"ligne00\">0</td>";
// echo "<td class=\"ligne00\">0</td>";
// echo "<td class=\"ligne00\">0</td>";
// echo "<td class=\"ligne00\">0</td>";
// echo"</tr>" ;

// echo "<tr>";
// echo "<td class=\"ligne0\">Arterite des mbr inf</td>";
// echo "<td class=\"ligne00\">0</td>";
// echo "<td class=\"ligne00\">0</td>";
// echo "<td class=\"ligne00\">0</td>";
// echo "<td class=\"ligne00\">0</td>";
// echo "<td class=\"ligne00\">0</td>";
// echo "<td class=\"ligne00\">0</td>";
// echo "<td class=\"ligne00\">0</td>";
// echo "<td class=\"ligne00\">0</td>";
// echo "<td class=\"ligne00\">0</td>";
// echo "<td class=\"ligne00\">0</td>";
// echo"</tr>" ;

// echo "<tr>";
// echo "<td class=\"ligne0\">AVC</td>";
// echo "<td class=\"ligne00\">0</td>";
// echo "<td class=\"ligne00\">0</td>";
// echo "<td class=\"ligne00\">0</td>";
// echo "<td class=\"ligne00\">0</td>";
// echo "<td class=\"ligne00\">0</td>";
// echo "<td class=\"ligne00\">0</td>";
// echo "<td class=\"ligne00\">0</td>";
// echo "<td class=\"ligne00\">0</td>";
// echo "<td class=\"ligne00\">0</td>";
// echo "<td class=\"ligne00\">0</td>";
// echo"</tr>" ;

// echo "<tr>";
// echo "<td class=\"ligne0\">Autre</td>";
// echo "<td class=\"ligne00\">0</td>";
// echo "<td class=\"ligne00\">0</td>";
// echo "<td class=\"ligne00\">0</td>";
// echo "<td class=\"ligne00\">0</td>";
// echo "<td class=\"ligne00\">0</td>";
// echo "<td class=\"ligne00\">0</td>";
// echo "<td class=\"ligne00\">0</td>";
// echo "<td class=\"ligne00\">0</td>";
// echo "<td class=\"ligne00\">0</td>";
// echo "<td class=\"ligne00\">0</td>";
// echo"</tr>" ;

// echo "<tr>";
// echo "<td class=\"ligne0\">Inconnu</td>";
// echo "<td class=\"ligne00\">0</td>";
// echo "<td class=\"ligne00\">0</td>";
// echo "<td class=\"ligne00\">0</td>";
// echo "<td class=\"ligne00\">0</td>";
// echo "<td class=\"ligne00\">0</td>";
// echo "<td class=\"ligne00\">0</td>";
// echo "<td class=\"ligne00\">0</td>";
// echo "<td class=\"ligne00\">0</td>";
// echo "<td class=\"ligne00\">0</td>";
// echo "<td class=\"ligne00\">0</td>";
// echo"</tr>" ;
// echo( "<tr>
// <td COLSPAN=11 class=\"ligne0\">Co-morbidités initial</td>
// </tr>" );
// echo( "</table><br>\n" );

// mysql_free_result($requete);
// $per ->f1();

 ?>