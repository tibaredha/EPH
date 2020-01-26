<?php               
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
$CODGC=$_POST["CODGC"];                      
$NLIT=$_POST["NLIT"];                    
$DATEDIALYSE=$_POST["DATEDIALYSE"];      
$GROUPAGE=$_POST["GROUPAGE"];             
$rhesus=$_POST["rhesus"];                 
$HVB=$_POST["HVB"];                       
$HVC=$_POST["HVC"];                       
$HIV=$_POST["HIV"];                       
$TPHA=$_POST["TPHA"];                     
$MEDECIN=$_SESSION["USER"] ;  
$AGE1SEANCE=substr($_POST["DATEDIALYSE"],0,4)-substr($_POST["DATENAISSANCE"],0,4);             
//**********************************************************//
$per-> mysqlconnect();  
$sql = "INSERT INTO HEMO
(AGE1SEANCE,NOM,PRENOM,SEX,DATENAISSA,WILAYA,COMMUNE,WILAYAR,COMMUNER,ADRESSE,GRABO,GRRH,HIV,HVB,HVC,SYPHI,CAUSEMALAD,DATE1ERSEA,NLIT,MEDECIN,FILS,ETDE,POIDS,CODGC) 
VALUES 
('".$AGE1SEANCE."','".$NOM."','".$PRENOM."','".$SEXE."','".$DATENAISSANCE."','".$WILAYANFR."','".$COMMUNENFR."','".$WILAYAR."','".$COMMUNER."','".$ADRESSE."','".$GROUPAGE."','".$rhesus."','".$HIV."','".$HVB."','".$HVC."','".$TPHA."','".$DGC."','".$DATEDIALYSE."','".$NLIT."','".$MEDECIN."','".$FILS."','".$ETDE."','".$POIDS."','".$CODGC."')";
$requete = @mysql_query($sql) or die($sql."<br>".mysql_error());
header("Location: index.php?uc=LISTMHEMO") ;
			
		
	

?>


