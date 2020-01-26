<?php
function nbrtostring($db_name,$tb_name,$colonename,$colonevalue,$resultatstring) 
	{
	$db_host="localhost"; 
    $db_user="root";
    $db_pass="";
    $cnx = mysql_connect($db_host,$db_user,$db_pass)or die ('I cannot connect to the database because: ' . mysql_error());
    $db  = mysql_select_db($db_name,$cnx) ;
    mysql_query("SET NAMES 'UTF8' ");
    $result = mysql_query("SELECT * FROM $tb_name where $colonename=$colonevalue" );
    $row=mysql_fetch_object($result);
	$resultat=$row->$resultatstring;
	return $resultat;
	}
echo "<li><a href=\"index.php?uc=accueil\" class=\"parent\"><span>Menu</span></a>"; 
echo "<ul>"; 
//********************************************************************************//
// echo "<li><a href=\"#\" class=\"parent\"><span>GRH</span></a>"; 
    // echo "<ul>";
	        //********************************************************************//text_bottom.png
			 echo " <li><a href=\"#\" class=\"parent\"><span>Mouvement</span></a>";
						echo "<ul>";
						echo " <li><a href=\"index.php?uc=PVINS0\"><span><img src=\"./IMAGES/"."text_bottom.png"."\"  alt=\"1\" />PV instalation</span></a></li>";
						echo " <li><a href=\"index.php?uc=a\"><span><img src=\"./IMAGES/"."add_user.png"."\"  alt=\"1\" />Nouveau per</span></a></li>";
						echo " <li><a href=\"index.php?uc=searchgrh\"><span><img src=\"./IMAGES/"."search.png"."\"  alt=\"1\" />Cherche per</span></a></li>";
						echo " <li><a href=\"index.php?uc=searchgrhjs\"><span><img src=\"./IMAGES/"."search.png"."\"  alt=\"1\" />AUTO Cherche per</span></a></li>";
						echo " <li><a href=\"index.php?uc=LGRHP\"><span><img src=\"./IMAGES/"."user_mgr.png"."\"  alt=\"1\" />Per present</span></a></li>";
						echo " <li><a href=\"index.php?uc=LGRHD\"><span><img src=\"./IMAGES/"."user_mgr.png"."\"  alt=\"1\" />Per depart</span></a></li>";
						echo " <li><a href=\"./GRH/LISTGRH1.php\"><span><img src=\"./IMAGES/"."user_mgr.png"."\"  alt=\"1\" />grh wilaya commune</span></a></li>";
						
						echo "</ul>";
			 echo " </li>";	
			 //********************************************************************//
			 echo " <li><a href=\"#\" class=\"parent\"><span>Service</span></a>";
						echo "<ul>";
						echo " <li><a href=\"index.php?uc=REPGRH\"><span>repartition /service </span></a></li>";
						echo " <li><a href=\"index.php?uc=POINTAGE\"><span>pointage</span></a></li>";
						echo " <li><a href=\"index.php?uc=REGTRANSFER\"><span>REGTRANSFER</span></a></li>";
						echo " <li><a href=\"./GRH/LISTGRHS.php\"><span>per par service pdf </span></a></li>";
						
						
						echo "</ul>";
			 echo " </li>";	
             //********************************************************************//
			  echo " <li><a href=\"#\" class=\"parent\"><span>Conges</span></a>";
						echo "<ul>";
						echo " <li><a href=\"index.php?uc=REGCONG\"><span>REGCONG </span></a></li>";
						echo " <li><a href=\"index.php?uc=ENTREECONG\"><span>ENTREECONG</span></a></li>";
						echo " <li><a href=\"index.php?uc=RELIQUAT\"><span>RELIQUAT</span></a></li>";
						echo " <li><a href=\"./GRH/RELIQUATPDF.php\"><span>RELIQUAT pdf</span></a></li>";
						echo " <li><a href=\"index.php?uc=30\"><span>30J conge annuel</span></a></li>";
						echo " <li><a href=\"index.php?uc=00\"><span>REMISE a 00j</span></a></li>";
						echo " <li><a href=\"index.php?uc=CONGEPARPER\"><span>NBR CONGE PAR PER</span></a></li>";
						
						
						echo "</ul>";
			 echo " </li>";
			 //********************************************************************//
			  echo " <li><a href=\"#\" class=\"parent\"><span>Garde</span></a>";
						echo "<ul>";
						echo " <li><a href=\"index.php?uc=LISTGARDE\"><span>LISTGARDE</span></a></li>";
						echo " <li><a href=\"index.php?uc=GARDES\"><span>GARDES</span></a></li>";
						echo " <li><a href=\"index.php?uc=\"><span></span></a></li>";
						echo " <li><a href=\"index.php?uc=\"><span></span></a></li>";
						echo " <li><a href=\"index.php?uc=\"><span></span></a></li>";
						
						
						echo "</ul>";
			 echo " </li>";	
			 //********************************************************************//
			  echo " <li><a href=\"#\" class=\"parent\"><span>Gestion</span></a>";
						echo "<ul>";
						echo " <li><a href=\"./EFF/EFF.php\"><span>effectif</span></a></li>";
						echo " <li><a href=\"./EFF/EFFFP.php\"><span>effectif</span></a></li>";
						echo " <li><a href=\"index.php?uc=\"><span></span></a></li>";
						echo " <li><a href=\"index.php?uc=\"><span></span></a></li>";
						echo " <li><a href=\"index.php?uc=\"><span></span></a></li>";
						
						
						echo "</ul>";
			 echo " </li>";
            //********************************************************************//
			  echo " <li><a href=\"#\" class=\"parent\"><span>Avancement</span></a>";
						echo "<ul>";
						echo " <li><a href=\"./7AVAN/NOTATIONVIDE.php\"><span>Notation vierge</span></a></li>";
						echo " <li><a href=\"./7AVAN/NOTATION.php\"><span>Notation GRH</span></a></li>";
						echo " <li><a href=\"./7AVAN/TABLEAU.php\"><span>Tableau d avancement</span></a></li>";
						echo " <li><a href=\"index.php?uc=PREVISION\"><span>Tableau prevision</span></a></li>";
						echo " <li><a href=\"index.php?uc=CATEECHE\"><span>Tableau cat ech</span></a></li>";
						echo "</ul>";
			 echo " </li>";
			 echo " <li><a href=\"#\" class=\"parent\"><span>Poste superieure</span></a>";
						echo "<ul>";
						echo " <li><a href=\"index.php?uc=POSTESUPGRH\"><span>Poste superieure</span></a></li>";
						echo "</ul>";
			 echo " </li>";
			 //********************************************************************//
			  
			  echo " <li><a href=\"#\" class=\"parent\"><span>paie</span></a>";
						echo "<ul>";
						echo " <li><a href=\"index.php?uc=PAIE2\"><span>paie</span></a></li>";
						echo " <li><a href=\"index.php?uc=SAA\"><span>SAA</span></a></li>";
						
						echo " <li><a href=\"#\" class=\"parent\"><span>ETAT MATRICE MED</span></a>";
						echo "<ul>";
						echo " <li><a href=\"index.php?uc=ETATMAT1\"><span>ETATMAT MED N°1</span></a></li>";
						echo " <li><a href=\"index.php?uc=ETATMAT2\"><span>ETATMAT MED N°2</span></a></li>";
						echo " <li><a href=\"index.php?uc=ETATMAT3\"><span>ETATMAT MED N°3</span></a></li>";
						echo " <li><a href=\"index.php?uc=ETATMAT4\"><span>ETATMAT MED N°4</span></a></li>";
						echo " <li><a href=\"./PAIE/TABLEAU.php\"><span>ETAT MATRICE</span></a></li>";
						echo "</ul>";
						echo " </li>";
						
						echo " <li><a href=\"#\" class=\"parent\"><span>ETAT MATRICE P/MED</span></a>";
						echo "<ul>";
						echo " <li><a href=\"index.php?uc=ETATMATPM1\"><span>ETATMAT P/MED N°1</span></a></li>";
						echo " <li><a href=\"index.php?uc=ETATMATPM2\"><span>ETATMAT P/MED N°2</span></a></li>";
						echo " <li><a href=\"index.php?uc=ETATMATPM3\"><span>ETATMAT P/MED N°3</span></a></li>";
						echo " <li><a href=\"index.php?uc=ETATMATPM4\"><span>ETATMAT P/MED N°4</span></a></li>";
						echo " <li><a href=\"./PAIE/TABLEAU.php\"><span>ETAT MATRICE</span></a></li>";
						echo "</ul>";
						echo " </li>";
						
						
						
						echo "</ul>";
			 echo " </li>";
			   echo " <li><a href=\"#\" class=\"parent\"><span>Personnel Partant</span></a>";
						echo "<ul>";
						echo " <li><a href=\"./GRH/LISTGRHP.php\"><span>Personnel PDF Partant</span></a></li>";
						echo " <li><a href=\"./GRH/LISTGRHPD.php\"><span>Personnel demmission</span></a></li>";
						echo " <li><a href=\"./GRH/LISTGRHPM.php\"><span>Personnel mutation</span></a></li>";
						echo " <li><a href=\"./GRH/LISTGRHPR.php\"><span>Personnel retraite</span></a></li>";
						echo " <li><a href=\"./GRH/LISTGRHPMORT.php\"><span>Personnel deces</span></a></li>";
						echo "</ul>";
			 echo " </li>";
			
             //********************************************************************//
			 echo " <li><a href=\"#\"><span>***</span></a></li>";	 
           			 
	  //echo "</ul>";
