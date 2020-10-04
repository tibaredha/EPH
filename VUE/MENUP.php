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
echo "<li><a href=\"index.php?uc=accueil\" class=\"parent\"><span>Menu Patient</span></a>"; 
echo "<ul>"; 
//******************************************************************************************//
          if($_SESSION["SERVICE"] =='UMC')
		    {
			 echo " <li><a href=\"#\" class=\"parent\"><span>Hospitalisés</span></a>";
						echo "<ul>";
						echo " <li><a href=\"index.php?uc=NPAT\"><span>Nouvelle Admission</span></a></li>";
						echo " <li><a href=\"index.php?uc=LISTMHOSP\"><span>Malades Hospitalisés</span></a></li>";
						echo " <li><a href=\"index.php?uc=LISTMSORT\"><span>Malades Sortants</span></a></li>";
						echo "</ul>";
			 echo " </li>";	
			
			echo " <li><a href=\"#\" class=\"parent\"><span>Non Hospitalisés</span></a>";
						echo "<ul>";
						echo " <li><a href=\"index.php?uc=LISTMNHOSP\"><span>Malade Non Hospitalisés</span></a></li>";
						echo "</ul>";
			 echo " </li>";	
            }
			 
            if($_SESSION["SERVICE"] =='HEMODIALYSE')
		    {
			 echo "<li><a href=\"#\" class=\"parent\"><span>Hémodialysés</span></a>"; 
             echo "<ul>";
			 echo " <li><a href=\"#\" class=\"parent\"><span>suivi  Hémodialysés </span></a>";
						echo "<ul>";
						
						echo " <li><a href=\"index.php?uc=LISTMHEMO\"><span>Actuel   Hemodialysées</span></a></li>";
						echo " <li><a href=\"index.php?uc=NHEMO\">    <span>Nouveau  Hemodialysé</span></a></li>";
						echo " <li><a href=\"index.php?uc=HEMOSORT\"> <span>Ancien   Hemodialysées  </span></a></li>";
						echo " <li><a href=\"index.php?uc=AJOUS0\"> <span>Ajout Seance  </span></a></li>";
						
						echo "</ul>";
			 echo " </li>";	
			  echo " <li><a href=\"#\" class=\"parent\"><span>Laboratoire</span></a>";
						echo "<ul>";
						echo " <li><a href=\"index.php?uc=AJOULABO\"><span>Ajout Bilan</span></a></li>";
						echo " <li><a href=\"index.php?uc=LABORATOIRE\"><span>Activite Labo</span></a></li>";
						echo " <li><a href=\"./HEMO/HEMOPDF.php\"><span>Registre Bilan Malade</span></a></li>";
						echo " <li><a href=\"index.php?uc=LABOHEMO\"><span>Registre Hématologie</span></a></li>";
						echo " <li><a href=\"index.php?uc=LABOBIO\"><span>Registre Biochimie</span></a></li>";
						echo " <li><a href=\"index.php?uc=LABOSERO\"><span>Registre Sérologie</span></a></li>";
						echo "</ul>";
			 echo " </li>";
			echo " <li><a href=\"#\" class=\"parent\"><span>Administration</span></a>";
					   echo "<ul>";
					   echo " <li><a href=\"./HEMO/LISTHEMOPDF.php\"><span>HEMO GROUPAGE ABO</span></a></li>";
					   echo " <li><a href=\"./HEMO/LISTHEMODSS.php\"><span>HEMO DNS COMMUNE</span></a></li>";
					   echo " <li><a href=\"./HEMO/LISTHEMOPOIDPDF.php\"><span>HEMO POIDS SEC</span></a></li>";
					   echo " <li><a href=\"./HEMO/LISTHEMOLITPDF.php\"><span>HEMO LIT GENERATEUR </span></a></li>";
					   echo " <li><a href=\"./HEMO/LISTHEMONSSPDF.php\"><span>HEMO NSS  </span></a></li>";
					   
					   echo " <li><a href=\"./HEMO/LISTHEMODECES.php\"><span>HEMO DEPART DECES</span></a></li>";
					   echo " <li><a href=\"./HEMO/BILANHEMO.php\"><span>HEMO BILAN </span></a></li>";
					   echo " <li><a href=\"index.php?uc=REGSEANCE\"><span>HEMO SEANCE </span></a></li>";
					  
					   
					   
					   echo "</ul>";
			 echo " </li>";
            echo " <li><a href=\"#\" class=\"parent\"><span>Epidemiologie</span></a>";
					   echo "<ul>";
					 
					   echo " <li><a href=\"index.php?uc=BULTIN\"><span>Morbidité </span></a></li>";
					   echo " <li><a href=\"index.php?uc=BULTIN1\"><span>Mortalité </span></a></li>";
					   
					   echo "</ul>";
			 echo " </li>";				 
			 echo "</ul>";echo "</li>";
		     }
            if($_SESSION["USER"] =='SEBBAH')
		    {
			 echo "<li><a href=\"#\" class=\"parent\"><span>Décés Hospitaliers</span></a>"; 
             echo "<ul>";
			 echo " <li><a href=\"#\" class=\"parent\"><span>Décés Hospitaliers</span></a>";
						echo "<ul>";
						echo " <li><a href=\"index.php?uc=DECES1\"><span>Nouveau Décés</span></a></li>";
					    echo " <li><a href=\"index.php?uc=LISTDECES0\"><span>List Décés Hospitaliers</span></a></li>";
						echo " <li><a href=\"index.php?uc=DECESDATEBE\"><span>List deces-BE</span></a></li>";
						echo " <li><a href=\"index.php?uc=DECESDATEDSS\"><span>List deces-DSS</span></a></li>";
						echo "</ul>";
			 echo " </li>";	
			 echo " <li><a href=\"#\" class=\"parent\"><span>Evaluation Décés</span></a>";
						echo "<ul>";
						echo " <li><a href=\"index.php?uc=GRAPHEDECES\"><span>Graphe Décés AEC</span></a></li>";
						echo " <li><a href=\"index.php?uc=DECESANNEE\"><span>Graphe Décés AAC</span></a></li>";
					    // echo " <li><a href=\"index.php?uc=LISTDECES0\"><span>List Décés Hospitaliers</span></a></li>";
						// echo " <li><a href=\"./DECES/LISTDECESPDF.php\"><span>Décés Hospitaliers pdf</span></a></li>";
						// echo " <li><a href=\"./DECES/LISTDECESPDFBE.php\"><span>Décés Hospitaliers BE</span></a></li>";
						echo "</ul>";
			 echo " </li>";	
			 echo "</ul>";echo "</li>";
		     }
