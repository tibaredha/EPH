<?php
if (!ISSET($_POST['annee'])||!ISSET($_POST['mois'])||!ISSET($_POST['jour'])||!ISSET($_POST['annee1'])||!ISSET($_POST['mois1'])||!ISSET($_POST['jour1']))
{
$datejour1 =date("Y-m-d");
$datejour2 =date("Y-m-d");
}
else
{
 if(empty($_POST['annee'])||empty($_POST['mois'])||empty($_POST['jour'])||empty($_POST['annee1'])||empty($_POST['mois1'])||empty($_POST['jour1']))
 {
 $datejour1 =date("Y-m-d");
 $datejour2 =date("Y-m-d");
 }
 else
 {
 $datejour1 = $_POST['annee'] .'-'.$_POST['mois'] .'-'.$_POST['jour'];
 $datejour2 = $_POST['annee1'].'-'.$_POST['mois1'].'-'.$_POST['jour1'];
 }
}
//condition si date1 ET SUP A DATE2  pose probleme
if ($datejour1>$datejour2)
{
header("Location: ./index.php?uc=LISTDECES0") ;
}
$per ->h(2,400,175,'La Liste Nominative Des Décés hospitaliers');
$per-> mysqlconnect();
$query_liste = "SELECT * FROM DECES where DATEDUDECE >='$datejour1'and DATEDUDECE <='$datejour2'  ORDER BY DATEDUDECE DESC     ";// and SERVICEDHO='HEMODIALYS'
$requete = mysql_query( $query_liste ) or die( "ERREUR MYSQL numéro: ".mysql_errno()."<br>Type de cette erreur: ".mysql_error()."<br>\n" );
$per -> sautligne (3);
echo( "<table width=\"85%\" border=\"0\" cellpadding=\"1\" cellspacing=\"1\" align=\"center\">\n" );
echo( "<tr>
<td class=\"ligne\"><div align=\"center\"><font  color=\"#FFFFFF\" >IDD</div></td>
<td class=\"ligne\"><div align=\"center\"><font  color=\"#FFFFFF\" >Date Décés</div></td>
<td class=\"ligne\"><div align=\"center\"><font  color=\"#FFFFFF\" >Nom</div></td>
<td class=\"ligne\"><div align=\"center\"><font  color=\"#FFFFFF\" >Prenom</div></td>
<td class=\"ligne\"><div align=\"center\"><font  color=\"#FFFFFF\" >Sexe</div></td>
<td class=\"ligne\"><div align=\"center\"><font  color=\"#FFFFFF\" >Date Naissance</div></td>
<td class=\"ligne\"><div align=\"center\"><font  color=\"#FFFFFF\" >Age</div></td>
<td class=\"ligne\"><div align=\"center\"><font  color=\"#FFFFFF\" >Service Hosp</div></td>
<td class=\"ligne\"><div align=\"center\"><font  color=\"#FFFFFF\" >Durée Hosp</div></td>
<td class=\"ligne\"><div align=\"center\"><font  color=\"#FFFFFF\" >Medecin</div></td>
<td class=\"ligne\"><div align=\"center\"><font  color=\"#FFFFFF\" >Cause Du Décés</div></td>
<td class=\"ligne\"><div align=\"center\"><font  color=\"#FFFFFF\" >M</div></td>
<td class=\"ligne\"><div align=\"center\"><font  color=\"#FFFFFF\" >S</div></td>
<td class=\"ligne\"><div align=\"center\"><font  color=\"#FFFFFF\" >Gestion </div></td>
</tr>" ); 
while($row=mysql_fetch_object($requete))
{
echo( "<tr bgcolor=\"#E6E6E6\" >\n" );
echo( "<td><div align=\"center\">".$row->IDD."</div></td>\n" );
echo( "<td><div align=\"center\">".$row->DATEDUDECE."</div></td>\n" );
echo( "<td><div align=\"left\">".$row->NOM."</div></td>\n" );
echo( "<td><div align=\"left\">".$row->PRENOM."</div></td>\n" );
echo( "<td><div align=\"center\">".$row->SEX."</div></td>\n" );
echo( "<td><div align=\"center\">".$row->DATENAISSA."</div></td>\n" );
echo( "<td><div align=\"center\">".$row->AGE."</div></td>\n" );
echo( "<td><div align=\"left\">".$row->SERVICEDHO."</div></td>\n" );//SNHEMO1 POUR SUPRESSION DESACTIVE
echo( "<td><div align=\"center\">".$row->DUREEHOSPI."</div></td>\n" );
echo( "<td><div align=\"left\">".$row->NOMDUMEDEC."</div></td>\n" );//$row->NOMDUMEDEC
// echo( "<td><div align=\"left\">".$per->nbrtostring("grh","grh","idp",$row->NOMDUMEDEC,"Nomlatin")."</div></td>\n" );//$row->NOMDUMEDEC
echo( "<td><div align=\"left\">".$row->CAUSEDUDEC."</div></td>\n" );
echo( "<td><div align=\"center\">"."<a title=\"Modifier Décés hospitaliers  $row->NOM\" href=\"index.php?uc=MODDECES&idp=".$row->IDD."\"><img src='./images/E.png' width='16' height='16' border='0' alt=''/></a>"."</div></td>\n" );
echo( "<td><div align=\"center\">"."<a title=\"Supprimer Décés hospitaliers $row->NOM\" href=\"index.php?uc=SUPDECES&idp=".$row->IDD."\"><img src='./images/b_empty.png' width='16' height='16' border='0' alt=''/></a>"."</div></td>\n" );
echo( "<td><div align=\"CENTER\">"."<a title=\"Gestion Décés hospitaliers   $row->NOM\" href=\"index.php?uc=GERDECES&idp=".$row->IDD."\"><img src='./images/s_reload.png' width='16' height='16' border='0' alt=''/></a>"."</div></td>\n" );
echo( "</tr>\n" );
}
echo( "<tr>
<td class=\"ligne\"><div align=\"center\"><font  color=\"#FFFFFF\" >IDD</div></td>
<td class=\"ligne\"><div align=\"center\"><font  color=\"#FFFFFF\" >Date Deces</div></td>
<td class=\"ligne\"><div align=\"center\"><font  color=\"#FFFFFF\" >Nom</div></td>
<td class=\"ligne\"><div align=\"center\"><font  color=\"#FFFFFF\" >Prenom</div></td>
<td class=\"ligne\"><div align=\"center\"><font  color=\"#FFFFFF\" >Sexe</div></td>
<td class=\"ligne\"><div align=\"center\"><font  color=\"#FFFFFF\" >Date Naissance</div></td>
<td class=\"ligne\"><div align=\"center\"><font  color=\"#FFFFFF\" >Age</div></td>
<td class=\"ligne\"><div align=\"center\"><font  color=\"#FFFFFF\" >Service Hosp</div></td>
<td class=\"ligne\"><div align=\"center\"><font  color=\"#FFFFFF\" >Durée Hosp</div></td>
<td class=\"ligne\"><div align=\"center\"><font  color=\"#FFFFFF\" >Medecin</div></td>
<td class=\"ligne\"><div align=\"center\"><font  color=\"#FFFFFF\" >Cause Du Décés</div></td>
<td class=\"ligne\"><div align=\"center\"><font  color=\"#FFFFFF\" >M</div></td>
<td class=\"ligne\"><div align=\"center\"><font  color=\"#FFFFFF\" >S</div></td>
<td class=\"ligne\"><div align=\"center\"><font  color=\"#FFFFFF\" >Gestion </div></td>
</tr>" );
echo( "</table><br>\n" );
mysql_free_result($requete);
?>




