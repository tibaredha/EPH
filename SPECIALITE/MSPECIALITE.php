<?php
  $per-> mysqlconnect(); 
   $idspecialite= $_GET["idspecialite"] ; 

  $sql = "SELECT * FROM SPECIALITE WHERE 	idspecialite = ".$idspecialite ;
  //exécution de la requête:
  $requete = mysql_query( $sql ) ; 
  //affichage des données:
  if( $result = mysql_fetch_object( $requete ) )
  {
?>
<h1 ALIGN=LEFT STYLE="Text-ALIGN:right">تعديل  تخصص</h1>
	
<form action="index.php?uc=MSPECIALITE1" method="post" name="form1" id="form1">
<hr />
<div style=" position:absolute;left:700px;top:220px;">	 
<input type="submit" name="VALIDER" id="VALIDER" value=" تعديل" /><a href="index.php?uc=SPECIALITE">القائمة الاسمية للتخصصات </a></td>
</div>

<div style=" position:absolute;left:250px;top:320px;">
<input type="hidden" name="idspecialite"     value="<?php echo $idspecialite;?>" size="100" STYLE="Text-ALIGN:right"TABINDEX=1 />	 
<input type="text" name="specialitear" value="<?php echo($result->specialitear) ;?>" size="100" STYLE="Text-ALIGN:right"TABINDEX=1 />
</div>
<div style=" position:absolute;left:920px;top:320px;">	 	
التخصص   
</div>

<div style=" position:absolute;left:250px;top:360px;">	 
<input type="text" name="specialitefr" value="<?php echo($result->specialitefr) ;?>" size="100" STYLE="Text-ALIGN:LEFT"TABINDEX=1 />
</div>
<div style=" position:absolute;left:160px;top:360px;">	 	
SPECIALITE 
</div>




</form> 
 <?php
  }//fin if 
?>    
 </BR>  </BR>   </BR></BR>  </BR></BR>  </BR>  </BR>  </BR>  </BR>  </BR>  </BR>  </BR>  </BR>  </BR>  </BR>  </BR>  </BR> 