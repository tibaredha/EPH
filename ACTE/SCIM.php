<?php include('./SESSION/SESSION.php'); ?>
<?php
if (ISSET($_GET['msg']))
{
$msg=$_GET['msg'];
}
else
{
$msg="";
}
?>
<div class="container">
<form action="index.php?uc=SMED1" method="post">
<p align=center>Cherche medicaments : <?php echo $msg;?></p>
<table align="center" border="1">
    <tr valign="baseline">
      <td>critere de recherhe
	  <select name="colone" id="SEXE">
          
		  <option>dci</option>
		  <option>code</option>
		  <option>ID</option> 
        </select>
		</td>
<td><input  type="text" name="search"  /></td>
      <td><input type="submit" name="submit" value="Cherche medicaments"  /></td>
    </tr>
</table>
</form>
</div>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>