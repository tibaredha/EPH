<?php

//**********************************************************//
$ORIGINE=$_POST["ORIGINE"];            //
$DATE=$_POST["DATE"];                  //
$HEURE=$_POST["HEURE"];                //
$NOM=$_POST["NOM"];                    //
$PRENOM=$_POST["PRENOM"];              //
$SEXE=$_POST["SEXE"];                  //                 
$DATENAISSANCE=$_POST["DATENAISSANCE"];//
$FILS=$_POST["FILS"];                  //
$ETDE=$_POST["ETDE"];                  //
$COMMUNE=$_POST["COMMUNENFR"];            //
$WILAYA=$_POST["WILAYANFR"];              // 
$COMMUNER=$_POST["COMMUNER"];          //
$WILAYAR=$_POST["WILAYAR"];            //
$ADRESSE=$_POST["ADRESSE"];            //
$DGC=$_POST["DGC"];                    // diagnostic          
$SERVICE=$_POST["SERVICE"]; 
$NLIT=$_POST["NLIT"];                 // 
//**********************************************************//
$MEDECIN=$_SESSION["USER"] ;           //
//constitution du IDPAT
$NOM1   = substr($_POST["NOM"],0,2) ;
$PRENOM1= substr($_POST["PRENOM"],0,2);
$J      = substr($_POST["DATENAISSANCE"],8,2);
$M      = substr($_POST["DATENAISSANCE"],5,2);
$A      = substr($_POST["DATENAISSANCE"],0,4);
$DNS    =  $J.$M.$A ;
$IDPAT = $DNS.$NOM1.$PRENOM1.$SEXE ;    //
//CONSTRURE LAGE DU PATIENT
$x=substr(date('d/m/Y'),6,4);
$Y=substr($_POST["DATENAISSANCE"],0,4);
$AGE=$x-$Y;                             //
//**********************************************************//
switch($_POST["HOS"])  
{
    case 'OUI':
		{
		$per-> mysqlconnect();  
		$sql = "SELECT * FROM lit where  idlit=$NLIT  and  idpt='0'  "; // probleme non resolu verifier si le lit est libre pour autoriser l  insertion si non redirection  
		$requete = mysql_query( $sql ) ; 
		if( $result = mysql_fetch_object( $requete ) )
		{
			$sql = "INSERT INTO tpat(SERVICEHOSP,PRATICIEN,ORIGINE,DGC,FILS,ETDE,idpat,nom,prenom,sexe,datenaissance,age,wilaya,commune,wilayar,communer,adresse,DATE,HEURE,NLIT ) VALUES ('".$SERVICE."','".$MEDECIN."','".$ORIGINE."','".$DGC."','".$FILS."','".$ETDE."','".$IDPAT."','".$NOM."','".$PRENOM."','".$SEXE."','".$DATENAISSANCE."','".$AGE."','".$WILAYA."','".$COMMUNE."','".$WILAYAR."','".$COMMUNER."','".$ADRESSE."','".$DATE."','".$HEURE."','".$NLIT."')";
			$requete = @mysql_query($sql) or die($sql."<br>".mysql_error());
			if($_POST["SERVICE"] !== "0" )
			{
				//MALADE HOSPITALISE
				header("Location: ./1pat/ADM.php?NOM=$NOM&PRENOM=$PRENOM&SEXE=$SEXE&medecin=$MEDECIN&DATENAISSANCE=$DATENAISSANCE&SERVICE=$SERVICE&dgc=$DGC&NLIT=$NLIT&WILAYAR=$WILAYAR&COMMUNER=$COMMUNER&ADRESSE=$ADRESSE");
			}
			else
			{
				//MALADE NON HOSPITALISE
				header("Location: index.php?uc=NPAT") ;
			}
		}
		else
		{
			header("Location: index.php?uc=NPAT") ;
		}	
		break;
		}
	case 'NON':
		{
		$per-> mysqlconnect();  
		$SERVICEHOS=0;
		$sql = "INSERT INTO tpat(SERVICEHOSP,PRATICIEN,ORIGINE,DGC,FILS,ETDE,idpat,nom,prenom,sexe,datenaissance,age,wilaya,commune,wilayar,communer,adresse,DATE,HEURE,NLIT ) VALUES ('".$SERVICEHOS."','".$MEDECIN."','".$ORIGINE."','".$DGC."','".$FILS."','".$ETDE."','".$IDPAT."','".$NOM."','".$PRENOM."','".$SEXE."','".$DATENAISSANCE."','".$AGE."','".$WILAYA."','".$COMMUNE."','".$WILAYAR."','".$COMMUNER."','".$ADRESSE."','".$DATE."','".$HEURE."','".$NLIT."')";
		$requete = @mysql_query($sql) or die($sql."<br>".mysql_error());
		header("Location: index.php?uc=NPAT") ;
		break;
		}

		
}

?>