// echo "</li>";	 
//********************************************************************************//
echo "</ul>"; 
echo "</li>";
//***********************************************************************************//
echo "<li><a href=\"index.php?uc=accueil\" class=\"parent\"><span>Outils</span></a>"; 
echo "<ul>"; 
//********************************************************************************//
echo "<li><a href=\"#\" class=\"parent\"><span>Niveau d'etude</span></a>"; 
     echo "<ul>";
	        //********************************************************************//
			 echo " <li><a href=\"#\" class=\"parent\"><span>Niveau d'etude</span></a>";
						echo "<ul>";
						echo " <li><a href=\"index.php?uc=ANIVEAUETUDE\"><span>Ajout Niveaus d'etudes</span></a></li>";
						echo " <li><a href=\"index.php?uc=NIVEAUETUDE\"><span>liste Niveaus d'etudes</span></a></li>";
					
						
						echo "</ul>";
			 echo " </li>";	
			 
            
             //********************************************************************//
			 echo " <li><a href=\"#\"><span>***</span></a></li>";	 
           			 
	  echo "</ul>";
echo "</li>";
echo "<li><a href=\"#\" class=\"parent\"><span>Grade</span></a>"; 
     echo "<ul>";
	        //********************************************************************//
			 echo " <li><a href=\"#\" class=\"parent\"><span>grade</span></a>";
						echo "<ul>";
						echo " <li><a href=\"index.php?uc=\"><span>Ajout grade</span></a></li>";
						echo " <li><a href=\"index.php?uc=GRADE\"><span>liste des grades</span></a></li>";
						echo " <li><a href=\"index.php?uc=REPGRADE\"><span>REP GRADE</span></a></li>";
						
						
						echo "</ul>";
			 echo " </li>";	
			 
            
             //********************************************************************//
			 echo " <li><a href=\"#\"><span>***</span></a></li>";	 
           			 
	  echo "</ul>";
