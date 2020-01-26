<?php
$per-> mysqlconnect();

    $idp = $_POST["idp"] ;
    $SF = $_POST["SF"] ;
    $NBRE = $_POST["NBRE"] ;
	$ALLF = $_POST["ALLF"] ;
    $CONJOINT = $_POST["CONJOINT"] ;
	$NSS = $_POST["NSS"] ;
    $CCP = $_POST["CCP"] ;
	$sql = "UPDATE grh SET
	Situation_familliale = '$SF',
	NBRENF               = '$NBRE',
	ALLF                 = '$ALLF',
	CONJOINT             = '$CONJOINT',
	NSS                  = '$NSS',
	NCCP                 = '$CCP'
	WHERE idp            = '$idp'" ;
 
$requete = mysql_query($sql) or die( mysql_error() ) ;
if($requete)
{
header("Location: index.php?uc=SAA") ;
}
else
{
header("Location: index.php?uc=SAA") ;
}
?>
