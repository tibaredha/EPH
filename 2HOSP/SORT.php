<?php
$per->mysqlconnect();
$IDP=$_POST["idp"];
$MODS=$_POST["MODS"]; 
$sql = "SELECT * FROM tpat WHERE idp = ".$IDP ;
$requete = mysql_query( $sql ) ; 
if( $result = mysql_fetch_object( $requete ) )
{
$NLIT1=$result->NLIT;
$NLIT2="0";
$per-> mysqlconnect();
$sql = "UPDATE lit SET  idpt = '$NLIT2' WHERE idlit = '$NLIT1' " ;
$requete = mysql_query($sql) or die( mysql_error() ) ;

$HOSP="S";
$DATESORTIE  =date('Y-m-d'); 
$HEURESORTIE =date('H:i'); 


$per-> mysqlconnect();
$sql = "UPDATE tpat SET 
HOSP         = '$HOSP', 
DATESORTIE   = '$DATESORTIE ',
MODSORTIE    = '$MODS ',
HEURESORTIE  = '$HEURESORTIE'
WHERE IDP    = '$IDP' " ;

$requete = mysql_query($sql) or die( mysql_error() ) ;
	if($requete)
	{
	header("Location:index.php?uc=LISTMHOSP") ;
	}
	else
	{
	header("Location:index.php?uc=SMH") ; 
	}


}
?>


