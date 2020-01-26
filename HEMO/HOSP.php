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
<h1 ALIGN="center">Demande D'hospitalisation </h1>
<form name="insertion" action="./1pat/ADM.php" method="POST">
    <input type="hidden" name="IDP" value="<?php echo($id) ;?>">
    <tr align="center">
   <td><input type="HIDDEN" name="NOM" value="<?php echo($result->NOM) ;?>"></td>
	</tr>
    <tr align="center">
	<td><input type="HIDDEN" name="PRENOM" value="<?php echo($result->PRENOM) ;?>"></td>
    </tr>
    <tr align="center">
	<td><input type="HIDDEN" name="SEXE" value="<?php echo($result->SEXE) ;?>"></td>	
	</tr>
    <tr align="center">
      <td><input type="HIDDEN" name="DATENAISSANCE" value="<?php echo($result->DATENAISSANCE) ;?>"></td>
    </tr>
	<tr align="center">
	<input type="HIDDEN" name="AGE" value="<?php echo($result->AGE) ;?>"></td>
    </tr>
    <tr align="center">
	<td><input type="HIDDEN" name="FILSDE" value="<?php echo($result->FILS) ;?>"></td>
    </tr>
	<tr align="center">
    <td><input type="HIDDEN" name="ETDE" value="<?php echo($result->ETDE) ;?>"></td>
    </tr>
	<tr align="center">
	<td><input type="HIDDEN" name="WN" value="<?php echo($result->wilaya) ;?>"></td>
    </tr>
	<tr align="center">
	<td><input type="HIDDEN" name="CN" value="<?php echo($result->commune) ;?>"></td>
    </tr>
	<tr align="center">
	<td><input type="HIDDEN" name="WR" value="<?php echo($result->wilayar) ;?>"></td>
    </tr>
	<tr align="center">
	<td><input type="HIDDEN" name="CR" value="<?php echo($result->communer) ;?>"></td>
    </tr>
	<tr align="center">
	<td><input type="HIDDEN" name="ADRESSE" value="<?php echo($result->ADRESSE) ;?>"></td>
	</tr>
	<tr align="center">
	<td><input type="HIDDEN" name="TEL" value="<?php echo($result->telephone) ;?>"></td>
    </tr>
    <table border="1" align="center" cellspacing="2" cellpadding="2">
    <tr align="center">
      <td>SERVICE</td>
	  <td>	  
	  <select name="SERVICE" id="SERVICE">          
		  <option>MEDECINE HOMME</option>
          <option>MEDECINE FEMME</option>
          <option>CHIRURGIE HOMME</option>
          <option>CHIRURGIE FEMME</option>
          <option>GYNECO </option>
          <option>MATERNITE</option>
          <option>PEDIATRIE</option>
          <option>BLOC OPP A</option>
          <option>BLOC OPP B </option>
          <option>UMC</option>        		  
       </select>
	  
	  </td>
    </tr>
    <tr align="center"> 
	 <td>SPECIALITE </td><td>	  
	  <select name="SPECIALITE" id="SERVICE">          
		  <option>MEDECINE GENERALE</option>
          <option>CHIRURGIE</option>
          <option>MEDECINE INTERNE</option>
          <option>PEDIATRE</option>
          <option>GYNECOLOGIE </option>
          <option>REANIMATION</option>
              		  
       </select>
	  
	  </td>
    </tr>
    <tr align="center">
	<td>PRATICIEN</td>
	<td>
	  <?php
      echo '<select size=1 name="PRATICIEN">'."\n";
      echo '<option value="-1">PRATICIEN</option>'."\n";
      $result = mysql_query("SELECT NOM_LATIN FROM grh1 where Statut_Grade_Premier_Recrutement= 'Praticiens_Santé_Publique' order by Statut_Grade_Premier_Recrutement  " );
      while($data =  mysql_fetch_array($result))
      {
      echo '<option value="'.$data[0].'">'.$data['NOM_LATIN'];
      echo '</option>'."\n";
      }
      ?>
	  </td>  
    </tr>
    <tr align="center">
      <td>GRADE</td><td><select name="GRADE" id="SERVICE">          
		  <option>GENERALISTE</option>
          <option>SPECIALISTE</option>              		  
       </select></td>
    </tr>
	
	 <tr align="center">
	<td>NOM DE LA SALLE </td><td><input type="text" name="SALLE" value=""></td>  
    </tr>
    <tr align="center">
      <td>NUMERO DU LIT </td><td><input type="text" name="LIT" value=""></td>
    </tr>
	
	<tr align="center">
      <td colspan="2"><input type="submit" value="HOSPITALISATION"></td>
	 </tr>
    <tr align="center">
	 <td colspan="2"><a href="index.php?uc=CPAT" title="Confirmer Patient">Confirmer Un Autre Patient</a></td>
	</tr>
    
  </table> 
</form>
<?php
  }//fin if 
?> 
</br>




