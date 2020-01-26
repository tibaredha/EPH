<?php 
session_start(); //demarrage de la session
if(isset($_SESSION['panier']))
{ //si il y a une comande dans le caddie alors on affiche un lien au caddie 
echo "<div align='right'><a href='Panier4_3.php'><b>VOIR CADDIE</b></a></div><br><br>";
}
?> 
<H1 align="center">Votre Boutique en ligne ....</H1>
<table border="1" bgcolor="cccccc" align="center" width="75%">
<tr bgcolor='white'>
<td width=''>Noms</td>
<td width=''>Px Unitaires</td>
<td width=''>&nbsp;</td>
</tr>
<?php 
if(!isset($_GET['prod'])){// pas de variable dans l'url
$db_host="localhost";
$db_name="grh";  
$db_user="root";
$db_pass="";
$cnx = mysql_connect($db_host,$db_user,$db_pass)or die ('I cannot connect to the database because: ' . mysql_error());
$db  = mysql_select_db($db_name,$cnx) ;
mysql_query("SET NAMES 'UTF8' "); 
$sql="Select* from grh";
$req=mysql_query($sql)or exit ('Erreur SQL !'.$sql.'<br>'.mysql_error());
while( $data=mysql_fetch_array($req) ) {//la boucle pour l'affichage des données.
echo"<tr><td>".$data['0']." </td><td> ".$data['0']."</td><td> <a href='PAN4.php?prod=".$data['0']."'>Detail+Cde</a></td></tr>";
}
//mysql_close();// n'oubliez pas de fermer la connexion !!
?>
</table>
<?php 
}
?>