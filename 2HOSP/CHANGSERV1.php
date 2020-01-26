<?php
$IDP=$_POST["idp"];
$DATEHOSPI=$_POST["DATEHOSPI"];  
$ASERVICE=$_POST["ASERVICE"]; 

//****************************//
//0 CHERCHER LE PATIENT 
$per-> mysqlconnect();
$sql0 = "SELECT * FROM tpat WHERE idp = ".$IDP ;
$requete0 = mysql_query( $sql0 ) ; 
if( $result0 = mysql_fetch_object( $requete0 ) )
{
    //LIBERER LE LIT TABLE LIT LE RENDRE A ZERO 
	$ANLIT=$result0->NLIT;
	$NLIT2="0";
	$per-> mysqlconnect();
	$sql = "UPDATE lit SET  idpt = '$NLIT2' WHERE idlit = '$ANLIT' " ;
	$requete = mysql_query($sql) or die( mysql_error() ) ;

	//MODIFIER LE N LIT TABLE TPAT 
	$NSERVICE=$_POST["NSERVICE"]; 
    $NNLIT=$_POST["NNLIT"];
	$per-> mysqlconnect();
	$sql2 = "UPDATE tpat SET  
	SERVICEHOSP   = '$NSERVICE ',
	NLIT          = '$NNLIT '
	WHERE IDP     = '$IDP' " ;
	$requete2 = mysql_query($sql2) or die( mysql_error() ) ;
	
	//REAFECTER LE NOUVEAU NLIT TABLE LIT
	$per-> mysqlconnect();
	$sql3 = "UPDATE lit SET  idpt = '$IDP' WHERE idlit = '$NNLIT' " ;
	$requete3 = mysql_query($sql3) or die( mysql_error() ) ;
	
	//INSERER DANS LA TABLE DES CHANGEMENT DE SERVICE
	$per-> mysqlconnect();  
	$DATE=$_POST["DATE"]; 
    $HEUR=$_POST["HEUR"]; 
	$USER=$_SESSION["USER"];
	$sql4 = "INSERT INTO tchaserpat (datechaserpat,heurechaserpat,idp,schaserpat,nlitchaserpat,medecin ) VALUES ('".$DATE."','".$HEUR."','".$IDP."','".$NSERVICE."','".$NNLIT."','".$USER."')";
	$requete4 = @mysql_query($sql4) ;
	if($requete4)
	{
	header("Location:index.php?uc=LISTMHOSP") ;
	}
	else
	{
	header("Location:index.php?uc=SMH") ; 
	}


}
?>  