echo "</li>";
echo "<li><a href=\"#\" class=\"parent\"><span>Specialite</span></a>"; 
     echo "<ul>";
	        //********************************************************************//
			 echo " <li><a href=\"#\" class=\"parent\"><span>Specialite</span></a>";
						echo "<ul>";
						echo " <li><a href=\"index.php?uc=ASPECIALITE\"><span>ASPECIALITE</span></a></li>";
						echo " <li><a href=\"index.php?uc=SPECIALITE\"><span>SPECIALITE</span></a></li>";
						echo " <li><a href=\"index.php?uc=SPECIALISTE\"><span>MODIFIER SPECIALITE </span></a></li>";
						
						echo "</ul>";
			 echo " </li>";	
			 
            
             //********************************************************************//
			 echo " <li><a href=\"#\"><span>***</span></a></li>";	 
           			 
	  echo "</ul>";
echo "</li>";

echo "<li><a href=\"#\" class=\"parent\"><span>SERVICE</span></a>"; 
     echo "<ul>";
	        //********************************************************************//
			 echo " <li><a href=\"#\" class=\"parent\"><span>SERVICE</span></a>";
						echo "<ul>";
						echo " <li><a href=\"index.php?uc=\"><span>ASERVICE</span></a></li>";
						echo " <li><a href=\"index.php?uc=SERVICE\"><span>LIST SERVICE</span></a></li>";
						
						
						echo "</ul>";
			 echo " </li>";	
			 
            
             //********************************************************************//
			 echo " <li><a href=\"#\"><span>***</span></a></li>";	 
           			 
	  echo "</ul>";
echo "</li>";


