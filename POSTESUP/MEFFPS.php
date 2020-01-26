<?php   
   $idpostesup= $_GET["idpostesup"] ; 
  $per-> mysqlconnect();
  $sql = "SELECT * FROM postesup WHERE idpostesup = ".$idpostesup ;
  //exécution de la requête:
  $requete = mysql_query( $sql ) ; 
  //affichage des données:
  if( $result = mysql_fetch_object( $requete ) )
  {
?>
<h1 ALIGN=LEFT STYLE="Text-ALIGN:CENTER">تعديل تعداد المناصب </h1>
<h1 ALIGN=LEFT STYLE="Text-ALIGN:CENTER"> nb il faut regler en fonction des  annees  en instance ..</h1>	
<form action="index.php?uc=MEFFPS1" method="post" name="form1" id="form1">
<hr />

<div style=" position:absolute;left:200px;top:220px;">	 
<input type="submit" name="VALIDER" id="VALIDER" value=" تعديل" /><a href="index.php?uc=POSTESUP">القائمة الاسمية  للمناصب العليا </a></td>
</div>

<div style=" position:absolute;left:250px;top:320px;">
<input type="hidden" name="idpostesup"     value="<?php echo $idpostesup;?>" size="100" STYLE="Text-ALIGN:right"TABINDEX=1 />	 
<input type="text" name="A2011" value="<?php echo($result->A2011) ;?>" size="100" STYLE="Text-ALIGN:CENTER"TABINDEX=1 />
</div>
<div style=" position:absolute;left:160px;top:320px;">	 	
2011   
</div>

<div style=" position:absolute;left:250px;top:360px;">	 
<input type="text" name="A2012" value="<?php echo($result->A2012) ;?>" size="100" STYLE="Text-ALIGN:CENTER"TABINDEX=1 />
</div>
<div style=" position:absolute;left:160px;top:360px;">	 	
2012
</div>

<div style=" position:absolute;left:250px;top:400px;">
<input type="text" name="A2013" value="<?php echo($result->A2013) ;?>" size="100" STYLE="Text-ALIGN:CENTER"TABINDEX=1 />
</div>
<div style=" position:absolute;left:160px;top:400px;">	 
2013  
</div>


</form> 
 <?php
  }//fin if 
?>    
 </BR>  </BR>   </BR></BR>  </BR></BR>  </BR>  </BR>  </BR>  </BR>  </BR>  </BR>  </BR>  </BR>  </BR>  </BR>  </BR>  </BR> 