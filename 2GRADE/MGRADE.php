<?php   
   $idg= $_GET["idg"] ; 
$per-> mysqlconnect(); 
  $sql = "SELECT * FROM GRADE WHERE idg = ".$idg ;
  //exécution de la requête:
  $requete = mysql_query( $sql ) ; 
  //affichage des données:
  if( $result = mysql_fetch_object( $requete ) )
  {
?>
<h1 ALIGN=LEFT STYLE="Text-ALIGN:right">تعديل  رتبة</h1>
	
<form action="index.php?uc=MGRADE1" method="post" name="form1" id="form1">
<hr />

<div style=" position:absolute;left:700px;top:220px;">	 
<input type="submit" name="VALIDER" id="VALIDER" value=" تعديل" /><a href="index.php?uc=GRADE">القائمة الاسمية  للرتب </a></td>
</div>

<div style=" position:absolute;left:250px;top:320px;">
<input type="hidden" name="idg"     value="<?php echo $idg;?>" size="100" STYLE="Text-ALIGN:right"TABINDEX=1 />	 
<input type="text" name="gradear" value="<?php echo($result->gradear) ;?>" size="100" STYLE="Text-ALIGN:right"TABINDEX=1 />
</div>
<div style=" position:absolute;left:920px;top:320px;">	 	
الرتبة   
</div>

<div style=" position:absolute;left:250px;top:360px;">	 
<input type="text" name="gradefr" value="<?php echo($result->gradefr) ;?>" size="100" STYLE="Text-ALIGN:LEFT"TABINDEX=1 />
</div>
<div style=" position:absolute;left:160px;top:360px;">	 	
grade 
</div>

<div style=" position:absolute;left:250px;top:400px;">
<?php 

    echo '<select size=1 name="ids">'."\n";
    echo '<option   value="-1">إختر statut</option>'."\n";
	mysql_query("SET NAMES 'UTF8' ");
    $result = mysql_query("SELECT ids,statut as statut FROM statut  " );
    while($data =  mysql_fetch_array($result))
    {
    echo '<option value="'.$data[0].'">'.$data['statut']."/".$data['ids'];
    echo '</option>'."\n";
    }
    echo '</select>'."\n";
   
?>	 

</div>
<div style=" position:absolute;left:160px;top:400px;">	 
statut  
</div>


</form> 
 <?php
  }//fin if 
?>    
 </BR>  </BR>   </BR></BR>  </BR></BR>  </BR>  </BR>  </BR>  </BR>  </BR>  </BR>  </BR>  </BR>  </BR>  </BR>  </BR>  </BR> 