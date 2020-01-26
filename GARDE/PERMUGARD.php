<?php include('./SESSION/SESSION.php'); ?>
<?php 
  $idp  = $_GET["idp"] ; 
  //requête SQL:
  mysql_query("SET NAMES 'UTF8' ");
  $sql = "SELECT grh.servicear as numser ,service.servicear as service,grh.Sexe as Sexe ,grh.Nomlatin as Nomlatin ,grh.Prenom_Latin as Prenom_Latin,grh.Commune_Naissancear as Commune_Naissancear,grh.Date_Naissance as Date_Naissance ,grh.Prenom_Arabe as Prenom_Arabe,grh.Nomarab as Nomarab ,grh.idp as idp,grade.gradear as gradear FROM grh,grade,service where  grade.idg=grh.rnvgradear and  service.ids=grh.servicear and idp = ".$idp;
  //exécution de la requête:
  $requete = mysql_query( $sql, $cnx ) ; 
  //affichage des données:
  if( $result = mysql_fetch_object( $requete ) )
  {
  
  $numser = $result->numser;
?>  
<h1  ALIGN=LEFT STYLE="Text-ALIGN:center">طلـــــب   تبديل مداومة </h1>
<form action="./garde/DEMPERG1.php" method="post" name="form1" id="form1">

<div style=" position:absolute;left:150px;top:500px;">
	<table align="center"   border="3">
	<tr valign="baseline">
    <td>
	<input type="submit" name="VALIDER" id="VALIDER" value="طلـــــب   تبديل مداومة" />
	<input type="hidden" name="idp" value="<?php echo"$idp";?> "  />
	 
	<td/>
	<td>
	<a href="index.php?uc=GARDEG&idp=<?php ECHO $_GET["idp"]?>&Nomlatin=<?php echo($result->Nomarab) ;?>&Prenom_Latin=<?php echo($result->Prenom_Arabe) ;?>&Sexe=<?php echo($result->Sexe);?>"><img src='./images/b_home.png' width='16' height='16' border='0' alt=''/>طبيب عام في الصحة العمومية</a>
   
    <td/>
    </tr>
	</table> 
	</div>
   <div style=" position:absolute;left:630px;top:280px;">	 
    <input readonly type="text" STYLE="Text-ALIGN:center" TABINDEX=2 name="HEUR" value="<?php $datejour=date("H:i");echo"$datejour";?> " size="15" />	    
    </div>
     <div style=" position:absolute;left:770px;top:280px;">
	ساعة الطلب
    </div>
    
	
	<div style=" position:absolute;left:830px;top:280px;">
	<input readonly type="text" STYLE="Text-ALIGN:center" TABINDEX=1 name="DATE" value="<?php $datejour=date("Y-m-d");echo"$datejour";?>  " size="15" />
    </div>
   <div style=" position:absolute;left:975px;top:280px;">
	التاريخ
    </div>
    
	
	<div style=" position:absolute;left:630px;top:320px;">	 
	<input readonly type="text" name="NOM" value="<?php ECHO ($result->Nomarab)?>" size="15" STYLE="Text-ALIGN:right"TABINDEX=4 />
    </div>
    <div style=" position:absolute;left:780px;top:320px;">
	اللقب
	</div>
    <div style=" position:absolute;left:830px;top:320px;">
      <input readonly type="text" name="PRENOM" value="<?php ECHO ($result->Prenom_Arabe)?>" size="15" STYLE="Text-ALIGN:right"TABINDEX=3 />
	</div>
    <div style=" position:absolute;left:980px;top:320px;">
	الاسم   
    </div>
    
    <div style=" position:absolute;left:630px;top:360px;">
	<input readonly type="text" name="GRADE" value="<?php ECHO ($result->gradear)?>" size="48" STYLE="Text-ALIGN:right"TABINDEX=3 />
	</div>
    <div style=" position:absolute;left:980px;top:360px;">
	الرتبة
	</div>

	
	<div style=" position:absolute;left:630px;top:400px;">
	<input type="text" name="FONCTION" value="" size="48" STYLE="Text-ALIGN:right" TABINDEX=6/>
	</div>
     <div style=" position:absolute;left:974px;top:400px;">
	الوظيفة
	</div>
    <div style=" position:absolute;left:890px;top:440px;">
	<select name="DUREE" value=""TABINDEX=7 >
          <option >8-16 </option>
		  <option >16-8 </option>
		  
        </select>
	</div>
    <div style=" position:absolute;left:988px;top:440px;">
	المدة
	</div>
    <div style=" position:absolute;left:630px;top:440px;">	
	<input type="text" name="DC" value="" size="15"STYLE="Text-ALIGN:right" TABINDEX=10/>
	</div>
    <div style=" position:absolute;left:775px;top:440px;">
	تاريخ بداية العطلة *
	</div>
	<div style=" position:absolute;left:630px;top:480px;">
	<input readonly type="text" name="SERVICE" value="<?php ECHO ($result->service)?>" size="48" STYLE="Text-ALIGN:right"TABINDEX=3 />
	</div>
   <div style=" position:absolute;left:970px;top:480px;">
	المصلحة
	</div>

    <div style=" position:absolute;left:805px;top:520px;">
	
<?php 
    echo '<select size=1 name="REMPLACANT">'."\n";
    echo '<option value="-1">----------المستخلف----------</option>'."\n";
	//include('./GRH/connec.php');
	mysql_query("SET NAMES 'UTF8' ");
	$result = mysql_query("SELECT * FROM grh WHERE rnvgradear=5 or rnvgradear=6  " );
    while($data =  mysql_fetch_array($result))
    {
    echo '<option value="'.$data[6].' '.$data[7].'">'.$data['Nomarab']." ".$data['Prenom_Arabe'];
    echo '</option>'."\n";
    }
    echo '</select>'."\n";
   
 ?>
		
	</div>
   <div style=" position:absolute;left:965px;top:520px;">
	المستخلف 
	</div>	
	
	<div style=" position:absolute;left:630px;top:520px;">
	<select name="CC" >
          <option  selected > *****    </option>
          
        </select>
	</div>
    <div style=" position:absolute;left:730px;top:520px;">	
	سبب الخروج 
	</div>
</form> 
<?php
  }//fin if 
?> 
 </BR>    </BR>  </BR></BR>  </BR>  </BR>  </BR>  </BR>  </BR>  </BR>  </BR>  </BR>  </BR>  </BR> 
 