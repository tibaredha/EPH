<br>
<br>
<h2  align="center" class="hfgh"> ورقة الحضور للمستخدمين  </h2>
<form action="./3SERVICE/POINTAGE1.PHP" method="post" name="form1" id="form1">
<hr />
<div style=" position:absolute;left:400px;top:360px;">	 
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
<div style=" position:absolute;left:468px;top:320px;">	 	
SERVICE  
</div>

<div style=" position:absolute;left:420px;top:400px;">	 
<input type="submit" name="VALIDER" id="VALIDER" value="ابحث عن المستخدمين حسب المصلحة" /></td>
</div>
</form> 
</BR></BR></BR></BR> 
</BR></BR></BR></BR> 
</BR></BR></BR></BR>
</BR>

 













