<?php   
  $IDCOM  = $_GET["IDCOM"] ; 
  //requête SQL:
  $sql = "SELECT * FROM COM  WHERE IDCOM = ".$IDCOM ;
  //exécution de la requête:
  $requete = mysql_query( $sql, $cnx ) ; 
  //affichage des données:
  if( $result = mysql_fetch_object( $requete ) )
  {
?>
<h1 ALIGN=LEFT STYLE="Text-ALIGN:right">تعديل   البلدية</h1>
	
<form action="index.php?uc=MC1" method="post" name="form1" id="form1">
<hr />

<div style=" position:absolute;left:680px;top:220px;">	 
<input type="submit" name="VALIDER" id="VALIDER" value=" تعديل" /><a href="index.php?uc=WC1">القائمة الاسمية للبلديات</a></td>
</div>

<div style=" position:absolute;left:250px;top:320px;">	
<input type="hidden" name="IDCOM"     value="<?php echo $IDCOM;?>" size="100" STYLE="Text-ALIGN:right"TABINDEX=1 />
<input type="text" name="communear" value="<?php echo($result->communear) ;?>" size="100" STYLE="Text-ALIGN:right"TABINDEX=1 />
</div>
<div style=" position:absolute;left:920px;top:320px;">	 	
البلدية   
</div>

<div style=" position:absolute;left:250px;top:360px;">	 
<input type="text" name="COMMUNE" value="<?php echo($result->COMMUNE) ;?>" size="100" STYLE="Text-ALIGN:LEFT"TABINDEX=1 />
</div>
<div style=" position:absolute;left:160px;top:360px;">	 	
COMMUNE
</div>

<div style=" position:absolute;left:250px;top:400px;">	 
<input type="text" name="IDWIL" value="<?php echo($result->IDWIL) ;?>" size="100" STYLE="Text-ALIGN:LEFT"TABINDEX=1 />
</div>
<div style=" position:absolute;left:160px;top:400px;">	 	
IDWIL
</div>


</form> 
 <?php
  }//fin if 
?>    
 </BR>  </BR>   </BR></BR>  </BR></BR>  </BR>  </BR>  </BR>  </BR>  </BR>  </BR>  </BR>  </BR>  </BR>  </BR>  </BR>  </BR> 