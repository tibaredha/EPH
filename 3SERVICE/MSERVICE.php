<?php 
  $per-> mysqlconnect();
  $id  = $_GET["ids"] ; 
  //requête SQL:
  mysql_query("SET NAMES 'UTF8' ");
  $sql = "SELECT * FROM SERVICE WHERE ids = ".$id ;
  //exécution de la requête:
  $requete = mysql_query( $sql ) ; 
  //affichage des données:
  if( $result = mysql_fetch_object( $requete ) )
  {
?>
<h1 ALIGN=LEFT STYLE="Text-ALIGN:right">تعديل  مصلحة </h1>
	
<form action="index.php?uc=MSERVICE1" method="post" name="form1" id="form1">
<hr />

<div style=" position:absolute;left:740px;top:220px;">	 
<input type="submit" name="VALIDER" id="VALIDER" value=" تعديل" /><a href="index.php?uc=SERVICE">RETOUR</a></td>
</div>

<div style=" position:absolute;left:250px;top:320px;">	
<input type="hidden" name="idservice"     value="<?php echo $id ;?>" size="100" STYLE="Text-ALIGN:right"TABINDEX=1 />
<input type="text" name="servicear" value="<?php echo($result->servicear) ;?>" size="100" STYLE="Text-ALIGN:right"TABINDEX=1 />
</div>
<div style=" position:absolute;left:920px;top:320px;">	 	
المصلحة   
</div>

<div style=" position:absolute;left:250px;top:360px;">	 
<input type="text" name="servicefr" value="<?php echo($result->servicefr) ;?>" size="100" STYLE="Text-ALIGN:LEFT"TABINDEX=1 />
</div>
<div style=" position:absolute;left:160px;top:360px;">	 	
SERVICE 
</div>




</form> 
 <?php
  }//fin if 
?>    
 </BR>  </BR>   </BR></BR>  </BR></BR>  </BR>  </BR>  </BR>  </BR>  </BR>  </BR>  </BR>  </BR>  </BR>  </BR>  </BR>  </BR> 