//********************************************************************************//
echo "</ul>"; 
echo "</li>";
echo "<li><a href=\"index.php?uc=accueil\" class=\"parent\"><span>Outils</span></a>"; 
echo "<ul>"; 
//******************************************************************************************//
echo "<li><a href=\"#\" class=\"parent\"><span>Classification </span></a>"; 
     echo "<ul>";
	 echo " <li><a href=\"index.php?uc=LCIM\"><span>CIM</span></a></li>";
	  echo " <li><a href=\"index.php?uc=LACTE\"><span>CCAM</span></a></li>";
	  echo " <li><a href=\"index.php?uc=LMED\"><span>MED</span></a></li>";
	  
	  
	  
	  
			 // echo " <li><a href=\"#\" class=\"parent\"><span>patient</span></a>";
						// echo "<ul>";
						
						
						
						// echo "</ul>";
			 // echo " </li>";	
			 
           			 
	  echo "</ul>";
echo "</li>";
echo "<li><a href=\"#\" class=\"parent\"><span>Bibliotheque </span></a>"; 
     echo "<ul>";
	
	   echo " <li><a href=\"./HEMO/IRA.pdf\"><span>IRA</span></a></li>";
	   echo " <li><a href=\"./HEMO/NDP.pdf\"><span>NPD</span></a></li>";
	  
	  
	  
			 // echo " <li><a href=\"#\" class=\"parent\"><span>patient</span></a>";
						// echo "<ul>";
						
						
						
						// echo "</ul>";
			 // echo " </li>";	
			 
           			 
	  echo "</ul>";
echo "</li>";
	 
echo "<li><a href=\"#\" class=\"parent\"><span>Compte Utilisateur </span></a>"; 
     echo "<ul>";
	 echo " <li><a href=\"index.php?uc=MODCOMPT\"><span>Modifier</span></a></li>";
	  // echo " <li><a href=\"index.php?uc=LACTE\"><span>CCAM</span></a></li>";
	  // echo " <li><a href=\"index.php?uc=LMED\"><span>MED</span></a></li>";
			 // echo " <li><a href=\"#\" class=\"parent\"><span>patient</span></a>";
						// echo "<ul>";
						// echo "</ul>";
			 // echo " </li>";	        			 
	  echo "</ul>";
