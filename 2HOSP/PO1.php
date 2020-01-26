<?php 
$per-> mysqlconnect();
$id  = $_GET["idp"] ; 
$sql = "SELECT * FROM tpat WHERE idp = ".$id ;
$requete = mysql_query( $sql ) ; 
if( $result = mysql_fetch_object( $requete ) )
{
?>
<br> 
<p align="center" >protocole operatoire <p/>
<form name="insertion" action="./2HOSP/PO2.php" method="POST">
      <input type="hidden" name="id"             value="<?php echo($id) ;?>">
      <input type="hidden" name="NOM"            value="<?php echo($result->NOM) ;?>">
	  <input type="hidden" name="PRENOM"         value="<?php echo($result->PRENOM) ;?>">     
	  <input type="hidden" name="DATENAISSANCE"  value="<?php echo($result->DATENAISSANCE) ;?>"> 
	  <input type="hidden" name="AGE"            value="<?php echo($result->AGE) ;?>">
	  <input type="hidden" name="FILS"           value="<?php echo($result->FILS) ;?>">
      <input type="hidden" name="ETDE"           value="<?php echo($result->ETDE) ;?>">
	  <input type="hidden" name="COMMUNE"        value="<?php echo($result->COMMUNE) ;?>">
      <input type="hidden" name="WILAYA"         value="<?php echo($result->WILAYA) ;?>">	
      <input type="hidden" name="COMMUNER"       value="<?php echo($result->COMMUNER) ;?>">
      <input type="hidden" name="WILAYAR"        value="<?php echo($result->WILAYAR) ;?>">    
      <input type="hidden" name="ADRESSE"        value="<?php echo($result->ADRESSE) ;?>">
      <input type="hidden" name="SEXE"           value="<?php echo($result->SEXE) ;?>">	

<p align="center">TYPE ANNESTHESIE </p> 
<p align="center">POSITION DEFINITIVRE DE L OPPERER </p>
<p align="center">LA VOIE D ABORD </p>      
<table bgcolor="white"  bordercolor="green" align="center" border="1">
	<p align="center">LES CONSTATATIONS OPPERATOIRES  </p>  
	<tr valign="baseline"> 
	<td bgcolor="#cccccc" nowrap="nowrap" align="left">
	<textarea align=center rows=10 cols=80   name="1"     value=""> resume clinique</textarea></td>  
	</tr> 
     
</table>	  
 <table bgcolor="white"  bordercolor="green" align="center" border="1">
	<p align="center">LA JUSTIFICATION DES DECISIONS  </p>  
	<tr valign="baseline"> 
	<td bgcolor="#cccccc" nowrap="nowrap" align="left">
	<textarea align=center rows=10 cols=80   name="2"     value=""> resume clinique</textarea></td>  
	</tr> 
     
</table>   
 <table bgcolor="white"  bordercolor="green" align="center" border="1">
	<p align="center">LES GESTES EFFECTUES </p> 
	<td bgcolor="#cccccc" nowrap="nowrap" align="left">
	<textarea align=center rows=10 cols=80   name="3"     value=""> resume clinique</textarea></td>  
	</tr> 
     
</table> 	
 <table bgcolor="white"  bordercolor="green" align="center" border="1">
	<p align="center">APPAREILLAGE EXTERNE EVENTUEL </p> 
	<td bgcolor="#cccccc" nowrap="nowrap" align="left">
	<textarea align=center rows=10 cols=80   name="4"     value=""> resume clinique</textarea></td>  
	</tr> 
     
</table>	
<p align="center">LES PRELEVEMENT BAC OU ANAPATH </p> 	
	
    
	
	

 <table align="center"   border="2">
	<tr valign="baseline">
      <td><input type="submit" name="VALIDER" id="VALIDER" value="PROTOCOLE OPERATOIRE" onClick="this.form.submit();this.disabled=true;this.value='Patientez...'"  /><a href="index.php?uc=SMH&idp=<?php ECHO $_GET["idp"]?>">RETOUR </a></td>
    </tr><BR>
 </table> 
	
	
</form>
<?php
  }//fin if 
?>  
