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
echo "<li><a href=\"index.php?uc=accueil\" class=\"parent\"><span>Acceuil PTS</span></a>"; 
echo "<ul>"; 
//******************************************************************************************//
echo "<li><a href=\"#\" class=\"parent\"><span>Unite/Donneur</span></a>"; 
     echo "<ul>";
			 echo " <li><a href=\"#\" class=\"parent\"><span>Patient suivie</span></a>";
						echo "<ul>";
						       echo " <li><a href=\"index.php?uc=NHEMO\"><span> Nouveau  Hemodialyse</span></a></li>";
						
						
						
						echo "</ul>";
			 echo " </li>";	
			 
			
             
           			 
	  echo "</ul>";
echo "</li>";
echo "<li><a href=\"#\" class=\"parent\"><span>Unite/Preparation</span></a>"; 
     echo "<ul>";
			 echo " <li><a href=\"#\" class=\"parent\"><span>Patient suivie</span></a>";
						echo "<ul>";
						
						echo " <li><a href=\"index.php?uc=NHEMO\"><span> Nouveau  Hemodialyse</span></a></li>";
						echo " <li><a href=\"index.php?uc=LISTMHEMO\"><span>List Hemodialyse</span></a></li>";
						
						
						echo "</ul>";
			 echo " </li>";	
			 echo " <li><a href=\"#\" class=\"parent\"><span>Patient sortant</span></a>";
						echo "<ul>";
						echo " <li><a href=\"index.php?uc=HEMOSORT\"><span>LIST Hemodialyse SORT </span></a></li>";
						echo "</ul>";
			 echo " </li>";	
			
             
           			 
	  echo "</ul>";
echo "</li>";
echo "<li><a href=\"#\" class=\"parent\"><span>Unite/Qualification</span></a>"; 
     echo "<ul>";
			 echo " <li><a href=\"#\" class=\"parent\"><span>Patient suivie</span></a>";
						echo "<ul>";
						
						echo " <li><a href=\"index.php?uc=NHEMO\"><span> Nouveau  Hemodialyse</span></a></li>";
						echo " <li><a href=\"index.php?uc=LISTMHEMO\"><span>List Hemodialyse</span></a></li>";
						
						
						echo "</ul>";
			 echo " </li>";	
			 echo " <li><a href=\"#\" class=\"parent\"><span>Patient sortant</span></a>";
						echo "<ul>";
						echo " <li><a href=\"index.php?uc=HEMOSORT\"><span>LIST Hemodialyse SORT </span></a></li>";
						echo "</ul>";
			 echo " </li>";	
			
             
           			 
	  echo "</ul>";
echo "</li>";


echo "<li><a href=\"#\" class=\"parent\"><span>Unite/Distribution</span></a>"; 
     echo "<ul>";
			 echo " <li><a href=\"#\" class=\"parent\"><span>Patient suivie</span></a>";
						echo "<ul>";
						
						echo " <li><a href=\"index.php?uc=NHEMO\"><span> Nouveau  Hemodialyse</span></a></li>";
						echo " <li><a href=\"index.php?uc=LISTMHEMO\"><span>List Hemodialyse</span></a></li>";
						
						
						echo "</ul>";
			 echo " </li>";	
			 echo " <li><a href=\"#\" class=\"parent\"><span>Patient sortant</span></a>";
						echo "<ul>";
						echo " <li><a href=\"index.php?uc=HEMOSORT\"><span>LIST Hemodialyse SORT </span></a></li>";
						echo "</ul>";
			 echo " </li>";	
			
             
           			 
	  echo "</ul>";
echo "</li>";	 
echo "<li><a href=\"#\" class=\"parent\"><span>Unite/Malade</span></a>"; 
     echo "<ul>";
			 echo " <li><a href=\"#\" class=\"parent\"><span>Patient suivie</span></a>";
						echo "<ul>";
						
						echo " <li><a href=\"index.php?uc=NHEMO\"><span> Nouveau  Hemodialyse</span></a></li>";
						echo " <li><a href=\"index.php?uc=LISTMHEMO\"><span>List Hemodialyse</span></a></li>";
						
						
						echo "</ul>";
			 echo " </li>";	
			 echo " <li><a href=\"#\" class=\"parent\"><span>Patient sortant</span></a>";
						echo "<ul>";
						echo " <li><a href=\"index.php?uc=HEMOSORT\"><span>LIST Hemodialyse SORT </span></a></li>";
						echo "</ul>";
			 echo " </li>";	
			
             
           			 
	  echo "</ul>";
echo "</li>";	

//********************************************************************************//
echo "</ul>"; 
echo "</li>";
echo "<li><a href=\"index.php?uc=accueil\" class=\"parent\"><span>outils</span></a>"; 
echo "<ul>"; 
//******************************************************************************************//
echo "<li><a href=\"#\" class=\"parent\"><span>classification maladies</span></a>"; 
     echo "<ul>";
			 echo " <li><a href=\"#\" class=\"parent\"><span>patient</span></a>";
						echo "<ul>";
						
						echo " <li><a href=\"index.php?uc=LCIM\"><span>CIM</span></a></li>";
						
						echo "</ul>";
			 echo " </li>";	
			 
           			 
	  echo "</ul>";
