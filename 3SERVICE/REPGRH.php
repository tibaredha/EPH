
<br>
<br>
<h2  align="center" class="hfgh"> القائمة الاسمية للمستخدمين  حسب المصلحة  </h2>
<form action="index.php?uc=REPGRH1" method="post" name="form1" id="form1">
<hr />
<div style=" position:absolute;left:555px;top:360px;">	 
<?php 
    echo '<select size=1 name="SERVICE">'."\n";
    echo '<option value="-1">-------------------------------------------------</option>'."\n";
	mysql_query("SET NAMES 'UTF8' ");
    $result = mysql_query("SELECT ids,serviceFR as service FROM service  " );
    while($data =  mysql_fetch_array($result))
    {
    echo '<option value="'.$data[0].'">'.$data['service']."/".$data['ids'];
    echo '</option>'."\n";
    }
    echo '</select>'."\n"; mysql_free_result($result); 
?>
</div>
<div style=" position:absolute;left:585px;top:400px;">	 
<input type="submit" name="VALIDER" id="VALIDER" value="ابحث عن المستخدمين حسب المصلحة" /></td>
</div>

</form> 


</BR>  </BR>   </BR></BR> 
 </BR></BR>
 </BR></BR> 
<h2  align="center" class="hfgh"> المصلحة</h2> 
<?php
$query_liste = "SELECT count(grh.Nomlatin) as nbr,service.servicear as service FROM grh,service where grh.SERVICEar= service.ids and cessation !='y' group by service order by nbr desc ";
$requete = mysql_query( $query_liste, $cnx ) or die( "ERREUR MYSQL num곯: ".mysql_errno()."<br>Type de cette erreur: ".mysql_error()."<br>\n" );

echo( "<table border=\"1\" cellpadding=\"1\" cellspacing=\"1\" align=\"center\">\n" );
echo( "<tr>
<td bgcolor=\"#cccccc\"><div align=\"center\">العدد</div></td>
<td bgcolor=\"#cccccc\"><div align=\"center\">المصلحة</div></td>
</tr>" ); 
while( $result = mysql_fetch_array( $requete ) )
{
echo( "<tr>\n" );
echo( "<td ><div align=\"right\">".$result["nbr"]."</div></td>\n" );
echo( "<td ><div align=\"right\">".$result["service"]."</div></td>\n" );
echo( "</tr>\n" );
} 
echo( "</table><br>\n" );
mysql_free_result($requete);

?>