echo "<li><a href=\"#\" class=\"parent\"><span>Poste superieure</span></a>"; 
     echo "<ul>";
	        //********************************************************************//
			 echo " <li><a href=\"#\" class=\"parent\"><span>Poste superieure</span></a>";
						echo "<ul>";
						echo " <li><a href=\"index.php?uc=\"><span>Aposte superieure</span></a></li>";
						echo " <li><a href=\"index.php?uc=POSTESUP\"><span>poste supeerieur</span></a></li>";
						
						
						echo "</ul>";
			 echo " </li>";	
			 
            
             //********************************************************************//
			 echo " <li><a href=\"#\"><span>***</span></a></li>";	 
           			 
	  echo "</ul>";
echo "</li>";
echo "<li><a href=\"#\" class=\"parent\"><span>etablissement</span></a>"; 
     echo "<ul>";
	        //********************************************************************//
			 echo " <li><a href=\"#\" class=\"parent\"><span>etablissement</span></a>";
						echo "<ul>";
						echo " <li><a href=\"index.php?uc=AETABLISSEMENT\"><span>Aetablissement</span></a></li>";
						echo " <li><a href=\"index.php?uc=ETABLISSEMENT\"><span>etablissement</span></a></li>";
						
						
						echo "</ul>";
			 echo " </li>";	
			 
            
             //********************************************************************//
			 echo " <li><a href=\"#\"><span>***</span></a></li>";	 
           			 
	  echo "</ul>";
echo "</li>";

echo "<li><a href=\"#\" class=\"parent\"><span>wilaya commune</span></a>"; 
     echo "<ul>";
	        //********************************************************************//
			 echo " <li><a href=\"#\" class=\"parent\"><span>wilaya</span></a>";
						echo "<ul>";
						echo " <li><a href=\"index.php?uc=aWC\"><span>Awilaya</span></a></li>";
						echo " <li><a href=\"index.php?uc=WC\"><span>wilaya</span></a></li>";
						
						
						echo "</ul>";
			 echo " </li>";	
			 
            
             //********************************************************************//
			 echo " <li><a href=\"#\"><span>***</span></a></li>";	 
           			 
	  echo "</ul>";
echo "</li>";
echo "<li><a href=\"#\" class=\"parent\"><span>Comptes Utilisateurs</span></a>"; 
						echo "<ul>";
						echo " <li><a href=\"index.php?uc=MBRINS\"><span>membres inscrits</span></a></li>";
						echo " <li><a href=\"index.php?uc=CONF\"><span>Modifier Compte</span></a></li>";
						echo " <li><a href=\"index.php?uc=UOL\"><span>UOL</span></a></li>";
						echo "</ul>";
						
			 
echo "</li>";

//********************************************************************************//
echo " <li><a href=\"#\"><span>Statistique site </span></a>";
echo "<ul>";
						echo " <li><a href=\"index.php?uc=SITE1\"><span>Statistique site</span></a></li>";
						
echo "</ul>";
echo "</li>";	 	 
//********************************************************************************//
echo "</ul>"; 
echo "</li>";
echo "<li><a href=\"\" class=\"parent\"><span>"." La Date Du Jours  :".date("d-m-Y")."</span></a></li>"; 
echo "<li><a href=\"\" class=\"parent\"><span>"." Vous etes Connecté  :<<".$_SESSION["USER"].">>"."</span></a></li>"; 
//$W=nbrtostring("gpts2012","wrs","IDWIL",$_SESSION["WILAYA"],"WILAYAS");
//echo "<li><a href=\"\" class=\"parent\"><span>"." WILAYA:  :<<  ".$W."   >>"."</span></a></li>"; 
//$C=nbrtostring("gpts2012","COM","IDCOM",$_SESSION["COMMUNE"],"COMMUNE");
//echo "<li><a href=\"\" class=\"parent\"><span>"." COMMUNE:  :<<  ".$C."   >>"."</span></a></li>"; 
echo "<li><a href=\"\" class=\"parent\"><span>"." SERVICE:  :<<  ".$_SESSION["SERVICE"]."   >>"."</span></a></li>"; 
echo "<li><a href=\"index.php?uc=PAN\" class=\"parent\"><span>PAN</span></a></li>";
echo "<li><a href=\"index.php?uc=PAN1\" class=\"parent\"><span>PAN1</span></a></li>";
echo "<li><a href=\"index.php?uc=calendrier\" class=\"parent\"><span>agenda</span></a></li>";  
echo "<li><a href=\"index.php?uc=DECONNECTION\" class=\"parent\"><span>Deconnection</span></a></li>"; 
?>	

