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
<h1 ALIGN=center >MODIFICATION Patient<?php ECHO $id ; echo($result->NOM) ; echo($result->PRENOM) ; ?></h1>
<form action="index.php?uc=MODPAT2" method="post" name="form1" id="form1">
 <table bgcolor="white"  bordercolor="green" align="center" border="1">
    <hr />
    <tr valign="baseline">
	  <td bgcolor="#cccccc" nowrap="nowrap" align="left">Date </td>
      <td bgcolor="green" ><input type="text" name="DATE" value="<?php $datejour=date("Y-m-d");echo"$datejour";?>  " size="32" /></td>
      <td bgcolor="#cccccc" nowrap="nowrap" align="left" value="FIXE">Structure </td>
	  <td><input type="text" name="HEURE" value="<?php $datejour=date("H:i");echo"$datejour";?> " size="32" /></td>
	</tr>
    <tr valign="baseline">
      <td bgcolor="#cccccc" nowrap="nowrap" align="left">Nom</td>
      <td bgcolor="red" ><input type="text" name="NOM" value="<?php echo($result->NOM) ;?>" size="32" /></td>
	  <td bgcolor="#cccccc" nowrap="nowrap" align="left">Prénom</td>
      <td bgcolor="red"><input type="text" name="PRENOM" value="<?php echo($result->PRENOM) ;?>" size="32" /></td>
    </tr>
	<tr valign="baseline">
	<td bgcolor="#cccccc" nowrap="nowrap" align="left">Sexe </td>
	<td bgcolor="red">
	<select name="SEXE" id="SEXE">
          <option>M</option>
          <option>F</option>
    </select>
	</td>
	<td bgcolor="#cccccc" nowrap="nowrap" align="left">Né(e) Le</td>
    <td bgcolor="red"><input type="text" name="DATENAISSANCE" value="<?php echo($result->DATENAISSANCE) ;?>" size="32" /></td>
	</tr>
	<tr valign="baseline">
      <td bgcolor="#cccccc" nowrap="nowrap" align="left">fils de </td>
      <td bgcolor="red" ><input type="text" name="FILS" value="<?php echo($result->FILS) ;?>" size="32" /></td>
	  <td bgcolor="#cccccc" nowrap="nowrap" align="left">et de </td>
      <td bgcolor="red"><input type="text" name="ETDE" value="<?php echo($result->ETDE) ;?>" size="32" /></td>
    </tr>
	<tr valign="baseline">
	<td bgcolor="#cccccc" nowrap="nowrap" align="left">Wilaya de naissance</td>
	<td>
	 <?php
    echo '<select size=1 name="WILAYA">'."\n";
    echo '<option value="-1">Wilaya de naissance</option>'."\n";
    $result = mysql_query("SELECT WILAYAS FROM WIL order by WILAYAS " );
    while($data =  mysql_fetch_array($result))
    {
    echo '<option value="'.$data[0].'">'.$data['WILAYAS'];
    echo '</option>'."\n";
    }
    echo '</select>'."\n";
   
    ?>
	</td>
	<td bgcolor="#cccccc" nowrap="nowrap" align="left">Commune de naissance</td>
	<td ><input type="text" name="COMMUNE" value="" size="32" />
      
	</td>
	</tr>
	<tr valign="baseline">
	<td  bgcolor="#cccccc" nowrap="nowrap" align="left">Wilaya de residence</td>
	<td>
	 <?php
    echo '<select size=1 name="WILAYAR">'."\n";
    echo '<option value="-1">Wilaya de residence</option>'."\n";
    $result = mysql_query("SELECT WILAYAS FROM WIL order by WILAYAS " );
    while($data =  mysql_fetch_array($result))
    {
    echo '<option value="'.$data[0].'">'.$data['WILAYAS'];
    echo '</option>'."\n";
    }
    echo '</select>'."\n";
   
    ?>
	</td>
	<td bgcolor="#cccccc" nowrap="nowrap" align="left">Commune de residence</td>
	<td ><input type="text" name="COMMUNER" value="" size="32" />
      
	</td>
	<tr valign="baseline">
	<td bgcolor="#cccccc" nowrap="nowrap" align="left">Adresse de residence</td>
	<td><input type="text" name="ADRESSE" value="" size="32" /></td>
	<td bgcolor="#cccccc" nowrap="nowrap" align="left">Telephone</td>
      <td><input type="text" name="TELEPHONE" value="" size="32" /></td>
	</tr>
	
	<tr valign="baseline">
      
	  
      
    </tr>	
</table>	
	<table align="center"   border="2">
	<tr valign="baseline">
      <td><input type="submit" name="VALIDER" id="VALIDER" value="modifier"   /><a href="index.php?uc=LISTMHOSP">LISTMHOSP</a></td>
    </tr><BR>
    </table> 
</form> 
 <?php
  }//fin if 
?>   

