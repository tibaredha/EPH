<?php
$idp = $_POST["idp"] ;
$DATE=$_POST["DATE"];                      
$HEURE=$_POST["HEURE"];                    
$POIDS=$_POST["POIDS"];  
$NOM=$_POST["NOM"]; 
$PRENOM=$_POST["PRENOM"]; 
$SEXE=$_POST["SEXE"]; 
$FILS=$_POST["FILS"];                       
$ETDE=$_POST["ETDE"];                      
$DATENAISSANCE=$_POST["DATENAISSANCE"]; 
$WILAYANFR=$_POST["WILAYANFR"]; 
$COMMUNENFR=$_POST["COMMUNENFR"]; 
$WILAYAR=$_POST["WILAYAR"]; 
$COMMUNER=$_POST["COMMUNER"]; 
$ADRESSE=$_POST["ADRESSE"]; 
$DGC=$_POST["DGC"];                       
$NLIT=$_POST["NLIT"];                    
$DATEDIALYSE=$_POST["DATEDIALYSE"];      
$GROUPAGE=$_POST["GROUPAGE"];             
$rhesus=$_POST["rhesus"];                 
$HVB=$_POST["HVB"];                       
$HVC=$_POST["HVC"];                       
$HIV=$_POST["HIV"];                       
$TPHA=$_POST["TPHA"];                     
$MEDECIN=$_SESSION["USER"] ; 
$per-> mysqlconnect();   
$sql = "UPDATE hemo SET 
NOM ='$NOM',
PRENOM ='$PRENOM',
SEX ='$SEXE',
DATENAISSA ='$DATENAISSANCE',
WILAYA ='$WILAYANFR',
COMMUNE ='$COMMUNENFR',
WILAYAR ='$WILAYAR',
COMMUNER ='$COMMUNER',
ADRESSE ='$ADRESSE',
GRABO ='$GROUPAGE',
GRRH ='$rhesus',
HIV ='$HIV',
HVB ='$HVB',
HVC ='$HVC',
SYPHI ='$TPHA',
CAUSEMALAD ='$DGC',
DATE1ERSEA ='$DATEDIALYSE',
NLIT ='$NLIT',
MEDECIN ='$MEDECIN',
FILS ='$FILS',
ETDE ='$ETDE',
POIDS ='$POIDS'
WHERE ID = '$idp'" ;
$requete = mysql_query($sql) or die( mysql_error() ) ;
if($requete)
{
header("Location: index.php?uc=LISTMHEMO") ;
}
else
{
header("Location: index.php?uc=LISTMHEMO") ;
}
?>

