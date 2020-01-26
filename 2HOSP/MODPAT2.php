
//******************************************************************************************************//
$DATE=$_POST["DATE"]; 
$HEURE=$_POST["HEURE"];
$NOM=$_POST["NOM"];             
$PRENOM=$_POST["PRENOM"];        
$SEXE=$_POST["SEXE"];                  
$DATENAISSANCE=$_POST["DATENAISSANCE"];
$FILS=$_POST["FILS"];
$ETDE=$_POST["ETDE"];
$WILAYA=$_POST["WILAYA"];             
$COMMUNE=$_POST["COMMUNE"]; 
$WILAYAR=$_POST["WILAYAR"];           
$COMMUNER=$_POST["COMMUNER"]; 
$ADRESSE=$_POST["ADRESSE"]; 
$TELEPHONE=$_POST["TELEPHONE"];        
$dateeuro=date('d/m/Y');                 
//******************************************************************************************************//
  $db_host="localhost";
  $db_name="PAT"; 
  $db_user="root";
  $db_pass="";
  //la connection a la base de donnes 
  $cnx = mysql_connect($db_host,$db_user,$db_pass)or die ('I cannot connect to the database because: ' . mysql_error());
  //sélection de la base de données
  $db  = mysql_select_db($db_name,$cnx) ;
//******************************************************************************************************//  
//constitution du IDPAT
$NOM1   = substr($_POST["NOM"],0,2) ;
$PRENOM1= substr($_POST["PRENOM"],0,2);
$J      = substr($_POST["DATENAISSANCE"],0,2);
$M      = substr($_POST["DATENAISSANCE"],3,2);
$A      = substr($_POST["DATENAISSANCE"],8,2);
$DNS    =  $J.$M.$A ;
$IDPAT = $DNS.$NOM1.$PRENOM1.$SEXE ;  
//CONSTRURE LAGE DU PATIENT
$x=substr($dateeuro,6,4);
$Y=substr($_POST["DATENAISSANCE"],6,4);
$AGE=$x-$Y;
//requette de recherche si un idrec existe 
  $IDRECmg ;
  $sql = "SELECT IDPAT FROM TPAT WHERE  IDPAT = '".$IDPAT."' "	;
  $requete = @mysql_query($sql, $cnx) or die($sql."<br>".mysql_error()) ;
  $result = mysql_fetch_object($requete) ;
  if(is_object($result))
  {
   $IDDNRmg =" NB:Le patient figure dans notre base de donnees *****" ;
  }  
  else
  {
   $IDDNRmg ="NB:Le patient ne figure pas dans notre base de donnees " ; 
  }

//******************************************************************************************************//

 //création de la requête SQL
  $sql = "INSERT INTO TPAT( FILS,ETDE,idpat,nom,prenom,sexe,datenaissance,age,wilaya,commune,wilayar,communer,adresse,telephone,DATE ) VALUES ('".$FILS."','".$ETDE."','".$IDPAT."','".$NOM."','".$PRENOM."','".$SEXE."','".$DATENAISSANCE."','".$AGE."','".$WILAYA."','".$COMMUNE."','".$WILAYAR."','".$COMMUNER."','".$ADRESSE."','".$TELEPHONE."','".$DATE."')";
  //exécution de la requête SQL
  $requete = @mysql_query($sql, $cnx) or die($sql."<br>".mysql_error());
//*****************************************************************************************************//
   ECHO $DATE.$HEURE.$NOM.$PRENOM.$SEXE.$IDDNRmg          ;

if($requete)
{
    //echo("La modification a ete correctement effectuee") ;
	header("Location: index.php?uc=NPAT") ;
}
else
{
    //echo("La modification à echouee") ;
	header("Location: index.php?uc=NPAT") ;
}





?>


