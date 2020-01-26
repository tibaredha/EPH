<?php   
  $IDWIL  = $_GET["IDWIL"] ; 
  
  $sql = "SELECT * FROM WIL WHERE IDWIL = ".$IDWIL;
  //exécution de la requête:
  $requete = mysql_query( $sql ) ; 
  //affichage des données:
  if( $result = mysql_fetch_object( $requete ) )
  {
?>
<h1 ALIGN=LEFT STYLE="Text-ALIGN:right">تعديل   الولاية</h1>
	
<form action="index.php?uc=MW1" method="post" name="form1" id="form1">
<hr />

<div style=" position:absolute;left:700px;top:220px;">	 
<input type="submit" name="VALIDER" id="VALIDER" value=" تعديل" /><a href="index.php?uc=WC">القائمة الاسمية للولاايات</a></td>
</div>

<div style=" position:absolute;left:250px;top:320px;">	
<input type="hidden" name="IDWIL"     value="<?php echo $IDWIL;?>" size="100" STYLE="Text-ALIGN:right"TABINDEX=1 />
<input type="text" name="WILAYASAR" value="<?php echo($result->WILAYASAR) ;?>" size="100" STYLE="Text-ALIGN:right"TABINDEX=1 />
</div>
<div style=" position:absolute;left:920px;top:320px;">	 	
الولاية  
</div>

<div style=" position:absolute;left:250px;top:360px;">	 
<input type="text" name="WILAYAS" value="<?php echo($result->WILAYAS) ;?>" size="100" STYLE="Text-ALIGN:LEFT"TABINDEX=1 />
</div>
<div style=" position:absolute;left:160px;top:360px;">	 	
WILAYA
</div>




</form> 
 <?php
  }//fin if 
?>    
 </BR>     </BR>  </BR>  </BR>  </BR>  </BR>  </BR>  </BR>  </BR>  </BR>  </BR>  </BR>  </BR>  </BR> 