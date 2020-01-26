<?php 
      

$WILAYADEDE="DJELFA";
$COMMUNEDED="AINOUSSERA";
$DATEDECES=$_POST["DATEDECES"];       
$HEUREDECES=$_POST["HEUREDECES"]; 

$NOM=$_POST["NOM"];       
$PRENOM=$_POST["PRENOM"];       
$SEXE=$_POST["SEXE"];       
$FILS=$_POST["FILS"];  
$ETDE=$_POST["ETDE"];   
$DATENAISSANCE=$_POST["DATENAISSANCE"];       
$AGE=$_POST["AGE"];       
$WILAYANFR=$_POST["WILAYANFR"];      
$COMMUNENFR=$_POST["COMMUNENFR"];       
$WILAYAR=$_POST["WILAYAR"];          
$COMMUNER=$_POST["COMMUNER"];       
$ADRESSE=$_POST["ADRESSE"]; 
$SERVICE=$_POST["SERVICE"];
$DATEHOSPI=$_POST["DATEHOSPI"];       
$DUREEHOSPI=$_POST["DUREEHOSPI"];  
$DGC=$_POST["DGC"];           
$MEDECIN=$_POST["MEDECIN"];   
$idp=$_POST["idp"];   
$per-> mysqlconnect();            
$sql = "UPDATE deces SET
    WILAYADEDE       = '$WILAYADEDE' ,
	COMMUNEDED       = '$COMMUNEDED' ,
	DATEDUDECE       = '$DATEDECES' ,
	HEURE            = '$HEUREDECES' ,
	NOM              = '$NOM' ,
	PRENOM           = '$PRENOM' ,
	SEX              = '$SEXE' ,
	FILS             = '$FILS',
	ETDE             = '$ETDE',
	DATENAISSA       = '$DATENAISSANCE' ,
	AGEA             = '$AGE' ,
	WILAYANFR        = '$WILAYANFR',
	LIEUNAISSA       = '$COMMUNENFR' ,
	WILAYAR          = '$WILAYAR',
	COMMUNEDER       = '$COMMUNER',
	SERVICEDHO       = '$SERVICE' ,
	DATEHOSPIT       = '$DATEHOSPI' ,
	DUREEHOSPI       = '$DUREEHOSPI' ,
	CAUSEDUDEC       = '$DGC' ,
	NOMDUMEDEC       = '$MEDECIN'
	WHERE IDD        = '$idp'
	" ; 
$requete = mysql_query($sql) or die( mysql_error() ) ;
if($requete)
{
header("Location: index.php?uc=LISTDECES") ;
}
else
{
header("Location: index.php?uc=LISTDECES") ;
}

  





?>


