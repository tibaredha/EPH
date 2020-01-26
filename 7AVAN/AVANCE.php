<?php include('./SESSION/SESSION.php'); ?>
<?php   
   $id  = $_GET["idp"] ; 
  //requête SQL:
  mysql_query("SET NAMES 'UTF8' ");
   $sql = "SELECT service.servicear as service,grh.Nomlatin as Nomlatin ,grh.NSS as NSS,grh.NCCP as NCCP,grh.Prenom_Latin as Prenom_Latin,grh.Commune_Naissancear as Commune_Naissancear,grh.Sexe as Sexe ,grh.Date_Naissance as Date_Naissance ,grh.Prenom_Arabe as Prenom_Arabe,grh.Nomarab as Nomarab ,grh.idp as idp,grade.idg as idg,grade.ids as idstatut,grade.gradear as gradear FROM grh,grade,service where  grade.idg=grh.rnvgradear and  service.ids=grh.servicear and idp = ".$id;
  //exécution de la requête:
  $requete = mysql_query( $sql, $cnx ) ; 
  //affichage des données:
  if( $result = mysql_fetch_object( $requete ) )//./1GRH/AVANCE1.php
  {
?>
<h1 ALIGN=LEFT STYLE="Text-ALIGN:right">الترقية في الدرجة </h1>
<form action="./7AVAN/AVANCE1.php" method="post" name="form1" id="form1">
 
  <div style=" position:absolute;left:150px;top:500px;">
	<table align="center"   border="3">
	<tr valign="baseline">
    <td>
	<input type="submit" name="VALIDER" id="VALIDER" value="إطبع  مقرر ترقية " />
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
	<div style=" position:absolute;left:860px;top:400px;">
	<input  type="text" name="NDECISION" value="" size="2" STYLE="Text-ALIGN:right"TABINDEX=3 />
	</div>
    <div style=" position:absolute;left:925px;top:400px;">
	رقم  المقرر
	</div>
	<div style=" position:absolute;left:690px;top:400px;">
	<input  type="text" name="DATEDECISION" value="30/12/2010" size="6" STYLE="Text-ALIGN:right"TABINDEX=3 />
	</div>
    <div style=" position:absolute;left:785px;top:400px;">
	تاريخ  المقرر
	</div>
	<div style=" position:absolute;left:860px;top:440px;">
	<input  type="text" name="NPV" value="" size="2" STYLE="Text-ALIGN:right"TABINDEX=3 />
	</div>
    <div style=" position:absolute;left:916px;top:440px;">
	رقم المحضر
	</div>
	<div style=" position:absolute;left:690px;top:440px;">
	<input  type="text" name="DATEPV" value="30/12/2010" size="6" STYLE="Text-ALIGN:right"TABINDEX=3 />
	</div>
    <div style=" position:absolute;left:775px;top:440px;">
	تاريخ المحضر
	</div>
	<div style=" position:absolute;left:600px;top:440px;">
	<input  type="text" name="ANNEEPV" value="2010" size="2" STYLE="Text-ALIGN:right"TABINDEX=3 />
	</div>
    <div style=" position:absolute;left:660px;top:440px;">
     لسنة
	</div>
	<div style=" position:absolute;left:840px;top:480px;">
	<select name="DUREE"  >
					        <option>----</option>
                            <option selected>الدنيا</option>
                            <option>المتوسطة</option>
							<option>الطويلة</option>
                    </select>
	</div>
    <div style=" position:absolute;left:955px;top:480px;">
	المدة
	</div>
	<div style=" position:absolute;left:690px;top:480px;">
	<select name="CATEGORIE"  >
					        <option>----</option>
                            <option>1</option>
                            <option>2</option>
							<option>3</option>
							<option>4</option>
							<option>5</option>
							<option>6</option>
							<option>7</option>
							<option>8</option>
							<option>9</option>
							<option>10</option>
							<option>11</option>
							<option>12</option>
							<option>13</option>
							<option>14</option>
							<option>15</option>
							<option>16</option>
							<option>17</option>
							<option>hc1</option>
							<option>hc2</option>
							<option>hc3</option>
							<option>hc4</option>
							<option>hc5</option>
							<option>hc6</option>
							<option>hc7</option>
                    </select>	
	</div>
    <div style=" position:absolute;left:760px;top:480px;">
	الصنف
	</div>
	<div style=" position:absolute;left:600px;top:480px;">
	<select name="ECHELON"  >
					        <option>----</option>
                            <option>0</option>
							<option>1</option>
                            <option>2</option>
							<option>3</option>
							<option>4</option>
							<option>5</option>
							<option>6</option>
							<option>7</option>
							<option>8</option>
							<option>9</option>
							<option>10</option>
							<option>11</option>
							<option>12</option>		
                    </select>
	</div>
    <div style=" position:absolute;left:654px;top:480px;">
	الدرجة
	</div>
	<div style=" position:absolute;left:840px;top:520px;">
	<select name="SF" >
	      <option>----</option>
          <option>أعزب</option>
          <option>عزباء</option>
		  <option>ارمل/ة</option>
		  <option selected>متزوج/ة</option>
		  <option>مطلق/ة</option>  
        </select> 
    </div>
    <div style=" position:absolute;left:915px;top:520px;">	 	
    الحالة العائلية   
    </div>
	
	<div style=" position:absolute;left:600px;top:520px;">
	<input  type="text" name="NBRENF" value="" size="10" STYLE="Text-ALIGN:right"TABINDEX=3 />
    </div>
    <div style=" position:absolute;left:715px;top:520px;">	 	
    عدد الاولاد   
    </div>
    <div style=" position:absolute;left:150px;top:280px;">
	<input  type="text" name="DATEDEFFET" value="" size="10" STYLE="Text-ALIGN:right"TABINDEX=3 />
	<input  type="hidden" name="INDICEB" value="<?php echo"i" ;?>" size="48" STYLE="Text-ALIGN:LEFT"TABINDEX=3 />
	</div>
    <div style=" position:absolute;left:260px;top:280px;">
	تاريخ النفاذ 
	</div>
	<div style=" position:absolute;left:150px;top:320px;">
     <input  type="text" name="RESTE" value="" size="10" STYLE="Text-ALIGN:right"TABINDEX=3 />
    </div>
	<div style=" position:absolute;left:260px;top:320px;">
	الاقدمية المتبقية
	</div>
   
    <div style=" position:absolute;left:150px;top:360px;">
     <input  type="text" name="NSS" value="<?php echo($result->NSS) ;?>" size="10" STYLE="Text-ALIGN:right"TABINDEX=3 />
    </div>
	<div style=" position:absolute;left:260px;top:360px;">
	رقم الضمان الاجتماعى
	</div>
  
	<div style=" position:absolute;left:150px;top:400px;">
     <input  type="text" name="NCCP" value="<?php echo($result->NCCP) ;?>" size="10" STYLE="Text-ALIGN:right"TABINDEX=3 />
    </div>
	<div style=" position:absolute;left:260px;top:400px;">
	رقم الحساب الجارى
	</div>  
</form> 
<?php
  }//fin if 
?>  
 </BR>  </BR>  </BR></BR>  </BR>  </BR>  </BR>  </BR>  </BR>  </BR>  </BR>  </BR>  </BR>  </BR>  </BR>  </BR> 