echo "</li>";

echo "<li><a href=\"#\" class=\"parent\"><span>Rapports</span></a>"; 
     echo "<ul>";
	 echo " <li><a href=\"index.php?uc=PERGARD\"><span>Personnels  de garde</span></a></li>";
	 echo " <li><a href=\"index.php?uc=RAPGARD\"><span>Rapport de garde</span></a></li>";
	 // echo " <li><a href=\"index.php?uc=DEMPERS\"><span>Permutation de garde</span></a></li>";
	 
	 
	 // echo " <li><a href=\"index.php?uc=LISTGARDE\"><span>LISTGARDE</span></a></li>";
	 // echo " <li><a href=\"index.php?uc=GARDES\"><span>GARDES</span></a></li>";


	// echo " <li><a href=\"index.php?uc=LACTE\"><span>CCAM</span></a></li>";
	  // echo " <li><a href=\"index.php?uc=LMED\"><span>MED</span></a></li>";
			 // echo " <li><a href=\"#\" class=\"parent\"><span>patient</span></a>";
						// echo "<ul>";
						// echo "</ul>";
			 // echo " </li>";	        			 
	  echo "</ul>";
echo "</li>";




// echo "<li><a href=\"#\" class=\"parent\"><span>pharmacologie</span></a>"; 
     // echo "<ul>";
			 // echo " <li><a href=\"#\" class=\"parent\"><span>malade hospitalise</span></a>";
						// echo "<ul>";
						// echo " <li><a href=\"index.php?uc=LMED\"><span>MED</span></a></li>";
						
						// echo "</ul>";
			 // echo " </li>";	
			 
           			 
	  // echo "</ul>";
// echo "</li>";

// echo "<li><a href=\"#\" class=\"parent\"><span>lit d hospitalisation</span></a>"; 
     // echo "<ul>";
			 // echo " <li><a href=\"#\" class=\"parent\"><span>malade hospitalise</span></a>";
						// echo "<ul>";
						
						// echo " <li><a href=\"index.php?uc=LIT1\"><span>ajout lit</span></a></li>";
						// echo " <li><a href=\"index.php?uc=LLITS\"><span>LIST lit</span></a></li>";
						// echo " <li><a href=\"index.php?uc=SERVICE\"><span>LIST SERVICE</span></a></li>";
						// echo "</ul>";
			 // echo " </li>";	
			 
           			 
	  // echo "</ul>";
// echo "</li>";
// echo "<li><a href=\"#\" class=\"parent\"><span>MDO </span></a>"; 
     // echo "<ul>";
			 // echo " <li><a href=\"#\" class=\"parent\"><span>MDO</span></a>";
						// echo "<ul>";
						
						
						// echo " <li><a href=\"index.php?uc=MDO\"><span>MDO</span></a></li>";
					
						// echo "</ul>";
			 // echo " </li>";	
			 
           			 
	  // echo "</ul>";
// echo "</li>";
//********************************************************************************//
echo "</ul>"; 
echo "</li>";
echo "<li><a href=\"\" class=\"parent\"><span>"." La Date Du Jours  :".date("d-m-Y")."</span></a></li>"; 
echo "<li><a href=\"\" class=\"parent\"><span>"." Vous etes Connecté  :<< ".$_SESSION["USER"]." >>"."</span></a></li>"; 
// $W=nbrtostring("gpts2012","wrs","IDWIL",$_SESSION["WILAYA"],"WILAYAS");
// echo "<li><a href=\"\" class=\"parent\"><span>"." WILAYA:  :<<  ".$W."   >>"."</span></a></li>"; 
// $C=nbrtostring("gpts2012","COM","IDCOM",$_SESSION["COMMUNE"],"COMMUNE");
// echo "<li><a href=\"\" class=\"parent\"><span>"." COMMUNE:  :<<  ".$C."   >>"."</span></a></li>"; 
echo "<li><a href=\"\" class=\"parent\"><span>"." SERVICE:  :<<  ".$_SESSION["SERVICE"]."   >>"."</span></a></li>"; 
echo "<li><a href=\"index.php?uc=DECONNECTION\" class=\"parent\"><span>Deconnection</span></a></li>"; 
?>	



