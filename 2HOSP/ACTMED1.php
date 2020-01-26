<?php
$IDP=$_POST["idp"];
$DATEHOSPI=$_POST["DATEHOSPI"];  
// $ASERVICE=$_POST["ASERVICE"]; 

//****************************//

$per-> mysqlconnect();
$sql0 = "SELECT * FROM tpat WHERE idp = ".$IDP ;
$requete0 = mysql_query( $sql0 ) ; 
if( $result0 = mysql_fetch_object( $requete0 ) )
{
    
	
	//INSERER DANS LA TABLE DES ACTE MEDICAUX
	// $per-> mysqlconnect();  
	// $DATE=$_POST["DATE"]; 
    // $HEUR=$_POST["HEUR"]; 
	// $USER=$_SESSION["USER"];
	// $sql4 = "INSERT INTO tchaserpat (datechaserpat,heurechaserpat,idp,schaserpat,nlitchaserpat,medecin ) VALUES ('".$DATE."','".$HEUR."','".$IDP."','".$NSERVICE."','".$NNLIT."','".$USER."')";
	// $requete4 = @mysql_query($sql4) ;
	// if($requete4)
	// {
	// header("Location:index.php?uc=LISTMHOSP") ;
	// }
	// else
	// {
	// header("Location:index.php?uc=SMH") ; 
	// }


}
?>  