echo "</li>";	 

echo "<li><a href=\"#\" class=\"parent\"><span>pharmacologie</span></a>"; 
     echo "<ul>";
			 echo " <li><a href=\"#\" class=\"parent\"><span>malade hospitalise</span></a>";
						echo "<ul>";
						echo " <li><a href=\"index.php?uc=LMED\"><span>MED</span></a></li>";
						
						echo "</ul>";
			 echo " </li>";	
			 
           			 
	  echo "</ul>";
echo "</li>";



//********************************************************************************//
echo "</ul>"; 
echo "</li>";
echo "<li><a href=\"\" class=\"parent\"><span>"." La Date Du Jours  :".date("d-m-Y")."</span></a></li>"; 
echo "<li><a href=\"\" class=\"parent\"><span>"." Vous etes Connecté  :<< ".$_SESSION["USER"]." >>"."</span></a></li>"; 
$W=nbrtostring("gpts2012","wrs","IDWIL",$_SESSION["WILAYA"],"WILAYAS");
echo "<li><a href=\"\" class=\"parent\"><span>"." WILAYA:  :<<  ".$W."   >>"."</span></a></li>"; 
$C=nbrtostring("gpts2012","COM","IDCOM",$_SESSION["COMMUNE"],"COMMUNE");
echo "<li><a href=\"\" class=\"parent\"><span>"." COMMUNE:  :<<  ".$C."   >>"."</span></a></li>"; 
echo "<li><a href=\"\" class=\"parent\"><span>"." SERVICE:  :<<  ".$_SESSION["SERVICE"]."   >>"."</span></a></li>"; 
echo "<li><a href=\"index.php?uc=DECONNECTION\" class=\"parent\"><span>Deconnection</span></a></li>"; 

// echo "<div class=\"header\">"; 
// echo "<H3> AGENCE  NATIONALE DU SANG </H3>";
// echo "<H3>"; 
// function nbrtostring($db_name,$tb_name,$colonename,$colonevalue,$resultatstring) 
	// {
	// $db_host="localhost"; 
    // $db_user="root";
    // $db_pass="";
    // $cnx = mysql_connect($db_host,$db_user,$db_pass)or die ('I cannot connect to the database because: ' . mysql_error());
    // $db  = mysql_select_db($db_name,$cnx) ;
    // mysql_query("SET NAMES 'UTF8' ");
    // $result = mysql_query("SELECT * FROM $tb_name where $colonename=$colonevalue" );
    // $row=mysql_fetch_object($result);
	// $resultat=$row->$resultatstring;
	// return $resultat;
	// }
// echo "REGION:   "."      ["
// .nbrtostring("gpts2012","ars","IDARS",$_SESSION["REGION"],"WILAYAS")."]    WILAYA:    ["
// .nbrtostring("gpts2012","wrs","IDWIL",$_SESSION["WILAYA"],"WILAYAS")."]    STRUCTURE: ["   
// .nbrtostring("gpts2012","cts","IDCTS",$_SESSION["STRUCTURE"],"CTS") ."]    SERVICE:   [" 
// .$_SESSION["SERVICE"]."]";
// echo "</H3>";
// echo "</div>";
// echo "<div id=\"menu\">";
// echo "<ul class=\"menu\">";
// echo "<li><a href=\"index.php?uc=accueil\" class=\"parent\"><span>Acceuil</span></a>";
// echo "<div><ul>";
// echo "<li><a href=\"\" class=\"parent\"><span>Unite/Donneur</span></a>";
// echo "<div>";
// echo "<ul>";
// echo "<li><a href=\"index.php?uc=NDNR\"><span>Nouveau Don</span></a></li>";
// echo "<li><a href=\"index.php?uc=searchdnr\"><span>Chreche Donneur</span></a></li>";
// echo "<li><a href=\"index.php?uc=searchdnrjs\"><span>Chreche Nom Donneur</span></a></li>";
// echo "<li><a href=\"index.php?uc=DNRDUJOUR\"><span>Donneur Du jour</span></a></li> ";
// echo "<li><a href=\"\" class=\"parent\"><span>Donneurs </span></a>";
// echo "<div><ul>";

// echo "<li><a href=\"index.php?uc=DNRIND\"><span>Donneur IND</span></a></li>";
// echo "<li><a href=\"index.php?uc=DNRCI\"><span>Donneur CINDT</span></a></li>";
// echo "<li><a href=\"index.php?uc=DNRCINDD\"><span>Donneur CINDD</span></a></li>";
// echo "<li><a href=\"index.php?uc=listdnr\"><span>Donnneurs par list</span></a></li>";
// echo "<li><a href=\"index.php?uc=ppp\"><span>Donnneurs par page</span></a></li>";
// echo "<li><a href=\"index.php?uc=DPD\"><span>don par donneur</span></a></li>";

// echo "<li><a href=\"index.php?uc=slistdnr10\"><span>liste ancien dons </span></a></li>";

// echo "</ul></div>";
// echo "</li>";
// ?>												
							