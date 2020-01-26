<?php include('./SESSION/SESSION.php'); ?>
<?php   
   $id  = $_GET["idp"] ; 

  
  //requête SQL:
  mysql_query("SET NAMES 'UTF8' ");
  $sql = "SELECT service.servicear as service,grh.Motif_Cessation as Cessation ,grh.Nomlatin as Nomlatin ,grh.Prenom_Latin as Prenom_Latin,grh.Commune_Naissancear as Commune_Naissancear,grh.Sexe as Sexe ,grh.Date_Naissance as Date_Naissance ,grh.Prenom_Arabe as Prenom_Arabe,grh.Nomarab as Nomarab ,grh.idp as idp,grade.idg as idg,grade.ids as idstatut,grade.gradear as gradear FROM grh,grade,service where  grade.idg=grh.rnvgradear and  service.ids=grh.servicear and idp = ".$id;
  //exécution de la requête:
  $requete = mysql_query( $sql, $cnx ) ; 
  //affichage des données:
 if( $result = mysql_fetch_object( $requete ))
  {
  ?>
<h1 ALIGN=LEFT STYLE="Text-ALIGN:CENTER">مقرر تعين في منصب عالي </h1>
<form action="./POSTESUP/PSUP.php" method="post" name="form1" id="form1">
 
  <div style=" position:absolute;left:30px;top:520px;">
	<table align="center"   border="3">
	<tr valign="baseline">
    <td>
	<input type="submit" name="VALIDER" id="VALIDER" value="إطبع مقرر تعين في منصب عالي" />
	<td/>
	 <td>
<a href="index.php?uc=GRH&idp=<?php ECHO $_GET["idp"]?>&Nomlatin=<?php echo($result->Nomarab) ;?>&Prenom_Latin=<?php echo($result->Prenom_Arabe) ;?>&Sexe=<?php echo($result->Sexe);?>"><img src='./images/b_home.png' width='16' height='16' border='0' alt=''/>ادارة المستخدم</a>
	 <td/>
    </tr>
	</table> 
	</div>
   <div style=" position:absolute;left:600px;top:280px;">	 
    <input readonly type="text" STYLE="Text-ALIGN:center" TABINDEX=2 name="HEUR" value="<?php $datejour=date("H:i");echo"$datejour";?> " size="15" />	    
    <input type="hidden" name="idp" value="<?php echo"$id";?> "  />
	<input type="hidden" name="idg" value="<?php echo($result->idg) ;?> "  />
	<input type="hidden" name="idstatut" value="<?php echo($result->idstatut) ;?> "  />
   </div>
     <div style=" position:absolute;left:740px;top:280px;">
	ساعة الطلب
    </div>
	<div style=" position:absolute;left:800px;top:280px;">
	<input readonly type="text" STYLE="Text-ALIGN:center" TABINDEX=1 name="DATE" value="<?php $datejour=date("Y-m-d");echo"$datejour";?>  " size="15" />
    </div>
   <div style=" position:absolute;left:945px;top:280px;">
	التاريخ
    </div>
	<div style=" position:absolute;left:600px;top:320px;">	 
	<input readonly type="text" name="NOM" value="<?php echo($result->Nomarab) ;?>" size="15" STYLE="Text-ALIGN:right"TABINDEX=4 />
    </div>
    <div style=" position:absolute;left:750px;top:320px;">
	اللقب
	</div>
    <div style=" position:absolute;left:800px;top:320px;">
      <input readonly type="text" name="PRENOM" value="<?php echo($result->Prenom_Arabe) ;?>" size="15" STYLE="Text-ALIGN:right"TABINDEX=3 />
	</div>
    <div style=" position:absolute;left:950px;top:320px;">
	الاسم   
    </div>
    
    <div style=" position:absolute;left:600px;top:360px;">
	<input readonly type="text" name="GRADE" value="<?php echo($result->gradear) ;?>" size="48" STYLE="Text-ALIGN:right"TABINDEX=3 />
	</div>
    <div style=" position:absolute;left:950px;top:360px;">
	الرتبة
	</div> 
	
	
	
	
	<div style=" position:absolute;left:450px;top:400px;">	 
	<input  type="date" name="DD" value="" size="15" STYLE="Text-ALIGN:right"TABINDEX=4 />
    </div>
    <div style=" position:absolute;left:688px;top:400px;">
	المؤرخ فى
	</div>
    <div style=" position:absolute;left:750px;top:400px;">
      <input  type="text" name="ND" value="" size="5" STYLE="Text-ALIGN:right"TABINDEX=3 />
	</div>
    <div style=" position:absolute;left:834px;top:400px;">
	رقم القرار الوزارى المشترك    
    </div>
	
	
	
	<div style=" position:absolute;left:150px;top:440px;">	 
	<input  type="date" name="DATA" value="" size="8" STYLE="Text-ALIGN:right"TABINDEX=4 />
    </div>
    <div style=" position:absolute;left:300px;top:440px;">
	ابتداء من
	</div>
	<div style=" position:absolute;left:450px;top:440px;">	 
	<input  type="date" name="DATO" value="" size="8" STYLE="Text-ALIGN:right"TABINDEX=4 />
    </div>
    <div style=" position:absolute;left:600px;top:440px;">
	المؤرخ فى
	</div>
    <div style=" position:absolute;left:750px;top:440px;">
      <input  type="text" name="DDT" value="" size="5" STYLE="Text-ALIGN:right"TABINDEX=3 /> 
	</div>
    <div style=" position:absolute;left:895px;top:440px;">
	رقم  مقرر التثبيت
    </div>
	
	
	
	
	<div style=" position:absolute;left:450px;top:480px;">	 
	<input  type="date" name="ETAA" value="" size="26" STYLE="Text-ALIGN:right"TABINDEX=4 />
    </div>
    <div style=" position:absolute;left:600px;top:480px;">
	ابتداء من 
	</div>
    <div style=" position:absolute;left:700px;top:480px;">
      
	<?php 
    echo '<select size=1 name="ETAO">'."\n";
    echo '<option   value="-1">إختر  منصب عالي</option>'."\n";
	mysql_query("SET NAMES 'UTF8' ");
    $result = mysql_query("SELECT * FROM postesup  " );
    while($data =  mysql_fetch_array($result))
    {
    echo '<option      value="'.$data[0].'">'.$data['postesupar'];
    echo '</option>'."\n";
    }
    echo '</select>'."\n";  
    ?>
	</div>
    <div style=" position:absolute;left:975px;top:480px;">
	المنصب العالى  
    </div>
</form> 
<?php
}//fin if 



		
?>  
 </BR>  </BR>  </BR></BR>  </BR>  </BR>  </BR>  </BR>  </BR>  </BR>  </BR>  </BR>  </BR>  </BR>   

