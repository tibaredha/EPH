<?php include('SESSION.php'); ?>
<?php include('../CONNEC/CONNEC.php'); ?>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <title>modification de donn�es en PHP :: partie2</title>
	<link href="style.css"	title="D�faut" rel="stylesheet" type="text/css" media="screen" />
</head>
<body>
<?php include('../includes/entete.php'); ?>
<?php include('../includes/SMDNR.php'); ?>   
<?php     
  
    $id  = $_GET["idp"] ;
    //requ�te SQL:
   $sql = "DELETE FROM TPAT WHERE IDP = ".$id ;
   //ex�cution de la requ�te:
   $requete = mysql_query( $sql, $cnx ) ;
   if($requete)
{
    //echo("La suppression a ete correctement effectuee") ;
	header("Location: PAT3.php") ;
}
else
{
    //echo("La modification � echouee") ;
	header("Location: PAT3.php") ;
}
  
 ?> 
 <?php ('../includes/pied.php');?>
</body>
</html>