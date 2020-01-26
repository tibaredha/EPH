<?php include('./SESSION/SESSION.php'); ?>
<?php   
   $idp= $_GET["idp"] ; 
   $Nomlatin= $_GET["Nomlatin"] ;
   $Prenom_Latin= $_GET["Prenom_Latin"] ;
  //requête SQL:
  mysql_query("SET NAMES 'UTF8' ");
 $sql = "SELECT service.servicear as service,grh.Sexe as Sexe ,grh.Nomlatin as Nomlatin ,grh.Prenom_Latin as Prenom_Latin,grh.Commune_Naissancear as Commune_Naissancear,grh.Date_Naissance as Date_Naissance ,grh.Prenom_Arabe as Prenom_Arabe,grh.Nomarab as Nomarab ,grh.idp as idp,grade.gradear as gradear FROM grh,grade,service where  grade.idg=grh.rnvgradear and  service.ids=grh.servicear and grh.cessation !='y' AND grh.idp=$idp order by Nomlatin";

  //exécution de la requête:
  $requete = mysql_query( $sql, $cnx ) ; 
  //affichage des données:
  if( $result = mysql_fetch_object( $requete ) )
  {
?>
<h1 ALIGN=LEFT STYLE="Text-ALIGN:right">تعديل  رتبة  المستخدم   <?php ECHO $Nomlatin." ". $Prenom_Latin; ?> </h1>
	
<form action="index.php?uc=MGRHGRADE1" method="post" name="form1" id="form1">
<hr />

<div style=" position:absolute;left:250px;top:220px;">	 
<input type="submit" name="VALIDER" id="VALIDER" value=" تعديل  رتبة  <?php ECHO $Nomlatin." ". $Prenom_Latin; ?>" /></td>
</div>

<div style=" position:absolute;left:250px;top:320px;">
<input type="hidden" name="idp"            value="<?php echo $idp;?>" size="100" STYLE="Text-ALIGN:right"TABINDEX=1 />
<input type="hidden" name="Nomlatin"       value="<?php echo($result->Nomarab);?>" size="100" STYLE="Text-ALIGN:right"TABINDEX=1 />
<input type="hidden" name="Prenom_Latin"   value="<?php echo($result->Prenom_Arabe);?>" size="100" STYLE="Text-ALIGN:right"TABINDEX=1 />
<input type="hidden" name="Sexe"           value="<?php echo($result->Sexe);?>" size="100" STYLE="Text-ALIGN:right"TABINDEX=1 />	 
<input type="text" name="gradear"          value="<?php echo($result->gradear) ;?>" size="100" STYLE="Text-ALIGN:right"TABINDEX=1 />
</div>
<div style=" position:absolute;left:920px;top:320px;">	 	
الرتبة الاصلية  
</div>

<div style=" position:absolute;left:250px;top:360px;">	 
<?php 
include('./CONNEC/connec.php'); 
    echo '<select size=1 name="GRADE">'."\n";
    echo '<option   value="-1">------------------------------------------------------------------------------------------------------</option>'."\n";
	mysql_query("SET NAMES 'UTF8' ");
    $result = mysql_query("SELECT idg,gradear as gradear FROM grade order by gradear  " );
    while($data =  mysql_fetch_array($result))
    {
    echo '<option value="'.$data[0].'">'.$data['gradear']."/".$data['idg'];
    echo '</option>'."\n";
    }
    echo '</select>'."\n";
   
?>
</div>
<div style=" position:absolute;left:920px;top:360px;">	 	
الرتبة  الجديدة 
</div>




</form> 
 <?php
  }//fin if 
?>    
 </BR>   </BR></BR>  </BR>  </BR>  </BR>  </BR>  </BR>  </BR>  </BR>  </BR>  </BR>  </BR>  </BR>  </BR> 