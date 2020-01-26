<?php
// 
$WILAYADEDE="DJELFA";
$COMMUNEDED="AINOUSSERA";
$HEUREDECES=$_POST["HEUREDECES"]; 
$NOM=$_POST["NOM"];       
$PRENOM=$_POST["PRENOM"];       
$SEXE=$_POST["SEXE"];       
$FILS=$_POST["FILS"];  
$ETDE=$_POST["ETDE"];   
$CHAPITRE=$_POST["CHAPITRE"];  
$CATEGORIECIM=$_POST["CATEGORIECIM"]; 


//les wilaya et communes doivent etre en string  a revoire ???????????????? 
$WILAYANFR=$_POST["WILAYANFR"];      
$COMMUNENFR=$_POST["COMMUNENFR"];       
$WILAYAR=$_POST["WILAYAR"];          
$COMMUNER=$_POST["COMMUNER"];       



$ADRESSE=$_POST["ADRESSE"]; 
$SERVICE=$_POST["SERVICE"]; 
$DGC=$_POST["DGC"];           
$MEDECIN=$_POST["MEDECIN"];   
$MATRICULE=$_POST["MATRICULE"]; 
//*****************************************************///
$DATENAISSANCE=$_POST["DATENAISSANCE"];  
$DATEHOSPI=$_POST["DATEHOSPI"]; 
$DATEDECES=$_POST["DATEDECES"];     

//age en jours  
$AGEJ0 = strtotime($_POST["DATEDECES"])- strtotime($_POST["DATENAISSANCE"]);
$AGEJ  = round($AGEJ1=(($AGEJ0/60)/60)/24,0); 
//age en ANNEES
$AGEA  = substr($_POST["DATEDECES"],0,4)-substr($_POST["DATENAISSANCE"],0,4);


// AGE POUR AFFICHAGE 
if ($AGEJ >= 366) 
{
$AGE = substr($_POST["DATEDECES"],0,4)-substr($_POST["DATENAISSANCE"],0,4)."A";
}
else 
{
$AGE = round($AGEJ1=(($AGEJ0/60)/60)/24,0)."J";
}
//durée hospitalisation en jours
$DUREEHOSPI0 = strtotime($_POST["DATEDECES"])-strtotime($_POST["DATEHOSPI"]);
$DUREEHOSPI=round($DUREEHOSPI1=(($DUREEHOSPI0/60)/60)/24,0); //age en jours 
$per-> mysqlconnect(); 
$sql = "INSERT INTO deces (AGEJ,AGEA,MAT,CHAPITRE,CATEGORIECIM,AGE,WILAYADEDE,COMMUNEDED,DATEDUDECE,HEURE,NOM,PRENOM,SEX,FILS,ETDE,DATENAISSA,WILAYANFR,LIEUNAISSA,WILAYAR,COMMUNEDER,SERVICEDHO,DATEHOSPIT,DUREEHOSPI,CAUSEDUDEC,NOMDUMEDEC) 
                   VALUES ('".$AGEJ."','".$AGEA."','".$MATRICULE."','".$CHAPITRE."','".$CATEGORIECIM."','".$AGE."','".$WILAYADEDE."','".$COMMUNEDED."','".$DATEDECES."','".$HEUREDECES."','".$NOM."','".$PRENOM."','".$SEXE."','".$FILS."','".$ETDE."','".$DATENAISSANCE."','".$WILAYANFR."','".$COMMUNENFR."','".$WILAYAR."','".$COMMUNER."','".$SERVICE."','".$DATEHOSPI."','".$DUREEHOSPI."','".$DGC."','".$MEDECIN."')";				                                                                             
$requete = mysql_query($sql) or die( mysql_error() ) ;
if($requete)
{
header("Location: index.php?uc=DECES1") ;
}
else
{
header("Location: index.php?uc=DECES1") ;
}










?>


