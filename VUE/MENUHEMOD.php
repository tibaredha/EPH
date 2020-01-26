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
echo "<li><a href=\"index.php?uc=accueil\" class=\"parent\"><span>Menu Patient Hemodialyse</span></a>"; 
echo "<ul>"; 
//******************************************************************************************//
echo "<li><a href=\"#\" class=\"parent\"><span>Patient Hemodialyse</span></a>"; 
     echo "<ul>";
			 echo " <li><a href=\"#\" class=\"parent\"><span>Patient suivie</span></a>";
						echo "<ul>";
						
						echo " <li><a href=\"index.php?uc=NHEMO\"><span> Nouveau  Hemodialyse</span></a></li>";
						echo " <li><a href=\"index.php?uc=LISTMHEMO\"><span>List Hemodialyse</span></a></li>";
						
						// echo " <li><a href=\"index.php?uc=LMED\"><span>MED</span></a></li>";
						// echo " <li><a href=\"index.php?uc=LCIM\"><span>CIM</span></a></li>";
						// echo " <li><a href=\"index.php?uc=LIT1\"><span>ajout lit</span></a></li>";
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
?>	



