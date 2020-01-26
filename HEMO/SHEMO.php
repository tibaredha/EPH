<?php
$DATE=$_POST["DATE"];
$HEUR=$_POST["HEUR"];
$idp=$_POST["idp"];
$TYPEDIA=$_POST["TYPEDIA"];
$NAPP=$_POST["NAPP"];
$ACCSANG=$_POST["ACCSANG"];
$IDE=$_POST["IDE"];
$POIDS=$_POST["POIDS"];
$POIDSD=$_POST["POIDSD"];
$SYSD=$_POST["SYSD"];
$DIAD=$_POST["DIAD"];
$TD=$_POST["TD"];
$POIDSF=$_POST["POIDSF"];
$SYSF=$_POST["SYSF"];
$DIAF=$_POST["DIAF"];
$TF=$_POST["TF"];
$HEUREDD=$_POST["HEUREDD"];
$HEUREFD=$_POST["HEUREFD"];
$MEDECIN=$_SESSION["USER"] ;
$per-> mysqlconnect();
$sql = "INSERT INTO HEMOSEANCE
(dateseance,heures,HEUREDD,HEUREFD,idp,TYPEDIA,NAPP,ACCSANG,IDE,POIDS,POIDSD,SYSD,DIAD,TD,POIDSF,SYSF,DIAF,TF,MEDECIN) 
VALUES 
('".$DATE."','".$HEUR."','".$HEUREDD."','".$HEUREFD."','".$idp."','".$TYPEDIA."','".$NAPP."','".$ACCSANG."','".$IDE."','".$POIDS."','".$POIDSD."','".$SYSD."','".$DIAD."','".$TD."','".$POIDSF."','".$SYSF."','".$DIAF."','".$TF."','".$MEDECIN."')";
$requete = @mysql_query($sql) or die($sql."<br>".mysql_error());
if($requete)
{
// header("Location: ./HEMO/FHEMO1.php?idp=".$idp) ;
header("Location: index.php?uc=LISTMHEMO") ;
}
else
{
header("Location: index.php?uc=LISTMHEMO") ;
}

?>
