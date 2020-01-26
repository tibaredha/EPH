<?PHP 
if(isset($_GET['prod'])){//si la variable prod est passée par l'url
if(!is_numeric($_GET['prod'])){//juste une première sécurité
echo"<font color='red'>MERCI DE NE PLUS RECOMMENCER CETTE OPERATION !!!</font>";
exit;
}
$db_host="localhost";
$db_name="grh";  
$db_user="root";
$db_pass="";
$cnx = mysql_connect($db_host,$db_user,$db_pass)or die ('I cannot connect to the database because: ' . mysql_error());
$db  = mysql_select_db($db_name,$cnx) ;
mysql_query("SET NAMES 'UTF8' "); 
$sql1="Select* from GRH where idP=".$_GET['prod'];//nous interrogeons la table sur l'id de la fleur
$req1=mysql_query($sql1)or exit ('Erreur SQL !'.$sql1.'<br>'.mysql_error());
$nb=mysql_num_rows($req1);
if($nb==0){//juste une seconde sécurité
echo"<font color='red'>MERCI DE NE PLUS RECOMMENCER CETTE OPERATION !!!</font>";
exit;
}
//afichage du Produit séléctionné avec qté à commander:
while( $data=mysql_fetch_array($req1) ) {
// Formulaire qui enverra les données sur la page de traitement
?>

<form method="POST" action="Panier4_2.php">
<?PHP
echo"<tr><td>".$data['0']." </td><td colspan='2'> ".$data['2']."</td></tr>".
// le champ qui récupèrera le nbre de fleurs commandées.
"<tr><td colspan='3'align='center'>Quantité : <input type='text' name='qte' size='5'>".
"<input type='submit' name='action' value='Cder'></td></tr>".//bouton de validation
"<input name='id' type='hidden' value='".$data['0']."'>";//trés important, en champ caché l'ID de la fleur
}
?>
<input type="button" style="width: 180px; height: 50px">
</table><br>
<div align="center"><a href="javascript:history.go(-1)"><< Retour Boutique</a></div>
<?php 
}