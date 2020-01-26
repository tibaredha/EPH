<?php include('./SESSION/SESSION.php'); ?>
<?php   
  $id  = $_GET["idp"] ; 
  //requête SQL:
  $sql = "SELECT * FROM tpat WHERE idp = ".$id ;
  //exécution de la requête:
  $requete = mysql_query( $sql, $cnx ) ; 
  //affichage des données:
  if( $result = mysql_fetch_object( $requete ) )
  {
?>
<br> 

<form name="insertion" action="./1PAT/RAGE.php" method="POST">
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
	  <input type="hidden" name="SERVICEHOSP"    value="<?php echo($result->SERVICEHOSP) ;?>">
	  <input type="hidden" name="PRATICIEN"      value="<?php echo($result->PRATICIEN) ;?>">
	  <input type="hidden" name="DATE"           value="<?php echo($result->DATE ) ;?>">	
	  <input type="hidden" name="HEURE"          value="<?php echo($result->HEURE) ;?>">	


 
 
</table>
<p align="center">RAGE : <?php echo($result->NOM .$result->PRENOM.$result->DATENAISSANCE) ; ?></p>
<table bgcolor="white"  bordercolor="green" align="center" border="1">
 <tr valign="baseline">	    
       <td bgcolor="#cccccc" nowrap="nowrap" align="left">SHEMA ANTI RABIQUE </td> 
	   <td bgcolor="green" >
	   <select name="TV" >
	       value="0"
          <option value="1" >VACCINATION  SOURICEAU</option>
		  <option value="2" >SERO-VACCINATION SOURICEAU</option>
		  <option value="3" >VACCINATION CELLULAIRE</option>
		  <option value="4" >SERO-VACCINATION CELLULAIRE</option>
          <option>-------------------------------------</option>
        </select>  
	   </td>
  </tr>
  <tr valign="baseline">	
       <td bgcolor="#cccccc" nowrap="nowrap" align="left">POIDS</td> 
	   <td bgcolor="BLUE" ><input type="text"                 name="POIDS" value="">
  </tr>
 <tr valign="baseline">	    
       <td bgcolor="#cccccc" nowrap="nowrap" align="left">AGES</td> 
	   <td bgcolor="green" ><input type="text"           name="AGES" value=""></td>
 </tr>
 
 
 
 

</table>
 <table align="center"   border="2">
	<tr valign="baseline">
      <td><input title="SHEMA ANTI RABIQUE" type="submit" name="VALIDER" id="VALIDER" value="SHEMA ANTI RABIQUE" onClick="this.form.submit();this.disabled=true;this.value='Patientez svp ...'"  /><a href="index.php?uc=SMH&idp=<?php ECHO $_GET["idp"]?>">RETOUR MALADE</a></td>
    </tr><BR>
 </table> 
	
	
</form>
<?php
  }//fin if 
?>  
